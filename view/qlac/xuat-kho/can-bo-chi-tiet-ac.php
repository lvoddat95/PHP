<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'xuat-kho-can-bo,xuat-kho'; ?>
<body>

    <div class="page-content home-page">

        <?php include_once SIDEBAR_QLAC; ?>

        <div class="content-wrapper">

            <div class="content">

                <!-- Header -->
                <div class="header-top">
                    <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                        <i class="far fa-align-left"></i>
                    </button>
                    <div class="top-left">
                        <div class="breadcrumb">
                            <a href="<?php echo HTTP_PATH . 'view/qlac/'; ?>" class="breadcrumb-item"><i class="fad fa-file-certificate mr-1"></i>Quản lý ấn chỉ</a>
                            <span class="breadcrumb-item active">Xuất kho</span>
                        </div>
                        <div class="d-md-none logo-mobile">
                            <a href="<?php echo HTTP_PATH; ?>view/qlac/" class="logo-text">
                                <div class="logo-img"><img src="<?php echo HTTP_PATH . 'app-assets/images/logo/logo2.png'; ?>" alt="VNI Logo"></div>
                                <span class="text align-middle" style="font-weight: 900;">QLAC</span>
                            </a>
                        </div>
                    </div>
                    <?php include_once TOP_RIGHT; ?>
                </div>
                <!-- /Header -->

                <div class="page-title">
                    <div class="p-title">
                        <p class="font-weight-semibold font-size-m mb-0"><i class="fad fa-user-tie user-tieXuất ấn chỉ cho cán bộ - Ấn chỉ bảo hiểm ô tô</p>
                    </div>
                    <div class="p-button">
                    </div>
                </div>

                <!-- Content-block -->
                <div class="content-block">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-sticky">
                                    <div class="page-title">
                                        <div class="p-title">
                                            <p class="t-top"><i class="icon-certificate mr-1"></i>Cập nhập thông tin ấn chỉ</p>
                                            <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                        </div>
                                        <div class="p-button">
                                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                                            <a href="javascript:;" class="btn mr-1"><i class="far fa-file-plus mr-1"></i> Lưu &amp; Thêm mới</a>
                                            <a href="javascript:;" class="btn mr-1"><i class="far fa-files-medical mr-1"></i> Lưu &amp; Copy</a>
                                            <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Copy</a>
                                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="form-box">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-layer-minus mr-1"></i>Nơi xuất</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Phòng ban: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-md">
                                                    <select class="form-control" select2="">
                                                        <option value="">--- Chọn ---</option>
                                                        <option value="">Phòng kinh doanh 1</option>
                                                        <option value="" selected="">Phòng kinh doanh 2</option>
                                                        <option value="">Phòng kinh doanh 3</option>
                                                        <option value="">Phòng kinh doanh 4</option>
                                                        <option value="">Phòng kinh doanh 5</option>
                                                        <option value="">Phòng Kinh Doanh 6</option>
                                                        <option value="">Phòng Kinh Doanh 8</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Cán bộ thực hiện: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-md">
                                                    <select select2="" class="form-control">
                                                        <option>--- Chọn ---</option>
                                                        <option>Lê Văn A</option>
                                                        <option selected="">Lê Văn B</option>
                                                        <option>Lê Văn C</option>
                                                        <option>........</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150">
                                                            Ngày xuất: 
                                                            <span class="text-danger">*</span> 
                                                        </label>
                                                        <div class="col-content col-content-sm">
                                                            <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="02/04/2021">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150">
                                                            Số phiếu xuất: 
                                                            <span class="text-danger">*</span> 
                                                        </label>
                                                        <div class="col-content col-content-sm">
                                                            <input type="text" class="form-control " placeholder="" value="PX04/02/21" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-box mb-2">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-layer-plus mr-1"></i>Nơi nhận</p>
                                            <hr class="border-dashed border-silver mb-2">
                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Cán bộ: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-md">
                                                    <select select2="" class="form-control">
                                                        <option>--- Chọn ---</option>
                                                        <option>Lê Văn A</option>
                                                        <option>Lê Văn B</option>
                                                        <option selected="">Lê Văn C</option>
                                                        <option>........</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-box mb-2">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-file-certificate mr-1"></i>Ấn chỉ</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150">
                                                            Ký hiệu:
                                                            <span class="text-danger">*</span> 
                                                        </label>
                                                        <div class="col-content col-content-sm">
                                                            <input type="text" class="form-control " placeholder="" value="BB21/" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150">Ấn chỉ bắt buộc/tự nguyện:</label>
                                                        <div class="col-content col-content-md">
                                                            <select select2="" class="form-control">
                                                                <option>--- Chọn ---</option>
                                                                <option selected="">Bắt buộc và tự nguyện</option>
                                                                <option>Bắt buộc</option>
                                                                <option>Bắt buộc bao gồm tai nan</option>
                                                                <option>Vật chất xe máy</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Số lượng quyển:</label>
                                                <div class="col-content col-content-sm">
                                                    <input type="text" class="form-control input-number" placeholder="0" value="10" >
                                                </div>
                                            </div>
                              
                                            <div class="form-group mb-md-2">
                                                <div class="row form-group">
                                                    <label class="col-label col-label-150">Quyển số:</label>
                                                    <div class="col-content date-to-date">
                                                        <div class="d-flex">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <span class="input-group-text bg-grey-300 border-grey-300">Từ quyển số</span>
                                                                </span>
                                                                <input type="text" class="form-control input-number text-center" placeholder="0" value="9066">
                                                            </div>
                                                        </div>
                                                        <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
                                                        <div class="d-flex">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <span class="input-group-text bg-grey-300 border-grey-300">Đến quyển số</span>
                                                                </span>
                                                                <input type="text" class="form-control input-number text-center" placeholder="0" value="9075">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Danh sách quyển:</label>
                                                <div class="col-content col-content-xl">
                                                    <textarea class="form-control" placeholder="Nhập danh sách quyển...">9066,9067,9068,9069, 9070,9071,9072,9073,9074,9075</textarea>
                                                    <button type="button" class="btn btn-primary mt-2" onclick="fancybox_modal(this,'#cap_nhap_kenh_ban')">
                                                        <i class="far fa-bags-shopping mr-1"></i>
                                                        <span class="hidden-xs">Cấp nhập kênh bán</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-box mb-2">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-info-circle mr-1"></i>Thông tin bổ sung</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Lý do nhận: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-xl">
                                                    <input type="text" class="form-control" value="Nhập đơn">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Tài liệu kèm theo:</label>
                                                <div class="col-content col-content-xl">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Ghi chú: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-xl">
                                                    <textarea class="form-control" placeholder=""></textarea>
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
    <?php inc('modal/qlac/cap_nhap_kenh_ban.php'); ?>



</body>

<?php include_once FOOTER; ?>