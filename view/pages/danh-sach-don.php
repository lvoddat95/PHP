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
                            <i class="linearicons-text-align-left font-size-m font-weight-bold"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH; ?>" class="breadcrumb-item"><i class="fad fa-home mr-1"></i>Trang chủ</a>
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item">F02 - Bảo hiểm ô tô</a>
                               <span class="breadcrumb-item active">Danh sách đơn bảo hiểm</span>
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
                            <h1 class="font-weight-semibold font-size-m"><i class="icon-stack-text mr-2"></i>Danh sách đơn bảo hiểm</h1>
                        </div>
                        <div class="p-button">
                            <a href="<?php echo HTTP_PATH .'view/pages/ban-chao/danh-sach-ban-chao.php'; ?>" class="btn btn-labeled btn-labeled-left mr-1"><b><i class="icon-list3"></i></b> Danh sách bản chào</a>
                            <a href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="icon-plus2"></i></b> Thêm đơn BH</a>
                        </div>
                    </div>
                    
                    <!-- Content-block -->
                    <div class="content-block">
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <p class="card-title font-size-s">Biểu đồ doanh thu</p>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle mr-2">
                                                    <i class="icon-calendar3 mr-2"></i>
                                                    <span class="select-date"></span>
                                                </a>
                                                <a class="list-icons-item" data-action="collapse"></a>
                                                <a class="list-icons-item" data-action="remove"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="bieu-do d-flex align-items-start justify-content-between flex-wrap">
                                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                                <div id="tickets-status"></div>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-s">14,327 (đơn)<span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
                                                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted font-size-xxs">Đơn bảo hiểm mới</span>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                                                    <i class="icon-alarm-add"></i>
                                                </a>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-s">1,132 (đơn)</h5>
                                                    <span class="text-muted font-size-xxs">Bồi thường</span>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                                <div id="campaign-status-pie"></div>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-s">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
                                                    <span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted font-size-xxs">Tháng 6</span>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                                                    <i class="icon-spinner11"></i>
                                                </a>
                                                <div class="ml-3">
                                                    <h5 class="font-weight-semibold mb-0 font-size-s">1,625 (đơn)</h5>
                                                    <span class="text-muted font-size-xxs">Tái bảo hiểm</span>
                                                </div>
                                            </div>

                                            <div>
                                                <a href="#" class="btn bg-teal-400"><i class="icon-statistics mr-2"></i> In báo cáo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="form-group ">
                                                    <label class="font-weight-semibold">Đơn vị:</label>
                                                    <div class="form-group-select">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-building"></i></span>
                                                            </span>
                                                            <select class="form-control required" select2 name="don_vi">
                                                                <option value="">--- Chọn ---</option>
                                                               Tổng Công Ty Cổ Phần Bảo Hiểm Hàng Không(VNI)</option><option id="2" name="Trụ Sở Chính" value="2">Trụ Sở Chính</option><option id="155" name="VNI Hải Phòng" value="155">VNI Hải Phòng</option><option id="154" name="VNI Đà Nẵng" value="154">VNI Đà Nẵng</option><option id="150" name="VNI HCM" value="150">VNI HCM</option><option id="160" name="VNI Nghệ An" value="160">VNI Nghệ An</option><option id="164" name="VNI Hà Nội" value="164">VNI Hà Nội</option><option id="202" name="VNI Thăng Long" value="202">VNI Thăng Long</option><option id="211" name="VNI Nam Hồng Hà" value="211">VNI Nam Hồng Hà</option><option id="240" name="VNI Hải Dương" value="240">VNI Hải Dương</option><option id="253" name="VNI Tây Nguyên" value="253">VNI Tây Nguyên</option><option id="304" name="Sở Giao Dịch" value="304">Sở Giao Dịch</option><option id="325" name="VNI Quảng Ninh" value="325">VNI Quảng Ninh</option><option id="333" name="VNI Đông Đô" value="333">VNI Đông Đô</option><option id="340" name="VNI Thanh Hóa" value="340">VNI Thanh Hóa</option><option id="341" name="VNI Vĩnh Phúc" value="341">VNI Vĩnh Phúc</option><option id="346" name="VNI Bắc Giang" value="346">VNI Bắc Giang</option><option id="349" name="VNI Đông Nam Bộ" value="349">VNI Đông Nam Bộ</option><option id="356" name="VNI Quảng Bình" value="356">VNI Quảng Bình</option><option id="360" name="VNI Bình Định" value="360">VNI Bình Định</option><option id="365" name="VNI Sài Gòn" value="365">VNI Sài Gòn</option><option id="376" name="VNI Khánh Hòa" value="376">VNI Khánh Hòa</option><option id="383" name="VNI Nam Tây Nguyên" value="383">VNI Nam Tây Nguyên</option><option id="398" name="VNI Quảng Ngãi" value="398">VNI Quảng Ngãi</option><option id="410" name="VNI Thủ Đô" value="410">VNI Thủ Đô</option><option id="425" name="VNI Tây Nam Bộ" value="425">VNI Tây Nam Bộ</option><option id="453" name="VNI Tân Sơn Nhất" value="453">VNI Tân Sơn Nhất</option><option id="457" name="VNI Thành Đô" value="457">VNI Thành Đô</option><option id="458" name="VNI Bến Thành" value="458">VNI Bến Thành</option><option id="468" name="VNI Long An" value="468">VNI Long An</option><option id="484" name="VNI Tây Bắc" value="484">VNI Tây Bắc</option><option id="513" name="VNI Sông Hồng" value="513">VNI Sông Hồng</option><option id="518" name="VNI Tràng An" value="518">VNI Tràng An</option><option id="529" name="VNI Vũng Tàu" value="529">VNI Vũng Tàu</option><option id="533" name="VNI Hà Thành" value="533">VNI Hà Thành</option><option id="539" name="Sở Giao Dịch 2" value="539">Sở Giao Dịch 2</option><option id="666" name="VNI Duyên Hải" value="666">VNI Duyên Hải</option><option id="599" name="VNI Huế" value="599">VNI Huế</option><option id="177" name="ĐV chứa DL kết chuyển từ CN" value="177">ĐV chứa DL kết chuyển từ CN</option><option id="262" name="Tổ trù bị CN Đông Bắc-HN" value="262">Tổ trù bị CN Đông Bắc-HN</option><option id="257" name="VPKV 30-TL" value="257">VPKV 30-TL</option><option id="231" name="Chi Nhánh TP HCM 2 (Võ Văn Tần)" value="231">Chi Nhánh TP HCM 2 (Võ Văn Tần)</option><option id="219" name="VPKV 6 (Thái Bình)-TL" value="219">VPKV 6 (Thái Bình)-TL</option><option id="216" name="VPKV 5 (Gia Lâm)-TL" value="216">VPKV 5 (Gia Lâm)-TL</option><option id="217" name="VPKV 4 (Nghệ An)" value="217">VPKV 4 (Nghệ An)</option><option id="228" name="VPKV 7-HN" value="228">VPKV 7-HN</option><option id="209" name="VPKV 2-HN" value="209">VPKV 2-HN</option><option id="728" name="VNI Gia Định" value="728">VNI Gia Định</option><option id="731" name="VNI Âu Lạc" value="731">VNI Âu Lạc</option><option id="733" name="VNI Bình Dương" value="733">VNI Bình Dương</option><option id="753" name="VNI Vạn Xuân" value="753">VNI Vạn Xuân</option><option id="756" name="VNI Kinh Đô" value="756">VNI Kinh Đô</option><option id="769" name="VNI Hà Tuyên" value="769">VNI Hà Tuyên</option>
                                                            </select>
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
                                                            <select class="form-control" select2 name="">
                                                                <option value="opt1">Mới thêm (20)</option>
                                                                <option value="opt2">Từ chối (18)</option>
                                                                <option value="opt3">Chấp nhận (30)</option>
                                                                <option value="opt4">TBH Từ chối (28)</option>
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
                                            <a href="#" data-toggle="modal" data-target="#trinh_duyet_nhieu_don" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-file-check"></i></b> Trình duyệt</a>
                                            <a href="" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-trash"></i></b> Xóa</a>
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
                                        <table class="table-list table table-bordered table-hover datatable" 
                                            data-paging="true"
                                            data-info="true"
                                            data-ordering="true"
                                            data-searching="false"
                                            data-page-length="20"
                                        >
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="all text-center w1px" data-orderable="false"><input type="checkbox" id="input-chk-all"></th>
                                                    <th class="all">Số đơn</th>
                                                    <th class="min-tablet">Ngày cấp</th>
                                                    <th class="desktop">Loại hình</th>
                                                    <th class="min-tablet w30p">Tên khách hàng</td>
                                                    <th class="desktop">Số tiền BH</th>
                                                    <th class="desktop">Phí bảo hiểm</th>
                                                    <th class="all w10p">Trạng thái</th>
                                                    <th class="text-center min-tablet w1p" data-orderable="false">#</th>
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

    </body>

<?php include_once FOOTER; ?>