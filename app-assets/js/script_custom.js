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


var on_click_change_form = function(p_this){
    var $this = $(p_this);
    $this.toggleClass('active');
    $this.closest('body').find('.wizard').toggleClass('wizard-style2');
}

var on_change_disable_control = function(p_this, p_list){
    const arr = p_list.split(',')
    if (p_this.checked){
        for (index = 0; index < arr.length; ++index) {
            if (arr[index].length > 0){
                $('#'+ arr[index]).attr('disabled', 'disabled');
            }
         }
    }else{
        for (index = 0; index < arr.length; ++index) {
            if (arr[index].length > 0){
                $('#'+ arr[index]).removeAttr("disabled")
            }
        }
    }
}


var on_change_nguon_dich_vu = function(p_this){
    var v_input_value = $(p_this).val();
    if ( v_input_value == 'NGAN_HANG' ){
        $(p_this).closest('fieldset').find('#ngan_hang_opt').slideDown('400');
    }else{
        $(p_this).closest('fieldset').find('#ngan_hang_opt').slideUp('400');
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

var on_change_hinh_thuc_khai_thac = function(p_this){
    if(p_this.value == 'tai-bh'){
        $('#tai-bh').slideDown();
        $('#dong-bh').slideUp();
        console.log(p_this.value)
    }else if(p_this.value == 'dong-bh'){
        $('#tai-bh').slideUp();
        $('#dong-bh').slideDown();
        $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
    }else{
        $('#tai-bh, #dong-bh').slideUp();
    }
    
}
var on_change_trang_thai_don = function(p_this){
    var v_title = "";
    var v_input_value = $(p_this).val();
    var v_page_title = $(".p-title").find('span');

    var btn_duyet = $('.btn-duyet, .btn-duyet-dong');
    var btn_trinh_duyet = $('.btn-trinh-duyet');
    var btn_xoa = $('.btn-xoa');

    if (v_input_value == "moi-them") {
        v_title = "đang xử lý";
        btn_duyet.hide();
        btn_xoa.show();
        btn_trinh_duyet.show();

    }else if (v_input_value == "tu-choi"){
        v_title = "từ chối";
        btn_duyet.hide();
        btn_xoa.show();
        btn_trinh_duyet.show();

    }else if (v_input_value == "tbh-tu-choi"){
        v_title = "tái bảo hiểm từ chối";
        btn_duyet.hide();
        btn_xoa.show();
        btn_trinh_duyet.show();

    }else if (v_input_value == "chap-nhan"){
        v_title = "chấp nhận";
        btn_duyet.hide();
        btn_xoa.show();
        btn_trinh_duyet.show();

    }else if (v_input_value == "cho-duyet"){
        v_title = "chờ duyệt";
        btn_xoa.hide();
        btn_trinh_duyet.hide();
        btn_duyet.show();
    }

    v_page_title.text(v_title);

}

var on_change_trang_thai_duyet_don = function(p_this){
    var v_input_value = $(p_this).val();
    var v_li_do = $(p_this).closest('form').find('#tu-choi-don');
    if (v_input_value == 'tu-choi') {
        v_li_do.slideDown();
    }else{
        v_li_do.slideUp();
    }
}

var _xoa_dong = function(p_this) {
    var r =confirm("Xoa doi tuong nay!");
    if (r == true) {
        $(p_this).closest('tr').remove();
    }
}

var show_password = function(p_this){
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        $(p_this).addClass('show');
    } else {
        x.type = "password";
        $(p_this).removeClass('show');
    }
}

lightGallery(
    document.getElementById('light-gallery'), 
    {
        thumbnail:true,
        selector: '.gallery-item'
    }
);


$( "#light-gallery" ).sortable({
    handle: ".img-sortable",
});


$('.btn-print').on('click',function(){
    var data = $(this).data('print');
    if (data == 'list') {
        $("#print-container").removeAttr('class').addClass('view-list');
    }else if (data == 'grid4'){
        $("#print-container").removeAttr('class').addClass('view-grid4');
    }else{
        $("#print-container").removeAttr('class').addClass('view-grid6');
    }

    $("#print-container").print({
        noPrintSelector : ".no-print",
    });
    
})

var on_change_print_select = function(p_this){
    if (!$(p_this).is(':checked')) {
        $(p_this).closest('li').addClass('no-print');
    }else{
        $(p_this).closest('li').removeClass('no-print');
    }
}

var on_change_kich_thuoc_anh = function(p_this){
    if ($(p_this).is(':checked')) {
        $("#light-gallery").addClass('view-fix')
    }else{
        $("#light-gallery").removeClass('view-fix')
    }
}
var modal_lv = 0;
$('.modal').on('shown.bs.modal', function (e) {
    $('.modal-backdrop:last').css('zIndex',1051+modal_lv);
    $(e.currentTarget).css('zIndex',1052+modal_lv);
    modal_lv++
});

$('.modal').on('hidden.bs.modal', function (e) {
    modal_lv--
});

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


$('#main-nav').hcOffcanvasNav({
    disableAt: 768,
    customToggle: '.sidebar-mobile-main-toggle',
    levelSpacing: 0,
    navTitle: 'Danh sách Menu',
    levelTitles: true,
    levelTitleAsBack: true,
    pushContent: '.page-content',
    labelBack: 'Quay lại',
    labelClose: false

  });