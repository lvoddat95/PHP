<!-- Chi tiết quá trình giải quyết KNBT -->
<div id="knbt" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Chi tiết quá trình giải quyết KNBT</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>

            <div class="modal-body">

                <div class="d-flex align-items-center">
                    <p class="mb-0">
                        <span class="mr-2">#Trạng thái:</span>
                        <span class="badge badge-primary">Chấp thuận</span>
                    </p>
                    <div class="d-flex align-items-center ml-auto">
                        <p class="mb-0"><span class="mr-2">Người duyệt:</span> Dương Quốc Đại</p>
                        <span class="ml-3 mr-3"></span>
                        <p class="mb-0"><span class="mr-2">Ngày duyệt:</span> 26/08/2020</p>
                        <a href="" class="ml-2"><sup><i class="far fa-edit"></i> Sửa ngày duyệt</sup></a>
                    </div>
                </div>

                <hr class="border-dashed border-silver mb-3">

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Hình thức: <span class="text-danger">*</span></label>
                            <select class="form-control" select2>
                                <option value="">--- Chọn ---</option>
                                <option id="DU_PHONG" name="Dự phòng" value="DU_PHONG">Dự phòng</option>
                                <option id="THANH_TOAN" name="Thanh toán" value="THANH_TOAN" selected="">Thanh toán</option>
                                <option id="PHI_GIAM_DINH" name="Phí giám định" value="PHI_GIAM_DINH">Phí giám định</option>
                                <option id="THU_TU_BEN_THU3" name="Thu từ bên thứ ba" value="THU_TU_BEN_THU3">Thu từ bên thứ ba</option>
                                <option id="BAN_TS_CUU_VOT" name="Bán tài sản cứu vớt" value="BAN_TS_CUU_VOT">Bán tài sản cứu vớt</option>
                                <option id="GIAM_DU_PHONG" name="Giảm dự phòng" value="GIAM_DU_PHONG">Giảm dự phòng</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr class="border-dashed border-silver mb-3">

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label>Tháng kế toán:</label>
                           <input type="text" class="form-control" value="8/2020">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày duyệt:</label>
                           <input type="text" class="form-control" value="2020-08-26 00:00:00" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <?php inc('template/public/chuyen_vien_boi_thuong.php'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày tổn thất: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="05/08/2020">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày TBTT: 
                                <span class="text-danger">*</span> 
                                <a href="#" data-tooltip="tipsy" original-title="Ngày thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                            </label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="06/08/2020">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày giám định:</label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                        </div>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày BC sơ bộ:</label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày BCGĐ giữa kỳ:</label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày BCGĐ cuối cùng:</label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                Địa điểm tai nạn: <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" placeholder="Nhập địa điểm tai nạn...">xuân mai, phúc thắng, phúc yên</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Diễn biến: <span class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Nhập diễn biến...">va quệt vào chậu cây cạnh góc sân</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nguyên nhân: <span class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Nhập nguyên nhân...">va quệt vào chậu cây cạnh góc sân</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hậu quả: <span class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Nhập hậu quả...">xước sát xe</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Số người chết:</label>
                            <input type="text" class="form-control input-number" placeholder="0">
                        </div>
                    </div>
                </div>

                <hr class="border-dashed border-silver mb-3">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Đơn bảo hiểm số:</label>
                            <input type="text" class="form-control" placeholder="Nhập số đơn bảo hiểm..." value="3412005162/F02.BB19/0080992" disabled>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Loại hình: <span class="text-danger">*</span></label>
                            <?php inc('template/loai_hinh_disabled.php', false); ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Khách hàng (Mã/Tên): <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" class="form-control required" nplaceholder="Nhập mã khách hàng..." value="34100024379" disabled>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control required" placeholder="Nhập tên khách hàng..." value="Đặng Thanh Tùng" disabled>
                                        <span class="input-group-append">
                                            <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn từ danh mục <i class="fad fa-user-plus ml-1"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Số điện thoại: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control input-phone" placeholder="Nhập số điện thoại..." value="0395013333" disabled>
                        </div>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Địa chỉ: </label>
                            <textarea class="form-control" placeholder="Nhập địa chỉ..." disabled>Phúc Thắng, Phúc Yên, Vĩnh Phúc</textarea>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Đối tượng tổn thất: </label>
                            <textarea class="form-control" placeholder="Nhập đối tượng tổn thất...">88A27218</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày tạo đơn:</label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="29/06/2020" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Mức miền thường:</label>
                            <input type="text" class="form-control input-money text-right" placeholder="0">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ngày thanh toán phí:</label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bồi thường: </label>
                            <select select2>
                                <option>--- Chọn ---</option>
                                <option selected="">Vật chất xe</option>
                                <option>Khác</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Hệ thống gara: </label>
                            <select select2>
                                <option>--- Chọn ---</option>
                                <option selected="">Trong hệ thống</option>
                                <option>Ngoài hệ thống</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Gara ôtô sửa chữa: </label>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" class="form-control required" nplaceholder="" value="gara0307">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control required" placeholder="" value="gara lộc phát">
                                        <span class="input-group-append">
                                            <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#">Chọn</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <hr class="border-dashed border-silver mb-3">

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Loại tiền: <span class="text-danger">*</span></label>
                            <select select2 disabled>
                                <option id="" value="" name="">--- Chọn ---</option>
                                <option id="EUR" name="EUR" value="EUR">EUR</option>
                                <option id="VND" name="VND" value="VND" selected>VND</option>
                                <option id="CHF" name="CHF" value="CHF">>CHF</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tỉ giá thực tế: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control input-float text-right" placeholder="0.0" value="1" disabled>
                        </div>
                    </div>
                </div>
              
            </div>

            <div class="modal-footer">
                <a href="#" data-toggle="modal" data-target="#claim_xin_cap" class="btn"><i class="icon-file-check mr-1"></i>Xin cấp</a>
                <a href="#" data-toggle="modal" data-target="#claim_xin_huy" class="btn"><i class="icon-file-locked mr-1"></i>Xin huỷ</a>
                <a href="#" class="btn bg-primary"><i class="icon-checkmark4 mr-1"></i>Chọn</a>
            </div>
        </div>
    </div>
</div>
<!-- / Chi tiết quá trình giải quyết KNBT -->
