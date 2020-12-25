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
                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem"]) && $GLOBALS["quy_tac_bao_hiem"] == 'dxx') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quyết định số 200/2019/QD-BHHK ngày 01/04/2019 của Tổng Giám đốc Tổng Công ty Cô phằn Bảo hiềm Hàng Không về việc Áp dung Bộ điều khoán bao hiểm Tàu thuyền ITC</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quyết định số 201/2019/QĐ-BHHK ngày 01/04/2019 của Tồng Giám đốc Tồng Còng ty cồ phần Báo hiểm Hàng Không về việc Áp dung Bộ diều khoán bố sung Tàu thuyền</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoán bảo hiếm thời hạn thân tàu 1/11/95 (Institute Time Clauses - Hulls 1/11/95)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoán bào hiểm thời hạn thân tàu tồn thất toàn bộ 1/11/95 (Institute l ime Clauses ~ Hulls Total Loss Only 1/11/95)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoàn chiến tranh và đinh công thời hạn thân tàu 1/11/95 (Institute War and Strikes Clauses Hulls - Time 1/11/95)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoản báo hiểm thân tàu chuyến 01/11/1995 (Instituc voyage clauses ~ hulls 01/11/1995)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoản bảo hiểm chiến tranh và đình công thân tàu chuyến 01/11/1995 (Institute war and strikes clauses hulls - voyage 01/11/1995)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoán bao hiem thời hạn thân tàu rủi ro trong cảng 20/7/87 (Institute rime Clauses Hulls Port Risks 20/7/87)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoản bào hiểm thời hạn thân tàu rui ro trong cảng (bao gôm hành hải có giới hạn) (Institute Time Clauses Hulls Port Risks (Including Limited Navigation) 20/7/87)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoán bão hiềm trách nhiệm dân sự chu tàu - thời hạn thân tâu 20/7/87 (Institute Protection and Indemnity Clauses Hulls Time 20/7/87)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoản chiến tranh đình cônĩ trách nhiệm dân sự - thời hạn thân tàu 20/7/87 (Institute Protection and Indemnity War and Strikes Clauses Hulls Time 20/7/87)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoán Bao hiếm rùi ro nhà thau đỏng tàu 01/6/1988 (Institute clauses for builders’ risks 01/6/1988)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoản báo hiểm chiến tranh rủi ro đóng tàu 01/6/1988 (Institute war clauses binders’ risks 01/6/1988)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Điều khoán bào hiểm đinh công rủi ro đỏng tàu 01/6/1988 (Institute strikes clauses buidcrs’ risks 01/6/1988)</td>
                                </tr>
                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem"]) && $GLOBALS["quy_tac_bao_hiem"] == 'd02') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Thân tàu sông, tàu ven biển ban hành kèm theo Quyết định số 195/2019/QĐ-BHHK ngày 01/04/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm TNDS chủ tàu sông, tàu ven biển ban hành kèm theo Quyết định số 196/2019/QĐ-BHHK ngày 01/04/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc biểu phí bảo hiểm Tai nạn thuyền viên ban hành kèm theo Quyết định số 199/2019/QĐ-BHHK ngày 01/04/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>

                            <?php elseif (!empty($GLOBALS["quy_tac_bao_hiem"]) && $GLOBALS["quy_tac_bao_hiem"] == 'd03') : ?>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm Thân tàu cá ban hành kèm theo Quyết định số 197/2019/QĐ-BHHK ngày 01/04/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc bảo hiểm TNDS chủ tàu cá ban hành kèm theo Quyết định số 198/2019/QĐ-BHHK ngày 01/04/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td>MAQUYTAC</td>
                                    <td>Quy tắc biểu phí bảo hiểm Tai nạn thuyền viên ban hành kèm theo Quyết định số 199/2019/QĐ-BHHK ngày 01/04/2019 của Tổng Giám đốc Tổng Công ty Cổ phần Bảo hiểm Hàng Không</td>
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