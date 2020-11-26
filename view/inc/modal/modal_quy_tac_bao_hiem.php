<!--  -->
<div id="quy_tac_bao_hiem" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Quy tắc bảo hiểm</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    
                    <table class="table table-bordered datatable"  
                        data-paging="false"
                        data-info="false"
                        data-ordering="false"
                        data-searching="false" >
                        <thead class="thead-light">
                            <tr>
                                <th width="30px"><input type="checkbox" value=""></th>
                                <th>Mã quy tắc</th>
                                <th>Quy tắc bảo hiểm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($GLOBALS["quy_tac_bao_hiem_b01"]) && $GLOBALS["quy_tac_bao_hiem_b01"] == 'b01') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Hoả hoạn và các rủi ro đặc biệt (phần thiệt hại tài sản) ban hành kèm theo Quyết định số 31/2019/QĐ-BHHK ngày 09/01/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm hỏa hoạn và các rủi ro đặc biệt (Phần gián đoạn kinh doanh) ban hành kèm theo Quyết định số 32/2019/QĐ-BHHK ngày 09/01/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Nghị định 23/2018/NĐ-CP ban hành ngày 23/02/2018 của Chính Phủ về bảo hiểm cháy nổ, bắt buộc</td>
                                </tr>
                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem_b02"]) && $GLOBALS["quy_tac_bao_hiem_b02"] == 'b02') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Nghị định 23/2018/NĐ-CP ban hành ngày 23/02/2018 của Chính Phủ về bảo hiểm cháy nổ, bắt buộc</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Mọi rủi ro tài sản ban hành kèm theo Quyết định số 33/2019/QĐ-BHHK ngày 09/01/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Mọi rủi ro tài sản (Phần gián đoạn kinh doanh) ban hành kèm theo Quyết định số 34/2019/QĐ-BHHK ngày 09/01/2019 của Tổng giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem_b04"]) && $GLOBALS["quy_tac_bao_hiem_b04"] == 'b04') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Mọi rủi ro văn phòng ban hành kèm theo Quyết định số 35/2019/QĐ-BHHK ngày 09/01/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>

                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem_b06"]) && $GLOBALS["quy_tac_bao_hiem_b06"] == 'b06') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc Bảo hiểm Mọi rủi ro về tiền Ban hành kèm theo Quyết định số 19/2019/QĐ-BHHK ngày 09/01/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng không</td>
                                </tr>

                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem_b07"]) && $GLOBALS["quy_tac_bao_hiem_b07"] == 'b07') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc Bảo hiểm hư hỏng hàng hóa trong kho lạnh Ban hành kèm theo Quyết định số 30/2019/QĐ-BHHK ngày 09/01/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng không</td>
                                </tr>

                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem_b12"]) && $GLOBALS["quy_tac_bao_hiem_b12"] == 'b12') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc Bảo hiểm bảng hiệu, đèn quảng cáo Ban hành kèm theo Quyết định số 36/2019/QĐ-BHHK ngày 09/01/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng không</td>
                                </tr>

                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem_b17"]) && $GLOBALS["quy_tac_bao_hiem_b17"] == 'b17') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc Bảo hiểm vườn cây cao su Ban hành kèm theo Quyết định số 41/2019/QĐ-BHHK ngày 09/01/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng không</td>
                                </tr>

                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem_b16"]) && $GLOBALS["quy_tac_bao_hiem_b16"] == 'b16') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Nhà tư nhân ban hành kèm theo Quyết định số 37/2019/QĐ-BHHK ngày 09/01/2019 của Tổng giám đốc Tổng Công ty  Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Nhà tư nhân ban hành kèm theo Quyết định số 38/2019/QĐ-BHHK ngày 09/01/2019 của Tổng giám đốc Tổng Công ty  Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Nhà tư nhân ban hành kèm theo Quyết định số 39/2019/QĐ-BHHK ngày 09/01/2019 của Tổng giám đốc Tổng Công ty  Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                            <?php else: ?>
                                
                            <?php endif; ?>
                        </tbody>
                    </table>
                   
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn bg-primary"><i class="icon-checkmark4 mr-1"></i>Chọn</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /  -->