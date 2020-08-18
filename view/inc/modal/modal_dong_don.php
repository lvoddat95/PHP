<!-- Duyệt đơn -->
<div id="duyet_dong_don" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-semibold ">Đóng đơn bảo hiểm</h5>
                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i> Đóng</button>
            </div>

            <form action="#">
                <div class="modal-body">
                    
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Ngày đóng:</label>
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
                </div>

                <div class="modal-footer">
                    <div class="p-button" match-w>
                        <button type="submit" class="btn bg-danger"><i class="icon-file-locked mr-1"></i>Đóng đơn</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Duyệt đơn-->