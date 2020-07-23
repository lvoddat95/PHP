<?php require_once '../../../config.php'; ?>
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
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="icon-steering-wheel mr-1"></i> F01 - Bảo hiểm xe máy</a>
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
                            <a href="" class="btn mr-1"><i class="icon-arrow-left52 mr-1"></i> Quay lại</a>
                            <a href="javascript:;" class="btn mr-1"><i class="icon-files-empty mr-1"></i> Lưu & Copy</a>
                            <a href="javascript:;" class="btn bg-primary"><i class="icon-floppy-disk mr-1"></i> Lưu</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Form wzard with step validation section start -->
                            <section id="validation" class="input-don">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form action="#" class="steps-validation wizard-notification">
                                                        <!-- Bước 1 -->
                                                        <h6>Thông tin chung</h6>
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-2 col-md-6">
                                                                    <div class="form-group ">
                                                                        <label>Kênh khai thác: <span class="text-danger">*</span></label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control required" select2 name="kenh_khai_thac" onchange="on_change_kenh_khai_thac(this);">
                                                                                <option value="">--- Chọn kênh khai thác ---</option>
                                                                                <option value="daili">Đại lí</option>
                                                                                <option value="moigioi">Môi giới</option>
                                                                                <option value="tructiep">Trực tiếp</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-lg-2 col-md-6">
                                                                    <div class="form-group ">
                                                                        <label>Hình thức khai thác: <span class="text-danger">*</span></label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control required" select2 name="hinh_thuc_khai_thac" onchange="on_change_hinh_thuc_khai_thac(this);">
                                                                                <option value="">--- Chọn hình thức khai thác ---</option>
                                                                                <option value="opt1">Bảo hiểm trực tiếp</option>
                                                                                <option value="tai-bh">Nhận tái bảo hiểm</option>
                                                                                <option value="dong-bh">Đồng bảo hiểm</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                                    <div class="form-group ">
                                                                        <label>Số đơn bảo hiểm: <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control required" name="so_don_bao_hiem" placeholder="Nhập số đơn bảo hiểm...">
                                                                            <span class="input-group-append">
                                                                                <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_so_hop_dong_xin_cap">Chọn<i class="icon-profile ml-2"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                                    <div class="form-group ">
                                                                        <label class="d-block">Số GCNBH: <span class="text-danger">*</span> <i class="text-danger float-right font9">(Ví dụ:COV-AVP/000001)</i></label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control required" name="so_gcnbh" placeholder="Nhập số GCNBH..." value="">
                                                                            <span class="input-group-append">
                                                                                <button type="button" class="btn bg-primary">Lấy từ EBAOHIEM</button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Số tham chiếu: </label>
                                                                        <button 
                                                                            class="btn-popover"
                                                                            type="button" 
                                                                            data-popup="popover" 
                                                                            data-content="Tham chiếu đơn gốc trường hợp Tái tục và SĐBS" 
                                                                            data-trigger="hover" 
                                                                            data-placement="top"
                                                                            data-original-title="" >
                                                                            <i class="icon-info22"></i>
                                                                        </button>
                                                                        <input type="text" class="form-control" name="so_tham_chieu" placeholder="Nhập số tham chiếu...">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Số bản chào: </label>
                                                                        <button 
                                                                            class="btn-popover"
                                                                            type="button" 
                                                                            data-popup="popover" 
                                                                            data-content="Tự động lấy số bản chào nếu đơn được tạo từ bản chào." 
                                                                            data-trigger="hover" 
                                                                            data-placement="top"
                                                                            data-original-title="" >
                                                                            <i class="icon-info22"></i>
                                                                        </button>
                                                                        <input type="text" class="form-control" name="so_ban_chao" placeholder="Nhập số bản chào...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Số HĐ nhận tái: </label>
                                                                        <button 
                                                                            class="btn-popover"
                                                                            type="button" 
                                                                            data-popup="popover" 
                                                                            data-content="Nhập số HĐ gốc của đơn nhận tái." 
                                                                            data-trigger="hover" 
                                                                            data-placement="top"
                                                                            data-original-title="" >
                                                                            <i class="icon-info22"></i>
                                                                        </button>
                                                                        <input type="text" class="form-control" name="so_hd_nhan_tai" placeholder="Nhập số hợp đồng nhận tái...">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Người được bảo hiểm: <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <input style="max-width: 180px;" type="text" class="form-control required" name="ma_kh" placeholder="Nhập mã khách hàng..." value="">
                                                                            <input type="text" class="form-control required" name="ten_kh" placeholder="Nhập tên khách hàng..." value="">
                                                                            <span class="input-group-append">
                                                                                <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn<i class="icon-user-plus ml-2"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Người thanh toán bảo hiểm: <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <input style="max-width: 180px;" type="text" class="form-control required" name="ma_kh2" placeholder="Nhập mã khách hàng..." value="">
                                                                            <input type="text" class="form-control required" name="ten_kh2" placeholder="Nhập tên khách hàng..." value="">
                                                                            <span class="input-group-append">
                                                                                <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn<i class="icon-user-plus ml-2"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Tên chủ xe: <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control required" name="ten_chu_xe" placeholder="Nhập tên chủ xe...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Số điện thoại (chủ xe): <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control required input-phone" name="sdt_chu_xe" placeholder="Nhập số điện thoại...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Số CMTND/Hộ chiếu (chủ xe): <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control required input-number" name="cmtnd_hc" placeholder="Nhập CMTND/Hộ chiếu...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Địa chỉ (chủ xe): </label>
                                                                        <input type="text" class="form-control required" name="dia_chi_cx" placeholder="Nhập địa chỉ chủ xe...">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                    <label>Cán bộ khai thác: <span class="text-danger">*</span></label>
                                                                        <select class="form-control required" select2 name="can_bo_khai_thac">
                                                                            <option id="" value="" name="">--- Chọn cán bộ khai thác ---</option>
                                                                            <option id="1227" name="Đào Mạnh Dương (đã nghỉ)" value="1227">Đào Mạnh Dương (đã nghỉ)</option>
                                                                            <option id="1205" name="Đào Minh Hùng(Đã khóa)" value="1205">Đào Minh Hùng(Đã khóa)</option>
                                                                            <option id="2474" name="Đào Ngọc Bình" value="2474">Đào Ngọc Bình</option>
                                                                            <option id="1786" name="Đỗ Đức Tuân" value="1786">Đỗ Đức Tuân</option>
                                                                            <option id="3144" name="Đỗ Đăng Quang" value="3144">Đỗ Đăng Quang</option>
                                                                            <option id="1402" name="Đỗ Quốc Việt(Đã nghỉ)" value="1402">Đỗ Quốc Việt(Đã nghỉ)</option>
                                                                            <option id="2214" name="Đỗ Quang Đại" value="2214">Đỗ Quang Đại</option>
                                                                            <option id="2356" name="Đỗ Thị Hà Anh" value="2356">Đỗ Thị Hà Anh</option>
                                                                            <option id="1896" name="Đỗ Thị Huế" value="1896">Đỗ Thị Huế</option>
                                                                            <option id="3115" name="Võ Tấn Lộ" value="3115">Võ Tấn Lộ</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                    <label>Cán bộ cấp đơn: <span class="text-danger">*</span></label>
                                                                        <select class="form-control required" select2 name="can_bo_cap_don">
                                                                            <option id="" value="" name="">--- Chọn cán bộ cấp đơn ---</option>
                                                                            <option id="1227" name="Đào Mạnh Dương (đã nghỉ)" value="1227">Đào Mạnh Dương (đã nghỉ)</option>
                                                                            <option id="1205" name="Đào Minh Hùng(Đã khóa)" value="1205">Đào Minh Hùng(Đã khóa)</option>
                                                                            <option id="2474" name="Đào Ngọc Bình" value="2474">Đào Ngọc Bình</option>
                                                                            <option id="1786" name="Đỗ Đức Tuân" value="1786">Đỗ Đức Tuân</option>
                                                                            <option id="3144" name="Đỗ Đăng Quang" value="3144">Đỗ Đăng Quang</option>
                                                                            <option id="1402" name="Đỗ Quốc Việt(Đã nghỉ)" value="1402">Đỗ Quốc Việt(Đã nghỉ)</option>
                                                                            <option id="2214" name="Đỗ Quang Đại" value="2214">Đỗ Quang Đại</option>
                                                                            <option id="2356" name="Đỗ Thị Hà Anh" value="2356">Đỗ Thị Hà Anh</option>
                                                                            <option id="1896" name="Đỗ Thị Huế" value="1896">Đỗ Thị Huế</option>
                                                                            <option id="3115" name="Võ Tấn Lộ" value="3115">Võ Tấn Lộ</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                    <label>Cán bộ kí đơn: <span class="text-danger">*</span></label>
                                                                        <select class="form-control required" select2 name="can_bo_ki_don">
                                                                            <option id="" value="" name="">--- Chọn cán bộ cấp đơn ---</option>
                                                                            <option id="1227" name="Đào Mạnh Dương (đã nghỉ)" value="1227">Đào Mạnh Dương (đã nghỉ)</option>
                                                                            <option id="1205" name="Đào Minh Hùng(Đã khóa)" value="1205">Đào Minh Hùng(Đã khóa)</option>
                                                                            <option id="2474" name="Đào Ngọc Bình" value="2474">Đào Ngọc Bình</option>
                                                                            <option id="1786" name="Đỗ Đức Tuân" value="1786">Đỗ Đức Tuân</option>
                                                                            <option id="3144" name="Đỗ Đăng Quang" value="3144">Đỗ Đăng Quang</option>
                                                                            <option id="1402" name="Đỗ Quốc Việt(Đã nghỉ)" value="1402">Đỗ Quốc Việt(Đã nghỉ)</option>
                                                                            <option id="2214" name="Đỗ Quang Đại" value="2214">Đỗ Quang Đại</option>
                                                                            <option id="2356" name="Đỗ Thị Hà Anh" value="2356">Đỗ Thị Hà Anh</option>
                                                                            <option id="1896" name="Đỗ Thị Huế" value="1896">Đỗ Thị Huế</option>
                                                                            <option id="3115" name="Võ Tấn Lộ" value="3115">Võ Tấn Lộ</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Ngày cấp: <span class="text-danger">*</span></label>
                                                                        <input id='test' type="text" name="ngay_cap" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Loại tiền: <span class="text-danger">*</span></label>
                                                                        <select class="form-control required" select2 name="loai_tien">
                                                                            <option id="" value="" name="">--- Chọn Loại tiền ---</option>
                                                                            <option id="EUR" name="EUR" value="EUR">EUR</option>
                                                                            <option id="VND" name="VND" value="VND">VND</option>
                                                                            <option id="CHF" name="CHF" value="CHF">CHF</option>
                                                                            <option id="USD" name="USD" value="USD">USD</option>
                                                                            <option id="CNY(RMB)" name="CNY(RMB)" value="CNY(RMB)">CNY(RMB)</option>
                                                                            <option id="GBP" name="GBP" value="GBP">GBP</option>
                                                                            <option id="JPY" name="JPY" value="JPY">JPY</option>
                                                                            <option id="RM(MYR)" name="RM(MYR)" value="RM(MYR)">RM(MYR)</option>
                                                                            <option id="NGOAITE" name="NGOAITE" value="NGOAITE">NGOAITE</option>
                                                                            <option id="AUD" name="AUD" value="AUD">AUD</option>
                                                                            <option id="SGD" name="SGD" value="SGD">SGD</option>
                                                                            <option id="CAD" name="CAD" value="CAD">CAD</option>
                                                                            <option id="KRW" name="KRW" value="KRW">KRW</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Tỉ giá thực tế: <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control required input-float" name="ti_gia" placeholder="">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>

                                                            
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div id="tai-bh" class="border-group form-group box-shadow mt-1 " style="display: none;">
                                                                        <div class="mb-2">
                                                                            <span class="font-weight-semibold"><i class="icon-info22 mr-1"></i>Công ty nhượng tái bảo hiểm</span>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-2">
                                                                                    <label>Tên công ty: <span class="text-danger">*</span></label>
                                                                                    <select class="form-control required" select2 name="cong_ty">
                                                                                        <option id="" value="" name="">--- Chọn công ty---</option>
                                                                                        <option id="BR-020" name="VNI" value="BR-020">VNI</option>
                                                                                        <option id="BR" name="BIC (thừa, đề nghị không chọn)" value="BR">BIC (thừa, đề nghị không chọn)</option>
                                                                                        <option id="BR-001" name="AON Hà Nội (thừa, đề nghị không chọn)" value="BR-001">AON Hà Nội (thừa, đề nghị không chọn)</option>
                                                                                        <option id="BR-002" name="QBE Mercantile Mutual" value="BR-002">QBE Mercantile Mutual</option>
                                                                                        <option id="BR-003" name="BMS Casualty" value="BR-003">BMS Casualty</option>
                                                                                        <option id="BR-004" name="GRASS-SAVOYE HCMC" value="BR-004">GRASS-SAVOYE HCMC</option>
                                                                                        <option id="BR-005" name="Webster Hyde Health" value="BR-005">Webster Hyde Health</option>
                                                                                        <option id="BR-006" name="JARDINE HANOI" value="BR-006">JARDINE HANOI</option>
                                                                                        <option id="BR-007" name="Marsh Việt Nam" value="BR-007">Marsh Việt Nam</option>
                                                                                        <option id="BR-008" name="SWIRE" value="BR-008">SWIRE</option>
                                                                                        <option id="BR-009" name="AON Hồ Chí Minh (thừa, đề nghị không chọn)" value="BR-009">AON Hồ Chí Minh (thừa, đề nghị không chọn)</option>
                                                                                        <option id="BR-010" name="Grass Savoye Hà Nội (thừa, đề nghị không chọn)" value="BR-010">Grass Savoye Hà Nội (thừa, đề nghị không chọn)</option>
                                                                                        <option id="BR-011" name="JARDINE HCMC" value="BR-011">JARDINE HCMC</option>
                                                                                        <option id="BR-012" name="Asia Pacific Risk Consultants" value="BR-012">Asia Pacific Risk Consultants</option>
                                                                                        <option id="BR-013" name="RIVER INSURANCE MANAGEMENT LTD" value="BR-013">RIVER INSURANCE MANAGEMENT LTD</option>
                                                                                        <option id="BR-014" name="VIET QUOC INSURANCE BROKER" value="BR-014">VIET QUOC INSURANCE BROKER</option>
                                                                                        <option id="BR-015" name="EAST ASIA JOINT STOCK INS BROKER CO LTD" value="BR-015">EAST ASIA JOINT STOCK INS BROKER CO LTD</option>
                                                                                        <option id="BR-016" name="JARDINE LLYOY THOMPSON HONG KONG" value="BR-016">JARDINE LLYOY THOMPSON HONG KONG</option>
                                                                                        <option id="BR-017" name="EAST ASIA JOINT STOCK INS BROKER CO HN" value="BR-017">EAST ASIA JOINT STOCK INS BROKER CO HN</option>
                                                                                        <option id="BR-018" name="AON Thailand" value="BR-018">AON Thailand</option>
                                                                                        <option id="BR-019" name="AON Việt Nam" value="BR-019">AON Việt Nam</option>
                                                                                        <option id="OA-009" name="Bảo Việt (thừa, đề nghị không chọn)" value="OA-009">Bảo Việt (thừa, đề nghị không chọn)</option>
                                                                                        <option id="OA-010" name="Bảo Minh (thừa, đề nghị không chọn)" value="OA-010">Bảo Minh (thừa, đề nghị không chọn)</option>
                                                                                        <option id="OA-011" name="Allianz" value="OA-011">Allianz</option>
                                                                                        <option id="OA-013" name="PVI" value="OA-013">PVI</option>
                                                                                        <option id="OA-012" name="PJICO" value="OA-012">PJICO</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label>Tỷ lệ nhận: <span class="text-danger">*</span></label>
                                                                                <input type="text" class="form-control required input-float" name="tln" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <label>Tỷ lệ hoa hồng: <span class="text-danger">*</span></label>
                                                                                <input type="text" class="form-control required input-float" name="hh" placeholder="">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Thành tiền:</label>
                                                                                <input type="text" class="form-control required input-float" name="tt" placeholder="">
                                                                            </div>
                                                                            <div class="col-md-4 d-flex mt-3">
                                                                                <input type="checkbox" id="taiho">
                                                                                <label class="ml-2 mb-0" for="taiho"> Nhấn chọn nếu là nhận tái để tái hộ</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="dong-bh" class="border-group form-group box-shadow mt-2 mb-3" style="display: none;">
                                                                        <div class="mb-2">
                                                                            <span class="font-weight-semibold"><i class="icon-info22 mr-1"></i>Đồng bảo hiểm </span>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-2">
                                                                                <div class="form-group">
                                                                                    <label>Hình thức thu phí của các công ty flower: <span class="text-danger">*</span></label>
                                                                                    <div>
                                                                                        <div class="form-check form-check-inline">
                                                                                            <input type="radio" id="flower" class="mr-1" name="flower_name" >
                                                                                            <label for="flower" class="form-check-label">Thu trực tiếp từ khách hàng</label>
                                                                                        </div>
                                                                                        <div class="form-check form-check-inline">
                                                                                            <input type="radio" id="flower2" class="mr-1" name="flower_name" >
                                                                                            <label for="flower2" class="form-check-label">Thu phí từ công ty bảo hiểm đứng đầu</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <table class=" table table-light" repeater> 
                                                                                    <colgroup>
                                                                                        <col width="25%">
                                                                                        <col width="15%">
                                                                                        <col width="10%">
                                                                                        <col width="10%">
                                                                                        <col width="20%">
                                                                                        <col width="70px">
                                                                                    </colgroup>
                                                                                    <thead class="thead-light">
                                                                                        <th><b>Tên công ty</b></th>
                                                                                        <th><b>Vai trò</b></th>
                                                                                        <th><b>Tỷ lệ ĐBH </b></th>
                                                                                        <th><b>Phí quản lý (%)</b></th>
                                                                                        <th><b>Thành tiền phí quản lý ĐBH</b></th>
                                                                                        <th></th>
                                                                                    </thead>
                                                                                    <tbody data-repeater-list="so-lan-thanh-toan">
                                                                                        <tr data-repeater-item>
                                                                                            <td>
                                                                                                <select class="form-control required" select2 name="cong_ty">
                                                                                                    <option id="" value="" name="">--- Chọn công ty---</option>
                                                                                                    <option id="BR-020" name="VNI" value="BR-020">VNI</option>
                                                                                                    <option id="BR" name="BIC (thừa, đề nghị không chọn)" value="BR">BIC (thừa, đề nghị không chọn)</option>
                                                                                                    <option id="BR-001" name="AON Hà Nội (thừa, đề nghị không chọn)" value="BR-001">AON Hà Nội (thừa, đề nghị không chọn)</option>
                                                                                                    <option id="BR-002" name="QBE Mercantile Mutual" value="BR-002">QBE Mercantile Mutual</option>
                                                                                                    <option id="BR-003" name="BMS Casualty" value="BR-003">BMS Casualty</option>
                                                                                                    <option id="BR-004" name="GRASS-SAVOYE HCMC" value="BR-004">GRASS-SAVOYE HCMC</option>
                                                                                                    <option id="BR-005" name="Webster Hyde Health" value="BR-005">Webster Hyde Health</option>
                                                                                                    <option id="BR-006" name="JARDINE HANOI" value="BR-006">JARDINE HANOI</option>
                                                                                                    <option id="BR-007" name="Marsh Việt Nam" value="BR-007">Marsh Việt Nam</option>
                                                                                                    <option id="BR-008" name="SWIRE" value="BR-008">SWIRE</option>
                                                                                                    <option id="BR-009" name="AON Hồ Chí Minh (thừa, đề nghị không chọn)" value="BR-009">AON Hồ Chí Minh (thừa, đề nghị không chọn)</option>
                                                                                                    <option id="BR-010" name="Grass Savoye Hà Nội (thừa, đề nghị không chọn)" value="BR-010">Grass Savoye Hà Nội (thừa, đề nghị không chọn)</option>
                                                                                                    <option id="BR-011" name="JARDINE HCMC" value="BR-011">JARDINE HCMC</option>
                                                                                                    <option id="BR-012" name="Asia Pacific Risk Consultants" value="BR-012">Asia Pacific Risk Consultants</option>
                                                                                                    <option id="BR-013" name="RIVER INSURANCE MANAGEMENT LTD" value="BR-013">RIVER INSURANCE MANAGEMENT LTD</option>
                                                                                                    <option id="BR-014" name="VIET QUOC INSURANCE BROKER" value="BR-014">VIET QUOC INSURANCE BROKER</option>
                                                                                                    <option id="BR-015" name="EAST ASIA JOINT STOCK INS BROKER CO LTD" value="BR-015">EAST ASIA JOINT STOCK INS BROKER CO LTD</option>
                                                                                                    <option id="BR-016" name="JARDINE LLYOY THOMPSON HONG KONG" value="BR-016">JARDINE LLYOY THOMPSON HONG KONG</option>
                                                                                                    <option id="BR-017" name="EAST ASIA JOINT STOCK INS BROKER CO HN" value="BR-017">EAST ASIA JOINT STOCK INS BROKER CO HN</option>
                                                                                                    <option id="BR-018" name="AON Thailand" value="BR-018">AON Thailand</option>
                                                                                                    <option id="BR-019" name="AON Việt Nam" value="BR-019">AON Việt Nam</option>
                                                                                                    <option id="OA-009" name="Bảo Việt (thừa, đề nghị không chọn)" value="OA-009">Bảo Việt (thừa, đề nghị không chọn)</option>
                                                                                                    <option id="OA-010" name="Bảo Minh (thừa, đề nghị không chọn)" value="OA-010">Bảo Minh (thừa, đề nghị không chọn)</option>
                                                                                                    <option id="OA-011" name="Allianz" value="OA-011">Allianz</option>
                                                                                                    <option id="OA-013" name="PVI" value="OA-013">PVI</option>
                                                                                                    <option id="OA-012" name="PJICO" value="OA-012">PJICO</option>
                                                                                                </select>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-group-select">
                                                                                                    <select class="form-control required" select2 name="nha">
                                                                                                        <option value="">--- Chọn ---</option>
                                                                                                        <option value="opt1">Đứng đầu</option>
                                                                                                        <option value="opt2">Nhà đồng bảo hiểm</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td><input class="form-control" type="text" placeholder=""></td>
                                                                                            <td><input class="form-control" type="text" placeholder=""></td>
                                                                                            <td><input class="form-control input-money" type="text" placeholder=""></td>
                                                                                            <td><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                    <tfoot>
                                                                                        <th colspan="7" class="text-center"><input class="btn bg-success" data-repeater-create type="button" value="+ Thêm"/></th>
                                                                                    </tfoot>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>

                                                         <!-- Step 2 -->
                                                        <h6>Trung gian bảo hiểm</h6>
                                                        <fieldset>
                                                            <div class="row" id="daili">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label>Đại lý: <span class="text-danger">*</span></label>
                                                                        <select class="form-control required" select2 name="dai_ly" >
                                                                            <option id="" value="" name="">--- Chọn đại lý ---</option>
                                                                            <option id="DR-001" name="Trực tiếp" value="DR-001">Trực tiếp</option>
                                                                            <option id="HDDL012020MAFC" name="Công ty Tài Chính TNHH MTV  Mirae Asset (Việt Nam) (MAFC)" value="HDDL012020MAFC">Công ty Tài Chính TNHH MTV Mirae Asset (Việt Nam) (MAFC)</option>
                                                                            <option id="ABBANK2018" name="NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN AN BÌNH" value="ABBANK2018">NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN AN BÌNH</option>
                                                                            <option id="OCBDAICHUNG2019" name="NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN PHƯƠNG ĐÔNG (KHỐI ĐẠI CHÚNG" value="OCBDAICHUNG2019">NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN PHƯƠNG ĐÔNG (KHỐI ĐẠI CHÚNG</option>
                                                                            <option id="OCB2018" name="NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN PHƯƠNG ĐÔNG (RB)" value="OCB2018">NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN PHƯƠNG ĐÔNG (RB)</option>
                                                                            <option id="CBOCB2018" name="NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN PHƯƠNG ĐÔNG(CB)" value="CBOCB2018">NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN PHƯƠNG ĐÔNG(CB)</option>
                                                                            <option id="SMEOCB2018" name="NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN PHƯƠNG ĐÔNG(SME)" value="SMEOCB2018">NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN PHƯƠNG ĐÔNG(SME)</option>
                                                                            <option id="HDDLEXIMBANK2019" name="NGÂN HÀNG THƯƠNG MẠI CP XUẤT NHẬP KHẨU VIỆT NAM" value="HDDLEXIMBANK2019">NGÂN HÀNG THƯƠNG MẠI CP XUẤT NHẬP KHẨU VIỆT NAM</option>
                                                                            <option id="LPB2019" name="NGÂN HÀNG TMCP BƯU ĐIỆN LIÊN VIỆT" value="LPB2019">NGÂN HÀNG TMCP BƯU ĐIỆN LIÊN VIỆT</option>
                                                                            <option id="TPBANK2018" name="NGÂN HÀNG TMCP TIÊN PHONG" value="TPBANK2018">NGÂN HÀNG TMCP TIÊN PHONG</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row" id="moigioi">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label>Môi giới: <span class="text-danger">*</span></label>
                                                                        <select class="form-control required" select2 name="moi_gioi" >
                                                                            <option id="" value="" name="">--- Chọn môi giới: ---</option>
                                                                            <option id="BR-009" name="AON VIET NAM LTD" value="BR-009">AON VIET NAM LTD</option>
                                                                            <option id="BR-004" name="GRAS SAVOYE WILLIS VIET NAM CO.,LTD" value="BR-004">GRAS SAVOYE WILLIS VIET NAM CO.,LTD
                                                                            </option>
                                                                            <option id="BR-007" name="MARSH VIET NAM LTD" value="BR-007">MARSH VIET NAM LTD</option>
                                                                            <option id="OA-064" name="AEGIS INSURANCE SERVICE" value="OA-064">AEGIS INSURANCE SERVICE</option>
                                                                            <option id="BR-020" name="Môi giới Á Đông" value="BR-020">Môi giới Á Đông</option>
                                                                            <option id="BR-021" name="Công ty Cổ phần môi giới Đại Việt" value="BR-021">Công ty Cổ phần môi giới Đại
                                                                                Việt</option>
                                                                            <option id="BR-022" name="Công ty CP môi giới BH Cimeico" value="BR-022">Công ty CP môi giới BH Cimeico</option>
                                                                            <option id="BR-023" name="CTCP MÔI GIỚI BẢO HIỂM VIỆT QUỐC" value="BR-023">CTCP MÔI GIỚI BẢO HIỂM VIỆT QUỐC</option>
                                                                            <option id="BR-65" name="Willis (London) Ltd" value="BR-65">Willis (London) Ltd</option>
                                                                            <option id="BR-01" name="Closed Joint-Stock Company &quot;Malakut Insurance Brokers&quot;" value="BR-01">Closed
                                                                                Joint-Stock Company "Malakut Insurance Brokers"</option>
                                                                            <option id="BR" name="Công ty Cổ phần Môi giới Thái Bình Dương" value="BR">Công ty Cổ phần Môi giới Thái Bình Dương
                                                                            </option>
                                                                            <option id="BR-010" name="GiNET Insurance Services (GIS)" value="BR-010">GiNET Insurance Services (GIS)</option>
                                                                            <option id="BR-001" name="Pana Harrison (Asia) Pte Ltd" value="BR-001">Pana Harrison (Asia) Pte Ltd</option>
                                                                            <option id="BR024" name="Công ty môi giới bảo hiểm Nam Á" value="BR024">Công ty môi giới bảo hiểm Nam Á</option>
                                                                            <option id="BR025" name="Công ty TNHH môi giới bảo hiểm Jardine Lloyd Thompson (JLT)." value="BR025">Công ty TNHH
                                                                                môi giới bảo hiểm Jardine Lloyd Thompson (JLT).</option>
                                                                            <option id="BR026" name="Marsh Insurance Brokers (M) Sdn Bhd" value="BR026">Marsh Insurance Brokers (M) Sdn Bhd
                                                                            </option>
                                                                        </select> 
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label>Hoa hồng: <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control required input-float" name="so_khung" placeholder="Nhập % hoa hồng..." value="">
                                                                            <span class="input-group-append">
                                                                                <span class="input-group-text">%</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                        <div class="form-group ">
                                                                        <label>Vay qua ngân hàng: </label>
                                                                        <div class="button-switch">
                                                                            <input type="checkbox" id="vay_qua_ngan_hang" class="switch required" name="vay_qua_ngan_hang">
                                                                            <label for="vay_qua_ngan_hang" data-off="Không" data-on="Có"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group ">
                                                                    <label>Nguồn dịch vụ: </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 name="nguon_dich_vu">
                                                                                <option id="" value="" name="">--- Chọn nguồn dịch vụ ---</option>
                                                                                <option id="DANG_KIEM" name="Đăng Kiểm" value="DANG_KIEM">Đăng Kiểm</option>
                                                                                <option id="SHOW_ROOM" name="Show room" value="SHOW_ROOM">Show room</option>
                                                                                <option id="NGAN_HANG" name="Ngân hàng" value="NGAN_HANG">Ngân hàng</option>
                                                                                <option id="CO_DONG" name="Cổ đông" value="CO_DONG">Cổ đông</option>
                                                                                <option id="999" name="Trực tiếp" value="999">Trực tiếp</option>
                                                                                <option id="DANG_KIEM_HOANG_QUANG_QUY_HCM" name="Tổng đại lý-Ông Hoàng Quang Quý-HCM" value="DANG_KIEM_HOANG_QUANG_QUY_HCM">Tổng đại lý-Ông Hoàng Quang Quý-HCM</option>
                                                                                <option id="ABBANK" name="Ngân hàng ABBank" value="ABBANK">Ngân hàng ABBank</option>
                                                                                <option id="TPBANK" name="TPBANK" value="TPBANK">TPBANK</option>
                                                                                <option id="DT_ONLINE" name="Đấu thầu online" value="DT_ONLINE">Đấu thầu online</option>
                                                                                <option id="GARAGE" name="Garage" value="GARAGE">Garage</option>
                                                                                <option id="BANK_VN0032" name="VIETBANK" value="BANK_VN0032">VIETBANK</option>
                                                                                <option id="BANK_VN0020" name="HDBANK" value="BANK_VN0020">HDBANK</option>
                                                                                <option id="BANK_VN0022" name="OCBBANK" value="BANK_VN0022">OCBBANK</option>
                                                                                <option id="JACCS" name="Công ty TNHH MTV Quốc tế VIỆT NAM(JACCS)" value="JACCS">Công ty TNHH MTV Quốc tế VIỆT NAM(JACCS)</option>
                                                                                <option id="HHVT" name="Hiệp hội vận tải" value="HHVT">Hiệp hội vận tải</option>
                                                                                <option id="VCB_VCBL" name="Vietcombank Leasing - VCBL" value="VCB_VCBL">Vietcombank Leasing - VCBL</option>
                                                                                <option id="DIRECT_SALE" name="DIRECT SALE" value="DIRECT_SALE">DIRECT SALE</option>
                                                                                <option id="WEBSITE_ONLINE" name="Kênh bán online" value="WEBSITE_ONLINE">Kênh bán online</option>
                                                                                <option id="CTTC" name="Công ty tài chính" value="CTTC">Công ty tài chính</option>
                                                                                <option id="HTXTMDV_SONGTIEN" name="1.không chọn" value="HTXTMDV_SONGTIEN">1.không chọn</option>
                                                                                <option id="CTYCPGPTC_DONGTHANH" name="2.không chọn" value="CTYCPGPTC_DONGTHANH">2.không chọn</option>
                                                                                <option id="HTXTMDVVT_DATTHU" name="3.không chọn" value="HTXTMDVVT_DATTHU">3.không chọn</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group ">
                                                                        <label>Chi tiết: </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 name="chi_tiet">
                                                                                <option id="" value="" name="">--- Chọn chi tiết ---</option>
                                                                                <option value="1">Trung tâm đăng Kiểm</option>
                                                                                <option value="2">ShowRoom</option>
                                                                                <option value="3">.....</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>

                                                            <div id="ngan_hang_opt" class="row" style="display: none;">
                                                                <div class="col-md-3">
                                                                    <div class="form-group ">
                                                                        <label>Ngân hàng: </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 id="ngan_hang" name="ngan_hang" >
                                                                                <option id="" value="" name="">--- Chọn ngân hàng ---</option>
                                                                                <option value="BANK_VN0003" title="Quỹ Tín dụng Nhân dân Trung ương (CCF)">Quỹ Tín dụng Nhân dân Trung ương (CCF)
                                                                                </option>
                                                                                <option value="BANK_VN0004" title="Á Châu (ACB)">Á Châu (ACB)</option>
                                                                                <option value="BANK_VN0006" title="Đông Á (DongA Bank)">Đông Á (DongA Bank)</option>
                                                                                <option value="BANK_VN0007" title="Đông Nam Á (SeABank)">Đông Nam Á (SeABank)</option>
                                                                                <option value="BANK_VN0008" title="Đại Dương (Oceanbank)">Đại Dương (Oceanbank)</option>
                                                                                <option value="BANK_VN0009" title="An Bình (ABBank)">An Bình (ABBank)</option>
                                                                                <option value="BANK_VN0010" title="Bắc Á (NASB)">Bắc Á (NASB)</option>
                                                                                <option value="BANK_VN0011" title="Dầu khí Toàn Cầu(GP.Bank)">Dầu khí Toàn Cầu(GP.Bank)</option>
                                                                                <option value="BANK_VN0012" title="Bản Việt (VIET CAPITAL BANK, VCCB)">Bản Việt (VIET CAPITAL BANK, VCCB)</option>
                                                                                <option value="BANK_VN0013" title="Hàng Hải Việt Nam (Maritime Bank, MSB)">Hàng Hải Việt Nam (Maritime Bank, MSB)
                                                                                </option>
                                                                                <option value="BANK_VN0014" title="Kỹ Thương Việt Nam (Techcombank)">Kỹ Thương Việt Nam (Techcombank)</option>
                                                                                <option value="BANK_VN0015" title="Kiên Long (KienLongBank)">Kiên Long (KienLongBank)</option>
                                                                                <option value="BANK_VN0016" title="Nam Á (Nam A Bank)">Nam Á (Nam A Bank)</option>
                                                                                <option value="BANK_VN0018" title="Việt Nam Thịnh Vượng (VPBank)">Việt Nam Thịnh Vượng (VPBank)</option>
                                                                                <option value="BANK_VN0020" title="Phát triển Nhà TP HCM (HDbank)">Phát triển Nhà TP HCM (HDbank)</option>
                                                                                <option value="BANK_VN0022" title="Phương Đông (OCB)">Phương Đông (OCB)</option>
                                                                                <option value="BANK_VN0023" title="Quân Đội (MBBank)">Quân Đội (MBBank)</option>
                                                                                <option value="BANK_VN0025" title="Quốc tế Việt Nam (VIB)">Quốc tế Việt Nam (VIB)</option>
                                                                                <option value="BANK_VN0026" title="Sài Gòn (SCB)">Sài Gòn (SCB)</option>
                                                                                <option value="BANK_VN0027" title="Sài Gòn Công Thương (Saigonbank)">Sài Gòn Công Thương (Saigonbank)</option>
                                                                                <option value="BANK_VN0028" title="Sài Gòn - Hà Nội (SHB)">Sài Gòn - Hà Nội (SHB)</option>
                                                                                <option value="BANK_VN0029" title="Sài Gòn Thương Tín (Sacombank)">Sài Gòn Thương Tín (Sacombank)</option>
                                                                                <option value="BANK_VN0030" title="Việt Á (VietABank)">Việt Á (VietABank)</option>
                                                                                <option value="BANK_VN0031" title="Bảo Việt (BaoVietBank)">Bảo Việt (BaoVietBank)</option>
                                                                                <option value="BANK_VN0032" title="Việt Nam Thương Tín (VietBank)">Việt Nam Thương Tín (VietBank)</option>
                                                                                <option value="BANK_VN0033" title="Xăng dầu Petrolimex(PGBank)">Xăng dầu Petrolimex(PGBank)</option>
                                                                                <option value="BANK_VN0034" title="Xuất Nhập Khẩu (Eximbank)">Xuất Nhập Khẩu (Eximbank)</option>
                                                                                <option value="BANK_VN0035" title="Bưu Điện Liên Việt (LienVietPostBank)">Bưu Điện Liên Việt (LienVietPostBank)
                                                                                </option>
                                                                                <option value="BANK_VN0036" title="Tiên Phong (TPBank)">Tiên Phong (TPBank)</option>
                                                                                <option value="BANK_VN0037" title="Ngoại Thương Việt Nam (Vietcombank)">Ngoại Thương Việt Nam (Vietcombank)</option>
                                                                                <option value="BANK_VN0040" title="Công Thương Việt Nam (Vietinbank)">Công Thương Việt Nam (Vietinbank)</option>
                                                                                <option value="BANK_VN0041" title="Đầu tư và phát triển Việt Nam (BIDV)">Đầu tư và phát triển Việt Nam (BIDV)
                                                                                </option>
                                                                                <option value="BANK_VN0042" title="Nông nghiệp &amp; phát triển nông thôn VN (Agribank)">Nông nghiệp &amp; phát
                                                                                    triển nông thôn VN (Agribank)</option>
                                                                                <option value="BANK_VN0046" title="Citibank Việt Nam (Citibank)">Citibank Việt Nam (Citibank)</option>
                                                                                <option value="BANK_VN0048" title="Standard Chartered Việt Nam (Standard Chartered)">Standard Chartered Việt Nam
                                                                                    (Standard Chartered)</option>
                                                                                <option value="BANK_VN0049" title="Shinhan Việt Nam (Shinhanvina)">Shinhan Việt Nam (Shinhanvina)</option>
                                                                                <option value="BANK_VN0053" title="The Bank of Tokyo – Mitsubishi UFJ, Ltd. Việt Nam (BTMU)">The Bank of Tokyo –
                                                                                    Mitsubishi UFJ, Ltd. Việt Nam (BTMU)</option>
                                                                                <option value="BANK_VN0054" title="Sumitomo Mitsui Banking Corporation (SMBC)">Sumitomo Mitsui Banking Corporation
                                                                                    (SMBC)</option>
                                                                                <option value="BANK_VN0057" title="Indovina (IVB)">Indovina (IVB)</option>
                                                                                <option value="BANK_VN0058" title="Việt - Nga (VRB)">Việt - Nga (VRB)</option>
                                                                                <option value="BANK_VN0060" title="VID Public Bank">VID Public Bank</option>
                                                                                <option value="BANK_VN0063" title="Đại Chúng Việt Nam (PVcombank)">Đại Chúng Việt Nam (PVcombank)</option>
                                                                                <option value="BANK_VN0065" title="Quốc Dân (NCB)">Quốc Dân (NCB)</option>
                                                                                <option value="BANK_VN0066" title="Xây dựng Việt Nam (CB)">Xây dựng Việt Nam (CB)</option>
                                                                                <option value="BANK_VN0067" title="NGÂN HÀNG TNHH MTV UNITED OVERSEA BANK (UOB)">NGÂN HÀNG TNHH MTV UNITED OVERSEA
                                                                                    BANK (UOB)</option>
                                                                                <option value="BANK_VN0068" title="Qũy tín dụng nhân dân An Lạc (ACF)">Qũy tín dụng nhân dân An Lạc (ACF)</option>
                                                                                <option value="BANK_VN0069" title="Quỹ tín dụng nhân dân Đông Sài Gòn (ĐSGF)">Quỹ tín dụng nhân dân Đông Sài Gòn
                                                                                    (ĐSGF)</option>
                                                                                <option value="BANK_VN0070" title="Quỹ tín dụng nhân dân Chợ Lớn">Quỹ tín dụng nhân dân Chợ Lớn</option>
                                                                                <option value="BANK_VN0071" title="Không vay qua Ngân Hàng">Không vay qua Ngân Hàng</option>
                                                                                <option value="BANK_VN0073" title="Woori">Woori</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group ">
                                                                        <label>Cán bộ ngân hàng: </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 name="chi_tiet">
                                                                                <option id="" value="" name="">--- Chọn ---</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group ">
                                                                        <label>Khối khách hàng: </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 name="vay_qua_ngan_hang">
                                                                                <option id="" value="" name="">--- Chọn ---</option>
                                                                                <option id="CN" name="Cá nhân (RB)" value="CN">Cá nhân (RB)</option>
                                                                                <option id="DN" name="Doanh nghiệp vừa và nhỏ (SME)" value="DN">Doanh nghiệp vừa và nhỏ (SME)</option>
                                                                                <option id="DN_CB" name="Doanh nghiệp lớn (CB)" value="DN_CB">Doanh nghiệp lớn (CB)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group ">
                                                                        <label>Ngân hàng thụ hưởng </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 name="chi_tiet">
                                                                                <option value="" id="">--- Chọn ---</option>
                                                                                <option value="BANK_VN0011" title="Dầu khí Toàn Cầu(GP.Bank)">Dầu khí Toàn Cầu(GP.Bank)</option>
                                                                                <option value="BANK_VN0037" title="Ngoại Thương Việt Nam (Vietcombank)">Ngoại Thương Việt Nam (Vietcombank)</option>
                                                                                <option value="BANK_VN0033" title="Xăng dầu Petrolimex(PGBank)">Xăng dầu Petrolimex(PGBank)</option>
                                                                                <option value="BANK_VN0062" title="Việt - Lào">Việt - Lào</option>
                                                                                <option value="BANK_VN0001" title="Chính sách Xã hội Việt Nam (VPSB)">Chính sách Xã hội Việt Nam (VPSB)</option>
                                                                                <option value="BANK_VN0050" title="Hong Leong Việt Nam (Hong Leong Bank)">Hong Leong Việt Nam (Hong Leong Bank)
                                                                                </option>
                                                                                <option value="BANK_VN0021" title="Phương Nam (Southern Bank)">Phương Nam (Southern Bank)</option>
                                                                                <option value="BANK_VN0075" title="CÔNG TY TÀI CHÍNH TNHH MỘT THÀNH VIÊN QUỐC TẾ VIỆT NAM JACCS">CÔNG TY TÀI CHÍNH
                                                                                    TNHH MỘT THÀNH VIÊN QUỐC TẾ VIỆT NAM JACCS</option>
                                                                                <option value="BANK_VN0023" title="Quân Đội (MBBank)">Quân Đội (MBBank)</option>
                                                                                <option value="BANK_VN0045" title="Deutsche Bank Việt Nam">Deutsche Bank Việt Nam</option>
                                                                                <option value="BANK_VN0074" title="Công ty TNHH MTV Tài chính Toyota Việt Nam">Công ty TNHH MTV Tài chính Toyota
                                                                                    Việt Nam</option>
                                                                                <option value="BANK_VN0044" title="ANZ Việt Nam (ANZ)">ANZ Việt Nam (ANZ)</option>
                                                                                <option value="BANK_VN0057" title="Indovina (IVB)">Indovina (IVB)</option>
                                                                                <option value="BANK_VN0055" title="Commonwealth Bank tại Việt Nam (Commonwealth Bank)">Commonwealth Bank tại Việt
                                                                                    Nam (Commonwealth Bank)</option>
                                                                                <option value="BANK_VN0039" title="Đại Tín (TrustBank)">Đại Tín (TrustBank)</option>
                                                                                <option value="BANK_VN0026" title="Sài Gòn (SCB)">Sài Gòn (SCB)</option>
                                                                                <option value="BANK_VN0059" title="Ngân hàng ShinhanVina">Ngân hàng ShinhanVina</option>
                                                                                <option value="BANK_VN0038" title="Phát Triển Mê Kông (MDB)">Phát Triển Mê Kông (MDB)</option>
                                                                                <option value="BANK_VN0063" title="Đại Chúng Việt Nam (PVcombank)">Đại Chúng Việt Nam (PVcombank)</option>
                                                                                <option value="BANK_VN0028" title="Sài Gòn - Hà Nội (SHB)">Sài Gòn - Hà Nội (SHB)</option>
                                                                                <option value="BANK_VN0015" title="Kiên Long (KienLongBank)">Kiên Long (KienLongBank)</option>
                                                                                <option value="BANK_VN0056" title="Đầu tư và Phát triển Campuchia (BIDC)">Đầu tư và Phát triển Campuchia (BIDC)
                                                                                </option>
                                                                                <option value="BANK_VN0002" title="Phát triển Việt Nam (VDB)">Phát triển Việt Nam (VDB)</option>
                                                                                <option value="BANK_VN0022" title="Phương Đông (OCB)">Phương Đông (OCB)</option>
                                                                                <option value="BANK_VN0020" title="Phát triển Nhà TP HCM (HDbank)">Phát triển Nhà TP HCM (HDbank)</option>
                                                                                <option value="BANK_VN0070" title="Quỹ tín dụng nhân dân Chợ Lớn">Quỹ tín dụng nhân dân Chợ Lớn</option>
                                                                                <option value="BANK_VN0030" title="Việt Á (VietABank)">Việt Á (VietABank)</option>
                                                                                <option value="BANK_VN0004" title="Á Châu (ACB)">Á Châu (ACB)</option>
                                                                                <option value="BANK_VN0042" title="Nông nghiệp &amp; phát triển nông thôn VN (Agribank)">Nông nghiệp &amp; phát
                                                                                    triển nông thôn VN (Agribank)</option>
                                                                                <option value="BANK_VN0014" title="Kỹ Thương Việt Nam (Techcombank)">Kỹ Thương Việt Nam (Techcombank)</option>
                                                                                <option value="BANK_VN0035" title="Bưu Điện Liên Việt &amp;#40;LienVietPostBank&amp;#41;">Bưu Điện Liên Việt
                                                                                    &amp;#40;LienVietPostBank&amp;#41;</option>
                                                                                <option value="BANK_VN0040" title="Công Thương Việt Nam (Vietinbank)">Công Thương Việt Nam (Vietinbank)</option>
                                                                                <option value="BANK_VN0036" title="Tiên Phong (TPBank)">Tiên Phong (TPBank)</option>
                                                                                <option value="BANK_VN0046" title="Citibank Việt Nam (Citibank)">Citibank Việt Nam (Citibank)</option>
                                                                                <option value="BANK_VN0031" title="Bảo Việt (BaoVietBank)">Bảo Việt (BaoVietBank)</option>
                                                                                <option value="BANK_VN0016" title="Nam Á (Nam A Bank)">Nam Á (Nam A Bank)</option>
                                                                                <option value="BANK_VN0018" title="Việt Nam Thịnh Vượng (VPBank)">Việt Nam Thịnh Vượng (VPBank)</option>
                                                                                <option value="BANK_VN0060" title="VID Public Bank">VID Public Bank</option>
                                                                                <option value="BANK_VN0054" title="Sumitomo Mitsui Banking Corporation (SMBC)">Sumitomo Mitsui Banking Corporation
                                                                                    (SMBC)</option>
                                                                                <option value="BANK_VN0061" title="Việt - Thái">Việt - Thái</option>
                                                                                <option value="BANK_VN0065" title="Quốc Dân (NCB)">Quốc Dân (NCB)</option>
                                                                                <option value="BANK_VN0032" title="Việt Nam Thương Tín (VietBank)">Việt Nam Thương Tín (VietBank)</option>
                                                                                <option value="BANK_VN0027" title="Sài Gòn Công Thương (Saigonbank)">Sài Gòn Công Thương (Saigonbank)</option>
                                                                                <option value="BANK_VN0006" title="Đông Á (DongA Bank)">Đông Á (DongA Bank)</option>
                                                                                <option value="BANK_VN0053" title="The Bank of Tokyo – Mitsubishi UFJ, Ltd. Việt Nam (BTMU)">The Bank of Tokyo –
                                                                                    Mitsubishi UFJ, Ltd. Việt Nam (BTMU)</option>
                                                                                <option value="BANK_VN0041" title="Đầu tư và phát triển Việt Nam (BIDV)">Đầu tư và phát triển Việt Nam (BIDV)
                                                                                </option>
                                                                                <option value="BANK_VN0034" title="Xuất Nhập Khẩu &amp;#40;Eximbank&amp;#41;">Xuất Nhập Khẩu
                                                                                    &amp;#40;Eximbank&amp;#41;</option>
                                                                                <option value="BANK_VN0008" title="Đại Dương (Oceanbank)">Đại Dương (Oceanbank)</option>
                                                                                <option value="BANK_VN0012" title="Bản Việt (VIET CAPITAL BANK, VCCB)">Bản Việt (VIET CAPITAL BANK, VCCB)</option>
                                                                                <option value="BANK_VN0048" title="Standard Chartered Việt Nam (Standard Chartered)">Standard Chartered Việt Nam
                                                                                    (Standard Chartered)</option>
                                                                                <option value="BANK_VN0007" title="Đông Nam Á (SeABank)">Đông Nam Á (SeABank)</option>
                                                                                <option value="BANK_VN0010" title="Bắc Á (NASB)">Bắc Á (NASB)</option>
                                                                                <option value="BANK_VN0017" title="Nam Việt">Nam Việt</option>
                                                                                <option value="BANK_VN0019" title="Nhà Hà Nội(Habubank, HBB)">Nhà Hà Nội(Habubank, HBB)</option>
                                                                                <option value="BANK_VN0029" title="Sài Gòn Thương Tín (Sacombank)">Sài Gòn Thương Tín (Sacombank)</option>
                                                                                <option value="BANK_VN0058" title="Việt - Nga (VRB)">Việt - Nga (VRB)</option>
                                                                                <option value="BANK_VN0066" title="Xây dựng Việt Nam (CB)">Xây dựng Việt Nam (CB)</option>
                                                                                <option value="BANK_VN0051" title="BIDC">BIDC</option>
                                                                                <option value="BANK_VN0049" title="Shinhan Việt Nam (Shinhanvina)">Shinhan Việt Nam (Shinhanvina)</option>
                                                                                <option value="BANK_VN0024" title="Phương Tây (Western Bank)">Phương Tây (Western Bank)</option>
                                                                                <option value="BANK_VN0013" title="Hàng Hải Việt Nam (Maritime Bank, MSB)">Hàng Hải Việt Nam (Maritime Bank, MSB)
                                                                                </option>
                                                                                <option value="BANK_VN0047" title="HSBC Việt Nam (HSBC)">HSBC Việt Nam (HSBC)</option>
                                                                                <option value="BANK_VN0052" title="Mizuho Việt Nam (Mizuho Bank)">Mizuho Việt Nam (Mizuho Bank)</option>
                                                                                <option value="BANK_VN0067" title="NGÂN HÀNG TNHH MTV UNITED OVERSEA BANK (UOB)">NGÂN HÀNG TNHH MTV UNITED OVERSEA
                                                                                    BANK (UOB)</option>
                                                                                <option value="BANK_VN0009" title="An Bình (ABBank)">An Bình (ABBank)</option>
                                                                                <option value="BANK_VN0073" title="Woori">Woori</option>
                                                                                <option value="BANK_VN0025" title="Quốc tế Việt Nam &amp;#40;VIB&amp;#41;">Quốc tế Việt Nam &amp;#40;VIB&amp;#41;
                                                                                </option>
                                                                                <option value="BANK_VN0005" title="Đại Á">Đại Á</option>
                                                                                <option value="BANK_VN0003" title="Quỹ Tín dụng Nhân dân Trung ương (CCF)">Quỹ Tín dụng Nhân dân Trung ương (CCF)
                                                                                </option>
                                                                                <option value="BANK_VN0043" title="Phát triển Nhà ĐBSCL (MHB)">Phát triển Nhà ĐBSCL (MHB)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                        <div class="form-group ">
                                                                        <label>Phối hợp khai thác: </label>
                                                                        <div class="button-switch">
                                                                            <input type="checkbox" id="phoi_hop_khai_thac" class="switch required" name="phoi_hop_khai_thac">
                                                                            <label for="phoi_hop_khai_thac" data-off="Không" data-on="Có"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <div class="form-group ">
                                                                        <label>Hình thức phối hợp: </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 name="hinh_thuc_phoi_hop">
                                                                                <option value="">--- Chọn hình thức phối hợp ---</option>
                                                                                <option value="1">HT(Đơn vị khai thác)</option>
                                                                                <option value="2">KHDN</option>
                                                                                <option value="3">PB(Doanh thu nhận phân bổ)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </fieldset>
                                                        
                                                        <!-- Step 3 -->
                                                        <h6>Đối tượng bảo hiểm</h6>
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Số người được bảo hiểm: <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control required" name="so_don_bao_hiem" placeholder="">
                                                                            <span class="input-group-append">
                                                                                <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_nguoi_tham_gia_bao_hiem">Danh sách người tham gia bảo hiểm<i class="icon-profile ml-2"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Chương trình BH: <span class="text-danger">*</span></label>
                                                                        <select class="form-control required" select2 name="loai_tien">
                                                                            <option id="" value="" name="">--- Chọn chương trình BH: ---</option>
                                                                            <option id="COV19" name="Chiến thắng Covid" value="COV19">Chiến thắng Covid</option>
                                                                            <option id="KHAC" name="Bảo hiểm con người khác" value="KHAC">Bảo hiểm con người khác</option></select>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group">
                                                                        <label>Gói bảo hiểm: <span class="text-danger">*</span></label>
                                                                        <select class="form-control required" select2 name="loai_tien">
                                                                            <option id="" value="" name="">--- Chọn Gói bảo hiểm ---</option><option id="COVA1" name="-Gói A1(Quyền lợi: Tử vong do covid+100 Triệu, Trợ cấp điều trị nội trú +500K/người/ngày, Phí BH: 80,000 VND, Thời gian BH 3 tháng)" value="COVA1">-Gói A1(Quyền lợi: Tử vong do covid+100 Triệu, Trợ cấp điều trị nội trú +500K/người/ngày, Phí BH: 80,000 VND, Thời gian BH 3 tháng)</option><option id="COVA2" name="-Gói A2(Quyền lợi: Tử vong do covid+100 Triệu, Trợ cấp điều trị nội trú +500K/người/ngày, Phí BH: 120,000 VND, Thời gian BH 6 tháng)" value="COVA2">-Gói A2(Quyền lợi: Tử vong do covid+100 Triệu, Trợ cấp điều trị nội trú +500K/người/ngày, Phí BH: 120,000 VND, Thời gian BH 6 tháng)</option><option id="COVA3" name="-Gói A3(Quyền lợi: Tử vong do covid+100 Triệu, Trợ cấp điều trị nội trú +500K/người/ngày, Phí BH: 180,000 VND, Thời gian BH: 12 tháng)" value="COVA3">-Gói A3(Quyền lợi: Tử vong do covid+100 Triệu, Trợ cấp điều trị nội trú +500K/người/ngày, Phí BH: 180,000 VND, Thời gian BH: 12 tháng)</option><option id="COVB1" name="-Gói B1(Quyền lợi: Tử vong do covid +50 Triệu, Trợ cấp điều trị nội trú +300K/người/ngày, Phí BH: 40,000 VND, Thời gian BH: 3 tháng)" value="COVB1">-Gói B1(Quyền lợi: Tử vong do covid +50 Triệu, Trợ cấp điều trị nội trú +300K/người/ngày, Phí BH: 40,000 VND, Thời gian BH: 3 tháng)</option><option id="COVB2" name="-Gói B2(Quyền lợi: Tử vong do covid+50 Triệu, Trợ cấp điều trị nội trú +300K/người/ngày, Phí BH: 80,000 VND, Thời gian BH: 6 tháng)" value="COVB2">-Gói B2(Quyền lợi: Tử vong do covid+50 Triệu, Trợ cấp điều trị nội trú +300K/người/ngày, Phí BH: 80,000 VND, Thời gian BH: 6 tháng)</option><option id="COVB3" name="-Gói B3(Quyền lợi: Tử vong do covid+50 Triệu, Trợ cấp điều trị nội trú +300K/người/ngày, Phí BH: 100,000 VND, Thời gian BH: 12 tháng)" value="COVB3">-Gói B3(Quyền lợi: Tử vong do covid+50 Triệu, Trợ cấp điều trị nội trú +300K/người/ngày, Phí BH: 100,000 VND, Thời gian BH: 12 tháng)</option><option id="KHAC" name="-Gói bảo hiểm con người khác" value="KHAC">-Gói bảo hiểm con người khác</option><option id="COVS1" name="-Gói S1(Quyền lợi: Tử vong do covid+150 Triệu, Trợ cấp điều trị nội trú +700K/người/ngày, Phí BH: 100,000 VND, Thời gian BH 3 tháng)" value="COVS1">-Gói S1(Quyền lợi: Tử vong do covid+150 Triệu, Trợ cấp điều trị nội trú +700K/người/ngày, Phí BH: 100,000 VND, Thời gian BH 3 tháng)</option><option id="COVS2" name="-Gói S2(Quyền lợi: Tử vong do covid+150 Triệu, Trợ cấp điều trị nội trú +700K/người/ngày, Phí BH: 180,000 VND, Thời gian BH 6 tháng)" value="COVS2">-Gói S2(Quyền lợi: Tử vong do covid+150 Triệu, Trợ cấp điều trị nội trú +700K/người/ngày, Phí BH: 180,000 VND, Thời gian BH 6 tháng)</option><option id="COVS3" name="-Gói S3(Quyền lợi: Tử vong do covid+150 Triệu, Trợ cấp điều trị nội trú +700K/người/ngày, Phí BH: 280,000 VND, Thời gian BH 12 tháng)" value="COVS3">-Gói S3(Quyền lợi: Tử vong do covid+150 Triệu, Trợ cấp điều trị nội trú +700K/người/ngày, Phí BH: 280,000 VND, Thời gian BH 12 tháng)</option><option id="COVIN1" name="Gói Phổ Thông 1(10tr)" value="COVIN1">Gói Phổ Thông 1(10tr)</option><option id="COVIN2" name="Gói Phổ Thông 2(20tr)" value="COVIN2">Gói Phổ Thông 2(20tr)</option><option id="COVIN3" name="Gói VIP" value="COVIN3">Gói VIP</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </fieldset>
                                                        
                                                        <!-- Step 4 -->
                                                        <h6>Phạm vi bảo hiểm</h6>
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Thời hạn bảo hiểm: <span class="text-danger">*</span></label>
                                                                        <div class="row">
                                                                            <div class="col-md-6 d-flex">
                                                                                <span style="width: 100px;">Từ</span>
                                                                                <input type="time" class="form-control mr-2 input-time" placeholder="Nhập giờ...">
                                                                                <input type="text" class="form-control datepicker input-date" placeholder="Nhập ngày...">
                                                                            </div>
                                                                            <div class="col-md-6 d-flex">
                                                                                <span style="width: 100px;">Đến</span>
                                                                                <input type="time" class="form-control mr-2 input-time" placeholder="Nhập giờ...">
                                                                                <input type="text" class="form-control datepicker input-date" placeholder="Nhập ngày...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Thông tin về thời hạn thanh toán: <span class="text-danger">*</span></label>
                                                                        <textarea name="" type="time" class="form-control mr-2 input-time" placeholder="Nhập thông tin..."></textarea>
                                                                    </div>
                                                                </div>
                                                                 <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Thanh toán tại ngân hàng: </label>
                                                                         <select class="form-control" select2 name="thanh_tai_bank">
                                                                            <option id="" value="" name="">--- Chọn thanh toán tại ngân hàng ---</option><option id="SGD1-BIDV" name="Sở giao dịch 1 - Ngân hàng Đầu tư và Phát triển Việt nam" value="SGD1-BIDV">Sở giao dịch 1 - Ngân hàng Đầu tư và Phát triển Việt nam</option><option id="NH_DAIA" name="Ngân hàng TMCPNT Đại Á - chi nhánh Quang Vinh" value="NH_DAIA">Ngân hàng TMCPNT Đại Á - chi nhánh Quang Vinh</option><option id="NH_TMCP_HANOI" name="Ngân hàng thương mại cổ phần  - chi nhánh Hà Nội" value="NH_TMCP_HANOI">Ngân hàng thương mại cổ phần  - chi nhánh Hà Nội</option><option id="TECHCOMBANK_HANOI" name="Ngân Hàng Thương Mại Cổ Phần Kỹ thương Việt Nam - Sở Giao Dịch Hà Nội (Techcombank Ha Noi)" value="TECHCOMBANK_HANOI">Ngân Hàng Thương Mại Cổ Phần Kỹ thương Việt Nam - Sở Giao Dịch Hà Nội (Techcombank Ha Noi)</option><option id="BSC" name="CTY TNHH CHỨNG KHOÁN NGÂN HÀNG ĐT&amp;PT VIỆT NAM" value="BSC">CTY TNHH CHỨNG KHOÁN NGÂN HÀNG ĐT&amp;PT VIỆT NAM</option><option id="BIDV" name="NGÂN HÀNG ĐẦU TƯ VÀ PHÁT TRIỂN VIỆT NAM" value="BIDV">NGÂN HÀNG ĐẦU TƯ VÀ PHÁT TRIỂN VIỆT NAM</option><option id="HABUBANK" name="NH TMCP NHÀ HÀ NỘI" value="HABUBANK">NH TMCP NHÀ HÀ NỘI</option><option id="VRB" name="NH LIÊN DOANH VIỆT NGA HÀ NÔI" value="VRB">NH LIÊN DOANH VIỆT NGA HÀ NÔI</option><option id="TCB-HOISO" name="NH TMCP KÝ THƯƠNG VIỆT  NAM-TT GIÁO DICH HỘI SỞ" value="TCB-HOISO">NH TMCP KÝ THƯƠNG VIỆT  NAM-TT GIÁO DICH HỘI SỞ</option><option id="ABB" name="NH TMCP AN BÌNH HỘI SỞ" value="ABB">NH TMCP AN BÌNH HỘI SỞ</option><option id="BIDVT1-C-VND" name="TIỀN GỬI VND CHUYÊN THU TẠI SGD1 BIDV" value="BIDVT1-C-VND">TIỀN GỬI VND CHUYÊN THU TẠI SGD1 BIDV</option><option id="BNKACB-M1-VND" name="TIỀN GỬI VND TẠI ACB MASTER CARD 1" value="BNKACB-M1-VND">TIỀN GỬI VND TẠI ACB MASTER CARD 1</option><option id="BNKACB-M2-VND" name="TIỀN GỬI VND TẠI ACB MASTER CARD 2" value="BNKACB-M2-VND">TIỀN GỬI VND TẠI ACB MASTER CARD 2</option><option id="BNKDA-C-VND" name="TIỀN GỬI VND CHUYÊN THU TẠI NHTMCP ĐẠI Á" value="BNKDA-C-VND">TIỀN GỬI VND CHUYÊN THU TẠI NHTMCP ĐẠI Á</option><option id="BSC-I-VND" name="TIỀN GỬI VND TẠI CÔNG TY CHỨNG KHOÁN BIDV CN HÀ NỘI" value="BSC-I-VND">TIỀN GỬI VND TẠI CÔNG TY CHỨNG KHOÁN BIDV CN HÀ NỘI</option><option id="BNKTECH-C-VND" name="Ngân hàng thương mại cổ phần Kỹ thương Việt Nam - Chi nhánh Hà Nội (Techcombank Ha Noi)" value="BNKTECH-C-VND">Ngân hàng thương mại cổ phần Kỹ thương Việt Nam - Chi nhánh Hà Nội (Techcombank Ha Noi)</option><option id="ABB-HANOI" name="ABB – PGD HOÀNG CẦU, HÀ NỘI" value="ABB-HANOI">ABB – PGD HOÀNG CẦU, HÀ NỘI</option><option id="SACOMBANK-HANOI" name="Ngân Hàng Thương Mại Cổ Phần Sài Gòn Thương Tín - Sở Giao Dịch Hà Nội (Sacombank Ha Noi)" value="SACOMBANK-HANOI">Ngân Hàng Thương Mại Cổ Phần Sài Gòn Thương Tín - Sở Giao Dịch Hà Nội (Sacombank Ha Noi)</option><option id="BIDV-HATHANH(BTB)" name="Chi nhánh ngân hàng ĐT&amp;PT Hà Thành" value="BIDV-HATHANH(BTB)">Chi nhánh ngân hàng ĐT&amp;PT Hà Thành</option><option id="ABB-HANOI(BTB)" name="Ngân Hàng Thương Mại Cổ Phần An Bình - Chi Nhánh  Hà Nội (Abbank Ha Noi)" value="ABB-HANOI(BTB)">Ngân Hàng Thương Mại Cổ Phần An Bình - Chi Nhánh  Hà Nội (Abbank Ha Noi)</option><option id="BIDV-HATHANH" name="Chi nhán Ngân hàng Đầu tư và phát triển Hà Thành" value="BIDV-HATHANH">Chi nhán Ngân hàng Đầu tư và phát triển Hà Thành</option><option id="VIB" name="NH TMCP QUỐC TÊ" value="VIB">NH TMCP QUỐC TÊ</option><option id="NNo-LANGTHUONG" name="NH NNo&amp;PTNT LÁNG THƯỢNG" value="NNo-LANGTHUONG">NH NNo&amp;PTNT LÁNG THƯỢNG</option><option id="NNo-MYDINH" name="NH NNo&amp;PTNT MỸ ĐÌNH" value="NNo-MYDINH">NH NNo&amp;PTNT MỸ ĐÌNH</option><option id="NNo-LANGHA" name="NH NNo&amp;PTNT LÁNG HẠ" value="NNo-LANGHA">NH NNo&amp;PTNT LÁNG HẠ</option><option id="OCEANBANK" name="Ngân Hàng Thương Mại Cổ Phần Đại Dương (Oceanbank)" value="OCEANBANK">Ngân Hàng Thương Mại Cổ Phần Đại Dương (Oceanbank)</option><option id="FPTS" name="CÔNG TY CỔ PHẦN CHỨNG KHOÁN FPT" value="FPTS">CÔNG TY CỔ PHẦN CHỨNG KHOÁN FPT</option><option id="TECH_HBT" name="Ngân hàng thương mại cổ phần Kỹ thương Việt Nam - Chi nhánh Hai Bà Trưng (Techcombank Hai Ba Trung)" value="TECH_HBT">Ngân hàng thương mại cổ phần Kỹ thương Việt Nam - Chi nhánh Hai Bà Trưng (Techcombank Hai Ba Trung)</option><option id="VietinBankCD" name="Ngân hàng Công thương Việt Nam - Chi nhánh Chương Dương (Vietinbank Chuong Duong)" value="VietinBankCD">Ngân hàng Công thương Việt Nam - Chi nhánh Chương Dương (Vietinbank Chuong Duong)</option><option id="ABBs" name="Công ty CP Chứng khoán An Bình" value="ABBs">Công ty CP Chứng khoán An Bình</option><option id="TCSD" name="CÔNG TY TÀI CHÍNH CỔ PHẦN SÔNG ĐÀ" value="TCSD">CÔNG TY TÀI CHÍNH CỔ PHẦN SÔNG ĐÀ</option><option id="LILAMA" name="LILAMA" value="LILAMA">LILAMA</option><option id="PTVN" name="NGÂN HÀNG PHÁT TRIỂN VIỆT NAM" value="PTVN">NGÂN HÀNG PHÁT TRIỂN VIỆT NAM</option><option id="SDTL" name="SÔNG ĐÀ THĂNG LONG" value="SDTL">SÔNG ĐÀ THĂNG LONG</option><option id="BANK0079" name="Ngân Hàng Thương Mại Cổ Phần Kỹ Thương Việt Nam CIB - Khối CIB" value="BANK0079">Ngân Hàng Thương Mại Cổ Phần Kỹ Thương Việt Nam CIB - Khối CIB</option><option id="BANK0091" name="Ngân hàng TMCP quốc tế VN" value="BANK0091">Ngân hàng TMCP quốc tế VN</option><option id="BANK0093" name="Ngân Hàng Toàn Cẩu Am Hiểu Địa Phương (HSBC Bank (Vietnam) Ltd)" value="BANK0093">Ngân Hàng Toàn Cẩu Am Hiểu Địa Phương (HSBC Bank (Vietnam) Ltd)</option><option id="BANK0101" name="Ngân Hàng Thương Mại Cổ Phần Quân Đội VIệt Nam (MBBANK - SGD)" value="BANK0101">Ngân Hàng Thương Mại Cổ Phần Quân Đội VIệt Nam (MBBANK - SGD)</option><option id="BANK0106" name="Ngân hàng TMCP Xuất nhập khẩu VN - CN Hà Nội ( Eximbank Hà Nội)" value="BANK0106">Ngân hàng TMCP Xuất nhập khẩu VN - CN Hà Nội ( Eximbank Hà Nội)</option><option id="BANK0107" name="Ngân hàng TMCP Đông Nam Á - Sở giao dịch ( Seabank- SGD)" value="BANK0107">Ngân hàng TMCP Đông Nam Á - Sở giao dịch ( Seabank- SGD)</option><option id="BANK0111" name="Techcombank - CN Quảng Ninh" value="BANK0111">Techcombank - CN Quảng Ninh</option><option id="BANK0114" name="Ngân hàng TMCP Sài Gòn Hà Nội - CN Hà Nội" value="BANK0114">Ngân hàng TMCP Sài Gòn Hà Nội - CN Hà Nội</option><option id="BANK0119" name="Ngân hàng TMCP Đông Nam Á - CN. Đà Nẵng" value="BANK0119">Ngân hàng TMCP Đông Nam Á - CN. Đà Nẵng</option><option id="BANK0120" name="Ngân hàng TMCP Phương Đông(OCB) -CN Thanh Hóa" value="BANK0120">Ngân hàng TMCP Phương Đông(OCB) -CN Thanh Hóa</option><option id="BANK0128" name="NGÂN HÀNG TMCP CÔNG THƯƠNG VIỆT NAM-CN TP HCM(Vietinbank - HCM)" value="BANK0128">NGÂN HÀNG TMCP CÔNG THƯƠNG VIỆT NAM-CN TP HCM(Vietinbank - HCM)</option><option id="BANK0135" name="Ngân hàng TMCP phát triển thành phố Hồ Chí Minh - Chi nhánh Hải Phòng (HDBank)" value="BANK0135">Ngân hàng TMCP phát triển thành phố Hồ Chí Minh - Chi nhánh Hải Phòng (HDBank)</option><option id="BANK0154" name="Ngân hàng TMCP Sài Gòn Hà Nội - CN Trung Hòa Nhân Chính" value="BANK0154">Ngân hàng TMCP Sài Gòn Hà Nội - CN Trung Hòa Nhân Chính</option><option id="SHS" name="Công ty cổ phần chứng khoán Sài Gòn Hà Nội" value="SHS">Công ty cổ phần chứng khoán Sài Gòn Hà Nội</option><option id="BANK0175" name="VietinBank- CN TP Hồ Chí Minh" value="BANK0175">VietinBank- CN TP Hồ Chí Minh</option><option id="BANK0183" name="Ngân hàng quốc dân - CN Hà Nội" value="BANK0183">Ngân hàng quốc dân - CN Hà Nội</option><option id="BANK0191" name="Ngân hàng TMCP Ngoại thương Việt Nam - Chi nhánh An Giang" value="BANK0191">Ngân hàng TMCP Ngoại thương Việt Nam - Chi nhánh An Giang</option><option id="BANK0195" name="Ngân hàng TMCP Sài Gòn Hà Nội - Chi nhánh Hà Nội (1008665763)" value="BANK0195">Ngân hàng TMCP Sài Gòn Hà Nội - Chi nhánh Hà Nội (1008665763)</option><option id="BANK0202" name="Ngân hàng TMCP Phát triển TP HCM - Chi nhánh Ba Đình - PGD Trung Hòa" value="BANK0202">Ngân hàng TMCP Phát triển TP HCM - Chi nhánh Ba Đình - PGD Trung Hòa</option><option id="BANK0210" name="Ngân hàng TMCP Sài Gòn Hà Nội - Chi nhánh Hàn Thuyên" value="BANK0210">Ngân hàng TMCP Sài Gòn Hà Nội - Chi nhánh Hàn Thuyên</option><option id="BANK0214" name="Ngân hàng TMCP Việt Nam Thương Tín - Chi nhánh Hà Nội" value="BANK0214">Ngân hàng TMCP Việt Nam Thương Tín - Chi nhánh Hà Nội</option><option id="BANK0215" name="Ngân hàng TMCP Phát triển TP HCM - Chi nhánh Bình Định" value="BANK0215">Ngân hàng TMCP Phát triển TP HCM - Chi nhánh Bình Định</option><option id="BANK0219" name="Ngân hàng TMCP Phát triển TP HCM - Chi nhánh Lào Cai" value="BANK0219">Ngân hàng TMCP Phát triển TP HCM - Chi nhánh Lào Cai</option><option id="BANK0222" name="Ngân hàng TMCP An Bình - Chi nhánh Bà Rịa Vũng Tàu, PGD Bà Rịa" value="BANK0222">Ngân hàng TMCP An Bình - Chi nhánh Bà Rịa Vũng Tàu, PGD Bà Rịa</option><option id="BANK0229" name="Ngân hàng TMCP phát triển TP Hồ Chí Minh - Chi nhánh Hàng Xanh - PGD Bình Thạnh" value="BANK0229">Ngân hàng TMCP phát triển TP Hồ Chí Minh - Chi nhánh Hàng Xanh - PGD Bình Thạnh</option><option id="ABB-BATD" name="ABBank - PGD Hoàng Cầu (DN)" value="ABB-BATD">ABBank - PGD Hoàng Cầu (DN)</option><option id="BANK0249" name="Ngân hàng TMCP Phương Đông - Chi nhánh Hà Nội - PGD Tràng An" value="BANK0249">Ngân hàng TMCP Phương Đông - Chi nhánh Hà Nội - PGD Tràng An</option><option id="ABB-KHAITHAC" name="ABBank - PGD Hoàng Cầu (Khai thác)" value="ABB-KHAITHAC">ABBank - PGD Hoàng Cầu (Khai thác)</option><option id="ABBinh-TT" name="Ngân hàng TMCP An Bình - PGD  Hoàng Cầu - CN Hà Nội" value="ABBinh-TT">Ngân hàng TMCP An Bình - PGD  Hoàng Cầu - CN Hà Nội</option><option id="BANK0264" name="Ngân hàng TMCP Phương Đông - PGD Tràng An" value="BANK0264">Ngân hàng TMCP Phương Đông - PGD Tràng An</option><option id="BANK0281" name="OCB - PGD Tràng An - CN Hà Nội (SME)" value="BANK0281">OCB - PGD Tràng An - CN Hà Nội (SME)</option><option id="TPBANK" name="Ngân hàng TMCP Tiên Phong - Hội sở" value="TPBANK">Ngân hàng TMCP Tiên Phong - Hội sở</option><option id="BANK0290" name="Ngân hàng TMCP Phương Đông" value="BANK0290">Ngân hàng TMCP Phương Đông</option><option id="BANK0291" name="Ngân hàng TMCP Công Thương Việt Nam - CN Đăk Lăk" value="BANK0291">Ngân hàng TMCP Công Thương Việt Nam - CN Đăk Lăk</option><option id="BANK0292" name="Ngân hàng TMCP An Bình - CN Thái Nguyên" value="BANK0292">Ngân hàng TMCP An Bình - CN Thái Nguyên</option><option id="BANK0294" name="Ngân hàng TMCP Tiên Phong - PGD Thái Nguyên" value="BANK0294">Ngân hàng TMCP Tiên Phong - PGD Thái Nguyên</option><option id="BANK0305" name="SHB Trung Hòa - Nhân Chính (BANCAS)" value="BANK0305">SHB Trung Hòa - Nhân Chính (BANCAS)</option><option id="BANK0306" name="Ngân hàng TMCP An Bình" value="BANK0306">Ngân hàng TMCP An Bình</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Phạm vi bảo hiểm:</label>
                                                                        <div>
                                                                            <table class="table table-bordered datatable" 
                                                                                data-paging="false"
                                                                                data-info="false"
                                                                                data-ordering="false"
                                                                                data-searching="false"
                                                                                >
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th width="20%">Phạm vi bảo hiểm</th>
                                                                                        <th width="10%">Số tiền bảo hiểm</th>
                                                                                        <th width="5%" class="desktop">Phí (%)</th>
                                                                                        <th width="10%" class="desktop">Phí BH (có VAT)</th>
                                                                                        <th width="5%" class="desktop">VAT (%)</th>
                                                                                        <th width="10%" class="desktop">VAT</th>
                                                                                        <th width="5%" class="desktop">COM (%)</th>
                                                                                        <th width="10%" class="desktop">COM</th>
                                                                                        <th width="20%" class="desktop">Định mức</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1. Phạm vi A (Chết do ốm đau, bệnh tật, thai sản)</td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td>
                                                                                            <select class="form-control " select2 name="dinh_muc" >
                                                                                                <option value="">Bảo hiểm sức khỏe</option>                                                                                        
                                                                                            </select>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2. Phạm vi B (Chết và thương tật thân thể do tai nạn)</td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td>
                                                                                            <select class="form-control " select2 name="dinh_muc" >
                                                                                                <option value="">Bảo hiểm sức khỏe</option>                                                                                        
                                                                                            </select>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>3. Phạm vi C (Ốm đau, bệnh tật, thai sản phải nằm viện hoặc phẫu thuật)</td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0" value="0.99"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td><input class="form-control text-right" disabled="disabled" readonly="readonly" type="text" value="10"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                        <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                        <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                        <td>
                                                                                            <select class="form-control " select2 name="dinh_muc" >
                                                                                                <option value="">Bảo hiểm sức khỏe</option>                                                                                        
                                                                                            </select>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th><b>Tổng cộng: </b></th>
                                                                                        <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                        <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0.99"></th>
                                                                                        <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                        <th align="right"><input class="form-control text-right" type="text" disabled readonly value="10"></th>
                                                                                        <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                        <th align="right"><input class="form-control text-right" type="text" disabled readonly value="10.0"></th>
                                                                                        <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
                                                                                        <th align="right"></th>
                                                                                    </tr>
                                                                                </tbody>
                                                                                    
                                                                            </table>
                                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Tổng số tiền hoa hồng đại lí: </label>
                                                                        <input type="text" class="form-control input-money" name="hoa_hong_dai_li" placeholder="Nhập số tiền..." value="0">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Tổng số tiền hoa hồng môi giới: </label>
                                                                        <input type="text" class="form-control input-money" name="hoa_hong_moi_gioi" placeholder="Nhập số tiền..." value="0">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group ">
                                                                        <label>Loại miễn thường: </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 name="muc_mien_thuong">
                                                                                <option value="">--- Chọn mức miễn thường ---</option>
                                                                                <option value="1">Có khấu trừ</option>
                                                                                <option value="0">Không có khấu trừ</option>
                                                                            </select>
                                                                            <span class="select-icon"><i class="icon-arrow-down22"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group ">
                                                                        <label>Số tiền miễn thường: </label>
                                                                        <div class="form-group-select">
                                                                            <select class="form-control" select2 name="so_tien_mien_thuong">
                                                                                <option value="">--- Chọn số tiền miễn thường ---</option>
                                                                                <option value="500000">500.000 đ/vụ</option>
                                                                                <option value="1500000">1.500.000 đ/vụ</option>
                                                                            </select>
                                                                            <span class="select-icon"><i class="icon-arrow-down22"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Số tiền giảm miễn thường: </label>
                                                                        <input type="text" class="form-control input-money" name="giam_mien_thuong" placeholder="Nhập số tiền..." value="0">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    
                                                                    <div class="form-group">
                                                                        <label>Tên rủi ro: <span class="text-danger">*</span></label>
                                                                        <div class="d-flex align-items-center">
                                                                            <textarea class="form-control" placeholder="Nhập rủi ro..."></textarea>
                                                                            <button type="button" class="btn bg-primary text-nowrap ml-2" data-toggle="modal" data-target="#ds_rui_ro_bao_hiem" style="min-width: 120px">Chọn rủi ro</button>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Điều kiện bảo hiểm: </label>
                                                                        <textarea class="form-control" placeholder="Nhập điều kiện bảo hiểm..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Điều khoản loại trừ: </label>
                                                                        <div class="d-flex align-items-center">
                                                                            <textarea class="form-control" placeholder="Nhập điều kiện bảo hiểm..."></textarea>
                                                                            <button type="button" class="btn bg-primary text-nowrap ml-2" data-toggle="modal" data-target="#ds_dieu_khoan_loai_tru" style="min-width: 120px">Chọn điều khoản</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <b><label>Lịch thanh toán bảo hiểm: </label></b>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <table class="table table-bordered" style="margin: auto;">
                                                                        <colgroup>
                                                                            <col width="70%">
                                                                            <col width="30%">
                                                                        </colgroup>
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th width="70%">Quyền lợi</th>
                                                                                <th class="text-right" width="30%">Phí BH có VAT</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Vật chất xe </td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>Điều khoản bổ sung</td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Số tiền giảm miễn thường</td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>TNDS tự nguyện về người</td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>TNDS tự nguyện về tài sản </td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>Tai nạn lái, phụ xe và người ngồi trên xe </td>
                                                                                <td class="text-right">0</td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>TNDS bắt buộc </td>
                                                                                <td class="text-right" >0</td>
                                                                            </tr>
                                                                            
                                                                            <tr class="bold" style="background-color: #fff;">
                                                                                <td>Tổng phí BH</td>
                                                                                <td><input class="form-control text-right" type="text" disabled="" readonly="" value="0"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="repeater-obj" repeater>
                                                                        <table class="table table-bordered lich-thanh-toan datatable"
                                                                            data-paging="false"
                                                                            data-info="false"
                                                                            data-ordering="false"
                                                                            data-searching="false"
                                                                        >
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th width="10%"><b>Lần</b></th>
                                                                                    <th width="20%"><b>Ngày thanh toán</b></th>
                                                                                    <th width="25%" class="desktop"><b>Phí BH(có VAT)</b></th>
                                                                                    <th width="25%" class="desktop"><b>Thành tiền VAT</b></th>
                                                                                    <th width="25%" class="desktop"><b>Phí BH(chưa VAT) </b></th>
                                                                                    <th width="70px"></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody data-repeater-list="so-lan-thanh-toan">
                                                                                <tr data-repeater-item style="display: none;">
                                                                                    <td><input class="form-control input-number" type="text" value="" ></td>
                                                                                    <td><input class="form-control datepicker input-date" type="text" placeholder="dd/mm/yyyy"></td>
                                                                                    <td><input class="form-control input-money" type="text" placeholder="Nhập..."></td>
                                                                                    <td><input class="form-control input-money" type="text" placeholder="Nhập..."></td>
                                                                                    <td><input class="form-control input-money" type="text" placeholder="Nhập..."></td>
                                                                                    <td><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                                                                </tr>
                                                                                <tr data-repeater-item>
                                                                                    <td><input class="form-control" type="text" value="1"></td>
                                                                                    <td><input class="form-control datepicker input-date" type="text" placeholder="dd/mm/yyyy" value="16/06/2020"></td>
                                                                                    <td><input class="form-control input-money" type="text" placeholder="Nhập..." value="893,400"></td>
                                                                                    <td><input class="form-control input-money" type="text" placeholder="Nhập..." value="79,400"></td>
                                                                                    <td><input class="form-control input-money" type="text" placeholder="Nhập..." value="814,000"></td>
                                                                                    <td><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <div class="border p-1 text-center"><input class="btn bg-success" data-repeater-create type="button" value="+ Thêm"/></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Ghi chú nội bộ:</label>
                                                                        <textarea rows="3" cols="5" class="form-control" placeholder="Nhập ghi chú..."></textarea>
                                                                    </div>
                                                                </div>  
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Ghi chú cho khách hàng:</label>
                                                                        <textarea rows="3" cols="5" class="form-control" placeholder="Nhập ghi chú..."></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Tài liệu đính kèm: <span class="text-danger">*</span></label>
                                                                        <div class="input-group file-caption-main">
                                                                            <button class="btn btn-light btn-file mr-3">
                                                                                <i class="icon-upload7 mr-2"></i> 
                                                                                <span class="hidden-xs">Tải lên tài liệu</span>
                                                                                <input type="file" class="file-input-preview">
                                                                            </button>

                                                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#ds_files">
                                                                                <i class="icon-stack2 mr-2"></i> 
                                                                                <span class="hidden-xs">Danh sách tài liệu</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Form wzard with step validation section end -->
                        </div>
                    </div>



                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>
            
        </div>

        <?php inc('chat-box.php'); ?> 
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/ds_so_hop_dong_xin_cap.php'); ?> 
        <?php inc('modal/ds_nguoi_tham_gia_bao_hiem.php'); ?> 

        <div class="modal-group">
            <?php
                inc('modal/ds_cac_khach_hang.php'); 
                inc('modal/cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>

        <?php inc('modal/ds_rui_ro_bao_hiem.php'); ?> 
        <?php inc('modal/ds_dieu_khoan_loai_tru.php'); ?> 
        <?php inc('modal/ds_files.php'); ?>

    </body>

<?php include_once FOOTER; ?>

