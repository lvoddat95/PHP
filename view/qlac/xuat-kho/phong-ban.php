<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'xuat-kho-phong-ban,xuat-kho'; ?>
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
                            <a href="<?php echo HTTP_PATH . 'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fad fa-file-certificate mr-1"></i>Quản lý ấn chỉ</a>
                            <span class="breadcrumb-item active">Xuất kho</span>
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
                        <p class="font-weight-semibold font-size-m mb-0"><i class="fad fa-user-friends mr-2"></i>Xuất ấn chỉ cho phòng ban</p>
                    </div>
                    <div class="p-button">
                    </div>
                </div>

                <!-- Content-block -->
                <div class="content-block">
                    <div class="card card-search">
                        <div class="card-header header-elements-inline">
                            <p class="card-title font-size-s">
                                <i style="width: 26px;height: 26px;line-height: 26px;font-size: 12px;" class="icon-search4 d-flex-inline align-items-center justify-content-center rounded-round bg-color mr-2"></i>
                                Tìm kiếm ấn chỉ
                            </p>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Loại ấn chỉ: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-layer-group"></i></span>
                                            </span>
                                            <select class="form-control" select2="">
                                                <option id="GCNBH_MV" name="Ấn chỉ bảo hiểm xe ô tô" value="GCNBH_MV" selected="">Ấn chỉ bảo hiểm xe ô tô</option>
                                                <option id="GCNBH_MC" name="Ấn chỉ bảo hiểm xe máy" value="GCNBH_MC">Ấn chỉ bảo hiểm xe máy</option>
                                                <option id="BHDL" name="Ấn chỉ bảo hiểm du lịch" value="BHDL">Ấn chỉ bảo hiểm du lịch</option>
                                                <option id="HUE" name="Ấn chỉ bảo hiểm tai nạn hộ sử dụng điện" value="HUE">Ấn chỉ bảo hiểm tai nạn hộ sử dụng điện</option>
                                                <option id="G03" name="Ấn chỉ bảo hiểm tai nạn con người" value="G03">Ấn chỉ bảo hiểm tai nạn con người</option>
                                                <option id="Hoadon" name="Hóa đơn giá trị gia tăng" value="Hoadon">Hóa đơn giá trị gia tăng</option>
                                                <option id="G14" name="Tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng" value="G14">Tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng</option>
                                                <option id="B16" name="Bảo hiểm toàn diện nhà chung cư" value="B16">Bảo hiểm toàn diện nhà chung cư</option>
                                                <option id="HouseHold" name="Toàn Diện Hộ Gia Đình" value="HouseHold">Toàn Diện Hộ Gia Đình</option>
                                                <option id="G16" name="Giấy chứng nhận Bảo An tín dụng (Bình An)" value="G16">Giấy chứng nhận Bảo An tín dụng (Bình An)</option>
                                                <option id="BHSK" name="Ấn chỉ bảo hiểm sức khỏe toàn diện" value="BHSK">Ấn chỉ bảo hiểm sức khỏe toàn diện</option>
                                                <option id="G17" name="Ấn chỉ bảo hiểm tai nạn giao thông đường bộ" value="G17">Ấn chỉ bảo hiểm tai nạn giao thông đường bộ</option>
                                            </select>
                                            <input type="hidden" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Phòng ban nhận ấn chỉ: </label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-hand-holding-box"></i></span>
                                            </span>
                                            <select class="form-control" select2="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="">Phòng kinh doanh 1</option>
                                                <option value="">Phòng kinh doanh 2</option>
                                                <option value="">Phòng kinh doanh 3</option>
                                                <option value="">Phòng kinh doanh 4</option>
                                                <option value="">Phòng kinh doanh 5</option>
                                                <option value="">Phòng Kinh Doanh 6</option>
                                                <option value="">Phòng Kinh Doanh 8</option>
                                            </select>
                                            <input type="hidden" name="">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Người nhận: </label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </span>
                                            <select class="form-control" select2="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="">Lê Văn A</option>
                                                <option value="">Lê Văn C</option>
                                                <option value="">Lê Văn D</option>
                                                <option value="">Lê Văn E</option>
                                                <option value="">Lê Văn F</option>
                                                <option value="">Lê Văn G</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12"></div>

                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Kí hiệu: </label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-text"></i></span>
                                            </span>
                                            <input type="text" class="form-control" name="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Quyển số:</label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-list-numbered"></i></span>
                                            </span>
                                            <input type="text" class="form-control" name="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Số phiếu nhập/xuất:</label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-enter6"></i></span>
                                            </span>
                                            <input type="text" class="form-control" name="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Thời gian:</label>
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

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered datatable" data-paging="true" data-info="true" data-ordering="false" data-searching="false" data-page-length="20">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="w1p" align="center">#</th>
                                                <th class="w10p">Ngày xuất</th>
                                                <th class="w10p">Số phiếu xuất</th>
                                                <th>Người nhận</th>
                                                <th>Nơi nhận</th>
                                                <th>Loại ấn chỉ</th>
                                                <th class="w7p">Ký hiệu</th>
                                                <th>Từ quyển - Đến quyển</th>
                                                <th class="w7p">Số lượng quyển</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">02/04/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX04/02/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 9066 đến 9075</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">10</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">23/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/51/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">AD22/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 19081 đến 19100</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">20</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">23/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/50/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 8986 đến 8995</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">10</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">18/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/39/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 9001 đến 9010</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">10</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">16/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/34/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB20/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 6620 đến 6620</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">1</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">16/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/33/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 703 đến 705</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">3</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">16/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/32/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB19/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 13159 đến 13164</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">6</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">16/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/31/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">AD22/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 19151 đến 19170</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">20</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">15/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/26/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">AD22/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 19176 đến 19195</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">20</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">15/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/25/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 7576 đến 7585</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">10</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">10/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/21/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB20/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 6555 đến 6555</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">1</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">10/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/20/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">AD22/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 18951 đến 18980</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">30</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">01/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/04/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 7686 đến 7705</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">20</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">01/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/03/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">AD22/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 18481 đến 18500</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">20</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">01/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX03/01/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">AD22/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 18841 đến 18890</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">50</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">02/02/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX02/04/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">AD21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 15031 đến 15080</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">50</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">02/02/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX02/03/20</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 7471 đến 7490</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">20</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">21/01/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX01/31/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">AD21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 14528 đến 14577</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">50</a></td>
                                            </tr>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">21/01/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX01/30/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 7406 đến 7425</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">20</a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">15/01/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">PX01/24/21</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Bùi Thị Nhung</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Phòng Kinh Doanh 1</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">BB21/</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Từ 663 đến 682</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">20</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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