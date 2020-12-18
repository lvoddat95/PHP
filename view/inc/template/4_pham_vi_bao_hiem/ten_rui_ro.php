<div class="form-group">
	<?php if (!empty($GLOBALS["ten_rui_ro"]) && $GLOBALS["ten_rui_ro"] == 'trach_nhiem_bao_hiem') : ?>
		<label>Trách nhiệm bảo hiểm: <span class="text-danger">*</span></label>
	<?php else: ?>
		<label>Tên rủi ro: <span class="text-danger">*</span></label>
	<?php endif; ?>

	<div class="d-flex align-items-center">
		<textarea class="form-control" placeholder="Nhập rủi ro..."></textarea>
		<button type="button" class="btn bg-primary text-nowrap ml-2" data-toggle="modal" data-target="#ds_rui_ro_bao_hiem">Chọn</button>
	</div>
</div>