<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>

    <body class="sidebar-xs">
        
        <!-- page-content -->
        <div class="page-content">

            <?php include_once SIDEBAR; ?>
            
            <!-- content-wrapper -->
            <div class="content-wrapper">
                
                <!-- content -->
                <div class="content">

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="linearicons-text-align-left font-size-m font-weight-bold"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH; ?>" class="breadcrumb-item"><i class="fad fa-home mr-1"></i>Trang chủ</a>
                                <span class="breadcrumb-item active">Danh sách số hợp đồng đã xin cấp</span>
                            </div>
                            <div class="d-md-none logo-mobile">
                                <a href="<?php echo HTTP_PATH; ?>" class="logo-text">
                                    <div class="logo-img"><img src="app-assets/images/logo/logo2.png" alt="VNI Logo"></div>
                                    <span class="text align-middle" style="font-weight: 900;">VNI</span>
                                </a>
                            </div>
                        </div>

                        <?php include_once TOP_RIGHT; ?>
                    </div>
                    <!-- /Header -->

                    <div class="page-title">
                        <div class="p-title">
                            <p class="t-top"><i class="icon-certificate mr-2"></i>Danh sách số hợp đồng đã xin cấp</p>
                        </div>
                    </div>

                    <section class="content-block">
                        <div class="card card-search">
                            <div class="card-header header-elements-inline">
                                <p class="card-title font-size-s">
                                    <i style="width: 26px;height: 26px;line-height: 26px;font-size: 12px;" class="icon-search4 d-flex-inline align-items-center justify-content-center rounded-round bg-color mr-2"></i> 
                                    Tìm kiếm hợp đồng xin cấp
                                </p>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Đơn vị:</label>
                                            <?php inc('template/chi_nhanh.php'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Phòng ban:</label>
                                            <select class="form-control" select2 name="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="opt1">Phòng KD 1</option>
                                                <option value="opt2">Phòng KD 2</option>
                                                <option value="opt3">Phòng KD 3</option>
                                                <option value="opt4">Phòng KD 4</option>
                                                <option value="opt5">Phòng KD 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Cán bộ:</label>
                                            <select class="form-control" select2 name="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="opt1">Lê Văn A</option>
                                                <option value="opt2">Lê Văn B</option>
                                                <option value="opt3">Lê Văn C</option>
                                                <option value="opt4">Lê Văn D</option>
                                                <option value="opt5">Lê Văn E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="mb-0">Tình trạng sử dụng: </label>
                                            <select class="form-control" select2 >
                                                <option value="">--- Chọn trạng thái ---</option>
                                                <option value="opt1">Chưa sử dụng</option>
                                                <option value="opt2">Đã sử dụng</option>
                                                <option value="opt3">Không dùng nữa</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-semibold">Ngày lấy từ:</label>
                                                    <input type="text" class="form-control datepicker input-date" name="" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-semibold">Đến ngày:</label>
                                                    <input type="text" class="form-control datepicker input-date" name="" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="font-weight-semibold">Số hợp đồng:</label>
                                            <input type="text" class="form-control" name="" placeholder="Nhập số hợp đồng...">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="mb-0">VNI ký : </label>
                                            <select class="form-control" select2 >
                                                <option value="">--- Chọn ---</option>
                                                <option value="opt1">Đã ký</option>
                                                <option value="opt2">Chưa ký</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="mb-0">Khách hàng ký: </label>
                                            <select class="form-control" select2 >
                                                <option value="">--- Chọn ---</option>
                                                <option value="opt1">Đã ký</option>
                                                <option value="opt2">Chưa ký</option>
                                                <option value="opt3">Không ký</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-4 col-6">
                                        <div class="d-flex justify-content-end ">
                                            <div class="d-inline-block">
                                                <button type="submit" style="letter-spacing: 1px;" class="btn text-uppercase w-100 bg-orange"><i class="icon-search4 mr-2"></i> Tìm kiếm </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered table-hover datatable"  
                                            data-paging="true"
                                            data-info="true"
                                            data-ordering="true"
                                            data-searching="false">
                                            <thead class="thead-light">
                                                <th width="w1p" data-orderable="false" class="text-center">#</th>
                                                <th class="">Ngày lấy</th>
                                                <th width="">Số hợp đồng</th>
                                                <th width="">Loại hình bảo hiểm</th>
                                                <th class="desktop">Gói HĐ</th>
                                                <th width="">Khách hàng</th>
                                                <th class="desktop">Số lượng xe</th>
                                                <th>Trạng thái</th>
                                                <th class="desktop">Hạn dùng</th>
                                                <th class="desktop">Đề nghị</th>
                                                <th class="all w1p" data-orderable="false">#</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td>24/07/2020</td>
                                                    <td>012000006/B01</td>
                                                    <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                    <td></td>
                                                    <td>Tap Doan Vien Thong Quan Doi - Viettel</td>
                                                    <td>0</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>24/07/2020</td>
                                                    <td></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td>21/07/2020</td>
                                                    <td>012000035/B02</td>
                                                    <td>B02 - Bảo hiểm mọi rủi ro tài sản</td>
                                                    <td></td>
                                                    <td>SEOJIN VINA CO</td>
                                                    <td>0</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>21/07/2020</td>
                                                    <td></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td>17/07/2020</td>
                                                    <td>012000017/J06</td>
                                                    <td>J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật </td>
                                                    <td></td>
                                                    <td>KRIC Engineering 1st&2nd Surplus Treaty 2012-1st Quarter 2019-WIS</td>
                                                    <td>0</td>
                                                    <td>Đã sử dụng</td>
                                                    <td>17/07/2020</td>
                                                    <td></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer ">
                                <div class="p-button justify-content-end">
                                    <a href="#" data-toggle="modal" data-target="#xin_cap_hop_dong" class="btn btn-labeled btn-labeled-left mr-1"><b><i class="icon-file-check"></i></b> Xin cấp số hợp đồng</a>
                                    <a href="#" class="btn bg-primary"><i class="icon-checkmark4 mr-1"></i>Chọn</a>
                                </div>
                            </div>
                        </div>
                    </section>


                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                
                </div>
                <!-- /content -->

            </div>
            <!-- /content-wrapper -->
            
        </div>
        <!-- /page-content -->

        <?php inc('modal/modal_xin_cap_hop_dong.php'); ?> 
        <?php inc('modal/modal_xin_gia_han_hop_dong.php'); ?> 
        <?php inc('modal/modal_xin_huy_hop_dong.php'); ?> 

    </body>

<?php include_once FOOTER; ?>