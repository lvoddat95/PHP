<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>

    <body class="sidebar-xs">

        <div class="page-content">

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
                                <a href="<?php echo HTTP_PATH .'view/claim/danh-sach-ho-so.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> F02 - Bảo hiểm ô tô</a>
                                <span class="breadcrumb-item active">Hồ sơ bồi thường: BT3412000897.F02 </span>
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
                               <div class="tab-claim tab-style">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#claim_thong_tin_chung" class="nav-link active" data-toggle="tab">
                                                <i class="fal fa-address-card mr-1"></i>
                                                <span>Thông tin chung</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_bien_ban_giam_dinh" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-file-invoice mr-1"></i>
                                                <span>Biên bản giám định</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_phuong_an_sua_chua" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-file-invoice mr-1"></i>
                                                <span>Phương án sửa chữa</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_to_trinh_boi_thuong" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-file-edit mr-1"></i>
                                                <span>Tờ trình bồi thường</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_qua_trinh_giai_quyet" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-recycle mr-1"></i>
                                                <span>Quá trình giải quyết</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_thong_bao_boi_thuong" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-bell-on mr-1"></i>
                                                <span>Thông báo bồi thường</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#claim_in" class="nav-link" data-toggle="tab">
                                                <i class="fal fa-print mr-1"></i>
                                                <span>In ấn</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="clearfix"></div>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="claim_thong_tin_chung">
                                            <div class="tab-pane-action">
                                                <div class="page-title">
                                                    <div class="p-title">
                                                        <p class="t-top"><i class="icon-certificate mr-2"></i>Chi tiết hồ sơ bồi thường</p>
                                                        <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                                    </div>
                                                    <div class="p-button">
                                                        <a href="javascript:;" class="btn mr-1"><i class="icon-file-locked mr-1"></i> Đóng hồ sơ</a>
                                                        <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Lưu &amp; Copy</a>
                                                        <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane-form">
                                                <div class="container">
                                                    <?php inc('claim/1_thong_tin_chung.php'); ?>
                                                    <hr class="border-dashed border-silver mb-3">

                                                    <div class="border-group box-shadow form-group mt-2 mb-2">
                                                        <div class="mb-2">
                                                            <span class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Phạm vi bảo hiểm (section)</span>
                                                        </div>
                                                        <div class="">
                                                            <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th class="w1p all text-center" data-orderable="false">#</th>
                                                                        <th class="w40p">Phạm vi bảo hiểm</th>
                                                                        <th class="w20p">Số tiền BH</th>
                                                                        <th class="w15p">Tỉ lệ phí</th>
                                                                        <th class="w20p">Phí BH (trước thuế)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center"><input type="checkbox"></td>
                                                                        <td><input type="text" class="form-control" value="Vật chất xe"></td>
                                                                        <td><input type="text" class="form-control input-money text-right" value="620,000,000" placeholder="0"></td>
                                                                        <td><input type="text" class="form-control input-float text-right" value="1.650" placeholder="0.0"></td>
                                                                        <td><input type="text" class="form-control input-money text-right" value="10,230,000" placeholder="0"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="mt-1">
                                                                <div class="row align-items-center justify-content-end mb-1">
                                                                    <label class="col-sm-3 col-form-label font-weight-semibold text-right">Tổng số tiền BH:</label>
                                                                    <div class="col-sm-3"><input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="620,000,000" placeholder="0"></div>
                                                                </div>
                                                                <div class="row align-items-center justify-content-end">
                                                                    <label class="col-sm-3 col-form-label font-weight-semibold text-right">Tổng phí BH (trước thuế):</label>
                                                                    <div class="col-sm-3"><input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="10,230,000" placeholder="0"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        

                                                    <div class="border-group box-shadow form-group mt-2 mb-2">
                                                        <div class="mb-2">
                                                            <span class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Cấu trúc tái bảo hiểm</span>
                                                        </div>
                                                        <div class="">
                                                            <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th class="w1p all text-center" data-orderable="false">#</th>
                                                                        <th class="w40p">Loại hình tái bảo hiểm</th>
                                                                        <th class="w15p">Tỉ lệ tái</th>
                                                                        <th class="w20p">Số tiền</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center"><input type="checkbox"></td>
                                                                        <td>
                                                                            <select select2 class="form-control">
                                                                                <option>AON Benfield Asia PTE Ltd</option>
                                                                            </select>
                                                                        </td>
                                                                        <td><input type="text" class="form-control input-float text-right" value="20.00" placeholder="0"></td>
                                                                        <td><input type="text" class="form-control input-money text-right" value="0" placeholder="0"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center"><input type="checkbox"></td>
                                                                        <td>
                                                                            <select select2 class="form-control">
                                                                                <option>HLAP Ltd</option>
                                                                            </select>
                                                                        </td>
                                                                        <td><input type="text" class="form-control input-float text-right" value="10.00" placeholder="0"></td>
                                                                        <td><input type="text" class="form-control input-money text-right" value="0" placeholder="0"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center"><input type="checkbox"></td>
                                                                        <td>
                                                                            <select select2 class="form-control">
                                                                                <option>HLAP Ltd (Hannover Re)</option>
                                                                            </select>
                                                                        </td>
                                                                        <td><input type="text" class="form-control input-float text-right" value="10.00" placeholder="0"></td>
                                                                        <td><input type="text" class="form-control input-money text-right" value="0" placeholder="0"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="mt-1">
                                                                <div class="row align-items-center justify-content-end mb-1">
                                                                    <label class="col-sm-3 col-form-label font-weight-semibold text-right">Tổng số tiền:</label>
                                                                    <div class="col-sm-3"><input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="0" placeholder="0"></div>
                                                                </div>
                                                                <div class="row align-items-center justify-content-end">
                                                                    <label class="col-sm-3 col-form-label font-weight-semibold text-right">VNI Net:</label>
                                                                    <div class="col-sm-3"><input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="620,000,000" placeholder="0"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        


                                                    <div class="border-group box-shadow form-group mt-2 mb-2">
                                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                                            <span class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Quá trình giải quyết khiếu nại bồi thường</span>
                                                            <div class="p-button">
                                                                <a href="javascript:;" class="btn bg-danger"><i class="far fa-minus"></i> Xoá</a>
                                                                <a href="javascript:;" class="btn bg-success" data-toggle="modal" data-target="#knbt"><i class="far fa-plus"></i> Thêm</a>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th class="w1p all text-center" data-orderable="false">#</th>
                                                                        <th>Số hồ sơ</th>
                                                                        <th>Số đơn BH</th>
                                                                        <th>Hình thức</th>
                                                                        <th>Ngày tạo</th>
                                                                        <th>Tháng kế toán</th>
                                                                        <th>Tổng tiền</th>
                                                                        <th>Trạng thái</th>
                                                                        <th>Người trình</th>
                                                                        <th>Người duyệt</th>
                                                                        <th>Người duyệt giải trình</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input type="checkbox"></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">BT3412000897.F02</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">3412005162/F02.BB19/0080992</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">Thanh toán</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">26/08/2020</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">8/2020</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">2,450,000</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt"><span class="badge badge-primary">Chấp thuận</span></a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">Dương Kim Hoàng</a></td>
                                                                        <td>
                                                                            <a href="javascript:;" data-toggle="modal" data-target="#knbt">
                                                                            Dương Quốc Đại <br>
                                                                            <i>duyệt ngày:26/08/2020</i>
                                                                            </a>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="checkbox"></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">BT3412000897.F02</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">3412005162/F02.BB19/0080992</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">Thanh toán</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">13/08/2020</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">8/2020</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">2,450,000</a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt"><span class="badge badge-secondary">Dự phòng</span></a></td>
                                                                        <td><a href="javascript:;" data-toggle="modal" data-target="#knbt">Dương Kim Hoàng</a></td>
                                                                        <td>
                                                                            <a href="javascript:;" data-toggle="modal" data-target="#knbt">
                                                                            Dương Quốc Đại <br>
                                                                            <i>duyệt ngày:13/08/2020</i>
                                                                            </a>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>

                                                            <div class="mt-1">
                                                                <div class="row align-items-center justify-content-end mb-1">
                                                                    <label class="col-sm-3 col-form-label font-weight-semibold text-right">Tổng số tiền đã thanh toán:</label>
                                                                    <div class="col-sm-3"><input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="2,450,000" placeholder="0"></div>
                                                                </div>
                                                                <div class="row align-items-center justify-content-end">
                                                                    <label class="col-sm-3 col-form-label font-weight-semibold text-right">Số tiền dự phòng hiện tại:</label>
                                                                    <div class="col-sm-3"><input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="2,450,000" placeholder="0"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane " id="claim_bien_ban_giam_dinh">
                                            <div class="tab-pane-action">
                                                <div class="page-title">
                                                    <div class="p-title">
                                                        <p class="t-top"><i class="icon-certificate mr-2"></i>Biên bản giám định tổn thất</p>
                                                    </div>
                                                    <div class="p-button">
                                                        <a href="javascript:;" class="btn mr-1" data-toggle="modal" data-target="#hinh_anh_ho_so_boi_thuong"><i class="icon-images2 mr-1"></i> Xem hình ảnh</a>
                                                        <a href="javascript:;" class="btn mr-1" data-toggle="modal" data-target="#in_option"><i class="icon-printer2 mr-1"></i> In hình ảnh</a>
                                                        <a href="javascript:;" class="btn bg-primary" data-toggle="modal" data-target="#in_option"><i class="icon-printer2 mr-1"></i> In biên bản giám định</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane-form">
                                                <div class="container">
                                                    <?php inc('claim/2_bien_ban_giam_dinh.php'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane " id="claim_phuong_an_sua_chua">
                                            <div class="tab-pane-action">
                                                <div class="page-title">
                                                    <div class="p-title">
                                                        <p class="t-top"><i class="icon-certificate mr-2"></i>Phương án sửa chữa</p>
                                                    </div>
                                                    <div class="p-button">
                                                        <a href="javascript:;" class="btn mr-1"><i class="icon-printer2 mr-1"></i> In bảng kê giao phụ tùng thay thế</a>
                                                        <a href="javascript:;" class="btn bg-primary mr-1"><i class="icon-printer2 mr-1"></i> In đề xuất phương án sửa chữa </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane-form">
                                                <?php inc('claim/phuong_an_sua_chua.php'); ?>
                                            </div>
                                        </div>

                                        <div class="tab-pane " id="claim_to_trinh_boi_thuong">
                                            <div class="tab-pane-action">
                                                <div class="page-title">
                                                    <div class="p-title">
                                                        <p class="t-top"><i class="icon-certificate mr-2"></i>Tờ trình bồi thường</p>
                                                    </div>
                                                    <div class="p-button">
                                                        <a href="javascript:;" class="btn mr-1"><i class="icon-printer2 mr-1"></i> In tờ trình bồi thường</a>
                                                        <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Cập nhập</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane-form">
                                                <div class="">
                                                    <?php inc('claim/3_to_trinh_boi_thuong.php'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane " id="claim_qua_trinh_giai_quyet">
                                            <div class="tab-pane-action">
                                                <div class="page-title">
                                                    <div class="p-title">
                                                        <p class="t-top"><i class="icon-certificate mr-2"></i>Thêm mới quá trình giải quyết hồ sơ bồi thường</p>
                                                    </div>
                                                    <div class="p-button">
                                                        <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Cập nhập</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane-form">
                                                <div class="container">
                                                    <?php inc('claim/qua_trinh_giai_quyet.php'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="claim_thong_bao_boi_thuong">
                                            <div class="tab-pane-action">
                                                <div class="page-title">
                                                    <div class="p-title">
                                                        <p class="t-top"><i class="icon-certificate mr-2"></i>Thông báo bồi thường</p>
                                                    </div>
                                                    <div class="p-button">
                                                        <a href="javascript:;" class="btn mr-1" data-toggle="modal" data-target="#kieu_in"><i class="icon-printer2 mr-1"></i> In thông báo bồi thường</a>
                                                        <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane-form">
                                                <div class="container">
                                                    <?php inc('claim/4_thong_bao_boi_thuong.php'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="claim_in">
                                            <div class="container">
                                                <?php inc('claim/5_in_an.php'); ?>
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
                <!-- /content -->

            </div>
            <!-- /content-wrapper -->
        </div>
        <!-- /page-content -->
        
        <?php inc('modal/modal_ds_gara.php',false); ?> 
        <?php inc('modal/modal_khieu_nai_boi_thuong.php'); ?> 
        <?php inc('modal/modal_ds_so_ho_giam_dinh_xin_cap.php'); ?>     
        <?php inc('modal/modal_xin_cap_ho_so_giam_dinh.php'); ?> 
        <?php inc('modal/modal_ds_don_bao_hiem.php'); ?> 
        <?php inc('modal/modal_ds_cac_khach_hang.php'); ?>
        <?php inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); ?> 
        <?php inc('modal/modal_hinh_anh_ho_so_boi_thuong.php'); ?> 
        <?php inc('modal/modal_in_option.php'); ?> 
        <?php inc('modal/modal_kieu_in.php'); ?> 

    </body>

<?php include_once FOOTER; ?>            
        </div> 