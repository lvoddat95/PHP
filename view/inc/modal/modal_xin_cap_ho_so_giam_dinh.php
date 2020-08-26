<!-- Xin cấp số hợp đồng-->
<div id="claim_xin_cap" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Xin cấp hồ sơ giám định bồi thường</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">

                    <fieldset>
                        <legend class="text-primary-800 font-weight-semibold border-dashed">Thông tin xin cấp</legend>
                        <div class="row align-items-center">
                            <label class="col-3 col-form-label font-weight-semibold text-left">• Ngày xin cấp:</label>
                            <div class="col-9">28/07/2020</div>
                        </div>
                        <div class="row align-items-center">
                            <label class="col-3 col-form-label font-weight-semibold text-left">• Người xin cấp:</label>
                            <div class="col-9">Lê Viết Đạt</div>
                        </div>
                    </fieldset>

                    <hr class="border-dashed">

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label ">Đơn bảo hiểm số: <span class="text-danger">*</span></label>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <input type="text" class="form-control required" placeholder="Nhập số hồ sơ...">
                                <span class="input-group-append">
                                    <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_don_bao_hiem">Chọn</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label ">Loại hình bảo hiểm: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <?php inc('template/loai_hinh_disabled.php',false); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label ">Khách hàng: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="" disabled="" value="" placeholder="Nhập tên khách hàng...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label ">Ghi chú:</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" placeholder="Nhập ghi chú..."></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"> <i class="far fa-times mr-1"></i>Đóng</button>
                    <a href=":;" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="fa fa-save"></i></b> Lưu</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Xin cấp số hợp đồng -->