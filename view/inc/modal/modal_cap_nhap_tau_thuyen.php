<!-- Danh sách tàu thuyền -->
<div id="cap_nhap_tau_thuyen" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Cập nhập thông tin tàu thuyền</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Mã tàu: <span class="text-danger">*</span></label>
                        <div class="col-lg-9 col-content-sm">
                            <input class="form-control" type="text" value="TAU07584">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Tên tàu: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Năm đóng</label>
                        <div class="col-lg-9">
                            <input class="form-control datepicker input-date" type="text" value="" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Ghi chú:</label>
                        <div class="col-lg-9">
                            <textarea rows="3" cols="5" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Thứ tự hiển thị <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="7584">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Hoạt động</label>
                        <div class="col-lg-9">
                            <div class="button-switch">
                                <input type="checkbox" id="stt" class="switch required" name="stt" checked>
                                <label for="stt" data-off="Không" data-on="Có"></label>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <div class="p-button">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i>Đóng</button>
                        <button type="submit" class="btn bg-primary"><i class="fa fa-save mr-1"></i>Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Danh sách tàu thuyền -->