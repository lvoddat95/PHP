<div id="dong-bh" class="border-group form-group box-shadow mt-2 mb-3" style="display: none;">
    <div class="mb-2">
        <span class="font-weight-semibold"><i class="icon-info22 mr-1"></i>Đồng bảo hiểm </span>
    </div>
    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label>Hình thức thu phí của các công ty flower: <span class="text-danger">*</span></label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="flower" class="mr-1" name="flower_name" >
                        <label for="flower" class="form-check-label">Thu trực tiếp từ khách hàng</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="flower2" class="mr-1" name="flower_name" >
                        <label for="flower2" class="form-check-label">Thu phí từ công ty bảo hiểm đứng đầu</label>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-12">
            <div class="repeater-obj" repeater>
                <table class=" table table-light datatable"
                    data-paging="false"
                    data-info="false"
                    data-ordering="false"
                    data-searching="false"
                    >
                    <thead class="thead-light">
                        <th width="25%"><b>Tên công ty</b></th>
                        <th width="15%"><b>Vai trò</b></th>
                        <th width="10%"><b>Tỷ lệ ĐBH </b></th>
                        <th width="10%"><b>Phí quản lý (%)</b></th>
                        <th width="20%"><b>Thành tiền phí quản lý ĐBH</b></th>
                        <th width=70px></th>
                    </thead>
                    <tbody data-repeater-list="dbh-cong-ty">
                        <tr data-repeater-item>
                            <td>
                                <select class="form-control required" select2 name="cong_ty">
                                    <option id="" value="" name="">--- Chọn công ty---</option>
                                    <option id="BR-020" name="VNI" value="BR-020">VNI</option>
                                    <option id="BR" name="BIC (thừa, đề nghị không chọn)" value="BR">BIC (thừa, đề nghị không chọn)</option>
                                    <option id="BR-001" name="AON Hà Nội (thừa, đề nghị không chọn)" value="BR-001">AON Hà Nội (thừa, đề nghị không chọn)</option>
                                    <option id="BR-002" name="QBE Mercantile Mutual" value="BR-002">QBE Mercantile Mutual</option>
                                    <option id="BR-003" name="BMS Casualty" value="BR-003">BMS Casualty</option>
                                    <option id="BR-004" name="GRASS-SAVOYE HCMC" value="BR-004">GRASS-SAVOYE HCMC</option>
                                    <option id="BR-005" name="Webster Hyde Health" value="BR-005">Webster Hyde Health</option>
                                    <option id="BR-006" name="JARDINE HANOI" value="BR-006">JARDINE HANOI</option>
                                    <option id="BR-007" name="Marsh Việt Nam" value="BR-007">Marsh Việt Nam</option>
                                    <option id="BR-008" name="SWIRE" value="BR-008">SWIRE</option>
                                    <option id="BR-009" name="AON Hồ Chí Minh (thừa, đề nghị không chọn)" value="BR-009">AON Hồ Chí Minh (thừa, đề nghị không chọn)</option>
                                    <option id="BR-010" name="Grass Savoye Hà Nội (thừa, đề nghị không chọn)" value="BR-010">Grass Savoye Hà Nội (thừa, đề nghị không chọn)</option>
                                    <option id="BR-011" name="JARDINE HCMC" value="BR-011">JARDINE HCMC</option>
                                    <option id="BR-012" name="Asia Pacific Risk Consultants" value="BR-012">Asia Pacific Risk Consultants</option>
                                    <option id="BR-013" name="RIVER INSURANCE MANAGEMENT LTD" value="BR-013">RIVER INSURANCE MANAGEMENT LTD</option>
                                    <option id="BR-014" name="VIET QUOC INSURANCE BROKER" value="BR-014">VIET QUOC INSURANCE BROKER</option>
                                    <option id="BR-015" name="EAST ASIA JOINT STOCK INS BROKER CO LTD" value="BR-015">EAST ASIA JOINT STOCK INS BROKER CO LTD</option>
                                    <option id="BR-016" name="JARDINE LLYOY THOMPSON HONG KONG" value="BR-016">JARDINE LLYOY THOMPSON HONG KONG</option>
                                    <option id="BR-017" name="EAST ASIA JOINT STOCK INS BROKER CO HN" value="BR-017">EAST ASIA JOINT STOCK INS BROKER CO HN</option>
                                    <option id="BR-018" name="AON Thailand" value="BR-018">AON Thailand</option>
                                    <option id="BR-019" name="AON Việt Nam" value="BR-019">AON Việt Nam</option>
                                    <option id="OA-009" name="Bảo Việt (thừa, đề nghị không chọn)" value="OA-009">Bảo Việt (thừa, đề nghị không chọn)</option>
                                    <option id="OA-010" name="Bảo Minh (thừa, đề nghị không chọn)" value="OA-010">Bảo Minh (thừa, đề nghị không chọn)</option>
                                    <option id="OA-011" name="Allianz" value="OA-011">Allianz</option>
                                    <option id="OA-013" name="PVI" value="OA-013">PVI</option>
                                    <option id="OA-012" name="PJICO" value="OA-012">PJICO</option>
                                </select>
                            </td>
                            <td>
                                <div class="form-group-select">
                                    <select class="form-control required" select2 name="nha">
                                        <option value="">--- Chọn ---</option>
                                        <option value="opt1">Đứng đầu</option>
                                        <option value="opt2">Nhà đồng bảo hiểm</option>
                                    </select>
                                </div>
                            </td>
                            <td><input class="form-control" type="text" placeholder=""></td>
                            <td><input class="form-control" type="text" placeholder=""></td>
                            <td><input class="form-control input-money" type="text" placeholder=""></td>
                            <td><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                        </tr>
                    </tbody>
                </table>
                <div class="border p-1 text-center"><input class="btn bg-success" data-repeater-create="" type="button" value="+ Thêm" aria-invalid="false"></div>
            </div>
        </div>
    </div>
</div>