<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'tbh,hop-dong-tbh'; ?>
<body>

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
                            <a href="<?php echo HTTP_PATH . 'view/tbh/hop-dong-tbh/'; ?>" class="breadcrumb-item"><i class="fad fa-file-certificate mr-1"></i>Hợp đồng tái bảo hiểm</a>
                            <span class="breadcrumb-item active">Chi tiết nhóm Treaty Limit <b class="text-danger">(HĐ: 006/2021)</b></span>
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
                <div class="content-block">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-sticky">
                                    <div class="page-title">
                                        <div class="p-title">
                                            <p class="t-top"><i class="icon-certificate mr-2"></i>Chi tiết nhóm Treaty Limit</p>
                                            <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                        </div>
                                        <div class="p-button">
                                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="container">

                                            <div class="form-box mb-3">
                                                <p class="text-primary-800 font-weight-bold"><i class="fa fa-info-circle mr-1"></i>Thông tin chung</p>
                                                <hr class="border-dashed border-silver mb-2">

                                                <div class="row form-group">
                                                    <label class="col-label col-label-150 col-form-label">Tên: <span class="text-danger">*</span></label>
                                                    <div class="col-content col-content-xl">
                                                        <input type="text" class="form-control" value="bảo an tín">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-label col-label-150 col-form-label">Mô tả:</label>
                                                    <div class="col-content col-content-xl">
                                                        <textarea class="form-control" placeholder="">Bảo an tín</textarea>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-label col-label-150 col-form-label">Thư mục chứa các mẫu in: </label>
                                                    <div class="col-content col-content-md">
                                                        <select select2="" class="form-control">
                                                            <option id="" value="" name="">--- Chọn ---</option>
                                                            <option id="ENGINEERING" name="ENGINEERING" value="ENGINEERING">ENGINEERING</option>
                                                            <option id="FIRE_STORM" name="FIRE_STORM" value="FIRE_STORM">FIRE_STORM</option>
                                                            <option id="MARINE_CARGO" name="MARINE_CARGO" value="MARINE_CARGO">MARINE_CARGO</option>
                                                            <option id="MARINE_HULL" name="MARINE_HULL" value="MARINE_HULL">MARINE_HULL</option>
                                                            <option id="MISC" name="MISC" value="MISC">MISC</option>
                                                            <option id="common" name="common" value="common">common</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-label col-label-150 col-form-label">Thứ tự hiển thị: <span class="text-danger">*</span></label>
                                                    <div class="col-content col-content-xs">
                                                        <input type="text" class="form-control input-number" placeholder="0" value="1">
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label>Áp dụng cho sản phẩm bảo hiểm: <span class="text-danger">*</span></label>
                                                    <table class="table datatable table-bordered" data-paging="true" data-info="false" data-ordering="false" data-searching="true" data-page-length="10">
                                                        <thead class="thead-light-1">
                                                            <tr>
                                                                <th class="w1p text-center">#</th>
                                                                <th class=""><div class="dataTables_search" placeholder="Tìm kiếm nhanh sản phẩm bảo hiểm..."></div></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B01 - Bảo hiểm hỏa hoạn và các rủi ro đặc biệt</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>B02 - Bảo hiểm mọi rủi ro tài sản</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>C10 - Bảo hiểm mọi rủi ro trong công nghiệp</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>B12 - Bảo hiểm bảng hiệu đèn quảng cáo</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>C01 - Bảo hiểm mọi rủi ro trong xây dựng</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>C02 - Bảo hiểm mọi rủi ro trong lắp đặt</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>C03 - Bảo hiểm máy móc thiết bị của chủ thầu</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>C04 - Bảo hiểm đổ vỡ máy móc</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>C08 - Bảo hiểm nồi hơi</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>C06 - Bảo hiểm thiết bị điện tử</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B03 - Bảo hiểm công trình kỹ thuật dân dụng hoàn thành</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>C05 - Bảo hiểm mất lợi nhuận do đổ vỡ máy móc</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B07 - Bảo hiểm hư hỏng hàng hóa trong kho lạnh</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>C07 - Bảo hiểm mọi rủi ro máy móc thiết bị cho thuê</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>F01 - Bảo hiểm xe máy</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>F02 - Bảo hiểm ô tô</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>E01 - Bảo hiểm hàng hoá xuất nhập khẩu</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>E02 - Bảo hiểm hàng hoá vận chuyển nội địa</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>D01 - Bảo hiểm tàu biển</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>D03 - Bảo hiểm tàu cá</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>D04 - Bảo hiểm du thuyền</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>D07 - Bảo hiểm trách nhiệm dân sự chủ tầu viễn dương (P&amp;I mutual)</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>D02 - Bảo hiểm tàu sông, tàu ven biển</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>D05 - Bảo hiểm rủi ro đóng tàu</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>H01 - Bảo hiểm trách nhiệm nghề nghiệp</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>H02 - Bảo hiểm trách nhiệm sản phẩm</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>H03 - Bảo hiểm trách nhiệm công cộng</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G03 - Bảo hiểm tai nạn con người </td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G02 - Bảo hiểm con người mức trách nhiệm cao (VNI Care)</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G08 - Bảo hiểm sức khỏe giáo viên</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G07 - Bảo hiểm du lịch quốc tế</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G06 - Bảo hiểm du lịch trong nước</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G09 - Bảo hiểm tai nạn đối với người lao động</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B06 - Bảo hiểm tiền</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B08 - Bảo hiểm lòng trung thành</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B04 - Bảo hiểm mọi rủi ro văn phòng</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B05 - Bảo hiểm mọi rủi ro nhà ở</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>C09 - Bảo hiểm toàn diện đối với máy móc thiết bị</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G01 - Bảo hiểm sức khỏe toàn diện</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>A01 - Bảo hiểm thân, phụ tùng máy bay và trách nhiệm hàng không</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>A03 - Bảo hiểm thân, phụ tùng máy bay đối với rủi ro chiến tranh</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>A02 - Bảo hiểm thân máy bay dưới mức miễn thường</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>A05 - Bảo hiểm mất khả năng sử dụng máy bay</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>A04 - Bảo hiểm trách nhiệm đối với rủi ro chiến tranh</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>A06 - Bảo hiểm tai nạn nhân viên tổ bay</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>A07 - Phí Cty BH gốc</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>J01 - Nhận tái cố định nhóm bảo hiểm hàng hóa</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>D06 - Bảo hiểm trách nhiệm người sửa chữa tàu</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G05 - Bảo hiểm toàn diện học sinh</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>G04 - Bảo hiểm tai nạn con người của Cologne Re</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>I01 - Bảo hiểm dầu khí</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>H04 - Bảo hiểm trách nhiệm giải thưởng (Hole in one)</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G12 - Bảo hiểm chăm sóc sức khỏe cá nhân White Lotus</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>B09 - Chứng thư bảo lãnh</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>E06 - Bảo hiểm trách nhiệm giao nhận tổng hợp</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>J04 - Nhận tái cố định nhóm bảo hiểm hàng không</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>J05 - Nhận tái cố định nhóm bảo hiểm tài sản</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>J06 - Nhận tái cố định nhóm bảo hiểm kỹ thuật</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>J07 - Nhận tái cố định nhóm bảo hiểm tàu thuyền</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>J08 - Nhận tái cố định nhóm bảo hiểm xe cơ giới</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>J09 - Nhận tái cố định nhóm bảo hiểm con người</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>J10 - Nhận tái cố định nhóm bảo hiểm trách nhiệm</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>J11 - Nhận tái cố định nhóm bảo hiểm dầu khí</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>H06 - Bảo hiểm Trách nhiệm Giám đốc và Người điều hành</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>H07 - Bảo hiểm toàn diện ngân hàng</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>G13 - Bảo hiểm tai nạn hộ sử dụng điện</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>H08 - Bảo hiểm trách nhiệm hoạt động cảng</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>G14-Bảo hiểm tai nạn con người tại hộ gia đình do cháy chung cư, nhà riêng</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B16-Bảo hiểm toàn diện nhà chung cư</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>G15-Toàn Diện Hộ Gia Đình</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G17-Bảo hiểm tai nạn giao thông đường bộ</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>B17-Bảo hiểm vườn cây cao su</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G18-Thông tư 329 - Bảo hiểm đối với người lao động thi công trên công trường</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>H09-Trách nhiệm nghề nghiệp tư vấn trong đầu tư xây dựng (bắt buộc)</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G07.01 Bảo hiểm du lich Quốc tế, Người nước ngoài du lịch Việt nam</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>D09-Bảo hiểm máy móc thiết bị hàng hải</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>B18-Bảo hiểm bò sữa</td>
                                                            </tr>
                                                            <tr >
                                                                <td><input type="checkbox"></td>
                                                                <td>G06.01 -Bảo hiểm du lịch trong nước</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"></td>
                                                                <td>G01.01 - Bảo hiểm sức khỏe toàn diện - Tặng giáo viên</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                            <div class="form-box mb-3">
                                                <p class="text-primary-800 font-weight-bold"><i class="fa fa-receipt mr-1"></i>Treaty limit</p>
                                                <hr class="border-dashed border-silver mb-2">
                                                <div class="form-group" repeater>
                                                    <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                        <thead class="thead-light-1">
                                                            <tr>
                                                                <th class="all w20p">Tên</th>
                                                                <th class="w5p text-center">Com(%)</th>
                                                                <th class="w5p text-center">Q/S(%)</th>
                                                                <th class="desktop text-center">Mức không tái</th>
                                                                <th class="desktop text-center">Q/S trần</th>
                                                                <th class="desktop text-center">Max treaty</th>
                                                                <th class="desktop text-center">Mức không tái</th>
                                                                <th class="desktop text-center">Q/S trần</th>
                                                                <th class="desktop text-center">Max treaty</th>
                                                                <th>#</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody data-repeater-list="treaty-limit">
                                                            <tr data-repeater-item>
                                                                <td>
                                                                    <input type="text" class="form-control" name="" value="" placeholder="">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" name="" value="" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" name="" value="" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" name="" value="" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" name="" value="" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" name="" value="" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" name="" value="" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" name="" value="" placeholder="0">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-center" name="" value="" placeholder="0">
                                                                </td>
                                                                    <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="border p-1" style="margin-top: -1px;">
                                                        <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

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
        <?php inc('modal/qlac/cap_nhap_kenh_ban.php'); ?>



</body>

<?php include_once FOOTER; ?>