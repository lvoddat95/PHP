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
                            <i class="linearicons-text-align-left font-size-m font-weight-bold"></i>
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

                    <div class="page-title">
                        <div class="p-title">
                            <p class="font-weight-semibold font-size-m mb-0"><i class="icon-certificate mr-2"></i>Thêm mới đơn bảo hiểm</p>
                            <span class="text-muted d-block font-size-xs">Nhập thông tin theo từng bước. Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                        </div>
                        <div class="p-button">
                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                            <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Lưu & Copy</a>
                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block card">

                        <div class="card-body">

                            <div class="d-flex align-items-center">
                                <p class="mb-0">
                                    <span class="mr-2">#Trạng thái:</span>
                                    <span class="badge badge-primary">Chấp thuận</span>
                                </p>
                                <div class="d-flex align-items-center ml-auto">
                                    <p class="mb-0"><span class="mr-2">Người duyệt:</span> Dương Quốc Đại</p>
                                    <span class="ml-3 mr-3"></span>
                                    <p class="mb-0"><span class="mr-2">Ngày duyệt:</span> 26/08/2020</p>
                                    <a href="" class="ml-2"><sup><i class="far fa-edit"></i> Sửa ngày duyệt</sup></a>
                                </div>
                            </div>

                            <hr class="border-dashed border-silver mb-3">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Hình thức: <span class="text-danger">*</span></label>
                                        <select class="form-control" select2>
                                            <option value="">--- Chọn ---</option>
                                            <option id="DU_PHONG" name="Dự phòng" value="DU_PHONG">Dự phòng</option>
                                            <option id="THANH_TOAN" name="Thanh toán" value="THANH_TOAN" selected="">Thanh toán</option>
                                            <option id="PHI_GIAM_DINH" name="Phí giám định" value="PHI_GIAM_DINH">Phí giám định</option>
                                            <option id="THU_TU_BEN_THU3" name="Thu từ bên thứ ba" value="THU_TU_BEN_THU3">Thu từ bên thứ ba</option>
                                            <option id="BAN_TS_CUU_VOT" name="Bán tài sản cứu vớt" value="BAN_TS_CUU_VOT">Bán tài sản cứu vớt</option>
                                            <option id="GIAM_DU_PHONG" name="Giảm dự phòng" value="GIAM_DU_PHONG">Giảm dự phòng</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr class="border-dashed border-silver mb-3">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label>Tháng kế toán:</label>
                                       <input type="text" class="form-control" value="8/2020">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày duyệt:</label>
                                       <input type="text" class="form-control" value="2020-08-26 00:00:00" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <?php inc('template/public/chuyen_vien_boi_thuong.php'); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày tổn thất: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="05/08/2020">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày TBTT: 
                                            <span class="text-danger">*</span> 
                                            <a href="#" data-tooltip="tipsy" original-title="Ngày thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                                        </label>
                                        <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="06/08/2020">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày giám định:</label>
                                        <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                                    </div>
                                </div>
                                <div class="col-12"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày BC sơ bộ:</label>
                                        <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày BCGĐ giữa kỳ:</label>
                                        <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày BCGĐ cuối cùng:</label>
                                        <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            Địa điểm tai nạn: <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" placeholder="Nhập địa điểm tai nạn...">xuân mai, phúc thắng, phúc yên</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Diễn biến: <span class="text-danger">*</span></label>
                                        <textarea class="form-control" placeholder="Nhập diễn biến...">va quệt vào chậu cây cạnh góc sân</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nguyên nhân: <span class="text-danger">*</span></label>
                                        <textarea class="form-control" placeholder="Nhập nguyên nhân...">va quệt vào chậu cây cạnh góc sân</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hậu quả: <span class="text-danger">*</span></label>
                                        <textarea class="form-control" placeholder="Nhập hậu quả...">xước sát xe</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Số người chết:</label>
                                        <input type="text" class="form-control input-number" placeholder="0">
                                    </div>
                                </div>
                            </div>

                            <hr class="border-dashed border-silver mb-3">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Đơn bảo hiểm số:</label>
                                        <input type="text" class="form-control" placeholder="Nhập số đơn bảo hiểm..." value="3412005162/F02.BB19/0080992" disabled>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Loại hình: <span class="text-danger">*</span></label>
                                        <?php inc('template/loai_hinh_disabled.php'); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Khách hàng (Mã/Tên): <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control required" nplaceholder="Nhập mã khách hàng..." value="34100024379" disabled>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control required" placeholder="Nhập tên khách hàng..." value="Đặng Thanh Tùng" disabled>
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn từ danh mục <i class="fad fa-user-plus ml-1"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Số điện thoại: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-phone" placeholder="Nhập số điện thoại..." value="0395013333" disabled>
                                    </div>
                                </div>
                                <div class="col-12"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Địa chỉ: </label>
                                        <textarea class="form-control" placeholder="Nhập địa chỉ..." disabled>Phúc Thắng, Phúc Yên, Vĩnh Phúc</textarea>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Đối tượng tổn thất: </label>
                                        <textarea class="form-control" placeholder="Nhập đối tượng tổn thất...">88A27218</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày tạo đơn:</label>
                                        <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="29/06/2020" />
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mức miền thường:</label>
                                        <input type="text" class="form-control input-money text-right" placeholder="0">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ngày thanh toán phí:</label>
                                        <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Bồi thường: </label>
                                        <select select2>
                                            <option>--- Chọn ---</option>
                                            <option selected="">Vật chất xe</option>
                                            <option>Khác</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Hệ thống gara: </label>
                                        <select select2>
                                            <option>--- Chọn ---</option>
                                            <option selected="">Trong hệ thống</option>
                                            <option>Ngoài hệ thống</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Gara ôtô sửa chữa: </label>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" class="form-control required" nplaceholder="" value="gara0307">
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control required" placeholder="" value="gara lộc phát">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#">Chọn</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <hr class="border-dashed border-silver mb-3">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Loại tiền: <span class="text-danger">*</span></label>
                                        <select select2 disabled>
                                            <option id="" value="" name="">--- Chọn ---</option>
                                            <option id="EUR" name="EUR" value="EUR">EUR</option>
                                            <option id="VND" name="VND" value="VND" selected>VND</option>
                                            <option id="CHF" name="CHF" value="CHF">>CHF</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tỉ giá thực tế: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-float text-right" placeholder="0.0" value="1" disabled>
                                    </div>
                                </div>
                            </div>

                            <hr class="border-dashed border-silver mb-3">

                            <div class="border-group box-shadow form-group mt-2 mb-2">
                                <div class="mb-2">
                                    <span class="text-primary-800 text-uppercase font-weight-bold"><i class="icon-info22 mr-1"></i>Tổn thất</span>
                                </div>
                                <div class="">
                                    <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="w1p text-center" data-orderable="false">#</th>
                                                <th class="w40p">Phạm vi bảo hiểm</th>
                                                <th class="w20p">Số tiền tổn thất (chưa VAT)</th>
                                                <th class="w15p">VAT</th>
                                                <th class="w20p">Tiền VAT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><input type="checkbox"></td>
                                                <td><input type="text" class="form-control" value="Vật chất xe"></td>
                                                <td><input type="text" class="form-control input-money text-right" value="2,450,000" placeholder="0"></td>
                                                <td><input type="text" class="form-control input-float text-right" value="10.00" placeholder="0.0"></td>
                                                <td><input type="text" class="form-control input-money text-right" value="245,000" placeholder="0"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="row mt-1 flex-lg-row-reverse">
                                        <div class="col-lg-6">
                                            <div class="row align-items-center justify-content-end mb-1">
                                                <label class="col-sm-6 col-form-label font-weight-semibold text-right">Tổng số tiền tổn thất thuộc VNI (Chưa VAT):</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="2,450,000" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="row align-items-center justify-content-end mb-1">
                                                <label class="col-sm-6 col-form-label font-weight-semibold text-right">Thuế VAT:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="245,000" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="row align-items-center justify-content-end">
                                                <label class="col-sm-6 col-form-label font-weight-semibold text-right">Tổng số tiền tổn thất đã bao gồm thuế VAT:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control input-money text-right text-danger font-weight-semibold" value="2,695,000" placeholder="0">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="p-1 border-1 border-dashed border-silver">
                                                <p class="font-weight-semibold">Số tiền bồi thường TNDS chi tiết theo người và tài sản</p>
                                                <div class="row form-group">
                                                    <label class="col-sm-2 col-form-label">Về người:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-money text-right" placeholder="0">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-sm-2 col-form-label">Về tài sản:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-money text-right" placeholder="0">
                                                    </div>
                                                </div>
                                                <i class="text-danger">Chú ý: Số tiền bồi thường về người + Số tiền bồi thường về tài sản = Số tiền tổn thất(Chưa VAT) của phạm vị TNDS bắt buộc</i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="border-group box-shadow form-group mt-2 mb-2">
                                <div class="mb-2">
                                    <span class="text-primary-800 text-uppercase font-weight-bold"><i class="icon-info22 mr-1"></i>Cấu trúc tái bảo hiểm</span>
                                </div>
                                <div class="">
                                    <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="w1p text-center" data-orderable="false">STT</th>
                                                <th class="w40p">Loại hình tái bảo hiểm</th>
                                                <th class="w15p">Tỉ lệ tái</th>
                                                <th class="w20p">Số tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">01</td>
                                                <td>
                                                    <select select2>
                                                        <option>AON Benfield Asia PTE Ltd</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control input-float text-right" value="20.00" placeholder="0"></td>
                                                <td><input type="text" class="form-control input-money text-right" value="0" placeholder="0"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">02</td>
                                                <td>
                                                    <select select2>
                                                        <option>HLAP Ltd</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control input-float text-right" value="10.00" placeholder="0"></td>
                                                <td><input type="text" class="form-control input-money text-right" value="0" placeholder="0"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">03</td>
                                                <td>
                                                    <select select2>
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

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tài liệu đính kèm: <span class="text-danger">*</span></label>
                                        <div class="p-button">
                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#ds_files">
                                                <i class="far fa-folder-open mr-1"></i>
                                                <span class="hidden-xs">Danh sách tài liệu</span>
                                            </button>
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

        <?php inc('chat-box.php'); ?> 

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?> 
        <?php inc('modal/modal_ds_nguoi_tham_gia_bao_hiem.php'); ?> 

        <div class="modal-group">
            <?php
                inc('modal/modal_ds_cac_khach_hang.php'); 
                inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>

        <?php inc('modal/modal_ds_rui_ro_bao_hiem.php'); ?> 
        <?php inc('modal/modal_ds_dieu_khoan_loai_tru.php'); ?> 
        <?php inc('modal/modal_ds_files.php'); ?>

    </body>

<?php include_once FOOTER; ?>