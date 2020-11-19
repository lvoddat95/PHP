<!-- Danh sách rủi ro được bảo hiểm -->
<?php 
    $modal_size = 'modal-sm';
    if (!empty($GLOBALS["dieu_kien_bao_hiem_c01"]) && $GLOBALS["dieu_kien_bao_hiem_c01"] == 'c01') {
        $modal_size = 'modal-lg';
    }
?>
<div id="ds_dieu_kien_bao_hiem" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog <?php echo $modal_size; ?>">
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
                                        <?php elseif (!empty($GLOBALS["dieu_kien_bao_hiem_c01"]) && $GLOBALS["dieu_kien_bao_hiem_c01"] == 'c01') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Bảo hiểm thiệt hại vật chất đối với các rủi ro bất ngờ và không lường trước được trong quá trình xây dựng, lắp đặt các hạng mục thuộc dự án: ………………”tên dự án” do bất kỳ nguyên nhân nào gây ra ngoại trừ những nguyên nhân bị loại trừ được nêu trong Quy tắc bảo hiểm mọi rủi ro xây dựng ban hành theo Quyết định số 21/2019/QĐ-BHHK ngày 09 tháng 01 năm 2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng không).</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Bảo hiểm thiệt hại vật chất đối với các rủi ro bất ngờ và không lường trước được trong quá trình xây dựng, lắp đặt các hạng mục thuộc dự án: ………………”tên dự án” do bất kỳ nguyên nhân nào gây ra ngoại trừ những nguyên nhân bị loại trừ được nêu trong Thông tư 329/2016/TT-BTC ngày 26 tháng 12 năm 2016 của Bộ Tài chính.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>Bảo hiểm trách nhiệm bên thứ ba đối với các rủi ro bất ngờ và không lường trước được trong quá trình xây dựng, lắp đặt các hạng mục thuộc dự án: ………………”tên dự án” do bất kỳ nguyên nhân nào gây ra ngoại trừ những nguyên nhân bị loại trừ được nêu trong Quy tắc bảo hiểm mọi rủi ro xây dựng ban hành theo Quyết định số 21/2019/QĐ-BHHK ngày 09 tháng 01 năm 2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng không).</td>
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