<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>
    
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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="icon-cube4 mr-1"></i> Quản lý ấn chỉ</a>
                                <span class="breadcrumb-item active">Tra cứu ấn chỉ</span>
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
                            <p class="font-weight-semibold font-size-m mb-0"><i class="fad fa-search mr-2"></i>Tra cứu ấn chỉ</p>
                            <span class="text-muted d-block font-size-xs">Nhập thông tin theo từng bước. Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                        </div>
                        <div class="p-button">
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">
                        <div class="row">
                           <div class="col-md-12">
                               <div class="tab-claim tab-style">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#ac_nhap_xuat_theo_quyen" class="nav-link active" data-toggle="tab">
                                                <i class="fal fa-ballot-check mr-1"></i>
                                                <span>AC nhập xuất theo quyển</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#ac_nhap_xuat_theo_seri" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-barcode-read mr-1"></i>
                                                <span>AC nhập xuất theo seri</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#ac_su_dung_theo_quyen" class="nav-link" data-toggle="tab">
                                                <i class="fad fa-ballot-check mr-1"></i>
                                                <span>AC sử dụng theo quyển</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#ac_su_dung_theo_quyen" class="nav-link" data-toggle="tab">
                                                <i class="fad fa-barcode-read mr-1"></i>
                                                <span>AC sử dụng theo seri</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#ac_su_dung_theo_quyen" class="nav-link" data-toggle="tab">
                                                <i class="fad fa-hands-usd mr-1"></i>
                                                <span>AC quyết toán</span>
                                            </a>
                                        </li>
                                       
                                    </ul>

                                    <div class="clearfix"></div>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="ac_nhap_xuat_theo_quyen">
                                            <div class="tab-pane-action pt-2">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <label>Loại ấn chỉ: <span class="text-danger">*</span></label>
                                                            <select class="form-control" select2="" >
                                                                <option id="GCNBH_MV" name="Ấn chỉ bảo hiểm xe ô tô" value="GCNBH_MV" selected="">Ấn chỉ bảo hiểm xe ô tô</option><option id="GCNBH_MC" name="Ấn chỉ bảo hiểm xe máy" value="GCNBH_MC">Ấn chỉ bảo hiểm xe máy</option><option id="BHDL" name="Ấn chỉ bảo hiểm du lịch" value="BHDL">Ấn chỉ bảo hiểm du lịch</option><option id="HUE" name="Ấn chỉ bảo hiểm tai nạn hộ sử dụng điện" value="HUE">Ấn chỉ bảo hiểm tai nạn hộ sử dụng điện</option><option id="G03" name="Ấn chỉ bảo hiểm tai nạn con người" value="G03">Ấn chỉ bảo hiểm tai nạn con người</option><option id="Hoadon" name="Hóa đơn giá trị gia tăng" value="Hoadon">Hóa đơn giá trị gia tăng</option><option id="G14" name="Tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng" value="G14">Tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng</option><option id="B16" name="Bảo hiểm toàn diện nhà chung cư" value="B16">Bảo hiểm toàn diện nhà chung cư</option><option id="HouseHold" name="Toàn Diện Hộ Gia Đình" value="HouseHold">Toàn Diện Hộ Gia Đình</option><option id="G16" name="Giấy chứng nhận Bảo An tín dụng (Bình An)" value="G16">Giấy chứng nhận Bảo An tín dụng (Bình An)</option><option id="BHSK" name="Ấn chỉ bảo hiểm sức khỏe toàn diện" value="BHSK">Ấn chỉ bảo hiểm sức khỏe toàn diện</option><option id="G17" name="Ấn chỉ bảo hiểm tai nạn giao thông đường bộ" value="G17">Ấn chỉ bảo hiểm tai nạn giao thông đường bộ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group ">
                                                            <label>Kí hiệu: </label>
                                                            <input type="text" class="form-control" name="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group ">
                                                            <label>Quyển số: </label>
                                                            <input type="text" class="form-control" name="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group ">
                                                            <label>Thời gian: <span class="text-danger">*</span></label>
                                                            <div class="date-to-date">
                                                                <div class="d-flex">
                                                                    <input type="text" class="form-control datepicker input-date " placeholder="Từ: ..." value="" id="">
                                                                </div>
                                                                <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
                                                                <div class="d-flex">
                                                                    <input type="text" class="form-control datepicker input-date " placeholder="Đến: ..." value="" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="d-flex  mb-3">
                                                            <div class="d-inline-block">
                                                                <button type="submit" style="letter-spacing: 1px;" class="btn text-uppercase w-100 bg-orange"><i class="icon-search4 mr-2"></i> Tìm kiếm </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane-form">
                                                <table class="table table-bordered datatable" 
                                                    data-paging="true"
                                                    data-info="true"
                                                    data-ordering="true"
                                                    data-searching="false"
                                                    data-page-length="15">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Ký hiệu</th>
                                                            <th>Quyển số</th>
                                                            <th>Từ seri</th>
                                                            <th>Đến seri</th>
                                                            <th>Ngày nhập</th>
                                                            <th>Ngày xuất</th>
                                                            <th>Số phiếu xuất</th>
                                                            <th>Diễn giải</th>
                                                            <th>Nơi giữ nhận ấn chỉ</th>
                                                            <th>Ghi chú</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for ($i = 0; $i < 60; $i++) { ?>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
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



    </body>

<?php include_once FOOTER; ?>