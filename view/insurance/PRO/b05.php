<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["trach_nhiem_dong_bao_hiem"] = 'trach-nhiem-dong-bao-hiem'; ?>
<?php $GLOBALS["can_bo_ki_don"] = 'hide'; ?>
<?php $GLOBALS["dieu_kien_bao_hiem"] = 'modal'; ?>
<?php $GLOBALS["dieu_kien_bao_hiem_b05"] = 'b05'; ?>
    
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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i>B05 - Bảo hiểm mọi rủi ro nhà ở</a>
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
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group ">
                                                                                    <label>Nhóm rủi ro(cat1,cat2..): <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" select2 disabled>
                                                                                        <option id="CAT1" name="CAT1" value="CAT1">CAT1</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group ">
                                                                                    <label>Ngành nghề kinh doanh: <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" select2 disabled>
                                                                                        <option id="" name="" value="">Nhà ở tập thể, nhà chung cư</option>
                                                                                    </select>
                                                                                </div>
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
                                                                                                <option value="">Giá trị xây dựng</option>
                                                                                                <option value="">Tài sản bên trong</option>
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
                                                                            <div class="border p-1 text-center">
                                                                                <input class="btn bg-success" data-repeater-create type="button" value="+ Thêm">
                                                                            </div>
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
                                                                                            <th><b>Giá trị xây dựng</b></th>
                                                                                            <th><b>Tài sản bên trong</b></th>
                                                                                            <th><b><i class="far fa-sigma mr-1"></i>Tổng cộng</b></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td><b>Giá trị</b></td>
                                                                                            <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><b>Số tiền bảo hiểm</b></td>
                                                                                            <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                            <td><input type="text" class="form-control input-money" name="" placeholder="0"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                                                <div class="form-group ">
                                                                                    <input type="checkbox" id="phamvi"><label class="mb-0 ml-1" for="phamvi">Bao gồm các phạm vi về giông bão, lũ lụt</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <table class="table table-bordered datatable" 
                                                                                        data-paging="false"
                                                                                        data-info="false"
                                                                                        data-ordering="false"
                                                                                        data-searching="false">
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
                                                                                                <td>Bảo hiểm mọi rủi ro nhà ở</td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                <td>
                                                                                                    <select class="form-control" select2>
                                                                                                        <option title="Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm<20 tỷ">Bảo hiểm cháy nổ nhà tư nhân: giá trị bảo hiểm&lt;20 tỷ</option>
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
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/loai_mien_thuong.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/ti_le_gia_tri_ton_that.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/so_tien_khau_tru_toi_thieu.php'); ?>
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
                                                                                <?php inc('template/4_pham_vi_bao_hiem/PRO/trach_nhiem_dong_bao_hiem.php'); ?>
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
                                                                                            <td>Bảo hiểm mọi rủi ro nhà ở</td>
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

