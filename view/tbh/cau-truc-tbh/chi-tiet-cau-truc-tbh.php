<?php require_once '../../../config.php';?>
<?php include_once HEADER;?>
<?php $GLOBALS["menu"] = 'tbh,cau-truc-tbh';?>
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
                            <a href="<?php echo HTTP_PATH . 'view/tbh/cau-truc-tbh/'; ?>" class="breadcrumb-item"><i class="fad fa-file-certificate mr-1"></i>Cấu trúc tái bảo hiểm</a>
                            <span class="breadcrumb-item active">Đơn BH: <b class="text-danger">012000007/B01</b></span>
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
                                            <p class="t-top"><i class="icon-certificate mr-2"></i>Xác định cấu trúc tái bảo hiểm</p>
                                            <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                        </div>
                                        <div class="p-button">
                                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                                            <a href="javascript:;" class="btn bg-danger"><i class="fa fa-ban mr-1"></i> Từ chối</a>
                                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">

                                        <div class="form-box mb-3">
                                            <p class="text-primary-800 font-weight-bold">Thông tin chung về đơn</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Đơn bảo hiểm số:</label>
                                                <div class="col-content">
                                                    <span>012000007/B01</span>
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Loại hình bảo hiểm:</label>
                                                <div class="col-content">
                                                    B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Thời hạn bảo hiểm:</label>
                                                <div class="col-content">
                                                    24/08/2020 đến 24/08/2021
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Người được bảo hiểm:</label>
                                                <div class="col-content">
                                                    CÔNG TY TNHH FOSECA VIỆT NAM
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Địa chỉ:</label>
                                                <div class="col-content">
                                                    SỐ 18, ĐƯỜNG 10, KHU ĐÔ THỊ VÀ DỊCH VỤ VSIP Bắc Ninh. xã Đại Đồng, huyện Tiên Du, Bắc Ninh
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Tình trạng tái:</label>
                                                <div class="col-content">
                                                    Chưa xác định
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Loại tiền trên đơn:</label>
                                                <div class="col-content">
                                                    VND
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Số tiền bảo hiểm:</label>
                                                <div class="col-content">
                                                    1,311,992,212,990
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Phí bảo hiểm: <br><i>(chưa VAT)</i></label>
                                                <div class="col-content">
                                                    655,996,106
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Phí bảo hiểm tính tái: <br><i>(chưa VAT)</i></label>
                                                <div class="col-content">
                                                    65,599,610
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">TL bảo hiểm trên đơn gốc(%):</label>
                                                <div class="col-content">
                                                    10
                                                </div>
                                            </div>
                                            <div class="row form-group mb-sm-2">
                                                <label class="col-label col-form-label">Ban NV xác nhận:</label>
                                                <div class="col-content">
                                                    <span class="badge badge-dark">Chưa xác nhận</span>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary mt-2" onclick="fancybox_modal(this,'#chon_pham_vi_tinh_tai')">
                                                <span class="hidden-xs">Chọn phạm vi tính tái</span>
                                            </button>
                                            <?php inc('modal/tbh/chon_pham_vi_tinh_tai.php');?>

                                        </div>

                                        <div class="card card-radio border-1 border-dashed border-silver shadow-0 rounded-0 mb-3">
                                            <div class="card-header header-elements-inline" >
                                                <p class="card-title text-primary-800 font-weight-bold">Hình thức tái <span class="text-danger">*</span></p>
                                                <div class="d-flex list-radio">
                                                    <div class="form-check form-check-inline m-0 mr-2">
                                                        <input type="radio" id="tam-thoi" value="tam-thoi" class="mr-1" name="hinh-thuc-tbh" checked="" onchange="on_change_hinh_thuc_tbh(this);">
                                                        <label for="tam-thoi" class="form-check-label w80">Tạm thời</label>
                                                    </div>
                                                    <div class="form-check form-check-inline m-0 mr-2">
                                                        <input type="radio" id="co-dinh" value="co-dinh" class="mr-1" name="hinh-thuc-tbh" onchange="on_change_hinh_thuc_tbh(this);">
                                                        <label for="co-dinh" class="form-check-label ml-1 w80">Cố định</label>
                                                    </div>
                                                    <div class="form-check form-check-inline m-0 mr-2">
                                                        <input type="radio" id="ket-hop" value="ket-hop" class="mr-1" name="hinh-thuc-tbh" onchange="on_change_hinh_thuc_tbh(this);">
                                                        <label for="ket-hop" class="form-check-label ml-1 w80">Kết hợp</label>
                                                    </div>
                                                    <div class="form-check form-check-inline m-0">
                                                        <input type="radio" id="khac" value="khac" class="mr-1" name="hinh-thuc-tbh" onchange="on_change_hinh_thuc_tbh(this);">
                                                        <label for="khac" class="form-check-label ml-1">Khác</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="border-dashed border-silver mt-0 mb-1">

                                            <div class="card-body">

                                                <div>
                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">Đơn vị tiền áp dụng:</label>
                                                        <div class="col-content col-content-sm">
                                                            <select name="" id="" class="form-control" select2>
                                                                <option>--- Chọn ---</option>
                                                                <option class="text-center">USD</option>
                                                                <option selected="">VND</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">Tỷ giá tương ứng:</label>
                                                        <div class="col-content col-content-sm">
                                                            <input class="form-control input-float text-center" type="text" name="" value="1" placeholder="0">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">Cháy nổ bắt buộc:</label>
                                                        <div class="col-content">
                                                                <div class="form-check form-check-inline m-0 mr-2">
                                                                    <input type="radio" id="chay-no-bb-01" class="mr-1" name="chay-no-bb" checked="">
                                                                    <label for="chay-no-bb-01" class="form-check-label ">Không có cháy nổ bắt buộc</label>
                                                                </div>
                                                                <div class="form-check form-check-inline m-0 mr-2">
                                                                    <input type="radio" id="chay-no-bb-02" class="mr-1" name="chay-no-bb">
                                                                    <label for="chay-no-bb-02" class="form-check-label ">Có cháy nổ bắt buộc</label>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="cau-tuc-tai-theo-treaty" class="form-group box-inner-card" style="display: none;">

                                                    <p class="card-title text-primary-800 font-weight-bold">Tham số xác định cấu trúc TBH theo treaty <span class="text-danger">*</span></p>
                                                    <hr class="border-dashed border-silver">

                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">Hợp đồng TBH:</label>
                                                        <div class="col-content col-content-lg">
                                                            <?php inc('template/tbh/hop_dong_tai_select_box.php');?>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">Section tính TBH:</label>
                                                        <div class="col-content col-content-lg">
                                                            <select class="form-control" select2>
                                                                <option>Section 1 - Marine Cargo</option>
                                                                <option>Section 2 - Marine Hull Treaty</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">Treaty limit:</label>
                                                        <div class="col-content col-content-lg">
                                                            <select class="form-control" select2>
                                                                <option>D1</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">Mã:</label>
                                                        <div class="col-content col-content-sm">
                                                            <input class="form-control" type="text" name="" value="" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">Tỉ lệ Treaty theo đối tượng:</label>
                                                        <div class="col-content col-content-sm">
                                                            <input class="form-control text-center input-float" type="text" name="" value="100" placeholder="0.0">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group mb-sm-2">
                                                        <label class="col-label col-form-label">TL treaty tính lại:</label>
                                                        <div class="col-content col-content-sm">
                                                            <input class="form-control text-center input-float" type="text" name="" value="50" placeholder="0.0">
                                                        </div>
                                                    </div>

                                                    <button type="button" class="btn btn-primary mt-2">
                                                        <span class="hidden-xs">Xác định cấu trúc TBH theo treaty</span>
                                                    </button>
                                                </div>

                                                <div class="form-group">
                                                    <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th class="all w20p"></th>
                                                                <th class="desktop w7p text-center">(%)TN</th>
                                                                <th class="all w15p text-center">Mức TN</th>
                                                                <th class="desktop text-center">Phí BH</th>
                                                                <th class="desktop text-center">Com</th>
                                                                <th class="desktop text-center">Phí NET</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>Phần giữ lại</b></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr id="tbh-facout" style="display: none;">
                                                                <td>Facout</td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr id="tbh-qs" style="display: none;">
                                                                <td>Q/S</td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr id="tbh-sl" style="display: none;">
                                                                <td>S/L</td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td><b>Phần tái đi</b></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div id="nha-tai-table" class="" repeater >
                                                    <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                        <thead class="thead-light-1">
                                                            <tr>
                                                                <th class="all w20p">Nhà tái</th>
                                                                <th class="desktop w7p text-center">(%)TN</th>
                                                                <th class="all w15p text-center">Mức TN</th>
                                                                <th class="desktop text-center">Phí TBH</th>
                                                                <th class="desktop w7p text-center">(%)Com</th>
                                                                <th class="desktop text-center">Com</th>
                                                                <th class="all w1p"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody data-repeater-list="treaty-limit">
                                                            <tr data-repeater-item>
                                                                <td><?php inc('template/tbh/nha_tai_select_box.php', false);?></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="border p-1" style="margin-top: -1px;">
                                                        <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
                                                    </div>
                                                </div>

                                                <div id="nha-tai-co-dinh-table" repeater datatable-onHide style="display: ;">
                                                    <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                        <thead class="thead-light-1">
                                                            <tr>
                                                                <th class="all w20p">Nhà tái</th>
                                                                <th class="desktop w7p text-center">(%)TN</th>
                                                                <th class="desktop w7p text-center">Q/S</th>
                                                                <th class="desktop w7p text-center">S/L</th>
                                                                <th class="all w15p text-center">Mức TN</th>
                                                                <th class="desktop text-center">Phí TBH</th>
                                                                <th class="desktop w7p text-center">(%)Com</th>
                                                                <th class="desktop text-center">Com</th>
                                                                <th class="all w1p"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody data-repeater-list="treaty-limit">
                                                            <tr data-repeater-item>
                                                                <td><?php inc('template/tbh/nha_tai_select_box.php', false);?></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="border p-1" style="margin-top: -1px;">
                                                        <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
                                                    </div>
                                                </div>

                                                <div id="nha-tai-ket-hop-table" repeater datatable-onHide style="display: ;">
                                                    <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                        <thead class="thead-light-1">
                                                            <tr>
                                                                <th class="all w20p">Nhà tái</th>
                                                                <th class="desktop w7p text-center">(%)TN</th>
                                                                <th class="desktop w7p text-center">Q/S</th>
                                                                <th class="desktop w7p text-center">S/L</th>
                                                                <th class="all w15p text-center">Mức TN</th>
                                                                <th class="desktop text-center">Phí TBH</th>
                                                                <th class="desktop w7p text-center">(%)Com</th>
                                                                <th class="desktop text-center">Com</th>
                                                                <th class="desktop w7p text-center">(*)</th>
                                                                <th class="desktop w1p text-center">(TR)</th>
                                                                <th class="all w1p"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody data-repeater-list="treaty-limit">
                                                            <tr data-repeater-item>
                                                                <td><?php inc('template/tbh/nha_tai_select_box.php', false);?></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td><input class="form-control text-right input-money" type="text" name="" value="" placeholder="0"></td>
                                                                <td><input class="form-control text-center input-float" type="text" name="" value="" placeholder="0.0"></td>
                                                                <td class="text-center"><input type="checkbox" name="" value=""></td>
                                                                <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="border p-1" style="margin-top: -1px;">
                                                        <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p class="m-0"><b class="text-danger">(*)</b> : <i>Tỷ lệ bảo hiểm trong phần treaty</i></p>
                                                        <p class="m-0"><b class="text-danger">(TR)</b> : <i>Nếu có dấu check là được tính theo Treaty, ngược lại là Facout</i></p>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="form-box mb-3">
                                            <div class="row form-group mb-md-2">
                                                <label class="col-label col-form-label">Ý kiến(Khi từ chối xác định cấu trúc TBH)  </label>
                                                <div class="col-content">
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
                <!-- /Content-block -->

                    <?php include_once MOBILE_NAV;?>
                    <?php include_once BOTTOM;?>
                </div>

            </div>

        </div>
        <?php inc('modal/qlac/cap_nhap_kenh_ban.php');?>



</body>

<?php include_once FOOTER;?>