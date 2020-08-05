<!-- Duyệt đơn -->
<div id="duyet_don" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-semibold ">Duyệt đơn bảo hiểm</h5>
                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i> Đóng</button>
            </div>

            <form action="#">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Người duyệt:</label>
                        <div class="col-lg-9">
                            <input class="form-control" readonly type="text" value="Lê Viết Đạt">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Trạng thái: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="radio1" class="mr-1" name="radio" checked>
                                    <label for="radio1" class="form-check-label">Chấp nhận</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="radio2" class="mr-1" name="radio" >
                                    <label for="radio2" class="form-check-label">Từ chối</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Lí do từ chối: <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select class="form-control" select2 name="">
                                <option>--- Chọn ---</option>
                                <option>Lí do A</option>
                                <option>Lí do B</option>
                                <option>Lí do C</option>
                                <option>Lí do D</option>
                                <option>Lí do E</option>
                                <option>Lí do F</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Ghi chú:</label>
                        <div class="col-lg-9">
                            <textarea rows="3" cols="5" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="p-button" match-w>
                        <button type="submit" class="btn bg-primary"><i class="fa fa-save mr-1"></i>Cập nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Duyệt đơn-->