<div class="form-group">
    <?php if (!empty($GLOBALS["nguoi_duoc_bao_hiem"]) && $GLOBALS["nguoi_duoc_bao_hiem"] == 'label_khach_hang') : ?>
        <label>Khách hàng: <span class="text-danger">*</span></label>
    <?php else: ?>
        <label>Người được bảo hiểm: <span class="text-danger">*</span></label>
    <?php endif; ?>
	<div class="row">
        <div class="col-md-4 col-sm-4">
            <input type="text" class="form-control required" placeholder="Nhập mã khách hàng...">
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="input-group">
                <input type="text" class="form-control required" placeholder="Nhập tên khách hàng..." >
                <span class="input-group-append">
                    <button type="button" class="btn bg-primary" data-fancybox data-base-class="fancybox-container-lg" data-type="iframe" data-src="<?php echo HTTP_PATH; ?>view/inc/iframe/iframe_ds_khach_hang.php" href="javascript:;">Chọn từ danh mục <i class="fad fa-user-plus ml-1"></i></button>
                </span>
            </div>
        </div>
    </div>
</div>