<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'cau-hinh-ngay-het-han-ac,nhap-kho'; ?>
    
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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fad fa-file-certificate mr-1"></i>Quản lý ấn chỉ</a>
                                <span class="breadcrumb-item active">Nhập kho</span>
                            </div>
                            <div class="d-md-none logo-mobile">
                                <a href="<?php echo HTTP_PATH; ?>view/qlac/" class="logo-text">
                                    <div class="logo-img"><img src="<?php echo HTTP_PATH .'app-assets/images/logo/logo2.png'; ?>" alt="VNI Logo"></div>
                                    <span class="text align-middle" style="font-weight: 900;">QLAC</span>
                                </a>
                            </div>
                        </div>
                        <?php include_once TOP_RIGHT; ?>
                    </div>
                    <!-- /Header -->

                    <div class="page-title">
                        <div class="p-title">
                            <p class="font-weight-semibold font-size-m mb-0"><i class="fad fa-cogs mr-2"></i>Cấu hình ngày hết hạn ẩn chỉ</p>
                        </div>
                        <div class="p-button">
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">
                    	<div class="card card-search">
                            <div class="card-header header-elements-inline">
                                <p class="card-title font-size-s">
                                    <i style="width: 26px;height: 26px;line-height: 26px;font-size: 12px;" class="icon-search4 d-flex-inline align-items-center justify-content-center rounded-round bg-color mr-2"></i> 
                                    Tìm kiếm ấn chỉ
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
                                    <div class="col-md-2">
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
                                    <div class="col-md-2">
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
                                    <div class="col-md-2">
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
                                    <div class="col-md-2">
                                        <div class="form-group ">
                                            <label class="d-none d-sm-block">&nbsp;</label>
                                            <div>
                                                <button type="submit" style="letter-spacing: 1px;" class="btn text-uppercase bg-orange"><i class="icon-search4 mr-2"></i> Tìm kiếm </button>
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
		                                <table class="table table-bordered datatable" 
		                                    data-paging="true"
		                                    data-info="true"
		                                    data-ordering="false"
		                                    data-searching="false"
		                                    data-page-length="20">
		                                    <thead class="thead-light">
		                                        <tr>
		                                            <th class="w1p">#</th>
		                                            <th>Loại ấn chỉ</th>
		                                            <th>Ký hiệu</th>
		                                            <th>Từ quyển</th>
		                                            <th>Đến quyển</th>
		                                            <th>Ngày hết hạn</th>
		                                            <th>Ngày nhập</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                        <?php for ($i = 0; $i < 60; $i++) { ?>
		                                            <tr>
		                                                <td>&nbsp;</td>
		                                                <td>&nbsp;</td>
		                                                <td>&nbsp;</td>
		                                                <td>&nbsp;</td>
		                                                <td>&nbsp;</td>
		                                                <td>&nbsp;</td>
		                                                <td>&nbsp;</td>
		                                            </tr>
		                                        <?php } ?>
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