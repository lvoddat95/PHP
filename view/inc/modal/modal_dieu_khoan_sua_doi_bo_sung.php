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
                                    <th class="w1p"></th>
                                </tr>
                            </thead>
                            <tbody data-repeater-list="dksdbs">
                                <tr data-repeater-item style="display: none;">
                                    <td><input type="checkbox" value=""></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                </tr>
                                <?php if (!empty($GLOBALS["dk_sua_doi_bo_sung"]) && $GLOBALS["dk_sua_doi_bo_sung"] == 'g') : ?>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td><input type="text" class="form-control" value=""></td>
                                        <td><input type="text" class="form-control" value=""></td>
                                        <td><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                <?php else: ?>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về mở rộng thời hạn bảo hiểm 30 ngày với phí bảo hiểm bổ sung tính theo tỷ lệ</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Vi phạm các cam kết</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản quy định về thông báo tổn thất</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Không mất hiệu lực bảo hiểm</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Thanh toán bồi thường tạm ứng</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="" checked disabled></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Cam kết thanh toán phí bảo hiểm</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value="" checked disabled></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản cam kết đảm bảo bảo vệ 24/24h</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản Quy định về phòng cháy chữa cháy</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Tiền tệ</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về Điều chỉnh thời gian</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản Chỉ định giám định tổn thất</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>MADIEUKHOAN</td>
                                        <td>Điều khoản về tự động khôi phục Số tiền bảo hiểm</td>
                                        <td><input disabled data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                    </tr>
                                <?php endif; ?>

                                    
                            </tbody>
                        </table>
                        <div class="border p-1 text-center"><input class="btn bg-success" data-repeater-create type="button" value="+ Thêm"/></div>

                    </div>
                   
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn bg-primary"><i class="icon-checkmark4 mr-1"></i>Chọn</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /  -->