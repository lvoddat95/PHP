<div class="modal-group">
    <!-- Danh sách hợp đồng xin cấp -->
    <div id="ds_so_hop_dong_xin_cap" class="modal fade" tabindex="-1" datatable-modal>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-semibold ">Danh sách số hợp đồng đã xin cấp</h5>
                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i> Đóng</button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="mb-0">Loại hình bảo hiểm</label>
                                <?php inc('template/loai_hinh.php'); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="mb-0">Số hợp đồng</label>
                                <input type="text" class="form-control" name="" placeholder="Nhập số hợp đồng..." value="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label class="mb-0">Trạng thái: </label>
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
                                    <th width="w1p" data-orderable="false" class="text-center">#</th>
                                    <th class="">Ngày lấy</th>
                                    <th width="">Số hợp đồng</th>
                                    <th width="">Loại hình bảo hiểm</th>
                                    <th class="desktop">Gói HĐ</th>
                                    <th width="">Khách hàng</th>
                                    <th class="desktop">Số lượng xe</th>
                                    <th>Trạng thái</th>
                                    <th class="desktop">Hạn dùng</th>
                                    <th class="desktop">Đề nghị</th>
                                    <th class="all w1p" data-orderable="false">#</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>24/07/2020</td>
                                        <td>012000006/B01</td>
                                        <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                        <td></td>
                                        <td>Tap Doan Vien Thong Quan Doi - Viettel</td>
                                        <td>0</td>
                                        <td>Chưa sử dụng</td>
                                        <td>24/07/2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>21/07/2020</td>
                                        <td>012000035/B02</td>
                                        <td>B02 - Bảo hiểm mọi rủi ro tài sản</td>
                                        <td></td>
                                        <td>SEOJIN VINA CO</td>
                                        <td>0</td>
                                        <td>Chưa sử dụng</td>
                                        <td>21/07/2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>17/07/2020</td>
                                        <td>012000017/J06</td>
                                        <td>J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật </td>
                                        <td></td>
                                        <td>KRIC Engineering 1st&2nd Surplus Treaty 2012-1st Quarter 2019-WIS</td>
                                        <td>0</td>
                                        <td>Đã sử dụng</td>
                                        <td>17/07/2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="#" data-toggle="modal" data-target="#xin_cap_hop_dong" class="btn btn-labeled btn-labeled-left mr-1"><b><i class="icon-file-check"></i></b> Xin cấp số hợp đồng</a>
                    <a href="#" class="btn bg-primary btn-labeled btn-labeled-left"><b><i class="icon-checkmark4"></i></b> Chọn</a>
                </div>
            </div>
        </div>
    </div>
    <!-- / Danh sách hợp đồng xin cấp -->
    <?php inc('modal/modal_xin_cap_hop_dong.php'); ?> 
    <?php inc('modal/modal_xin_gia_han_hop_dong.php'); ?> 
    <?php inc('modal/modal_xin_huy_hop_dong.php'); ?> 
</div>