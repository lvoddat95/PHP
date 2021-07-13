        <!-- Sidebar -->
<?php 
    $attr_menu = '';
    $arr_menu = array();
    if (!empty($GLOBALS["menu"])) {
        $attr_menu = $GLOBALS["menu"];
        $arr_menu = explode(",",$attr_menu);
    }
 ?>
        <div id="main-nav" class="sidebar">
            <!-- Mobile Top -->
            <div class="sidebar-mobile-toggler">
        		<span>Danh sách Menu</span>
        		<a href="#" class="sidebar-mobile-main-close">
        			<i class="icon-arr_menuow-left8"></i>
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
                            <a href="<?php echo HTTP_PATH ?>" class="nav-link<?php echo in_array('one', $arr_menu) ? " active" : ""; ?>">
                                <i class="fad fa-home fa-fw"></i>
                                <span class="menu-title">Bảng điều khiển</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo HTTP_PATH ?>view/qlac/" class="nav-link<?php echo in_array('index', $arr_menu) ? " active" : ""; ?>">
                                <i class="fad fa-search fa-fw"></i>
                                <span class="menu-title">Tra cứu ấn chỉ</span>
                            </a>
                        </li>

                        <li class="nav-item nav-item-submenu<?php echo in_array('nhap-kho', $arr_menu) ? " nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link<?php echo in_array('one', $arr_menu) ? " active" : ""; ?>">
                                <i class="fad fa-warehouse fa-fw"></i>
                                <span class="menu-title">Nhập kho</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Nhập kho">
                                <li class="nav-item">
                                    <a href="<?php echo HTTP_PATH ?>view/qlac/nhap-kho/cau-hinh-ngay-het-han-ac.php" class="nav-link <?php echo in_array('cau-hinh-ngay-het-han-ac', $arr_menu) ? "active" : ""; ?>">
                                        <span class="menu-title">Cấu hình ngày hết hạn ấn chỉ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu<?php echo in_array('xuat-kho', $arr_menu) ? " nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link<?php echo in_array('one', $arr_menu) ? " active" : ""; ?>" 
                                
                            >
                                <i class="fad fa-warehouse-alt fa-fw"></i>
                                <span class="menu-title">Xuất kho</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Xuất kho">
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/xuat-kho/chi-nhanh.php" class="nav-link <?php echo in_array('xuat-kho-chi-nhanh', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Xuất ấn chỉ cho chi nhánh</span></a></li>
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/xuat-kho/phong-ban.php" class="nav-link <?php echo in_array('xuat-kho-phong-ban', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Xuất ấn chỉ cho phòng ban</span></a></li>
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/xuat-kho/can-bo.php" class="nav-link <?php echo in_array('xuat-kho-can-bo', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Xuất ấn chỉ cho cán bộ</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu<?php echo in_array('de-nghi-cap-ac', $arr_menu) ? " nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link<?php echo in_array('one', $arr_menu) ? " active" : ""; ?>">
                                <i class="fad fa-file-signature fa-fw"></i>
                                <span class="menu-title">Đề nghị cấp AC</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Đề nghị cấp AC">
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/de-nghi-cap-ac/chi-nhanh.php" class="nav-link <?php echo in_array('de-nghi-cap-ac-chi-nhanh', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Đề nghị cấp ấn chỉ của chi nhánh</span></a></li>
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/de-nghi-cap-ac/phong-ban.php" class="nav-link <?php echo in_array('de-nghi-cap-ac-phong-ban', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Đề nghị cấp ấn chỉ của phòng ban</span></a></li>
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/de-nghi-cap-ac/can-bo.php" class="nav-link <?php echo in_array('de-nghi-cap-ac-can-bo', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Đề nghị cấp ấn chỉ của bộ</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu<?php echo in_array('huy-mat-ac', $arr_menu) ? " nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link<?php echo in_array('one', $arr_menu) ? " active" : ""; ?>">
                                <i class="fad fa-engine-warning fa-fw"></i>
                                <span class="menu-title">Huỷ / mất AC</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Huỷ / mất AC">
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/huy-mat-ac/khai-bao-ac-huy-mat.php" class="nav-link <?php echo in_array('khai-bao-ac-huy-mat', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Khai báo AC Huỷ/Mất <br>(Bộ phận khai thác nhập)</span></a></li>
                                <li class="nav-item"><a href="<?php echo HTTP_PATH ?>view/qlac/huy-mat-ac/xac-nhan-ac-huy-mat.php" class="nav-link <?php echo in_array('xac-nhan-ac-huy-mat', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Xác nhận AC Huỷ/Mất <br>(Kế toán AC nhập)</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('import-ac-xe-may', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Import AC Xe máy</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('import-ac-tai-nan-sd-dien', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Import AC tai nạn HSD điện</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('import-ac-toan-dien-ho-gd', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Import AC toàn diện hộ GĐ</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('import-ac-tai-nan-con-nguoi', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Import AC tai nạn con người</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('import-ac-tai-nan-giao-thong', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Import AC tai nạn giao thông</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-submenu<?php echo in_array('nhap-tra-ac', $arr_menu) ? " nav-item-open" : ""; ?>">
                            <a href="javascript:;" class="nav-link<?php echo in_array('one', $arr_menu) ? " active" : ""; ?>">
                                <i class="fad fa-hand-holding-box fa-fw"></i>
                                <span class="menu-title">Nhập trả AC</span>
                            </a>
                            <ul class="nav nav-group-sub" scrollbar data-submenu-title="Nhập trả AC">
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('nhap-tra-ac-trang', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Nhập trả AC trắng <br>(Nguyên quyển)</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link <?php echo in_array('nhap-huy-ac', $arr_menu) ? "active" : ""; ?>"><span class="menu-title">Nhập huỷ AC</span></a></li>
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
