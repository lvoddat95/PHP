$(function(){
        
    //Sửa lỗi input select2 khi mở modal bootstrap 4
    $.fn.modal.Constructor.prototype._enforceFocus = function () {
        var that = this;
        $(document)
        .off('focusin.bs.modal')
        .on('focusin.bs.modal', function (e) {

            if ($(e.target).hasClass('select2-search__field')) {
                return true;
            }
        });
    };

    $("#input-chk-all").click(function () {
        $('.input-chk').not(this).prop('checked', this.checked);
    });

    $(".btn-act-toggle").click(function () {
        $(this).parents('.quick-action').toggleClass('toggle');
    });

    if ($('.side-box').length > 0) {
        $(".side-box").on('click','.side-btn', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(this).parent().toggleClass('open');
        });
        $(".side-btn-close").click(function (e) {
            e.preventDefault();
            $(this).closest('.side-box').removeClass('open');
        });
    }

    if ($('.collapse-group').length > 0) {
        $('.cls_ckb').each(function (index) {
            var v_check = $(this).parent().next().hasClass('collapsed');
            if (v_check) {
                $(this).attr('checked', false);
                $(this).closest('.c-item').removeClass('open');
            } else {
                $(this).attr('checked', true);
                $(this).closest('.c-item').addClass('open');
            }
            $(this).change(function () {
                $(this).parent().next().trigger("click");
                var v_check = $(this).parent().next().hasClass('collapsed');
                if (v_check) {
                    $(this).closest('.c-item').removeClass('open');
                } else {
                    $(this).closest('.c-item').addClass('open');
                }
            });
        });
    }
    
    

    if ($().perfectScrollbar) {
        $('.dropdown-scrollable').perfectScrollbar();
        $('.nav-group-sub').perfectScrollbar();
    }

    if( $('.chat-box').length > 0 ){
        
        $(".chat-circle").click(function() {    
            $(".chat").toggleClass('open');
        })
        
        $(".cb-toggle-close").click(function() {
            $(".chat").removeClass('open');

        })
    }



    $(".go-top").click(function () {
        $("html, body").animate({scrollTop: 0}, 500);
    });

   
});

var on_change_hinh_thuc_khai_thac = function(p_this){
    console.log(p_this.value);
    if(p_this.value == 'tai-bh'){
        $('#tai-bh').slideDown();
        $('#dong-bh').slideUp();
    }else if(p_this.value == 'dong-bh'){
        $('#tai-bh').slideUp();
        $('#dong-bh').slideDown();
        $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
    }else{
        $('#tai-bh, #dong-bh').slideUp();
    }
    
}

var on_change_kenh_khai_thac = function(p_this){
    if(p_this.value == 'daili'){
        $('#moigioi').hide();
        $('#daili').show();
    }else if(p_this.value == 'moigioi'){
        $('#daili').hide();
        $('#moigioi').show();
    }else{
        $('#daili, #moigioi').show();
    }
}

var _xoa_dong = function(p_this) {
    var r =confirm("Xoa doi tuong nay!");
    if (r == true) {
        $(p_this).closest('tr').remove();
    }
}

var on_change_dkbs = function() {
    var v_sum = 0;
    $('.dkbs > input:checked').each(function(i,obj) {
    });
}


var list_view = function(p_this){
    $(p_this).closest('.f-right').removeClass('grid').addClass('list');
}
var grid_view = function(p_this){
    $(p_this).closest('.f-right').removeClass('list').addClass('grid');
}




$(function(){
    var $window       = $(window);
    var lastScrollTop = 0;
    var $header       = $('.header-top');
    var $footer       = $('.mobile-bottom');
    var headerHeight  = $header.outerHeight();

    $(window).scroll(function() {
        var windowTop  = $window.scrollTop();

        if ( windowTop >= headerHeight ) {
            $header.addClass( 'sticky' );
        } else {
            $header.removeClass( 'sticky' ).removeClass( 'show' );
            $footer.removeClass( 'show' );
        }
        if ( $header.hasClass( 'sticky' ) ) {
            if ( windowTop < lastScrollTop ) {
                $header.addClass( 'show' );
                $footer.addClass( 'show' );
            } else {
                $header.removeClass( 'show' );
                $footer.removeClass( 'show' );
            }
        }
        if ( windowTop < lastScrollTop ) {
            $footer.addClass( 'show' );
        } else {
            $footer.removeClass( 'show' );
        }
        lastScrollTop = windowTop;
    } );
})

