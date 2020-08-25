<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>

    <body class="sidebar-xs">

        <div class="page-content">

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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> F02 - Bảo hiểm ô tô</a>
                                <span class="breadcrumb-item active">Hồ sơ bồi thường: 011800028/B02 </span>
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
                            <p class="t-top"><i class="icon-certificate mr-2"></i>Chi tiết hồ sơ bồi thường</p>
                            <span class="desc">Nhập thông tin theo từng bước. Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
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
                           <div class="col-md-12">
                               <div class="tab-claim tab-style">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#claim_thong_tin_chung" class="nav-link active show" data-toggle="tab">
                                                <i class="fal fa-address-card mr-1"></i>
                                                <span>Thông tin chung</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_bien_ban_giam_dinh" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-file-invoice mr-1"></i>
                                                <span>Biên bản giám định</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_to_trinh_boi_thuong" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-file-edit mr-1"></i>
                                                <span>Tờ trình bồi thường</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_thong_bao_boi_thuong" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-bell-on mr-1"></i>
                                                <span>Thông báo bồi thường</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_in" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-print mr-1"></i>
                                                <span>In ấn</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="clearfix"></div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="claim_thong_tin_chung">
                                            <div class="row">
                                                <div class="offset-md-2 col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tình trạng hồ sơ: <span class="text-danger">*</span></label>
                                                                <select select2 disabled>
                                                                    <option>Đang xử lý</option>
                                                                    <option>Đã đóng</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Ngày tổn thất: <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Ngày TBTT: 
                                                                    <span class="text-danger">*</span> 
                                                                    <a href="#" data-tooltip="tipsy" original-title="Ngày thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                                                                </label>
                                                                <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Thời gian TBTT: 
                                                                    <span class="text-danger">*</span> 
                                                                    <a href="#" data-tooltip="tipsy" original-title="Thời gian thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                                                                </label>
                                                                <input type="text" class="form-control input-time" placeholder="hh:ss">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <?php inc('template/public/chuyen_vien_boi_thuong.php'); ?>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <?php inc('template/public/can_bo_nhap_hsbt.php'); ?>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <?php inc('template/public/don_vi_gdbt_ho.php'); ?>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <?php inc('template/public/can_bo_gdbt_ho.php'); ?>
                                                        </div>
                                                    </div>

                                                    <hr class="border-dashed border-silver mb-3">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label>Số hồ sơ: <span class="text-danger">*</span></label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control required" placeholder="Nhập số hồ sơ...">
                                                                    <span class="input-group-append">
                                                                        <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_so_ho_giam_dinh_xin_cap">Lấy số</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Địa điểm tai nạn: <span class="text-danger">*</span></label>
                                                                <textarea class="form-control" placeholder="Nhập địa điểm tai nạn..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Diễn biến: <span class="text-danger">*</span></label>
                                                                <textarea class="form-control" placeholder="Nhập diễn biến..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nguyên nhân: <span class="text-danger">*</span></label>
                                                                <textarea class="form-control" placeholder="Nhập nguyên nhân..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Hậu quả: <span class="text-danger">*</span></label>
                                                                <textarea class="form-control" placeholder="Nhập hậu quả..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label>Số người chết:</label>
                                                                <input type="text" class="form-control input-number" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Kết quả xử lý:</label>
                                                                <select class="form-control" select2>
                                                                    <option value="">--- Chọn ---</option>
                                                                    <option value="">Chưa xử lý</option>
                                                                    <option value="">Đã xử lý</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label>Thu hồi tài sản: <span class="text-danger">*</span></label>
                                                                <div class="button-switch">
                                                                    <input type="checkbox" id="thu_hoi_tai_san" class="switch">
                                                                    <label for="thu_hoi_tai_san" data-off="Không" data-on="Có"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Sự kiện: </label>
                                                                <div class="input-group">
                                                                    <input style="max-width: 180px;" type="text" class="form-control" placeholder="" value="">
                                                                    <input type="text" class="form-control" placeholder="" value="">
                                                                    <span class="input-group-append">
                                                                        <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang"><i class="far fa-book mr-1"></i>Chọn</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr class="border-dashed border-silver mb-3">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Đơn bảo hiểm số :</label>
                                                                <input type="text" class="form-control" placeholder="Nhập số đơn bảo hiểm...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Loại hình: <span class="text-danger">*</span></label>
                                                                <?php inc('template/loai_hinh_disabled.php'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Khách hàng (Mã/Tên): <span class="text-danger">*</span></label>
                                                                <div class="input-group">
                                                                    <input style="max-width: 180px;" type="text" class="form-control required" name="ma_kh2" placeholder="Nhập mã khách hàng..." value="">
                                                                    <input type="text" class="form-control required" name="ten_kh2" placeholder="Nhập tên khách hàng..." value="">
                                                                    <span class="input-group-append">
                                                                        <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn từ danh mục <i class="fad fa-user-plus ml-2"></i></button>
                                                                    </span>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>


                                                         



                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="claim_bien_ban_giam_dinh">
                                            <h1>Biên bản giám định</h1>
                                        </div>

                                        <div class="tab-pane fade" id="claim_to_trinh_boi_thuong">
                                            <h1>Tờ trình bồi thường</h1>
                                        </div>

                                        <div class="tab-pane fade" id="claim_thong_bao_boi_thuong">
                                            <h1>Thông báo bồi thường</h1>
                                        </div>

                                        <div class="tab-pane fade" id="claim_in">
                                            <h1>Chức năng in ấn</h1>
                                        </div>
                                    </div>
                                </div>
                           </div>
                       </div>

                    </div>
                    <!-- /Content-block -->

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                
                </div>
                <!-- /content -->

            </div>
            <!-- /content-wrapper -->
        </div>
        <!-- /page-content -->

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?> 

    </body>

<?php include_once FOOTER; ?>            
        </div> 