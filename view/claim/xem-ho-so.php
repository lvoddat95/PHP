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
                            <i class="far fa-align-left"></i>
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
                                            <div class="tab-pane-action">
                                                <div class="page-title">
                                                    <div class="p-title">
                                                        <p class="t-top"><i class="icon-certificate mr-2"></i>Chi tiết hồ sơ bồi thường</p>
                                                        <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                                    </div>
                                                    <div class="p-button">
                                                        <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                                                        <a href="javascript:;" class="btn mr-1"><i class="icon-file-locked mr-1"></i> Đóng hồ sơ</a>
                                                        <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Lưu &amp; Copy</a>
                                                        <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane-form">
                                                <div class="row">
                                                    <div class="offset-lg-2 col-lg-8">
                                                        <?php inc('claim/1_thong_tin_chung.php'); ?>
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
        
        <?php inc('modal/modal_khieu_nai_boi_thuong.php'); ?> 
        <div class="modal-group">
            <?php inc('modal/modal_ds_so_ho_giam_dinh_xin_cap.php'); ?>     
            <?php inc('modal/modal_xin_cap_ho_so_giam_dinh.php'); ?> 
            <?php inc('modal/modal_ds_don_bao_hiem.php'); ?> 
        </div>
        <div class="modal-group">
            <?php inc('modal/modal_ds_cac_khach_hang.php'); ?>
            <?php inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); ?> 
        </div>

    </body>

<?php include_once FOOTER; ?>            
        </div> 