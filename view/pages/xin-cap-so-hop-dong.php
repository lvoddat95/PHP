<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>

    <body class="sidebar-xs">
        
        <!-- page-content -->
        <div class="page-content">

            <?php include_once SIDEBAR; ?>
            
            <!-- content-wrapper -->
            <div class="content-wrapper">
                
                <!-- content -->
                <div class="content">

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="linearicons-text-align-left font-size-m font-weight-bold"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH; ?>" class="breadcrumb-item"><i class="icon-home5 mr-1"></i>Trang chủ</a>
                                <span class="breadcrumb-item active">Danh sách số hợp đồng đã xin cấp</span>
                            </div>
                            <div class="d-md-none logo-mobile">
                                <a href="<?php echo HTTP_PATH; ?>" class="logo-text">
                                    <div class="logo-img"><img src="app-assets/images/logo/logo2.png" alt="VNI Logo"></div>
                                    <span class="text align-middle" style="font-weight: 900;">VNI</span>
                                </a>
                            </div>
                        </div>

                        <?php include_once TOP_RIGHT; ?>
                    </div>
                    <!-- /Header -->

                    <div class="page-title">
                        <div class="p-title">
                            <p class="t-top"><i class="icon-certificate mr-2"></i>Danh sách số hợp đồng đã xin cấp</p>
                        </div>
                    </div>

                    <section class="content-block">
                        <div class="card card-search">
                            <div class="card-header header-elements-inline">
                                <p class="card-title font-size-s">
                                    <i style="width: 26px;height: 26px;line-height: 26px;font-size: 12px;" class="icon-search4 d-flex-inline align-items-center justify-content-center rounded-round bg-color mr-2"></i> 
                                    Tìm kiếm hợp đồng xin cấp
                                </p>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Đơn vị:</label>
                                            <select class="form-control required" select2 name="don_vi">
                                                <option value="">--- Chọn ---</option>
                                               Tổng Công Ty Cổ Phần Bảo Hiểm Hàng Không(VNI)</option><option id="2" name="Trụ Sở Chính" value="2">Trụ Sở Chính</option><option id="155" name="VNI Hải Phòng" value="155">VNI Hải Phòng</option><option id="154" name="VNI Đà Nẵng" value="154">VNI Đà Nẵng</option><option id="150" name="VNI HCM" value="150">VNI HCM</option><option id="160" name="VNI Nghệ An" value="160">VNI Nghệ An</option><option id="164" name="VNI Hà Nội" value="164">VNI Hà Nội</option><option id="202" name="VNI Thăng Long" value="202">VNI Thăng Long</option><option id="211" name="VNI Nam Hồng Hà" value="211">VNI Nam Hồng Hà</option><option id="240" name="VNI Hải Dương" value="240">VNI Hải Dương</option><option id="253" name="VNI Tây Nguyên" value="253">VNI Tây Nguyên</option><option id="304" name="Sở Giao Dịch" value="304">Sở Giao Dịch</option><option id="325" name="VNI Quảng Ninh" value="325">VNI Quảng Ninh</option><option id="333" name="VNI Đông Đô" value="333">VNI Đông Đô</option><option id="340" name="VNI Thanh Hóa" value="340">VNI Thanh Hóa</option><option id="341" name="VNI Vĩnh Phúc" value="341">VNI Vĩnh Phúc</option><option id="346" name="VNI Bắc Giang" value="346">VNI Bắc Giang</option><option id="349" name="VNI Đông Nam Bộ" value="349">VNI Đông Nam Bộ</option><option id="356" name="VNI Quảng Bình" value="356">VNI Quảng Bình</option><option id="360" name="VNI Bình Định" value="360">VNI Bình Định</option><option id="365" name="VNI Sài Gòn" value="365">VNI Sài Gòn</option><option id="376" name="VNI Khánh Hòa" value="376">VNI Khánh Hòa</option><option id="383" name="VNI Nam Tây Nguyên" value="383">VNI Nam Tây Nguyên</option><option id="398" name="VNI Quảng Ngãi" value="398">VNI Quảng Ngãi</option><option id="410" name="VNI Thủ Đô" value="410">VNI Thủ Đô</option><option id="425" name="VNI Tây Nam Bộ" value="425">VNI Tây Nam Bộ</option><option id="453" name="VNI Tân Sơn Nhất" value="453">VNI Tân Sơn Nhất</option><option id="457" name="VNI Thành Đô" value="457">VNI Thành Đô</option><option id="458" name="VNI Bến Thành" value="458">VNI Bến Thành</option><option id="468" name="VNI Long An" value="468">VNI Long An</option><option id="484" name="VNI Tây Bắc" value="484">VNI Tây Bắc</option><option id="513" name="VNI Sông Hồng" value="513">VNI Sông Hồng</option><option id="518" name="VNI Tràng An" value="518">VNI Tràng An</option><option id="529" name="VNI Vũng Tàu" value="529">VNI Vũng Tàu</option><option id="533" name="VNI Hà Thành" value="533">VNI Hà Thành</option><option id="539" name="Sở Giao Dịch 2" value="539">Sở Giao Dịch 2</option><option id="666" name="VNI Duyên Hải" value="666">VNI Duyên Hải</option><option id="599" name="VNI Huế" value="599">VNI Huế</option><option id="177" name="ĐV chứa DL kết chuyển từ CN" value="177">ĐV chứa DL kết chuyển từ CN</option><option id="262" name="Tổ trù bị CN Đông Bắc-HN" value="262">Tổ trù bị CN Đông Bắc-HN</option><option id="257" name="VPKV 30-TL" value="257">VPKV 30-TL</option><option id="231" name="Chi Nhánh TP HCM 2 (Võ Văn Tần)" value="231">Chi Nhánh TP HCM 2 (Võ Văn Tần)</option><option id="219" name="VPKV 6 (Thái Bình)-TL" value="219">VPKV 6 (Thái Bình)-TL</option><option id="216" name="VPKV 5 (Gia Lâm)-TL" value="216">VPKV 5 (Gia Lâm)-TL</option><option id="217" name="VPKV 4 (Nghệ An)" value="217">VPKV 4 (Nghệ An)</option><option id="228" name="VPKV 7-HN" value="228">VPKV 7-HN</option><option id="209" name="VPKV 2-HN" value="209">VPKV 2-HN</option><option id="728" name="VNI Gia Định" value="728">VNI Gia Định</option><option id="731" name="VNI Âu Lạc" value="731">VNI Âu Lạc</option><option id="733" name="VNI Bình Dương" value="733">VNI Bình Dương</option><option id="753" name="VNI Vạn Xuân" value="753">VNI Vạn Xuân</option><option id="756" name="VNI Kinh Đô" value="756">VNI Kinh Đô</option><option id="769" name="VNI Hà Tuyên" value="769">VNI Hà Tuyên</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Phòng ban:</label>
                                            <select class="form-control" select2 name="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="opt1">Phòng KD 1</option>
                                                <option value="opt2">Phòng KD 2</option>
                                                <option value="opt3">Phòng KD 3</option>
                                                <option value="opt4">Phòng KD 4</option>
                                                <option value="opt5">Phòng KD 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Cán bộ:</label>
                                            <select class="form-control" select2 name="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="opt1">Lê Văn A</option>
                                                <option value="opt2">Lê Văn B</option>
                                                <option value="opt3">Lê Văn C</option>
                                                <option value="opt4">Lê Văn D</option>
                                                <option value="opt5">Lê Văn E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="mb-0">Tình trạng sử dụng: </label>
                                            <select class="form-control" select2 >
                                                <option value="">--- Chọn trạng thái ---</option>
                                                <option value="opt1">Chưa sử dụng</option>
                                                <option value="opt2">Đã sử dụng</option>
                                                <option value="opt3">Không dùng nữa</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-semibold">Ngày lấy từ:</label>
                                                    <input type="text" class="form-control datepicker input-date" name="" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-semibold">Đến ngày:</label>
                                                    <input type="text" class="form-control datepicker input-date" name="" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="font-weight-semibold">Số hợp đồng:</label>
                                            <input type="text" class="form-control" name="" placeholder="Nhập số hợp đồng...">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="mb-0">VNI ký : </label>
                                            <select class="form-control" select2 >
                                                <option value="">--- Chọn ---</option>
                                                <option value="opt1">Đã ký</option>
                                                <option value="opt2">Chưa ký</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group ">
                                            <label class="mb-0">Khách hàng ký: </label>
                                            <select class="form-control" select2 >
                                                <option value="">--- Chọn ---</option>
                                                <option value="opt1">Đã ký</option>
                                                <option value="opt2">Chưa ký</option>
                                                <option value="opt3">Không ký</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-4 col-6">
                                        <div class="d-flex justify-content-end ">
                                            <div class="d-inline-block">
                                                <button type="submit" style="letter-spacing: 1px;" class="btn text-uppercase w-100 bg-orange"><i class="icon-search4 mr-2"></i> Tìm kiếm </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered table-hover datatable"  
                                            data-paging="true"
                                            data-info="true"
                                            data-ordering="true"
                                            data-searching="false">
                                            <thead class="thead-light">
                                                <th width="30px" data-orderable="false" class="text-center">#</th>
                                                <th class="desktop">Ngày lấy</th>
                                                <th width="10%">Số hợp đồng</th>
                                                <th width="20%">Loại hình bảo hiểm</th>
                                                <th class="desktop">Gói HĐ</th>
                                                <th width="20%">Khách hàng</th>
                                                <th class="desktop">Số lượng xe</th>
                                                <th>Trạng thái</th>
                                                <th class="desktop">Hạn dùng</th>
                                                <th class="desktop">Đề nghị</th>
                                                <th class="all" width="30px" data-orderable="false">#</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td>24/07/2020</td>
                                                    <td>012000006/B01</td>
                                                    <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                    <td></td>
                                                    <td>Tap Doan Vien Thong Quan Doi - Viettel</td>
                                                    <td>0</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>24/07/2020</td>
                                                    <td></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td>21/07/2020</td>
                                                    <td>012000035/B02</td>
                                                    <td>B02 - Bảo hiểm mọi rủi ro tài sản</td>
                                                    <td></td>
                                                    <td>SEOJIN VINA CO</td>
                                                    <td>0</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>21/07/2020</td>
                                                    <td></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" value=""></td>
                                                    <td>17/07/2020</td>
                                                    <td>012000017/J06</td>
                                                    <td>J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật </td>
                                                    <td></td>
                                                    <td>KRIC Engineering 1st&2nd Surplus Treaty 2012-1st Quarter 2019-WIS</td>
                                                    <td>0</td>
                                                    <td>Đã sử dụng</td>
                                                    <td>17/07/2020</td>
                                                    <td></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer ">
                                <div class="p-button justify-content-end">
                                    <a href="#" data-toggle="modal" data-target="#xin_cap_hop_dong" class="btn btn-labeled btn-labeled-left mr-1"><b><i class="icon-file-check"></i></b> Xin cấp số hợp đồng</a>
                                    <button type="submit" class="btn bg-primary">Chọn</button>
                                </div>
                            </div>
                        </div>
                    </section>


                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                
                </div>
                <!-- /content -->

            </div>
            <!-- /content-wrapper -->
            
        </div>
        <!-- /page-content -->

        <?php inc('modal/modal_xin_cap_hop_dong.php'); ?> 
        <?php inc('modal/modal_xin_gia_han_hop_dong.php'); ?> 
        <?php inc('modal/modal_xin_huy_hop_dong.php'); ?> 

    </body>

<?php include_once FOOTER; ?>