<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'de-nghi-cap-ac-them-moi,de-nghi-cap-ac'; ?>
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
                            <span class="breadcrumb-item active">Đề nghị cấp ấn chỉ - Thêm mới</span>
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
                        <p class="font-weight-semibold font-size-m mb-0"><i class="fad fa-address-card mr-1"></i>Đề nghị cấp ấn chỉ - Thêm mới</p>
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
                                            <a href="javascript:;" class="btn mr-1"><i class="far fa-print mr-1"></i> In giấy đề nghị cấp AC</a>
                                            <a href="javascript:;" class="btn mr-1"><i class="far fa-shredder mr-1"></i> Ghi &amp; In</a>

                                            <a href="javascript:;" class="btn mr-1"><i class="far fa-file-plus mr-1"></i> Lưu &amp; Thêm mới</a>
                                            <a href="javascript:;" class="btn mr-1"><i class="far fa-files-medical mr-1"></i> Lưu &amp; Copy</a>
                                            <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Copy</a>
                                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="form-box mb-3">
                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Lãnh đạo đơn vị: </label>
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
                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Ngày đề nghị:  <span class="text-danger">*</span> </label>
                                                <div class="col-content col-content-sm">
                                                    <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Hình thức nhận: <span class="text-danger">*</span> </label>
                                                <div class="col-content col-content-md">
                                                    <select select2="" class="form-control">
                                                        <option>--- Chọn ---</option>
                                                        <option selected="">Qua bưu điện</option>
                                                        <option>Khác</option>
                                                        <option>Trực tiếp</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Nội dung:  <span class="text-danger">*</span> </label>
                                                <div class="col-content col-content-xl">
                                                    <textarea class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Lí do:</label>
                                                <div class="col-content col-content-xl">
                                                    <textarea class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-label col-label-150">Mở rộng kinh doanh:</label>
                                                <div class="col-content col-content-xs">
                                                    <div class="button-switch">
                                                        <input type="checkbox" id="tttpv" class="switch required" name="tttpv">
                                                        <label for="tttpv" data-off="Không" data-on="Có"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-box mb-3">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-file-certificate mr-1"></i>Danh sách loại ấn chỉ yêu cầu </p>
                                            <hr class="border-dashed border-silver mb-2">
                                            <div class="form-group" repeater>
                                                <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th class="w40p">Loại ấn chỉ</th>
                                                            <th class="w20p">Ấn chỉ bắt buộc/tự nguyện</th>
                                                            <th class="w15p">Số lượng  </th>
                                                            <th class="w1p"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="loai_khau_tru">
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <select select2="" class="form-control">
                                                                    <option value="GCNBH_MV" id="GCNBH_MV">Ấn chỉ bảo hiểm xe ô tô</option>
                                                                    <option value="GCNBH_MC" id="GCNBH_MC">Ấn chỉ bảo hiểm xe máy</option>
                                                                    <option value="BHDL" id="BHDL">Ấn chỉ bảo hiểm du lịch</option>
                                                                    <option value="HUE" id="HUE">Ấn chỉ bảo hiểm tai nạn hộ sử dụng điện</option>
                                                                    <option value="G03" id="G03">Ấn chỉ bảo hiểm tai nạn con người</option>
                                                                    <option value="Hoadon" id="Hoadon">Hóa đơn giá trị gia tăng</option>
                                                                    <option value="G14" id="G14">Tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng</option>
                                                                    <option value="B16" id="B16">Bảo hiểm toàn diện nhà chung cư</option>
                                                                    <option value="HouseHold" id="HouseHold">Toàn Diện Hộ Gia Đình</option>
                                                                    <option value="G16" id="G16">Giấy chứng nhận Bảo An tín dụng (Bình An)</option>
                                                                    <option value="BHSK" id="BHSK">Ấn chỉ bảo hiểm sức khỏe toàn diện</option>
                                                                    <option value="G17" id="G17">Ấn chỉ bảo hiểm tai nạn giao thông đường bộ</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select select2="" class="form-control">
                                                                    <option id="" value="" name="">--- Chọn ---</option>
                                                                    <option id="BAT_BUOC" value="BAT_BUOC" name="Bắt buộc">Bắt buộc</option>
                                                                    <option id="BAT_BUOC_DAI" value="BAT_BUOC_DAI" name="Bắt buộc dài">Bắt buộc bao gồm tai nạn</option>
                                                                    <option id="BAT_BUOC_TU_NGUYEN" value="BAT_BUOC_TU_NGUYEN" name="Bắt buộc và tự nguyện">Bắt buộc và tự nguyện</option>
                                                                    <option id="VC_XE_MAY" value="VC_XE_MAY" name="Vật chất xe máy">Vật chất xe máy</option>
                                                                </select>
                                                            </td>
                                                            <td><input type="text" class="form-control input-number text-left" value="" placeholder="0"></td>
                                                            <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="border p-1" style="margin-top: -1px;">
                                                    <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
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