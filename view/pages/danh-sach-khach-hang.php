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
                            <i class="far fa-align-left"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> Trang chủ</a>
                                <span class="breadcrumb-item active">Danh sách khách hàng</span>
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
                            <p class="font-weight-semibold font-size-m mb-0">Danh sách khách hàng</p>
                        </div>
                        <div class="p-button">
                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                            <a href="" class="btn mr-1"><i class="fa fa-trash mr-1"></i> Xoá</a>
                            <a href="<?php echo HTTP_PATH .'view/pages/nhap-khach-hang.php'; ?>" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="icon-plus2"></i></b> Thêm mới</a>
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Chi nhánh:</label>
                                            <?php inc('template/chi_nhanh.php'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Mã khách hàng: </label>
                                            <input type="text" class="form-control" name="" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="d-block">Tên khách hàng: <i class="text-danger float-right font9">(Tìm theo tên không dấu)</i></label>
                                            <input type="text" class="form-control" name="" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Mã số thuế: </label>
                                            <input type="text" class="form-control" name="" placeholder="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="d-block">Số chứng minh thư ND:</label>
                                            <input type="text" class="form-control" name="" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="d-block">Số điện thoại:</label>
                                            <input type="text" class="form-control" name="" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="d-block">Trạng thái:</label>
                                            <select class="form-control" select2 name="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="">Hoạt động</option>
                                                <option value="">Không hoạt động</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-button justify-content-end">
                                    <button type="submit" class="btn bg-primary"><i class="fa fa-filter mr-1"></i>Lọc</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="icon-cross2 mr-1"></i>Hủy điều kiện lọc</button>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered table-hover datatable"  
                                    data-paging="true"
                                    data-info="true"
                                    data-ordering="true"
                                    data-searching="false"
                                    data-page-length="10" >
                                    <thead class="thead-light">
                                        <th width="30px" data-orderable="false">#</th>
                                        <th>Mã khách hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Tình trạng</th>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000001</div></td>
                                            <td><div>Nguyễn Văn Anh</div></td>
                                            <td><div>17 Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000002</div></td>
                                            <td><div>Phạm Thị Mai</div></td>
                                            <td><div>Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000003</div></td>
                                            <td><div>Nguyễn Văn Sang</div></td>
                                            <td><div>Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000004</div></td>
                                            <td><div>EVN1</div></td>
                                            <td><div>01 le lai</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000005</div></td>
                                            <td><div>EVN 1 - cty dien luc 1</div></td>
                                            <td><div>01 le lai</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000006</div></td>
                                            <td><div>Công ty A</div></td>
                                            <td><div>Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000007</div></td>
                                            <td><div>Công ty Cổ phần XNK Tổng hợp Hà Nội</div></td>
                                            <td><div>64 Nguyễn Lương Bằng, Đống Đa, Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000008</div></td>
                                            <td><div>Nguyễn Văn An</div></td>
                                            <td><div>71 Nguyễn thái Học</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000009</div></td>
                                            <td><div>Cụm cảng Hàng Không Miền Bắc</div></td>
                                            <td><div>Sân bay Nội Bài, Sóc Sơn, Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000010</div></td>
                                            <td><div>Tổng công ty cụm cảng miền Nam</div></td>
                                            <td><div>Tấn Sơn Nhất</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000011</div></td>
                                            <td><div>Tông công ty than việt nam</div></td>
                                            <td><div>Cẩm phả quảng ninh</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000012</div></td>
                                            <td><div>Cụm cảng Miền trung</div></td>
                                            <td><div>Đà Nẵng</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000013</div></td>
                                            <td><div>Công ty Vietjetair</div></td>
                                            <td><div>Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000014</div></td>
                                            <td><div>Cục Hàng không</div></td>
                                            <td><div>Nguyễn Sơn, Long Biên</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000015</div></td>
                                            <td><div>Nguyễn Văn Tiến</div></td>
                                            <td><div>13 Hai Bà Trưng - Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000016</div></td>
                                            <td><div>Công ty Xây Dựng Hà Nội</div></td>
                                            <td><div>Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000017</div></td>
                                            <td><div>Công ty giấy Bãi Bằng</div></td>
                                            <td><div>Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000018</div></td>
                                            <td><div>Công ty xe Bus Hà Nội</div></td>
                                            <td><div>Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000019</div></td>
                                            <td><div>Công ty cổ phần AZ</div></td>
                                            <td><div>Hà Nội</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="" />
                                            </td>
                                            <td><div>0100000020</div></td>
                                            <td><div>Công ty than và khoáng sản Việt Nam</div></td>
                                            <td><div>Cảm phả - Quảng Ninh</div></td>
                                            <td>Hoạt động</td>
                                        </tr>
                                    </tbody>
                                </table>
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