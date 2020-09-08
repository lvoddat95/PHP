<?php require_once '../../../config.php'; ?>
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
                                <a href="<?php echo HTTP_PATH .'view/pages/ban-chao/danh-sach-ban-chao.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i>Danh sách bản chào</a>
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
                        <div class=" p-button">
                            <div class="dropdown d-inline-block mr-2">
                                <a href="#" class="list-icons-item dropdown-toggle caret-0 btn" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-check"></i>Trình duyệt</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i>Đóng đơn</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-upload"></i>Tái tục đơn</a>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block mr-2">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-printer2"></i> IN</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i>Giấy yêu cầu BH</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i>Hợp đồng BH</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i>Bản chào phí BH</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i>Giấy chứng nhận BH</a>
                                </div>
                            </div>
                            
                            <a href="#" class="btn btn-labeled btn-labeled-left mr-2">
                                <b><i class="far fa-copy"></i></b>Lưu & Copy
                            </a>
                            <a href="#" class="btn btn-labeled btn-labeled-left mr-2">
                                <b><i class="icon-file-plus"></i></b> Lưu & thêm mới
                            </a>
                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
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
                                                    <?php inc('template/1_thong_tin_chung/hinh_thuc_khai_thac.php'); ?> 
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label>Số bản chào: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control required" name="so_don_bao_hiem" placeholder="Nhập số đơn bảo hiểm..." value="012000005/F02">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php inc('template/1_thong_tin_chung/nguoi_duoc_bao_hiem.php'); ?> 
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php inc('template/1_thong_tin_chung/sdt_chu_xe.php'); ?>
                                                </div>
                                                <div class="col-md-8">
                                                    <?php inc('template/1_thong_tin_chung/dia_chi_chu_xe.php'); ?>
                                                </div>
                                            </div>

                

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php inc('template/1_thong_tin_chung/ngay_cap.php'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php inc('template/1_thong_tin_chung/loai_tien.php'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?php inc('template/1_thong_tin_chung/ti_gia_thuc_te.php'); ?>
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
                                                    <th class="all text-center w1p" data-orderable="false" >#</th>
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
                            <h5 class="modal-title text-uppercase font-weight-semibold">Thông tin đối tượng bảo hiểm</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- Form wzard with step validation section start -->
                            <section id="validation">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card m-0 shadow-none">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="wizard">
                                                        <div class="steps clearfix">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="current">
                                                                    <a href="#step3" class="active show" data-toggle="tab">
                                                                        <span class="number">1</span> Đối tượng bảo hiểm
                                                                    </a>
                                                                </li>
                                                                <li class="disabled">
                                                                    <a href="#step4" data-toggle="tab">
                                                                        <span class="number">2</span> Phạm vi bảo hiểm
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <form action="#" class="form-validation clearfix">
                                                            <div class="tab-content">
                                                                <!-- Step 3 -->
                                                                <fieldset class="tab-pane active show" id="step3">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/muc_dich_su_dung.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/dong_xe.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/nhom_xe.php'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/loai_xe.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/nhan_hieu.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/so_loai.php'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/nguon_goc_xe.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/thang_sx.php'); ?>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <?php inc('template/3_doi_tuong_bao_hiem/MVP/nam_sx.php'); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-2 d-flex align-items-center">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/chua_co_bien.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/loai_bien.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/bien_kiem_soat.php'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/so_khung.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/so_may.php'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/mau_son.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/so_cho_ngoi.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/f02/trong_tai.php'); ?>
                                                                        </div>
                                                                    </div>
                                                                        
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/gia_tri_xe.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/MVP/xe_moi_100.php'); ?>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                
                                                                <!-- Step 4 -->
                                                                <fieldset class="tab-pane" id="step4">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="collapse-group">
                                                                                <div class="p-title">Phạm vi bảo hiểm:</div>
                                                                                <div class="p-body collapse show">
                                                                                    <div class="c-item">
                                                                                        <div class="c-title">
                                                                                            <span class="button-switch no-label">
                                                                                                <input type="checkbox" id="ckbchild1" class="switch cls_ckb">
                                                                                                <label for="ckbchild1" data-off="Không" data-on="Có"></label>
                                                                                            </span>
                                                                                            <a data-toggle="collapse" class="collapsed" href="#collapsible-item1">Vật chất xe</a>
                                                                                        </div>
                                            
                                                                                        <div id="collapsible-item1" class="collapse" datatable-collapse>
                                                                                            <div class="c-body">
                                                                                                
                                                                                                <table class="table table-bordered datatable"
                                                                                                    data-paging="false"
                                                                                                    data-info="false"
                                                                                                    data-ordering="false"
                                                                                                    data-searching="false" >
                                                                                                    <thead class="thead-light">
                                                                                                        <tr>
                                                                                                            <th class="w20p">Quyền lợi</th>
                                                                                                            <th class="w10p">Số tiền bảo hiểm</th>
                                                                                                            <th class="desktop w5p">Phí (%)</th>
                                                                                                            <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                            <th class="desktop w5p">VAT (%)</th>
                                                                                                            <th class="desktop w10p">VAT</th>
                                                                                                            <th class="desktop w5p">COM (%)</th>
                                                                                                            <th class="desktop w10p">COM</th>
                                                                                                            <th class="desktop w20p">Định mức</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
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
                                                                                                                    <option selected>Xe cơ giới khác</option>
                                                                                                                    <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                    <option>Xe tải</option>
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
                                                                                                    data-searching="false" >
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th class="w20p"><b>II. Điều khoản sửa đổi bổ sung</b></th>
                                                                                                            <th class="desktop w10p"></th>
                                                                                                            <th class="w5p"></th>
                                                                                                            <th class="desktop w10p"></th>
                                                                                                            <th class="desktop w5p"></th>
                                                                                                            <th class="desktop w10p"></th>
                                                                                                            <th class="desktop w5p"></th>
                                                                                                            <th class="desktop w10p"></th>
                                                                                                            <th class="desktop w20p"></th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS01">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS02">
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
                                                                                                            <td >
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS03">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS04">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS05">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS06">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS07">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS08">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS09">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS10">
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
                                                                                                            <td>
                                                                                                                <div class="dkbs">
                                                                                                                    <input class="mr-1" type="checkbox"  name="" id="BS11">
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
                                                                                                    data-searching="false" >
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th class="w20p"><b>Tổng cộng: </b></th>
                                                                                                            <th class="w10p">Số tiền bảo hiểm</th>
                                                                                                            <th class="desktop w5p">Phí (%)</th>
                                                                                                            <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                            <th class="desktop w5p">VAT (%)</th>
                                                                                                            <th class="desktop w10p">VAT</th>
                                                                                                            <th class="desktop w5p">COM (%)</th>
                                                                                                            <th class="desktop w10p">COM</th>
                                                                                                            <th class="desktop w20p">Định mức</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
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

                                                                                                <div class="row mt-3">
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền BH tiêu chuẩn:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (%):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0.0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (Có VAT):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Tỉ lệ chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-money text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="c-item">
                                                                                        <div class="c-title">
                                                                                            <span class="button-switch no-label">
                                                                                                <input type="checkbox" id="ckbchild2" class="switch cls_ckb">
                                                                                                <label for="ckbchild2" data-off="Không" data-on="Có"></label>
                                                                                            </span>
                                                                                            <a class="collapsed " data-toggle="collapse" href="#collapsible-item2">TNDS tự nguyện</a>
                                                                                        </div>
                                                                                        <div id="collapsible-item2" class="collapse" datatable-collapse>
                                                                                            <div class="c-body">
                                                                                                <table class="table table-bordered datatable" style="margin-bottom: 0;"
                                                                                                    data-paging="false"
                                                                                                    data-info="false"
                                                                                                    data-ordering="false"
                                                                                                    data-searching="false">
                                                                                                    <thead class="thead-light">
                                                                                                        <tr>
                                                                                                            <th class="w15p">Quyền lợi</th>
                                                                                                            <th class="w15p">Số tiền bảo hiểm</th>
                                                                                                            <th class="desktop w5p">Phí (%)</th>
                                                                                                            <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                            <th class="desktop w5p">VAT (%)</th>
                                                                                                            <th class="desktop w10p">VAT</th>
                                                                                                            <th class="desktop w5p">COM (%)</th>
                                                                                                            <th class="desktop w10p">COM</th>
                                                                                                            <th class="desktop w20p">Định mức</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
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
                                                                                                                    <option>Xe cơ giới khác</option>
                                                                                                                    <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                    <option>Xe tải</option>
                                                                                                                </select>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        
                                                                                                        <tr>
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
                                                                                                                    <option>Xe cơ giới khác</option>
                                                                                                                    <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                    <option>Xe tải</option>
                                                                                                                </select>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
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
                                                                                                <div class="row mt-3">
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền BH tiêu chuẩn:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (%):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0.0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (Có VAT):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Tỉ lệ chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-money text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="c-item">
                                                                                        <div class="c-title">
                                                                                            <span class="button-switch no-label">
                                                                                                <input type="checkbox" id="ckbchild3" class="switch cls_ckb">
                                                                                                <label for="ckbchild3" data-off="Không" data-on="Có"></label>
                                                                                            </span>
                                                                                            <a class="collapsed " data-toggle="collapse" href="#collapsible-item3">TNDS bắt buộc</a>
                                                                                        </div>
                                                                                        <div id="collapsible-item3" class="collapse" datatable-collapse>
                                                                                            <div class="c-body">
                                                                                                <div class="row mb-3">
                                                                                                    <div class="col-md-12">
                                                                                                        <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
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
                                                                                                    data-searching="false" >
                                                                                                    <thead class="thead-light">
                                                                                                        <tr>
                                                                                                            <th class="w10p">Quyền lợi</th>
                                                                                                            <th class="w20p">Số tiền bảo hiểm</th>
                                                                                                            <th class="desktop w5p">Phí (%)</th>
                                                                                                            <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                            <th class="desktop w5p">VAT (%)</th>
                                                                                                            <th class="desktop w10p">VAT</th>
                                                                                                            <th class="desktop w5p">COM (%)</th>
                                                                                                            <th class="desktop w10p">COM</th>
                                                                                                            <th class="desktop w20p">Định mức</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><b>TNDS bắt buộc </b></td>
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
                                                                                                                    <option>Xe cơ giới khác</option>
                                                                                                                    <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                    <option>Xe tải</option>
                                                                                                                </select>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <div class="row mt-3">
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền BH tiêu chuẩn:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (%):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0.0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (Có VAT):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Tỉ lệ chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-money text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                    
                                                                                    <div class="c-item">
                                                                                        <div class="c-title">
                                                                                            <span class="button-switch no-label">
                                                                                                <input type="checkbox" id="ckbchild4" class="switch cls_ckb">
                                                                                                <label for="ckbchild4" data-off="Không" data-on="Có"></label>
                                                                                            </span>
                                                                                            <a class="collapsed " data-toggle="collapse" href="#collapsible-item4">Tai nạn lái, phụ xe và người ngồi trên xe</a>
                                                                                        </div>
                                                                                        <div id="collapsible-item4" class="collapse" datatable-collapse>
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
                                                                                                    data-searching="false" >
                                                                                                    <thead class="thead-light">
                                                                                                        <tr>
                                                                                                            <th class="w15p">Quyền lợi</th>
                                                                                                            <th class="w15p">Số tiền bảo hiểm</th>
                                                                                                            <th class="desktop w5p">Phí (%)</th>
                                                                                                            <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                            <th class="desktop w5p">VAT (%)</th>
                                                                                                            <th class="desktop w10p">VAT</th>
                                                                                                            <th class="desktop w5p">COM (%)</th>
                                                                                                            <th class="desktop w10p">COM</th>
                                                                                                            <th class="desktop w20p">Định mức</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
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
                                                                                                                    <option>Xe cơ giới khác</option>
                                                                                                                    <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                    <option>Xe tải</option>
                                                                                                                </select>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <div class="row mt-3">
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền BH tiêu chuẩn:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (%):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0.0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (Có VAT):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Tỉ lệ chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-money text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="c-item">
                                                                                        <div class="c-title">
                                                                                            <span class="button-switch no-label">
                                                                                                <input type="checkbox" id="ckbchild5" class="switch cls_ckb">
                                                                                                <label for="ckbchild5" data-off="Không" data-on="Có"></label>
                                                                                            </span>
                                                                                            <a class="collapsed " data-toggle="collapse" href="#collapsible-item5">TNDS của chủ xe với hàng hóa</a>
                                                                                        </div>
                                                                                        <div id="collapsible-item5" class="collapse" datatable-collapse>
                                                                                            <div class="c-body">
                                                                                                <table class="table table-bordered datatable"
                                                                                                    data-paging="false"
                                                                                                    data-info="false"
                                                                                                    data-ordering="false"
                                                                                                    data-searching="false"
                                                                                                    >
                                                                                                    <thead class="thead-light">
                                                                                                        <tr>
                                                                                                            <th class="w15p">Quyền lợi</th>
                                                                                                            <th class="w15p">Số tiền bảo hiểm</th>
                                                                                                            <th class="desktop w5p">Phí (%)</th>
                                                                                                            <th class="desktop w10p">Phí BH (có VAT)</th>
                                                                                                            <th class="desktop w5p">VAT (%)</th>
                                                                                                            <th class="desktop w10p">VAT</th>
                                                                                                            <th class="desktop w5p">COM (%)</th>
                                                                                                            <th class="desktop w10p">COM</th>
                                                                                                            <th class="desktop w20p">Định mức</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><b>TNDS của chủ xe với hàng hóa</b></td>
                                                                                                            <td>
                                                                                                                <input class="form-control text-right" type="text" value="0" >
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
                                                                                                                    <option>Xe cơ giới khác</option>
                                                                                                                    <option>Biển xanh, biển đỏ, biển nước ngoài</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe&gt;15 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe taxi, đầu kéo, vận tải hành khách theo tuyến cố định liên tỉnh, xe>10 tuổi kể từ ngày SX</option>
                                                                                                                    <option>Xe cơ giới khai thác qua Ngân hàng, show room</option>
                                                                                                                    <option>Xe tải</option>
                                                                                                                </select>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <div class="row mt-3">
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền BH tiêu chuẩn:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (%):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0.0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Phí BH tiêu chuẩn (Có VAT):</label>
                                                                                                            <input type="text" class="form-control input-money text-right" disabled readonly value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Tỉ lệ chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-float text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <div class="form-group">
                                                                                                            <label>Số tiền chênh lệch:</label>
                                                                                                            <input type="text" class="form-control input-money text-right" value="0">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_dai_li.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_moi_gioi.php'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/loai_mien_thuong.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/so_tien_mien_thuong.php'); ?>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/so_tien_giam_mien_thuong.php'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="col-md-12">
                                                                            <b><label>Lịch thanh toán bảo hiểm: </label></b>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-bordered">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th class="w70p">Quyền lợi</th>
                                                                                        <th class="w30p text-right">Phí BH có VAT</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Số tiền giảm miễn thường</td>
                                                                                        <td class="text-right">0</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>Vật chất xe </td>
                                                                                        <td class="text-right">0</td>
                                                                                    </tr>
                                                                                    
                                                                                    <tr>
                                                                                        <td>Điều khoản bổ sung</td>
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
                                                                                        <td>TNDS bắt buộc </td>
                                                                                        <td class="text-right" >0</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>Tai nạn lái, phụ xe và người ngồi trên xe </td>
                                                                                        <td class="text-right">0</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>TNDS của chủ xe với hàng hóa</td>
                                                                                        <td class="text-right">0</td>
                                                                                    </tr>
                                                                                    
                                                                                    <tr class="bold" style="background-color: #fff;">
                                                                                        <td>Tổng phí BH</td>
                                                                                        <td><input class="form-control text-right" type="text" disabled="" readonly="" value="0"></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/lich_thanh_toan.php'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/ghi_chu_noi_bo.php'); ?>
                                                                        </div>  
                                                                        <div class="col-md-6">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/ghi_chu_cho_khach_hang.php'); ?>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <?php inc('template/4_pham_vi_bao_hiem/tai_lieu_dinh_kem.php'); ?>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </form>
                                                        <div class="actions clearfix">
                                                            <ul>
                                                                <li>
                                                                    <button type="button" class="btn btn-default prev-step"><i class="far fa-chevron-double-left font9"></i> Quay lại</button>
                                                                </li>
                                                                <li>
                                                                    <button type="button" class="btn bg-color next-step">Tiếp theo <i class="far fa-chevron-double-right font9"></i></button>
                                                                </li>
                                                                <li>
                                                                    <button type="submit" class="btn bg-color submit-step d-none"><i class="icon-floppy-disk mr-1"></i> Cập nhập</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
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

            <?php
                inc('modal/modal_ds_files.php'); 
            ?>
        </div>

        <?php
            inc('modal/modal_ds_nguoi_tham_gia_bao_hiem.php'); 
        ?>
        <?php inc('modal/modal_trinh_duyet_mot_don.php'); ?> 
        <?php inc('modal/modal_dong_don.php'); ?> 

        <?php inc('chat-box.php'); ?> 
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?>
        <div class="modal-group">
            <?php
                inc('modal/modal_ds_cac_khach_hang.php'); 
                inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>


    </body>

<?php include_once FOOTER; ?>