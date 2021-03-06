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
                                <a href="<?php echo HTTP_PATH .'view/claim/danh-sach-ho-so.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> Số HS: BT042002618.F02</a>
                                <span class="breadcrumb-item active">Danh sách hạng mục sửa chữa</span>
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
                                            <p class="t-top"><i class="icon-certificate mr-2"></i>Phương án sửa chữa</p>
                                        </div>
                                        <div class="p-button">
                                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                                            <a href="javascript:;" class="btn mr-1"><i class="icon-printer2 mr-1"></i> In bảng kê giao phụ tùng thay thế</a>
                                            <a href="javascript:;" class="btn bg-primary mr-1"><i class="icon-printer2 mr-1"></i> In đề xuất phương án sửa chữa </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-style">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#modal_tab1" class="nav-link active show" data-toggle="tab">Thông tin giám định</a></li>
                                            <li class="nav-item"><a href="#modal_tab2" class="nav-link " data-toggle="tab">Thông tin xe</a></li>
                                            <li class="nav-item"><a href="#modal_tab3" class="nav-link " data-toggle="tab">Danh sách báo giá của gara</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="modal_tab1">
                                                <div class="row form-group">
                                                    <label class="col-label col-form-label">Hệ thống gara:</label>
                                                    <div class="col-content col-content-sm">
                                                        <select select2 class="form-control">
                                                            <option>--- Chọn ---</option>
                                                            <option>Trong hệ thống</option>
                                                            <option>Ngoài hệ thống</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-label col-form-label">Gara ôtô sửa chữa</label>
                                                    <div class="col-content col-content-xl">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4">
                                                                <input type="text" class="form-control required" placeholder="Nhập mã gara..." value="">
                                                            </div>
                                                            <div class="col-md-8 col-sm-8">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control required" placeholder="Nhập tên gara..." value="">
                                                                    <span class="input-group-append">
                                                                        <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_gara">Chọn</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <span class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Hạng mục: Vật chất xe</span>
                                                </div>

                                                <div class="table-responsive mb-2">
                                                    <table class="table table-fixed table-sm table-bordered datatable child-row-sm" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                        <colgroup>
                                                            <col width="2%">
                                                            <col width="2%">
                                                            <col width="15%">
                                                            <col width="3%">
                                                            <col width="5%">

                                                            <col width="5%">
                                                            <col width="5%">
                                                            <col width="5%">

                                                            <col width="5%">
                                                            <col width="5%">
                                                            <col width="5%">
                                                            <col width="5%">
                                                            <col width="3%">
                                                            <col width="5%">

                                                            <col width="5%">
                                                            <col width="5%">
                                                        </colgroup>
                                                        <thead class="thead-light">
        
                                                            <tr class="header">
                                                                <th rowspan="2" class="cell control not-desktop text-center">
                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                </th>
                                                                <th rowspan="2" class="all text-center">#</th>
                                                                <th rowspan="2" class="all">Hạng mục TT</th>
                                                                <th rowspan="2" class="all text-center">SL</th>
                                                                <th rowspan="2" class="all text-center">ĐVT</th>
                                                                <th colspan="3" class="all text-center">PASC của Gara</th>
                                                                <th colspan="6" class="all text-center">Giám định viên đề xuất</th>
                                                                <th colspan="2" class="all text-center">Giá tham chiếu</th>
                                                                <th rowspan="2" class="none">Ghi chú</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="all">Thay thế</th>
                                                                <th class="all">Nhân công TT/SC</th>
                                                                <th class="all">Sơn</th>
                                                                <th class="all">Thay thế</th>
                                                                <th class="all">Nhân công TT/SC</th>
                                                                <th class="all">Sơn</th>
                                                                <th class="all">Chi phí</th>
                                                                <th class="all">Khấu hao(%)</th>
                                                                <th class="all">Tổng</th>
                                                                <th class="all">Thay thế</th>
                                                                <th class="all">Sơn</th>
                                                            </tr>
                                                        </thead>
                                      
                                                        <tbody>
                                                            <tr>
                                                                <td class="cell control not-desktop text-center" data-tooltip="tipsy" original-title="Xem thêm thông tin" data-position="top"></td>
                                                                <td align="center">1</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ">
                                                                        <input type="text" class="form-control" value="trán ca bin" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">2</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="500000" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="700000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="300000" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="400000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">700,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>700,000</b></td>

                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td><input type="text" class="form-control col-content-xl"></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="cell control not-desktop text-center" data-tooltip="tipsy" original-title="Xem thêm thông tin" data-position="top"></td>
                                                                <td align="center">2</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ">
                                                                        <input type="text" class="form-control" value="Cản trước ( Badoxoc trước)" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">4</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="750000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">750,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>750,000</b></td>

                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td><input type="text" class="form-control col-content-xl"></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="cell control not-desktop text-center" data-tooltip="tipsy" original-title="Xem thêm thông tin" data-position="top"></td>
                                                                <td align="center">3</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ">
                                                                        <input type="text" class="form-control" value="sườn xe bên phụ" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">9</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="2500000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1500000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">1,500,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>1,500,000</b></td>

                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td><input type="text" class="form-control col-content-xl"></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="cell control not-desktop text-center" data-tooltip="tipsy" original-title="Xem thêm thông tin" data-position="top"></td>
                                                                <td align="center">4</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ">
                                                                        <input type="text" class="form-control" value="sườn xe bên lái" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">5</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="2500000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1500000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">1,500,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>1,500,000</b></td>

                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td><input type="text" class="form-control col-content-xl"></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="cell control not-desktop text-center" data-tooltip="tipsy" original-title="Xem thêm thông tin" data-position="top"></td>
                                                                <td align="center">5</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ">
                                                                        <input type="text" class="form-control" value="Kính chắn gió trước" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">3</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="4300000" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="500000" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="3800000" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="300000" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right">4,100,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>4,100,000</b></td>

                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select select2 data-dropdown-css-class="select2-sm">
                                                                        <option value="">--- Chọn ---</option>
                                                                    </select>
                                                                </td>
                                                                <td><input type="text" class="form-control col-content-xl"></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <table class="table table-borderless table-fixed table-sm">
                                                        <colgroup>
                                                            <col width="27%">

                                                            <col width="5%">
                                                            <col width="5%">
                                                            <col width="5%">

                                                            <col width="5%">
                                                            <col width="5%">
                                                            <col width="5%">
                                                            <col width="5%">
                                                            <col width="3%">
                                                            <col width="5%">
                                                            <col width="10%">
                                                        </colgroup>
                                                        <!-- <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Thay thế</th>
                                                                <th>Nhân công TT/SC</th>
                                                                <th>Sơn</th>
                                                                <th>Thay thế</th>
                                                                <th>Nhân công TT/SC</th>
                                                                <th>Sơn</th>
                                                                <th>Chi phí</th>
                                                                <th>Khấu hao(%)</th>
                                                                <th>Tổng</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead> -->
                                                        <tbody>
                                                            <tr>
                                                                <td><b>Tổng cộng:</b></td>

                                                                <td class="text-right text-danger">
                                                                    <b>4,300,000</b>
                                                                </td>

                                                                <td class="text-right text-danger">
                                                                    <b>1,000,000</b>
                                                                </td>

                                                                <td class="text-right text-danger">
                                                                    <b>6,600,000</b>
                                                                </td>

                                                                <td class="text-right text-danger">
                                                                    <b>3,800,000</b>
                                                                </td>

                                                                <td class="text-right text-danger">
                                                                    <b>600,000</b>
                                                                </td>

                                                                <td class="text-right text-danger">
                                                                    <b>4,500,000</b>
                                                                </td>

                                                                <td class="text-right text-danger">
                                                                    <b>8,500,000</b>
                                                                </td>

                                                                <td></td>

                                                                <td class="text-right text-danger">
                                                                    <b>8,500,000</b>
                                                                </td>

                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="">
                                                    <div style="max-width: 540px;">
                                                        <div class="border-1 border-dashed border-silver p-2">
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label font-weight-normal">- Chi phí sửa chữa thay thế(1):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right" type="text" value="" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label font-weight-normal">- Chi phí khấu hao phụ tùng thay mới(2):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right" type="text" value="" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label font-weight-normal">- Giảm trừ theo tỷ lệ phí bảo hiểm(3)=(1)*(tỷ lệ thiếu):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right" type="text" value="" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label font-weight-normal">- Chế tài bồi thường(4):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right" type="text" value="" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label font-weight-normal">- Giảm giá sửa chữa(5):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right" type="text" value="" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label font-weight-normal">- Khấu trừ theo đơn(6):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right" type="text" value="" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label font-weight-normal">- Khấu trừ theo vụ(7):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right" type="text" value="" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label">- Tổng (8)=(1)-(2+3+4+5+6+7):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right text-danger font-weight-bold" type="text" value="0" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label">- Chi phí cứu hộ(9):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right text-danger font-weight-bold" type="text" value="0" placeholder="0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-8 col-form-label">- Tổng chi bồi thường ước tính(10)-(8)+(9):</label>
                                                                <div class="col-md-4 col-content-sm">
                                                                    <input class="form-control input-money text-right text-danger font-weight-bold" type="text" value="0" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade " id="modal_tab2">
                                                <div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Tên chủ xe:</label>
                                                                <div class="col-content col-content-lg">
                                                                    Nguyễn Mạnh Tường
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Nhóm xe:</label>
                                                                <div class="col-content col-content-lg">
                                                                    Xe ô tô không KDVT dưới 9 chỗ
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Loại xe:</label>
                                                                <div class="col-content col-content-lg">
                                                                    Ô tô không KD vận tải - Dưới 6 chỗ ngồi
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Hãng xe:</label>
                                                                <div class="col-content col-content-lg">
                                                                    Z- Hãng xe khác
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Hiệu xe:</label>
                                                                <div class="col-content col-content-lg">
                                                                    Z- Hiệu xe khác
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Năm sản xuất:</label>
                                                                <div class="col-content col-content-lg">
                                                                    2020
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Biển kiểm soát:</label>
                                                                <div class="col-content col-content-lg">
                                                                    30G37082
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Số khung:</label>
                                                                <div class="col-content col-content-lg">
                                                                    924857
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Số máy:</label>
                                                                <div class="col-content col-content-lg">
                                                                    56907
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Số chỗ ngồi:</label>
                                                                <div class="col-content col-content-lg">
                                                                    5
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Trọng tải:</label>
                                                                <div class="col-content col-content-lg">
                                                                    0
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Màu sơn:</label>
                                                                <div class="col-content col-content-lg">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Mức miễn thường:</label>
                                                                <div class="col-content col-content-lg">
                                                                    Có khấu trừ
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row form-group">
                                                                <label class="col-label">Số tiền miễn thường:</label>
                                                                <div class="col-content col-content-lg">
                                                                    500,000
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <label class="col-label">Điều khoản sử đổi bổ sung:</label>
                                                        <div class="col-content">
                                                            <table class="table table-bordered datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false" >
                                                                <thead class="thead-light">
                                                                    <tr class="header">
                                                                        <th class="all">Mã</th>
                                                                        <th class="desktop">Rủi ro</th>
                                                                        <th class="desktop">Giá trị bảo hiểm</th>
                                                                        <th class="all">Tỷ lệ</th>
                                                                        <th class="all">Phí bảo hiểm</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>BS01</td>
                                                                        <td>Bảo hiểm thay thế mới (bảo hiểm mới thay cũ)</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS02</td>
                                                                        <td>Bảo hiểm lựa chọn cơ sở sửa chữa chính hãng</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS03</td>
                                                                        <td>Bảo hiểm thuê xe trong thời gian sửa chữa (bảo hiểm gián đoạn sử dụng xe)</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS04</td>
                                                                        <td>Bảo hiểm đối với xe miễn thuế, tạm nhập, tái xuất</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS05</td>
                                                                        <td>Bảo hiểm vật chất xe cơ giới ngoài lãnh thổ Việt Nam (Trung Quốc, Lào, Cămpuchia và Thái Lan):</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS06</td>
                                                                        <td>Bảo hiểm tổn thất do Thủy kích</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS07</td>
                                                                        <td>Bảo hiểm vật chất xe cơ giới lưu hành tạm thời</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS08</td>
                                                                        <td>Bảo hiểm mất bộ phận</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS09</td>
                                                                        <td>Bảo hiểm xe tập lái</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS10</td>
                                                                        <td>Bảo hiểm tổn thất xảy ra trong quá trình hoạt động của thiết bị chuyên dùng</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>BS11</td>
                                                                        <td>Các điều khỏan thỏa thuận bổ sung khác</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;</td>
                                                                        <td>&nbsp;</td>
                                                                        <td>&nbsp;</td>
                                                                        <td>&nbsp;</td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>          
                                            </div>

                                            <div class="tab-pane fade" id="modal_tab3">
                                                <div class="mb-2">
                                                    <span class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Danh sách gara báo giá</span>
                                                </div>
                                                <table class="table table-bordered datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                    <thead>
                                                        <tr class="thead-light">
                                                            <th class="w1p">#</th>
                                                            <th>Tên gara</th>
                                                            <th>Giá</th>
                                                            <th class="desktop">Tài liệu</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
                <!-- /content -->

            </div>
            <!-- /content-wrapper -->
        </div>
        <!-- /page-content -->
        <?php inc('modal/modal_khieu_nai_boi_thuong.php'); ?> 
        <?php inc('modal/modal_ds_gara.php'); ?> 
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