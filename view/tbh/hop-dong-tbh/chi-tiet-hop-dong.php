<?php require_once '../../../config.php';?>
<?php include_once HEADER;?>
<?php $GLOBALS["menu"] = 'tbh,hop-dong-tbh';?>
<body>

    <div class="page-content home-page">

        <?php include_once SIDEBAR;?>

        <div class="content-wrapper">

            <div class="content">

                <!-- Header -->
                <div class="header-top">
                    <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                        <i class="far fa-align-left"></i>
                    </button>
                    <div class="top-left">
                        <div class="breadcrumb">
                            <a href="<?php echo HTTP_PATH . 'view/tbh/hop-dong-tbh/'; ?>" class="breadcrumb-item"><i class="fad fa-file-certificate mr-1"></i>Hợp đồng tái bảo hiểm</a>
                            <span class="breadcrumb-item active">Chi tiết hợp đồng <b class="text-danger">(HĐ: 006/2021)</b></span>
                        </div>
                        <div class="d-md-none logo-mobile">
                            <a href="<?php echo HTTP_PATH; ?>" class="logo-text">
                                <div class="logo-img"><img src="<?php echo HTTP_PATH . 'app-assets/images/logo/logo2.png'; ?>" alt="VNI Logo"></div>
                                <span class="text align-middle" style="font-weight: 900;">VNI</span>
                            </a>
                        </div>
                    </div>
                    <?php include_once TOP_RIGHT;?>
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
                                            <p class="t-top"><i class="icon-certificate mr-2"></i>Cập nhập thông tin hợp đồng</p>
                                            <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                        </div>
                                        <div class="p-button">
                                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">

                                        <div class="form-box mb-3">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-info-circle mr-1"></i>Thông tin chung</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150 col-form-label">
                                                            Số hợp đồng:
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-content col-content-sm">
                                                            <input type="text" class="form-control " placeholder="" value="006/2021" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150 col-form-label">
                                                            Ngày hợp đồng:
                                                        </label>
                                                        <div class="col-content col-content-sm">
                                                            <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="01/02/2021">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-md-2">
                                                <div class="row form-group">
                                                    <label class="col-label col-label-150 col-form-label">Thời hạn hợp đồng:</label>
                                                    <div class="col-content date-to-date">
                                                        <div class="d-flex">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <span class="input-group-text">Từ ngày</span>
                                                                </span>
                                                                <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="01/02/2021">
                                                            </div>
                                                        </div>
                                                        <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
                                                        <div class="d-flex">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <span class="input-group-text">Đến ngày</span>
                                                                </span>
                                                                <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="31/01/2024">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Tiêu đề: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-xl">
                                                    <input type="text" class="form-control" value="Hợp đồng TBH tỷ lệ Bảo An Tín 2021-2024">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Phương pháp tái: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-md">
                                                    <select select2="" class="form-control" disabled="">
                                                        <option>--- Chọn ---</option>
                                                        <option>Kết hợp số thành và mức đôi</option>
                                                        <option >Mức đôi</option>
                                                        <option selected>Số thành</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150 col-form-label">TL đồng bảo hiểm cần tính lại treaty: <span class="text-danger">*</span></label>
                                                        <div class="col-content col-content-sm">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text">%</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150 col-form-label">TL treaty tính lại<span class="text-danger">*</span></label>
                                                        <div class="col-content col-content-sm">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text">%</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">TL treaty tính lại với đơn nhận tái: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-sm">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">%</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Hoa hồng:</label>
                                                <div class="col-content col-content-sm">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">%</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Thông báo tổn thất ngay:</label>
                                                <div class="col-content col-content-md">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-money text-right" placeholder="0" value="50,000" >
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">USD</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Thu đòi bồi thường ngay:</label>
                                                <div class="col-content col-content-md">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-money text-right" placeholder="0" value="50,000" >
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">USD</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Kì thanh toán:</label>
                                                <div class="col-content col-content-xs">
                                                    <input type="text" class="form-control input-number text-center" placeholder="0" value="4" >
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Tình trạng áp dụng:</label>
                                                <div class="col-content col-content-xl d-inline-flex align-items-center">
                                                    <div class="button-switch mr-2">
                                                        <input type="checkbox" id="tttpv" class="switch" name="tttpv" checked="" disabled="">
                                                        <label for="tttpv" data-off="Không" data-on="Có"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-box mb-3">
                                            <p class="text-primary-800 font-weight-bold"><i class="icon-grid mr-1"></i>Danh sách nhà tái</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="form-group" repeater>
                                                <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                    <thead class="thead-light-3">
                                                        <tr>
                                                            <th><span class="text-danger">*</span> Tên công ty</th>
                                                            <th class="w12p text-center"><span class="text-danger">*</span> TL tham gia(%)</th>
                                                            <th class="w1p text-center">#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="danh-sach-nha-tai">
                                                        <tr data-repeater-item style="display: none">
                                                            <td>
                                                                <?php inc('template/tbh/nha_tai_select_box.php', false);?>
                                                            </td>
                                                            <td><input type="text" class="form-control input-float text-center" value="" placeholder="0"></td>
                                                            <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <?php inc('template/tbh/nha_tai_select_box.php', false);?>
                                                            </td>
                                                            <td><input type="text" class="form-control input-float text-center" value="100" placeholder="0"></td>
                                                            <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="border p-1" style="margin-top: -1px;">
                                                    <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-box mb-3">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-receipt mr-1"></i> Các nhóm treaty limit</p>
                                            <hr class="border-dashed border-silver mb-2">
                                            <div class="form-group" repeater>
                                                <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                    <thead class="thead-light-1">
                                                        <tr>
                                                            <th>Tên nhóm</th>
                                                            <th class="w75p">Mô tả</th>
                                                            <th class="w1p text-center">#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="danh-sach-nha-tai">
                                                        <tr data-repeater-item>
                                                            <td><a href="chi-tiet-nhom-treaty-limit.php">bảo an tín</a></td>
                                                            <td><a href="chi-tiet-nhom-treaty-limit.php">Bảo an tín</a></td>
                                                            <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="border p-1" style="margin-top: -1px;">
                                                    <a href="them-moi-nhom-treaty-limit.php" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-box mb-3">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-money-check-edit-alt mr-1"></i>Danh sách hợp đồng chi tiết</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="form-group" repeater>
                                                <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                    <thead class="thead-light-1">
                                                        <tr>
                                                            <th class="w20p">Số hợp đồng</th>
                                                            <th class="w20p">Ngày hợp đồng</th>
                                                            <th>Tiêu đề</th>
                                                            <th class="w1p text-center">#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="danh-sach-nha-tai">
                                                        <tr data-repeater-item>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="border p-1" style="margin-top: -1px;">
                                                    <a href="<?php echo HTTP_PATH . 'view/tbh/hop-dong-tbh/them-moi-hop-dong.php'; ?>" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
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

                <?php include_once MOBILE_NAV;?>
                <?php include_once BOTTOM;?>
            </div>

        </div>

    </div>
    <?php inc('modal/qlac/cap_nhap_kenh_ban.php');?>



</body>

<?php include_once FOOTER;?>