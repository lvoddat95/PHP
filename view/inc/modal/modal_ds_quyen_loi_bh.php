<!-- Danh sách quyền lợi bảo hiểm -->
<div id="ds_quyen_loi_bh" class="modal-none ">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Danh sách quyền lợi bảo hiểm và giới hạn phụ</h5>
                <button type="button" class="close" data-fancybox-close><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group" repeater>
                        <table class="table table-bordered table-hover datatable child-row-sm" data-control-right="true" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                            <thead class="thead-light">
                                <tr>
                                    <th class="w10p">Mã quyền lợi</th>
                                    <th class="w20p">Tên quyền lợi</th>

                                    <th class="w10p desktop text-center">GH Năm</th>
                                    <th class="w10p desktop text-center">GH Ngày</th>
                                    <th class="w10p desktop text-center">GH Bệnh</th>
                                    <th class="w10p desktop text-center">GH Vụ</th>
                                    <th class="w10p desktop text-center">Mã NTE</th>
                                    <th class="w10p desktop text-center">PVI</th>
                                    <th class="w10p desktop text-center">Phí</th>

                                    <th class="w10p none">TV Ngày</th>
                                    <th class="w10p none">BHYT</th>
                                    <th class="w10p none">Tự chi trả</th>
                                    <th class="w10p none">Số ngày</th>
                                    <th class="w10p none">Tỉ lệ tái</th>
                                    <th class="w10p none">K tái</th>
              
                                    <th class="w1p text-center">#</th>
                                </tr>
                            </thead>
                            <tbody data-repeater-list="repeater-child">
                                <tr data-repeater-item>
                                    <td><input type="text" class="form-control" readonly></td>
                                    <td>
                                        <select class="form-control" select2>
                                            <option value="">--- Chọn ---</option>
                                            <option value="">A.1 - Bảo hiểm Tai nạn</option>
                                            <option value="">A.1.01 - Chi phí y tế do tai nạn</option>
                                            <option value="">A.1.01.01 - Chi phí xe cứu thương</option>
                                            <option value="">A.1.01.02 - Chi phí xe taxi</option>
                                            <option value="">A.1.02 - Trợ cấp giáo dục</option>
                                            <option value="">A.1.03 - Trợ cấp mai táng</option>
                                            <option value="">A.1.04 - Khác</option>
                                            <option value="">A.2 - Điều trị nội trú do ốm bệnh, thai sản</option>
                                            <option value="">A.2.01 - Giới hạn 1 ngày nằm viện</option>
                                            <option value="">A.2.01.02 - Giới hạn tiền giường cho 1 ngày nằm viện</option>
                                            <option value="">A.2.02 - Điều trị trong ngày</option>
                                            <option value="">A.2.03 - Giới hạn điều trị tại phòng ICU</option>
                                            <option value="">A.2.04 - Phẫu thuật</option>
                                            <option value="">A.2.04.01 - Phẫu thuật nội trú</option>
                                            <option value="">A.2.04.02 - Phẫu thuật trong ngày</option>
                                            <option value="">A.2.04.03 - Phẫu thuật ngoại trú</option>
                                            <option value="">A.2.04.04 - Thủ thuật</option>
                                            <option value="">A.2.04.05 - Phẫu thuật tạo hình</option>
                                            <option value="">A.2.05 - Chi phí khám trước nhập viện và điều trị sau xuất viện</option>
                                            <option value="">A.2.06 - Chi phí trước nhập viện</option>
                                            <option value="">A.2.07 - Điều trị sau xuất viện</option>
                                            <option value="">A.2.08 - Y tá chăm sóc tai nhà</option>
                                            <option value="">A.2.09 - Vận chuyển khẩn cấp</option>
                                            <option value="">A.2.09.01 - Vận chuyển khẩn cấp bằng taxi</option>
                                            <option value="">A.2.10 - Trợ cấp ngày nằm viện</option>
                                            <option value="">A.2.10.01 - Trợ cấp tại BV công</option>
                                            <option value="">A.2.10.02 - Trợ cấp tại BV công và sử dụng BHYT</option>
                                            <option value="">A.2.10.03 - Trợ cấp tại các bệnh viện khác</option>
                                            <option value="">A.2.10.04 - Trợ cấp sử dụng thẻ bảo hiểm y tế</option>
                                            <option value="">A.2.11 - Thai sản</option>
                                            <option value="">A.2.11.01 - Sinh thường hoặc biến chứng thai sản không cần phẫu thuật</option>
                                            <option value="">A.2.11.02 - Sinh mổ hoặc biến chứng thai sản cần phẫu thuật</option>
                                            <option value="">A.2.11.02.01 - Sinh mổ</option>
                                            <option value="">A.2.11.02.02 - Biến chứng thai sản phải phẫu thuật</option>
                                            <option value="">A.2.12 - Chăm sóc trẻ sơ sinh</option>
                                            <option value="">A.2.13 - Cấy ghép nội tạng</option>
                                            <option value="">A.2.14 - Trợ cấp sinh tại BV công</option>
                                            <option value="">A.2.15 - Trợ cấp sinh tại BV công có sử dụng BHYT</option>
                                            <option value="">A.2.16 - Điều trị tại phòng cấp cứu</option>
                                            <option value="">A.2.17 - Phục hồi chức năng</option>
                                            <option value="">A.2.18 - Mai táng phí</option>
                                            <option value="">A.2.19 - Trợ cấp phần đồng chi trả với BHYT</option>
                                            <option value="">A.2.20 - Quyền lợi khác</option>
                                            <option value="">A.3 - Điều trị ngoại trú do ốm bệnh, thai sản</option>
                                            <option value="">A.3.01 - Giới hạn tối đa 1 lần khám</option>
                                            <option value="">A.3.01.01 - Giới hạn chi phí vật tư y tế (Xisat, Sterimar, Nacl…)</option>
                                            <option value="">A.3.01.02 - Vitamin, thuốc bổ</option>
                                            <option value="">A.3.01.03 - Chlamydia, nấm Candida, tạp khuẩn</option>
                                            <option value="">A.3.01.04 - Khám không ra bệnh</option>
                                            <option value="">A.3.01.05 - Khám ra bệnh nhưng chưa có hướng điều trị</option>
                                            <option value="">A.3.01.06 - Khám ra bệnh có hướng điều trị chưa có đơn thuốc</option>
                                            <option value="">A.3.01.07 - Xét nghiệm, SA, chụp chiếu ngoài phạm vi BH</option>
                                            <option value="">A.3.01.08 - Khám tại phòng mạch tư</option>
                                            <option value="">A.3.01.09 - Chi phí dược mỹ phẩm</option>
                                            <option value="">A.3.01.10 - Chi phí theo yêu cầu tại BV công (trừ khoa QT, khoa tự nguyện…)</option>
                                            <option value="">A.3.02 - Chi phí vật lý trị liệu</option>
                                            <option value="">A.3.02.01 - Chi phí vật lý trị liệu tại PK đặc biệt</option>
                                            <option value="">A.3.03 - Khám thai định kỳ</option>
                                            <option value="">A.3.04 - Điều trị răng cơ bản</option>
                                            <option value="">A.3.04.01 - Lấy cao răng</option>
                                            <option value="">A.3.04.02 - Quyền lợi răng khác</option>
                                            <option value="">A.4 - Điều trị răng toàn diện</option>
                                            <option value="">A.4.01 - Giới hạn lấy cao răng</option>
                                            <option value="">A.5 - Khám sức khỏe định kỳ</option>
                                            <option value="">A.6 - Quyền lợi mở rộng khác</option>
                                        </select>
                                    </td>

                                    <td><input type="text" class="form-control text-center"></td>
                                    <td><input type="text" class="form-control text-center"></td>
                                    <td><input type="text" class="form-control text-center"></td>
                                    <td><input type="text" class="form-control text-center"></td>
                                    <td><input type="text" class="form-control text-center"></td>
                                    <td><input type="text" class="form-control text-center"></td>
                                    <td><input type="text" class="form-control input-float text-center" placeholder="0.0"></td>

                                    <td><input type="text" class="form-control col-content-md"></td>
                                    <td><input type="text" class="form-control col-content-md"></td>
                                    <td><input type="text" class="form-control col-content-md"></td>
                                    <td><input type="text" class="form-control col-content-md"></td>
                                    <td><input type="text" class="form-control col-content-md"></td>
                                    <td><input type="text" class="form-control col-content-md"></td>
                                    
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