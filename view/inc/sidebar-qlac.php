        <!-- Sidebar -->

        <?php 
            $attr = '';
            $arr = array();
            if (!empty($GLOBALS["menu"])) {
                $attr = $GLOBALS["menu"];
                $arr = explode(",",$attr);
            }
         ?>

        <div id="main-nav" class="sidebar">
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
                        <i class="fal fa-toggle-on"></i>
                    </a>
                    <a href="<?php echo HTTP_PATH ?>view/qlac/" class="logo-text float-left">
                        <div class="logo-img"><img src="<?php echo HTTP_PATH ?>app-assets/images/logo/logo2.png" alt="VNI Logo"></div>
                        <span class="text align-middle" style="font-weight: 500;">QLAC</span>
                    </a>
                </div>
                <!-- End-Logo -->

                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <li class="nav-item">
                            <a href="<?php echo HTTP_PATH ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                <i class="fad fa-home fa-fw"></i>
                                <span class="menu-title">Bảng điều khiển</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo HTTP_PATH ?>view/qlac/" class="nav-link <?php echo in_array('index', $arr) ? "active" : ""; ?>">
                                <i class="fad fa-search fa-fw"></i>
                                <span class="menu-title">Tra cứu ấn chỉ</span>
                            </a>
                        </li>

                        <li class="nav-item nav-item-submenu <?php echo in_array('nhap-kho', $arr) ? "nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                <i class="fad fa-warehouse fa-fw"></i>
                                <span class="menu-title">Nhập kho</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Nhập kho">
                                <li class="nav-item">
                                    <a href="<?php echo HTTP_PATH ?>view/qlac/nhap-kho/cau-hinh-ngay-het-han-ac.php" class="nav-link <?php echo in_array('cau-hinh-ngay-het-han-ac', $arr) ? "active" : ""; ?>">
                                        <span class="menu-title">Cấu hình ngày hết hạn ấn chỉ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu <?php echo in_array('xuat-kho', $arr) ? "nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>" 
                                
                            >
                                <i class="fad fa-warehouse-alt fa-fw"></i>
                                <span class="menu-title">Xuất kho</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Xuất kho">
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/xuat-kho/chi-nhanh.php" class="nav-link <?php echo in_array('xuat-kho-chi-nhanh', $arr) ? "active" : ""; ?>"><span class="menu-title">Xuất ấn chỉ cho chi nhánh</span></a></li>
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/xuat-kho/phong-ban.php" class="nav-link <?php echo in_array('xuat-kho-phong-ban', $arr) ? "active" : ""; ?>"><span class="menu-title">Xuất ấn chỉ cho phòng ban</span></a></li>
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/xuat-kho/can-bo.php" class="nav-link <?php echo in_array('xuat-kho-can-bo', $arr) ? "active" : ""; ?>"><span class="menu-title">Xuất ấn chỉ cho cán bộ</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu <?php echo in_array('two', $arr) ? "nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                <i class="fad fa-file-signature fa-fw"></i>
                                <span class="menu-title">Đề nghị cấp AC</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Đề nghị cấp AC">
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Đề nghị cấp ấn chỉ của chi nhánh</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Đề nghị cấp ấn chỉ của phòng ban</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Đề nghị cấp ấn chỉ của bộ</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu <?php echo in_array('two', $arr) ? "nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                <i class="fad fa-engine-warning fa-fw"></i>
                                <span class="menu-title">Huỷ / mất AC</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Huỷ / mất AC">
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Khai thác AC Huỷ/Mất <br>(Bộ phận khai thác nhập)</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Khai thác AC Huỷ/Mất <br>(Kế toán AC nhập)</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Import AC Xe máy</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Import AC tai nạn HSD điện</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Import AC toàn diện hộ GĐ</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Import AC tai nạn con người</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Import AC tai nạn giao thông</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu <?php echo in_array('two', $arr) ? "nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                <i class="fad fa-hand-holding-box fa-fw"></i>
                                <span class="menu-title">Nhập trả AC</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Nhập trả AC">
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Nhập trả AC trắng <br>(Nguyên quyển)</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Nhập huỷ AC</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu <?php echo in_array('two', $arr) ? "nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                <i class="fad fa-directions fa-fw"></i>
                                <span class="menu-title"> Pages Template</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Pages Template">
                                <li class="nav-item nav-item-submenu <?php echo in_array('two', $arr) ? "nav-item-open" : ""; ?>">
                                    <a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                        <span class="menu-title">Bảo hiểm</span>
                                    </a>
                                    <ul class="nav nav-group-sub">
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Danh sách đơn</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/nhap-don.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Nhập đơn</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/nhap-don2.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Nhập đơn 2</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/xem-don.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Xem đơn</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/ban-chao/danh-sach-ban-chao.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Bản chào</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/don-cho-duyet.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Đơn chờ duyệt</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/xin-cap-so-hop-dong.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Xin cấp số hợp đồng</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/danh-sach-khach-hang.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Danh sách khách hàng</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/sdbs/gxx.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Sửa đổi bổ sung Gxx</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/sdbs/bxx.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Sửa đổi bổ sung Bxx</span></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu <?php echo in_array('two', $arr) ? "nav-item-open" : ""; ?>">
                                    <a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                        <span class="menu-title">Bồi thường</span>
                                    </a>
                                    <ul class="nav nav-group-sub">
                                        <li><a href="<?php echo HTTP_PATH .'view/claim/danh-sach-ho-so.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Danh sách hồ sơ</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/claim/xem-ho-so.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Xem hồ sơ</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/claim/nhap-ho-so.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Nhập hồ sơ</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/claim/danh-sach-ton-that.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Danh sách tổn thất</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/claim/nhap-thong-bao-ton-that.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Nhập tổn thất</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/claim/lap-pasc.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Lập PASC</span></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu <?php echo in_array('two', $arr) ? "nav-item-open" : ""; ?>">
                                    <a href="" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>">
                                        <span class="menu-title">Địa điểm</span>
                                    </a>
                                    <ul class="nav nav-group-sub">
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/danh-sach-dia-diem.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Danh sách địa điểm</span></a></li>
                                        <li><a href="<?php echo HTTP_PATH .'view/pages/nhap-dia-diem.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Nhập địa điểm</span></a></li>

                                    </ul>
                                </li>

                                <li><a href="<?php echo HTTP_PATH .'view/pages/login.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Trang Login</span></a></li>
                                <li><a href="<?php echo HTTP_PATH .'view/pages/404.php'; ?>" class="nav-link <?php echo in_array('one', $arr) ? "active" : ""; ?>"><span class="menu-title">Trang 404</span></a></li>
                            </ul>
                        </li>

                        
                        
                    </ul>
                </div>
                <!-- End-Main navigation -->

                <!-- BOX -->
                <div class="sup-box mt-5 d-none">
                    <div class="sup-up">
                        <h3>Hỗ trợ khẩn cấp</h3>
                        <p>Liên hệ ngay cho tôi !</p>
                    </div>
                    <img class="img" src="<?php echo HTTP_PATH .'app-assets/images/sidebar-bg/chat.png'; ?>" alt="">
                    <div class="sup-down">
                        <p><a href=""><i class="fad fa-comment-lines mr-1"></i> <span>Chat</span></a></p>
                        <p><a href=""><i class="fad fa-phone-rotary mr-1"></i> <span>Call</span></a></p>
                    </div>
                </div>
                <!-- End-BOX -->
            </div>
            <!-- End-Sidebar content -->

        </div>

        <!-- /Sidebar -->
