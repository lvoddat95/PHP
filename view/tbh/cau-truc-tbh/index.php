<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?> 
<?php $GLOBALS["menu"] = 'tbh,cau-truc-tbh'; ?>
    <body>

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
                                <a href="<?php echo HTTP_PATH; ?>" class="breadcrumb-item"><i class="fad fa-home mr-1"></i>Trang chủ</a>
                                <a href="<?php echo HTTP_PATH .'view/tbh/hop-dong-tbh/'; ?>" class="breadcrumb-item">Tái bảo hiểm</a>
                               <span class="breadcrumb-item active">Cấu trúc tái bảo hiểm</span>
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
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">
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
                                    
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Đơn vị:</label>
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
                                        <div class="form-group">
                                            <label class="font-weight-semibold">Tháng kế toán:</label>
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                                </span>
                                                <input type="text" class="form-control input-month" name="" placeholder="mm">
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
                                                <input type="hidden" name="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    
                                   
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Trạng thái đơn BH:</label>
                                            <div class="form-group-select">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                    </span>
                                                    <select class="form-control" select2>
                                                        <option value="moi-them">UNCLOSED</option>
                                                        <option value="cho-duyet">CLOSED</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Trạng thái xử lý TBH:</label>
                                            <div class="form-group-select">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                    </span>
                                                    <select class="form-control" select2>
                                                        <option value="moi-them">Chưa xử lý (207)</option>
                                                        <option value="cho-duyet">Đã xử lý (76)</option>
                                                        <option value="tu-choi">Không phải xác định tái bảo hiểm (18)</option>
                                                        <option value="chap-nhan">Từ chối (30)</option>
                                                        <option value="tbh-tu-choi">Xác định sau (28)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

									<div class="col-md-3 col-sm-4 col-6">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Trạng thái Ban NV duyệt:</label>
                                            <div class="form-group-select">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                    </span>
                                                    <select class="form-control" select2>
                                                        <option value="moi-them">--- Chọn ---</option>
                                                        <option value="moi-them">Chưa duyệt</option>
                                                        <option value="cho-duyet">Đã duyệt</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-4 col-6">
	                                    <div class="form-group ">
	                                        <label>Ngày duyệt:</label>
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
                                <table class="table datatable table-bordered" data-paging="true" data-info="true" data-ordering="true"  data-searching="false" data-page-length="20">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Số đơn</th>
									        <th>Ngày cấp</th>
									        <th>Tên khách hàng</th>
									        <th>Loại hình BH</th>
									        <th>Tổng giá trị bảo hiểm</th>
									        <th>Loại tiền tệ</th>
									        <th>Ban NV xác nhận</th>
                                        </tr>
                                    </thead>
                                   <tbody>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 011200026 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 07/12/2011 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Tổng công ty hàng không Việt Nam </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> A01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php">  </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> USD </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 011500001/C01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 15/01/2015 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Hợp đồng XOL </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> C01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php">  </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 011500002/A01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 15/01/2015 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Hợp đồng XOL </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> A01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php">  </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 011800003/B01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 15/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> CÔNG TY NHIỆT ĐIỆN DUYÊN HẢI </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> B01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 71,078,863,020 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 012000007/B01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 12/08/2020 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> CÔNG TY TNHH FOSECA VIỆT NAM  </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> B01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 131,199,221,299 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 022100010/H03 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 14/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> CÔNG TY TNHH BÁN LẺ PHƯƠNG NAM </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> H03 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 11,500,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Đã xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 022100299/F01.EXM/0000102 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 25/05/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Nhan Vũ Kim Hải </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> F01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 155,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 022102651/F02.BB21/8718 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 03/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> TỔNG CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU VÀ XÂY DỰNG VIỆT NAM </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> F02 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 2,500,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 032105362/F02.BB21/0013876 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 01/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> TRẦN HỒNG ĐÌNH </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> F02 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 400,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 032105941/F02.AD21/0001233 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 15/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> ĐẶNG CÔNG ĐỨC </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> F02 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 250,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 032105943/F02.AD21/0001218 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 16/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> CÔNG TY TNHH MỘT THÀNH VIÊN CỬA SỔ MẶT TRỜI </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> F02 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 210,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 042100006/C03.01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 14/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Công Ty CP Xây Dựng Và Đầu Tư Hà Nội </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> C03 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 1,224,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 042100006/C03.02 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 14/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Công Ty CP Xây Dựng Và Đầu Tư Hà Nội </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> C03 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 600,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 042100009/C01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 14/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Công Ty Cổ Phần Xây Dựng Và Đầu Tư Quốc Tế Đoàn Gia </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> C01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 53,250,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 042100010/C01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 10/05/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Ban quản lý dự án đầu tư xây dựng huyện Quốc Oai </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> C01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 9,810,482,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 042100041/G01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 20/05/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> CHI NHÁNH TẬP ĐOÀN CÔNG NGHIỆP THAN – KHOÁNG SẢN VIỆT NAM - CÔNG TY THAN MẠO KHÊ - TKV </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> G01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 549,450,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 042100049/B01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 04/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Công Ty TNHH Đầu Tư Thiết Bị Công Nghiệp Việt Nhật </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> B01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 3,000,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 042100050/B01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 08/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Công ty cổ phần Thương mại dịch vụ Tràng Thi </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> B01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 4,067,645,473 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 042101403/F02.BB21/0048341 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 03/06/2021 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Cty TNHH Xuân Thảo </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> F02 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 2,500,000,000 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									    <tr>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 050900555.E01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> 25/12/2009 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Trung tâm Qũy Phát Triển Qũy Đất &amp; Duy Tu Hạ Tầng Đô THị Quận Tây Hồ  </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> C01 </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php">  </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> VND </a></td>
									        <td> <a href="chi-tiet-cau-truc-tbh.php"> Chưa xác nhận </a></td>
									    </tr>
									</tbody>


                                </table>
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

