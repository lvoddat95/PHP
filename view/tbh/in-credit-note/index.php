<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?> 
<?php $GLOBALS["menu"] = 'tbh,in-credit-note'; ?>
    <body>

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
                                <a href="<?php echo HTTP_PATH; ?>" class="breadcrumb-item"><i class="fad fa-home mr-1"></i>Trang chủ</a>
                                <a href="<?php echo HTTP_PATH .'view/tbh/hop-dong-tbh/'; ?>" class="breadcrumb-item">Tái bảo hiểm</a>
                               <span class="breadcrumb-item active">In Credit Note</span>
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
                                                <p class="t-top"><i class="icon-certificate mr-2"></i>IN CREDIT NOTE</p>
                                                <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                            </div>
                                            <div class="p-button">
                                                <a href=":;" class="btn btn-default btn-labeled btn-labeled-left mr-1"><b><i class="icon-printer2"></i></b> In chi tiết</a>
                                                <a href=":;" class="btn btn-primary btn-labeled btn-labeled-left mr-1"><b><i class="icon-printer2"></i></b> In hợp đồng</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="form-box mb-3">
                                                <p class="text-primary-800 font-weight-bold"><i class="fa fa-file-signature mr-1"></i>Hợp đồng cấu trúc tái cố định</p>
                                                <hr class="border-dashed border-silver mb-2">


                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Hợp đồng TBH: </label>
                                                    <div class="col-content col-content-lg">
                                                        <?php inc('template/tbh/hop_dong_tai_select_box.php'); ?>
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">{42C63AB5-9E65-4125-89FC-95B3376386D2}</label>
                                                    <div class="col-content col-content-lg">
                                                        <select class="form-control" select2>
                                                            <option>Section 1 - Marine Cargo</option>
                                                            <option>Section 2 - Marine Hull Treaty</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <hr class="border-dashed border-silver mb-2">

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Hình thức tái:</label>
                                                    <div class="col-content col-content-sm">
                                                        <select class="form-control" select2>
                                                            <option>Q/S</option>
                                                            <option>S/L</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Loại tiền:</label>
                                                    <div class="col-content col-content-sm">
                                                        <select class="form-control" select2>
                                                            <option>VND</option>
                                                            <option>USD</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-md-2">
                                                    <div class="row form-group">
                                                        <label class="col-label col-form-label">Ngày in:</label>
                                                        <div class="col-content date-to-date">
                                                            <div class="d-flex">
                                                                <div class="input-group">
                                                                    <span class="input-group-prepend">
                                                                        <span class="input-group-text">Từ ngày</span>
                                                                    </span>
                                                                    <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="">
                                                                </div>
                                                            </div>
                                                            <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
                                                            <div class="d-flex">
                                                                <div class="input-group">
                                                                    <span class="input-group-prepend">
                                                                        <span class="input-group-text">Đến ngày</span>
                                                                    </span>
                                                                    <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Năm nghiệp vụ: <span class="text-danger">*</span></label>
                                                    <div class="col-content col-content-xs">
                                                        <input type="text" class="form-control input-year text-center" placeholder="yyyy" value="">
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Đơn vị:</label>
                                                    <div class="col-content col-content-lg">
                                                        <?php inc('template/chi_nhanh.php'); ?>
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Hình thức cấp đơn:</label>
                                                    <div class="col-content col-content-md">
                                                        <select class="form-control" select2>
                                                            <option>Cấp mới</option>
                                                            <option>Huỷ</option>
                                                            <option>Sửa đổi bổ sung</option>
                                                            <option>Tái tục</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Hình thức khai thác:</label>
                                                    <div class="col-content col-content-md">
                                                        <select class="form-control" select2>
                                                            <option>--- Chọn ---</option>
                                                            <option>Đồng bảo hiểm</option>
                                                            <option>Nhận tái bảo hiểm</option>
                                                            <option>Khai thác trực tiếp</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Định dạng:</label>
                                                    <div class="col-content col-content-sm">
                                                        <select class="form-control" select2>
                                                            <option>Html</option>
                                                            <option>Excel 2003</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Lựa chọn in đơn BH:</label>
                                                    <div class="col-content col-content-sm">
                                                        <select class="form-control" select2>
                                                            <option>Tất cả</option>
                                                            <option>Chưa thu phí gốc</option>
                                                            <option>Đã thu phí gốc</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="form-box mb-3">
                                                <p class="text-primary-800 font-weight-bold"><i class="fa fa-lightbulb-exclamation mr-1"></i>Điều kiện bổ sung để in bản chi tiết</p>
                                                <hr class="border-dashed border-silver mb-2">

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Nhà tái:</label>
                                                    <div class="col-content col-content-lg">
                                                        <?php inc('template/tbh/nha_tai_select_box.php', false); ?>
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-sm-2">
                                                    <label class="col-label col-form-label">Số tham chiếu (Our Ref):</label>
                                                    <div class="col-content col-content-md">
                                                        <input type="text" class="form-control text-center" placeholder="" value="">
                                                    </div>
                                                </div>

                                      
                                                <div class="form-box mb-3">
                                                    <div class="row form-group mb-md-2">
                                                        <label class="col-label col-form-label">Ghi chú về hoa hồng (R/I Commission)  </label>
                                                        <div class="col-content col-content-xl">
                                                            <textarea class="form-control" placeholder="Nhập nội dung..."></textarea>
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

    </body>

<?php include_once FOOTER; ?>

