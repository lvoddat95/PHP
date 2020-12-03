<div id="cap_nhap_dieu_khoan_sua_doi_bo_dung" class="modal fade" tabindex="-1" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Thêm mới điều khoản sửa đổi bổ sung</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Loại hình bảo hiểm</label>
                        <?php inc('template/loai_hinh.php',false); ?>
                    </div>
                    <div class="row ">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Mã điều khoản: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="" placeholder="" value="MADIEUKHOAN">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="d-block">Tên điều khoản: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="d-block">Ghi chú: </label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <div class="p-button">
                    <button type="submit" class="btn bg-primary"><i class="fa fa-save mr-1"></i>Lưu</button>
                </div>
            </div>
        </div>
    </div>
</div>
