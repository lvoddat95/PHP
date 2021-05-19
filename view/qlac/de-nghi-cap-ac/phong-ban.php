<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'de-nghi-cap-ac-phong-ban,de-nghi-cap-ac'; ?>
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
                            <span class="breadcrumb-item active">Đề nghị cấp ấn chỉ phòng ban</span>
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
                        <p class="font-weight-semibold font-size-m mb-0"><i class="fad fa-user-friends mr-2"></i>Danh sách đề nghị cấp ấn chỉ</p>
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
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label class="font-weight-semibold">Đơn vị nhận ấn chỉ:</label>
                                        <div class="form-group-select">
                                            <div class="input-group">
                                                <input type="hidden" name="">
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
                                        <label>Cán bộ: </label>
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
                        <div class="card-header header-elements-inline header-button">
                            <div class="dataTables_search"></div>
                            <div class="header-elements p-button">
                                <a href="#" data-toggle="modal" data-target="#trinh_duyet_nhieu_don" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-file-check"></i></b> Tổng hợp Y/C từ phòng ban</a>
                                <a href="" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-trash"></i></b> Xóa</a>
                                <a href="<?php echo HTTP_PATH ?>view/qlac/de-nghi-cap-ac/them-moi.php" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="icon-plus2"></i></b> Thêm</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered datatable" data-paging="true" data-info="true" data-ordering="false" data-searching="false" data-page-length="20">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="w1p" align="center">#</th>
                                                <th class="w10p">Ngày đề nghị</th>
                                                <th class="w10p">Đơn vị</th>
                                                <th class="w10p">Phòng ban</th>
                                                <th class="w10p">Cán bộ đề nghị cấp</th>
                                                <th class="desktop">Nội dung</th>
                                                <th class="w10p">Trạng thái</th>
                                                <th class="w10p desktop">Mở rộng KD</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">02/04/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Trụ Sở Chính </a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ban Tổng Giám Đốc</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Trần Trọng Dũng</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Đề xuất cấp ấn chỉ lần đầu cho VNI Phú Thọ</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Chờ duyệt</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"></a></td>
                                            </tr>
                                            <tr class="round_row">
                                                <td><input type="checkbox" class="input-chk"></a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">23/03/2021</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Trụ Sở Chính</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Ban Tài Chính Kế Toán</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Nguyễn Hoàng Mai</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php">Cấp Ấn chỉ</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"> Chờ duyệt</a></td>
                                                <td class="data"><a href="phong-ban-chi-tiet-ac.php"></a></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
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

                </div>
                <!-- /Content-block -->

                <?php include_once MOBILE_NAV; ?>
                <?php include_once BOTTOM; ?>
            </div>

        </div>

    </div>



</body>

<?php include_once FOOTER; ?>