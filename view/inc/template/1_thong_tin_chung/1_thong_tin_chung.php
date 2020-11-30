<fieldset class="tab-pane active show" id="step1">
    <div class="row">
        <div class="col-md-3">
            <?php inc('template/1_thong_tin_chung/kenh_khai_thac.php'); ?> 
        </div>
        <div class="col-md-3">
            <?php inc('template/1_thong_tin_chung/hinh_thuc_khai_thac.php'); ?> 
        </div>
        <div class="col-md-3">
            <div class="form-group ">
                <label>Đơn tái tục: <a href="#" data-tooltip="tipsy" original-title="Chọn <b style='color: red;'>“Có”</b> nếu là đơn tái tục." data-position="top"><i class="icon-info22"></i></a>
                </label>
                <div class="d-flex">
                    <p class="switch-title mr-3">Có phải đơn tái tục ?</p>
                    <div class="button-switch">
                        <input type="checkbox" id="tai_bao_hiem_sw" class="switch required" name="tai_bao_hiem_sw">
                        <label for="tai_bao_hiem_sw" data-off="Không" data-on="Có"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php inc('template/1_thong_tin_chung/so_don_bao_hiem.php'); ?> 
        </div>
        <?php if (!empty($GLOBALS["so_gcnbh"]) && $GLOBALS["so_gcnbh"] == 'remove') : ?>
        <?php else: ?>
            <div class="col-md-6">
                <?php inc('template/1_thong_tin_chung/so_gcnbh.php'); ?> 
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php inc('template/1_thong_tin_chung/so_tham_chieu.php'); ?>
        </div>
        
        <div class="col-md-4">
            <?php inc('template/1_thong_tin_chung/so_ban_chao.php'); ?>
        </div>
        <div class="col-md-4">
            <?php inc('template/1_thong_tin_chung/so_hd_nhan_tai.php'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php inc('template/1_thong_tin_chung/nguoi_duoc_bao_hiem.php'); ?>
        </div>
        <div class="col-md-12">
            <?php inc('template/1_thong_tin_chung/nguoi_thanh_toan_bao_hiem.php'); ?>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php inc('template/1_thong_tin_chung/can_bo_khai_thac.php'); ?>
        </div>
        <div class="col-md-3">
            <?php inc('template/1_thong_tin_chung/can_bo_cap_don.php'); ?>
        </div>

<!--         <?php if (!empty($GLOBALS["can_bo_ki_don"]) && $GLOBALS["can_bo_ki_don"] == 'hide') : ?>
        <?php else: ?>
            <div class="col-md-3">
                <?php inc('template/1_thong_tin_chung/can_bo_ki_don.php'); ?>
            </div>
        <?php endif; ?> -->

        <div class="col-md-3">
            <?php inc('template/1_thong_tin_chung/ngay_cap.php'); ?>
        </div>
        
        <?php if (!empty($GLOBALS["1_thong_tin_chung"]) && $GLOBALS["1_thong_tin_chung"] == 'ngay_ki_don') : ?>
            <div class="col-md-3">
                <?php inc('template/1_thong_tin_chung/ngay_ki_don.php'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php inc('template/1_thong_tin_chung/loai_tien.php'); ?>
        </div>
        <div class="col-md-3">
            <?php inc('template/1_thong_tin_chung/ti_gia_thuc_te.php'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php inc('template/1_thong_tin_chung/tai_bao_hiem.php'); ?>
            <?php inc('template/1_thong_tin_chung/dong_bao_hiem.php'); ?>
        </div>
    </div>

    <?php if (!empty($GLOBALS["ngay_di_ve"]) && $GLOBALS["ngay_di_ve"] == 'yes') : ?>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group ">
                    <label>Ngày đi, ngày về: <a href="#" data-tooltip="tipsy" original-title="Chọn <b style='color: red;'>“Có”</b> nếu là có ngày đi - ngày về." data-position="top"><i class="icon-info22"></i></a>
                    </label>
                    <div class="d-flex">
                        <p class="switch-title mr-3">Có ngày đi, ngày về không ?</p>
                        <div class="button-switch">
                            <input type="checkbox" id="ngay_di_ngay_ve" class="switch required" name="ngay_di_ngay_ve" onchange="on_change_ngay_di_ngay_ve(this);">
                            <label for="ngay_di_ngay_ve" data-off="Không" data-on="Có"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" id="ngay_di" style="display: none;">
                <div class="form-group">
                    <label>Ngày đi: <span class="text-danger">*</span></label>
                    <input type="text" name="ngay_cap" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                </div>       
            </div>
            <div class="col-md-2" id="ngay_ve" style="display: none;">
                <div class="form-group">
                    <label>Ngày về: <span class="text-danger">*</span></label>
                    <input type="text" name="ngay_cap" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                </div>       
            </div>
        </div>
    <?php endif; ?>
</fieldset>