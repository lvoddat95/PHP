<!-- Duyệt đơn -->
<div id="thiet_la_han_muc" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Hạn mức địa điểm</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>

            <form action="#">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-lg-5 col-form-label">#Mã địa điểm:</label>
                        <div class="col-lg-7 d-flex align-items-center ">
                            <span>MADIADIEM</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-5 col-form-label">Nhóm sản phẩm: <span class="text-danger">*</span></label>
                        <div class="col-lg-7 col-content-md">
                            <select class="form-control" select2>
                                <option value="">--- Chọn ---</option>
                                <option value="">Bảo hiểm kĩ thuật</option>
                                <option value="">Bảo hiểm tài sản</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-5 col-form-label">Hạn mức: <span class="text-danger">*</span></label>
                        <div class="col-lg-7 col-content-sm">
                            <input type="text" class="form-control input-money text-right required"  placeholder="0" value="">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="p-button" match-w>
                        <a href=":;" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="fa fa-save"></i></b> Lưu</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Duyệt đơn-->