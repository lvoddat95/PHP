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
        $('#trach-nhiem-dong-bao-hiem').slideDown();
        $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
    }else{
        $('#tai-bh, #dong-bh, #trach-nhiem-dong-bao-hiem').slideUp();
    }
}

var on_change_hinh_thuc_khai_thac_step4 = function(p_this){
    if(p_this.value == 'tai-bh'){
        $('#tai-bh').slideDown();
        $('#dong-bh').slideUp();
        console.log(p_this.value)
    }else if(p_this.value == 'dong-bh'){
        $('#tai-bh').slideUp();
        $('#dong-bh').slideDown();
        $('#trach-nhiem-dong-bao-hiem').slideDown();
        $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
    }else{
        $('#tai-bh, #dong-bh, #trach-nhiem-dong-bao-hiem').slideUp();
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

var on_change_loai_vay_von = function(p_this){
    var v_input_value = $(p_this).val();
    console.log(v_input_value)
    if (v_input_value == "2") {
        $(p_this).closest('body').find('#upload-excel').slideDown('400');
    }else{
        $(p_this).closest('body').find('#upload-excel').slideUp('400');
    }
}

var on_change_chuyen_can_bo_thu_li = function(p_this){
    var v_input_value = $(p_this).val();
    if (v_input_value == "1") {
        $('#can_bo_thu_li').slideDown('400');
    }else{
        $('#can_bo_thu_li').slideUp('400');
    }
}

var on_change_tinh_thanh_pho = function(p_this){
    var v_input_value = $(p_this).val();
    if( v_input_value.length > 0 ) {
        $('#quan_huyen').removeAttr('disabled');
    }else{
        $('#quan_huyen').attr('disabled', 'disabled');
        $('#phuong_xa').attr('disabled', 'disabled');
    }
}

var on_change_quan_huyen = function(p_this){
    var v_input_value = $(p_this).val();
    if( v_input_value.length > 0 ) {
        $('#phuong_xa').removeAttr('disabled');
    }else{
        $('#phuong_xa').attr('disabled', 'disabled');
    }
}


var in_gcn_hssv = function(p_this){
    p_this = $(p_this);
    $("#print-container").print({
        noPrintSelector : ".no-print",
        timeout: 1500,
        deferred: $.Deferred().done(function() { 
        })
    });
}

var kieu_lay_danh_sach =  function(p_this){
    var v_input_value = $(p_this).val();
    if (v_input_value == "2") {
        $('#stt').hide();
    }else{
        $('#stt').show();
    }
}

var on_change_ngay_di_ngay_ve = function(p_this){
    if (p_this.checked){
        $('.add-req').append('<span class="text-danger">*</span>');
    }else{
        $('.add-req').find('.text-danger').remove();
    }
}

var tim_kiem_gxx = function(p_this){
    var v_input_value = $(p_this).val();
    if ( v_input_value == "namsinh") {
        $('#hoten').hide();
        $('#namsinh').show();
    }else{
        $('#hoten').show();
        $('#namsinh').hide();
    }
}

var on_change_hinh_thuc_tbh = function(p_this){
    var v_input_value = $(p_this).val();
    console.log(v_input_value)
    if ( v_input_value == "co-dinh" || v_input_value == "ket-hop") {
        $('#cau-tuc-tai-theo-treaty').slideDown('400');
        $('#tbh-qs, #tbh-sl').show();
    }else{
        $('#cau-tuc-tai-theo-treaty').slideUp('400');
        $('#tbh-qs, #tbh-sl').hide();
    }

    if (v_input_value == "ket-hop") {
        $('#tbh-facout').show();
        $('#nha-tai-ket-hop-table').show();
        $('#nha-tai-co-dinh-table').hide();
        $('#nha-tai-table').hide();
    }else if( v_input_value == 'co-dinh' ){
        $('#tbh-facout').hide();
        $('#nha-tai-ket-hop-table').hide();
        $('#nha-tai-co-dinh-table').show();
        $('#nha-tai-table').hide();
    }else{
        $('#tbh-facout').hide();
        $('#nha-tai-ket-hop-table').hide();
        $('#nha-tai-co-dinh-table').hide();
        $('#nha-tai-table').show();
    }

}

$(function () {
    $(".textbox").keyup(function () {
        var text = $(this).val();
        var text_create;
       text_create = text.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a").replace(/\ /g, '-').replace(/đ/g, "d").replace(/đ/g, "d").replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y").replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u").replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ.+/g,"o").replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ.+/g, "e").replace(/ì|í|ị|ỉ|ĩ/g,"i");
        $('.divclass').text(text_create);
    }).keyup();
});