<div class="form-group ">
    <label>Hình thức khai thác: <span class="text-danger">*</span></label>
    <?php if (!empty($GLOBALS["gv2"]) && $GLOBALS["gv2"] == 'trach-nhiem-dong-bao-hiem') : ?>
	    <select class="form-control required" select2 name="hinh_thuc_khai_thac" onchange="on_change_hinh_thuc_khai_thac_step4(this);">
	        <option value="truc-tiep">Bảo hiểm trực tiếp</option>
	        <option value="tai-bh">Nhận tái bảo hiểm</option>
	        <option value="dong-bh">Đồng bảo hiểm</option>
	    </select>
    <?php else: ?>
		<select class="form-control required" select2 name="hinh_thuc_khai_thac" onchange="on_change_hinh_thuc_khai_thac(this);">
	        <option value="truc-tiep">Bảo hiểm trực tiếp</option>
	        <option value="tai-bh">Nhận tái bảo hiểm</option>
	        <option value="dong-bh">Đồng bảo hiểm</option>
	    </select>
	<?php endif; ?>
</div>