<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>
    
    <body class="sidebar-xs">

        <div class="page-content home-page">

            <?php include_once SIDEBAR; ?>

            <div class="content-wrapper">

                <div class="content">

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="linearicons-text-align-left font-size-m font-weight-bold"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH .'view/welcome/danh-sach-ban-chao.php'; ?>" class="breadcrumb-item"><i class="icon-steering-wheel mr-1"></i>Danh sách bản chào</a>
                                <span class="breadcrumb-item active">Cập nhập bản chào</span>
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
                            <h4 class="font-weight-semibold"><i class="icon-bookmark mr-2"></i>Bản chào bảo hiểm xe cơ giới</h4>
                        </div>
                        <div class="p-button">
                            <a href="<?php echo HTTP_PATH .'view/welcome/danh-sach-ban-chao.php'; ?>" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-file-locked"></i></b> Đóng bản chào</a>
                            <a href="<?php echo HTTP_PATH .'view/welcome/danh-sach-ban-chao.php'; ?>" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-files-empty"></i></b> Lưu &amp; Copy</a>
                            <a href="<?php echo HTTP_PATH .'view/welcome/danh-sach-ban-chao.php'; ?>" class="btn bg-primary btn-labeled btn-labeled-left mr-2"><b><i class="icon-file-plus"></i></b> Lưu</a>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="input-don">
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h5 class="card-title font-size-s">Thông tin chung</h5>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="list-icons-item" data-action="collapse"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label>Hình thức khai thác: <span class="text-danger">*</span></label>
                                                        <select class="form-control required" name="hinh_thuc_khai_thac" select2>
                                                            <option value="">--- Chọn hình thức khai thác ---</option>
                                                            <option value="opt1" selected>Trực tiếp</option>
                                                            <option value="opt7">Đại lí</option>
                                                            <option value="opt8">Môi giới</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label>Số đơn bản chào: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control required" name="so_don_bao_hiem" placeholder="Nhập số đơn bảo hiểm..." value="012000005/F02">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Người được bảo hiểm: <span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <input style="max-width: 180px;" type="text" class="form-control required" name="ma_kh" placeholder="Nhập mã khách hàng..." value="0100006090">
                                                            <input type="text" class="form-control required" name="ten_kh" placeholder="Nhập tên khách hàng..." value="BẢO HIỂM VIETINBANK (VBI)">
                                                            <span class="input-group-append">
                                                                <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn từ danh mục <i class="icon-user-plus ml-2"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Số điện thoại (chủ xe): <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control required input-phone" name="sdt_chu_xe" placeholder="Nhập số điện thoại..." value="1234567891">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Địa chỉ (chủ xe): </label>
                                                        <input type="text" class="form-control required" name="dia_chi_cx" placeholder="Nhập địa chỉ chủ xe..." value="Tầng 10,11 tòa nhà 126 Đội Cấn, quận Ba Đình">

                                                    </div>
                                                </div>
                                            </div>

                

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Ngày cấp: <span class="text-danger">*</span></label>
                                                        <input id='test' type="text" name="ngay_cap" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="05/06/2020">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Loại tiền: <span class="text-danger">*</span></label>
                                                        <select class="form-control required form-control-select2" name="loai_tien" select2>
                                                            <option id="" value="" name="">--- Chọn Loại tiền ---</option>
                                                            <option id="EUR" name="EUR" value="EUR">EUR</option>
                                                            <option id="VND" name="VND" value="VND" selected>VND</option>
                                                            <option id="CHF" name="CHF" value="CHF">CHF</option>
                                                            <option id="USD" name="USD" value="USD">USD</option>
                                                            <option id="CNY(RMB)" name="CNY(RMB)" value="CNY(RMB)">CNY(RMB)</option>
                                                            <option id="GBP" name="GBP" value="GBP">GBP</option>
                                                            <option id="JPY" name="JPY" value="JPY">JPY</option>
                                                            <option id="RM(MYR)" name="RM(MYR)" value="RM(MYR)">RM(MYR)</option>
                                                            <option id="NGOAITE" name="NGOAITE" value="NGOAITE">NGOAITE</option>
                                                            <option id="AUD" name="AUD" value="AUD">AUD</option>
                                                            <option id="SGD" name="SGD" value="SGD">SGD</option>
                                                            <option id="CAD" name="CAD" value="CAD">CAD</option>
                                                            <option id="KRW" name="KRW" value="KRW">KRW</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Tỉ giá thực tế: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control required input-float" name="ti_gia" placeholder="" value="1">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Thời hạn bảo hiểm: <span class="text-danger">*</span></label>
                                                        <div class="row">
                                                            <div class="col-md-6 d-flex">
                                                                <span style="width: 100px;">Từ</span>
                                                                <input type="text" class="form-control mr-2 input-time" placeholder="Nhập giờ..." value="00:00">
                                                                <input type="text" class="form-control datepicker input-date" placeholder="Nhập ngày..." value="03/10/2019">
                                                            </div>
                                                            <div class="col-md-6 d-flex">
                                                                <span style="width: 100px;">Đến</span>
                                                                <input type="text" class="form-control mr-2 input-time" placeholder="Nhập giờ..." value="00:00">
                                                                <input type="text" class="form-control datepicker input-date" placeholder="Nhập ngày..." value="03/10/2019">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h5 class="card-title font-size-s">Danh sách đối tượng bảo hiểm</h5>
                                        <div class="header-elements">
                                            <div class="list-icons">
                                                <a class="list-icons-item" data-action="collapse"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="ban_chao_list" class="table-list table table-bordered table-hover datatable" 
                                            data-paging="false" 
                                            data-info="false" 
                                            data-ordering="true" 
                                            data-searching="false" 
                                            data-page-length="-1">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th width="50px" data-orderable="false" class="text-center">STT</th>
                                                    <th>Biển số xe</th>
                                                    <th class="desktop">Hiệu xe</th>
                                                    <th class="desktop">Năm sản xuất</th>
                                                    <th class="min-tablet">Phí bảo hiểm</th>
                                                    <th class="min-tablet">VAT</th>
                                                    <th>Tổng phí thanh toán</th>
                                                    <th width="50px" class="text-center desktop">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center">1</td>
                                                <td>30A07012</td>
                                                <td>BMW</td>
                                                <td>2019</td>
                                                <td>437,000</td>
                                                <td>43,700</td>
                                                <td>480,700</td>
                                                <td align="center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" ><i class="icon-file-plus mr-1 text-success"></i> Tạo mới đơn BH</a>
                                                                <a class="dropdown-item" href="javascript:;" class="dropdown-item" data-toggle="modal" data-target="#modal_form" title="Xem chi tiết"><i class="icon-file-eye mr-1 text-primary"></i> Xem chi tiết</a>
                                                                <a class="dropdown-item" href="javascript:;" class="dropdown-item" title="Xóa đối tượng" onclick="_xoa_dong(this);"><b><i class="icon-trash mr-1 text-danger"></i></b> Xóa đối tượng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>71C05150</td>
                                                    <td>Xe khác</td>
                                                    <td>2019</td>
                                                    <td>1,690,000</td>
                                                    <td>166,000</td>
                                                    <td>1,856,000</td>
                                                    <td align="center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" ><i class="icon-file-plus mr-1 text-success"></i> Tạo mới đơn BH</a>
                                                                    <a class="dropdown-item" href="javascript:;" class="dropdown-item" data-toggle="modal" data-target="#modal_form" title="Xem chi tiết"><i class="icon-file-eye mr-1 text-primary"></i> Xem chi tiết</a>
                                                                    <a class="dropdown-item" href="javascript:;" class="dropdown-item" title="Xóa đối tượng" onclick="_xoa_dong(this);"><b><i class="icon-trash mr-1 text-danger"></i></b> Xóa đối tượng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>51C56843</td>
                                                    <td>FORD</td>
                                                    <td>2019</td>
                                                    <td>1,183,000</td>
                                                    <td>93,300</td>
                                                    <td>1,276,300</td>
                                                    <td align="center">
                                                        <div class="list-icons">
                                                            <div class="dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" ><i class="icon-file-plus mr-1 text-success"></i> Tạo mới đơn BH</a>
                                                                    <a class="dropdown-item" href="javascript:;" class="dropdown-item" data-toggle="modal" data-target="#modal_form" title="Xem chi tiết"><i class="icon-file-eye mr-1 text-primary"></i> Xem chi tiết</a>
                                                                    <a class="dropdown-item" href="javascript:;" class="dropdown-item" title="Xóa đối tượng" onclick="_xoa_dong(this);"><b><i class="icon-trash mr-1 text-danger"></i></b> Xóa đối tượng</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="border p-1 text-center"><a href="" data-toggle="modal" data-target="#modal_form" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-plus2"></i></b> Thêm mới đối tượng</a></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>
            
        </div>

        <div class="modal-group">
            <!-- Modal  -->
            <div id="modal_form" class="modal fade" role="dialog" aria-labelledby="modal_form">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase font-weight-semibold color">THÔNG TIN ĐỐI TƯỢNG BẢO HIỂM</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- Form wzard with step validation section start -->
                            <section id="validation">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form action="#" class="steps-validation wizard-notification">
                                                        
                                                        <!-- Step 2 -->
                                                            <h6>Đối tượng bảo hiểm</h6>
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Mục đích sử dụng:  <span class="text-danger">*</span></label>
                                                                            <button 
                                                                                class="btn-popover"
                                                                                type="button" 
                                                                                data-popup="popover" 
                                                                                data-content="Chọn <b style='color: red;'>“Có”</b> nếu xe kinh doanh vận tải." 
                                                                                data-trigger="hover" 
                                                                                data-placement="top"
                                                                                data-html="true"
                                                                                data-original-title="" >
                                                                                <i class="icon-info22"></i>
                                                                            </button>
                                                                            <div class="d-flex">
                                                                                <p class="switch-title mr-3">Có kinh doanh vận tải không ?</p>
                                                                                <div class="button-switch">
                                                                                    <input type="checkbox" id="kinhdoanhvt" class="switch required" name="kinhdoanhvt"/>
                                                                                    <label for="kinhdoanhvt" data-off="Không" data-on="Có"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Dòng xe: <span class="text-danger">*</span></label>
                                                                            <div class="form-group-select">
                                                                                <select class="form-control required" select2 name="dong_xe">
                                                                                    <option value="">--- Chọn dòng xe ---</option>
                                                                                    <option value="1">Xe chở người</option>
                                                                                    <option value="2">Xe chở hàng</option>
                                                                                    <option value="3">Các xe loại khác</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Nhóm xe: <span class="text-danger">*</span></label>
                                                                            <select class="form-control required" select2 name="nhom_xe">
                                                                                <option id="" value="" name="">--- Chọn nhóm xe ---</option>
                                                                                <option id="OTO_DAU_KEO_ROMOOC" name="Đầu kéo, Đông lạnh, Xe hoạt động trong vùng khai thác khoáng sản"
                                                                                    value="OTO_DAU_KEO_ROMOOC">Đầu kéo, Đông lạnh, Xe hoạt động trong vùng khai thác khoáng sản</option>
                                                                                <option id="OTO_ROMOOC" name="Rơ mooc, Sơ mi rơ mooc" value="OTO_ROMOOC">Rơ mooc, Sơ mi rơ mooc</option>
                                                                                <option id="OTO_HANG" name="Xe ô tô chở hàng(xe tải)" value="OTO_HANG">Xe ô tô chở hàng(xe tải)</option>
                                                                                <option id="OTO_KKDVT_TREN_9_CHO" name="Xe ô tô không KDVT trên 9 chỗ" value="OTO_KKDVT_TREN_9_CHO">Xe ô tô không
                                                                                    KDVT trên 9 chỗ</option>
                                                                                <option id="OTO_KKDVT" name="Xe ô tô không KDVT dưới 9 chỗ" value="OTO_KKDVT">Xe ô tô không KDVT dưới 9 chỗ</option>
                                                                                <option id="OTO_PICK_UP" name="Xe pick-up  (van)" value="OTO_PICK_UP">Xe pick-up (van)</option>
                                                                                <option id="OTO_HDNBC" name="Xe hoạt động trong nội bộ cảng, khu công nghiệp, sân bay" value="OTO_HDNBC">Xe hoạt
                                                                                    động trong nội bộ cảng, khu công nghiệp, sân bay</option>
                                                                                <option id="OTO_KDVT_XE_KHACH" name="Xe KDVT hành khách liên tỉnh, nội tỉnh" value="OTO_KDVT_XE_KHACH">Xe KDVT hành
                                                                                    khách liên tỉnh, nội tỉnh</option>
                                                                                <option id="OTO_BUYT" name="Xe buýt liên tỉnh" value="OTO_BUYT">Xe buýt liên tỉnh</option>
                                                                                <option id="OTO_BUYT_NOI_TINH" name="Xe buýt nội tỉnh" value="OTO_BUYT_NOI_TINH">Xe buýt nội tỉnh</option>
                                                                                <option id="OTO_TAP_LAI" name="Xe tập lái" value="OTO_TAP_LAI">Xe tập lái</option>
                                                                                <option id="OTO_TAXI" name="Xe taxi" value="OTO_TAXI">Xe taxi</option>
                                                                                <option id="OTO_TU_LAI" name="Xe cho thuê tự lái" value="OTO_TU_LAI">Xe cho thuê tự lái</option>
                                                                                <option id="OTO_KDVT" name="Xe kinh doanh chở người dưới 09 chỗ, Grab và tương tự Grab" value="OTO_KDVT">Xe kinh
                                                                                    doanh chở người dưới 09 chỗ, Grab và tương tự Grab</option>
                                                                                <option id="OTO_KDVT_CHO_NGUOI_CON_LAI" name="Xe ô tô KDVT chở người còn lại" value="OTO_KDVT_CHO_NGUOI_CON_LAI">Xe
                                                                                    ô tô KDVT chở người còn lại</option>
                                                                                <option id="OTO_NHAP_KHAU" name="Xe nhập khẩu được miễn thuế (biển ngoại giao, nước ngoài)" value="OTO_NHAP_KHAU">Xe
                                                                                    nhập khẩu được miễn thuế (biển ngoại giao, nước ngoài)</option>
                                                                                <option id="OTO_CHUYEN_DUNG_TAI" name="Xe ô tô chuyên dùng tải" value="OTO_CHUYEN_DUNG_TAI">Xe ô tô chuyên dùng tải
                                                                                </option>
                                                                                <option id="OTO_CHUYEN_DUNG" name="Xe ô tô chuyên dùng(Xe phun/bơm bê tông; Xe cẩu; Xe siêu trường, siêu trọng)"
                                                                                    value="OTO_CHUYEN_DUNG">Xe ô tô chuyên dùng(Xe phun/bơm bê tông; Xe cẩu; Xe siêu trường, siêu trọng)</option>
                                                                                <option id="OTO_CONTAINER" name="Container" value="OTO_CONTAINER">Container</option>
                                                                                <option id="XE_DIEN" name="Xe ôtô điện" value="XE_DIEN">Xe ôtô điện</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Loại xe: <span class="text-danger">*</span></label>
                                                                            <select class="form-control required" select2 name="loai_xe">
                                                                                <option id="" value="" name="">--- Chọn loại xe ---</option>
                                                                                <option id="OTO_KKDVT_U6" name="Ô tô không KD vận tải - Dưới 6 chỗ ngồi" value="OTO_KKDVT_U6">Ô tô không KD vận tải
                                                                                    - Dưới 6 chỗ ngồi</option>
                                                                                <option id="OTO_KKDVT_B6A11" name="Ô tô không KD vận tải - Từ 6 đến 11 chỗ ngồi" value="OTO_KKDVT_B6A11">Ô tô không
                                                                                    KD vận tải - Từ 6 đến 11 chỗ ngồi</option>
                                                                                <option id="OTO_KKDVT_B12A24" name="Ô tô không KD vận tải - Từ 12 đến 24 chỗ ngồi" value="OTO_KKDVT_B12A24">Ô tô
                                                                                    không KD vận tải - Từ 12 đến 24 chỗ ngồi</option>
                                                                                <option id="OTO_KKDVT_O24" name="Ô tô không KD vận tải - Trên 24 chỗ ngồi" value="OTO_KKDVT_O24">Ô tô không KD vận
                                                                                    tải - Trên 24 chỗ ngồi</option>
                                                                                <option id="OTO_KKDVT_PICKUP" name="Ô tô không KD vận tải - Xe vừa chở người vừa chở hàng (Pickup, minivan)"
                                                                                    value="OTO_KKDVT_PICKUP">Ô tô không KD vận tải - Xe vừa chở người vừa chở hàng (Pickup, minivan)</option>
                                                                                <option id="OTO_KDVT_U6" name="Ô tô KD vận tải - Dưới 6 chỗ ngồi theo đăng ký" value="OTO_KDVT_U6">Ô tô KD vận tải -
                                                                                    Dưới 6 chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_6" name="Ô tô KD vận tải - 6 chỗ ngồi theo đăng ký" value="OTO_KDVT_6">Ô tô KD vận tải - 6 chỗ
                                                                                    ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_7" name="Ô tô KD vận tải - 7 chỗ ngồi theo đăng ký" value="OTO_KDVT_7">Ô tô KD vận tải - 7 chỗ
                                                                                    ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_8" name="Ô tô KD vận tải - 8 chỗ ngồi theo đăng ký" value="OTO_KDVT_8">Ô tô KD vận tải - 8 chỗ
                                                                                    ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_9" name="Ô tô KD vận tải - 9 chỗ ngồi theo đăng ký" value="OTO_KDVT_9">Ô tô KD vận tải - 9 chỗ
                                                                                    ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_10" name="Ô tô KD vận tải - 10 chỗ ngồi theo đăng ký" value="OTO_KDVT_10">Ô tô KD vận tải - 10
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_11" name="Ô tô KD vận tải - 11 chỗ ngồi theo đăng ký" value="OTO_KDVT_11">Ô tô KD vận tải - 11
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_12" name="Ô tô KD vận tải - 12 chỗ ngồi theo đăng ký" value="OTO_KDVT_12">Ô tô KD vận tải - 12
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_13" name="Ô tô KD vận tải - 13 chỗ ngồi theo đăng ký" value="OTO_KDVT_13">Ô tô KD vận tải - 13
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_14" name="Ô tô KD vận tải - 14 chỗ ngồi theo đăng ký" value="OTO_KDVT_14">Ô tô KD vận tải - 14
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_15" name="Ô tô KD vận tải - 15 chỗ ngồi theo đăng ký" value="OTO_KDVT_15">Ô tô KD vận tải - 15
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_16" name="Ô tô KD vận tải - 16 chỗ ngồi theo đăng ký" value="OTO_KDVT_16">Ô tô KD vận tải - 16
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_17" name="Ô tô KD vận tải - 17 chỗ ngồi theo đăng ký" value="OTO_KDVT_17">Ô tô KD vận tải - 17
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_18" name="Ô tô KD vận tải - 18 chỗ ngồi theo đăng ký" value="OTO_KDVT_18">Ô tô KD vận tải - 18
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_19" name="Ô tô KD vận tải - 19 chỗ ngồi theo đăng ký" value="OTO_KDVT_19">Ô tô KD vận tải - 19
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_20" name="Ô tô KD vận tải - 20 chỗ ngồi theo đăng ký" value="OTO_KDVT_20">Ô tô KD vận tải - 20
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_21" name="Ô tô KD vận tải - 21 chỗ ngồi theo đăng ký" value="OTO_KDVT_21">Ô tô KD vận tải - 21
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_22" name="Ô tô KD vận tải - 22 chỗ ngồi theo đăng ký" value="OTO_KDVT_22">Ô tô KD vận tải - 22
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_23" name="Ô tô KD vận tải - 23 chỗ ngồi theo đăng ký" value="OTO_KDVT_23">Ô tô KD vận tải - 23
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_24" name="Ô tô KD vận tải - 24 chỗ ngồi theo đăng ký" value="OTO_KDVT_24">Ô tô KD vận tải - 24
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_25" name="Ô tô KD vận tải - 25 chỗ ngồi theo đăng ký" value="OTO_KDVT_25">Ô tô KD vận tải - 25
                                                                                    chỗ ngồi theo đăng ký</option>
                                                                                <option id="OTO_KDVT_O25" name="Ô tô KD vận tải - Trên 25 chỗ ngồi" value="OTO_KDVT_O25">Ô tô KD vận tải - Trên 25
                                                                                    chỗ ngồi</option>
                                                                                <option id="OTO_HANG_U3" name="Ô tô chở hàng - Dưới 3 tấn" value="OTO_HANG_U3">Ô tô chở hàng - Dưới 3 tấn</option>
                                                                                <option id="OTO_HANG_B3A8" name="Ô tô chở hàng - Từ 3 đến 8 tấn" value="OTO_HANG_B3A8">Ô tô chở hàng - Từ 3 đến 8
                                                                                    tấn</option>
                                                                                <option id="OTO_HANG_B8A15" name="Ô tô chở hàng - Từ 8 đến 15 tấn" value="OTO_HANG_B8A15">Ô tô chở hàng - Từ 8 đến
                                                                                    15 tấn</option>
                                                                                <option id="OTO_HANG_O15" name="Ô tô chở hàng - Trên 15 tấn" value="OTO_HANG_O15">Ô tô chở hàng - Trên 15 tấn
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Nhãn hiệu (hãng sản xuất): <span class="text-danger">*</span></label>
                                                                            <select class="form-control required" select2 name="nhan_hieu">
                                                                                <option value="">--- Chọn nhãn hiệu ---</option>
                                                                                <option id="TOYOTA" name="TOYOTA" value="TOYOTA">TOYOTA</option>
                                                                                <option id="KIA" name="KIA" value="KIA">KIA</option>
                                                                                <option id="HYUNDAI" name="HYUNDAI" value="HYUNDAI">HYUNDAI</option>
                                                                                <option id="FORD" name="FORD" value="FORD">FORD</option>
                                                                                <option id="GM DAEWOO" name="GM DAEWOO" value="GM DAEWOO">GM DAEWOO</option>
                                                                                <option id="ASIA" name="ASIA" value="ASIA">ASIA</option>
                                                                                <option id="HINO" name="HINO" value="HINO">HINO</option>
                                                                                <option id="ISUZU" name="ISUZU" value="ISUZU">ISUZU</option>
                                                                                <option id="DAIHATSU" name="DAIHATSU" value="DAIHATSU">DAIHATSU</option>
                                                                                <option id="NISSAN" name="NISSAN" value="NISSAN">NISSAN</option>
                                                                                <option id="MITSUBITSHI" name="MITSUBITSHI" value="MITSUBITSHI">MITSUBITSHI</option>
                                                                                <option id="MAN" name="MAN" value="MAN">MAN</option>
                                                                                <option id="HONDA" name="HONDA" value="HONDA">HONDA</option>
                                                                                <option id="MAZDA" name="MAZDA" value="MAZDA">MAZDA</option>
                                                                                <option id="SUZUKI" name="SUZUKI" value="SUZUKI">SUZUKI</option>
                                                                                <option id="SUBARU_FUJI" name="SUBARU; FUJI" value="SUBARU_FUJI">SUBARU; FUJI</option>
                                                                                <option id="BMW" name="BMW" value="BMW">BMW</option>
                                                                                <option id="AUDI" name="AUDI" value="AUDI">AUDI</option>
                                                                                <option id="VOLKSWAGEN" name="VOLKSWAGEN" value="VOLKSWAGEN">VOLKSWAGEN</option>
                                                                                <option id="PORSCHE" name="PORSCHE" value="PORSCHE">PORSCHE</option>
                                                                                <option id="MERCEDES_BENZ" name="MERCEDES - BENZ" value="MERCEDES_BENZ">MERCEDES - BENZ</option>
                                                                                <option id="PEUGEOT" name="PEUGEOT" value="PEUGEOT">PEUGEOT</option>
                                                                                <option id="RENAULT" name="RENAULT" value="RENAULT">RENAULT</option>
                                                                                <option id="ROLLS_ROYCE" name="ROLLS - ROYCE" value="ROLLS_ROYCE">ROLLS - ROYCE</option>
                                                                                <option id="LAND ROVER" name="LAND ROVER" value="LAND ROVER">LAND ROVER</option>
                                                                                <option id="FIAT" name="FIAT" value="FIAT">FIAT</option>
                                                                                <option id="VOLVO" name="VOLVO" value="VOLVO">VOLVO</option>
                                                                                <option id="LINCOLN" name="LINCOLN" value="LINCOLN">LINCOLN</option>
                                                                                <option id="JEEP" name="JEEP" value="JEEP">JEEP</option>
                                                                                <option id="CHRYSLER" name="CHRYSLER" value="CHRYSLER">CHRYSLER</option>
                                                                                <option id="CADILLAC" name="CADILLAC" value="CADILLAC">CADILLAC</option>
                                                                                <option id="HUMMER" name="HUMMER" value="HUMMER">HUMMER</option>
                                                                                <option id="SAMSUNG" name="SAMSUNG" value="SAMSUNG">SAMSUNG</option>
                                                                                <option id="SSANGYONG" name="SSANGYONG" value="SSANGYONG">SSANGYONG</option>
                                                                                <option id="CHERY" name="CHERY" value="CHERY">CHERY</option>
                                                                                <option id="CHIEN_THANG" name="CHIẾN THẮNG" value="CHIEN_THANG">CHIẾN THẮNG</option>
                                                                                <option id="HOA_MAI" name="HOA MAI" value="HOA_MAI">HOA MAI</option>
                                                                                <option id="VINAXUKI" name="VINAXUKI" value="VINAXUKI">VINAXUKI</option>
                                                                                <option id="TRUONG_GIANG" name="TRƯỜNG GIANG" value="TRUONG_GIANG">TRƯỜNG GIANG</option>
                                                                                <option id="FAW" name="FAW" value="FAW">FAW</option>
                                                                                <option id="KAMAZ" name="KAMAZ" value="KAMAZ">KAMAZ</option>
                                                                                <option id="SAMCO" name="SAMCO" value="SAMCO">SAMCO</option>
                                                                                <option id="OTHER" name="Z- Hãng xe khác" value="OTHER">Z- Hãng xe khác</option>
                                                                                <option id="ACURA" name="ACURA" value="ACURA">ACURA</option>
                                                                                <option id="ALFA_ROMEO" name="ALFA ROMEO" value="ALFA_ROMEO">ALFA ROMEO</option>
                                                                                <option id="ASTON_MARTIN" name="ASTON MARTIN" value="ASTON_MARTIN">ASTON MARTIN</option>
                                                                                <option id="BUICK" name="BUICK" value="BUICK">BUICK</option>
                                                                                <option id="CHANGAN" name="CHANGAN" value="CHANGAN">CHANGAN</option>
                                                                                <option id="CHEVROLET" name="CHEVROLET" value="CHEVROLET">CHEVROLET</option>
                                                                                <option id="CITROEN" name="CITROEN" value="CITROEN">CITROEN</option>
                                                                                <option id="CUULONG" name="CUU LONG" value="CUULONG">CUU LONG</option>
                                                                                <option id="DODGE" name="DODGE" value="DODGE">DODGE</option>
                                                                                <option id="DONGFENG" name="DONGFENG" value="DONGFENG">DONGFENG</option>
                                                                                <option id="FERRARI" name="FERRARI" value="FERRARI">FERRARI</option>
                                                                                <option id="GAZ" name="GAZ" value="GAZ">GAZ</option>
                                                                                <option id="GEELY" name="GEELY" value="GEELY">GEELY</option>
                                                                                <option id="GMC" name="GMC" value="GMC">GMC</option>
                                                                                <option id="HAIMA" name="HAIMA" value="HAIMA">HAIMA</option>
                                                                                <option id="HOWO" name="HOWO" value="HOWO">HOWO</option>
                                                                                <option id="INFINITI" name="INFINITI" value="INFINITI">INFINITI</option>
                                                                                <option id="JAC" name="JAC" value="JAC">JAC</option>
                                                                                <option id="JAGUAR" name="JAGUAR" value="JAGUAR">JAGUAR</option>
                                                                                <option id="LADA" name="LADA" value="LADA">LADA</option>
                                                                                <option id="LAMBORGHINI" name="LAMBORGHINI" value="LAMBORGHINI">LAMBORGHINI</option>
                                                                                <option id="LEXUS" name="LEXUS" value="LEXUS">LEXUS</option>
                                                                                <option id="LUXGEN" name="LUXGEN" value="LUXGEN">LUXGEN</option>
                                                                                <option id="MASERATI" name="MASERATI" value="MASERATI">MASERATI</option>
                                                                                <option id="MAYBACH" name="MAYBACH" value="MAYBACH">MAYBACH</option>
                                                                                <option id="MEKONG" name="MEKONG" value="MEKONG">MEKONG</option>
                                                                                <option id="MERCURY" name="MERCURY" value="MERCURY">MERCURY</option>
                                                                                <option id="PONTIAC" name="PONTIAC" value="PONTIAC">PONTIAC</option>
                                                                                <option id="PROTON" name="PROTON" value="PROTON">PROTON</option>
                                                                                <option id="SCION" name="SCION" value="SCION">SCION</option>
                                                                                <option id="SMART" name="SMART" value="SMART">SMART</option>
                                                                                <option id="SYM" name="SYM" value="SYM">SYM</option>
                                                                                <option id="TESLA" name="TESLA" value="TESLA">TESLA</option>
                                                                                <option id="THACO" name="THACO" value="THACO">THACO</option>
                                                                                <option id="ZOTYE" name="ZOTYE" value="ZOTYE">ZOTYE</option>
                                                                                <option id="DONGBEN" name="DONGBEN" value="DONGBEN">DONGBEN</option>
                                                                                <option id="Maxxforce" name="Maxxforce" value="Maxxforce">Maxxforce</option>
                                                                                <option id="TMT" name="TMT" value="TMT">TMT</option>
                                                                                <option id="VIET_TRUNG" name="VIỆT TRUNG" value="VIET_TRUNG">VIỆT TRUNG</option>
                                                                                <option id="DALI" name="Dali" value="DALI">Dali</option>
                                                                                <option id="TRACOMECO" name="TRACOMECO" value="TRACOMECO">TRACOMECO</option>
                                                                                <option id="COUTY_HM" name="COUTY HM" value="COUTY_HM">COUTY HM</option>
                                                                                <option id="CPT" name="CPT" value="CPT">CPT</option>
                                                                                <option id="STERLING" name="Sterling" value="STERLING">Sterling</option>
                                                                                <option id="Dayun" name="Dayun" value="Dayun">Dayun</option>
                                                                                <option id="SHACMAN" name="SHACMAN" value="SHACMAN">SHACMAN</option>
                                                                                <option id="Veam" name="Veam" value="Veam">Veam</option>
                                                                                <option id="Chenglong" name="Chenglong" value="Chenglong">Chenglong</option>
                                                                                <option id="RuiJang" name="RuiJang" value="RuiJang">RuiJang</option>
                                                                                <option id="Universe" name="Universe" value="Universe">Universe</option>
                                                                                <option id="GIAI_PHONG" name="Giải Phóng" value="GIAI_PHONG">Giải Phóng</option>
                                                                                <option id="FIGHTER" name="FIGHTER" value="FIGHTER">FIGHTER</option>
                                                                                <option id="DOTHANH" name="DOTHANH" value="DOTHANH">DOTHANH</option>
                                                                                <option id="Baic" name="Baic" value="Baic">Baic</option>
                                                                                <option id="Teraco" name="Teraco" value="Teraco">Teraco</option>
                                                                                <option id="Forcia" name="Forcia" value="Forcia">Forcia</option>
                                                                                <option id="mncubman" name="MINILCUBMAN" value="mncubman">MINILCUBMAN</option>
                                                                                <option id="KOMATSU" name="KOMATSU" value="KOMATSU">KOMATSU</option>
                                                                                <option id="Vinfast" name="Vinfast" value="Vinfast">Vinfast</option>
                                                                                <option id="C_C" name="C&amp;C" value="C_C">C&amp;C</option>
                                                                                <option id="Kenbo" name="Kenbo" value="Kenbo">Kenbo</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Số loại: <span class="text-danger">*</span></label>
                                                                            <select class="form-control required" select2 name="so_loai">
                                                                                <option value="">-- Chọn hiệu xe --</option>
                                                                                <option value=" DOMANI"> DOMANI</option>
                                                                                <option value=" EON"> EON</option>
                                                                                <option value=" EVANDA"> EVANDA</option>
                                                                                <option value=" LAGO"> LAGO</option>
                                                                                <option value=" LIFE"> LIFE</option>
                                                                                <option value=" MAGNUS"> MAGNUS</option>
                                                                                <option value=" MX5"> MX5</option>
                                                                                <option value=" PICANTO"> PICANTO</option>
                                                                                <option value=" QUEST"> QUEST</option>
                                                                                <option value=" RONDO"> RONDO</option>
                                                                                <option value=" RX 7"> RX 7</option>
                                                                                <option value=" STAREX"> STAREX</option>
                                                                                <option value=" TIBURON"> TIBURON</option>
                                                                                <option value=" TRIBUTE"> TRIBUTE</option>
                                                                                <option value=" V11"> V11</option>
                                                                                <option value=" WINSTROM"> WINSTROM</option>
                                                                                <option value=" XG"> XG</option>
                                                                                <option value="1 SERIES">1 SERIES</option>
                                                                                <option value="100">100</option>
                                                                                <option value="100">100</option>
                                                                                <option value="100NX">100NX</option>
                                                                                <option value="107">107</option>
                                                                                <option value="11">11</option>
                                                                                <option value="1200B">1200B</option>
                                                                                <option value="1240T">1240T</option>
                                                                                <option value="126">126</option>
                                                                                <option value="1490T">1490T</option>
                                                                                <option value="160 HP">160 HP</option>
                                                                                <option value="160HP">160HP</option>
                                                                                <option value="180HP">180HP</option>
                                                                                <option value="19">19</option>
                                                                                <option value="190">190</option>
                                                                                <option value="1980T">1980T</option>
                                                                                <option value="1990BA">1990BA</option>
                                                                                <option value="2">2</option>
                                                                                <option value="2 SERIES">2 SERIES</option>
                                                                                <option value="200">200</option>
                                                                                <option value="200">200</option>
                                                                                <option value="200">200</option>
                                                                                <option value="200SX">200SX</option>
                                                                                <option value="205">205</option>
                                                                                <option value="206">206</option>
                                                                                <option value="207">207</option>
                                                                                <option value="208">208</option>
                                                                                <option value="21">21</option>
                                                                                <option value="2104">2104</option>
                                                                                <option value="2105">2105</option>
                                                                                <option value="2106">2106</option>
                                                                                <option value="2107">2107</option>
                                                                                <option value="2108">2108</option>
                                                                                <option value="2109">2109</option>
                                                                                <option value="2112">2112</option>
                                                                                <option value="220HP">220HP</option>
                                                                                <option value="240SX">240SX</option>
                                                                                <option value="25">25</option>
                                                                                <option value="2500BA">2500BA</option>
                                                                                <option value="260 HP">260 HP</option>
                                                                                <option value="260HP">260HP</option>
                                                                                <option value="3">3</option>
                                                                                <option value="3 SERIES">3 SERIES</option>
                                                                                <option value="300 SERIES">300 SERIES</option>
                                                                                <option value="3008">3008</option>
                                                                                <option value="300C">300C</option>
                                                                                <option value="300GT">300GT</option>
                                                                                <option value="300HP">300HP</option>
                                                                                <option value="300M">300M</option>
                                                                                <option value="300ZX">300ZX</option>
                                                                                <option value="305">305</option>
                                                                                <option value="307">307</option>
                                                                                <option value="309">309</option>
                                                                                <option value="310 HP">310 HP</option>
                                                                                <option value="320i">320i</option>
                                                                                <option value="323">323</option>
                                                                                <option value="340">340</option>
                                                                                <option value="3450T">3450T</option>
                                                                                <option value="3500TL">3500TL</option>
                                                                                <option value="350Z">350Z</option>
                                                                                <option value="360">360</option>
                                                                                <option value="370Z">370Z</option>
                                                                                <option value="371 HP">371 HP</option>
                                                                                <option value="375">375</option>
                                                                                <option value="380HP">380HP</option>
                                                                                <option value="4 RUNNER">4 RUNNER</option>
                                                                                <option value="4 SERIES">4 SERIES</option>
                                                                                <option value="400">400</option>
                                                                                <option value="404">404</option>
                                                                                <option value="405">405</option>
                                                                                <option value="406">406</option>
                                                                                <option value="408">408</option>
                                                                                <option value="4500BA">4500BA</option>
                                                                                <option value="456">456</option>
                                                                                <option value="458">458</option>
                                                                                <option value="460">460</option>
                                                                                <option value="5">5</option>
                                                                                <option value="5 SERIES">5 SERIES</option>
                                                                                <option value="500">500</option>
                                                                                <option value="500 SERIES">500 SERIES</option>
                                                                                <option value="ZX">ZX</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group ">
                                                                            <label>Nguồn gốc xe: <span class="text-danger">*</span></label>
                                                                            <div class="form-group-select">
                                                                                <select class="form-control required" select2 name="nguon_goc">
                                                                                    <option value="">--- Chọn nguồn gốc ---</option>
                                                                                    <option value="1">Xe nhập khẩu</option>
                                                                                    <option value="2">Xe nội địa</option>
                                                                                </select>
                                                                                <span class="select-icon"><i class="icon-arrow-down22"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <label class="font-weight-semibold">Tháng SX/ĐK lần đầu: <span class="text-danger">*</span></label>
                                                                                    <div class="form-group-select">
                                                                                        <select class="form-control required" select2 name="thang_sx_dk" >
                                                                                            <option id="1" name="1" value="1" selected="">1</option>
                                                                                            <option id="2" name="2" value="2">2</option>
                                                                                            <option id="3" name="3" value="3">3</option>
                                                                                            <option id="4" name="4" value="4">4</option>
                                                                                            <option id="5" name="5" value="5">5</option>
                                                                                            <option id="6" name="6" value="6">6</option>
                                                                                            <option id="7" name="7" value="7">7</option>
                                                                                            <option id="8" name="8" value="8">8</option>
                                                                                            <option id="9" name="9" value="9">9</option>
                                                                                            <option id="10" name="10" value="10">10</option>
                                                                                            <option id="11" name="11" value="11">11</option>
                                                                                            <option id="12" name="12" value="12">12</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <label class="font-weight-semibold">Năm SX/ĐK lần đầu: <span class="text-danger">*</span></label>
                                                                                    <div class="form-group-select">
                                                                                        <select class="form-control required" select2 name="nam_sx_dk" >
                                                                                            <option value="" data-select2-id="26">--- Chọn năm ---</option>
                                                                                            <option value="2020" data-select2-id="525">2020</option>
                                                                                            <option value="2019" data-select2-id="526">2019</option>
                                                                                            <option value="2018" data-select2-id="527">2018</option>
                                                                                            <option value="2017" data-select2-id="528">2017</option>
                                                                                            <option value="2016" data-select2-id="529">2016</option>
                                                                                            <option value="2015" data-select2-id="530">2015</option>
                                                                                            <option value="2014" data-select2-id="531">2014</option>
                                                                                            <option value="2013" data-select2-id="532">2013</option>
                                                                                            <option value="2012" data-select2-id="533">2012</option>
                                                                                            <option value="2011" data-select2-id="534">2011</option>
                                                                                            <option value="2010" data-select2-id="535">2010</option>
                                                                                            <option value="2009" data-select2-id="536">2009</option>
                                                                                            <option value="2008" data-select2-id="537">2008</option>
                                                                                            <option value="2007" data-select2-id="538">2007</option>
                                                                                            <option value="2006" data-select2-id="539">2006</option>
                                                                                            <option value="2005" data-select2-id="540">2005</option>
                                                                                            <option value="2004" data-select2-id="541">2004</option>
                                                                                            <option value="2003" data-select2-id="542">2003</option>
                                                                                            <option value="2002" data-select2-id="543">2002</option>
                                                                                            <option value="2001" data-select2-id="544">2001</option>
                                                                                            <option value="2000" data-select2-id="545">2000</option>
                                                                                            <option value="1999" data-select2-id="546">1999</option>
                                                                                            <option value="1998" data-select2-id="547">1998</option>
                                                                                            <option value="1997" data-select2-id="548">1997</option>
                                                                                            <option value="1996" data-select2-id="549">1996</option>
                                                                                            <option value="1995" data-select2-id="550">1995</option>
                                                                                            <option value="1994" data-select2-id="551">1994</option>
                                                                                            <option value="1993" data-select2-id="552">1993</option>
                                                                                            <option value="1992" data-select2-id="553">1992</option>
                                                                                            <option value="1991" data-select2-id="554">1991</option>
                                                                                            <option value="1990" data-select2-id="555">1990</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Biển kiểm soát: <span class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control required" name="bks" placeholder="Nhập biển kiểm soát..." value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                    <label>Loại biển: <span class="text-danger">*</span></label>
                                                                                    <select class="form-control required" select2 name="loai_bien">
                                                                                        <option id="" value="" name="">--- Chọn loại biển ---</option>
                                                                                        <option id="" value="" name="">Biển trắng</option>
                                                                                        <option id="" value="" name="">Biển vàng</option>
                                                                                        <option id="" value="" name="">Biển xanh</option>
                                                                                        <option id="" value="" name="">Biển đỏ</option>
                                                                                    </select>
                                                                                
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                    <div class="d-flex flex-wrap align-items-center">
                                                                                        <input type="checkbox" id="kocobien">
                                                                                        <label class="ml-2 mb-0" for="kocobien"> Chưa có biển </label>
                                                                                        <button 
                                                                                            class="btn-popover"
                                                                                            type="button" 
                                                                                            data-popup="popover" 
                                                                                            data-content="Tích chọn nếu xe không có biển kiểm soát." 
                                                                                            data-trigger="hover" 
                                                                                            data-placement="top"
                                                                                            data-html="true"
                                                                                            data-original-title="" >
                                                                                            <i class="icon-info22"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Số khung: <span class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control required" name="so_khung" placeholder="Nhập số khung..." value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Số máy: <span class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control required" name="so_khung" placeholder="Nhập máy..." value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Số chỗ ngồi: <span class="text-danger">*</span></label>
                                                                            <select class="form-control required" select2 name="so_cho_ngoi">
                                                                                <option id="" value="" name="">--- Chọn số chỗ ngồi ---</option>
                                                                                <option id="1" name="1 chỗ ngồi" value="1">1 chỗ ngồi</option>
                                                                                <option id="2" name="2 chỗ ngồi" value="2">2 chỗ ngồi</option>
                                                                                <option id="3" name="3 chỗ ngồi" value="3">3 chỗ ngồi</option>
                                                                                <option id="4" name="4 chỗ ngồi" value="4">4 chỗ ngồi</option>
                                                                                <option id="5" name="5 chỗ ngồi" value="5">5 chỗ ngồi</option>
                                                                                <option id="6" name="6 chỗ ngồi" value="6">6 chỗ ngồi</option>
                                                                                <option id="7" name="7 chỗ ngồi" value="7">7 chỗ ngồi</option>
                                                                                <option id="8" name="8 chỗ ngồi" value="8">8 chỗ ngồi</option>
                                                                                <option id="9" name="9 chỗ ngồi" value="9">9 chỗ ngồi</option>
                                                                                <option id="10" name="10 chỗ ngồi" value="10">10 chỗ ngồi</option>
                                                                                <option id="11" name="11 chỗ ngồi" value="11">11 chỗ ngồi</option>
                                                                                <option id="12" name="12 chỗ ngồi" value="12">12 chỗ ngồi</option>
                                                                                <option id="13" name="13 chỗ ngồi" value="13">13 chỗ ngồi</option>
                                                                                <option id="14" name="14 chỗ ngồi" value="14">14 chỗ ngồi</option>
                                                                                <option id="15" name="15 chỗ ngồi" value="15">15 chỗ ngồi</option>
                                                                                <option id="16" name="16 chỗ ngồi" value="16">16 chỗ ngồi</option>
                                                                                <option id="17" name="17 chỗ ngồi" value="17">17 chỗ ngồi</option>
                                                                                <option id="18" name="18 chỗ ngồi" value="18">18 chỗ ngồi</option>
                                                                                <option id="19" name="19 chỗ ngồi" value="19">19 chỗ ngồi</option>
                                                                                <option id="20" name="20 chỗ ngồi" value="20">20 chỗ ngồi</option>
                                                                                <option id="21" name="21 chỗ ngồi" value="21">21 chỗ ngồi</option>
                                                                                <option id="22" name="22 chỗ ngồi" value="22">22 chỗ ngồi</option>
                                                                                <option id="23" name="23 chỗ ngồi" value="23">23 chỗ ngồi</option>
                                                                                <option id="24" name="24 chỗ ngồi" value="24">24 chỗ ngồi</option>
                                                                                <option id="25" name="25 chỗ ngồi" value="25">25 chỗ ngồi</option>
                                                                                <option id="26" name="26 chỗ ngồi" value="26">26 chỗ ngồi</option>
                                                                                <option id="27" name="27 chỗ ngồi" value="27">27 chỗ ngồi</option>
                                                                                <option id="28" name="28 chỗ ngồi" value="28">28 chỗ ngồi</option>
                                                                                <option id="29" name="29 chỗ ngồi" value="29">29 chỗ ngồi</option>
                                                                                <option id="100" name="100 chỗ ngồi" value="100">100 chỗ ngồi</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Trọng tải: <span class="text-danger">*</span></label>
                                                                            <select class="form-control required" select2 name="trong_tai">
                                                                                <option value="" data-select2-id="22">--- Chọn trọng tải ---</option>
                                                                                <option value="300" data-select2-id="40">300Kg</option>
                                                                                <option value="400" data-select2-id="41">400 kg</option>
                                                                                <option value="450" data-select2-id="42">450 Kg</option>
                                                                                <option value="470" data-select2-id="43">470 kg</option>
                                                                                <option value="480" data-select2-id="44">480 Kg</option>
                                                                                <option value="500" data-select2-id="45">500 Kg</option>
                                                                                <option value="510" data-select2-id="46">510Kg</option>
                                                                                <option value="520" data-select2-id="47">520 kg</option>
                                                                                <option value="530" data-select2-id="48">530 kg</option>
                                                                                <option value="550" data-select2-id="49">550 kg</option>
                                                                                <option value="555" data-select2-id="50">555 kg</option>
                                                                                <option value="560" data-select2-id="51">560 kg</option>
                                                                                <option value="570" data-select2-id="52">570 kg</option>
                                                                                <option value="580" data-select2-id="53">580 kg</option>
                                                                                <option value="600" data-select2-id="54">600 kg</option>
                                                                                <option value="620" data-select2-id="55">620 kg</option>
                                                                                <option value="640" data-select2-id="56">640 kg</option>
                                                                                <option value="650" data-select2-id="57">650 kg</option>
                                                                                <option value="655" data-select2-id="58">655 kg</option>
                                                                                <option value="660" data-select2-id="59">660 kg</option>
                                                                                <option value="680" data-select2-id="60">680Kg</option>
                                                                                <option value="700" data-select2-id="61">700Kg</option>
                                                                                <option value="740" data-select2-id="62">740 kg</option>
                                                                                <option value="750" data-select2-id="63">750Kg</option>
                                                                                <option value="785" data-select2-id="64">785Kg</option>
                                                                                <option value="790" data-select2-id="65">790 kg</option>
                                                                                <option value="800" data-select2-id="66">800 kg</option>
                                                                                <option value="818" data-select2-id="67">818 Kg</option>
                                                                                <option value="830" data-select2-id="68">830 kg</option>
                                                                                <option value="850" data-select2-id="69">850 kg</option>
                                                                                <option value="870" data-select2-id="70">870 Kg</option>
                                                                                <option value="880" data-select2-id="71">880 kg</option>
                                                                                <option value="883" data-select2-id="72">883Kg</option>
                                                                                <option value="900" data-select2-id="73">900Kg</option>
                                                                                <option value="920" data-select2-id="74">920 kg</option>
                                                                                <option value="930" data-select2-id="75">930 kg</option>
                                                                                <option value="950" data-select2-id="76">950Kg</option>
                                                                                <option value="980" data-select2-id="77">980Kg</option>
                                                                                <option value="990" data-select2-id="78">990Kg</option>
                                                                                <option value="0" data-select2-id="256">Khac</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Giá trị xe: <span class="text-danger">*</span></label>
                                                                            <button 
                                                                                class="btn-popover"
                                                                                type="button" 
                                                                                data-popup="popover" 
                                                                                data-content="Giá trị thực tế của xe. Nhập tay tham chiếu giá thị trường/giá bán." 
                                                                                data-trigger="hover" 
                                                                                data-placement="top"
                                                                                data-original-title="" >
                                                                                <i class="icon-info22"></i>
                                                                            </button>
                                                                            <input type="text" class="form-control required input-money" name="gia_tri_xe" placeholder="Nhập giá trị xe..." value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Xe mới 100%:  <span class="text-danger">*</span></label>
                                                                            <button 
                                                                                class="btn-popover"
                                                                                type="button" 
                                                                                data-popup="popover" 
                                                                                data-content="Chọn <b style='color: red;'>“Có”</b> nếu là xe mới 100%." 
                                                                                data-trigger="hover" 
                                                                                data-placement="top"
                                                                                data-html="true"
                                                                                data-original-title="" >
                                                                                <i class="icon-info22"></i>
                                                                            </button>
                                                                            <div class="d-flex">
                                                                                <p class="switch-title mr-3">Có phải xe mới 100% ?</p>
                                                                                <div class="button-switch">
                                                                                    <input type="checkbox" id="xe_moi" class="switch required" name="xe_moi">
                                                                                    <label for="xe_moi"  data-off="Không" data-on="Có"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    



                                                                </div>
                                                            </fieldset>
                                                            
                                                            <!-- Step 4 -->
                                                            <h6>Phạm vi bảo hiểm</h6>
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Thời hạn bảo hiểm: <span class="text-danger">*</span></label>
                                                                            <div class="row">
                                                                                <div class="col-md-6 d-flex">
                                                                                    <span style="width: 100px;">Từ</span>
                                                                                    <input type="time" class="form-control mr-2 input-time" placeholder="Nhập giờ...">
                                                                                    <input type="text" class="form-control datepicker input-date" placeholder="Nhập ngày...">
                                                                                </div>
                                                                                <div class="col-md-6 d-flex">
                                                                                    <span style="width: 100px;">Đến</span>
                                                                                    <input type="time" class="form-control mr-2 input-time" placeholder="Nhập giờ...">
                                                                                    <input type="text" class="form-control datepicker input-date" placeholder="Nhập ngày...">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div id="" class="collapse-group">
                                                                            <div class="p-title">Phạm vi bảo hiểm:</div>
                                                                            <div class="p-body collapse show">
                                                                                <div class="c-item">
                                                                                    <div class="c-title">
                                                                                        <span class="button-switch no-label">
                                                                                            <input type="checkbox" id="vcxe" class="switch cls_ckb" name="ckbchild1">
                                                                                            <label for="vcxe" data-off="Không" data-on="Có"></label>
                                                                                        </span>
                                                                                        <a data-toggle="collapse" class="collapsed" href="#collapsible-item1">Vật chất xe</a>
                                                                                    </div>
                                        
                                                                                    <div id="collapsible-item1" class="collapse">
                                                                                        <div class="c-body">
                                                                                            
                                                                                            <table class="table table-bordered datatable"
                                                                                                data-paging="false"
                                                                                                data-info="false"
                                                                                                data-ordering="false"
                                                                                                data-searching="false"
                                                                                            >
                                                                                                <thead class="thead-light">
                                                                                                    <tr>
                                                                                                        <th width="1%" class="not-desktop"></th>
                                                                                                        <th width="20%">Phạm vi bảo hiểm</th>
                                                                                                        <th width="10%">Số tiền bảo hiểm</th>
                                                                                                        <th width="5%" class="desktop">Phí (%)</th>
                                                                                                        <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                        <th width="5%" class="desktop">VAT (%)</th>
                                                                                                        <th width="10%" class="desktop">VAT</th>
                                                                                                        <th width="5%" class="desktop">COM (%)</th>
                                                                                                        <th width="10%" class="desktop">COM</th>
                                                                                                        <th width="20%" class="desktop">Định mức</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td><b>I. Vật chất xe </b></td>
                                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                        <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                                        <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                        <td>
                                                                                                            <select class="form-control required " select2 name="dinh_muc" >
                                                                                                                <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                    title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                                <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                    title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                                <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                    title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                                </option>
                                                                                                            
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <table class="table table-bordered datatable"
                                                                                                style="margin-top: -1px;"
                                                                                                data-paging="false"
                                                                                                data-info="false"
                                                                                                data-ordering="false"
                                                                                                data-searching="false"
                                                                                            >
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th width="1%" class="not-desktop"></th>
                                                                                                        <th width="20%">
                                                                                                            <b>II. Điều khoản sửa đổi bổ sung</b>
                                                                                                        </th>
                                                                                                        <th width="10%" class="desktop "></th>
                                                                                                        <th width="5%" desktop-10></th>
                                                                                                        <th width="10%" class="desktop "></th>
                                                                                                        <th width="5%" class="desktop "></th>
                                                                                                        <th width="10%" class="desktop "></th>
                                                                                                        <th width="5%" class="desktop "></th>
                                                                                                        <th width="10%" class="desktop "></th>
                                                                                                        <th width="20%" class="desktop "></th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS01">
                                                                                                                <label class="mb-0" for="BS01">BS01 - Bảo hiểm thay thế mới (bảo hiểm mới thay cũ)</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS02">
                                                                                                                <label class="mb-0" for="BS02">BS02 - Bảo hiểm lựa chọn cơ sở sửa chữa chính hãng</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.16"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td >
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS03">
                                                                                                                <label class="mb-0" for="BS03">BS03 - Bảo hiểm thuê xe trong thời gian sửa chữa (bảo hiểm gián đoạn sử dụng xe)</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS04">
                                                                                                                <label class="mb-0" for="BS04">BS04 - Bảo hiểm đối với xe miễn thuế, tạm nhập, tái xuất</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.06"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS05">
                                                                                                                <label class="mb-0" for="BS05">BS05 - Bảo hiểm vật chất xe cơ giới ngoài lãnh thổ Việt Nam (Trung Quốc, Lào, Cămpuchia và Thái Lan)</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS06">
                                                                                                                <label class="mb-0" for="BS06">BS06 - Bảo hiểm tổn thất do Thủy kích</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS07">
                                                                                                                <label class="mb-0" for="BS07">BS07 - Bảo hiểm vật chất xe cơ giới lưu hành tạm thời</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS08">
                                                                                                                <label class="mb-0" for="BS08">BS08 - Bảo hiểm mất bộ phận</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.16"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS09">
                                                                                                                <label class="mb-0" for="BS09">BS09 - Bảo hiểm xe tập lái</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.08"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS10">
                                                                                                                <label class="mb-0" for="BS10">BS10 - Bảo hiểm tổn thất xảy ra trong quá trình hoạt động của thiết bị chuyên dùng</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.1"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td>
                                                                                                            <div class="dkbs">
                                                                                                                <input class="mr-1" type="checkbox" onchange="on_change_dkbs(this)" name="" id="BS11">
                                                                                                                <label class="mb-0" for="BS11">BS11 - Các điều khỏan thỏa thuận bổ sung khác</label>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0.04"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td align="right"><input class="form-control text-danger text-right" type="text" disabled value="0.04"></td>
                                                                                                        <td align="right"><input class="form-control text-danger text-right" type="text" disabled value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <table class="table table-bordered datatable table-total" style="margin-top: -1px;"
                                                                                                data-paging="false"
                                                                                                data-info="false"
                                                                                                data-ordering="false"
                                                                                                data-searching="false"
                                                                                            >
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th width="1%" class="not-desktop"></th>
                                                                                                        <th width="20%"><b>Tổng cộng: </b></th>
                                                                                                        <th width="10%">Số tiền bảo hiểm</th>
                                                                                                        <th width="5%" class="desktop">Phí (%)</th>
                                                                                                        <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                        <th width="5%" class="desktop">VAT (%)</th>
                                                                                                        <th width="10%" class="desktop">VAT</th>
                                                                                                        <th width="5%" class="desktop">COM (%)</th>
                                                                                                        <th width="10%" class="desktop">COM</th>
                                                                                                        <th width="20%" class="desktop"></th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0.99"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled readonly value="10"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled readonly value="10.0"></td>
                                                                                                        <td align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></td>
                                                                                                        <td align="right"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="c-item">
                                                                                    <div class="c-title">
                                                                                        <span class="button-switch no-label">
                                                                                            <input type="checkbox" id="tndstn" class="switch cls_ckb" name="ckbchild2">
                                                                                            <label for="tndstn" data-off="Không" data-on="Có"></label>
                                                                                        </span>
                                                                                        <a class="collapsed " data-toggle="collapse" href="#collapsible-item2">TNDS tự nguyện</a>
                                                                                    </div>
                                                                                    <div id="collapsible-item2" class="collapse">
                                                                                        <div class="c-body">
                                                                                            <table class="table table-bordered datatable" style="margin-bottom: 0;"
                                                                                                data-paging="false"
                                                                                                data-info="false"
                                                                                                data-ordering="false"
                                                                                                data-searching="false"
                                                                                            >
                                                                                                <thead class="thead-light">
                                                                                                    <tr>
                                                                                                        <th width="1%" class="not-desktop"></th>
                                                                                                        <th width="15%">Quyền lợi</th>
                                                                                                        <th width="15%">Số tiền bảo hiểm</th>
                                                                                                        <th width="5%" class="desktop">Phí (%)</th>
                                                                                                        <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                        <th width="5%" class="desktop">VAT (%)</th>
                                                                                                        <th width="10%" class="desktop">VAT</th>
                                                                                                        <th width="5%" class="desktop">COM (%)</th>
                                                                                                        <th width="10%" class="desktop">COM</th>
                                                                                                        <th  style="max-width: 280px;" width="20%" class="desktop">Định mức</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td><b>TNDS tự nguyện về người</b></td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" style="display: inline-block; width: calc(100% - 65px);"  type="text"  value="0" >
                                                                                                            <span style="width: 62px;">(/người/vụ)</span>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-float" style="color: red;" type="text" value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" type="text"  value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" disabled="disabled" readonly="readonly" value="10">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" type="text"  value="0" >
                                                                                                        </td>
                                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0.0"></td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" type="text" value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <select class="form-control required " select2 name="dinh_muc" >
                                                                                                                <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                    title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                                <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                    title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                                <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                    title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                                </option>
                                                                                                            
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td><b>TNDS tự nguyện về tài sản</b></td>
                                                                                                        <td>
                                                                                                            <div class="d-flex">
                                                                                                                <input class="form-control text-right input-money" style="display: inline-block; width: calc(100% - 65px);" type="text" value="0">
                                                                                                                <span style="width: 62px;"> (/vụ)</span>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-float" style="color: red;" type="text" value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" type="text"  value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" disabled="disabled" readonly="readonly" value="10">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" type="text"  value="0" >
                                                                                                        </td>
                                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0.0"></td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" type="text" value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <select class="form-control required " select2 name="dinh_muc" >
                                                                                                                <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                    title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                                <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                    title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                                <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                    title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                                </option>
                                                                                                            
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td><b>Tổng cộng: </b></td>
                                                                                                        <td align="right"><b>0</b></td>
                                                                                                        <td align="right"><b>0</b></td>
                                                                                                        <td align="right"><b>0</b></td>
                                                                                                        <td align="right"></td>
                                                                                                        <td align="right"><b>0</b></td>
                                                                                                        <td align="right"><b>0</b></td>
                                                                                                        <td align="right"><b>0</b></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                
                                                                                <div class="c-item">
                                                                                    <div class="c-title">
                                                                                        <span class="button-switch no-label">
                                                                                            <input type="checkbox" id="tnlpx" class="switch cls_ckb" name="ckbchild3">
                                                                                            <label for="tnlpx" data-off="Không" data-on="Có"></label>
                                                                                        </span>
                                                                                        <a class="collapsed " data-toggle="collapse" href="#collapsible-item3">Tai nạn lái, phụ xe và người ngồi trên xe</a>
                                                                                    </div>
                                                                                    <div id="collapsible-item3" class="collapse">
                                                                                        <div class="c-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-2">
                                                                                                    <div class="form-group">
                                                                                                        <label>Số người tham gia: <span class="text-danger">*</span></label>
                                                                                                        <input type="text" class="form-control" name="so_nguoi_tham_gia" placeholder="Nhập số người tham gia..." value="0" >
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <table class="table table-bordered datatable"
                                                                                                data-paging="false"
                                                                                                data-info="false"
                                                                                                data-ordering="false"
                                                                                                data-searching="false"
                                                                                            >
                                                                                                <thead class="thead-light">
                                                                                                    <tr>
                                                                                                        <th width="1%" class="not-desktop"></th>
                                                                                                        <th width="15%">Quyền lợi</th>
                                                                                                        <th width="15%">Số tiền bảo hiểm</th>
                                                                                                        <th width="5%" class="desktop">Phí (%)</th>
                                                                                                        <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                        <th width="5%" class="desktop">VAT (%)</th>
                                                                                                        <th width="10%" class="desktop">VAT</th>
                                                                                                        <th width="5%" class="desktop">COM (%)</th>
                                                                                                        <th width="10%" class="desktop">COM</th>
                                                                                                        <th  style="max-width: 280px;" width="20%" class="desktop">Định mức</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td><b>Tai nạn lái, phụ xe và người ngồi trên xe </b></td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" style="display: inline-block; width: calc(100% - 65px);" type="text" value="0" >
                                                                                                            <span style="width: 62px;">(/người/vụ)</span>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-left" style="color: red;" type="text" value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" type="text" value="0">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="0">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" type="text" value="0">
                                                                                                        </td>
                                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0.0"></td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" type="text" value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <select class="form-control required " select2 name="dinh_muc" >
                                                                                                                <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                    title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                                <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                    title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                                <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                    title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                                </option>
                                                                                                            
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                
                                                                                <div class="c-item">
                                                                                    <div class="c-title">
                                                                                        <span class="button-switch no-label">
                                                                                            <input type="checkbox" id="tndsbb" class="switch cls_ckb" name="ckbchild4">
                                                                                            <label for="tndsbb" data-off="Không" data-on="Có"></label>
                                                                                        </span>
                                                                                        <a class="collapsed " data-toggle="collapse" href="#collapsible-item4">TNDS bắt buộc</a>
                                                                                    </div>
                                                                                    <div id="collapsible-item4" class="collapse">
                                                                                        <div class="c-body">
                                                                                            <div class="row mb-3">
                                                                                                <div class="col-md-4">
                                                                                                    <label>Thời hạn bảo hiểm: <span class="text-danger">*</span></label>
                                                                                                    <div class="d-flex mb-2">
                                                                                                        <span style="width: 100px;">Từ</span>
                                                                                                        <input type="time" class="form-control mr-2" step="width: 100px;">
                                                                                                        <input type="text" class="form-control datepicker input-date" placeholder="dd/mm/yyyy">
                                                                                                    </div>
                                                                                                    <div class="d-flex">
                                                                                                        <span style="width: 100px;">Đến</span>
                                                                                                        <input type="time" class="form-control mr-2" step="width: 100px;">
                                                                                                        <input type="text" class="form-control datepicker input-date" placeholder="dd/mm/yyyy">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label>Số GCNBH: <span class="text-danger">*</span></label>
                                                                                                    <input type="text" class="form-control" placeholder="Nhập số giấy chứng nhận...">
                                                                                                </div>
                                                                                            </div>
                                                                                            <table class="table table-bordered datatable"
                                                                                                data-paging="false"
                                                                                                data-info="false"
                                                                                                data-ordering="false"
                                                                                                data-searching="false"
                                                                                            >
                                                                                                <thead class="thead-light">
                                                                                                    <tr>
                                                                                                        <th width="1%" class="not-desktop"></th>
                                                                                                        <th width="10%">Quyền lợi</th>
                                                                                                        <th width="20%">Số tiền bảo hiểm</th>
                                                                                                        <th width="5%" class="desktop">Phí (%)</th>
                                                                                                        <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                        <th width="5%" class="desktop">VAT (%)</th>
                                                                                                        <th width="10%" class="desktop">VAT</th>
                                                                                                        <th width="5%" class="desktop">COM (%)</th>
                                                                                                        <th width="10%" class="desktop">COM</th>
                                                                                                        <th  style="max-width: 280px;" width="20%" class="desktop">Định mức</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td><b style="text-transform: uppercase;">TNDS bắt buộc </b></td>
                                                                                                        <td>
                                                                                                            <b>TNDS về người: 100tr/người/vụ</b>
                                                                                                            <br>
                                                                                                            <b>TNDS về tài sản: 100tr/vụ</b>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" style="color: red;" type="text" value="0">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" type="text" value="100,000,000" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right" type="text"value="0" >
                                                                                                        </td>
                                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="5.0"></td>
                                                                                                        <td>
                                                                                                            <input class="form-control text-right input-money" type="text" value="0" >
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <select class="form-control required " select2 name="dinh_muc" >
                                                                                                                <option id="1A0CB825-AF10-4E71-973D-47A14076CABD" value="1A0CB825-AF10-4E71-973D-47A14076CABD"
                                                                                                                    title="Xe cơ giới khác">Xe cơ giới khác</option>
                                                                                                                <option id="A43D9544-9201-490D-8087-A99CC3A6D906" value="A43D9544-9201-490D-8087-A99CC3A6D906"
                                                                                                                    title="Biển xanh, biển đỏ, biển nước ngoài">Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                <option id="506CE15B-BC49-4F11-899A-7E950EC8A456" value="506CE15B-BC49-4F11-899A-7E950EC8A456"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>15 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                <option id="9A3B6724-5296-4AC1-A93F-D86E5E3439FB" value="9A3B6724-5296-4AC1-A93F-D86E5E3439FB"
                                                                                                                    title="Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX">Xe taxi, đầu
                                                                                                                    kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;10 tuổi kể từ ngày SX</option>
                                                                                                                <option id="98BDBF21-0466-4BA7-8464-7455F86D7E81" value="98BDBF21-0466-4BA7-8464-7455F86D7E81"
                                                                                                                    title="Xe cơ giới khai thác qua Ngân hàng, show room">Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                <option id="27292D06-61D1-4EE9-8417-AEF6FADD987B" value="27292D06-61D1-4EE9-8417-AEF6FADD987B" title="Xe tải">Xe tải
                                                                                                                </option>
                                                                                                            
                                                                                                            </select>
                                                                                                        </td>
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
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Loại miễn thường: </label>
                                                                            <div class="form-group-select">
                                                                                <select class="form-control" select2 name="muc_mien_thuong">
                                                                                    <option value="">--- Chọn mức miễn thường ---</option>
                                                                                    <option value="1">Có khấu trừ</option>
                                                                                    <option value="0">Không có khấu trừ</option>
                                                                                </select>
                                                                                <span class="select-icon"><i class="icon-arrow-down22"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label>Số tiền miễn thường: </label>
                                                                            <div class="form-group-select">
                                                                                <select class="form-control" select2 name="so_tien_mien_thuong">
                                                                                    <option value="">--- Chọn số tiền miễn thường ---</option>
                                                                                    <option value="500000">500.000 đ/vụ</option>
                                                                                    <option value="1500000">1.500.000 đ/vụ</option>
                                                                                </select>
                                                                                <span class="select-icon"><i class="icon-arrow-down22"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label>Số tiền giảm miễn thường: </label>
                                                                            <input type="text" class="form-control input-money" name="giam_mien_thường" placeholder="Nhập số tiền..." value="0">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12">
                                                                        <b><label>Lịch thanh toán bảo hiểm: </label></b>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <table class="table table-bordered" style="margin: auto;">
                                                                            <colgroup>
                                                                                <col width="70%">
                                                                                <col width="30%">
                                                                            </colgroup>
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th width="70%">Quyền lợi</th>
                                                                                    <th class="text-right" width="30%">Phí BH có VAT</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Vật chất xe </td>
                                                                                    <td class="text-right">0</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <td>Điều khoản bổ sung</td>
                                                                                    <td class="text-right">0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Số tiền giảm miễn thường</td>
                                                                                    <td class="text-right">0</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <td>TNDS tự nguyện về người</td>
                                                                                    <td class="text-right">0</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <td>TNDS tự nguyện về tài sản </td>
                                                                                    <td class="text-right">0</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <td>Tai nạn lái, phụ xe và người ngồi trên xe </td>
                                                                                    <td class="text-right">0</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <td>TNDS bắt buộc </td>
                                                                                    <td class="text-right" >0</td>
                                                                                </tr>
                                                                                
                                                                                <tr class="bold" style="background-color: #fff;">
                                                                                    <td>Tổng phí BH</td>
                                                                                    <td><input class="form-control text-right" type="text" disabled="" readonly="" value="0"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="repeater-obj" repeater>
                                                                            <table class="table table-bordered lich-thanh-toan datatable"
                                                                                data-paging="false"
                                                                                data-info="false"
                                                                                data-ordering="false"
                                                                                data-searching="false"
                                                                            >
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th width="10%"><b>Lần</b></th>
                                                                                        <th width="20%"><b>Ngày thanh toán</b></th>
                                                                                        <th width="25%" class="desktop"><b>Phí BH(có VAT)</b></th>
                                                                                        <th width="25%" class="desktop"><b>Thành tiền VAT</b></th>
                                                                                        <th width="25%" class="desktop"><b>Phí BH(chưa VAT) </b></th>
                                                                                        <th width="70px"></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody data-repeater-list="so-lan-thanh-toan">
                                                                                    <tr data-repeater-item style="display: none;">
                                                                                        <td><input class="form-control input-number" type="text" value="" ></td>
                                                                                        <td><input class="form-control datepicker input-date" type="text" placeholder="dd/mm/yyyy"></td>
                                                                                        <td><input class="form-control input-money" type="text" placeholder="Nhập..."></td>
                                                                                        <td><input class="form-control input-money" type="text" placeholder="Nhập..."></td>
                                                                                        <td><input class="form-control input-money" type="text" placeholder="Nhập..."></td>
                                                                                        <td><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                                                                    </tr>
                                                                                    <tr data-repeater-item>
                                                                                        <td><input class="form-control" type="text" value="1"></td>
                                                                                        <td><input class="form-control datepicker input-date" type="text" placeholder="dd/mm/yyyy" value="16/06/2020"></td>
                                                                                        <td><input class="form-control input-money" type="text" placeholder="Nhập..." value="893,400"></td>
                                                                                        <td><input class="form-control input-money" type="text" placeholder="Nhập..." value="79,400"></td>
                                                                                        <td><input class="form-control input-money" type="text" placeholder="Nhập..." value="814,000"></td>
                                                                                        <td><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="border p-1 text-center"><input class="btn bg-success" data-repeater-create type="button" value="+ Thêm"/></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Ghi chú nội bộ:</label>
                                                                            <textarea rows="3" cols="5" class="form-control" placeholder="Nhập ghi chú..."></textarea>
                                                                        </div>
                                                                    </div>  
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Ghi chú cho khách hàng:</label>
                                                                            <textarea rows="3" cols="5" class="form-control" placeholder="Nhập ghi chú..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Tài liệu đính kèm: <span class="text-danger">*</span></label>
                                                                            <div class="input-group file-caption-main">
                                                                                <button class="btn btn-light btn-file mr-3">
                                                                                    <i class="icon-upload7 mr-2"></i> 
                                                                                    <span class="hidden-xs">Tải lên tài liệu</span>
                                                                                    <input type="file" class="file-input-preview">
                                                                                </button>

                                                                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#ds_files">
                                                                                    <i class="icon-stack2 mr-2"></i> 
                                                                                    <span class="hidden-xs">Danh sách tài liệu</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Form wzard with step validation section end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal  -->

            <!-- Danh sách files -->
            <div id="ds_files" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="file-manager">
                            <div class="f-left">
                                <div class="f-left-wrapper">
                                    <ul class="nav nav-file nav-sidebar">
                                        <li class="nav-item-header"><span>Danh sách files</span></li>
                                        <li class="nav-item nav-item-submenu nav-item-open">
                                            <a href="#" class="nav-link"><i class="icon-folder-open3"></i><span>Tất cả</span></a> 
                                            <ul class="nav nav-group-sub">
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-text2"></i><span>Tài liệu</span></a> </li>
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-picture"></i><span>Hình ảnh</span></a> </li>
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-video"></i><span>Video</span></a> </li>
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-music"></i><span>Âm thanh</span></a> </li>
                                                <li class="nav-item"> <a href="#" class="nav-link"><i class="icon-file-zip"></i><span>File nén</span></a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="f-right grid">
                                <div class="file-header d-flex justify-content-between">
                                    <div class="file-view">
                                        <button class="btn btn-light btn-sm" onclick="list_view(this)" title="List"><i class="icon-list2"></i></button>
                                        <button class="btn btn-light btn-sm" onclick="grid_view(this)" title="Grid"><i class="icon-grid2"></i></button>
                                    </div>
                                    <div class="file-search">
                                        <input type="text" name="" class="form-control form-control-sm" placeholder="Tìm kiếm...">
                                        <button type="submit"><i class="icon-search4"></i></button>
                                    </div>
                                </div>
                                <ul class="list-files scrollbar-light">
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">Text.txt</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">13 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/image2.jpg) " class="file-icon"></span>
                                            <div class="file-info">
                                                <span class="name">preview-15.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Celine Dion - Ashes.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/image.png) " class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">preview-11.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/image.png)" class="file-icon file-image"></span>
                                            <div class="file-info">
                                                <span class="name">preview.png</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/image3.jpg)" class="file-icon file-image"></span>
                                            <div class="file-info">
                                                <span class="name">Copy preview-11.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">890.50 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/excel.png)" class="file-icon file-excel"></span>
                                            <div class="file-info">
                                                <span class="name">Excel Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">520.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/excel.png)" class="file-icon file-excel"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Excel Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">520.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/pdf.png)" class="file-icon file-pdf"></span>
                                            <div class="file-info">
                                                <span class="name">PDF Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">120.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/arc.png)" class="file-icon file-arc"></span>
                                            <div class="file-info">
                                                <span class="name">ZIP Archive</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">20.05 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span style="background-image: url(app-assets/images/files/pp.png)" class="file-icon file-pp"></span>
                                            <div class="file-info">
                                                <span class="name">PPTX Sample File</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">245.05 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Secret.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">5.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Martin Clo - MM.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">4.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">Text Sample.txt</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">53 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-video"></span>
                                            <div class="file-info">
                                                <span class="name">Video Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">119 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-csv"></span>
                                            <div class="file-info">
                                                <span class="name">CSV Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">89.21 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="file-wrapper">
                                            <span class="file-icon file-xps"></span>
                                            <div class="file-info">
                                                <span class="name">XPX Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">9.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    
                                    
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Danh sách files -->
        </div>

        <!-- Danh sách người tham gia bảo hiểm -->
        <div id="ds_nguoi_tham_gia_bao_hiem" class="modal fade" tabindex="-1" datatable-modal>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ont-weight-semibold ">Danh sách người tham gia bảo hiểm</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group ">
                                        <label class="mb-0">Tên người được BH </label>
                                        <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Ký hiệu</label>
                                        <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Ấn chỉ</label>
                                        <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">&nbsp;</label>
                                        <div>
                                            <a href="#" class="btn bg-primary"> <i class="icon-search4 mr-2"></i>Tìm kiếm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 align-items-center">
                                <div class="col-sm-4">
                                    <button class="btn btn-light btn-file mr-3">
                                        <i class="icon-upload7 mr-2"></i> 
                                        <span class="hidden-xs">Import file</span>
                                        <input type="file" class="file-input-preview">
                                    </button>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 d-flex align-items-center"><span class="text-danger">Nhấn vào browser để upload dữ liệu từ excel.</span> <a href="" download class="text-primary">(Nhấn vào đây để tải file mẫu)</a></p>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered datatable"  
                                            data-paging="false"
                                            data-info="false"
                                            data-ordering="false"
                                            data-searching="false"
                                            >
                                            <thead class="thead-light">
                                                <th width="30px">#</th>
                                                <th>Người được BH</th>
                                                <th>Ấn chỉ</th>
                                                <th>Địa chỉ</th>
                                                <th>Ngày cấp</th>
                                                <th>Ngày thu phí</th>
                                                <th>Hiệu lực từ ngày</th>
                                                <th>Đến ngày</th>
                                                <th>Số tiền BH</th>
                                                <th>Phí BH</th>
                                                <th>Phí bổ sung</th>
                                                <th>Ghi chú</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>
                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn bg-primary"><i class="icon-floppy-disk mr-1"></i>Ghi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- / Danh sách người tham gia bảo hiểm -->

        <?php inc('chat-box.php'); ?> 
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/ds_so_hop_dong_xin_cap.php'); ?>
        <div class="modal-group">
            <?php
                inc('modal/ds_cac_khach_hang.php'); 
                inc('modal/cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>


    </body>

<?php include_once FOOTER; ?>