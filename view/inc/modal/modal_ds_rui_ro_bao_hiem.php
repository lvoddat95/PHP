<!-- Danh sách rủi ro được bảo hiểm -->
<div id="ds_rui_ro_bao_hiem" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Danh sách rủi ro được bảo hiểm</h5>
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
                                            <th>Mã rủi ro</th>
                                            <th>Tên rủi ro bảo hiểm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($GLOBALS["rui_ro_b17"]) && $GLOBALS["rui_ro_b17"] == 'b17') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>Cháy, sét đánh, nổ</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>Máy bay rơi</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>Giông, lốc, bão</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>Lũ lụt</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>Đình công, bạo động</td>
                                            </tr>
                                       
                                        <?php else: ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>Cháy, nổ bắt buộc</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>Sét đánh trực tiếp</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>A: Hỏa hoạn, sét, nổ</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>B: Nổ</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>C: Máy bay và các phương tiện hàng không khác hoặc các thiết bị trên phương tiện đó rơi trúng</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>D: Gây rối, đình công, bế xưởng</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>E: Thiệt hại do hành động ác ý</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>F: Động đất hoặc núi lửa phun, bao gồm cả lũ lụt và nước biển dâng do hậu quả của động đất và núi lửa phun</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>G: Giông và bão</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>H: Giông, bão, lụt</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>I: Tràn nước từ các bể và thiết bị chứa nước hoặc đường ống dẫn nước</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_RUI_RO</td>
                                                <td>J: Đâm va do xe cộ hoặc súc vật</td>
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