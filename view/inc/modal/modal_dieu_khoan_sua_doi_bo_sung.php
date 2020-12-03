<!--  -->
<div id="dieu_khoan_sua_doi_bo_sung" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Cập nhập các điều khoản sửa đổi bổ sung</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">

                    <div repeater>
                    
                        <table class="table table-bordered datatable"  
                            data-paging="false"
                            data-info="false"
                            data-ordering="false"
                            data-searching="false" >
                            <thead class="thead-light">
                                <tr>
                                    <th width="30px"><input type="checkbox" value=""></th>
                                    <th class="desktop w20p">Mã điều khoản</th>
                                    <th>Điểu khoản sửa đổi bổ sung</th>
                                </tr>
                            </thead>
                            <tbody data-repeater-list="dksdbs">
                                <tr data-repeater-item style="display: none;">
                                    <td><input type="checkbox" value=""></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <?php if (!empty($GLOBALS["dk_sua_doi_bo_sung"]) && $GLOBALS["dk_sua_doi_bo_sung"] == 'g') : ?>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td><input type="text" class="form-control" value=""></td>
                                        <td><input type="text" class="form-control" value=""></td>
                                    </tr>

                                <?php elseif (!empty($GLOBALS["dk_sua_doi_bo_sung"]) && $GLOBALS["dk_sua_doi_bo_sung"] == 'h03') : ?>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Thông báo hủy bảo hiểm trước 30 ngày</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Rò rỉ, ô nhiễm và nhiễm bẩn bất ngờ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Thay đổi và sửa chữa (giới hạn: ……..)</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Tự động mở rộng thời hạn bảo hiểm (30 ngày)</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Nổ nồi hơi</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Vi phạm điều kiện & cam kết bảo hiểm</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Trách nhiệm bãi đỗ xe</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Nhà thầu độc lập</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Trách nhiệm chéo</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản chuyển đổi tiền tệ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Thiệt hại do nước chữa cháy</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Trách nhiệm của người thuê nhà</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Ngộ độc thức ăn, uống</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Trưng bày và triển lãm</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Tài sản của nhân viên và khách</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Mô tả sai</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Trách nhiệm đối với xe cộ không thuộc sở hữu</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Đèn hiệu quảng cáo</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Trách nhiệm chủ sở hữu tài sản</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Thang máy, thang nâng</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Chi phí cấp cứu y tế (giới hạn: ......)</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Chất dỡ hàng hoá</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Việc cá nhân cho giám đốc và người điều hành</td>
                                    </tr>

                                <?php else: ?>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về mở rộng thời hạn bảo hiểm 30 ngày với phí bảo hiểm bổ sung tính theo tỷ lệ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Vi phạm các cam kết</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản quy định về thông báo tổn thất</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Không mất hiệu lực bảo hiểm</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Thanh toán bồi thường tạm ứng</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="" checked disabled></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Cam kết thanh toán phí bảo hiểm</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="" checked disabled></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản cam kết đảm bảo bảo vệ 24/24h</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản Quy định về phòng cháy chữa cháy</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Tiền tệ</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Điều chỉnh thời gian</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản Chỉ định giám định tổn thất</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về tự động khôi phục Số tiền bảo hiểm</td>
                                    </tr>
                                <?php endif; ?>

                                    
                            </tbody>
                        </table>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-success" data-toggle="modal" data-target="#cap_nhap_dieu_khoan_sua_doi_bo_dung">+ Thêm</button>
                    <a href="#" class="btn bg-primary"><i class="icon-checkmark4 mr-1"></i>Chọn</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php inc('modal/modal_cap_nhap_dieu_khoan_sua_doi_bo_dung.php'); ?>
<!-- /  -->