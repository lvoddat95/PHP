<div class="form-group ">
	<label class="d-block">Số GCNBH: <span class="text-danger">*</span> <i class="text-danger float-right font9">(Ví dụ:COV-AVP/000001)</i></label>
	<?php if (!empty($GLOBALS["gv"]) && $GLOBALS["gv"] == 'ebaohiem') : ?>
		<div class="input-group">
			<input type="text" class="form-control required" name="so_gcnbh" placeholder="Nhập số GCNBH..." value="">
			<span class="input-group-append">
				<button type="button" class="btn bg-primary">Lấy từ EBAOHIEM</button>
			</span>
		</div>
	<?php else: ?>
		<input type="text" class="form-control required" name="so_gcnbh" placeholder="Nhập số GCNBH..." value="">
	<?php endif; ?>
	
</div>

