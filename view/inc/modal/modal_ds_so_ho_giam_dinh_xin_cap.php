<!-- Danh sách hợp đồng xin cấp -->
<div id="ds_so_ho_giam_dinh_xin_cap" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Danh sách số hồ sơ giám định xin cấp</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Đơn vị: </label>
                            <?php inc('template/chi_nhanh.php',false); ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Loại hình bảo hiểm: </label>
                            <?php inc('template/loai_hinh_disabled.php',false); ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Số HSBT: </label>
                            <input type="text" class="form-control" name="" placeholder="Nhập HSBT..." value="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label>Trạng thái: </label>
                            <select class="form-control" select2 >
                                <option value="">--- Chọn trạng thái ---</option>
                                <option value="opt1">Chưa sử dụng</option>
                                <option value="opt2">Đã sử dụng</option>
                                <option value="opt3">Không dùng nữa</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-hover datatable"  
                            data-paging="true"
                            data-info="true"
                            data-ordering="false"
                            data-searching="false">
                            <thead class="thead-light">
                                <tr>
                                  <th width="w1p" data-orderable="false" class="text-center">#</th>
                                  <th>Ngày lấy</th>
                                  <th>Số hồ sơ</th>
                                  <th>Số đơn BH</th>
                                  <th>Khách hàng</th>
                                  <th>Trạng thái</th>
                                  <th>Hạn dùng</th>
                                  <th>Đề nghị</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                               </tr>
                               <tr>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                               </tr>
                               <tr>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                               </tr>
                               <tr>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                               </tr>
                               <tr>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                               </tr>

                            </tbody>
                        </table>
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
<!-- / Danh sách hợp đồng xin cấp -->
