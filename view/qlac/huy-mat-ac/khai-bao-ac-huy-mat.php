<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'khai-bao-ac-huy-mat,huy-mat-ac'; ?>
<body>

    <div class="page-content home-page">

        <?php include_once SIDEBAR_QLAC; ?>

        <div class="content-wrapper">

            <div class="content">

                <!-- Header -->
                <div class="header-top">
                    <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                        <i class="far fa-align-left"></i>
                    </button>
                    <div class="top-left">
                        <div class="breadcrumb">
                            <a href="<?php echo HTTP_PATH . 'view/qlac/'; ?>" class="breadcrumb-item"><i class="fad fa-file-certificate mr-1"></i>Quản lý ấn chỉ</a>
                            <span class="breadcrumb-item active">Khai bảo ac huỷ mất</span>
                        </div>
                        <div class="d-md-none logo-mobile">
                            <a href="<?php echo HTTP_PATH; ?>view/qlac/" class="logo-text">
                                <div class="logo-img"><img src="<?php echo HTTP_PATH . 'app-assets/images/logo/logo2.png'; ?>" alt="VNI Logo"></div>
                                <span class="text align-middle" style="font-weight: 900;">QLAC</span>
                            </a>
                        </div>
                    </div>
                    <?php include_once TOP_RIGHT; ?>
                </div>
                <!-- /Header -->

                <div class="page-title">
                    <div class="p-title">
                        <p class="font-weight-semibold font-size-m mb-0"><i class="fad fa-sensor-alert mr-1"></i>Khai báo/duyệt ấn chỉ huỷ mất</p>
                    </div>
                    <div class="p-button">
                    </div>
                </div>

                <!-- Content-block -->
                <div class="content-block">
                    <div class="card card-search">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label class="font-weight-semibold">Đơn vị trả ấn chỉ:</label>
                                        <div class="form-group-select">
                                            <div class="input-group">
                                                <input type="hidden" name="">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-building"></i></span>
                                                </span>
                                                <?php inc('template/chi_nhanh.php'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Phòng ban trả ấn chỉ: </label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-hand-holding-box"></i></span>
                                            </span>
                                            <select class="form-control" select2="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="">Phòng kinh doanh 1</option>
                                                <option value="">Phòng kinh doanh 2</option>
                                                <option value="">Phòng kinh doanh 3</option>
                                                <option value="">Phòng kinh doanh 4</option>
                                                <option value="">Phòng kinh doanh 5</option>
                                                <option value="">Phòng Kinh Doanh 6</option>
                                                <option value="">Phòng Kinh Doanh 8</option>
                                            </select>
                                            <input type="hidden" name="">
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Loại ấn chỉ: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-layer-group"></i></span>
                                            </span>
                                            <select class="form-control" select2="">
                                                <option id="GCNBH_MV" name="Ấn chỉ bảo hiểm xe ô tô" value="GCNBH_MV" selected="">Ấn chỉ bảo hiểm xe ô tô</option>
                                                <option id="GCNBH_MC" name="Ấn chỉ bảo hiểm xe máy" value="GCNBH_MC">Ấn chỉ bảo hiểm xe máy</option>
                                                <option id="BHDL" name="Ấn chỉ bảo hiểm du lịch" value="BHDL">Ấn chỉ bảo hiểm du lịch</option>
                                                <option id="HUE" name="Ấn chỉ bảo hiểm tai nạn hộ sử dụng điện" value="HUE">Ấn chỉ bảo hiểm tai nạn hộ sử dụng điện</option>
                                                <option id="G03" name="Ấn chỉ bảo hiểm tai nạn con người" value="G03">Ấn chỉ bảo hiểm tai nạn con người</option>
                                                <option id="Hoadon" name="Hóa đơn giá trị gia tăng" value="Hoadon">Hóa đơn giá trị gia tăng</option>
                                                <option id="G14" name="Tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng" value="G14">Tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng</option>
                                                <option id="B16" name="Bảo hiểm toàn diện nhà chung cư" value="B16">Bảo hiểm toàn diện nhà chung cư</option>
                                                <option id="HouseHold" name="Toàn Diện Hộ Gia Đình" value="HouseHold">Toàn Diện Hộ Gia Đình</option>
                                                <option id="G16" name="Giấy chứng nhận Bảo An tín dụng (Bình An)" value="G16">Giấy chứng nhận Bảo An tín dụng (Bình An)</option>
                                                <option id="BHSK" name="Ấn chỉ bảo hiểm sức khỏe toàn diện" value="BHSK">Ấn chỉ bảo hiểm sức khỏe toàn diện</option>
                                                <option id="G17" name="Ấn chỉ bảo hiểm tai nạn giao thông đường bộ" value="G17">Ấn chỉ bảo hiểm tai nạn giao thông đường bộ</option>
                                            </select>
                                            <input type="hidden" name="">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Cán bộ nhận ấn chỉ: </label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </span>
                                            <select class="form-control" select2="">
                                                <option value="">--- Chọn ---</option>
                                                <option value="">Lê Văn A</option>
                                                <option value="">Lê Văn C</option>
                                                <option value="">Lê Văn D</option>
                                                <option value="">Lê Văn E</option>
                                                <option value="">Lê Văn F</option>
                                                <option value="">Lê Văn G</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Kí hiệu: </label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-text"></i></span>
                                            </span>
                                            <input type="text" class="form-control" name="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Quyển số:</label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-list-numbered"></i></span>
                                            </span>
                                            <input type="text" class="form-control" name="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Thời gian:</label>
                                        <div class="date-to-date">
                                            <div class="d-flex">
                                                <input type="text" class="form-control datepicker input-date " placeholder="Từ: ..." value="" id="">
                                            </div>
                                            <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
                                            <div class="d-flex">
                                                <input type="text" class="form-control datepicker input-date " placeholder="Đến: ..." value="" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="form-group ">
                                        <label>Trang thái:</label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-check-circle"></i></span>
                                            </span>
                                            <select select2 class="form-control">
                                                <option>--- Chọn ---</option>
                                                <option>Chờ duyệt</option>
                                                <option>Đã duyệt</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-4 col-6">
                                    <div class="d-flex justify-content-end ">
                                        <div class="d-inline-block">
                                            <button type="button" id="search-data" class="btn bg-primary"><i class="fa fa-filter mr-1"></i>Lọc</button>
                                            <button type="button" id="clear-filter" class="btn btn-light" data-dismiss="modal"><i class="icon-cross2 mr-1"></i>Hủy điều kiện lọc</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered datatable" data-paging="true" data-info="true" data-ordering="false" data-searching="false" data-page-length="20">
                                        <thead class="thead-light">
                                            <tr class="header">
                                                <th class="w3p text-center">#</th>
                                                <th class="w10p desktop">Ký hiệu</th>
                                                <th class="w10p">Quyển số</th>
                                                <th class="w20p">Loại ấn chỉ</th>
                                                <th class="w10p desktop">Ngày nhập</th>
                                                <th class="w20p">Cán bộ</th>
                                                <th class="w10p">Phòng ban</th>
                                                <th class="w10p desktop">Trạng thái</th>
                                                <th class="w10p desktop">Ngày duyệt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="center"></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">AD20/</a> <input type="text" class="form-control" value="123" onchange="test(this)"></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">54224</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">31/12/2021</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Trần Thị Nhâm</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phòng Kinh Doanh 5</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Chờ duyệt</a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">AD20/</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">64158</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">11/12/2021</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phạm Thị Yến (đã khóa)</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phòng kinh doanh 6</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Đã duyệt</a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">AD20/</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">64229</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">11/12/2021</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phạm Thị Yến (đã khóa)</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phòng kinh doanh 6</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Đã duyệt</a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">AD20/</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">28385</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">11/12/2021</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phạm Thị Yến (đã khóa)</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phòng kinh doanh 6</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Đã duyệt</a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">AD20/</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">64237</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">11/12/2021</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phạm Thị Yến (đã khóa)</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phòng kinh doanh 6</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Đã duyệt</a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">AD20/</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">28468</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">11/12/2021</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phạm Thị Yến (đã khóa)</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phòng kinh doanh 6</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Đã duyệt</a></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">AD20/</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">28438</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Ấn chỉ bảo hiểm xe ô tô</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">11/12/2021</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phạm Thị Yến (đã khóa)</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Phòng kinh doanh 6</a></td>
                                                <td><a href="khai-bao-ac-huy-mat-chi-tiet.php">Đã duyệt</a></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
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
    $(function(){
        // var table = $('.datatable').dataTable().api();
        // table.column(1, {
        //     search: 'applied',
        //     order: 'applied'
        // }).nodes().each(function(cell, i) {
        //     cell.innerHTML = i + 1;
        // });

    
    });

    var test  = function (p_this) {
        elem = $(p_this);
        data = $(p_this).val();
        $(p_this).attr('value',data);

        attr = $(p_this).attr('value');
        console.log(data);
        console.log(attr);
    }


</script>