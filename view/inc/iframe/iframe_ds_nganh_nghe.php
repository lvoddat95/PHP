<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>

            <div class="modal-header">
                <h5 class="modal-title">Danh sách ngành nghề</h5>
            </div>
            <form action="#">
                <div class="modal-body fancybox-modabody bg-white">
                    <div class="form-filter mb-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nhóm ngành nghề:</label>
                                    <select class="form-control" select2 name="">
                                        <option value="">--- Chọn ---</option>
                                        <option id="01" name="Công nghiệp" value="01">Công nghiệp</option>
                                        <option id="02" name="Lâm nghiệp" value="02">Lâm nghiệp</option>
                                        <option id="03" name="Nôngnghiệp" value="03">Nôngnghiệp</option>
                                        <option id="04" name="Ngư nghiệp" value="04">Ngư nghiệp</option>
                                        <option id="05" name="Văn hóa" value="05">Văn hóa</option>
                                        <option id="06" name="Kế toán" value="06">Kế toán</option>
                                        <option id="07" name="Tài chính" value="07">Tài chính</option>
                                        <option id="08" name="Dầu khí" value="08">Dầu khí</option>
                                        <option id="09" name="Chứng khoán" value="09">Chứng khoán</option>
                                        <option id="10" name="Du lịch" value="10">Du lịch</option>
                                        <option id="11" name="Bảo hiểm" value="11">Bảo hiểm</option>
                                        <option id="12" name="Công nghệ thông tin" value="12">Công nghệ thông tin</option>
                                        <option id="13" name="Điện tử viễn thông" value="13">Điện tử viễn thông</option>
                                        <option id="14" name="Thủy sản" value="14">Thủy sản</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Mã ngành nghề: </label>
                                    <input type="text" class="form-control" name="" placeholder="Nhập mã ngành..." value="" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="d-block">Tên ngành nghề:</label>
                                    <input type="text" class="form-control" name="" placeholder="Nhập tên ngành..." value="" />
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn bg-primary"><i class="fa fa-filter mr-1"></i>Lọc</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="icon-cross2 mr-1"></i>Hủy điều kiện lọc</button>
                        </div>
                    </div>

                    <table class="table table-bordered table-hover datatable" data-paging="true" data-info="true" data-ordering="true" data-searching="false" data-page-length="10">
                        <thead class="thead-light">
                            <th width="w1p" data-orderable="false" class="text-center">#</th>
                            <th>Mã ngành nghề</th>
                            <th>Tên ngành nghề</th>
                            <th>Nhóm ngành nghề</th>
                            <th>Tình trạng</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>00001</div></td>
                                <td><div>Dịch vụ ăn uống, Suất ăn nhanh công nghiệp </div></td>
                                <td><div>01</div></td>
                                <td>Hoạt động</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light">– Xóa</button>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#cap_nhap_thong_tin_nganh_nghe">+ Thêm</button>
                    <a href="#" class="btn bg-primary"><i class="icon-checkmark4 mr-1"></i>Chọn</a>
                </div>
            </form>
        <!-- <?php inc('modal/modal_cap_nhap_thong_tin_nganh_nghe.php'); ?>  -->


<?php include_once FOOTER; ?>

