<div class="form-group ">
    <label>Tên công trình/dự án: 
    	<?php if (!empty($GLOBALS["ten_cong_trinh_du_an"]) && $GLOBALS["ten_cong_trinh_du_an"] == 'not-required') : ?>
	    <?php else: ?>
	    	<span class="text-danger">*</span></label>
	    <?php endif; ?>
    </label>
    <input type="text" class="form-control" placeholder="Nhập tên công trình/dự án..." value="">
</div>