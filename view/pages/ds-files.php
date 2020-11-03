<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>
    
    <body class="sidebar-xs">

        <div class="page-content home-page">

            <?php include_once SIDEBAR; ?>

            <div class="content-wrapper">

                <div class="content">

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="far fa-align-left"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> F01 - Bảo hiểm xe máy</a>
                                <span class="breadcrumb-item active">Cập nhập đơn</span>
                            </div>
                            <div class="d-md-none logo-mobile">
                                <a href="<?php echo HTTP_PATH; ?>" class="logo-text">
                                    <div class="logo-img"><img src="<?php echo HTTP_PATH .'app-assets/images/logo/logo2.png'; ?>" alt="VNI Logo"></div>
                                    <span class="text align-middle" style="font-weight: 900;">VNI</span>
                                </a>
                            </div>
                        </div>
                        <?php include_once TOP_RIGHT; ?>
                    </div>
                    <!-- /Header -->

                    <!-- Content-block -->
                    <div class="content-block card card-body">
                     <div class="file-manager">
                    <div class="f-left">
                        <div class="f-left-wrapper">
                            <div id="nav-file" class="nav nav-file nav-sidebar">
                                <li class="nav-item-header"><span>Danh mục</span></li>
                                <a href="#" class="nav-link nav-button" data-filter=".a">
                                    <i class="far fa-square"></i><span>Tài liệu</span>
                                </a>
                                <a href="#" class="nav-link nav-button" data-filter=".b">
                                    <i class="far fa-square"></i><span>Hình ảnh</span>
                                </a>
                                <a href="#" class="nav-link nav-button" data-filter=".c">
                                    <i class="far fa-square"></i><span>Video</span>
                                </a>
                                <a href="#" class="nav-link nav-button" data-filter=".d">
                                    <i class="far fa-square"></i><span>Âm thanh</span>
                                </a>
                                <a href="#" class="nav-link nav-button" data-filter=".e">
                                    <i class="far fa-square"></i><span>File nén</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="f-right grid">
                        <div class="file-header d-flex justify-content-between">
                            <div class="file-view">
                                <button class="btn btn-light btn-sm" onclick="list_view(this);return false;" title="List"><i class="icon-list2"></i></button>
                                <button class="btn btn-light btn-sm active" onclick="grid_view(this);return false;" title="Grid"><i class="icon-grid2"></i></button>
                            </div>
                            <div class="file-search">
                                <input type="text" name="" class="form-control form-control-sm isotope-search" placeholder="Tìm kiếm...">
                                <button type="submit"><i class="icon-search4"></i></button>
                            </div>
                        </div>
                        <ul class="list-files">
                            <li class="file-item a">
                                        <div class="file-wrapper" >
                                            <div class="file-checkox">
                                                <label for="f1"></label>
                                                <input type="checkbox" id="f1">
                                            </div>
                                            <span class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">Text.txt</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">13 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f2"></label>
                                                <input type="checkbox" id="f2">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/image2.jpg) " class="file-icon"></span>
                                            <div class="file-info">
                                                <span class="name">preview-15.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f3"></label>
                                                <input type="checkbox" id="f3">
                                            </div>
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Celine Dion - Ashes.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item b">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f4"></label>
                                                <input type="checkbox" id="f4">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/image.png) " class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">preview-11.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item c">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f5"></label>
                                                <input type="checkbox" id="f5">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/files/image.png)" class="file-icon file-image"></span>
                                            <div class="file-info">
                                                <span class="name">preview.png</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item d">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f6"></label>
                                                <input type="checkbox" id="f6">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/image3.jpg)" class="file-icon file-image"></span>
                                            <div class="file-info">
                                                <span class="name">Copy preview-11.jpg</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">890.50 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f7"></label>
                                                <input type="checkbox" id="f7">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/files/excel.png)" class="file-icon file-excel"></span>
                                            <div class="file-info">
                                                <span class="name">Excel Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">520.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item e">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f8"></label>
                                                <input type="checkbox" id="f8">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/files/excel.png)" class="file-icon file-excel"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Excel Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">520.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f9"></label>
                                                <input type="checkbox" id="f9">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/files/pdf.png)" class="file-icon file-pdf"></span>
                                            <div class="file-info">
                                                <span class="name">PDF Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">120.12 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f10"></label>
                                                <input type="checkbox" id="f10">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/files/arc.png)" class="file-icon file-arc"></span>
                                            <div class="file-info">
                                                <span class="name">ZIP Archive</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">20.05 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item b">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f11"></label>
                                                <input type="checkbox" id="f11">
                                            </div>
                                            <span style="background-image: url(<?php echo ASSET_ROOT; ?>/images/files/pp.png)" class="file-icon file-pp"></span>
                                            <div class="file-info">
                                                <span class="name">PPTX Sample File</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">245.05 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item c">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f12"></label>
                                                <input type="checkbox" id="f12">
                                            </div>
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Secret.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">5.2 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f13"></label>
                                                <input type="checkbox" id="f13">
                                            </div>
                                            <span class="file-icon file-audio"></span>
                                            <div class="file-info">
                                                <span class="name">Martin Clo - MM.mp4</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">4.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item d">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f14"></label>
                                                <input type="checkbox" id="f14">
                                            </div>
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">1.1 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f15"></label>
                                                <input type="checkbox" id="f15">
                                            </div>
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f16"></label>
                                                <input type="checkbox" id="f16">
                                            </div>
                                            <span class="file-icon file-txt"></span>
                                            <div class="file-info">
                                                <span class="name">Text Sample.txt</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">53 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item e">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f17"></label>
                                                <input type="checkbox" id="f17">
                                            </div>
                                            <span class="file-icon file-video"></span>
                                            <div class="file-info">
                                                <span class="name">Video Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">119 MB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item a">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f18"></label>
                                                <input type="checkbox" id="f18">
                                            </div>
                                            <span class="file-icon file-csv"></span>
                                            <div class="file-info">
                                                <span class="name">CSV Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">89.21 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item b">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f19"></label>
                                                <input type="checkbox" id="f19">
                                            </div>
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item c">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f20"></label>
                                                <input type="checkbox" id="f20">
                                            </div>
                                            <span class="file-icon file-word"></span>
                                            <div class="file-info">
                                                <span class="name">Copy Word Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">19.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-item d">
                                        <div class="file-wrapper">
                                            <div class="file-checkox">
                                                <label for="f21"></label>
                                                <input type="checkbox" id="f21">
                                            </div>
                                            <span class="file-icon file-xps"></span>
                                            <div class="file-info">
                                                <span class="name">XPX Sample</span>
                                                <span class="date">6/29/2020 3:53 AM</span>
                                                <span class="type">TXT File</span>
                                                <span class="size">9.98 KB</span>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="text-primary icon-file-text2"></i> Chi tiết</a>
                                                    <a href="#" class="dropdown-item"><i class="text-success icon-compose"></i> Chỉnh sửa</a>
                                                    <a href="#" class="dropdown-item"><i class="text-danger icon-trash"></i> Xóa file</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                            
                            
                        </ul>

                    </div>
                </div>
                    


                    
                    </div>
                    <!-- /Content-block -->

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>
            
        </div>

    </body>

