<!-- Danh sách quyền lợi bảo hiểm -->
<div id="ds_quyen_loi_bh" class="modal-none fancybox-content-xl">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Danh sách quyền lợi bảo hiểm và giới hạn phụ</h5>
                <button type="button" class="close" data-fancybox-close><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group" repeater>
                        <table class="table table-sm table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th rowspan="2" class="w5p">Mã quyền lợi</th>
                                    <th rowspan="2" class="w10p">Tên quyền lợi</th>
                                    <th rowspan="2" class="w5p">Loại</th>
                                    <th rowspan="2" class="w6p">Số tiền BH</th>
                                    <th rowspan="2" class="w6p">STBH tối đa/vụ</th>
                                    <th rowspan="2" class="w6p">STBH tối đa/năm</th>
                                    <th rowspan="2" class="w6p">Số lần BH tối đa</th>
                                    <th colspan="2" class="text-center">Khẩu trừ theo vụ</th>
                                    <th rowspan="2" class="w1p">Tỉ lệ phí/năm</th>
                                    <th rowspan="2" class="w3p">Tỉ lệ Disc</th>
                                    <th rowspan="2" class="w6p">Phí/năm</th>
                                    <th rowspan="2" class="w6p">Ghi chú</th>
                                    <th rowspan="2" class="w1p text-center">#</th>
                                </tr>
                                <tr>
                                    <th class="w3p">Tỷ lệ (%)/vụ</th>
                                    <th class="w6p">Số tiền/vụ</th>
                                </tr>
                            </thead>
                            <tbody data-repeater-list="repeater-child">
                                <tr data-repeater-item>
                                    <td><input type="text" class="form-control" id="ma_ql"></td>
                                    <td>
                                        <select select2>
                                            <option value="">--- Chọn ---</option>
                                            <option value="">Trợ cấp</option>
                                            <option value="">Trợ cấp nghỉ điều trị nội trú do ốm bệnh</option>
                                            <option value="">Lấy cao răng</option>
                                            <option value="">Điều trị răng</option>
                                            <option value="">Số ngày</option>
                                            <option value="">Chi phí vật lý trị liệu</option>
                                            <option value="">Giới hạn số lần khám</option>
                                            <option value="">Chi phí điều trị ngoại trú</option>
                                            <option value="">Điều trị ngoại trú do ốm bệnh, thai sản</option>
                                            <option value="">Mai táng phí</option>
                                            <option value="">Phục hồi chức năng</option>
                                            <option value="">Vận chuyển cấp cứu bằng xe taxi</option>
                                            <option value="">Vận chuyển cấp cứu</option>
                                            <option value="">Điều trị tại phòng cấp cứu</option>
                                            <option value="">Trợ cấp sinh tại BV công có sử dụng BHYT</option>
                                            <option value="">Trợ cấp sinh tại BV công</option>
                                            <option value="">Chăm sóc trẻ sơ sinh</option>
                                            <option value="">Sinh mổ hoặc biến chứng thai sản cần phẫu thuật</option>
                                            <option value="">Sinh thường hoặc biến chứng thai sản không cần phẫu thuật</option>
                                            <option value="">Thai sản</option>
                                            <option value="">Trợ cấp sử dụng thẻ bảo hiểm y tế</option>
                                            <option value="">Điều trị tại các bệnh viện khác</option>
                                            <option value="">Điều trị tại BV công và sử dụng BHYT</option>
                                            <option value="">Điều trị tại BV công</option>
                                            <option value="">Trợ cấp ngày nằm viện</option>
                                            <option value="">Y tá chăm sóc tai nhà</option>
                                            <option value="">Điều trị sau xuất viện</option>
                                            <option value="">Chi phí trước nhập viện</option>
                                            <option value="">Phẫu thuật</option>
                                            <option value="">Số ngày/năm</option>
                                            <option value="">Tiền giường</option>
                                            <option value="">Giới hạn 1 ngày nằm viện</option>
                                            <option value="">Điều trị nội trú do ốm bệnh, thai sản</option>
                                            <option value="">Quyền lợi khác</option>
                                            <option value="">Trợ cấp giáo dục</option>
                                            <option value="">Chi phí y tế do tai nạn</option>
                                            <option value="">Trợ cấp lương (theo số tiền cố định)</option>
                                            <option value="">Trợ cấp lương (theo lương thực nhận)</option>
                                            <option value="">Tử vong/Thương tật vĩnh viễn do tai nạn</option>
                                            <option value="">Tai nạn</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control input-money text-right" placeholder="0"></td>
                                    <td><input type="text" class="form-control input-money text-right" placeholder="0"></td>
                                    <td><input type="text" class="form-control input-money text-right" placeholder="0"></td>
                                    <td><input type="text" class="form-control input-money text-right" placeholder="0"></td>

                                    <td><input type="text" class="form-control input-float text-right" placeholder="0.0"></td>
                                    <td><input type="text" class="form-control input-money text-right" placeholder="0"></td>

                                    <td><input type="text" class="form-control input-float text-right" placeholder="0.0"></td>
                                    <td><input type="text" class="form-control input-float text-right" placeholder="0.0"></td>
                                    <td><input type="text" class="form-control input-money text-right" placeholder="0"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td class="text-center">
                                        <a href="javascript:;" data-repeater-delete class="text-danger"><i class="icon-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="border p-1" style="margin-top: -1px;">
                            <a href="javascript:;" data-repeater-create class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i><span>Thêm quyền lợi</span></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Danh sách quyền lợi bảo hiểm