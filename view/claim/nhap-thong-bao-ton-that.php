<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>
    
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
                                <a href="http://localhost/bhhk/view/pages/danh-sach-don.php" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> F02 - Bảo hiểm ô tô</a>
                                <span class="breadcrumb-item active">Cập nhập thông báo tổn thất</span>
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
                                <div class="card">
                                    <div class="card-header card-header-sticky">
                                        <div class="page-title">
                                            <div class="p-title">
                                                <p class="t-top"><i class="icon-certificate mr-2"></i>Cập nhập thông báo tổn thất</p>
                                                <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                            </div>
                                            <div class="p-button">
                                                <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                                                <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Lưu &amp; Copy</a>
                                                <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="offset-md-1 col-md-10">

                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>#Số TBTT:</label>
                                                            <input type="text" class="form-control required" disabled name="" placeholder="Nhập số TBTT..." value="#HSTT/20/AD/12345678">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Số Đơn BH:</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control required" name="so_don_bao_hiem" placeholder="Nhập số đơn bảo hiểm...">
                                                                <span class="input-group-append">
                                                                    <button type="button" class="btn bg-primary"><i class="far fa-file-search mr-1"></i> Kiểm tra đơn BH</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr class="border-dashed border-silver mb-3">

                                                <div class="row">
                                                    <div class="col-xl-3 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Người thông báo:</label>
                                                            <input type="text" class="form-control" placeholder="Nhập người thông báo..." >
                                                        </div>                                                
                                                    </div>
                                                    <div class="col-xl-3 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Người nhận TBTT:
                                                                <a href="#" data-tooltip="tipsy" original-title="Cán bộ tiếp nhận thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                                                            </label>
                                                            <select select2="" class="form-control">
                                                                <option>--- Chọn ---</option>
                                                                <option selected="">Lê Văn A</option>
                                                                <option>Lê Văn B</option>
                                                                <option>Lê Văn C</option>
                                                                <option>........</option>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Khách hàng:</label>
                                                            <div class="row">
                                                                <div class="col-md-3 col-sm-3">
                                                                    <input type="text" class="form-control required" placeholder="Nhập mã khách hàng...">
                                                                </div>
                                                                <div class="col-md-9 col-sm-9">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control required" placeholder="Nhập tên khách hàng...">
                                                                        <span class="input-group-append">
                                                                            <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn<i class="fad fa-user-plus ml-1"></i></button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-3 col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Họ và tên lái xe: <a href="#" data-tooltip="tipsy" original-title="Họ và tên lái xe tại thời điểm tai nạn" data-position="top"><i class="icon-info22"></i></a>
                                                            </label>
                                                            <input type="text" class="form-control" placeholder="Nhập họ tên lái xe...">
                                                        </div>
                                                    </div>
                                                    <div class="col-12"></div>
                                                    <div class="col-xl-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label>Biển số xe: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control input-bsx" placeholder="XXXX XXXXX">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label>
                                                                Số người trên xe: <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control required input-float" placeholder="0" value="">
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text">người</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-sm-4">
                                                        <div class="form-group">
                                                            <label>
                                                                Số lượng hàng hoá: <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control required input-float" placeholder="0" value="">
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text">kg</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-2 col-sm-4 col-6">
                                                        <div class="form-group">
                                                            <label>Ngày tổn thất:</label>
                                                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-sm-4 col-6">
                                                        <div class="form-group">
                                                            <label>Thời gian tổn thất: 
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control input-time" placeholder="hh:ss" value="09:00">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-2 col-sm-4 col-6">
                                                        <div class="form-group">
                                                            <label>Ngày TBTT: 
                                                                <span class="text-danger">*</span> 
                                                                <a href="#" data-tooltip="tipsy" original-title="Ngày thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                                                            </label>
                                                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="06/08/2020">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-sm-4 col-6">
                                                        <div class="form-group">
                                                            <label>Thời gian TBTT: 
                                                                <span class="text-danger">*</span> 
                                                                <a href="#" data-tooltip="tipsy" original-title="Thời gian thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                                                            </label>
                                                            <input type="text" class="form-control input-time" placeholder="hh:ss" value="09:00">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label>
                                                                Địa điểm tổn thất: <span class="text-danger">*</span>
                                                            </label>
                                                            <textarea class="form-control" placeholder="Nhập địa điểm tổn thất..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label>Nguyên nhân tổn thất: <span class="text-danger">*</span></label>
                                                            <textarea class="form-control" placeholder="Nhập nguyên nhân..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label>Công việc đã hướng dẫn:</label>
                                                            <textarea class="form-control" placeholder="Nhập thông tin..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>    

                                                <hr class="border-dashed border-silver mb-3">

                                                <div class="row">
                                                    <div class="col-xl-3 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Chuyển cán bộ thụ lý</label>
                                                            <select select2="" class="form-control" onchange="on_change_chuyen_can_bo_thu_li(this);">
                                                                <option value="0" selected="">Tự động lựa chọn</option>
                                                                <option value="1">Chọn trong danh sách</option>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                    <div class="col-xl-3 col-sm-6">
                                                        <div class="form-group" id="can_bo_thu_li" style="display: none;">
                                                            <label>Danh sách cán bộ thụ lý</label>
                                                            <select select2="" class="form-control">
                                                                <option>--- Chọn ---</option>
                                                                <option selected="">Lê Văn A</option>
                                                                <option>Lê Văn B</option>
                                                                <option>Lê Văn C</option>
                                                                <option>........</option>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                </div>

                                            </div>
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

            </div>
            
        </div>

        <div class="modal-group">
            <?php inc('modal/modal_ds_cac_khach_hang.php'); ?>
            <?php inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); ?> 
        </div>




    </body>

<?php include_once FOOTER; ?>