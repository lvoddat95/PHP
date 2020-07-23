var App = function () {


    //
    // Setup module components
    //

    // Transitions
    // -------------------------

    // Disable all transitions
    var _transitionsDisabled = function() {
        $('body').addClass('no-transitions');
    };

    // Enable all transitions
    var _transitionsEnabled = function() {
        $('body').removeClass('no-transitions');
    };


    // Sidebars
    // -------------------------

    //
    // On desktop
    //

    // Resize main sidebar
    var _sidebarMainResize = function() {

        // Flip 2nd level if menu overflows
        // bottom edge of browser window
        var revertBottomMenus = function() {
            $('.sidebar-main').find('.nav-sidebar').children('.nav-item-submenu').hover(function() {
                var totalHeight = 0,
                    $this = $(this),
                    navSubmenuClass = 'nav-group-sub',
                    navSubmenuReversedClass = 'nav-item-submenu-reversed';

                totalHeight += $this.find('.' + navSubmenuClass).filter(':visible').outerHeight();
                if($this.children('.' + navSubmenuClass).length) {
                    if(($this.children('.' + navSubmenuClass).offset().top + $this.find('.' + navSubmenuClass).filter(':visible').outerHeight()) > document.body.clientHeight) {
                        $this.addClass(navSubmenuReversedClass)
                    }
                    else {
                        $this.removeClass(navSubmenuReversedClass)
                    }
                }
            });
        }

        // If sidebar is resized by default
        if($('body').hasClass('sidebar-xs')) {
            revertBottomMenus();
        }

        // Toggle min sidebar class
        $('.sidebar-main-toggle').on('click', function (e) {
            e.preventDefault();

            $('body').toggleClass('sidebar-xs').removeClass('sidebar-mobile-main');
           
            revertBottomMenus();
        });
    };

    // Toggle main sidebar
    var _sidebarMainToggle = function() {
        $(document).on('click', '.sidebar-main-hide', function (e) {
            e.preventDefault();
            $('body').toggleClass('sidebar-main-hidden');
        });
    };

    // Toggle content sidebar
    var _sidebarComponentToggle = function() {
        $(document).on('click', '.sidebar-component-toggle', function (e) {
            e.preventDefault();
            $('body').toggleClass('sidebar-component-hidden');
        });
    };


    //
    // On mobile
    //


    // Toggle main sidebar on mobile
    var _sidebarMobileMainToggle = function() {
        $('.sidebar-mobile-main-toggle').on('click', function(e) {
            e.preventDefault();
            $('body').toggleClass('sidebar-mobile-main').removeClass('sidebar-mobile-secondary sidebar-mobile-right');
            $('.page-content').prepend('<div class="sb-overlay"></div>');
            
            if($('.sidebar-main').hasClass('sidebar-fullscreen')) {
                $('.sidebar-main').removeClass('sidebar-fullscreen');
            }
        });

        $('.sidebar-mobile-main-close').on('click', function(e) {
            e.preventDefault();
            $('body').removeClass('sidebar-mobile-main');
            $('.sb-overlay').remove();
        });
    };

    $('body').on('click', '.sb-overlay', function(e) {
        e.preventDefault();
        $('body').removeClass('sidebar-mobile-main');
        $(this).remove();
    });

    // Toggle component sidebar on mobile
    var _sidebarMobileComponentToggle = function() {
        $('.sidebar-mobile-component-toggle').on('click', function (e) {
            e.preventDefault();
            $('body').toggleClass('sidebar-mobile-component');
        });
    };


    // Navigations
    // -------------------------

    // Sidebar navigation
    var _navigationSidebar = function() {

        // Define default class names and options
        var navClass = 'nav-sidebar',
            navItemClass = 'nav-item',
            navItemOpenClass = 'nav-item-open',
            navLinkClass = 'nav-link',
            navSubmenuClass = 'nav-group-sub',
            navSlidingSpeed = 250;

        // Configure collapsible functionality
        $('.' + navClass).each(function() {
            $(this).find('.' + navItemClass).has('.' + navSubmenuClass).children('.' + navItemClass + ' > ' + '.' + navLinkClass).not('.disabled').on('click', function (e) {
                e.preventDefault();

                // Simplify stuff
                var $target = $(this),
                    $navSidebarMini = $('.sidebar-xs').not('.sidebar-mobile-main').find('.sidebar-main .' + navClass).children('.' + navItemClass);

                // Collapsible
                if($target.parent('.' + navItemClass).hasClass(navItemOpenClass)) {
                    $target.parent('.' + navItemClass).not($navSidebarMini).removeClass(navItemOpenClass).children('.' + navSubmenuClass).slideUp(navSlidingSpeed);
                }
                else {
                    $target.parent('.' + navItemClass).not($navSidebarMini).addClass(navItemOpenClass).children('.' + navSubmenuClass).slideDown(navSlidingSpeed);
                }

                // Accordion
                if ($target.parents('.' + navClass).data('nav-type') == 'accordion') {
                    $target.parent('.' + navItemClass).not($navSidebarMini).siblings(':has(.' + navSubmenuClass + ')').removeClass(navItemOpenClass).children('.' + navSubmenuClass).slideUp(navSlidingSpeed);
                }
            });
        });

        // Disable click in disabled navigation items
        $(document).on('click', '.' + navClass + ' .disabled', function(e) {
            e.preventDefault();
        });

        // Scrollspy navigation
        $('.nav-scrollspy').find('.' + navItemClass).has('.' + navSubmenuClass).children('.' + navItemClass + ' > ' + '.' + navLinkClass).off('click');
    };

    // Navbar navigation
    var _navigationNavbar = function() {

        // Prevent dropdown from closing on click
        $(document).on('click', '.dropdown-content', function(e) {
            e.stopPropagation();
        });

        // Disabled links
        $('.navbar-nav .disabled a, .nav-item-levels .disabled').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });

        // Show tabs inside dropdowns
        $('.dropdown-content a[data-toggle="tab"]').on('click', function(e) {
            $(this).tab('show');
        });
    };


    // Card actions
    // -------------------------

    // Reload card (uses BlockUI extension)
    var _cardActionReload = function() {
        $('.card [data-action=reload]:not(.disabled)').on('click', function (e) {
            e.preventDefault();
            var $target = $(this),
                block = $target.closest('.card');
            
            // Block card
            $(block).block({ 
                message: '<i class="icon-spinner2 spinner"></i>',
                overlayCSS: {
                    backgroundColor: '#fff',
                    opacity: 0.8,
                    cursor: 'wait',
                    'box-shadow': '0 0 0 1px #ddd'
                },
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'none'
                }
            });

            // For demo purposes
            window.setTimeout(function () {
               $(block).unblock();
            }, 2000); 
        });
    };

    // Collapse card
    var _cardActionCollapse = function() {
        var $cardCollapsedClass = $('.card-collapsed');

        // Hide if collapsed by default
        $cardCollapsedClass.children('.card-header').nextAll().hide();

        // Rotate icon if collapsed by default
        $cardCollapsedClass.find('[data-action=collapse]');

        // Collapse on click
        $('.card [data-action=collapse]:not(.disabled)').on('click', function (e) {
            var $target = $(this),
                slidingSpeed = 150;

            e.preventDefault();
            $target.parents('.card').toggleClass('card-collapsed');
            $target.closest('.card').children('.card-header').nextAll().slideToggle(slidingSpeed);
        });
    };

    // Remove card
    var _cardActionRemove = function() {
        $('.card [data-action=remove]').on('click', function (e) {
            e.preventDefault();
            var $target = $(this),
                slidingSpeed = 150;

            // If not disabled
            if(!$target.hasClass('disabled')) {
                $target.closest('.card').slideUp({
                    duration: slidingSpeed,
                    start: function() {
                        $target.addClass('d-block');
                    },
                    complete: function() {
                        $target.remove();
                    }
                });
            }
        });
    };

    // Card fullscreen mode
    var _cardActionFullscreen = function() {
        $('.card [data-action=fullscreen]').on('click', function (e) {
            e.preventDefault();

            // Define vars
            var $target = $(this),
                cardFullscreen = $target.closest('.card'),
                overflowHiddenClass = 'overflow-hidden',
                collapsedClass = 'collapsed-in-fullscreen',
                fullscreenAttr = 'data-fullscreen';

            // Toggle classes on card
            cardFullscreen.toggleClass('fixed-top h-100 rounded-0');

            // Configure
            if (!cardFullscreen.hasClass('fixed-top')) {
                $target.removeAttr(fullscreenAttr);
                cardFullscreen.children('.' + collapsedClass).removeClass('show');
                $('body').removeClass(overflowHiddenClass);
                $target.siblings('[data-action=move], [data-action=remove], [data-action=collapse]').removeClass('d-none');
            }
            else {
                $target.attr(fullscreenAttr, 'active');
                cardFullscreen.removeAttr('style').children('.collapse:not(.show)').addClass('show ' + collapsedClass);
                $('body').addClass(overflowHiddenClass);
                $target.siblings('[data-action=move], [data-action=remove], [data-action=collapse]').addClass('d-none');
            }
        });
    };


    // Misc
    // -------------------------

    // Dropdown submenus. Trigger on click
    var _dropdownSubmenu = function() {

        // All parent levels require .dropdown-toggle class
        $('.dropdown-menu').find('.dropdown-submenu').not('.disabled').find('.dropdown-toggle').on('click', function(e) {
            e.stopPropagation();
            e.preventDefault();

            // Remove "show" class in all siblings
            $(this).parent().siblings().removeClass('show').find('.show').removeClass('show');

            // Toggle submenu
            $(this).parent().toggleClass('show').children('.dropdown-menu').toggleClass('show');

            // Hide all levels when parent dropdown is closed
            $(this).parents('.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show, .dropdown-submenu.show').removeClass('show');
            });
        });
    };

    // Header elements toggler
    var _headerElements = function() {

        // Toggle visible state of header elements
        $('.header-elements-toggle').on('click', function(e) {
            e.preventDefault();
            $(this).parents('[class*=header-elements-]').find('.header-elements').toggleClass('d-none');
        });

        // Toggle visible state of footer elements
        $('.footer-elements-toggle').on('click', function(e) {
            e.preventDefault();
            $(this).parents('.card-footer').find('.footer-elements').toggleClass('d-none');
        });
    };


    // Components
    // -------------------------

    // Tooltip
    var _component_tooltip = function() {

        // Initialize
        $('[data-popup="tooltip"]').tooltip();

        // Demo tooltips, remove in production
        var demoTooltipSelector = '[data-popup="tooltip-demo"]';
        if($(demoTooltipSelector).is(':visible')) {
            $(demoTooltipSelector).tooltip('show');
            setTimeout(function() {
                $(demoTooltipSelector).tooltip('hide');
            }, 2000);
        }
    };

    // Popover
    var _component_popover = function() {
        $('[data-popup="popover"]').popover();
    };

   
    
    var _component_tooltip_tipsy = function(){
        if ($('[data-tooltip="tipsy"]').length > 0) {
            if (!$().tipsy) {
                console.warn('Warning - Tipsy js is not loaded.');
            }
            $('[data-tooltip="tipsy"]').each(function (index) {
                var $this = $(this);
                var v_gravity = '';
                var v_pos = $this.data('position');
    
                // Mac dinh hien thi "top"
                if (!v_pos){
                    v_gravity = 's';
                }else if( v_pos == 'bottom' ){
                    v_gravity = 'n';
                }else if( v_pos == 'left' ){
                    v_gravity = 'e';
                }else if( v_pos == 'right' ){
                    v_gravity = 'w';
                }else if( v_pos == 'bottom-left' ){
                    v_gravity = 'ne';
                }else if( v_pos == 'bottom-right' ){
                    v_gravity = 'nw';
                }else if( v_pos == 'top-left' ){
                    v_gravity = 'se';
                }else if( v_pos == 'top-right' ){
                    v_gravity = 'sw';
                }
    
                $this.tipsy({
                    gravity: v_gravity,
                });
            });
    
        }
    }

    // Select2
    var _component_select2 = function(p_select) {

        var select = $('[select2]');
        if (p_select) select = p_select;

        if ($(select).length > 0) {
            if (!$().select2) {
                console.warn('Warning - select2.min.js is not loaded.');
            }
            $(select).select2({ 
                language: "vi",
                minimumResultsForSearch: 5,
                width: '100%',
                placeholder: "--- Chọn ---"
            });
        }
    }
    
    // Datepicker
    var _component_datepicker = function(p_datepicker){
        var datepicker = $('.datepicker');
        if (p_datepicker) datepicker = p_datepicker;
        if ($().datepicker) {
            $(datepicker).datepicker({
                language: "vi",
                todayBtn: "linked",
            });
        }
    }
    
    // Cleave js: dinh dang kieu nhap du lieu input
    var _component_input_type = function(){
        $('.input-money').toArray().forEach(function (field) {
            new Cleave(field, {
                numeral: true,
                numeralThousandsGroupStyle: 'thousand',
            });
        });
    
        $('.input-date').toArray().forEach(function (field) {
            new Cleave(field, {
                date: true,
                delimiter: '/',
                datePattern: ['d', 'm', 'Y'],
                copyDelimiter: true,
            });
        });
    
        $('.input-time').toArray().forEach(function (field) {
            new Cleave(field, {
                time: true,
                timePattern: ['h', 'm'],
                copyDelimiter: true,
            });
        });
    
        $('.input-float').toArray().forEach(function (field) {
            new Cleave(field, {
                blocks: [2, 4],
                numeral: true,
                delimiter: '',
                copyDelimiter: true,
            });
        });
        $('.input-number').toArray().forEach(function (field) {
            new Cleave(field, {
                numericOnly: true,
            });
        });
        $('.input-phone').toArray().forEach(function (field) {
            new Cleave(field, {
                phone: true,
                phoneRegionCode: 'VN',
            });
        });
    }

    var _component_repeater = function(){
        if ($('[repeater]').length > 0) {
            if (!$().repeater) {
                console.warn('Warning - repeater js is not loaded.');
            }
            $('[repeater]').each(function( index ) {
                $(this).repeater({
                    show: function () {
                        var v_table = $(this).closest('table');
                        var v_select = v_table.find('[select2]');
                        var v_datepicker = v_table.find('.datepicker');
                        $(this).slideDown();
                        _component_input_type();
                        _component_datepicker(v_datepicker);
                        _component_select2(v_select);

                    },
                    hide: function (deleteElement) {
                        if(confirm('Xoa dong nay ?')) {
                            $(this).slideUp(deleteElement);
                        }
                    }
                });
            });
    
        }
    }

    // DateRange js
    var _component_daterange = function() {
        if (!$().daterangepicker) {
            console.warn('Warning - daterangepicker.js is not loaded.');
            return;
        }
        // Initialize
        $('.daterange-ranges').daterangepicker(
            {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2010',
                maxDate:  '01/01/2020',
                dateLimit: { days: 6000 },
                ranges: {
                    'Hôm nay': [moment(), moment()],
                    'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 ngày trước': [moment().subtract(6, 'days'), moment()],
                    'Tháng trước': [moment().subtract(29, 'days'), moment()],
                    'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                    'Tháng sau': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: $('html').attr('dir') == 'rtl' ? 'right' : 'left',
                applyClass: 'btn bg-color btn-block',
                cancelClass: 'btn btn-light btn-block',
                locale: {
                    format: 'DD/MM/YYYY',
                    direction: $('html').attr('dir') == 'rtl' ? 'rtl' : 'ltr',
                    applyLabel: 'Chọn',
                    cancelLabel: 'Xóa',
                    startLabel: 'Ngày bắt đầu',
                    endLabel: 'Ngày kết thúc',
                    customRangeLabel: 'Tùy chỉnh',
                }
            },
            function(start, end) {
                $('.daterange-ranges span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
            }
        );
        $('.daterange-ranges span').html(moment().subtract(29, 'days').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
    };


    // Chart
    // -------------------------

    // D3 Marketing campaigns donut chart
    var _MarketingCampaignsDonutChart = function(element, size) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if($(element).length > 0) {


            // Basic setup
            // ------------------------------

            // Add data set
            var data = [
                {
                    "browser": "Google Adwords",
                    "icon": "<i class='icon-google mr-2'></i>",
                    "value": 1047
                }, {
                    "browser": "Social media",
                    "icon": "<i class='icon-share4 mr-2'></i>",
                    "value": 2948
                }, {
                    "browser": "Youtube video",
                    "icon": "<i class='icon-youtube mr-2'></i>",
                    "value": 3909
                }
            ];

            // Main variables
            var d3Container = d3.select(element),
                distance = 2, // reserve 2px space for mouseover arc moving
                radius = (size/2) - distance,
                sum = d3.sum(data, function(d) { return d.value; });

            // Colors
            var colorrange = ['#66BB6A','#9575CD','#FF7043'];



            // Tooltip
            // ------------------------------

            var tip = d3.tip()
                .attr('class', 'd3-tip')
                .offset([-10, 0])
                .direction('e')
                .html(function (d) {
                    return '<ul class="list-unstyled mb-1">' +
                        '<li>' + '<div class="font-size-base mb-1 mt-1">' + d.data.icon + d.data.browser + '</div>' + '</li>' +
                        '<li>' + 'Visits: &nbsp;' + '<span class="font-weight-semibold float-right">' + d.value + '</span>' + '</li>' +
                        '<li>' + 'Share: &nbsp;' + '<span class="font-weight-semibold float-right">' + (100 / (sum / d.value)).toFixed(2) + '%' + '</span>' + '</li>' +
                    '</ul>';
                });


            // Create chart
            // ------------------------------

            // Add svg element
            var container = d3Container.append('svg').call(tip);
            
            // Add SVG group
            var svg = container
                .attr('width', size)
                .attr('height', size)
                .append('g')
                    .attr('transform', 'translate(' + (size / 2) + ',' + (size / 2) + ')');  



            // Construct chart layout
            // ------------------------------

            // Pie
            var pie = d3.layout.pie()
                .sort(null)
                .startAngle(Math.PI)
                .endAngle(3 * Math.PI)
                .value(function (d) { 
                    return d.value;
                }); 

            // Arc
            var arc = d3.svg.arc()
                .outerRadius(radius)
                .innerRadius(radius / 2);

            // Colors
            var colors = d3.scale.ordinal().range(colorrange);



            //
            // Append chart elements
            //

            // Group chart elements
            var arcGroup = svg.selectAll('.d3-arc')
                .data(pie(data))
                .enter()
                .append('g') 
                    .attr('class', 'd3-arc d3-slice-border')
                    .style('cursor', 'pointer');
            
            // Append path
            var arcPath = arcGroup
                .append('path')
                .style('fill', function (d) { return colors(d.data.value); });

            // Add tooltip
            arcPath
                .on('mouseover', function (d, i) {

                    // Transition on mouseover
                    d3.select(this)
                    .transition()
                        .duration(500)
                        .ease('elastic')
                        .attr('transform', function (d) {
                            d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
                            var x = Math.sin(d.midAngle) * distance;
                            var y = -Math.cos(d.midAngle) * distance;
                            return 'translate(' + x + ',' + y + ')';
                        });
                })

                .on('mousemove', function (d) {
                    
                    // Show tooltip on mousemove
                    tip.show(d)
                        .style('top', (d3.event.pageY - 40) + 'px')
                        .style('left', (d3.event.pageX + 30) + 'px');
                })

                .on('mouseout', function (d, i) {

                    // Mouseout transition
                    d3.select(this)
                    .transition()
                        .duration(500)
                        .ease('bounce')
                        .attr('transform', 'translate(0,0)');

                    // Hide tooltip
                    tip.hide(d);
                });

            // Animate chart on load
            arcPath
                .transition()
                    .delay(function(d, i) { return i * 500; })
                    .duration(500)
                    .attrTween('d', function(d) {
                        var interpolate = d3.interpolate(d.startAngle,d.endAngle);
                        return function(t) {
                            d.endAngle = interpolate(t);
                            return arc(d);  
                        }; 
                    });
        }
    };

    // D3 Campaign status donut chart
    var _CampaignStatusDonutChart = function(element, size) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if($(element).length > 0) {


            // Basic setup
            // ------------------------------

            // Add data set
            var data = [
                {
                    "status": "Active campaigns",
                    "icon": "<i class='icon-checkmark3 text-success mr-2'></i>",
                    "value": 439
                }, {
                    "status": "Closed campaigns",
                    "icon": "<i class='icon-cross2 text-danger mr-2'></i>",
                    "value": 290
                }, {
                    "status": "Pending campaigns",
                    "icon": "<i class='icon-history text-blue mr-2'></i>",
                    "value": 190
                }, {
                    "status": "Campaigns on hold",
                    "icon": "<i class='icon-infinite text-grey mr-2'></i>",
                    "value": 148
                }
            ];

            // Main variables
            var d3Container = d3.select(element),
                distance = 2, // reserve 2px space for mouseover arc moving
                radius = (size/2) - distance,
                sum = d3.sum(data, function(d) { return d.value; });

            // Colors
            var colorrange = ['#29B6F6', '#EF5350', '#81C784', '#999'];



            // Tooltip
            // ------------------------------

            var tip = d3.tip()
                .attr('class', 'd3-tip')
                .offset([-10, 0])
                .direction('e')
                .html(function (d) {
                    return '<ul class="list-unstyled mb-1">' +
                        '<li>' + '<div class="font-size-base mb-1 mt-1">' + d.data.icon + d.data.status + '</div>' + '</li>' +
                        '<li>' + 'Total: &nbsp;' + '<span class="font-weight-semibold float-right">' + d.value + '</span>' + '</li>' +
                        '<li>' + 'Share: &nbsp;' + '<span class="font-weight-semibold float-right">' + (100 / (sum / d.value)).toFixed(2) + '%' + '</span>' + '</li>' +
                    '</ul>';
                });



            // Create chart
            // ------------------------------

            // Add svg element
            var container = d3Container.append('svg').call(tip);
            
            // Add SVG group
            var svg = container
                .attr('width', size)
                .attr('height', size)
                .append('g')
                    .attr('transform', 'translate(' + (size / 2) + ',' + (size / 2) + ')');  



            // Construct chart layout
            // ------------------------------

            // Pie
            var pie = d3.layout.pie()
                .sort(null)
                .startAngle(Math.PI)
                .endAngle(3 * Math.PI)
                .value(function (d) { 
                    return d.value;
                }); 

            // Arc
            var arc = d3.svg.arc()
                .outerRadius(radius)
                .innerRadius(radius / 2);

            // Colors
            var colors = d3.scale.ordinal().range(colorrange);



            //
            // Append chart elements
            //

            // Group chart elements
            var arcGroup = svg.selectAll('.d3-arc')
                .data(pie(data))
                .enter()
                .append('g') 
                    .attr('class', 'd3-arc d3-slice-border')
                    .style('cursor', 'pointer');
            
            // Append path
            var arcPath = arcGroup
                .append('path')
                .style('fill', function (d) { return colors(d.data.value); });

            // Add tooltip
            arcPath
                .on('mouseover', function (d, i) {

                    // Transition on mouseover
                    d3.select(this)
                    .transition()
                        .duration(500)
                        .ease('elastic')
                        .attr('transform', function (d) {
                            d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
                            var x = Math.sin(d.midAngle) * distance;
                            var y = -Math.cos(d.midAngle) * distance;
                            return 'translate(' + x + ',' + y + ')';
                        });
                })

                .on('mousemove', function (d) {
                    
                    // Show tooltip on mousemove
                    tip.show(d)
                        .style('top', (d3.event.pageY - 40) + 'px')
                        .style('left', (d3.event.pageX + 30) + 'px');
                })

                .on('mouseout', function (d, i) {

                    // Mouseout transition
                    d3.select(this)
                    .transition()
                        .duration(500)
                        .ease('bounce')
                        .attr('transform', 'translate(0,0)');

                    // Hide tooltip
                    tip.hide(d);
                });

            // Animate chart on load
            arcPath
                .transition()
                    .delay(function(d, i) { return i * 500; })
                    .duration(500)
                    .attrTween('d', function(d) {
                        var interpolate = d3.interpolate(d.startAngle,d.endAngle);
                        return function(t) {
                            d.endAngle = interpolate(t);
                            return arc(d);  
                        }; 
                    });
        }
    };

    // D3 Tickets status donut chart
    var _TicketStatusDonutChart = function(element, size) {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Initialize chart only if element exsists in the DOM
        if($(element).length > 0) {


            // Basic setup
            // ------------------------------

            // Add data set
            var data = [
                {
                    "status": "Pending tickets",
                    "icon": "<i class='icon-history text-blue mr-2'></i>",
                    "value": 295
                }, {
                    "status": "Resolved tickets",
                    "icon": "<i class='icon-checkmark3 text-success mr-2'></i>",
                    "value": 189
                }, {
                    "status": "Closed tickets",
                    "icon": "<i class='icon-cross2 text-danger mr-2'></i>",
                    "value": 277
                }
            ];

            // Main variables
            var d3Container = d3.select(element),
                distance = 2, // reserve 2px space for mouseover arc moving
                radius = (size/2) - distance,
                sum = d3.sum(data, function(d) { return d.value; });

            // Colors
            var colorrange = ['#29B6F6','#66BB6A','#EF5350'];



            // Tooltip
            // ------------------------------

            var tip = d3.tip()
                .attr('class', 'd3-tip')
                .offset([-10, 0])
                .direction('e')
                .html(function (d) {
                    return '<ul class="list-unstyled mb-1">' +
                        '<li>' + '<div class="font-size-base mb-1 mt-1">' + d.data.icon + d.data.status + '</div>' + '</li>' +
                        '<li>' + 'Total: &nbsp;' + '<span class="font-weight-semibold float-right">' + d.value + '</span>' + '</li>' +
                        '<li>' + 'Share: &nbsp;' + '<span class="font-weight-semibold float-right">' + (100 / (sum / d.value)).toFixed(2) + '%' + '</span>' + '</li>' +
                    '</ul>';
                });



            // Create chart
            // ------------------------------

            // Add svg element
            var container = d3Container.append('svg').call(tip);
            
            // Add SVG group
            var svg = container
                .attr('width', size)
                .attr('height', size)
                .append('g')
                    .attr('transform', 'translate(' + (size / 2) + ',' + (size / 2) + ')');  



            // Construct chart layout
            // ------------------------------

            // Pie
            var pie = d3.layout.pie()
                .sort(null)
                .startAngle(Math.PI)
                .endAngle(3 * Math.PI)
                .value(function (d) { 
                    return d.value;
                }); 

            // Arc
            var arc = d3.svg.arc()
                .outerRadius(radius)
                .innerRadius(radius / 2);

            // Colors
            var colors = d3.scale.ordinal().range(colorrange);


            //
            // Append chart elements
            //

            // Group chart elements
            var arcGroup = svg.selectAll('.d3-arc')
                .data(pie(data))
                .enter()
                .append('g') 
                    .attr('class', 'd3-arc d3-slice-border')
                    .style('cursor', 'pointer');
            
            // Append path
            var arcPath = arcGroup
                .append('path')
                .style('fill', function (d) { return colors(d.data.value); });

            // Add tooltip
            arcPath
                .on('mouseover', function (d, i) {

                    // Transition on mouseover
                    d3.select(this)
                    .transition()
                        .duration(500)
                        .ease('elastic')
                        .attr('transform', function (d) {
                            d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
                            var x = Math.sin(d.midAngle) * distance;
                            var y = -Math.cos(d.midAngle) * distance;
                            return 'translate(' + x + ',' + y + ')';
                        });
                })

                .on('mousemove', function (d) {
                    
                    // Show tooltip on mousemove
                    tip.show(d)
                        .style('top', (d3.event.pageY - 40) + 'px')
                        .style('left', (d3.event.pageX + 30) + 'px');
                })

                .on('mouseout', function (d, i) {

                    // Mouseout transition
                    d3.select(this)
                    .transition()
                        .duration(500)
                        .ease('bounce')
                        .attr('transform', 'translate(0,0)');

                    // Hide tooltip
                    tip.hide(d);
                });

            // Animate chart on load
            arcPath
                .transition()
                    .delay(function(d, i) { return i * 500; })
                    .duration(500)
                    .attrTween('d', function(d) {
                        var interpolate = d3.interpolate(d.startAngle,d.endAngle);
                        return function(t) {
                            d.endAngle = interpolate(t);
                            return arc(d);  
                        }; 
                    });
        }
    };

    // C3 Chart
    var _barsPiesExamples = function() {
        if (typeof c3 == 'undefined') {
            console.warn('Warning - c3.min.js is not loaded.');
            return;
        }

        // Define charts elements
        var pie_chart_element = document.getElementById('c3-pie-chart');
        var pie_chart_element2 = document.getElementById('c3-pie-chart2');
        var pie_chart_element3 = document.getElementById('c3-pie-chart3');
        var pie_chart_element4 = document.getElementById('c3-pie-chart4');

        var donut_chart_element = document.getElementById('c3-donut-chart');
        var bar_chart_element = document.getElementById('c3-bar-chart');
        var bar_stacked_chart_element = document.getElementById('c3-bar-stacked-chart');
        var combined_chart_element = document.getElementById('c3-combined-chart');
        var scatter_chart_element = document.getElementById('c3-scatter-chart');


        // Pie chart
        if(pie_chart_element) {
            var data_size = pie_chart_element.getAttribute('data-size');
            var data_color = pie_chart_element.getAttribute('data-color');
            var data_columns = pie_chart_element.getAttribute('data-columns');

            // Generate chart
            var pie_chart = c3.generate({
                bindto: pie_chart_element,
                size: { width: data_size },
                color: {
                    pattern: data_color.split(',')
                },
                data: {
                    columns: JSON.parse("[" + data_columns + "]"),
                    type : 'pie'
                }
            });

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                pie_chart.resize();
            });
        }

        // Pie chart
        if(pie_chart_element2) {
            var data_size = pie_chart_element2.getAttribute('data-size');
            var data_color = pie_chart_element2.getAttribute('data-color');
            var data_columns = pie_chart_element2.getAttribute('data-columns');

            if(!data_size) data_size = '100%';

            // Generate chart
            var pie_chart = c3.generate({
                bindto: pie_chart_element2,
                size: { width: data_size },
                color: {
                    pattern: data_color.split(',')
                },
                data: {
                    columns: JSON.parse("[" + data_columns + "]"),
                    type : 'pie'
                }
            });

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                pie_chart.resize();
            });
        }

        // Pie chart
        if(pie_chart_element3) {
            var data_size = pie_chart_element3.getAttribute('data-size');
            var data_color = pie_chart_element3.getAttribute('data-color');
            var data_columns = pie_chart_element3.getAttribute('data-columns');

            // Generate chart
            var pie_chart = c3.generate({
                bindto: pie_chart_element3,
                size: { width: data_size },
                color: {
                    pattern: data_color.split(',')
                },
                data: {
                    columns: JSON.parse("[" + data_columns + "]"),
                    type : 'pie'
                }
            });

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                pie_chart.resize();
            });
        }

        // Pie chart
        if(pie_chart_element4) {
            var data_size = pie_chart_element4.getAttribute('data-size');
            var data_color = pie_chart_element4.getAttribute('data-color');
            var data_columns = pie_chart_element4.getAttribute('data-columns');

            // Generate chart
            var pie_chart = c3.generate({
                bindto: pie_chart_element4,
                size: { width: data_size },
                color: {
                    pattern: data_color.split(',')
                },
                data: {
                    columns: JSON.parse("[" + data_columns + "]"),
                    type : 'pie'
                }
            });

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                pie_chart.resize();
            });
        }


        // Donut chart
        if(donut_chart_element) {

            // Generate chart
            var donut_chart = c3.generate({
                bindto: donut_chart_element,
                size: { width: 350 },
                color: {
                    pattern: ['#3F51B5', '#FF9800', '#4CAF50', '#00BCD4', '#F44336']
                },
                data: {
                    columns: [
                        ['data1', 30],
                        ['data2', 120],
                    ],
                    type : 'donut'
                },
                donut: {
                    title: "Iris Petal Width"
                }
            });

            // Change data
            setTimeout(function () {
                donut_chart.load({
                    columns: [
                        ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                        ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                        ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                    ]
                });
            }, 4000);
            setTimeout(function () {
                donut_chart.unload({
                    ids: 'data1'
                });
                donut_chart.unload({
                    ids: 'data2'
                });
            }, 8000);

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                donut_chart.resize();
            });
        }

        // Bar chart
        if(bar_chart_element) {

            // Generate chart
            var bar_chart = c3.generate({
                bindto: bar_chart_element,
                size: { height: 400 },
                data: {
                    columns: [
                        ['data1', 30, 200, 100, 400, 150, 250],
                        ['data2', 130, 100, 140, 200, 150, 50]
                    ],
                    type: 'bar'
                },
                color: {
                    pattern: ['#2196F3', '#FF9800', '#4CAF50']
                },
                bar: {
                    width: {
                        ratio: 0.5
                    }
                },
                grid: {
                    y: {
                        show: true
                    }
                }
            });

            // Change data
            setTimeout(function () {
                bar_chart.load({
                    columns: [
                        ['data3', 130, -150, 200, 300, -200, 100]
                    ]
                });
            }, 6000);

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                bar_chart.resize();
            });
        }

        // Stacked bar chart
        if(bar_stacked_chart_element) {

            // Generate chart
            var bar_stacked_chart = c3.generate({
                bindto: bar_stacked_chart_element,
                size: { height: 400 },
                color: {
                    pattern: ['#FF9800', '#F44336', '#009688', '#4CAF50']
                },
                data: {
                    columns: [
                        ['data1', -30, 200, 200, 400, -150, 250],
                        ['data2', 130, 100, -100, 200, -150, 50],
                        ['data3', -230, 200, 200, -300, 250, 250]
                    ],
                    type: 'bar',
                    groups: [
                        ['data1', 'data2']
                    ]
                },
                grid: {
                    x: {
                        show: true
                    },
                    y: {
                        lines: [{value:0}]
                    }
                }
            });

            // Change data
            setTimeout(function () {
                bar_stacked_chart.groups([['data1', 'data2', 'data3']])
            }, 4000);
            setTimeout(function () {
                bar_stacked_chart.load({
                    columns: [['data4', 100, -50, 150, 200, -300, -100]]
                });
            }, 8000);
            setTimeout(function () {
                bar_stacked_chart.groups([['data1', 'data2', 'data3', 'data4']])
            }, 10000);

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                bar_stacked_chart.resize();
            });
        }

        // Combined chart
        if(combined_chart_element) {

            // Generate chart
            var combined_chart = c3.generate({
                bindto: combined_chart_element,
                size: { height: 400 },
                color: {
                    pattern: ['#FF9800', '#F44336', '#009688', '#4CAF50', '#03A9F4', '#8BC34A']
                },
                data: {
                    columns: [
                        ['data1', 30, 20, 50, 40, 60, 50],
                        ['data2', 200, 130, 90, 240, 130, 220],
                        ['data3', 300, 200, 160, 400, 250, 250],
                        ['data4', 200, 130, 90, 240, 130, 220],
                        ['data5', 130, 120, 150, 140, 160, 150],
                        ['data6', 90, 70, 20, 50, 60, 120],
                    ],
                    type: 'bar',
                    types: {
                        data3: 'spline',
                        data4: 'line',
                        data6: 'area',
                    },
                    groups: [
                        ['data1','data2']
                    ]
                }
            });

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                combined_chart.resize();
            });
        }

        // Scatter chart
        if(scatter_chart_element) {

            // Generate chart
            var scatter_chart = c3.generate({
                size: { height: 400 },
                bindto: scatter_chart_element,
                data: {
                    xs: {
                        setosa: 'setosa_x',
                        versicolor: 'versicolor_x',
                    },
                    columns: [
                        ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
                        ["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
                        ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                        ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                    ],
                    type: 'scatter'
                },
                color: {
                    pattern: ['#4CAF50', '#F44336']
                },
                grid: {
                    y: {
                        show: true
                    }
                },
                point: { r: 5 },
                axis: {
                    x: {
                        label: 'Sepal.Width',
                        tick: {
                            fit: false
                        }
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                }
            });

            // Change data
            setTimeout(function () {
                scatter_chart.load({
                    xs: {
                        virginica: 'virginica_x'
                    },
                    columns: [
                        ["virginica_x", 3.3, 2.7, 3.0, 2.9, 3.0, 3.0, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3.0, 2.5, 2.8, 3.2, 3.0, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3.0, 2.8, 3.0, 2.8, 3.8, 2.8, 2.8, 2.6, 3.0, 3.4, 3.1, 3.0, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3.0, 2.5, 3.0, 3.4, 3.0],
                        ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                    ]
                });
            }, 4000);
            setTimeout(function () {
                scatter_chart.unload({
                    ids: 'setosa'
                });
            }, 8000);
            setTimeout(function () {
                scatter_chart.load({
                    columns: [
                        ["virginica", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                    ]
                });
            }, 10000);

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                scatter_chart.resize();
            });
        }
    };


    var _component_steps_form = function() {
        if (!$().steps) {
            console.warn('Warning - steps.min.js is not loaded.');
            return;
        }


        //
        // Wizard with validation
        //

        // Stop function if validation is missing
        if (!$().validate) {
            console.warn('Warning - validate.min.js is not loaded.');
            return;
        }

        // Show form
        var form = $('.steps-validation').show();

        // Initialize wizard
        $('.steps-validation').steps({
            headerTag: 'h6',
            bodyTag: 'fieldset',
            titleTemplate: '<span class="number">#index#</span> #title#',
            labels: {
                current: "Bước đầu:",
                pagination: "Phân trang",
                finish: "Kết thúc",
                next: "Tiếp theo <i class='icon-arrow-right14' />",
                previous: "<i class='icon-arrow-left13' /> Quay lại",
                loading: "Loading ...",
                finish: '<i class="icon-floppy-disk" /> Cập nhập'
            },
            transitionEffect: 'fade',
            autoFocus: true,
            // onStepChanging: function (event, currentIndex, newIndex) {

            //     // Allways allow previous action even if the current form is not valid!
            //     if (currentIndex > newIndex) {
            //         return true;
            //     }

            //     // Needed in some cases if the user went back (clean up)
            //     if (currentIndex < newIndex) {

            //         // To remove error styles
            //         form.find('.body:eq(' + newIndex + ') label.error').remove();
            //         form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            //     }

            //     form.validate().settings.ignore = ':disabled,:hidden';
            //     return form.valid();
            // },
            // onFinishing: function (event, currentIndex) {
            //     form.validate().settings.ignore = ':disabled';
            //     return form.valid();
            // },
            onFinished: function (event, currentIndex) {
                if ($('#modal_form').length == 0 ) return;
                var v_tr = $('#ban_chao_list tbody tr').length + 1;
                $('#ban_chao_list tbody').append('<tr> <td class="text-center">'+v_tr+'</td><td>71C05150</td><td>Xe khác</td><td>2019</td><td>1,690,000</td><td>166,000</td> <td>1,856,000</td> <td align="center"><a href="javascript:;" title="Xem chi tiết" class="btn bg-primary btn-labeled btn-labeled-left mr-2"><b><i class="icon-file-eye"></i></b> Xem</a> <a href="javascript:;" title="Xóa đối tượng" onclick="_xoa_dong(this);" class="btn bg-danger-300 btn-labeled btn-labeled-left mr-2"><b><i class="icon-trash"></i></b> Xóa</a></td> </tr>');
                $('#modal_form').modal('hide');
            }
        });


        // Initialize validation
        $('.steps-validation').validate({
            ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
            errorClass: 'validation-invalid-label',
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },

            // Different components require proper error label placement
            errorPlacement: function(error, element) {

                // Unstyled checkboxes, radios
                if (element.parents().hasClass('form-check')) {
                    error.appendTo( element.parents('.form-check').parent() );
                }

                // Input with icons and Select2
                else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
                    error.appendTo( element.parent() );
                }

                // Input group, styled file input
                else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                    error.appendTo( element.parent().parent() );
                }

                // Other elements
                else {
                    error.insertAfter(element);
                }
            },
            rules: {
                email: {
                    email: true
                }
            }
        });
    };


    //
    // Return objects assigned to module
    //

    return {

        // Disable transitions before page is fully loaded
        initBeforeLoad: function() {
            _transitionsDisabled();
        },

        // Enable transitions when page is fully loaded
        initAfterLoad: function() {
            _transitionsEnabled();
        },

        // Initialize all sidebars
        initSidebars: function() {

            // On desktop
            _sidebarMainResize();
            _sidebarMainToggle();
            _sidebarComponentToggle();

            // On mobile
            _sidebarMobileMainToggle();
            _sidebarMobileComponentToggle();
        },

        // Initialize all navigations
        initNavigations: function() {
            _navigationSidebar();
            _navigationNavbar();
        },

        // Initialize all components
        initComponents: function() {
            _component_steps_form(); //Khai bao truoc
            _component_tooltip();
            _component_popover();
            _component_daterange();
            _component_repeater();
            _component_datatable();
            _component_tooltip_tipsy();
            _component_select2();
            _component_datepicker();
            _component_input_type();
        },

        initChart: function() {
            _CampaignStatusDonutChart('#campaign-status-pie', 42);
            _TicketStatusDonutChart('#tickets-status', 42);
            _barsPiesExamples();
        },


        // Initialize all card actions
        initCardActions: function() {
            _cardActionReload();
            _cardActionCollapse();
            _cardActionRemove();
            _cardActionFullscreen();
        },

        // Dropdown submenu
        initDropdownSubmenu: function() {
            _dropdownSubmenu();
        },

        initHeaderElementsToggle: function() {
            _headerElements();
        },

        // Initialize core
        initCore: function() {
            App.initSidebars();
            App.initNavigations();
            App.initComponents();
            App.initCardActions();
            App.initDropdownSubmenu();
            App.initHeaderElementsToggle();
            App.initChart();
        }
    }
}();
 // Datatable 