<?php include_once FOOTER; ?>
    <script>
        var entityMap = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;",
            "/": "&#x2F;",
            "`": "&#x60;",
            "=": "&#x3D;",
        };

        function escapeHtml(string) {
            if (string == null) {
                return "";
            }
            return String(string).replace(/[&<>"'`=\/]/g, function (s) {
                return entityMap[s];
            });
        }

        var selectedIds = [];

        function updateMasterCheckbox() {
            var numChkBoxes = $("#data-grid input[type=checkbox][id!=mastercheckbox][class=checkboxGroups]").length;
            var numChkBoxesChecked = $("#data-grid input[type=checkbox][id!=mastercheckbox][class=checkboxGroups]:checked").length;
            $("#mastercheckbox").attr("checked", numChkBoxes == numChkBoxesChecked && numChkBoxes > 0);
            if ($("#boxchecked").length) {
                $("#boxchecked").val(numChkBoxesChecked);
            }
        }

        function updateTable(tableSelector) {
            $(tableSelector).DataTable().ajax.reload();
            $(tableSelector).DataTable().columns.adjust();
            if (true) {
                $("#mastercheckbox").attr("checked", false).change();
                selectedIds = [];
            }
        }

        $(document).ready(function () {
            $("#data-grid").DataTable({
                headerCallback: function (thead, data, start, end, display) {
                    return addClassHeader(thead, data, start, end, display);
                },

                processing: true,

                serverSide: true,

                ajax: {
                    url: "http://qlbh.bhhk.vn:8088/MV/IndexJson",
                    type: "POST",
                    dataType: "json",
                    dataSrc: "data",
                    data: function (data) {
                        $("#loading").show();

                        data.p_unit_id = $("#p_unit_id").val();

                        data.p_department_id = $("#p_department_id").val();

                        data.p_staff_id = $("#p_staff_id").val();

                        data.p_customer_code = $("#p_customer_code").val();

                        data.p_customer_name = $("#p_customer_name").val();

                        data.p_policy_code = $("#p_policy_code").val();

                        data.p_from_issue_date = $("#p_from_issue_date").val();

                        data.p_to_issue_date = $("#p_to_issue_date").val();

                        data.p_status = $("#p_status").val();

                        data.p_policy_type = $("#p_policy_type").val();
                        // addAntiForgeryToken(data);
                        return data;
                    },
                },
                info: true,
                paging: true,
                searching: false,
                pagingType: "simple_numbers",
                language: {
                    emptyTable: "Kh\u00F4ng c\u00F3 d\u1EEF li\u1EC7u",
                    info: " Hi\u1EC3n th\u1ECB _START_ \u0111\u1EBFn _END_ tr\u00EAn T\u1ED5ng s\u1ED1 _TOTAL_ b\u1EA3n ghi",
                    infoEmpty: "Kh\u00F4ng c\u00F3 b\u1EA3n ghi n\u00E0o",
                    infoFiltered: "Th\u00F4ng tin \u0111\u00E3 \u0111\u01B0\u1EE3c l\u1ECDc",
                    thousands: ",",
                    lengthMenu: " _MENU_ ",
                    loadingRecords: "\u0110ang t\u1EA3i...",
                    processing: "\u0110ang x\u1EED l\u00FD...",
                    search: "T\u00ECm ki\u1EBFm",
                    zeroRecords: "Kh\u00F4ng t\u00ECm th\u1EA5y d\u1EEF li\u1EC7u ph\u00F9 h\u1EE3p",
                    paginate: {
                        first: "\u2190  \u0110\u1EA7u",
                        last: "Cu\u1ED1i  \u2192",
                        next: "Sau \u2192",
                        previous: "\u2190 Tr\u01B0\u1EDBc",
                    },
                    aria: {
                        sortAscending: "S\u1EAFp x\u1EBFp t\u0103ng d\u1EA7n",
                        sortDescending: "S\u1EAFp x\u1EBFp gi\u1EA3m d\u1EA7n",
                    },
                },
                pageLength: 20,
                lengthMenu: [10, 20, 30, 50, 100],
                responsive: {
                    details: { type: "column" },
                    breakpoints: [
                        { name: "desktop", width: Infinity },
                        { name: "tablet-l", width: 1200 },
                        { name: "tablet-p", width: 992 },
                        { name: "mobile-l", width: 576 },
                        { name: "mobile-p", width: 320 },
                    ],
                },
                columnDefs: [
                    {
                        orderable: false,
                        targets: 0,
                    },

                    {
                        orderable: false,
                        targets: 1,
                    },
                ],
                ordering: true,

                buttons: [
                    {
                        name: "refresh",
                        text: '<i class="fa fa-refresh" style="padding-left: 5px"></i>',
                        action: function () {
                            updateTable("#data-grid");
                        },
                    },
                ],
                dom: "\u003C\u0027datatable-header\u0027f\u003E\u003C\u0027datatable-body\u0027t\u003E\u003C\u0027datatable-footer\u0027\u003C\u0027datatable-li\u0027li\u003Ep\u003E",
                columns: [
                    {
                        data: "PK_INSURANCE_POLICY",
                        className: "control not-desktop text-center",
                        render: function (data, type, row, meta) {
                            return "";
                        },
                    },

                    {
                        title: '<input id="mastercheckbox" type="checkbox" />',
                        width: "30px",
                        visible: true,
                        searchable: false,

                        className: "text-center",

                        render: function (data, type, row, meta) {
                            var html =
                                data === true
                                    ? '<input name="cid" id="cid' + meta.row + '" value="' + row.PK_INSURANCE_POLICY + '" type="checkbox" class="checkboxGroups" checked="checked" />'
                                    : '<input name="cid" id="cid' + meta.row + '" value="' + row.PK_INSURANCE_POLICY + '" type="checkbox" class="checkboxGroups" />';
                            return html;
                        },
                        data: "PK_INSURANCE_POLICY",
                    },
                    {
                        title: "S\u1ED1 \u0111\u01A1n",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "all",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Text") + "</a>";
                        },
                        data: "C_CODE",
                    },
                    {
                        title: "Ng\u00E0y c\u1EA5p",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "min-tablet w7p",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Date") + "</a>";
                        },
                        data: "C_ISSUE_DATE",
                    },
                    {
                        title: "T\u00EAn kh\u00E1ch h\u00E0ng",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "min-tablet w18p",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Text") + "</a>";
                        },
                        data: "C_CUSTOMER_NAME",
                    },
                    {
                        title: "MTN",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "desktop w8p text-right",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Money") + "</a>";
                        },
                        data: "C_TOTAL_INSURED_VALUE",
                    },
                    {
                        title: "Ph\u00ED ch\u01B0a VAT",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "desktop w9p text-right",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Money") + "</a>";
                        },
                        data: "C_TOTAL_PREMIUM",
                    },
                    {
                        title: "Ti\u1EC1n VAT",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "desktop w6p text-right",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Money") + "</a>";
                        },
                        data: "C_TOTAL_VAT",
                    },
                    {
                        title: "Ph\u00ED c\u00F3 VAT",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "min-tablet w8p text-right",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Money") + "</a>";
                        },
                        data: "C_TOTAL_PREMIUM_VAT",
                    },
                    {
                        title: "CB khai th\u00E1c",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "desktop w9p",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Text") + "</a>";
                        },
                        data: "FK_UNDERWRITER_NAME",
                    },
                    {
                        title: "CB c\u1EA5p \u0111\u01A1n",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "desktop w9p",

                        render: function (data, type, row, meta) {
                            var textRenderer = $.fn.dataTable.render.text().display;

                            return '<a href="/MV/Single/' + textRenderer(row.PK_INSURANCE_POLICY) + '">' + RenderData(data, "Text") + "</a>";
                        },
                        data: "FK_CREATOR_NAME",
                    },
                    {
                        title: "Tr\u1EA1ng th\u00E1i",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "all w8p",

                        render: function (data, type, row, meta) {
                            return renderStatus(data, type, row, meta);
                        },
                        data: "C_TINH_TRANG_DON_NAME",
                    },
                    {
                        title: "#",
                        width: "",
                        visible: true,
                        searchable: false,

                        className: "text-center min-tablet w2p",

                        render: function (data, type, row, meta) {
                            return renderList(data, type, row, meta);
                        },
                        data: "PK_INSURANCE_POLICY",
                    },
                ],
                drawCallback: function (settings) {
                    $("#loading").hide();
                },
            });

            $("#search-data").click(function () {
                $("#loading").show();
                $("#data-grid").DataTable().ajax.reload();
                $(".checkboxGroups").attr("checked", false).change();
                selectedIds = [];
                return false;
            });

            $("#clear-filter").click(function () {
                $("#p_unit_id").val("");
                $("#p_department_id").val("");
                $("#p_staff_id").val("");
                $("#p_customer_code").val("");
                $("#p_customer_name").val("");
                $("#p_policy_code").val("");
                $("#p_from_issue_date").val("");
                $("#p_to_issue_date").val("");
                $("#p_status").val("");
                $("#p_policy_type").val("");
                $("#data-grid").DataTable().ajax.reload();
                $(".checkboxGroups").attr("checked", false).change();
                selectedIds = [];
                return false;
            });

            $("#mastercheckbox").click(function () {
                $(".checkboxGroups").attr("checked", $(this).is(":checked")).change();
            });

            $("#data-grid").on("change", "input[type=checkbox][id!=mastercheckbox][class=checkboxGroups]", function (e) {
                var $check = $(this);
                var checked = jQuery.inArray($check.val(), selectedIds);
                if ($check.is(":checked") == true) {
                    if (checked == -1) {
                        selectedIds.push($check.val());
                    }
                } else if (checked > -1) {
                    selectedIds = $.grep(selectedIds, function (item, index) {
                        return item != $check.val();
                    });
                }
                updateMasterCheckbox();
            });
            $("#data-grid").DataTable().columns.adjust();
        });
    </script>

    <script>
        function renderStatus(data, type, row, meta) {
            return '<span class="badge ' + row.C_TINH_TRANG_DON_ICON + '">' + row.C_TINH_TRANG_DON_NAME + "</span>";
        }
        function renderList(data, type, row, meta) {
            var s = "";
            s += '<div class="list-icons">';
            s += '  <div class="dropdown">';
            s += '      <a href="javascript:void(0)" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>';
            s += '      <div class="dropdown-menu dropdown-menu-right">';

            if (row.C_TINH_TRANG_DON == "DANG_XU_LY" || row.C_TINH_TRANG_DON == "TBH_TU_CHOI" || row.C_TINH_TRANG_DON == "CHO_SUA_DOI") {
                s += '<a href="javascript:void(0)" onclick="vsw_submit_single(' + meta.row + ');" class="dropdown-item"><i class="icon-file-check"></i> Trình duyệt</a>';
            }

            if (row.C_TINH_TRANG_DON == "CHO_DUYET") {
                s += '<a href="javascript:void(0)" onclick="vsw_approve_policy_single(' + meta.row + ', \'/MV/TrinhDuyetDonBaoHiem\');" class="dropdown-item"><i class="icon-file-check"></i> Duyệt đơn</a>';
            } else if (row.C_TINH_TRANG_DON == "CHAP_THUAN_CAP_DON") {
                s += '<a href="javascript:void(0)" onclick="vsw_approve_policy_single(' + meta.row + ', \'/MV/TrinhDuyetDonBaoHiem\');" class="dropdown-item"><i class="icon-file-locked"></i> Đóng đơn</a>';
            }

            s += '          <a href="javascript:void(0)" onclick="vsw_print_single(' + meta.row + ', \'cid\',\'/MV/InThongBaoTraHoaHong\');" class="dropdown-item"><i class="icon-cash3"></i> In TB HH</a>';

            s += '          <a href="javascript:void(0)" onclick="vsw_print_single(' + meta.row + ', \'cid\',\'/MV/InPhieuThanhToanHoaHong\');" class="dropdown-item"><i class="icon-credit-card"></i> In phiếu TT HH</a>';

            s += '          <a href="javascript:void(0)" onclick="vsw_print_single(' + meta.row + ', \'cid\',\'/MV/InHopDongBaoHiem\');" class="dropdown-item"><i class="icon-stack"></i> In hợp đồng bảo hiểm</a>';
            s += '          <a href="javascript:void(0)" onclick="view_lstt(' + meta.row + ');" class="dropdown-item"><i class="icon-file-stats"></i> Xem lịch sử tổn thất</a>';
            s += "      </div>";
            s += "  </div>";
            s += "</div>";
            return s;
        }
        function view_lstt(index) {
            Alert("Thông Báo", "Chức năng đang phát triển");
        }
    </script>