<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["trach_nhiem_dong_bao_hiem"] = 'trach-nhiem-dong-bao-hiem'; ?>
<?php $GLOBALS["can_bo_ki_don"] = 'hide'; ?>
<?php $GLOBALS["dieu_kien_bao_hiem"] = 'modal'; ?>
<?php $GLOBALS["loai_mien_thuong"] = 'repeater'; ?>
<?php $GLOBALS["1_thong_tin_chung"] = 'ngay_ki_don'; ?>
<?php $GLOBALS["ngay_cap"] = 'today'; ?>
<?php $GLOBALS["quy_tac_bao_hiem_b01"] = 'b01'; ?>
<?php $GLOBALS["so_gcnbh"] = 'remove'; ?>

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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biêt</a>
                                <span class="breadcrumb-item active">Cập nhập đơn</span>
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
                            <p class="font-weight-semibold font-size-m mb-0"><i class="icon-certificate mr-2"></i>Thêm mới đơn bảo hiểm</p>
                            <span class="text-muted d-block font-size-xs">Nhập thông tin theo từng bước. Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                        </div>
                        <div class="p-button">
                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                            <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Lưu & Copy</a>
                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Form wzard with step validation section start -->
                                <section id="validation" class="input-don">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="wizard">

                                                            <?php inc('template/steps.php'); ?>

                                                            <form action="#" class="form-validation clearfix">
                                                                <div class="tab-content">
                                                                    <!-- Bước 1 -->
                                                                    <?php inc('template/1_thong_tin_chung/1_thong_tin_chung.php'); ?>

                                                                    <!-- Step 2 -->
                                                                    <?php inc('template/2_trung_gian_bao_hiem/2_trung_gian_bao_hiem.php'); ?>
                                                                    
                                                                    <!-- Step 3 -->
                                                                    <fieldset class="tab-pane" id="step3">

                                                                        <div class="form-group" >
                                                                            <div class="row">
                                                                                <div class="col-md-7" style=" border-radius: 6px; background: #f2f2f2;; padding: 15px;">
                                                                                    <div class="mb-2">
                                                                                        <label class="font-weight-semibold">Tìm kiếm theo:</label>
                                                                                        <div class="">
                                                                                            <div class="form-check form-check-inline m-0 mr-4">
                                                                                                <input type="radio" id="rd01" class="mr-1" name="id01" checked="" value="hoten" onchange="tim_kiem_gxx(this)">
                                                                                                <label for="rd01" class="form-check-label">Tên tài sản</label>
                                                                                            </div>
                                                                                            <div class="form-check form-check-inline m-0 flex-grow-1">
                                                                                                <input type="radio" id="rd02" class="mr-1" name="id01" value="namsinh" onchange="tim_kiem_gxx(this)">
                                                                                                <label for="rd02" class="form-check-label ml-1">Nhóm tài sản</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-8" id="hoten">
                                                                                            <div class="form-group mb-1">
                                                                                                <label class="font-weight-semibold">Tên hạng mục tài sản bh:</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Nhập tên...">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-8" id="namsinh" style="display: none;">
                                                                                            <div class="form-group mb-1">
                                                                                                <label class="font-weight-semibold">Nhóm tài sản:</label>
                                                                                                <select class="form-control" select2="">
                                                                                                    <option value="">--- Chọn ---</option>
                                                                                                    <option value="">Nhà xưởng</option>
                                                                                                    <option value="">Hàng hóa</option>
                                                                                                    <option value="">Máy móc</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-xs-2">
                                                                                            <div class="form-group">
                                                                                                <label class="font-weight-semibold d-none d-md-block">&nbsp;</label>
                                                                                                <div>
                                                                                                    <button type="submit" style="letter-spacing: 1px;" class="btn text-uppercase bg-orange"><i class="icon-search4 mr-1"></i> Tìm kiếm </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <?php inc('template/3_doi_tuong_bao_hiem/PRO/ma_dia_diem.php'); ?>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <?php inc('template/3_doi_tuong_bao_hiem/PRO/nhom_rui_ro.php'); ?>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <?php inc('template/3_doi_tuong_bao_hiem/PRO/nganh_nghe_kinh_doanh.php'); ?>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="border-dashed border-silver mb-3">

                                                                            <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Upload thông tin danh sách tài sản</p>

                                                                            <div class="row mb-3 align-items-center">
                                                                                <div class="col-sm-4">
                                                                                    <button class="btn btn-light btn-file mr-3">
                                                                                        <i class="far fa-upload mr-2"></i> 
                                                                                        <span class="hidden-xs">Import file</span>
                                                                                        <input type="file" class="file-input-preview">
                                                                                    </button>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <p class="mb-0 d-flex justify-content-end align-items-center"><span class="text-danger">Nhấn vào browser để upload dữ liệu từ excel.</span> <a href="" download="" class="text-primary">(Nhấn vào đây để tải file mẫu)</a></p>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="form-group" repeater>
                                                                                <table class="table table-bordered datatable"  
                                                                                    data-paging="false"
                                                                                    data-info="false"
                                                                                    data-ordering="false"
                                                                                    data-searching="false"
                                                                                    >
                                                                                    <thead class="thead-light">
                                                                                        <tr>
                                                                                            <th class="w1p all text-center"></th>
                                                                                            <th class="w20p">Tên hạng mục tài sản bh</th>
                                                                                            <th class="desktop w10p">Nhóm tài sản</th>
                                                                                            <th class="desktop w5p">Số lượng</th>
                                                                                            <th class="desktop w10p">Đơn giá</th>
                                                                                            <th class="desktop w10p">Giá trị</th>
                                                                                            <th class="w10p">Số tiền bảo hiểm</th>
                                                                                            <th class="all w1p"></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody data-repeater-list="repeater-list">
                                                                                        <tr data-repeater-item>
                                                                                            <td class="text-center">
                                                                                                <b class="item-level">1.</b> 
                                                                                            </td>
                                                                                            <td><input type="text" class="form-control" name=""></td>
                                                                                            <td>
                                                                                                <select class="form-control" select2>
                                                                                                    <option value="">--- Chọn ---</option>
                                                                                                    <option value="">Nhà xưởng</option>
                                                                                                    <option value="">Hàng hóa</option>
                                                                                                    <option value="">Máy móc</option>
                                                                                                </select>
                                                                                            </td>
                                                                                            <td><input type="text" class="form-control input-number" name=""></td>
                                                                                            <td><input type="text" class="form-control input-money" name=""></td>
                                                                                            <td><input type="text" class="form-control input-money" name=""></td>
                                                                                            <td><input type="text" class="form-control input-money" name=""></td>
                                                                                            <td><a href="#" data-repeater-delete class="btn bg-danger"> <i class="icon-trash mr-1"></i> Xoá</a></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>

                                                                            <div class="mb-3 row justify-content-end">
                                                                                <div class="col-md-7">
                                                                                    <table class="table datatable"  
                                                                                        data-paging="false"
                                                                                        data-info="false"
                                                                                        data-ordering="false"
                                                                                        data-searching="false"
                                                                                        >
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th class="w20p all"></th>
                                                                                                <th><b>Nhà xưởng</b></th>
                                                                                                <th><b>Hàng hóa</b></th>
                                                                                                <th><b>Máy móc</b></th>
                                                                                                <th><b><i class="far fa-sigma mr-1"></i>Tổng cộng</b></th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td><b>Giá trị</b></td>
                                                                                                <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                                <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                                <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                                <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><b>Số tiền bảo hiểm</b></td>
                                                                                                <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                                <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                                <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                                <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
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
                                                                                
                                                                                <div class="form-group">
                                                                                    <table class="table table-bordered datatable" 
                                                                                        data-paging="false"
                                                                                        data-info="false"
                                                                                        data-ordering="false"
                                                                                        data-searching="false"
                                                                                        >
                                                                                        <thead class="thead-light">
                                                                                            <tr>
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
                                                                                                <td>1. Bảo hiểm cháy nổ</td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td> &nbsp; a. Cháy nổ tự nguyện</td>
                                                                                                <td></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right" type="text" value="10"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td>
                                                                                                    <select class="form-control" select2 >
                                                                                                        <option title="Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm<20 tỷ">Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm&lt;20 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm < 25 tỷ">Cat1-Giá trị bảo hiểm &lt; 25 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm từ 25 tỷ đến 500 tỷ">Cat1-Giá trị bảo hiểm từ 25 tỷ đến 500 tỷ</option>
                                                                                                        <option title="Cat1-500 tỷ ≤ Giá trị bảo hiểm < 1000 tỷ">Cat1-500 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm từ 1000 tỷ đến 3000 tỷ">Cat1-Giá trị bảo hiểm từ 1000 tỷ đến 3000 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm trên 3000 tỷ">Cat1-Giá trị bảo hiểm trên 3000 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm < 25 tỷ">Cat2-Giá trị bảo hiểm &lt; 25 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm từ 25 tỷ đến 350 tỷ">Cat2-Giá trị bảo hiểm từ 25 tỷ đến 350 tỷ</option>
                                                                                                        <option title="Cat2-350 tỷ ≤ Giá trị bảo hiểm < 1000 tỷ">Cat2-350 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm từ 1000 tỷ đến 2100 tỷ">Cat2-Giá trị bảo hiểm từ 1000 tỷ đến 2100 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm trên 2100 tỷ">Cat2-Giá trị bảo hiểm trên 2100 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm <100 tỷ">Cat3-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat3-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm trên 600 tỷ">Cat3-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm <100 tỷ">Cat4A-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat4A-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm trên 600 tỷ">Cat4A-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm <100 tỷ">Cat4B-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat4B-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm trên 600 tỷ">Cat4B-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                    </select>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td> &nbsp; b. Cháy nổ bắt buộc</td>
                                                                                                <td></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td>
                                                                                                    <select class="form-control " select2 name="dinh_muc" >
                                                                                                        <option title="Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm<20 tỷ">Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm&lt;20 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm < 25 tỷ">Cat1-Giá trị bảo hiểm &lt; 25 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm từ 25 tỷ đến 500 tỷ">Cat1-Giá trị bảo hiểm từ 25 tỷ đến 500 tỷ</option>
                                                                                                        <option title="Cat1-500 tỷ ≤ Giá trị bảo hiểm < 1000 tỷ">Cat1-500 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm từ 1000 tỷ đến 3000 tỷ">Cat1-Giá trị bảo hiểm từ 1000 tỷ đến 3000 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm trên 3000 tỷ">Cat1-Giá trị bảo hiểm trên 3000 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm < 25 tỷ">Cat2-Giá trị bảo hiểm &lt; 25 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm từ 25 tỷ đến 350 tỷ">Cat2-Giá trị bảo hiểm từ 25 tỷ đến 350 tỷ</option>
                                                                                                        <option title="Cat2-350 tỷ ≤ Giá trị bảo hiểm < 1000 tỷ">Cat2-350 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm từ 1000 tỷ đến 2100 tỷ">Cat2-Giá trị bảo hiểm từ 1000 tỷ đến 2100 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm trên 2100 tỷ">Cat2-Giá trị bảo hiểm trên 2100 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm <100 tỷ">Cat3-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat3-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm trên 600 tỷ">Cat3-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm <100 tỷ">Cat4A-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat4A-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm trên 600 tỷ">Cat4A-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm <100 tỷ">Cat4B-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat4B-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm trên 600 tỷ">Cat4B-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                    </select>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>2. Gián đoạn kinh doanh sau hỏa hoạn và các rủi ro đặc biệt</td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td>
                                                                                                    <select class="form-control " select2 name="dinh_muc" >
                                                                                                        <option title="Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm<20 tỷ">Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm&lt;20 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm < 25 tỷ">Cat1-Giá trị bảo hiểm &lt; 25 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm từ 25 tỷ đến 500 tỷ">Cat1-Giá trị bảo hiểm từ 25 tỷ đến 500 tỷ</option>
                                                                                                        <option title="Cat1-500 tỷ ≤ Giá trị bảo hiểm < 1000 tỷ">Cat1-500 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm từ 1000 tỷ đến 3000 tỷ">Cat1-Giá trị bảo hiểm từ 1000 tỷ đến 3000 tỷ</option>
                                                                                                        <option title="Cat1-Giá trị bảo hiểm trên 3000 tỷ">Cat1-Giá trị bảo hiểm trên 3000 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm < 25 tỷ">Cat2-Giá trị bảo hiểm &lt; 25 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm từ 25 tỷ đến 350 tỷ">Cat2-Giá trị bảo hiểm từ 25 tỷ đến 350 tỷ</option>
                                                                                                        <option title="Cat2-350 tỷ ≤ Giá trị bảo hiểm < 1000 tỷ">Cat2-350 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm từ 1000 tỷ đến 2100 tỷ">Cat2-Giá trị bảo hiểm từ 1000 tỷ đến 2100 tỷ</option>
                                                                                                        <option title="Cat2-Giá trị bảo hiểm trên 2100 tỷ">Cat2-Giá trị bảo hiểm trên 2100 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm <100 tỷ">Cat3-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat3-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat3-Giá trị bảo hiểm trên 600 tỷ">Cat3-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm <100 tỷ">Cat4A-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat4A-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat4A-Giá trị bảo hiểm trên 600 tỷ">Cat4A-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm <100 tỷ">Cat4B-Giá trị bảo hiểm &lt;100 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat4B-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
                                                                                                        <option title="Cat4B-Giá trị bảo hiểm trên 600 tỷ">Cat4B-Giá trị bảo hiểm trên 600 tỷ</option>
                                                                                                    </select>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th><b>Tổng cộng: </b></th>
                                                                                                <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                                <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0.99"></th>
                                                                                                <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                                <th align="right"><input class="form-control text-right" type="text" disabled readonly value="10"></th>
                                                                                                <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                                <th align="right"><input class="form-control text-right" type="text" disabled readonly value="10.0"></th>
                                                                                                <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                                <th align="right"></th>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                            
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_dai_li.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_moi_gioi.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/loai_mien_thuong_repeater.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/ten_rui_ro.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dieu_kien_bao_hiem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dieu_khoan_loai_tru.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dia_diem_bao_hiem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/quy_tac_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/trach_nhiem_dong_bao_hiem.php'); ?>
                                                                            </div>  
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/phan_bo_don_vi.php'); ?>
                                                                            </div>  
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thong_tin_ve_thoi_han_thanh_toan.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thanh_toan_tai_ngan_hang.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-md-12">
                                                                                <b><label>Thanh toán bảo hiểm: </label></b>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <table class="table table-bordered" style="margin: auto;">
                                                                                    <thead class="thead-light">
                                                                                        <tr>
                                                                                            <th class="w70p">Quyền lợi</th>
                                                                                            <th class="w30p text-right">Phí BH có VAT</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Mức trách nhiệm của VNI</td>
                                                                                            <td class="text-right"><input class="form-control input-money text-right" type="text" value="0"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Cháy nổ tự nguyện</td>
                                                                                            <td class="text-right">0</td>
                                                                                        </tr>
                                                                                        
                                                                                        <tr>
                                                                                            <td>Cháy nổ bắt buộc</td>
                                                                                            <td class="text-right">0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Gián đoạn kinh doanh sau hỏa hoạn và các rủi ro đặc biệt</td>
                                                                                            <td class="text-right">0</td>
                                                                                        </tr>
                                                                                        <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                            <td>Tổng phí BH (chưa VAT)</td>
                                                                                            <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                        </tr>
                                                                                        <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                            <td>Tổng VAT</td>
                                                                                            <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                        </tr>
                                                                                        <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                            <td>Tổng phí BH (có VAT)</td>
                                                                                            <td><input class="form-control text-right" type="text" readonly value="0"></td>
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

                                                            <?php inc('template/actions.php'); ?>
                                                            
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
                    <!-- /Content-block -->

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>
            
        </div>

        <?php inc('chat-box.php'); ?> 
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?> 
        <?php inc('modal/modal_danh_muc_tai_san_bao_hiem.php'); ?> 

        <div class="modal-group">
            <?php
                inc('modal/modal_ds_cac_khach_hang.php'); 
                inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>

        <?php inc('modal/modal_ds_rui_ro_bao_hiem.php'); ?> 
        <?php inc('modal/modal_ds_dieu_khoan_loai_tru.php'); ?> 
        <?php inc('modal/modal_dieu_khoan_sua_doi_bo_sung.php'); ?> 
        <?php inc('modal/modal_ds_files.php'); ?>

    </body>

<?php include_once FOOTER; ?>