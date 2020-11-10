<div class="form-group ">
    <?php if (!empty($GLOBALS["rui_ro_uot_c01"]) && $GLOBALS["rui_ro_uot_c01"] == 'rui_ro_uot_c01') : ?>
        <label>Rủi ro đặc biệt/ướt:  <span class="text-danger">*</span></label>
        <div class="d-flex align-items-center">
            <textarea class="form-control" placeholder="Nhập rủi ro..."></textarea>
            <button type="button" class="btn bg-primary text-nowrap ml-2" data-toggle="modal" data-target="#ds_rui_ro_bao_hiem">Chọn</button>
        </div>
        <?php inc('modal/modal_ds_rui_ro_bao_hiem.php',false); ?> 
    <?php else: ?>
        <label>Rủi ro ướt:  <span class="text-danger">*</span>
            <a href="#" data-tooltip="tipsy" original-title="Chọn <b style='color: red;'>“Có”</b> nếu thuộc rủi ro ướt." data-position="top"><i class="icon-info22"></i></a>
        </label>
        <div class="d-flex">
            <p class="switch-title mr-3">Thuộc rủi ro ướt không ?</p>
            <div class="button-switch">
                <input type="checkbox" id="rui_ro_uot" class="switch required" name="rui_ro_uot">
                <label for="rui_ro_uot"  data-off="Không" data-on="Có"></label>
            </div>
        </div>
    <?php endif; ?>
</div>