<?php if (!empty($GLOBALS["dieu_kien_bao_hiem"]) && $GLOBALS["dieu_kien_bao_hiem"] == 'modal') : ?>
	<div class="form-group">
		<label>Điều kiện bảo hiểm: </label>
		<div class="d-flex align-items-center">
			<textarea class="form-control" placeholder="Nhập điều kiện bảo hiểm..."></textarea>
			<button type="button" class="btn bg-primary text-nowrap ml-2" data-toggle="modal" data-target="#ds_dieu_kien_bao_hiem">Chọn</button>
		</div>
	</div>
	<?php inc('modal/modal_ds_dieu_kien_bao_hiem.php'); ?> 
<?php else: ?>
	<div class="form-group">
		<label>Điều kiện bảo hiểm: </label>
		<textarea class="form-control" placeholder="Nhập điều kiện bảo hiểm..."></textarea>
	</div>
<?php endif; ?>
