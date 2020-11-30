<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["trach_nhiem_dong_bao_hiem"] = 'trach-nhiem-dong-bao-hiem'; ?>
<?php $GLOBALS["can_bo_ki_don"] = 'hide'; ?>
<?php $GLOBALS["dieu_kien_bao_hiem"] = 'modal'; ?>
<?php $GLOBALS["quy_tac_bao_hiem_b12"] = 'b12'; ?>
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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i>B12 - Bảo hiểm bảng hiệu đèn quảng cáo</a>
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
                                                                    <?php inc('template/3_doi_tuong_bao_hiem/PRO/3_doi_tuong_bao_hiem2.php'); ?>
                                                                    
                                                                    <!-- Step 4 -->
                                                                    <fieldset class="tab-pane" id="step4">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="collapse-group">
                                                                                    <div class="p-title">Phạm vi bảo hiểm: <a href="#" data-tooltip="tipsy" original-title="Chỉ có thể chọn Tổn thất vật chất tự nguyện hoặc Tổn thất vật chất bắt buộc" data-position="top"><i class="icon-info22"></i></a></div>
                                                                                    <div class="p-body collapse show">

                                                                                        <div class="c-item">
                                                                                            <div class="c-title">
                                                                                                <span class="button-switch no-label">
                                                                                                    <input type="checkbox" id="ckbchild1" class="switch cls_ckb">
                                                                                                    <label for="ckbchild1" data-off="Không" data-on="Có"></label>
                                                                                                </span>
                                                                                                <a data-toggle="collapse" class="collapsed" href="#collapsible-item1">Bảo hiểm bảng hiệu đèn quảng cáo</a>
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
                                                                                                                <td>Bảo hiểm bảng hiệu đèn quảng cáo</td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td>
                                                                                                                    <select class="form-control" select2 >
                                                                                                                        <option>Bảo hiểm bảng hiệu đèn quảng cáo</option>
                                                                                                                    </select>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="c-item ">
                                                                                            <div class="c-title">
                                                                                                <span class="button-switch no-label">
                                                                                                    <input type="checkbox" id="ckbchild2" class="switch cls_ckb">
                                                                                                    <label for="ckbchild2" data-off="Không" data-on="Có"></label>
                                                                                                </span>
                                                                                                <a class="collapsed " data-toggle="collapse" href="#collapsible-item2">Trách nhiêm bên thứ 3</a>
                                                                                            </div>
                                                                                            <div id="collapsible-item2" class="collapse" datatable-collapse>
                                                                                                <div class="c-body">
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
                                                                                                                <td>Trách nhiêm bên thứ 3</td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                                <td>
                                                                                                                    <select class="form-control" select2 >
                                                                                                                        <option>Trách nhiêm bên thứ 3</option>
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
                                                                                <div class="form-group">
                                                                                    <label>Tên rủi ro: <span class="text-danger">*</span></label>
                                                                                    <textarea class="form-control" placeholder="Nhập điều kiện bảo hiểm..." disabled="">Bảo hiểm cho thiệt hại hay tổn thất vật chất bất ngờ đối với thiết bị hay bộ phận bất kỳ nào được miêu tả ở trong hợp đồng bảo hiểm tại địa điểm được bảo hiểm bị tổn thất, phá hủy hoặc thiệt hại do bất kỳ nguyên nhân nào không bị hợp đồng bảo hiểm loại trừ phát sinh trong thời hạn bảo hiểm. Đồng thời, VNI cũng bồi thường các khoản tiền mà Người được bảo hiểm có trách nhiệm phải trả đối với thương tật thân thể hoặc thiệt hại đối với tài sản bên thứ ba mà không bị loại trừ theo quy tắc bảo hiểm.</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label>Điều kiện bảo hiểm: </label>
                                                                                    <textarea class="form-control" placeholder="Nhập điều kiện bảo hiểm..." disabled="">Bảo hiểm bảng hiệu, đèn quảng cáo</textarea>
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
                                                                                <b><label>Lịch thanh toán bảo hiểm: </label></b>
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
                                                                                            <td>Bảo hiểm bảng hiệu đèn quảng cáo</td>
                                                                                            <td class="text-right">0</td>
                                                                                        </tr>
                                                                                        tr>
                                                                                            <td>Trách nhiêm bên thứ 3</td>
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

