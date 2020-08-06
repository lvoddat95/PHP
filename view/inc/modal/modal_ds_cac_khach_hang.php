<!-- Danh sách các khách hàng -->
<div id="ds_cac_khach_hang" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-semibold ">Danh sách các khách hàng</h5>
                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i> Đóng</button>
            </div>
            <form action="#">
                <div class="modal-body">

                    <div class="form-filter mb-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Chi nhánh:</label>
                                    <select class="form-control" select2 name="">
                                        <option value="">--- Chọn ---</option>
                                        <option value="">Tổng Công Ty Cổ Phần Bảo Hiểm Hàng Không(VNI)</option>
                                        <option id="2" name="Trụ Sở Chính" value="2">Trụ Sở Chính</option>
                                        <option id="155" name="VNI Hải Phòng" value="155">VNI Hải Phòng</option>
                                        <option id="154" name="VNI Đà Nẵng" value="154">VNI Đà Nẵng</option>
                                        <option id="150" name="VNI HCM" value="150">VNI HCM</option>
                                        <option id="160" name="VNI Nghệ An" value="160">VNI Nghệ An</option>
                                        <option id="164" name="VNI Hà Nội" value="164">VNI Hà Nội</option>
                                        <option id="202" name="VNI Thăng Long" value="202">VNI Thăng Long</option>
                                        <option id="211" name="VNI Nam Hồng Hà" value="211">VNI Nam Hồng Hà</option>
                                        <option id="240" name="VNI Hải Dương" value="240">VNI Hải Dương</option>
                                        <option id="253" name="VNI Tây Nguyên" value="253">VNI Tây Nguyên</option>
                                        <option id="304" name="Sở Giao Dịch" value="304">Sở Giao Dịch</option>
                                        <option id="325" name="VNI Quảng Ninh" value="325">VNI Quảng Ninh</option>
                                        <option id="333" name="VNI Đông Đô" value="333">VNI Đông Đô</option>
                                        <option id="340" name="VNI Thanh Hóa" value="340">VNI Thanh Hóa</option>
                                        <option id="341" name="VNI Vĩnh Phúc" value="341">VNI Vĩnh Phúc</option>
                                        <option id="346" name="VNI Bắc Giang" value="346">VNI Bắc Giang</option>
                                        <option id="349" name="VNI Đông Nam Bộ" value="349">VNI Đông Nam Bộ</option>
                                        <option id="356" name="VNI Quảng Bình" value="356">VNI Quảng Bình</option>
                                        <option id="360" name="VNI Bình Định" value="360">VNI Bình Định</option>
                                        <option id="365" name="VNI Sài Gòn" value="365">VNI Sài Gòn</option>
                                        <option id="376" name="VNI Khánh Hòa" value="376">VNI Khánh Hòa</option>
                                        <option id="383" name="VNI Nam Tây Nguyên" value="383">VNI Nam Tây Nguyên</option>
                                        <option id="398" name="VNI Quảng Ngãi" value="398">VNI Quảng Ngãi</option>
                                        <option id="410" name="VNI Thủ Đô" value="410">VNI Thủ Đô</option>
                                        <option id="425" name="VNI Tây Nam Bộ" value="425">VNI Tây Nam Bộ</option>
                                        <option id="453" name="VNI Tân Sơn Nhất" value="453">VNI Tân Sơn Nhất</option>
                                        <option id="457" name="VNI Thành Đô" value="457">VNI Thành Đô</option>
                                        <option id="458" name="VNI Bến Thành" value="458">VNI Bến Thành</option>
                                        <option id="468" name="VNI Long An" value="468">VNI Long An</option>
                                        <option id="484" name="VNI Tây Bắc" value="484">VNI Tây Bắc</option>
                                        <option id="513" name="VNI Sông Hồng" value="513">VNI Sông Hồng</option>
                                        <option id="518" name="VNI Tràng An" value="518">VNI Tràng An</option>
                                        <option id="529" name="VNI Vũng Tàu" value="529">VNI Vũng Tàu</option>
                                        <option id="533" name="VNI Hà Thành" value="533">VNI Hà Thành</option>
                                        <option id="539" name="Sở Giao Dịch 2" value="539">Sở Giao Dịch 2</option>
                                        <option id="666" name="VNI Duyên Hải" value="666">VNI Duyên Hải</option>
                                        <option id="599" name="VNI Huế" value="599">VNI Huế</option>
                                        <option id="177" name="ĐV chứa DL kết chuyển từ CN" value="177">ĐV chứa DL kết chuyển từ CN</option>
                                        <option id="262" name="Tổ trù bị CN Đông Bắc-HN" value="262">Tổ trù bị CN Đông Bắc-HN</option>
                                        <option id="257" name="VPKV 30-TL" value="257">VPKV 30-TL</option>
                                        <option id="231" name="Chi Nhánh TP HCM 2 (Võ Văn Tần)" value="231">Chi Nhánh TP HCM 2 (Võ Văn Tần)</option>
                                        <option id="219" name="VPKV 6 (Thái Bình)-TL" value="219">VPKV 6 (Thái Bình)-TL</option>
                                        <option id="216" name="VPKV 5 (Gia Lâm)-TL" value="216">VPKV 5 (Gia Lâm)-TL</option>
                                        <option id="217" name="VPKV 4 (Nghệ An)" value="217">VPKV 4 (Nghệ An)</option>
                                        <option id="228" name="VPKV 7-HN" value="228">VPKV 7-HN</option>
                                        <option id="209" name="VPKV 2-HN" value="209">VPKV 2-HN</option>
                                        <option id="728" name="VNI Gia Định" value="728">VNI Gia Định</option>
                                        <option id="731" name="VNI Âu Lạc" value="731">VNI Âu Lạc</option>
                                        <option id="733" name="VNI Bình Dương" value="733">VNI Bình Dương</option>
                                        <option id="753" name="VNI Vạn Xuân" value="753">VNI Vạn Xuân</option>
                                        <option id="756" name="VNI Kinh Đô" value="756">VNI Kinh Đô</option>
                                        <option id="769" name="VNI Hà Tuyên" value="769">VNI Hà Tuyên</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Mã khách hàng: </label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="d-block">Tên khách hàng: <i class="text-danger float-right font9">(Tìm theo tên không dấu)</i></label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Mã số thuế: </label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="d-block">Số chứng minh thư ND:</label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="d-block">Số điện thoại:</label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="d-block">Trạng thái:</label>
                                    <select class="form-control" select2 name="">
                                        <option value="">--- Chọn ---</option>
                                        <option value="">Hoạt động</option>
                                        <option value="">Không hoạt động</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn bg-primary"><i class="fa fa-filter mr-1"></i>Lọc</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="icon-cross2 mr-1"></i>Hủy điều kiện lọc</button>
                        </div>
                    </div>

                    <table class="table table-bordered table-hover datatable"  
                        data-paging="true"
                        data-info="true"
                        data-ordering="true"
                        data-searching="false"
                        data-page-length="10"
                        >
                        <thead class="thead-light">
                            <th width="w1p" data-orderable="false" class="text-center">#</th>
                            <th>Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Tình trạng</th>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000001</div></td>
                                <td><div>Nguyễn Văn Anh</div></td>
                                <td><div>17 Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000002</div></td>
                                <td><div>Phạm Thị Mai</div></td>
                                <td><div>Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000003</div></td>
                                <td><div>Nguyễn Văn Sang</div></td>
                                <td><div>Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000004</div></td>
                                <td><div>EVN1</div></td>
                                <td><div>01 le lai</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000005</div></td>
                                <td><div>EVN 1 - cty dien luc 1</div></td>
                                <td><div>01 le lai</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000006</div></td>
                                <td><div>Công ty A</div></td>
                                <td><div>Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000007</div></td>
                                <td><div>Công ty Cổ phần XNK Tổng hợp Hà Nội</div></td>
                                <td><div>64 Nguyễn Lương Bằng, Đống Đa, Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000008</div></td>
                                <td><div>Nguyễn Văn An</div></td>
                                <td><div>71 Nguyễn thái Học</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000009</div></td>
                                <td><div>Cụm cảng Hàng Không Miền Bắc</div></td>
                                <td><div>Sân bay Nội Bài, Sóc Sơn, Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000010</div></td>
                                <td><div>Tổng công ty cụm cảng miền Nam</div></td>
                                <td><div>Tấn Sơn Nhất</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000011</div></td>
                                <td><div>Tông công ty than việt nam</div></td>
                                <td><div>Cẩm phả quảng ninh</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000012</div></td>
                                <td><div>Cụm cảng Miền trung</div></td>
                                <td><div>Đà Nẵng</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000013</div></td>
                                <td><div>Công ty Vietjetair</div></td>
                                <td><div>Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000014</div></td>
                                <td><div>Cục Hàng không</div></td>
                                <td><div>Nguyễn Sơn, Long Biên</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000015</div></td>
                                <td><div>Nguyễn Văn Tiến</div></td>
                                <td><div>13 Hai Bà Trưng - Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000016</div></td>
                                <td><div>Công ty Xây Dựng Hà Nội</div></td>
                                <td><div>Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000017</div></td>
                                <td><div>Công ty giấy Bãi Bằng</div></td>
                                <td><div>Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000018</div></td>
                                <td><div>Công ty xe Bus Hà Nội</div></td>
                                <td><div>Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000019</div></td>
                                <td><div>Công ty cổ phần AZ</div></td>
                                <td><div>Hà Nội</div></td>
                                <td>Hoạt động</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="checkbox" value="" />
                                </td>
                                <td><div>0100000020</div></td>
                                <td><div>Công ty than và khoáng sản Việt Nam</div></td>
                                <td><div>Cảm phả - Quảng Ninh</div></td>
                                <td>Hoạt động</td>
                            </tr>
                        </tbody>
                    </table>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light">– Xóa</button>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#cap_nhap_thong_tin_khach_hang">+ Thêm</button>
                    <a href="#" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="icon-checkmark4"></i></b> Chọn</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Danh sách các khách hàng -->