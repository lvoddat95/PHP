<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
    
    <body class="sidebar-xs">

        <div class="page-content home-page">

            <?php include_once SIDEBAR; ?>

            <div class="content-wrapper">

                <div class="content">

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="linearicons-text-align-left font-size-m font-weight-bold"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="icon-arrow-left16 mr-1"></i> G16 - Bảo hiểm sức khỏe người vay vốn</a>
                                <span class="breadcrumb-item active">Cập nhập đơn</span>
                            </div>
                            <div class="d-md-none logo-mobile">
                                <a href="<?php echo HTTP_PATH; ?>" class="logo-text">
                                    <div class="logo-img"><img src="<?php echo HTTP_PATH .'app-assets/images/logo/logo2.png'; ?>" alt="VNI Logo"></div>
                                    <span class="text align-middle" style="font-weight: 900;">VNI</span>
                                </a>
                            </div>
                        </div>
                        <?php include_once TOP_RIGHT; ?>
                    </div>
                    <!-- /Header -->

                    <div class="page-title">
                        <div class="p-title">
                            <p class="font-weight-semibold font-size-m mb-0"><i class="icon-certificate mr-2"></i>Thêm mới đơn bảo hiểm</p>
                            <span class="text-muted d-block font-size-xs">Nhập thông tin theo từng bước. Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                        </div>
                        <div class="p-button">
                            <a href="" class="btn mr-1"><i class="icon-arrow-left52 mr-1"></i> Quay lại</a>
                            <a href="javascript:;" class="btn mr-1"><i class="icon-files-empty mr-1"></i> Lưu & Copy</a>
                            <a href="javascript:;" class="btn bg-primary"><i class="icon-floppy-disk mr-1"></i> Lưu</a>
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Form wzard with step validation section start -->
                                <section id="validation" class="input-don">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <form action="#" class="steps-validation wizard-notification">
                                                            <!-- Bước 1 -->
                                                            <h6>Thông tin chung</h6>
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/kenh_khai_thac.php'); ?> 
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/hinh_thuc_khai_thac.php'); ?> 
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/so_don_bao_hiem.php'); ?> 
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/so_tham_chieu.php'); ?> 
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/so_ban_chao.php'); ?> 
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/so_hd_nhan_tai.php'); ?> 
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <?php inc('template/1_thong_tin_chung/nguoi_duoc_bao_hiem.php'); ?> 
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <?php inc('template/1_thong_tin_chung/nguoi_thanh_toan_bao_hiem.php'); ?> 
                                                                    </div>
                                                                    
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/ten_chu_xe.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/sdt_chu_xe.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/1_thong_tin_chung/so_cmt_chu_xe.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <?php inc('template/1_thong_tin_chung/dia_chi_chu_xe.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <?php inc('template/1_thong_tin_chung/can_bo_khai_thac.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <?php inc('template/1_thong_tin_chung/can_bo_cap_don.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <?php inc('template/1_thong_tin_chung/can_bo_ki_don.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <?php inc('template/1_thong_tin_chung/ngay_cap.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/1_thong_tin_chung/loai_tien.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/1_thong_tin_chung/ti_gia_thuc_te.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <?php inc('template/1_thong_tin_chung/tai_bao_hiem.php'); ?>

                                                                        <?php inc('template/1_thong_tin_chung/dong_bao_hiem.php'); ?>
                                                                    </div>
                                                                </div>
                                                            </fieldset>

                                                            <!-- Step 2 -->
                                                            <h6>Trung gian bảo hiểm</h6>
                                                            <?php inc('template/2_trung_gian_bao_hiem/2_trung_gian_bao_hiem.php'); ?>
                                                            
                                                            <!-- Step 3 -->
                                                            <h6>Đối tượng bảo hiểm</h6>
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-12 mb-1">
                                                                        <span class="font-weight-semibold"><i class="icon-info22 mr-1"></i>Thông tin sản phẩm bảo an tín dụng</span>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Nhóm khách hàng: </label>
                                                                            <select class="form-control" select2 name="">
                                                                                <option>--- Chọn Nhóm khách hàng ---</option>
                                                                                <option>Khách hàng TONKIN (OCB)</option>
                                                                                <option>Nhóm khách hàng vay tín chấp(Bắt buộc tham gia bảo hiểm)</option>
                                                                                <option>Khách hàng vay thế chấp</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Đối tượng vay: </label>
                                                                            <select class="form-control" select2 name="">
                                                                                <option>--- Chọn Đối tượng vay ---</option>
                                                                                <option>KH Cá nhân/Hộ gia đình</option>
                                                                                <option>KH DN vừa và nhỏ</option>
                                                                                <option>KH DN lớn</option>
                                                                                <option>KH DN siêu vi mô</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Nhóm khách hàng: </label>
                                                                            <select class="form-control" select2 name="">
                                                                               <option>--- Chọn Phân khúc ---</option>
                                                                               <option>Khách hàng ưu tiên</option>
                                                                               <option>Khách hàng trung lưu</option>
                                                                               <option>Khách hàng DN nhiều tiền gửi</option>
                                                                               <option>Khách hàng phổ thông</option>
                                                                               <option>Khách hàng DN vừa</option>
                                                                               <option>Tập đoàn,TCTY nhà nước</option>
                                                                               <option>KH DN lớn</option>
                                                                               <option>Khách hàng DN siêu lớn</option>
                                                                               <option>KH DN vi mô</option>
                                                                               <option>KH DN siêu vi mô</option>
                                                                           </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12 mb-1">
                                                                        <span class="font-weight-semibold"><i class="icon-info22 mr-1"></i>Thông tin doanh nghiệp</span>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group ">
                                                                            <label>Mã KH doanh nghiệp: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Tên KH Doanh nghiệp: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group ">
                                                                            <label>Mã số thuế: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Địa chỉ: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12 mb-1">
                                                                        <span class="font-weight-semibold"><i class="icon-info22 mr-1"></i>Thông tin Hợp đồng tín dụng</span>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Hợp đồng tín dụng: <span class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Số tiền vay: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Thời hạn vay: </label>
                                                                            <select class="form-control" select2 name="">
                                                                               <option id="" value="" name="">--- Chọn Thời hạn vay ---</option>
                                                                               <option id="1" name="1 Tháng" value="1">1 Tháng</option>
                                                                               <option id="2" name="2 Tháng" value="2">2 Tháng</option>
                                                                               <option id="3" name="3 Tháng" value="3">3 Tháng</option>
                                                                               <option id="4" name="4 Tháng" value="4">4 Tháng</option>
                                                                               <option id="5" name="5 Tháng" value="5">5 Tháng</option>
                                                                               <option id="6" name="6 Tháng" value="6">6 Tháng</option>
                                                                               <option id="7" name="7 Tháng" value="7">7 Tháng</option>
                                                                               <option id="8" name="8 Tháng" value="8">8 Tháng</option>
                                                                               <option id="9" name="9 Tháng" value="9">9 Tháng</option>
                                                                               <option id="10" name="10 Tháng" value="10">10 Tháng</option>
                                                                               <option id="11" name="11 Tháng" value="11">11 Tháng</option>
                                                                               <option id="12" name="12 Tháng" value="12">12 Tháng</option>
                                                                               <option id="13" name="13 Tháng" value="13">13 Tháng</option>
                                                                               <option id="14" name="14 Tháng" value="14">14 Tháng</option>
                                                                               <option id="15" name="15 Tháng" value="15">15 Tháng</option>
                                                                               <option id="16" name="16 Tháng" value="16">16 Tháng</option>
                                                                               <option id="17" name="17 Tháng" value="17">17 Tháng</option>
                                                                               <option id="18" name="18 Tháng" value="18">18 Tháng</option>
                                                                               <option id="19" name="19 Tháng" value="19">19 Tháng</option>
                                                                               <option id="20" name="20 Tháng" value="20">20 Tháng</option>
                                                                               <option id="21" name="21 Tháng" value="21">21 Tháng</option>
                                                                               <option id="22" name="22 Tháng" value="22">22 Tháng</option>
                                                                               <option id="23" name="23 Tháng" value="23">23 Tháng</option>
                                                                               <option id="24" name="24 Tháng" value="24">24 Tháng</option>
                                                                               <option id="25" name="25 Tháng" value="25">25 Tháng</option>
                                                                               <option id="26" name="26 Tháng" value="26">26 Tháng</option>
                                                                               <option id="27" name="27 Tháng" value="27">27 Tháng</option>
                                                                               <option id="28" name="28 Tháng" value="28">28 Tháng</option>
                                                                               <option id="29" name="29 Tháng" value="29">29 Tháng</option>
                                                                               <option id="30" name="30 Tháng" value="30">30 Tháng</option>
                                                                               <option id="31" name="31 Tháng" value="31">31 Tháng</option>
                                                                               <option id="32" name="32 Tháng" value="32">32 Tháng</option>
                                                                               <option id="33" name="33 Tháng" value="33">33 Tháng</option>
                                                                               <option id="34" name="34 Tháng" value="34">34 Tháng</option>
                                                                               <option id="35" name="35 Tháng" value="35">35 Tháng</option>
                                                                               <option id="36" name="36 Tháng" value="36">36 Tháng</option>
                                                                               <option id="48" name="4 Năm" value="48">4 Năm</option>
                                                                               <option id="60" name="5 Năm" value="60">5 Năm</option>
                                                                               <option id="72" name="6 Năm" value="72">6 Năm</option>
                                                                               <option id="84" name="7 Năm" value="84">7 Năm</option>
                                                                               <option id="96" name="8 Năm" value="96">8 Năm</option>
                                                                               <option id="108" name="9 Năm" value="108">9 Năm</option>
                                                                               <option id="120" name="10 Năm" value="120">10 Năm</option>
                                                                           </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Gói bảo hiểm: </label>
                                                                            <select class="form-control" select2 name="">
                                                                                <option>--- Chọn Gói BH ---</option>
                                                                                <option>Điều kiện A+B (Tử vong, thương tật toàn bộ vĩnh viễn do tai nạn, ốm đau, bệnh tật, thai sản)</option>
                                                                                <option>Điều kiện A(Tai nạn)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12 mb-1">
                                                                        <span class="font-weight-semibold"><i class="icon-info22 mr-1"></i>Thông tin người thụ hưởng</span>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Người thụ hưởng 1: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <div class="form-group">
                                                                            <label>Địa chỉ: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Người thụ hưởng 2: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Địa chỉ: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Quan hệ: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>CMTND/HC: </label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            
                                                            <!-- Step 4 -->
                                                            <h6>Phạm vi bảo hiểm</h6>
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/thong_tin_ve_thoi_han_thanh_toan.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/thanh_toan_tai_ngan_hang.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Phạm vi bảo hiểm:</label>
                                                                            <div>
                                                                                <table class="table table-bordered datatable" 
                                                                                    data-paging="false"
                                                                                    data-info="false"
                                                                                    data-ordering="false"
                                                                                    data-searching="false"
                                                                                    >
                                                                                    <thead class="thead-light">
                                                                                        <tr>
                                                                                            <th width="20%">Phạm vi bảo hiểm</th>
                                                                                            <th width="10%">Số tiền bảo hiểm</th>
                                                                                            <th width="5%" class="desktop">Phí (%)</th>
                                                                                            <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                            <th width="5%" class="desktop">VAT (%)</th>
                                                                                            <th width="10%" class="desktop">VAT</th>
                                                                                            <th width="5%" class="desktop">COM (%)</th>
                                                                                            <th width="10%" class="desktop">COM</th>
                                                                                            <th width="20%" class="desktop">Định mức</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Tử vong,thương tật toàn bộ vĩnh viễn do tai nạn</td>
                                                                                            <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                            <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                            <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                            <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                            <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                            <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                            <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                            <td>
                                                                                                <select class="form-control " select2 name="dinh_muc" >
                                                                                                    <option>Tử vong,thương tật toàn bộ vĩnh viễn do tai nạn</option>    
                                                                                                </select>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Tử vong, tàn tật toàn bộ vĩnh viễn do ốm đau, bệnh tật, thai sản</td>
                                                                                            <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                            <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                            <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                            <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                            <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                            <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                            <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                            <td>
                                                                                                <select class="form-control " select2 name="dinh_muc" >
                                                                                                    <option>Tử vong, tàn tật toàn bộ vĩnh viễn do ốm đau, bệnh tật, thai sản</option>    
                                                                                                </select>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th><b>Tổng cộng: </b></th>
                                                                                            <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                            <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0.99"></th>
                                                                                            <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                            <th align="right"><input class="form-control text-right" type="text" disabled readonly value="10"></th>
                                                                                            <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                            <th align="right"><input class="form-control text-right" type="text" disabled readonly value="10.0"></th>
                                                                                            <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                            <th align="right"></th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                        
                                                                                </table>
                                                                                        
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_dai_li.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_moi_gioi.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/loai_mien_thuong.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/so_tien_mien_thuong.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/so_tien_giam_mien_thuong.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/ten_rui_ro.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/dieu_kien_bao_hiem.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/dieu_khoan_loai_tru.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/dia_diem_bao_hiem.php'); ?>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/quy_tac_bao_hiem.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="col-md-12">
                                                                        <b><label>Lịch thanh toán bảo hiểm: </label></b>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <table class="table table-bordered" style="margin: auto;">
                                                                            <colgroup>
                                                                                <col width="70%">
                                                                                <col width="30%">
                                                                            </colgroup>
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th width="70%">Quyền lợi</th>
                                                                                    <th class="text-right" width="30%">Phí BH có VAT</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Tử vong,thương tật toàn bộ vĩnh viễn do tai nạn</td>
                                                                                    <td class="text-right">0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Tử vong, tàn tật toàn bộ vĩnh viễn do ốm đau, bệnh tật, thai sản</td>
                                                                                    <td class="text-right">0</td>
                                                                                </tr>
                                                                                <tr class="bold" style="background-color: #fff;">
                                                                                    <td>Tổng phí BH</td>
                                                                                    <td><input class="form-control text-right" type="text" disabled="" readonly="" value="0"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/lich_thanh_toan.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/ghi_chu_noi_bo.php'); ?>
                                                                    </div>  
                                                                    <div class="col-md-6">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/ghi_chu_cho_khach_hang.php'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <?php inc('template/4_pham_vi_bao_hiem/tai_lieu_dinh_kem.php'); ?>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Form wzard with step validation section end -->
                            </div>
                        </div>

                    </div>
                    <!-- /Content-block -->



                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>
            
        </div>

        <?php inc('chat-box.php'); ?> 
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?> 
        <?php inc('modal/modal_ds_nguoi_tham_gia_bao_hiem.php'); ?> 

        <div class="modal-group">
            <?php
                inc('modal/modal_ds_cac_khach_hang.php'); 
                inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>

        <?php inc('modal/modal_ds_rui_ro_bao_hiem.php'); ?> 
        <?php inc('modal/modal_ds_dieu_khoan_loai_tru.php'); ?> 
        <?php inc('modal/modal_dieu_khoan_sua_doi_bo_sung.php'); ?> 
        <?php inc('modal/modal_ds_files.php'); ?>

    </body>

<?php include_once FOOTER; ?>

