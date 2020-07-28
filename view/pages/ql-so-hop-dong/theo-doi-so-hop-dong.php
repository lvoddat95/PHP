<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>

    <body>
        
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
                                <span class="breadcrumb-item active">Theo dõi số hợp đồng đã xin cấp</span>
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
                            <p class="t-top"><i class="icon-certificate mr-2"></i>Theo dõi số hợp đồng đã xin cấp</p>
                        </div>
                    </div>

                    <section class="content-block">
                        <div class="card">
                            <div class="card-body" style="">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="mb-0">Loại hình bảo hiểm</label>
                                            <select class="form-control" select2>
                                                <option value="">--- Chọn Loại hình bảo hiểm ---</option>
                                                <option value="PHL">A01 - Bảo hiểm thân, phụ tùng máy bay và trách nhiệm hàng không</option>
                                                <option value="PHD">A02 - Bảo hiểm thân máy bay dưới mức miễn thường</option>
                                                <option value="PHW">A03 - Bảo hiểm thân, phụ tùng máy bay đối với rủi ro chiến tranh</option>
                                                <option value="PLI">A04 - Bảo hiểm trách nhiệm đối với rủi ro chiến tranh</option>
                                                <option value="PLU">A05 - Bảo hiểm mất khả năng sử dụng máy bay</option>
                                                <option value="CPA">A06 - Bảo hiểm tai nạn nhân viên tổ bay</option>
                                                <option value="MF">A07 - Phí Cty BH gốc</option>
                                                <option value="FIR">B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</option>
                                                <option value="PAR">B02 - Bảo hiểm mọi rủi ro tài sản</option>
                                                <option value="CECR">B03 - Bảo hiểm công trình kỹ thuật dân dụng hoàn thành</option>
                                                <option value="OMR">B04 - Bảo hiểm mọi rủi ro văn phòng</option>
                                                <option value="HMR">B05 - Bảo hiểm mọi rủi ro nhà ở</option>
                                                <option value="MON">B06 - Bảo hiểm tiền</option>
                                                <option value="DOS">B07 - Bảo hiểm hư hỏng hàng hóa trong kho lạnh</option>
                                                <option value="FIG">B08 - Bảo hiểm lòng trung thành</option>
                                                <option value="BON">B09 - Chứng thư bảo lãnh</option>
                                                <option value="NSI">B12 - Bảo hiểm bảng hiệu đèn quảng cáo</option>
                                                <option value="B16">B16 - Bảo hiểm toàn diện nhà chung cư</option>
                                                <option value="VCS">B17 - Bảo hiểm vườn cây cao su</option>
                                                <option value="CAR">C01 - Bảo hiểm mọi rủi ro trong xây dựng</option>
                                                <option value="EAR">C02 - Bảo hiểm mọi rủi ro trong lắp đặt</option>
                                                <option value="CPM">C03 - Bảo hiểm máy móc thiết bị của chủ thầu</option>
                                                <option value="MB">C04 - Bảo hiểm đổ vỡ máy móc</option>
                                                <option value="MLoP">C05 - Bảo hiểm mất lợi nhuận do đổ vỡ máy móc</option>
                                                <option value="EEI">C06 - Bảo hiểm thiết bị điện tử</option>
                                                <option value="LME">C07 - Bảo hiểm mọi rủi ro máy móc thiết bị cho thuê</option>
                                                <option value="BPV">C08 - Bảo hiểm nồi hơi</option>
                                                <option value="CMI">C09 - Bảo hiểm toàn diện đối với máy móc thiết bị</option>
                                                <option value="IAR">C10 - Bảo hiểm mọi rủi ro trong công nghiệp</option>
                                                <option value="HUL">D01 - Bảo hiểm tàu biển</option>
                                                <option value="VEL">D02 - Bảo hiểm tàu sông, tàu ven biển</option>
                                                <option value="VES">D03 - Bảo hiểm tàu cá</option>
                                                <option value="PLS">D04 - Bảo hiểm du thuyền</option>
                                                <option value="SBR">D05 - Bảo hiểm rủi ro đóng tàu</option>
                                                <option value="BHTN">D06 - Bảo hiểm trách nhiệm người sửa chữa tàu</option>
                                                <option value="PNI">D07 - Bảo hiểm trách nhiệm dân sự chủ tầu viễn dương (P&amp;I mutual)</option>
                                                <option value="ACX">E01 - Bảo hiểm hàng hoá xuất nhập khẩu</option>
                                                <option value="ICA">E02 - Bảo hiểm hàng hoá vận chuyển nội địa</option>
                                                <option value="IFD">E06 - Bảo hiểm trách nhiệm giao nhận tổng hợp</option>
                                                <option value="MC">F01 - Bảo hiểm xe máy</option>
                                                <option value="MV">F02 - Bảo hiểm ô tô</option>
                                                <option value="AHP">G01 - Bảo hiểm sức khỏe toàn diện</option>
                                                <option value="HPA">G02 - Bảo hiểm con người mức trách nhiệm cao (VNI Care)</option>
                                                <option value="GPA">G03 - Bảo hiểm tai nạn con người</option>
                                                <option value="H04">G04 - Bảo hiểm tai nạn con người của Cologne Re</option>
                                                <option value="BHTDHS">G05 - Bảo hiểm toàn diện học sinh</option>
                                                <option value="TRV">G06 - Bảo hiểm du lịch trong nước</option>
                                                <option value="VTO">G07 - Bảo hiểm du lịch quốc tế</option>
                                                <option value="FTV">G08 - Bảo hiểm sức khỏe giáo viên</option>
                                                <option value="WCI">G09 - Bảo hiểm tai nạn đối với người lao động</option>
                                                <option value="WL">G12 - Bảo hiểm chăm sóc sức khỏe cá nhân White Lotus</option>
                                                <option value="HUE">G13 - Bảo hiểm tai nạn hộ sử dụng điện</option>
                                                <option value="G14">G14 - Bảo hiểm tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng</option>
                                                <option value="HouseHold">G15 - Toàn Diện Hộ Gia Đình</option>
                                                <option value="ICS">G16 - Bảo hiểm sức khỏe người vay vốn</option>
                                                <option value="G17">G17 - Bảo hiểm tai nạn giao thông đường bộ</option>
                                                <option value="G18">G18 - Thông tư 329 - Bảo hiểm đối với người lao động thi công trên công trường</option>
                                                <option value="PI">H01 - Bảo hiểm trách nhiệm nghề nghiệp</option>
                                                <option value="PRL">H02 - Bảo hiểm trách nhiệm sản phẩm</option>
                                                <option value="PUL">H03 - Bảo hiểm trách nhiệm công cộng</option>
                                                <option value="H05">H04 - Bảo hiểm trách nhiệm giải thưởng (Hole in one)</option>
                                                <option value="H06">H06 - Bảo hiểm Trách nhiệm Giám đốc và Người điều hành</option>
                                                <option value="H07">H07 - Bảo hiểm toàn diện ngân hàng</option>
                                                <option value="H08">H08 - Bảo hiểm trách nhiệm hoạt động cảng</option>
                                                <option value="I01">I01 - Bảo hiểm dầu khí</option>
                                                <option value="NTCD">J01 - Nhận tái cố định nhóm bảo hiểm hàng hóa</option>
                                                <option value="J04">J04 - Nhận tái cố định nhóm bảo hiểm hàng không</option>
                                                <option value="J05">J05 - Nhận tái cố định nhóm bảo hiểm tài sản</option>
                                                <option value="J06">J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật</option>
                                                <option value="J07">J07 - Nhận tái cố định nhóm bảo hiểm tàu thuyền</option>
                                                <option value="J08">J08 - Nhận tái cố định nhóm bảo hiểm xe cơ giới</option>
                                                <option value="J09">J09 - Nhận tái cố định nhóm bảo hiểm con người</option>
                                                <option value="J10">J10 - Nhận tái cố định nhóm bảo hiểm trách nhiệm</option>
                                                <option value="J11">J11 - Nhận tái cố định nhóm bảo hiểm dầu khí</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="mb-0">Số hợp đồng</label>
                                            <input type="text" class="form-control" name="" placeholder="Nhập số hợp đồng..." value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group ">
                                            <label class="mb-0">Trạng thái: </label>
                                            <select class="form-control" select2 >
                                                <option value="">--- Chọn trạng thái ---</option>
                                                <option value="opt1">Chưa sử dụng</option>
                                                <option value="opt2">Đã sử dụng</option>
                                                <option value="opt3">Không dùng nữa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered table-hover datatable"  
                                            data-paging="true"
                                            data-info="true"
                                            data-ordering="true"
                                            data-searching="false">
                                            <thead>
                                                <tr class="thead-light">
                                                    <th class="text-center" width="30px">#</th>
                                                    <th>Ngày lấy</th>
                                                    <th width="10%">Số hợp đồng</th>
                                                    <th width="20%">Loại hình bảo hiểm</th>
                                                    <th class="desktop">Số lượng xe</th>
                                                    <th>Cán bộ xin cấp</th>
                                                    <th>Sử dụng</th>
                                                    <th>Hạn dùng</th>
                                                    <th class="desktop">Đề nghị</th>
                                                    <th class="desktop">VNI ký</th>
                                                    <th class="desktop">KH ký</th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>28/07/2020</td>
                                                    <td>012000018/J06</td>
                                                    <td>J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật</td>
                                                    <td>0</td>
                                                    <td>Vũ Thị Len Quy</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>28/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>24/07/2020</td>
                                                    <td>012000006/B01</td>
                                                    <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                    <td>0</td>
                                                    <td>Phạm Đặng Long</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>24/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td c>24/07/2020</td>
                                                    <td c>012000005/B01</td>
                                                    <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                    <td >0</td>
                                                    <td>Phạm Đặng Long</td>
                                                    <td c>Chưa sử dụng</td>
                                                    <td c>24/07/2020</td>
                                                    <td c></td>
                                                    <td c></td>
                                                    <td c></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>24/07/2020</td>
                                                    <td>012000037/B02</td>
                                                    <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                    <td>0</td>
                                                    <td>Phạm Đặng Long</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>24/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>21/07/2020</td>
                                                    <td>012000036/B02</td>
                                                    <td>B02 - Bảo hiểm mọi rủi ro tài sản</td>
                                                    <td>0</td>
                                                    <td>Vũ Thị Hương</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>21/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>21/07/2020</td>
                                                    <td>012000035/B02</td>
                                                    <td>B02 - Bảo hiểm mọi rủi ro tài sản</td>
                                                    <td>0</td>
                                                    <td>Vũ Thị Hương</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>21/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>17/07/2020</td>
                                                    <td>012000003/J09</td>
                                                    <td>J09 - Nhận tái cố định nhóm bảo hiểm con người</td>
                                                    <td>0</td>
                                                    <td>Vũ Thị Len Quy</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>17/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>17/07/2020</td>
                                                    <td>012000017/J06</td>
                                                    <td>J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật</td>
                                                    <td>0</td>
                                                    <td>Vũ Thị Len Quy</td>
                                                    <td>Đã sử dụng</td>
                                                    <td>17/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td c>16/07/2020</td>
                                                    <td c>012000016/J06</td>
                                                    <td>J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật</td>
                                                    <td>0</td>
                                                    <td>Vũ Thị Len Quy</td>
                                                    <td c>Chưa sử dụng</td>
                                                    <td c>16/07/2020</td>
                                                    <td c></td>
                                                    <td c></td>
                                                    <td c></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td c>16/07/2020</td>
                                                    <td c>012000003/E01</td>
                                                    <td>E01 - Bảo hiểm hàng hoá xuất nhập khẩu</td>
                                                    <td>0</td>
                                                    <td>Lê Đỗ Quỳnh Phương</td>
                                                    <td c>Chưa sử dụng</td>
                                                    <td c>16/07/2020</td>
                                                    <td c></td>
                                                    <td c></td>
                                                    <td c></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td c>16/07/2020</td>
                                                    <td c>012000008/A01</td>
                                                    <td>A01 - Bảo hiểm thân, phụ tùng máy bay và trách nhiệm hàng không</td>
                                                    <td>0</td>
                                                    <td>Lê Đỗ Quỳnh Phương</td>
                                                    <td c>Chưa sử dụng</td>
                                                    <td c>16/07/2020</td>
                                                    <td c></td>
                                                    <td c></td>
                                                    <td c></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td c>14/07/2020</td>
                                                    <td c>012000012/C01</td>
                                                    <td>C01 - Bảo hiểm mọi rủi ro trong xây dựng</td>
                                                    <td>0</td>
                                                    <td>Lê Đỗ Quỳnh Phương</td>
                                                    <td c>Chưa sử dụng</td>
                                                    <td c>14/07/2020</td>
                                                    <td c></td>
                                                    <td c></td>
                                                    <td c></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td c>14/07/2020</td>
                                                    <td c>012000002/E01</td>
                                                    <td>E01 - Bảo hiểm hàng hoá xuất nhập khẩu</td>
                                                    <td>0</td>
                                                    <td>Nguyễn Văn Thọ</td>
                                                    <td c>Đã sử dụng</td>
                                                    <td c>14/07/2020</td>
                                                    <td c></td>
                                                    <td c></td>
                                                    <td c></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td c>14/07/2020</td>
                                                    <td c>012000007/F02</td>
                                                    <td>F02 - Bảo hiểm ô tô</td>
                                                    <td>0</td>
                                                    <td>Nguyễn Văn Thọ</td>
                                                    <td c>Đã sử dụng</td>
                                                    <td c>24/07/2020</td>
                                                    <td c></td>
                                                    <td c></td>
                                                    <td c></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>14/07/2020</td>
                                                    <td>012000002/G01</td>
                                                    <td>G01 - Bảo hiểm sức khỏe toàn diện</td>
                                                    <td>0</td>
                                                    <td>Nguyễn Văn Thọ</td>
                                                    <td>Đã sử dụng</td>
                                                    <td>14/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>14/07/2020</td>
                                                    <td>012000004/B01</td>
                                                    <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                    <td>0</td>
                                                    <td>Nguyễn Văn Thọ</td>
                                                    <td>Đã sử dụng</td>
                                                    <td>14/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" />/td>
                                                    <td>14/07/2020</td>
                                                    <td>012000011/C01</td>
                                                    <td>C01 - Bảo hiểm mọi rủi ro trong xây dựng</td>
                                                    <td>0</td>
                                                    <td>Nguyễn Văn Thọ</td>
                                                    <td>Đã sử dụng</td>
                                                    <td>14/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>13/07/2020</td>
                                                    <td>012000003/B01</td>
                                                    <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                    <td>0</td>
                                                    <td>Ngô Mạnh Hùng</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>13/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>13/07/2020</td>
                                                    <td>012000002/B01</td>
                                                    <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                    <td>0</td>
                                                    <td>Ngô Mạnh Hùng</td>
                                                    <td>Chưa sử dụng</td>
                                                    <td>13/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><input type="checkbox" /></td>
                                                    <td>08/07/2020</td>
                                                    <td>012000009/J05</td>
                                                    <td>J05 - Nhận tái cố định nhóm bảo hiểm tài sản</td>
                                                    <td>0</td>
                                                    <td>Vũ Thị Len Quy</td>
                                                    <td>Đã sử dụng</td>
                                                    <td>08/07/2020</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer ">
                                <div class="p-button justify-content-end">
                                    <div class="dropdown p-0">
                                        <a href="#" class="dropdown-toggle btn btn-light" data-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-gear mr-1"></i>
                                            Lựa chọn
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_cap_hop_dong"><i class="icon-file-check text-primary"></i> Xin cấp số hợp đồng</a>
                                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_gia_han_hop_dong"><i class="icon-file-plus text-success"></i> Xin gia hạn</a>
                                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#xin_huy_hop_dong"><i class="icon-file-minus text-danger"></i> Xin hủy</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-printer2"></i> In tờ trình</a>
                                        </div>
                                    </div>
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