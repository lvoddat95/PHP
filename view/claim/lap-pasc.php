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
                                            <li class="nav-item"><a href="#modal_tab2" class="nav-link" data-toggle="tab">Thông tin xe</a></li>
                                            <li class="nav-item"><a href="#modal_tab3" class="nav-link" data-toggle="tab">Danh sách báo giá của gara</a></li>
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
                                                                        <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#">Chọn</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-2">
                                                    <span class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Hạng mục: Vật chất xe</span>
                                                </div>

                                                    <table class="table table-sm table-bordered datatable child-row-sm" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                        <thead class="thead-light">
                                                            <tr class="header">
                                                                <th rowspan="2" class="cell control not-desktop text-center">
                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                </th>
                                                                <th rowspan="2" class="w1p text-center">#</th>
                                                                <th rowspan="2" class="w15p">Hạng mục TT</th>
                                                                <th rowspan="2" class="w3p text-center">SL</th>
                                                                <th rowspan="2" class="w5p text-center">ĐVT</th>
                                                                <th colspan="3" class="text-center">PASC của Gara</th>
                                                                <th colspan="6" class="text-center">Giám định viên đề xuất</th>
                                                                <th colspan="2" class="w15p text-center">Giá tham chiếu</th>
                                                                <th rowspan="2" class="w5p none">Ghi chú</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="w5p">Thay thế</th>
                                                                <th class="w5p">Nhân công TT/SC</th>
                                                                <th class="w5p">Sơn</th>
                                                                <th class="w5p">Thay thế</th>
                                                                <th class="w5p">Nhân công TT/SC</th>
                                                                <th class="w5p">Sơn</th>
                                                                <th class="w5p">Chi phí</th>
                                                                <th class="w5p">Khấu hao(%)</th>
                                                                <th class="w5p">Tổng</th>
                                                                <th class="w7p">Thay thế</th>
                                                                <th class="w7p">Sơn</th>
                                                            </tr>
                                                        </thead>
                                      
                                                        <tbody>
                                                            <tr>
                                                                <td class="cell control not-desktop text-center" data-tooltip="tipsy" original-title="Xem thêm thông tin" data-position="top"></td>
                                                                <td align="center">1</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ">
                                                                        <input type="text" class="form-control" value="Cản sau ( Badoxoc sau)" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">6</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">900,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>900,000</b></td>

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
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">6</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">900,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>900,000</b></td>

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
                                                                        <input type="text" class="form-control" value="Cửa trước phải" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">6</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">900,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>900,000</b></td>

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
                                                                        <input type="text" class="form-control" value="Tai xe phải (vè phải)" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">6</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">900,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>900,000</b></td>

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
                                                                        <input type="text" class="form-control" value="Hông sau phải" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">6</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">900,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>900,000</b></td>

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
                                                                <td align="center">6</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ">
                                                                        <input type="text" class="form-control" value="Pavole phải" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">6</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">900,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>900,000</b></td>

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
                                                                <td align="center">7</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ">
                                                                        <input type="text" class="form-control" value="Cửa sau phải" placeholder="">
                                                                        <a class="d-flex align-items-center ml-1" href="#" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="far fa-image"></i> (<span class="text-danger">6</span>)</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-number text-center" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" value="Chiếc" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>

                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="1" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control input-money text-right" value="900000" placeholder="0">
                                                                </td>
                                                                <td class="text-right">900,000</td>
                                                                <td>
                                                                    <input type="text" class="form-control input-float text-right" value="0" placeholder="0">
                                                                </td>
                                                                <td class="text-right text-danger"><b>900,000</b></td>

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



                                            </div>
                                            <div class="tab-pane fade" id="modal_tab2">
                                                
                                            </div>
                                            <div class="tab-pane fade" id="modal_tab3">
                                                
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