var _create_datatable = function(p_table = '') {

    var table = $('.datatable');
    if (p_table)  table = p_table;

    var v_datatable = table.DataTable( {
        autoWidth: false,
        responsive: {
            details: {
                type: 'column',
            },
            breakpoints: [
                {name: 'desktop', width: Infinity},
                {name: 'tablet-l', width: 1200},
                {name: 'tablet-p', width: 992},
                {name: 'mobile-l', width: 576},
                {name: 'mobile-p', width: 320}
            ]
        },
        columnDefs: [
            {
                className: 'control not-desktop text-center',
                orderable: false,
                targets:   0
            },
        ],
        lengthMenu: [
            [10, 20, 50, 100, 200, 300, 400, 500, 1000, -1], 
            [10, 20, 50, 100, 200, 300, 400, 500, 1000, "Tất cả"]
        ],

    });

    v_datatable.on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
        var v_li =  $(this).find('tbody > tr.child > td.child > ul.dtr-details > li');
        v_li.each(function(index, li) { 
            var v_dtr_title = $(li).find('.dtr-title');
            var v_dtr_data = $(li).find('.dtr-data');

            if (v_dtr_title.is(':empty')) {
                $(li).addClass('dtr-title-empty');
            }

            if (v_dtr_data.is(':empty')) {
                $(li).addClass('dtr-data-empty');
            }

        });
                               
    });

}    

