<div class="form-group ">
    <label>Mã địa điểm: 
    	<?php if (!empty($GLOBALS["ma_dia_diem"]) && $GLOBALS["ma_dia_diem"] == 'not-required') : ?>
	    <?php else: ?>
	    	<span class="text-danger">*</span></label>
	    <?php endif; ?>
    <div class="input-group">
        <input type="text" class="form-control required" name="so_don_bao_hiem" placeholder="Nhập mã địa điểm...">
        <span class="input-group-append">
            <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_dia_diem">Chọn</button>
        </span>
    </div>
</div>
<?php inc('modal/modal_ds_dia_diem.php'); ?> 