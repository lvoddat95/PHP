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
                               <span class="breadcrumb-item active">Danh sách đơn</span>
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
                            <h1 class="font-weight-semibold font-size-m"><i class="icon-stack-text mr-2"></i>Đơn bảo hiểm <span>chờ duyệt</span></h1>
                        </div>
                        <div class="p-button">
                            <a href="<?php echo HTTP_PATH .'view/pages/ban-chao/danh-sach-ban-chao.php'; ?>" class="btn btn-labeled btn-labeled-left mr-1"><b><i class="icon-list3"></i></b> Danh sách bản chào</a>
                            <a href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" class="btn btn-them bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="icon-plus2"></i></b> Thêm đơn BH</a>
                        </div>
                    </div>
                    
                    <!-- Content-block -->
                    <div class="content-block">
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-search">
                                    <div class="card-header header-elements-inline">
                                        <p class="card-title font-size-s">
                                            <i style="width: 26px;height: 26px;line-height: 26px;font-size: 12px;" class="icon-search4 d-flex-inline align-items-center justify-content-center rounded-round bg-color mr-2"></i> 
                                            Tìm kiếm đơn bảo hiểm
                                        </p>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="list-icons-item" data-action="collapse"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Loại hình:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-swatchbook"></i></span>
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
                                                    <label class="font-weight-semibold">Cán bộ:</label>
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
                                                    <label class="font-weight-semibold">Số đơn:</label>
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
                                                    <label class="font-weight-semibold">Ngày cấp từ:</label>
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
                                                    <label class="font-weight-semibold">Đến ngày:</label>
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
                                                    <label class="font-weight-semibold">Trạng thái:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                            </span>
                                                            <select class="form-control" select2 onchange="on_change_trang_thai_don(this);">
                                                                <option value="moi-them">Mới thêm (20)</option>
                                                                <option value="cho-duyet" selected>Chờ duyệt(20)</option>
                                                                <option value="tu-choi">Từ chối (18)</option>
                                                                <option value="chap-nhan">Chấp nhận (30)</option>
                                                                <option value="tbh-tu-choi">TBH Từ chối (28)</option>
                                                            </select>
                                                        </div>
                                                    </div>
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

                                <!-- Danh sách đơn -->
                                <div class="card">
                                    <div class="card-header header-elements-inline header-button ">
                                        <p class="card-title font-size-s">Danh sách đơn bảo hiểm</p>
                                        <div class="header-elements p-button">
                                            <a href="" data-toggle="modal" data-target="#duyet_dong_don" class="btn btn-duyet-dong btn-labeled btn-labeled-left mr-2"><b><i class="icon-file-locked"></i></b> Duyệt & Đóng đơn</a>
                                            <a href="" data-toggle="modal" data-target="#duyet_don" class="btn btn-duyet btn-labeled btn-labeled-left mr-2"><b><i class="icon-file-check"></i></b> Duyệt</a>
                                            <a href="#" data-toggle="modal" data-target="#trinh_duyet_nhieu_don" class="btn btn-trinh-duyet btn-labeled btn-labeled-left mr-2" style="display: none;"><b><i class="icon-file-check"></i></b> Trình duyệt</a>
                                            <a href="" class="btn btn-xoa btn-labeled btn-labeled-left mr-2" style="display: none;"><b><i class="icon-trash"></i></b> Xóa</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-printer2"></i> IN</button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-tooltip="tipsy" original-title="In thông báo thu phí" data-position="left"><i class="icon-file-text2"></i> In TB thu phí</a>
                                                    <a href="#" class="dropdown-item" data-tooltip="tipsy" original-title="In thông báo hoa hồng" data-position="left"><i class="icon-cash3"></i> In TB HH</a>
                                                    <a href="#" class="dropdown-item" data-tooltip="tipsy" original-title="In phiếu thanh toán hoa hồng" data-position="left"><i class="icon-credit-card"></i> In phiếu TT HH</a>
                                                    <a href="#" class="dropdown-item" data-tooltip="tipsy" original-title="In mẫu in" data-position="left"><i class="icon-stack"></i> In mẫu in</a>
                                                    <a href="#" class="dropdown-item" data-tooltip="tipsy" original-title="In tờ trình" data-position="left"><i class="icon-certificate"></i> In tờ trình</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-hover datatable" 
                                            data-paging="true"
                                            data-info="true"
                                            data-ordering="true"
                                            data-searching="false"
                                            data-page-length="20"
                                        >
                                            <thead class="thead-light">
                                                <tr>
                                                    <th data-orderable="false" class="text-center"><input type="checkbox" id="input-chk-all"></th>
                                                    <th>Số đơn</th>
                                                    <th>Ngày cấp</th>
                                                    <th>Loại hình</th>
                                                    <th>Tên khách hàng</td>
                                                    <th>Số tiền BH</th>
                                                    <th>Phí bảo hiểm</th>
                                                    <th>Trạng thái</th>
                                                    <th data-orderable="false">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>042000910/F02.AD19/0099350</td>
                                                    <td>26/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Vũ Huy Anh</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-success">Mới thêm</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                    
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>61802227/F02.BB19/0102676</td>
                                                    <td>27/05/2020</td>
                                                    <td>F02</td>
                                                    <td>CTCP Thiết Bị Và Thang Máy Messi</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-dark">Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003638/F02.BB19/0102394</td>
                                                    <td>22/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Công Ty CP DV Suất Ăn Hàng Không VN</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-info">Chờ duyệt</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>042000910/F02.AD19/0099350</td>
                                                    <td>25/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Trần Văn Luyện</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-primary">Chấp nhận</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003638/F02.BB19/0102393</td>
                                                    <td>25/05/2020</td>
                                                    <td>E01</td>
                                                    <td>Công Ty TNHH Thành An - Hà Nội</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-danger ">TBH Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003644/F02.AD19/0142538</td>
                                                    <td>16/05/2020</td>
                                                    <td>F02</td>
                                                    <td>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ DU LỊCH ADV PRO</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-primary">Chấp nhận</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003645/F02.BB19/0102671</td>
                                                    <td>26/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Phạm Thị Thu Huyền</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-danger ">TBH Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003627/F02.AD20/0062252</td>
                                                    <td>18/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Nguyễn Hoàng Thị Bé</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-success">Mới thêm</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162000318/E02.12</td>
                                                    <td>26/05/2020</td>
                                                    <td>E02</td>
                                                    <td>CÔNG TY CHẾ BIẾN THAN QUẢNG NINH-TKV</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-danger ">TBH Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003639/F02.AD20/0062459</td>
                                                    <td>16/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Đào Nguyên Tùng</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-success">Mới thêm</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003637/F02.AD20/0062458</td>
                                                    <td>16/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Trần Anh Dũng</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-danger ">TBH Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003602/F02.BB19/0102388</td>
                                                    <td>26/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Công Ty CP DV Và Vận Chuyển Ngọc Cường</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-primary">Chấp nhận</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003585/F02.BB19/0102389</td>
                                                    <td>26/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Công Ty Cổ Phần Tập Đoàn Sơn Spentes Việt Nam</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-danger ">TBH Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162000357/E02</td>
                                                    <td>24/05/2020</td>
                                                    <td>E02</td>
                                                    <td>Chi Nhánh Tập Đoàn Công Nghiệp Than - Khoáng Sản Việt Nam Công Ty Kho Vận Và Cảng Cẩm Phả - VINACOMIN </td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-primary">Chấp nhận</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162000028/C01</td>
                                                    <td>20/05/2020</td>
                                                    <td>C01</td>
                                                    <td>BAN QUẢN LÝ DỰ ÁN CÔNG TRÌNH THỦY LỢI NỘI ĐỒNG</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-dark">Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162000024/C01</td>
                                                    <td>22/05/2020 </td>
                                                    <td>C01</td>
                                                    <td>CÔNG TY TNHH MỘT THÀNH VIÊN KHAI THÁC CÔNG TRÌNH THUỶ LỢI BẮC HƯNG HẢI</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-info">Chờ duyệt</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162000030/C01</td>
                                                    <td> 22/05/2020</td>
                                                    <td> C01 </td>
                                                    <td>ĐOÀN KINH TẾ - QUỐC PHÒNG 327</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-danger ">TBH Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162000031/C01 </td>
                                                    <td>22/04/2020 </td>
                                                    <td>C01 </td>
                                                    <td>BAN QUẢN LÝ DỰ ÁN DƯỜNG DỒ CHÍ MINH </td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-info">Chờ duyệt</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003248/F02.BB19/0082666</td>
                                                    <td>20/05/2020</td>
                                                    <td>F02</td>
                                                    <td>CTY TNHH THÀNH CÔNG</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-info">Chờ duyệt</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003380/F02.BB19/0102290 </td>
                                                    <td>21/05/2020 </td>
                                                    <td>F02 </td>
                                                    <td>Công Ty Cố Phần Bánh Mứt Kẹo Hoàng Minh </td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-dark">Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003248/F02.BB19/0082665</td>
                                                    <td>20/05/2020 </td>
                                                    <td>F02</td>
                                                    <td>CTY TNHH THÀNH CÔNG</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-success">Mới thêm</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>   162003369/F02.BB19/0102314</td>
                                                    <td>21/05/2020 </td>
                                                    <td>F02</td>
                                                    <td>Nguyễn Quang Anh    </td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-success">Mới thêm</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162003457/F02.BB19/0102368 </td>
                                                    <td>22/05/2020</td>
                                                    <td>F02</td>
                                                    <td>Công Ty Unid Việt Nam</td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-danger ">TBH Từ chối</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="input-chk"></td><td>162000022/C01  </td>
                                                    <td>13/05/2020 </td>
                                                    <td>C01 </td>
                                                    <td>BAN QUẢN LÝ DỰ ÁN PHÁT TRIỂN ĐIỆN LỰC HÀ NỘI - TỔNG CÔNG TY ĐIỆN LỰC TP HÀ NỘI </td>
                                                    <td>11,820,000 VNĐ</td>
                                                    <td>200,000 VNĐ</td>
                                                    <td><span class="badge badge-success">Mới thêm</span></td>
                                                    <td class="text-center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" data-toggle="modal" data-target="#trinh_duyet_mot_don" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i> Tái tục</a>
                                                                    <a href="#" data-toggle="modal" data-target="#lich_su_ton_that" class="dropdown-item"><i class="icon-file-stats"></i> Lịch sử tổn thất</a>
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

        <?php inc('modal/modal_lich_su_ton_that.php'); ?>
        <?php inc('modal/modal_trinh_duyet_mot_don.php'); ?>
        <?php inc('modal/modal_trinh_duyet_nhieu_don.php'); ?>
        <?php inc('modal/modal_duyet_don.php'); ?>
        <?php inc('modal/modal_duyet_dong_don.php'); ?>

    </body>

<?php include_once FOOTER; ?>