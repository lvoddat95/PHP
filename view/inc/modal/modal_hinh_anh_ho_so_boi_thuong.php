<!-- Danh sách các khách hàng -->
<div id="hinh_anh_ho_so_boi_thuong" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Danh sách hình ảnh</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="mb-1">
                        <i class="text-danger">* Kéo thả icon bên trái ảnh để thay đổi vị trí ảnh *</i>
                        <br>
                        <i class="text-danger">* Bỏ tích tại ô màu xanh bên góc phải phía trên ảnh để loại bỏ ảnh khỏi danh sách IN *</i>
                    </div>
                    <div id="print-container">
                        <ul id="fancybox-gallery" class="row list-unstyled">
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable" title="Kéo thả thay đổi vị trí ảnh để In"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau01.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau01.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau02.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau02.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau03.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau03.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau04.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau04.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau05.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau05.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau06.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau06.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau07.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau07.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau08.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau08.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau09.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/can-sau09.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>


                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/dangki01.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/dangki01.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-sm-6">
                                <div class="img-box">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="img-sortable"><i class="fal fa-arrows"></i></div>
                                        <div class="img-order d-flex align-items-center">
                                            <input class="" type="checkbox" checked onchange="on_change_print_select(this);">
                                            <input class="form-control" type="textbox" value="6789">
                                        </div>
                                    </div>
                                    <a data-fancybox="gallery" href="<?php echo HTTP_PATH; ?>app-assets/images/claim/dangki02.jpg">
                                        <span class="img-view"><i class="far fa-search-plus mr-1"></i>Click xem ảnh lớn</span>
                                        <img src="<?php echo HTTP_PATH; ?>app-assets/images/claim/dangki02.jpg" alt="" class="img-fluid">
                                        <figcaption style="display: none;">
                                            <ul class="list-unstyled img-info-list"> 
                                                <li><span>Long:</span> <i>Không xác định</i></li> 
                                                <li><span>Lat:</span> <i>Không xác định</i></li> 
                                                <li><span>Đ/c:</span> <i>Không xác định</i></li> 
                                                <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li> 
                                            </ul>
                                        </figcaption>
                                    </a>
                                    <div class="img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Long:</span> <i>Không xác định</i></li>
                                            <li><span>Lat:</span> <i>Không xác định</i></li>
                                            <li><span>Đ/c:</span> <i>Không xác định</i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                    <div class="print-img-info">
                                        <ul class="list-unstyled img-info-list">
                                            <li><span>Thông tin về xe</span> <i></i></li>
                                            <li><span>Mô tả:</span> <i>Cập nhập tại phần mềm</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                        
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="#" class="btn bg-primary" data-toggle="modal" data-target="#in_option"><i class="icon-printer2 mr-1"></i>In hình ảnh</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Danh sách các khách hàng -->