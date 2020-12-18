<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?> 
<?php $GLOBALS["so_gcnbh"] = 'remove'; ?>
<?php $GLOBALS["dieu_kien_bao_hiem"] = 'modal'; ?>
<?php $GLOBALS["ten_rui_ro"] = 'trach_nhiem_bao_hiem'; ?>

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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i>D07 - Bảo hiểm trách nhiệm dân sự chủ tầu viễn dương (P&I mutual)</a>
                                <span class="breadcrumb-item active">Cập nhập đơn </span>
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

                                                                       <div class="form-group">
                                                                            <label>Tên tàu: </label>
                                                                            <?php inc('template/3_doi_tuong_bao_hiem/BFSB/ds_tau_thuyen.php'); ?>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group ">
                                                                                    <label>Quốc tịch tàu: </label>
                                                                                    <select select2>
                                                                                        <option id="" value="" name="">--- Chọn ---</option>
                                                                                        <option id="N_VIETNAM" name="Viet Nam" value="N_VIETNAM">Viet Nam</option>
                                                                                        <option id="N_ANH" name="United Kingdom" value="N_ANH">United Kingdom</option>
                                                                                        <option id="N_MY" name="United States" value="N_MY">United States</option>
                                                                                        <option id="N_CANADA" name="Canada" value="N_CANADA">Canada</option>
                                                                                        <option id="N_TRUNGQUOC" name="China" value="N_TRUNGQUOC">China</option>
                                                                                        <option id="N_DUC" name="Germany" value="N_DUC">Germany</option>
                                                                                        <option id="N_PHAP" name="France" value="N_PHAP">France</option>
                                                                                        <option id="N_INDONEXIA" name="Indonesia" value="N_INDONEXIA">Indonesia</option>
                                                                                        <option id="N_LAO" name="Lao PDR" value="N_LAO">Lao PDR</option>
                                                                                        <option id="N_CAMPUCHIA" name="Cambodia" value="N_CAMPUCHIA">Cambodia</option>
                                                                                        <option id="N_THAILAN" name="Thailand" value="N_THAILAN">Thailand</option>
                                                                                        <option id="N_TAYBANNHA" name="Spain" value="N_TAYBANNHA">Spain</option>
                                                                                        <option id="N_THONHIKI" name="Turkey" value="N_THONHIKI">Turkey</option>
                                                                                        <option id="N_NHAT" name="Japan" value="N_NHAT">Japan</option>
                                                                                        <option id="N_NGA" name="Russian Federation" value="N_NGA">Russian Federation</option>
                                                                                        <option id="N_ITALIA" name="Italy" value="N_ITALIA">Italy</option>
                                                                                        <option id="N_BRAZIN" name="Brazil" value="N_BRAZIN">Brazil</option>
                                                                                        <option id="N_HANQUOC" name="Korea" value="N_HANQUOC">Korea</option>
                                                                                        <option id="N_MALAIXIA" name="Malaysia" value="N_MALAIXIA">Malaysia</option>
                                                                                        <option id="N_MEHICO" name="Mexico" value="N_MEHICO">Mexico</option>
                                                                                        <option id="N_HALAN" name="Netherlands" value="N_HALAN">Netherlands</option>
                                                                                        <option id="N_CONGGO" name="Congo" value="N_CONGGO">Congo</option>
                                                                                        <option id="N_RUMANI" name="Romania" value="N_RUMANI">Romania</option>
                                                                                        <option id="N_BI" name="Portugal" value="N_BI">Portugal</option>
                                                                                        <option id="N_DANMACH" name="Denmark" value="N_DANMACH">Denmark</option>
                                                                                        <option id="N_SEC" name="Czech Republic" value="N_SEC">Czech Republic</option>
                                                                                        <option id="N_BRUNAY" name="Brunei Darussalam" value="N_BRUNAY">Brunei Darussalam</option>
                                                                                        <option id="N_LIBI" name="Liberia" value="N_LIBI">Liberia</option>
                                                                                        <option id="N_ANGHERI" name="Algeria" value="N_ANGHERI">Algeria</option>
                                                                                        <option id="N_ARGENTINA" name="Argentina" value="N_ARGENTINA">Argentina</option>
                                                                                        <option id="N_SINGAPO" name="Singapore" value="N_SINGAPO">Singapore</option>
                                                                                        <option id="NORWAY" name="Norway" value="NORWAY">Norway</option>
                                                                                        <option id="SWEDEN" name="Sweden" value="SWEDEN">Sweden</option>
                                                                                        <option id="PH" name="Philippines" value="PH">Philippines</option>
                                                                                        <option id="MM" name="Myanmar" value="MM">Myanmar</option>
                                                                                        <option id="hk" name="Hong Kong" value="hk">Hong Kong</option>
                                                                                        <option id="N_MONGOLIA" name="Mongolia" value="N_MONGOLIA">Mongolia</option>
                                                                                        <option id="N_PANAMANIA" name="Panamania" value="N_PANAMANIA">Panamania</option>
                                                                                        <option id="N_Oman" name="Oman" value="N_Oman">Oman</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <div class="form-group">
                                                                                    <label for="">Chủ sở hữu: </label>
                                                                                    <input type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Năm đóng: <span class="text-danger">*</span></label>
                                                                                    <select select2>
                                                                                        <option>--- Chọn ---</option>
                                                                                        <?php for ($i = 1945; $i <= 2020; $i++) {
                                                                                            echo  '<option>'.$i.'</option>';
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <div class="form-group">
                                                                                    <label for="">Nơi đóng: </label>
                                                                                    <input type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Vật liệu đóng: </label>
                                                                                    <select select2>
                                                                                        <option>--- Chọn ---</option>
                                                                                        <option>Vỏ thép</option>
                                                                                        <option>Vỏ gỗ</option>
                                                                                        <option>Vật liệu PPC</option>
                                                                                        <option>Vỏ nhôm</option>
                                                                                        <option>Sợi thủy tinh</option>
                                                                                        <option>Sợi carbon</option>
                                                                                        <option>Vật liệu khác</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Dung tích: <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Trọng tải: <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Loại tàu: <span class="text-danger">*</span></label>
                                                                                    <select select2>
                                                                                        <option>--- Chọn ---</option>
                                                                                        <option>Tàu chở hàng tổng hợp</option>
                                                                                        <option>Tàu chở container</option>
                                                                                        <option>Tàu kéo</option>
                                                                                        <option>Tàu lai dắt</option>
                                                                                        <option>Tàu khác</option>
                                                                                        <option>Tàu chở dầu</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Cấp tàu:</label>
                                                                                    <select select2>
                                                                                        <option >--- Chọn ---</option>
                                                                                        <option>Hạn chế I</option>
                                                                                        <option>Hạn chế II</option>
                                                                                        <option>Hạn chế III</option>
                                                                                        <option>Tàu SB</option>
                                                                                        <option>Tàu sông</option>
                                                                                        <option>Khác</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Công suất máy: </label>
                                                                                    <input type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="form-group">
                                                                                    <label for="">Vùng hoạt động: <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                       
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label for="">Số lượng thuyền viên: </label>
                                                                                    <input type="text" class="form-control input-number" placeholder="0">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group ">
                                                                                    <label>Quốc tịch thuyền viên: </label>
                                                                                    <select select2 multiple>
                                                                                        <option id="" value="" name="">--- Chọn ---</option>
                                                                                        <option id="N_VIETNAM" name="Viet Nam" value="N_VIETNAM">Viet Nam</option>
                                                                                        <option id="N_ANH" name="United Kingdom" value="N_ANH">United Kingdom</option>
                                                                                        <option id="N_MY" name="United States" value="N_MY">United States</option>
                                                                                        <option id="N_CANADA" name="Canada" value="N_CANADA">Canada</option>
                                                                                        <option id="N_TRUNGQUOC" name="China" value="N_TRUNGQUOC">China</option>
                                                                                        <option id="N_DUC" name="Germany" value="N_DUC">Germany</option>
                                                                                        <option id="N_PHAP" name="France" value="N_PHAP">France</option>
                                                                                        <option id="N_INDONEXIA" name="Indonesia" value="N_INDONEXIA">Indonesia</option>
                                                                                        <option id="N_LAO" name="Lao PDR" value="N_LAO">Lao PDR</option>
                                                                                        <option id="N_CAMPUCHIA" name="Cambodia" value="N_CAMPUCHIA">Cambodia</option>
                                                                                        <option id="N_THAILAN" name="Thailand" value="N_THAILAN">Thailand</option>
                                                                                        <option id="N_TAYBANNHA" name="Spain" value="N_TAYBANNHA">Spain</option>
                                                                                        <option id="N_THONHIKI" name="Turkey" value="N_THONHIKI">Turkey</option>
                                                                                        <option id="N_NHAT" name="Japan" value="N_NHAT">Japan</option>
                                                                                        <option id="N_NGA" name="Russian Federation" value="N_NGA">Russian Federation</option>
                                                                                        <option id="N_ITALIA" name="Italy" value="N_ITALIA">Italy</option>
                                                                                        <option id="N_BRAZIN" name="Brazil" value="N_BRAZIN">Brazil</option>
                                                                                        <option id="N_HANQUOC" name="Korea" value="N_HANQUOC">Korea</option>
                                                                                        <option id="N_MALAIXIA" name="Malaysia" value="N_MALAIXIA">Malaysia</option>
                                                                                        <option id="N_MEHICO" name="Mexico" value="N_MEHICO">Mexico</option>
                                                                                        <option id="N_HALAN" name="Netherlands" value="N_HALAN">Netherlands</option>
                                                                                        <option id="N_CONGGO" name="Congo" value="N_CONGGO">Congo</option>
                                                                                        <option id="N_RUMANI" name="Romania" value="N_RUMANI">Romania</option>
                                                                                        <option id="N_BI" name="Portugal" value="N_BI">Portugal</option>
                                                                                        <option id="N_DANMACH" name="Denmark" value="N_DANMACH">Denmark</option>
                                                                                        <option id="N_SEC" name="Czech Republic" value="N_SEC">Czech Republic</option>
                                                                                        <option id="N_BRUNAY" name="Brunei Darussalam" value="N_BRUNAY">Brunei Darussalam</option>
                                                                                        <option id="N_LIBI" name="Liberia" value="N_LIBI">Liberia</option>
                                                                                        <option id="N_ANGHERI" name="Algeria" value="N_ANGHERI">Algeria</option>
                                                                                        <option id="N_ARGENTINA" name="Argentina" value="N_ARGENTINA">Argentina</option>
                                                                                        <option id="N_SINGAPO" name="Singapore" value="N_SINGAPO">Singapore</option>
                                                                                        <option id="NORWAY" name="Norway" value="NORWAY">Norway</option>
                                                                                        <option id="SWEDEN" name="Sweden" value="SWEDEN">Sweden</option>
                                                                                        <option id="PH" name="Philippines" value="PH">Philippines</option>
                                                                                        <option id="MM" name="Myanmar" value="MM">Myanmar</option>
                                                                                        <option id="hk" name="Hong Kong" value="hk">Hong Kong</option>
                                                                                        <option id="N_MONGOLIA" name="Mongolia" value="N_MONGOLIA">Mongolia</option>
                                                                                        <option id="N_PANAMANIA" name="Panamania" value="N_PANAMANIA">Panamania</option>
                                                                                        <option id="N_Oman" name="Oman" value="N_Oman">Oman</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label for="">Số IMO:</label>
                                                                                    <input type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                    </fieldset>
                                                                    
                                                                    <!-- Step 4 -->
                                                                    <fieldset class="tab-pane" id="step4">
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <table class="table table-bordered datatable" 
                                                                                        data-paging="false"
                                                                                        data-info="false"
                                                                                        data-ordering="false"
                                                                                        data-searching="false" >
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th width="20%">Phạm vi bảo hiểm</th>
                                                                                                <th width="17%">Số tiền bảo hiểm</th>
                                                                                                <th width="5%" class="desktop">Phí (%)</th>
                                                                                                <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                                <th width="5%" class="desktop">VAT (%)</th>
                                                                                                <th width="10%" class="desktop">VAT</th>
                                                                                                <th width="5%" class="desktop">COM (%)</th>
                                                                                                <th width="10%" class="desktop">COM</th>
                                                                                                <th width="17%" class="desktop">Định mức</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Trách nhiệm dân sự chủ tầu viễn dương</td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td>
                                                                                                    <select class="form-control" select2 >
                                                                                                        <option>Trách nhiệm dân sự chủ tầu viễn dương</option>
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
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thong_tin_ve_thoi_han_thanh_toan.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thanh_toan_tai_ngan_hang.php'); ?>
                                                                            </div>
                                                                       </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="">Tổng phí (có VAT): </label>
                                                                                    <table class="table table-bordered" style="margin: auto;">
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th class="w60p">Quyền lợi</th>
                                                                                                <th class="w40p text-right">Phí BH có VAT</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Mức trách nhiệm đồng bảo hiểm của VNI</td>
                                                                                                <td class="text-right"><input class="form-control input-money text-right" type="text" value="0"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Số tiền giảm miễn thường</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Trách nhiệm dân sự chủ tầu viễn dương</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            
                                                                                            <tr class="bold" style="background-color: #fff;">
                                                                                                <td>Tổng phí BH</td>
                                                                                                <td><input class="form-control text-right" type="text" disabled="" readonly="" value="0"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="form-group">
                                                                                    <label for="">Lịch thanh toán: </label>
                                                                                    <?php inc('template/4_pham_vi_bao_hiem/lich_thanh_toan.php'); ?>
                                                                                </div>
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
            <?php inc('modal/modal_ds_tau_thuyen.php'); ?> 
            <?php inc('modal/modal_cap_nhap_tau_thuyen.php'); ?> 
        </div>

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

