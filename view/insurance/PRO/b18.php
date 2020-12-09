<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>  
<?php $GLOBALS["so_gcnbh"] = 'remove'; ?>
<?php $GLOBALS["loai_mien_thuong"] = 'repeater'; ?>

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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i>B18 - Bảo hiểm mọi rủi ro trong công nhiệp</a>
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
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/3_doi_tuong_bao_hiem/PRO/ma_dia_diem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/3_doi_tuong_bao_hiem/PRO/nhom_rui_ro.php'); ?>
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
                                                                                                <td>Mọi rủi ro trong công nghiệp</td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td>
                                                                                                    <select class="form-control" select2 >
                                                                                                        <option id="ED2C208D-4755-4F3C-8DBA-FFBE9C705227" value="ED2C208D-4755-4F3C-8DBA-FFBE9C705227" title="Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm<20 tỷ">Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm&lt;20 tỷ</option>
																									    <option id="EF8C6932-0897-4856-BDD9-C2713942F3A2" value="EF8C6932-0897-4856-BDD9-C2713942F3A2" title="Cat1-Giá trị bảo hiểm < 25 tỷ">Cat1-Giá trị bảo hiểm &lt; 25 tỷ</option>
																									    <option id="538154E4-822B-4398-B731-E6A1D5E6C151" value="538154E4-822B-4398-B731-E6A1D5E6C151" title="Cat1-Giá trị bảo hiểm < 25 tỷ đến 500 tỷ">Cat1-Giá trị bảo hiểm &lt; 25 tỷ đến 500 tỷ</option>
																									    <option id="87925241-D181-460B-B749-F64109902CCB" value="87925241-D181-460B-B749-F64109902CCB" title="Cat1-500 tỷ ≤ Giá trị bảo hiểm < 1000 tỷ">Cat1-500 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
																									    <option id="3F8CA807-BBFC-4B90-9F73-1EFE17C26CA1" value="3F8CA807-BBFC-4B90-9F73-1EFE17C26CA1" title="Cat1-Giá trị bảo hiểm từ 1000 tỷ đến 3000 tỷ">Cat1-Giá trị bảo hiểm từ 1000 tỷ đến 3000 tỷ</option>
																									    <option id="B778EC80-D86F-42A5-8A39-0D4335B57758" value="B778EC80-D86F-42A5-8A39-0D4335B57758" title="Cat1-Giá trị bảo hiểm trên 3000 tỷ">Cat1-Giá trị bảo hiểm trên 3000 tỷ</option>
																									    <option id="6658139C-77FB-4F57-9CEF-5DE57AE0B9F1" value="6658139C-77FB-4F57-9CEF-5DE57AE0B9F1" title="Cat2-Giá trị bảo hiểm < 25 tỷ">Cat2-Giá trị bảo hiểm &lt; 25 tỷ</option>
																									    <option id="44076202-4F1A-41A9-B7A9-F89AC0A55D99" value="44076202-4F1A-41A9-B7A9-F89AC0A55D99" title="Cat2-Giá trị bảo hiểm từ 25 tỷ đến 350 tỷ">Cat2-Giá trị bảo hiểm từ 25 tỷ đến 350 tỷ</option>
																									    <option id="89A0EDA4-2F33-4DBB-BFE5-51569195AA21" value="89A0EDA4-2F33-4DBB-BFE5-51569195AA21" title="Cat2-350 tỷ ≤ Giá trị bảo hiểm < 1000 tỷ">Cat2-350 tỷ ≤ Giá trị bảo hiểm &lt; 1000 tỷ</option>
																									    <option id="441964E2-4BBC-440B-B2A3-DC3BC614EFE7" value="441964E2-4BBC-440B-B2A3-DC3BC614EFE7" title="Cat2-Giá trị bảo hiểm từ 1000 tỷ đến 2100 tỷ">Cat2-Giá trị bảo hiểm từ 1000 tỷ đến 2100 tỷ</option>
																									    <option id="5D6C7D6B-8228-4C68-820E-7956D53B2CDF" value="5D6C7D6B-8228-4C68-820E-7956D53B2CDF" title="Cat2-Giá trị bảo hiểm trên 2100 tỷ">Cat2-Giá trị bảo hiểm trên 2100 tỷ</option>
																									    <option id="E0F0D8A7-89D9-4B0B-9685-4AE79EBEC58A" value="E0F0D8A7-89D9-4B0B-9685-4AE79EBEC58A" title="Cat3-Giá trị bảo hiểm <100 tỷ">Cat3-Giá trị bảo hiểm &lt;100 tỷ</option>
																									    <option id="DA0F93D8-2AA4-444C-B186-AC7412A97CD5" value="DA0F93D8-2AA4-444C-B186-AC7412A97CD5" title="Cat3-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat3-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
																									    <option id="28905FBD-D8CB-4E25-AD4B-26A23620E745" value="28905FBD-D8CB-4E25-AD4B-26A23620E745" title="Cat3-Giá trị bảo hiểm trên 600 tỷ">Cat3-Giá trị bảo hiểm trên 600 tỷ</option>
																									    <option id="C81B4790-FB0C-4320-B4AF-C46E353A7631" value="C81B4790-FB0C-4320-B4AF-C46E353A7631" title="Cat4A-Giá trị bảo hiểm <100 tỷ">Cat4A-Giá trị bảo hiểm &lt;100 tỷ</option>
																									    <option id="6DE38B57-E3F6-40A6-B073-98BA1FAE9CD0" value="6DE38B57-E3F6-40A6-B073-98BA1FAE9CD0" title="Cat4A-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat4A-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
																									    <option id="4E8EE8B6-8ED0-44D8-A7EB-46A8198E69FE" value="4E8EE8B6-8ED0-44D8-A7EB-46A8198E69FE" title="Cat4A-Giá trị bảo hiểm trên 600 tỷ">Cat4A-Giá trị bảo hiểm trên 600 tỷ</option>
																									    <option id="B559F85C-76FA-4BDF-9CEC-9BDD6D9020EC" value="B559F85C-76FA-4BDF-9CEC-9BDD6D9020EC" title="Cat4B-Giá trị bảo hiểm <100 tỷ">Cat4B-Giá trị bảo hiểm &lt;100 tỷ</option>
																									    <option id="05C66F02-A21F-42E7-A849-F199053C43E5" value="05C66F02-A21F-42E7-A849-F199053C43E5" title="Cat4B-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ">Cat4B-Giá trị bảo hiểm từ 100 tỷ đến 600 tỷ</option>
																									    <option id="A74C7D64-CD2B-47A5-9DED-2E623DD873CE" value="A74C7D64-CD2B-47A5-9DED-2E623DD873CE" title="Cat4B-Giá trị bảo hiểm trên 600 tỷ">Cat4B-Giá trị bảo hiểm trên 600 tỷ</option>
																									    <option id="FBD142BF-22F7-4D43-B86A-993EFE342599" value="FBD142BF-22F7-4D43-B86A-993EFE342599" title="Định mức khác do Cty phê duyệt">Định mức khác do Cty phê duyệt</option>

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
                                                                                <div class="form-group">
                                                                                    <label>Điều kiện bảo hiểm: </label>
                                                                                    <textarea class="form-control" placeholder="Nhập điều kiện bảo hiểm..." disabled="">Mọi rủi ro trong công nghiệp</textarea>
                                                                                </div>
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
                                                                                <?php inc('template/4_pham_vi_bao_hiem/PRO/trach_nhiem_dong_bao_hiem.php'); ?>
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

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="">Tổng phí (có VAT): </label>
                                                                                    <table class="table table-bordered" style="margin: auto;">
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th class="w65p">Quyền lợi</th>
                                                                                                <th class="w40p text-right">Phí BH có VAT</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Mức trách nhiệm đồng bảo hiểm của VNI</td>
                                                                                                <td class="text-right"><input class="form-control input-money text-right" type="text" value="0"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Mọi rủi ro trong công nghiệp</td>
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
        <?php inc('modal/modal_ds_may_moc.php'); ?>
         
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

 