<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>  
    <?php $GLOBALS["so_gcnbh"] = 'remove'; ?>
    <?php $GLOBALS["dk_sua_doi_bo_sung"] = 'h03'; ?>
    <?php $GLOBALS["nganh_nghe_kinh_doanh"] = 'remove'; ?>
    <?php $GLOBALS["quy_tac"] = 'remove_tra_cuu'; ?>

    <body class="sidebar-xs">

        <div class="page-content home-page">

            <?php include_once SIDEBAR; ?>

            <div class="content-wrapper">

                <div class="content">

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="far fa-align-left"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i>H03 - Bảo hiểm trách nhiệm công cộng</a>
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
                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                            <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Lưu & Copy</a>
                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
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
                                                        <div class="wizard">

                                                            <?php inc('template/steps2.php'); ?>

                                                            <form action="#" class="form-validation clearfix">
                                                                <div class="tab-content">
                                                                    <!-- Bước 1 -->
                                                                    <fieldset class="tab-pane active show" id="step1">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/kenh_khai_thac.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/hinh_thuc_khai_thac.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group ">
                                                                                    <label>Đơn tái tục: <a href="#" data-tooltip="tipsy" original-title="Chọn <b style='color: red;'>“Có”</b> nếu là đơn tái tục." data-position="top"><i class="icon-info22"></i></a>
                                                                                    </label>
                                                                                    <div class="d-flex">
                                                                                        <p class="switch-title mr-3">Có phải đơn tái tục ?</p>
                                                                                        <div class="button-switch">
                                                                                            <input type="checkbox" id="tai_bao_hiem_sw" class="switch required" name="tai_bao_hiem_sw">
                                                                                            <label for="tai_bao_hiem_sw" data-off="Không" data-on="Có"></label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/1_thong_tin_chung/so_don_bao_hiem.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/1_thong_tin_chung/so_gcnbh.php'); ?> 
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
                                                                                <?php inc('template/1_thong_tin_chung/nganh_nghe_kinh_doanh.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/nguoi_duoc_bao_hiem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/nguoi_thanh_toan_bao_hiem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Người được thụ hưởng: </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-sm-4">
                                                                                            <input type="text" class="form-control required" placeholder="Mã người thụ hưởng...">
                                                                                        </div>
                                                                                        <div class="col-md-8 col-sm-8">
                                                                                            <div class="input-group">
                                                                                                <input type="text" class="form-control required" placeholder="Tên người thụ hưởng..." >
                                                                                                <span class="input-group-append">
                                                                                                    <button type="button" class="btn bg-primary" data-fancybox data-base-class="fancybox-container-lg" data-type="iframe" data-src="<?php echo HTTP_PATH; ?>view/inc/iframe/iframe_ds_khach_hang.php" href="javascript:;">Chọn</button>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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
                                                                                <?php inc('template/1_thong_tin_chung/ngay_cap.php'); ?>
                                                                            </div>
                                                                            
                                                                            <?php if (!empty($GLOBALS["1_thong_tin_chung"]) && $GLOBALS["1_thong_tin_chung"] == 'ngay_ki_don') : ?>
                                                                                <div class="col-md-3">
                                                                                    <?php inc('template/1_thong_tin_chung/ngay_ki_don.php'); ?>
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/loai_tien.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/ti_gia_thuc_te.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/tai_bao_hiem.php'); ?>
                                                                                <?php inc('template/1_thong_tin_chung/dong_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>

                                                                    <!-- Step 2 -->
                                                                    <?php inc('template/2_trung_gian_bao_hiem/2_trung_gian_bao_hiem.php'); ?>
                                                                    
                                                                    <!-- Step 3 -->
                                                                    
                                                                    <!-- Step 4 -->
                                                                    <fieldset class="tab-pane" id="step4">
                                                                    	<div class="row">
                                                                            <div class="col-md-9">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>
                                                      
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <table class="table table-bordered datatable" 
                                                                                        data-paging="false"
                                                                                        data-info="false"
                                                                                        data-ordering="false"
                                                                                        data-searching="false" >
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
                                                                                                <td>Trách nhiệm công cộng</td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td>
                                                                                                    <select class="form-control" select2 >
                                                                                                       <option value="">Mức trách nhiệm < 5 tỷ</option>
                                                                                                       <option value="">Mức trách nhiệm từ 5 tỷ đến 100 tỷ</option>
                                                                                                       <option value="">Mức trách nhiệm từ 100 tỷ trở lên</option>
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

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_dai_li.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-3">
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
                                                                                <div class="form-group">
                                                                                    <label>Tên rủi ro: <span class="text-danger">*</span></label>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <textarea class="form-control" placeholder="Nhập rủi ro..." disabled="">Bên bảo hiểm đồng ý bồi thường cho những thiệt hại về thương tật thân thể hay tài sản của các bên thứ ba mà Bên được bảo hiểm có trách nhiệm pháp lý phải thanh toán xảy ra trong thời hạn bảo hiểm do các sự cố liên quan đến hoạt động kinh doanh của Bên được bảo hiểm (kể cả chi phí khiếu kiện) ngoại trừ những điểm loại trừ đã ghi trong Đơn bảo hiểm và các điều kiện, điều khoản ghi trong phụ lục bảo hiểm đính kèm hợp đồng này.</textarea>
                                                                                        <button type="button" class="btn bg-primary text-nowrap ml-2" data-toggle="modal" data-target="#ds_rui_ro_bao_hiem" disabled>Chọn</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label>Điều kiện bảo hiểm: <span class="text-danger">*</span></label>
                                                                                    <div class="d-flex align-items-center">
                                                                                    <textarea class="form-control" placeholder="Nhập rủi ro..." disabled="">Bảo hiểm trách nhiệm công cộng</textarea>
                                                                                        <button type="button" class="btn bg-primary text-nowrap ml-2" data-toggle="modal" data-target="#ds_dieu_kien_bao_hiem" disabled>Chọn</button>
                                                                                    </div>
                                                                                </div>
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
                                                                                <div class="form-group">
                                                                                    <label>Điều khoản sửa đổi, bổ sung:</label>
                                                                                    <textarea class="form-control" placeholder="Nhập nội dung..."></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/PRO/trach_nhiem_dong_bao_hiem.php'); ?>
                                                                            </div>  
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/phan_bo_don_vi.php'); ?>
                                                                            </div>  
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thong_tin_ve_thoi_han_thanh_toan.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thanh_toan_tai_ngan_hang.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="">Thanh toán bảo hiểm: </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <table class="table table-bordered" style="margin: auto;">
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th class="w65p">Quyền lợi</th>
                                                                                                <th class="w40p text-right">Phí BH có VAT</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Mức trách nhiệm của VNI</td>
                                                                                                <td class="text-right"><input class="form-control input-money text-right" type="text" value="0"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Trách nhiệm công cộng</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Số tiền miễn thường</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            
                                                                                            <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                            <td>Tổng phí BH (chưa VAT)</td>
                                                                                            <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                        </tr>
                                                                                        <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                            <td>Tổng VAT</td>
                                                                                            <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                        </tr>
                                                                                        <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                            <td>Tổng phí BH (có VAT)</td>
                                                                                            <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <?php inc('template/4_pham_vi_bao_hiem/lich_thanh_toan.php'); ?>
                                                                                </div>
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
                                                                </div>
                                                            </form>

                                                            <?php inc('template/actions.php'); ?>
                                                            
                                                        </div>
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
        <?php inc('modal/modal_danh_muc_tai_san_bao_hiem.php'); ?>
        <?php inc('modal/modal_ds_may_moc.php'); ?>
         
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

 