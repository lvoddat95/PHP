<!-- Xin cấp số hợp đồng-->
<div id="xin_cap_hop_dong" class="modal-none fancybox-content-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Thông tin hợp đồng xin cấp</h5>
                <button type="button" class="close" data-fancybox-close><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex"><span class="font-weight-semibold" style="width: 120px">- Ngày xin cấp:</span> 28/07/2020</div>
                            <div class="d-flex"><span class="font-weight-semibold" style="width: 120px">- Người xin cấp:</span> Lê Viết Đạt</div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Loại hình bảo hiểm <span class="text-danger">*</span></label>
                                <?php inc('template/loai_hinh.php',false); ?>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group ">
                                <label>Gói hợp đồng: </label>
                                <select class="form-control" select2 disabled="">
                                    <option>--- Chọn gói hợp đồng ---</option>
                                    <option>Basic</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label>Kiểu hợp đồng: </label>
                                <select class="form-control" select2 >
                                    <option>Hợp đồng thường</option>
                                    <option>Hợp đồng nguyên tắc</option>
                                    <option>Hợp đồng Bao</option>
                                    <option>Hợp đồng trọn gói</option>
                                    <option>Hợp đồng xe cơ giới nhiều xe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Khách hàng: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                                <label class="d-block">Số lượng xe tham gia BH: <i class="text-danger float-right font9">(Bắt buộc phải nhập trong trường hợp hợp đồng xe cơ giới nhiều xe)</i></label>
                                <input type="text" class="form-control input-number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>Có file đính kèm hợp đồng không ?:  <span class="text-danger">*</span></label>
                                <div class="row justify-content-between">
                                    <div class="col-md-2">
                                        <div class="button-switch">
                                            <input type="checkbox" id="file_dinh_kem_hd" class="switch required" name="file_dinh_kem_hd">
                                            <label for="file_dinh_kem_hd" data-off="Không" data-on="Có"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <ul class="list list-unstyled mb-0 text-danger font-italic font10">
                                            <li>- Chọn là <b>Có</b> thì khi nhập đơn phải đính kèm hợp đồng thì được phép cho nợ phí theo quy định.</li>
                                            <li>- Chọn là <b>Không</b> thì khi nhập đơn không phải đính kèm hợp đồng thì không được cho nợ phí.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ghi chú:</label>
                                <textarea rows="3" cols="5" class="form-control" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-fancybox-close> <i class="far fa-times mr-1"></i>Đóng</button>
                    <a href=":;" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="fa fa-save"></i></b> Lưu</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Xin cấp số hợp đồng -->