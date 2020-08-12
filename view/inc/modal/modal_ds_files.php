<!-- Danh sách files -->
<div id="ds_files" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-semibold ">Danh sách tệp đính kèm</h5>
                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i> Đóng</button>
            </div>

            <div class="modal-body">
                <div class="file-manager">
                    <div class="f-left">
                        <div class="f-left-wrapper">
                            <ul class="nav nav-file nav-sidebar">
                                <li class="nav-item-header"><span>Danh mục</span></li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-button" data-filter=".a">
                                        <i class="icon-checkbox-unchecked"></i><span>Tài liệu</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-button" data-filter=".b">
                                        <i class="icon-checkbox-unchecked"></i><span>Hình ảnh</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-button" data-filter=".c">
                                        <i class="icon-checkbox-unchecked"></i><span>Video</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-button" data-filter=".d">
                                        <i class="icon-checkbox-unchecked"></i><span>Âm thanh</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-button" data-filter=".e">
                                        <i class="icon-checkbox-unchecked"></i><span>File nén</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-right grid">
                        <div class="file-header d-flex justify-content-between">
                            <div class="file-view">
                                <button class="btn btn-light btn-sm" onclick="list_view(this)" title="List"><i class="icon-list2"></i></button>
                                <button class="btn btn-light btn-sm" onclick="grid_view(this)" title="Grid"><i class="icon-grid2"></i></button>
                            </div>
                            <div class="file-search">
                                <input type="text" name="" class="form-control form-control-sm" placeholder="Tìm kiếm...">
                                <button type="submit"><i class="icon-search4"></i></button>
                            </div>
                        </div>
                        <ul class="list-files">
                            <li class="file-item a">
                                <div class="file-wrapper">
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
            <div class="modal-footer justify-content-center">
                
                <button class="btn btn-light btn-file">
                    <i class="far fa-upload mr-1"></i>
                    <span class="hidden-xs">Tải lên tài liệu</span>
                    <input type="file" class="file-input-preview" />
                </button>
            </div>
        </div>
    </div>
</div>
<!-- / Danh sách files -->