var _component_datatable = function(p_table = '') {

    var table = $('.datatable');
    if (p_table)  table = p_table;

    if (!$().DataTable) {
        console.warn('Warning - datatables.min.js is not loaded.');
        return;
    }

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: {
            details: {
                type: 'column'
            },
            breakpoints: [
                {name: 'desktop', width: Infinity},
                {name: 'tablet-l', width: 1200},
                {name: 'tablet-p', width: 992},
                {name: 'mobile-l', width: 576},
                {name: 'mobile-p', width: 320}
            ]
        },
        columnDefs: [
            {
                className: 'control not-desktop text-center',
                orderable: false,
                targets:   0
            },
        ],
        dom: '<"datatable-header"f><"datatable-body"t><"datatable-footer"<"datatable-li"li>p>',
        language: {
            decimal:        "",
            emptyTable:     "Không có dữ liệu trong bảng",
            info:           " Tổng số _TOTAL_ bản ghi",
            infoEmpty:      "Không có bản ghi nào",
            infoFiltered:   "(filtered from _MAX_ total entries)",
            infoPostFix:    "",
            thousands:      ",",
            lengthMenu:     " _MENU_ ",
            loadingRecords: "Đang tải...",
            processing:     "Đang xử lý...",
            search:         "",
            searchPlaceholder: 'Tìm kiếm nhanh ...',
            zeroRecords:    "Không tìm thấy hồ sơ phù hợp",
            paginate: {
                first:      "Đầu",
                last:       "Cuối",
                next:       "Sau >>",
                previous:   "<< Trước"
            },
            aria: {
                sortAscending:  ": kích hoạt để sắp xếp cột tăng dần",
                sortDescending: ": kích hoạt để sắp xếp cột giảm dần"
            },
            buttons: {
                copyTitle: 'Đã thêm vào clipboard',
                copyKeys: 'Nhấn ctrl hoặc <i>\u2318</i> + C để sao chép dữ liệu từ bảng vào khay nhớ tạm của bạn. Để hủy, bấm vào tin nhắn này hoặc nhấn Esc.',
                copySuccess: {
                    _: 'Sao chép %d dòng ',
                    1: 'Sao chép 1 dòng '
                }
            }
        }
    });

    
    table.find('tr').each(function(){
       var v_th = $(this).find('th').eq(0);
       var v_td = $(this).find('td').eq(0);
       if (!v_th.hasClass('cell')) {
            v_th.before('<th class="cell" width="30px"></th>');
        }
        if (!v_td.hasClass('cell')) {
            v_td.before('<td class="cell"></td>');
        }
    });

    
    _create_datatable(p_table);


    $( "[datatable-collapse]" ).on("shown.bs.collapse", function() {
        $.each($.fn.dataTable.tables(true), function(){
            $(this).DataTable().columns.adjust().draw();
        });
    });

    $('[datatable-modal]').on('shown.bs.modal', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
           .columns.adjust()
           .responsive.recalc();
     });
  
};

// Initialize module
// ------------------------------

// When content is loaded
document.addEventListener('DOMContentLoaded', function() {
    App.initBeforeLoad();
    App.initCore();
});

// When page is fully loaded
window.addEventListener('load', function() {
    App.initAfterLoad();
});