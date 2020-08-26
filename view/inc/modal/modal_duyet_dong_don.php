<!-- Duyệt đơn -->
<div id="duyet_dong_don" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Duyệt & Đóng đơn bảo hiểm</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>

            <form action="#">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Cán bộ:</label>
                        <div class="col-lg-9">
                            <input class="form-control" readonly type="text" value="Lê Viết Đạt">
                        </div>
                    </div>
                    
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