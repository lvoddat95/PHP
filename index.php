<?php require_once 'config.php'; ?>

<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'index'; ?>
<body>

    <div class="page-content home-page">

        <?php include_once SIDEBAR; ?>

        <div class="content-wrapper">

            <div class="content">

                <?php include_once 'view/inc/mobile-bottom.php'; ?>

                <!-- Header -->
                <div class="header-top">
                    <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                        <i class="far fa-align-left"></i>
                    </button>
                    <div class="top-left">
                        <div class="breadcrumb">
                            <a href="" class="breadcrumb-item"><i class="fad fa-home mr-1"></i> Trang chủ</a>
                            <span class="breadcrumb-item active">Ứng dụng</span>
                        </div>
                        <div class="d-md-none logo-mobile">
                            <a href="" class="logo-text">
                                <div class="logo-img"><img src="app-assets/images/logo/logo2.png" alt="VNI Logo"></div>
                                <span class="text align-middle" style="font-weight: 900;">VNI</span>
                            </a>
                        </div>
                    </div>

                    <?php include_once TOP_RIGHT; ?>

                </div>
                <!-- /Header -->
                <section>
                    <div class="sec-report">
                        <div class="row">
                            <div class="col-xl-4 col-md-4 col-sm-4 col-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body white text-left">
                                                    <p class="font-size-s card-title mb-0 ">120,890,000₫</p>
                                                    <span class="grey darken-1">Doanh thu hôm nay</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="fad fa-sack-dollar text-indigo-700"
                                                        style="font-size: 26px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="WidgetlineChart lineChartWidget mb-2">
                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                                <g class="ct-grids"></g>
                                                <g>
                                                    <g class="ct-series ct-series-a">
                                                        <path
                                                            d="M10,95L10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333L424.986,95Z"
                                                            class="ct-area"></path>
                                                        <path
                                                            d="M10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333"
                                                            class="ct-line"></path>
                                                        <circle cx="10" cy="95" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="92.99715576171874" cy="60.333333333333336" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="175.9943115234375" cy="79" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="258.9914672851562" cy="15" r="10"
                                                            class="ct-point-circle"></circle>
                                                        <circle cx="341.988623046875" cy="47" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="424.98577880859375" cy="20.33333333333333" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                    </g>
                                                </g>
                                                <g class="ct-labels"></g>
                                                <defs>
                                                    <linearGradient id="wGradient" x1="0" y1="1" x2="0" y2="0">
                                                        <stop offset="0" stop-color="rgba(130,73,232, 1)"></stop>
                                                        <stop offset="1" stop-color="rgba(41,123,249, 1)"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line x1="341.988623046875" x2="341.988623046875" y1="95" y2="15"
                                                    class="ct-target-line"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body white text-left">
                                                    <p class="font-size-s card-title mb-0">$45,670,000</p>
                                                    <span class="grey darken-1">Thanh toán bồi thường</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="fad fa-credit-card text-danger"
                                                        style="font-size: 26px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="WidgetlineChart1 lineChartWidget mb-2">
                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                                <g class="ct-grids"></g>
                                                <g>
                                                    <g class="ct-series ct-series-a">
                                                        <path
                                                            d="M10,95L10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333L424.986,95Z"
                                                            class="ct-area"></path>
                                                        <path
                                                            d="M10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333"
                                                            class="ct-line"></path>
                                                        <circle cx="10" cy="95" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="92.99715576171874" cy="60.333333333333336" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="175.9943115234375" cy="79" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="258.9914672851562" cy="15" r="10"
                                                            class="ct-point-circle"></circle>
                                                        <circle cx="341.988623046875" cy="47" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="424.98577880859375" cy="20.33333333333333" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                    </g>
                                                </g>
                                                <g class="ct-labels"></g>
                                                <defs>
                                                    <linearGradient id="wGradient1" x1="0" y1="0" x2="0" y2="1">
                                                        <stop offset="0" stop-color="rgba(252,157,48, 1)"></stop>
                                                        <stop offset="1" stop-color="rgba(250,91,76, 1)"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line x1="341.988623046875" x2="341.988623046875" y1="95" y2="15"
                                                    class="ct-target-line"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body white text-left">
                                                    <p class="font-size-s card-title mb-0">1,220</p>
                                                    <span class="grey darken-1">Đơn bảo hiểm mới</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="fad fa-layer-plus text-success"
                                                        style="font-size: 26px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="WidgetlineChart2 lineChartWidget mb-2">
                                            <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                                <g class="ct-grids"></g>
                                                <g>
                                                    <g class="ct-series ct-series-a">
                                                        <path
                                                            d="M10,95L10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333L424.986,95Z"
                                                            class="ct-area"></path>
                                                        <path
                                                            d="M10,95C51.499,95,51.499,60.333,92.997,60.333C134.496,60.333,134.496,79,175.994,79C217.493,79,217.493,15,258.991,15C300.49,15,300.49,47,341.989,47C383.487,47,383.487,20.333,424.986,20.333"
                                                            class="ct-line"></path>
                                                        <circle cx="10" cy="95" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="92.99715576171874" cy="60.333333333333336" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="175.9943115234375" cy="79" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="258.9914672851562" cy="15" r="10"
                                                            class="ct-point-circle"></circle>
                                                        <circle cx="341.988623046875" cy="47" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                        <circle cx="424.98577880859375" cy="20.33333333333333" r="10"
                                                            class="ct-point-circle-transperent"></circle>
                                                    </g>
                                                </g>
                                                <g class="ct-labels"></g>
                                                <defs>
                                                    <linearGradient id="wGradient2" x1="0" y1="0" x2="0" y2="1">
                                                        <stop offset="0" stop-color="rgba(120, 204, 55, 1)"></stop>
                                                        <stop offset="1" stop-color="rgba(0, 75, 145, 1)"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line x1="341.988623046875" x2="341.988623046875" y1="95" y2="15"
                                                    class="ct-target-line"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sec-aplication">
                        <div class="card">
                            <div class="card-header">
                                <p class="card-title text-center font-size-s"><i class="icon-grid5 mr-2 bg-indigo-700"
                                        style="height: 30px;width: 30px;text-align: center;line-height: 30px;border-radius: 50%;"></i>Danh
                                    sách ứng dụng</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-theme-10">
                                            <a href="#1" class="about-link"><span class="d-none">link</span></a>
                                            <div class="about-main-icon">
                                                <i class="fad fa-shield" aria-hidden="true"></i>
                                            </div>
                                            <div class="about-hover" >
                                                <h5 class="mb-0 font-size-s">Bảo lãnh</h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="">F01 - Bảo hiểm xe máy</a></li>
                                                    <li><a href="">F02 - Bảo hiểm xe ô tô</a></li>
                                                </ul>
                                            </div>
                                            <div class="about-move"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-theme-10">
                                            <a href="#2" class="about-link"><span class="d-none">link</span></a>
                                            <div class="about-main-icon">
                                                <i class="fad fa-sack-dollar" aria-hidden="true"></i>
                                            </div>
                                            <div class="about-hover" >
                                                <h5 class="mb-0 font-size-s">Bồi thường</h5>
                                                <ul class="list-unstyled" >
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g01.php'; ?>"><span>G01 - Bảo hiểm sức khỏe toàn diện</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g02.php'; ?>"><span>G02 - Bảo hiểm con người mức trách nhiệm cao (VNI Care)</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g03.php'; ?>"><span>G03 - Bảo hiểm tai nạn con người</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g04.php'; ?>"><span>G04 - Bảo hiểm tai nạn con người của Cologne Re</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g05.php'; ?>"><span>G05 - Bảo hiểm toàn diện học sinh</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g06.php'; ?>"><span>G06 - Bảo hiểm du lịch trong nước</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g07.php'; ?>"><span>G07.1 - Du lịch quốc tế</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g072.php'; ?>"><span>G07.2 - Người Việt Nam du lịch nước ngoài</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g073.php'; ?>"><span>G07.3 - Người nước ngoài du lịch Việt Nam</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g08.php'; ?>"><span>G08 - Bảo hiểm sức khỏe giáo viên</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g09.php'; ?>"><span>G09 - Bảo hiểm tai nạn đối với người lao động</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g12.php'; ?>"><span>G12 - Bảo hiểm chăm sóc sức khỏe cá nhân White Lotus</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g13.php'; ?>"><span>G13 - Bảo hiểm tai nạn hộ sử dụng điện</span></a></li>
                                                    <li><a href="<?php echo HTTP_PATH .'view/insurance/PER/g16.php'; ?>"><span>G16 - Bảo hiểm sức khỏe người vay vốn</span></a></li>
                                                </ul>
                                            </div>
                                            <a href="javascript:;" class="about-readmore" >
                                                <i class="far fa-plus"></i>
                                            </a>
                                            <div class="about-move"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-blue-400">
                                            <div class="about-main-icon">
                                                <i class="fad fa-repeat" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="mb-0 font-size-s">Tái bảo hiểm</h5>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-pink-500">
                                            <div class="about-main-icon">
                                                <i class="fad fa-calculator" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="mb-0 font-size-s">Kế toán</h5>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-theme-11" onclick="location.href='view/qlac/'">
                                            <div class="about-main-icon">
                                                <i class="fad fa-file-certificate" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="mb-0 font-size-s">Ấn Chỉ</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-teal-600">
                                            <div class="about-main-icon">
                                                <i class="fad fa-analytics" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="mb-0 font-size-s">Báo cáo</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-indigo-700">
                                            <div class="about-main-icon">
                                                <i class="fad fa-archive" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="mb-0 font-size-s">Danh mục dùng chung</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-purple-600">
                                            <div class="about-main-icon">
                                                <i class="fad fa-users-cog" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="mb-0 font-size-s">Quản trị người dùng</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="about-box bg-theme-16">
                                            <div class="about-main-icon">
                                                <i class="fad fa-money-check-edit" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="mb-0 font-size-s">Cấp đơn Bancassurance</h5>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php include_once BOTTOM; ?>

            </div>

        </div>

    </div>

</body>

<?php include_once FOOTER; ?>