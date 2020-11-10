<!-- Danh sách rủi ro được bảo hiểm -->
<div id="ds_dieu_kien_bao_hiem" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Danh sách điều kiện bảo hiểm</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered datatable"  
                                    data-paging="false"
                                    data-info="false"
                                    data-ordering="false"
                                    data-searching="false" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="30px"><input type="checkbox" value=""></th>
                                            <th>Điều kiện bảo hiểm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($GLOBALS["dieu_kien_bao_hiem_b02"]) && $GLOBALS["dieu_kien_bao_hiem_b02"] == 'b02') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Cháy, nổ bắt buộc</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Mọi rủi ro tài sản</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Gián đoạn kinh doanh sau mọi rủi ro tài sản</td>
                                            </tr>
                                        <?php elseif (!empty($GLOBALS["dieu_kien_bao_hiem_b05"]) && $GLOBALS["dieu_kien_bao_hiem_b05"] == 'b05') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Mọi rủi ro nhà ở</td>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Cháy, nổ bắt buộc</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Cháy, nổ tự nguyện</td>
                                            </tr>
                                        <?php endif; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn bg-primary btn-labeled btn-labeled-left"><b><i class="icon-checkmark4"></i></b> Chọn</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Danh sách rủi ro được bảo hiểm -->