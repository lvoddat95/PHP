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
                                            <!-- <optgroup label="Bảo hiểm Tai nạn"> -->
                                                <option value="" >Bảo hiểm Tai nạn</option>
                                                <option value="" >Chi phí y tế do tai nạn</option>
                                                <option value="" >Chi phí xe cứu thương</option>
                                                <option value="" >Chi phí xe taxi</option>
                                                <option value="" >Trợ cấp giáo dục</option>
                                                <option value="" >Trợ cấp mai táng</option>
                                                <option value="" >Khác</option>
                                            <!-- </optgroup> -->
                                            <!-- <optgroup label="Điều trị nội trú do ốm bệnh, thai sản"> -->
                                                <option value="" >Điều trị nội trú do ốm bệnh, thai sản</option>
                                                <option value="" >Giới hạn 1 ngày nằm viện</option>
                                                <option value="" >Giới hạn tiền giường cho 1 ngày nằm viện</option>
                                                <option value="" >Điều trị trong ngày</option>
                                                <option value="" >Giới hạn điều trị tại phòng ICU</option>
                                                <option value="" >Phẫu thuật</option>
                                                <option value="" >Phẫu thuật nội trú</option>
                                                <option value="" >Phẫu thuật trong ngày</option>
                                                <option value="" >Phẫu thuật ngoại trú</option>
                                                <option value="" >Thủ thuật</option>
                                                <option value="" >Phẫu thuật tạo hình</option>
                                                <option value="" >Chi phí khám trước nhập viện và điều trị sau xuất viện</option>
                                                <option value="" >Chi phí trước nhập viện</option>
                                                <option value="" >Điều trị sau xuất viện</option>
                                                <option value="" >Y tá chăm sóc tai nhà</option>
                                                <option value="" >Vận chuyển khẩn cấp</option>
                                                <option value="" >Vận chuyển khẩn cấp bằng taxi</option>
                                                <option value="" >Trợ cấp ngày nằm viện</option>
                                                <option value="" >Trợ cấp tại BV công</option>
                                                <option value="" >Trợ cấp tại BV công và sử dụng BHYT</option>
                                                <option value="" >Trợ cấp tại các bệnh viện khác</option>
                                                <option value="" >Trợ cấp sử dụng thẻ bảo hiểm y tế</option>
                                                <option value="" >Thai sản</option>
                                                <option value="" >Sinh thường hoặc biến chứng thai sản không cần phẫu thuật</option>
                                                <option value="" >Sinh mổ hoặc biến chứng thai sản cần phẫu thuật</option>
                                                <option value="" >Sinh mổ</option>
                                                <option value="" >Biến chứng thai sản phải phẫu thuật</option>
                                                <option value="" >Chăm sóc trẻ sơ sinh</option>
                                                <option value="" >Cấy ghép nội tạng</option>
                                                <option value="" >Trợ cấp sinh tại BV công</option>
                                                <option value="" >Trợ cấp sinh tại BV công có sử dụng BHYT</option>
                                                <option value="" >Điều trị tại phòng cấp cứu</option>
                                                <option value="" >Phục hồi chức năng</option>
                                                <option value="" >Mai táng phí</option>
                                                <option value="" >Trợ cấp phần đồng chi trả với BHYT</option>
                                                <option value="" >Quyền lợi khác</option>
                                            <!-- </optgroup> -->
                                            <!-- <optgroup label="Điều trị ngoại trú do ốm bệnh, thai sản"> -->
                                                <option value="" >Điều trị ngoại trú do ốm bệnh, thai sản</option>
                                                <option value="" >Giới hạn tối đa 1 lần khám</option>
                                                <option value="" >Giới hạn chi phí vật tư y tế (Xisat, Sterimar, Nacl…)</option>
                                                <option value="" >Vitamin, thuốc bổ</option>
                                                <option value="" >Chlamydia, nấm Candida, tạp khuẩn</option>
                                                <option value="" >Khám không ra bệnh</option>
                                                <option value="" >Khám ra bệnh nhưng chưa có hướng điều trị</option>
                                                <option value="" >Khám ra bệnh có hướng điều trị chưa có đơn thuốc</option>
                                                <option value="" >Xét nghiệm, SA, chụp chiếu ngoài phạm vi BH</option>
                                                <option value="" >Khám tại phòng mạch tư</option>
                                                <option value="" >Chi phí dược mỹ phẩm</option>
                                                <option value="" >Chi phí theo yêu cầu tại BV công (trừ khoa QT, khoa tự nguyện…)</option>
                                                <option value="" >Chi phí vật lý trị liệu</option>
                                                <option value="" >Chi phí vật lý trị liệu tại PK đặc biệt</option>
                                                <option value="" >Khám thai định kỳ</option>
                                                <option value="" >Điều trị răng cơ bản</option>
                                                <option value="" >Lấy cao răng</option>
                                                <option value="" >Quyền lợi răng khác</option>
                                            <!-- </optgroup> -->
                                            <!-- <optgroup label="Điều trị răng toàn diện"> -->
                                                <option value="" >Điều trị răng toàn diện</option>
                                                <option value="" >Giới hạn lấy cao răng</option>
                                            <!-- </optgroup> -->

                                            <option value="" >Khám sức khỏe định kỳ</option>
                                            <option value="" >Quyền lợi mở rộng khác</option>
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