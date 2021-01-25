<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>
    
    <body class="sidebar-xs">

        <div class="page-content home-page">

            <?php include_once SIDEBAR; ?>

            <div class="content-wrapper">

                <div class="content">

                    <?php include_once MOBILE_NAV; ?>

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="far fa-align-left"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH; ?>" class="breadcrumb-item"><i class="fad fa-home mr-1"></i>Trang chủ</a>
                                <a href="<?php echo HTTP_PATH .'view/claim/danh-sach-ho-so.php'; ?>" class="breadcrumb-item">F02 - Bảo hiểm ô tô</a>
                               <span class="breadcrumb-item active">Danh sách hồ sơ bồi thường</span>
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

                    <div class="page-title">
                        <div class="p-title">
                            <h1 class="font-weight-semibold font-size-m"><i class="icon-stack-text mr-2"></i>Danh sách hồ sơ bồi thường</h1>
                        </div>
                        <div class="p-button">
                            <a href="<?php echo HTTP_PATH .'view/claim/danh-sach-ton-that.php'; ?>" class="btn btn-labeled btn-labeled-left mr-1"><b><i class="icon-alert"></i></b> Thông báo tổn thất</a>
                            <a href="<?php echo HTTP_PATH .'view/claim/nhap-ho-so.php'; ?>" class="btn bg-primary btn-labeled btn-labeled-left m"><b><i class="icon-plus2 r-1"></i></b> Thêm mới</a>
                        </div>
                    </div>
                    
                    <!-- Content-block -->
                    <div class="content-block">
                    
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card">
                                    <div class="card-body ">
                                        <div class="bieu-do d-flex align-items-start justify-content-between flex-wrap">
                                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                                <span class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon">
                                                    <i class="fad fa-history"></i>
                                                </span>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-m">14,327 (đơn)</h5>
                                                    <span class="badge badge-mark border-warning mr-1"></span> 
                                                    <span class="text-muted font-size-s">Đang chờ duyệt PASC</span>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                                <span class="btn bg-transparent border-success-400 text-success-400 rounded-round border-2 btn-icon">
                                                    <i class="icon-file-upload"></i>
                                                </span>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-m">1,327 (đơn)</h5>
                                                    <span class="badge badge-mark border-success mr-1"></span> 
                                                    <span class="text-muted font-size-s">Chờ duyệt quá trình giải quyết</span>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                                <span class="btn bg-transparent border-primary-400 text-primary-400 rounded-round border-2 btn-icon">
                                                    <i class="icon-spinner3"></i>
                                                </span>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-m">427 (đơn)</h5>
                                                    <span class="badge badge-mark border-primary mr-1"></span> 
                                                    <span class="text-muted font-size-s">Đang xử lý</span>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                                <span class="btn bg-transparent border-dark-400 text-dark-400 rounded-round border-2 btn-icon">
                                                    <i class="icon-lock2"></i>
                                                </span>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-m">327 (đơn)</h5>
                                                    <span class="badge badge-mark border-dark mr-1"></span> 
                                                    <span class="text-muted font-size-s">Đơn đã đóng</span>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                                <span class="btn bg-transparent border-danger-400 text-danger-400 rounded-round border-2 btn-icon">
                                                    <i class="icon-arrow-up16"></i>
                                                </span>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-m">4,327 (đơn)</h5>
                                                    <span class="badge badge-mark border-danger mr-1"></span> 
                                                    <span class="text-muted font-size-s">Đơn qúa hạn</span>
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-search">
                                    <div class="card-header header-elements-inline">
                                        <p class="card-title font-size-s">
                                            <i style="width: 26px;height: 26px;line-height: 26px;font-size: 12px;" class="icon-search4 d-flex-inline align-items-center justify-content-center rounded-round bg-color mr-2"></i> 
                                            Tìm kiếm hồ sơ bồi thường
                                        </p>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="list-icons-item" data-action="collapse"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Loại hình bảo hiểm:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-building"></i></span>
                                                            </span>
                                                            <?php inc('template/loai_hinh.php'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Đơn vị:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-building"></i></span>
                                                            </span>
                                                            <?php inc('template/chi_nhanh.php'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Phòng ban:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-building"></i></span>
                                                            </span>
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
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-6 ">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Cán bộ bồi thường:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-user-tie"></i></span>
                                                            </span>
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
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-6 ">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Khách hàng:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-user-alt"></i></span>
                                                        </span>
                                                        <input type="text" class="form-control" name="" placeholder="Nhập tên khách hàng...">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-semibold">Số hồ sơ:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-id-card"></i></span>
                                                        </span>
                                                        <input type="text" class="form-control" name="" placeholder="Nhập số hồ sơ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-semibold">Số đơn bảo hiểm:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-id-card"></i></span>
                                                        </span>
                                                        <input type="text" class="form-control" name="" placeholder="Nhập số đơn...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-semibold">Ngày tổn thất:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                                        </span>
                                                        <input type="text" class="form-control datepicker input-date" name="" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-semibold">Ngày TB tổn thất:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                                        </span>
                                                        <input type="text" class="form-control datepicker input-date" name="" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Tìm HSBT tại:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                            </span>
                                                            <select class="form-control" select2>
                                                                <option value="">Đơn vị</option>
                                                                <option value="">Đơn vị giám định bồi thường hộ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Hình thức giám định:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                            </span>
                                                            <select class="form-control" select2>
                                                                <option value="-1" data-select2-id="17">Online</option>
                                                                <option value="4" data-select2-id="18">Offline</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Trạng thái:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                            </span>
                                                            <select class="form-control" select2>
                                                                <option value="da-giam-dinh">Đã giám định</option>
                                                                <option value="dang-xu-li">Chưa giám định</option>
                                                                <option value="da-dong">Đã đóng</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-4 col-6">
                                                <div class="d-flex justify-content-end ">
                                                    <div class="d-inline-block">
                                                        <button type="button" id="search-data" class="btn bg-primary"><i class="fa fa-filter mr-1"></i>Lọc</button>
                                                        <button type="button" id="clear-filter" class="btn btn-light" data-dismiss="modal"><i class="icon-cross2 mr-1"></i>Hủy điều kiện lọc</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <!-- Danh sách đơn -->
                                <div class="card">
                                    <div class="card-header header-elements-inline header-button ">
                                        <p class="card-title font-size-s">Danh sách hồ sơ bồi thường</p>
                                        <div class="header-elements p-button">
                                            <a href="#" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-file-locked"></i></b> Đóng hồ sơ</a>
                                            <a href="#" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-trash"></i></b> Xóa hồ sơ</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered datatable" 
                                            data-paging="true"
                                            data-info="true"
                                            data-ordering="false"
                                            data-searching="false"
                                            data-page-length="19">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th data-orderable="false" class="text-center w1p"><input type="checkbox" id="input-chk-all"></th>
                                                    <th>Số hồ sơ</th>
                                                    <th>Số đơn BH</th>
                                                    <th>Tên khách hàng</th>
                                                    <th data-orderable="false" class="w10p">Đối tượng</th>
                                                    <th data-orderable="false" class="w7p text-center">Số ngày tồn</th>
                                                    <th class="w10p text-center">Ngày tổn thất</th>
                                                    <th class="w10p text-center">Ngày thông báo</th>
                                                    <th class="w10p">Cán bộ bồi thường</th>
                                                    <th class="w7p text-center">Trạng thái</th>
                                                    <th data-orderable="false" class="text-center all w1p">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000057.F02</td>
                                                    <td>7692000974/F02.E01.BB19/0118621</td>
                                                    <td>ĐỖ TRỌNG TUẤN</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000056.F02</td>
                                                    <td>7692000544/F02.BB19/0118666</td>
                                                    <td>TẠ ĐỨC VINH</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000055.F02</td>
                                                    <td>7692001669/F02.BB19/0127836</td>
                                                    <td>NGUYỄN QUANG ĐẠO</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-dark" id="">Đã đóng</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000054.F02</td>
                                                    <td>7692001525/F02.BB19/0127949</td>
                                                    <td>HOÀI VĂN NGUYÊN</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000053.F02</td>
                                                    <td>7692000250/F02.BB19/0118527</td>
                                                    <td>TRẦN THỊ PHƯƠNG LIÊN</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-dark" id="">Đã đóng</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000052.F02</td>
                                                    <td>7692001592/F02.BB19/0118478</td>
                                                    <td>LÊ ANH TÚ</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-danger " id="">Quá hạn</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000051.F02</td>
                                                    <td>7692001519/F02.BB19/0127766</td>
                                                    <td>TRẦN BÌNH AN</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-success" id="">Đã giám định</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000050.F02</td>
                                                    <td>7692000812/F02.OTO19/0000905</td>
                                                    <td>NGUYỄN NGỌC TÚ</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-success" id="">Đã giám định</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000048.F02</td>
                                                    <td>7692001419/F02.OTO19/0001205</td>
                                                    <td>Lê Anh Duy</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-success" id="">Đã giám định</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000047.F02</td>
                                                    <td>7692001624/F02.BB19/0127966</td>
                                                    <td>NGUYỄN NGỌC TRÃI</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-success" id="">Đã giám định</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000046.F02</td>
                                                    <td>7692001244/F02.BB19/0118633</td>
                                                    <td>ĐINH XUÂN TUYẾN</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000045.F02</td>
                                                    <td>7692000678/F02.BB19/0127906</td>
                                                    <td>NGUYỄN ĐỨC ĐIỀU</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000044.F02</td>
                                                    <td>7692000955/F02.AD20/0156996</td>
                                                    <td>HOÀNG VĂN VỸ</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000043.F02</td>
                                                    <td>7692000491/F02.BB19/0118500</td>
                                                    <td>NGUYỄN THỊ THANH NGA</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000042.F02</td>
                                                    <td>7692001384/F02.BB19/0127910</td>
                                                    <td>NGUYỄN VĂN TÁM</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000041.F02</td>
                                                    <td>7692000541/F02.BB19/0118668</td>
                                                    <td>TRẦN DOÃN QUẢNG</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000040.F02</td>
                                                    <td>7692000700/F02.OTO19/0000882</td>
                                                    <td>Nguyễn Phúc Duy</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000039.F02</td>
                                                    <td>7692001247/F02.BB19/0127764</td>
                                                    <td>TRIỆU VĂN MINH</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000038.F02</td>
                                                    <td>7692000379/F02.BB19/0118491</td>
                                                    <td>NGÔ VĂN TIẾN</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td>
                                                    <td>BT7692000037.F02</td>
                                                    <td>7692000164/F02.BB19/0118561</td>
                                                    <td>PHẠM CHÍ KHANH</td>
                                                    <td>22A11699</td>
                                                    <td align="center">20</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td align="center">29/08/2020</td>
                                                    <td>Đào Xuân Hùng</td>
                                                    <td align="center"><span class="badge badge-primary" id="">Đang xử lý</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng hồ sơ</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-trash"></i> Xoá hồ sơ</a>
                                                                    <a href="#" data-toggle="modal" data-target="#qua_trinh_xu_ly" class="dropdown-item"><i class="icon-collaboration"></i> Quá trình xử lý</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- End - Danh Sách Đơn -->
                                
                            </div>
                        </div>

                    </div>
                    <!-- /Content-block -->


                    <?php include_once BOTTOM; ?>
                
                </div>

            </div>
            
        </div>

        <?php inc('modal/modal_qua_trinh_xu_ly.php'); ?>
        <?php inc('modal/modal_hinh_anh_ho_so_boi_thuong.php'); ?>
        <?php inc('modal/modal_in_option.php'); ?>

    </body>

<?php include_once FOOTER; ?>