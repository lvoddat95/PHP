        <!-- Sidebar -->

        <div class="sidebar">
            <!-- Mobile Top -->
            <div class="sidebar-mobile-toggler">
        		<span>Danh sách Menu</span>
        		<a href="#" class="sidebar-mobile-main-close">
        			<i class="icon-arrow-left8"></i>
        		</a>
            </div>
            <!-- Mobile Top -->
            
            <!-- Sidebar content -->
            <div class="sidebar-content">
                <!-- Logo -->
                <div class="logo clearfix">
                    <a href="javascript:;" class="sidebar-main-toggle">
                        <i class="linearicons-toggle-on"></i>
                    </a>
                    <a href="<?php echo HTTP_PATH ?>" class="logo-text float-left">
                        <div class="logo-img"><img src="<?php echo HTTP_PATH ?>app-assets/images/logo/logo2.png" alt="VNI Logo"></div>
                        <span class="text align-middle" style="font-weight: 900;">VNI</span>
                    </a>
                </div>
                <!-- End-Logo -->

                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <li class="nav-item">
                            <a href="<?php echo HTTP_PATH ?>" class="nav-link active" data-menu-title="Bảng điều khiển">
                                <i class="linearicons-home"></i>
                                <span class="menu-title">Bảng điều khiển</span>
                            </a>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-layers"></i>
                                <span class="menu-title"> Pages Template</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Pages Template">
                                <li><a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="nav-link"><span class="menu-title">Danh sách đơn</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" class="nav-link"><span class="menu-title">Nhập đơn</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/pages/xem-don.php'; ?>" class="nav-link"><span class="menu-title">Xem đơn</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/pages/ban-chao/danh-sach-ban-chao.php'; ?>" class="nav-link"><span class="menu-title">Bản chào phí bảo hiểm</span></a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="javascript:;" class="nav-link"><span class="menu-title">Quản lí số hợp đồng</span></a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item">
                                            <a href="<?php echo HTTP_PATH .'view/pages/ql-so-hop-dong/xin-cap-so-hop-dong.php'; ?>" class="nav-link">
                                                <span class="menu-title">Xin cấp số hợp đồng</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo HTTP_PATH .'view/pages/ql-so-hop-dong/theo-doi-so-hop-dong.php'; ?>" class="nav-link">
                                                <span class="menu-title">Theo dõi số hợp đồng</span>
                                            </a>
                                        </li>
                                       <!--  <li class="nav-item">
                                            <a href="<?php echo HTTP_PATH .'view/pages/ql-so-hop-dong/cap-nhap-ki-ket.php'; ?>" class="nav-link">
                                                <span class="menu-title">Cập nhập kí kết</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>
                                <li><a href="<?php echo HTTP_PATH .'view/pages/login.php'; ?>" class="nav-link"><span class="menu-title">Trang Login</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/pages/404.php'; ?>" class="nav-link"><span class="menu-title">Trang 404</span></a></li>
                                
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-car"></i>
                                <span class="menu-title"> Bảo hiểm xe cơ giới</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm xe cơ giới">
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/MVP/f01.php'; ?>" class="nav-link"><span class="menu-title">F01 - Bảo hiểm xe máy</span></a></li>
                                <li class="active"><a href="<?php echo HTTP_PATH .'view/insurance/MVP/f02.php'; ?>" class="nav-link"><span class="menu-title">F02 - Bảo hiểm ô tô</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-man-woman"></i>
                                <span class="menu-title"> Bảo hiểm con người</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm con người">
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g01.php'; ?>" class="nav-link"><span class="menu-title">G01 - Bảo hiểm sức khỏe toàn diện</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g02.php'; ?>" class="nav-link"><span class="menu-title">G02 - Bảo hiểm con người mức trách nhiệm cao (VNI Care)</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g03.php'; ?>" class="nav-link"><span class="menu-title">G03 - Bảo hiểm tai nạn con người</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g04.php'; ?>" class="nav-link"><span class="menu-title">G04 - Bảo hiểm tai nạn con người của Cologne Re</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g05.php'; ?>" class="nav-link"><span class="menu-title">G05 - Bảo hiểm toàn diện học sinh</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g06.php'; ?>" class="nav-link"><span class="menu-title">G06 - Bảo hiểm du lịch trong nước</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g07.php'; ?>" class="nav-link"><span class="menu-title">G07 - Bảo hiểm du lịch quốc tế</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g08.php'; ?>" class="nav-link"><span class="menu-title">G08 - Bảo hiểm sức khỏe giáo viên</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g09.php'; ?>" class="nav-link"><span class="menu-title">G09 - Bảo hiểm tai nạn đối với người lao động</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g12.php'; ?>" class="nav-link"><span class="menu-title">G12 - Bảo hiểm chăm sóc sức khỏe cá nhân White Lotus</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g13.php'; ?>" class="nav-link"><span class="menu-title">G13 - Bảo hiểm tai nạn hộ sử dụng điện</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g14.php'; ?>" class="nav-link"><span class="menu-title">G14 - Bảo hiểm tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g15.php'; ?>" class="nav-link"><span class="menu-title">G15 - Toàn Diện Hộ Gia Đình</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g16.php'; ?>" class="nav-link"><span class="menu-title">G16 - Bảo hiểm sức khỏe người vay vốn</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g17.php'; ?>" class="nav-link"><span class="menu-title">G17 - Bảo hiểm tai nạn giao thông đường bộ</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g18.php'; ?>" class="nav-link"><span class="menu-title">G18 - Thông tư 329 - Bảo hiểm đối với người lao động thi công trên công trường</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-bag-dollar"></i>
                                <span class="menu-title"> Bảo hiểm xe tài sản</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm xe tài sản">
                                <li><a href="b01.html" class="nav-link"><span class="menu-title">B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</span></a></li>
                                <li><a href="b02.html" class="nav-link"><span class="menu-title">B02 - Bảo hiểm mọi rủi ro tài sản</span></a></li>
                                <li><a href="b03.html" class="nav-link"><span class="menu-title">B03 - Bảo hiểm công trình kỹ thuật dân dụng hoàn thành</span></a></li>            
                                <li><a href="b04.html" class="nav-link"><span class="menu-title">B04 - Bảo hiểm mọi rủi ro văn phòng</span></a></li>
                                <li><a href="b05.html" class="nav-link"><span class="menu-title">B05 - Bảo hiểm mọi rủi ro nhà ở</span></a></li>
                                <li><a href="b06.html" class="nav-link"><span class="menu-title">B06 - Bảo hiểm tiền</span></a></li>
                                <li><a href="b07.html" class="nav-link"><span class="menu-title">B07 - Bảo hiểm hư hỏng hàng hóa trong kho lạnh</span></a></li>
                                <li><a href="b08.html" class="nav-link"><span class="menu-title">B08 - Bảo hiểm lòng trung thành</span></a></li>
                                <li><a href="b09.html" class="nav-link"><span class="menu-title">B09 - Chứng thư bảo lãnh</span></a></li>
                                <li><a href="b12.html" class="nav-link"><span class="menu-title">B12 - Bảo hiểm bảng hiệu đèn quảng cáo</span></a></li>
                                <li><a href="b16.html" class="nav-link"><span class="menu-title">B16 - Bảo hiểm toàn diện nhà chung cư</span></a></li>
                                <li><a href="b17.html" class="nav-link"><span class="menu-title">B17 - Bảo hiểm vườn cây cao su</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-chart-growth"></i>
                                <span class="menu-title"> Bảo hiểm hàng hóa</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm hàng hóa">
                                <li><a href="e01.html" class="nav-link"><span class="menu-title">E01 - Bảo hiểm hàng hoá xuất nhập khẩu</span></a></li>
                                <li><a href="e02.html" class="nav-link"><span class="menu-title">E02 - Bảo hiểm hàng hoá vận chuyển nội địa</span></a></li>
                                <li><a href="e06.html" class="nav-link"><span class="menu-title">E06 - Bảo hiểm trách nhiệm giao nhận tổng hợp</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-shield-check"></i>
                                <span class="menu-title"> Bảo hiểm trách nhiệm</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm trách nhiệm">
                                <li><a href="h01.html" class="nav-link"><span class="menu-title">H01 - Bảo hiểm trách nhiệm nghề nghiệp</span></a></li>
                                <li><a href="h02.html" class="nav-link"><span class="menu-title">H02 - Bảo hiểm trách nhiệm sản phẩm</span></a></li>
                                <li><a href="h03.html" class="nav-link"><span class="menu-title">H03 - Bảo hiểm trách nhiệm công cộng</span></a></li>
                                <li><a href="h04.html" class="nav-link"><span class="menu-title">H04 - Bảo hiểm trách nhiệm giải thưởng (Hole in one)</span></a></li>
                                <li><a href="h06.html" class="nav-link"><span class="menu-title">H06 - Bảo hiểm Trách nhiệm Giám đốc và Người điều hành</span></a></li>
                                <li><a href="h07.html" class="nav-link"><span class="menu-title">H07 - Bảo hiểm toàn diện ngân hàng</span></a></li>
                                <li><a href="h08.html" class="nav-link"><span class="menu-title">H08 - Bảo hiểm trách nhiệm hoạt động cảng</span></a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-ship2"></i>
                                <span class="menu-title"> Bảo hiểm tàu thuyền</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm tàu thuyền">
                                <li><a href="d01.html" class="nav-link"><span class="menu-title">D01 - Bảo hiểm tàu biển</span></a></li>
                                <li><a href="d02.html" class="nav-link"><span class="menu-title">D02 - Bảo hiểm tàu sông, tàu ven biển</span></a></li>
                                <li><a href="d03.html" class="nav-link"><span class="menu-title">D03 - Bảo hiểm tàu cá</span></a></li>
                                <li><a href="d04.html" class="nav-link"><span class="menu-title">D04 - Bảo hiểm du thuyền</span></a></li>
                                <li><a href="d05.html" class="nav-link"><span class="menu-title">D05 - Bảo hiểm rủi ro đóng tàu</span></a></li>
                                <li><a href="d06.html" class="nav-link"><span class="menu-title">D06 - Bảo hiểm trách nhiệm người sửa chữa tàu</span></a></li>
                                <li><a href="d07.html" class="nav-link"><span class="menu-title">D07 - Bảo hiểm trách nhiệm dân sự chủ tầu viễn dương (P&amp;I mutual)</span></a></li>
                                
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-construction"></i>
                                <span class="menu-title"> Bảo hiểm kĩ thuật</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm kĩ thuật">
                                <li><a href="c01.html" class="nav-link"><span class="menu-title">C01 - Bảo hiểm mọi rủi ro trong xây dựng</span></a></li>
                                <li><a href="c02.html" class="nav-link"><span class="menu-title">C02 - Bảo hiểm mọi rủi ro trong lắp đặt</span></a></li>
                                <li><a href="c03.html" class="nav-link"><span class="menu-title">C03 - Bảo hiểm máy móc thiết bị của chủ thầu</span></a></li>
                                <li><a href="c04.html" class="nav-link"><span class="menu-title">C04 - Bảo hiểm đổ vỡ máy móc</span></a></li>
                                <li><a href="c05.html" class="nav-link"><span class="menu-title">C05 - Bảo hiểm mất lợi nhuận do đổ vỡ máy móc</span></a></li>
                                <li><a href="c06.html" class="nav-link"><span class="menu-title">C06 - Bảo hiểm thiết bị điện tử</span></a></li>
                                <li><a href="c07.html" class="nav-link"><span class="menu-title">C07 - Bảo hiểm mọi rủi ro máy móc thiết bị cho thuê</span></a></li>
                                <li><a href="c08.html" class="nav-link"><span class="menu-title">C08 - Bảo hiểm nồi hơi</span></a></li>
                                <li><a href="c09.html" class="nav-link"><span class="menu-title">C09 - Bảo hiểm toàn diện đối với máy móc thiết bị</span></a></li>
                                <li><a href="c10.html" class="nav-link"><span class="menu-title">C10 - Bảo hiểm mọi rủi ro trong công nghiệp</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-plane"></i>
                                <span class="menu-title">Bảo hiểm hàng không</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm hàng không">
                                <li class="nav-item nav-item-submenu">
                                    <a href="a01.html" class="nav-link">
                                        <span class="menu-title"> A01 - Bảo hiểm thân, phụ tùng máy bay và trách nhiệm hàng không</span>
                                    </a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item nav-item-submenu">
                                            <a href="" class="nav-link">
                                                <span class="menu-title">Bảo hiểm thân máy bay</span>
                                            </a>
                                            <ul class="nav nav-group-sub">
                                                <li>
                                                    <a href="" class="nav-link">
                                                        <span class="menu-title">Bảo hiểm phụ tùng máy bay</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="nav-link">
                                                        <span class="menu-title">Trách nhiệm hàng không</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="a02.html" class="nav-link"><span class="menu-title"> A02 - Bảo hiểm thân máy bay dưới mức miễn thường </span></a></li>
                                <li><a href="a03.html" class="nav-link"><span class="menu-title">A03 - Bảo hiểm thân, phụ tùng máy bay đối với rủi ro chiến tranh</span></a></li>
                                <li><a href="a04.html" class="nav-link"><span class="menu-title">A04 - Bảo hiểm trách nhiệm đối với rủi ro chiến tranh</span></a></li>
                                <li><a href="a05.html" class="nav-link"><span class="menu-title">A05 - Bảo hiểm mất khả năng sử dụng máy bay</span></a></li>
                                <li><a href="a06.html" class="nav-link"><span class="menu-title">A06 - Bảo hiểm tai nạn nhân viên tổ bay</span></a></li>
                                <li><a href="a07.html" class="nav-link"><span class="menu-title">A07 - Phí Cty BH gốc</span></a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-gas"></i>
                                <span class="menu-title"> Bảo hiểm dầu khí</span>
                            </a>
                            <ul class="nav nav-group-sub" data-submenu-title="Bảo hiểm dầu khí">
                                <li><a href="" class="nav-link"><div class="menu-title">I01 - Bảo hiểm dầu khí</div></a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:;" class="nav-link">
                                <i class="linearicons-repeat-one3"></i>
                                <span class="menu-title"> Nhận tái cố định</span>
                            </a>

                            <ul class="nav nav-group-sub" data-submenu-title="Nhận tái cố định">
                                <li><a href="j01.html" class="nav-link"><span class="menu-title">J01 - Nhận tái cố định nhóm bảo hiểm hàng hóa</span></a></li>
                                <li><a href="j04.html" class="nav-link"><span class="menu-title">J04 - Nhận tái cố định nhóm bảo hiểm hàng không</span></a></li>
                                <li><a href="j05.html" class="nav-link"><span class="menu-title">J05 - Nhận tái cố định nhóm bảo hiểm tài sản</span></a></li>
                                <li><a href="j06.html" class="nav-link"><span class="menu-title">J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật</span></a></li>
                                <li><a href="j07.html" class="nav-link"><span class="menu-title">J07 - Nhận tái cố định nhóm bảo hiểm tàu thuyền</span></a></li>
                                <li><a href="j08.html" class="nav-link"><span class="menu-title">J08 - Nhận tái cố định nhóm bảo hiểm xe cơ giới</span></a></li>
                                <li><a href="j09.html" class="nav-link"><span class="menu-title">J09 - Nhận tái cố định nhóm bảo hiểm con người</span></a></li>
                                <li><a href="j10.html" class="nav-link"><span class="menu-title">J10 - Nhận tái cố định nhóm bảo hiểm trách nhiệm</span></a></li>
                                <li><a href="j11.html" class="nav-link"><span class="menu-title">J11 - Nhận tái cố định nhóm bảo hiểm dầu khí</span></a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!-- End-Main navigation -->

                <!-- BOX -->
                <div class="sup-box mt-5">
                    <div class="sup-up">
                        <h3>Hỗ trợ khẩn cấp</h3>
                        <p>Liên hệ ngay cho tôi !</p>
                    </div>
                    <img class="img" src="<?php echo HTTP_PATH .'app-assets/images/sidebar-bg/chat.png'; ?>" alt="">
                    <div class="sup-down">
                        <p><a href=""><i class="linearicons-bubble mr-1"></i> <span>Chat</span></a></p>
                        <p><a href=""><i class="linearicons-phone-wave mr-1"></i> <span>Call</span></a></p>
                    </div>
                </div>
                <!-- End-BOX -->
            </div>
            <!-- End-Sidebar content -->

        </div>

        <!-- /Sidebar -->
