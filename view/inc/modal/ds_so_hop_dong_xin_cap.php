<!-- Danh sách hợp đồng xin cấp -->
<div id="ds_so_hop_dong_xin_cap" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ont-weight-semibold ">Danh sách số hợp đồng đã xin cấp</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label class="mb-0">Trạng thái: </label>
                                <div class="form-group-select">
                                    <select class="form-control" select2 >
                                        <option value="">--- Chọn trạng thái ---</option>
                                        <option value="opt1">Chưa sử dụng</option>
                                        <option value="opt2">Đã sử dụng</option>
                                        <option value="opt3">Không dùng nữa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="mb-0">Số hợp đồng</label>
                                <input type="text" class="form-control" name="" placeholder="Nhập số hợp đồng..." value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered datatable"  
                                    data-paging="false"
                                    data-info="false"
                                    data-ordering="false"
                                    data-searching="false"
                                >
                                    <thead class="thead-light">
                                        <th width="30px">#</th>
                                        <th>Ngày lấy</th>
                                        <th>Số hợp đồng</th>
                                        <th>Loại hình bảo hiểm</th>
                                        <th>Gói HĐ</th>
                                        <th>Khách hàng</th>
                                        <th>Số lượng xe</th>
                                        <th>Tình trạng</th>
                                        <th>Hạn dùng</th>
                                        <th>Đề nghị</th>
                                    </thead>
                                    <tbody>
                                        <tr class="round_row">
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                    <div class="dropdown p-0">
                        <a href="#" class="dropdown-toggle btn btn-light" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-gear mr-2"></i>
                            Chọn
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-file-check"></i> Xin cấp số hợp đồng</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Xin gia hạn</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Xin hủy</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                        </div>
                    </div>
                    <button type="submit" class="btn bg-primary">Chọn</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Danh sách hợp đồng xin cấp -->