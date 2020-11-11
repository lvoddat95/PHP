<?php if (!empty($GLOBALS["ngay_cap"]) && $GLOBALS["ngay_cap"] == 'today') : 
	$today = date('d/m/Y');
	$attr = 'disabled';
else:
    $today = ''; 
	$attr = '';

endif; ?>


<div class="form-group">
	<label>Ngày nhập đơn: <span class="text-danger">*</span></label>
	<input type="text" name="ngay_cap" class="form-control  input-date datepicker" placeholder="dd/mm/yyyy" value="<?php echo $today; ?>" <?php echo $attr; ?> >
</div>