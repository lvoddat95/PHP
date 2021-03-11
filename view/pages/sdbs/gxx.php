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
                            <i class="far fa-align-left"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="<?php echo HTTP_PATH .'view/pages/danh-sach-don.php'; ?>" class="breadcrumb-item"><i class="fa fa-reply mr-1"></i> G01 - Bảo hiểm sức khỏe toàn diện</a>
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
                            <p class="font-weight-semibold font-size-m mb-0"><i class="icon-pen2 mr-2"></i>Sửa đổi bổ sung đơn bảo hiểm</p>
                            <span class="text-muted d-block font-size-xs">Nhập thông tin theo từng bước. Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                        </div>
                        <div class="p-button">
                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                            <a href="javascript:;" class="btn mr-1"><i class="far fa-copy mr-1"></i> Lưu & Copy</a>
                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Form wzard with step validation section start -->
                                <section id="validation" class="input-don">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="wizard">

                                                            <?php inc('template/steps.php'); ?>

                                                            <form action="#" class="form-validation clearfix">
                                                                <div class="tab-content">
                                                                    <!-- Bước 1 -->
                                                                    <fieldset  class="tab-pane active show" id="step1">

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label>Loại sửa đổi: <span class="text-danger">*</span></label>
                                                                                    <select class="form-control required" select2 name="">
                                                                                        <option>--- Chọn ---</option>
                                                                                        <optio>Giảm phí do điểu khoản No Claim Bonus</option>
                                                                                        <optio>Thay đổi phạm vi, thời hạn</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label>Hình thức sửa đổi: <span class="text-danger">*</span></label>
                                                                                    <select class="form-control required" select2 name="" onchange="sua_doi_bo_sung_gxx(this);">
                                                                                        <option>--- Chọn ---</option>
                                                                                        <option value="DON_GIAN">1. Chỉ thay đổi các thông tin thông thường</option>
                                                                                        <option value="TANG_PHI_BH">2. Tăng phí BH (Không thay đổi giá trị BH)</option>
                                                                                        <option value="GIAM_PHI_BH">3. Giảm phí BH (Không thay đổi giá trị BH)</option>
                                                                                        <option value="TANG_GIA_TRI_BH">4. Tăng giá trị BH (Tăng phí BH)</option>
                                                                                        <option value="GIAM_GIA_TRI_BH">5. Giảm giá trị BH (Giảm phí BH)</option>
                                                                                        <option value="THAY_DOI_NGUOI_DUOC_BH" >8. Thay đổi người được bảo hiểm</option>
                                                                                        <option value="THAY_DOI_DAI_LY_MOI_GIOI" >7. Thay đổi đại lý, môi giới</option>
                                                                                        <option value="THAY_DOI_CAU_TRUC_TBH" >6. Thay đổi cấu trúc TBH</option>
                                                                                        <option value="THAY_DOI_THOI_HAN_BH" >9. Thay đổi thời hạn bảo hiểm</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="form-group">
                                                                                    <label>Lí do sửa đổi: <span class="text-danger">*</span></label>
                                                                                    <textarea class="form-control" placeholder="Nhập nội dung..."></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/kenh_khai_thac.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/hinh_thuc_khai_thac.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/so_don_bao_hiem.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group ">
                                                                                    <label>Đơn tái tục: <a href="#" data-tooltip="tipsy" original-title="Chọn <b style='color: red;'>“Có”</b> nếu là đơn tái tục." data-position="top"><i class="icon-info22"></i></a>
                                                                                    </label>
                                                                                    <div class="d-flex">
                                                                                        <p class="switch-title mr-3">Có phải đơn tái tục ?</p>
                                                                                        <div class="button-switch">
                                                                                            <input type="checkbox" id="tai_bao_hiem_sw" class="switch required" name="tai_bao_hiem_sw">
                                                                                            <label for="tai_bao_hiem_sw" data-off="Không" data-on="Có"></label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/so_tham_chieu.php'); ?> 
                                                                            </div>
                                                                            
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/so_ban_chao.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/so_hd_nhan_tai.php'); ?> 
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/nguoi_duoc_bao_hiem.php'); ?> 
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/nguoi_thanh_toan_bao_hiem.php'); ?> 
                                                                            </div>
                                                                            
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/can_bo_khai_thac.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/can_bo_cap_don.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/1_thong_tin_chung/ngay_cap.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/loai_tien.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/1_thong_tin_chung/ti_gia_thuc_te.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/1_thong_tin_chung/tai_bao_hiem.php'); ?>
                                                                                <?php inc('template/1_thong_tin_chung/dong_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>

                                                                    <!-- Step 2 -->
                                                                    <?php inc('template/2_trung_gian_bao_hiem/2_trung_gian_bao_hiem.php'); ?>
                                                                    
                                                                    <!-- Step 3 -->
                                                                    <fieldset class="tab-pane" id="step3">

                                                                        <div class="form-group">
                                                                            <label class="font-weight-semibold">Tìm kiếm theo:</label>
                                                                            <div class="">
                                                                                <div class="form-check form-check-inline m-0 mr-4">
                                                                                    <input type="radio" id="rd01" class="mr-1" name="id01" checked="" value="hoten" onchange="tim_kiem_gxx(this)">
                                                                                    <label for="rd01" class="form-check-label">Họ tên</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline m-0 flex-grow-1">
                                                                                    <input type="radio" id="rd02" class="mr-1" name="id01" value="namsinh" onchange="tim_kiem_gxx(this)">
                                                                                    <label for="rd02" class="form-check-label ml-1">Năm sinh</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3" id="hoten">
                                                                                <div class="form-group">
                                                                                    <label class="font-weight-semibold">Tên người được BH:</label>
                                                                                    <input type="text" class="form-control" name="" placeholder="Nhập tên...">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2" id="namsinh" style="display: none;">
                                                                                <div class="form-group">
                                                                                    <label class="font-weight-semibold">Năm sinh:</label>
                                                                                    <input type="text" class="form-control input-date datepicker" name="" placeholder="dd/mm/yyyy">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group">
                                                                                    <label class="font-weight-semibold">&nbsp;</label>
                                                                                    <div>
                                                                                        <button type="submit" style="letter-spacing: 1px;" class="btn text-uppercase bg-orange"><i class="icon-search4 mr-1"></i> Tìm kiếm </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Upload thông tin danh sách người tham gia bảo hiểm</p>

                                                                        <div class="row mb-3 align-items-center">
                                                                            <div class="col-sm-4">
                                                                                <button class="btn btn-light btn-file mr-3">
                                                                                    <i class="far fa-upload mr-2"></i> 
                                                                                    <span class="hidden-xs">Import file</span>
                                                                                    <input type="file" class="file-input-preview">
                                                                                </button>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <p class="mb-0 d-flex justify-content-end align-items-center"><span class="text-danger">Nhấn vào browser để upload dữ liệu từ excel.</span> <a href="" download="" class="text-primary">(Nhấn vào đây để tải file mẫu)</a></p>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <hr class="border-dashed border-silver mb-3">

                                                                        <div class="form-group mb-3" >
                                                                            <table class="table table-bordered table-hover datatable child-row-sm" data-control-right="true" data-paging="true" data-info="false" data-ordering="false" data-searching="false">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th rowspan="2" class="cell control not-desktop text-center">
                                                                                            <i class="fa fa-ellipsis-v"></i>
                                                                                        </th>
                                                                                        <th rowspan="2" class="w1p text-center"><input type="checkbox" id="input-chk-all"></th>
                                                                                        <th rowspan="2" class="w15p"><span class="text-danger">*</span> Người được BH</th>
                                                                                        <th rowspan="2" class="none"><span class="text-danger">*</span> Ngày sinh</th>
                                                                                        <th rowspan="2" class="none">Địa chỉ</th>
                                                                                        <th rowspan="2" class="none">Email/Số điện thoại</th>
                                                                                        <th rowspan="2" class="w5p none"><span class="text-danger">*</span> Tuổi</th>

                                                                                        <th rowspan="2" class="none"><span class="text-danger">*</span> Hiệu lực: Từ ngày</th>
                                                                                        <th rowspan="2" class="none"><span class="text-danger">*</span> Hiệu lực: Đến ngày</th>
               
                                                                                        <th colspan="3" class="text-center desktop">Phạm vi A</th>
                                                                                        <th colspan="3" class="text-center desktop">Phạm vi B</th>
                                                                                        <th colspan="3" class="text-center desktop">Phạm vi C</th>

                                                                                        <th rowspan="2" class="w10p not-mobile text-center">Tổng phí</th>
                                                                                        <th rowspan="2" class="all w1p"></th>
                                                                                        <th rowspan="2" class="none">Tỉ lệ phí chuẩn / Phí chuẩn</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="text-center desktop"><span class="text-danger">*</span> Số tiền BH A</th>
                                                                                        <th class="w5p text-center "><span class="text-danger">*</span> TL phí A</th>
                                                                                        <th class="text-center desktop">Phí A</th>

                                                                                        <th class="text-center desktop"><span class="text-danger">*</span> Số tiền BH B</th>
                                                                                        <th class="w5p text-center "><span class="text-danger">*</span> TL phí B</th>
                                                                                        <th class="text-center desktop">Phí B</th>

                                                                                        <th class="text-center desktop"><span class="text-danger">*</span> Số tiền BH C</th>
                                                                                        <th class="w5p text-center "><span class="text-danger">*</span> TL phí C</th>
                                                                                        <th class="text-center desktop">Phí C</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody >
                                                                                    <tr >
                                                                                        <td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
                                                                                        <td class="text-center"><b class="item-level">1.</b> <input type="checkbox" class="input-chk"></td>
                                                                                        <td><input type="text" class="form-control" value="TRẦN BÉ NHỎ"></td>
                                                                                        <td><input class="form-control col-content-xs input-date datepicker" placeholder="dd/mm/yyyy" type="text" value="20/12/1991"></td>
                                                                                        <td><input class="form-control col-content-lg" type="text" value="53/5 Trần Hưng Đạo, P. Mỹ Thạnh, Tp. Long Xuyên, An Giang"></td>
                                                                                        <td><input class="form-control col-content-lg" type="text" value=""></td>
                                                                                        <td><input class="form-control col-content-xs" type="text" disabled value="30"></td>

                                                                                        <td><input class="form-control col-content-xs input-date datepicker" placeholder="dd/mm/yyyy" type="text" value="04/03/2021"></td>
                                                                                        <td><input class="form-control col-content-xs input-date datepicker" placeholder="dd/mm/yyyy" type="text" value="04/03/2022"></td>

                                                                                        <td align="center"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="686,666,666"></td>
                                                                                        <td align="center"><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text" disabled value="0.95"></td>
                                                                                        <td align="center"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="6,523,333"></td>

                                                                                        <td align="center"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="686,666,666"></td>
                                                                                        <td align="center"><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text" disabled value="0.95"></td>
                                                                                        <td align="center"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="6,523,333"></td>

                                                                                        <td align="center"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="686,666,666"></td>
                                                                                        <td align="center"><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text" disabled value="0.95"></td>
                                                                                        <td align="center"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="6,523,333"></td>
                                                                                      

                                                                                        <td align="center">19,570,000</td>

                                                                                        <td class="text-center">
                                                                                            <div class="list-icons">
                                                                                                <div class="dropdown">
                                                                                                    <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-gear"></i></a>
                                                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                                                        <a href="#" class="dropdown-item" onclick="fancybox_modal(this,'#gxx_sua_doi_bo_sung')"> <i class="icon-trash mr-1"></i> Sửa đổi bổ sung xoá</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <table class="table table-bordered">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th colspan="2" class="text-center">A</th>
                                                                                                        <th colspan="2" class="text-center">B</th>
                                                                                                        <th colspan="2" class="text-center">C</th>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th class="text-center w10p"><span class="text-danger">*</span> TL phí chuẩn A</th>
                                                                                                        <th class="text-center">Phí chuẩn A</th>
                                                                                                        <th class="text-center w10p"><span class="text-danger">*</span> TL phí chuẩn B</th>
                                                                                                        <th class="text-center">Phí chuẩn B</th>
                                                                                                        <th class="text-center w10p"><span class="text-danger">*</span> TL phí chuẩn C</th>
                                                                                                        <th class="text-center">Phí chuẩn C</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text"></td>
                                                                                                        <td><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" ></td>

                                                                                                        <td><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text"></td>
                                                                                                        <td><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" ></td>

                                                                                                        <td><input class="form-control col-content-sm input-float text-right" placeholder="0.0" type="text"></td>
                                                                                                        <td><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" ></td>
                                                                                                    </tr>
                                                                                                </tbody>    
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>

                                                                                    
                                                                                    
                                                                                </tbody>
                                                                            </table>

                                                                        </div>

                                                                        <div class="mb-3 row justify-content-end">
                                                                            <div class="col-md-4">
                                                                                <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                                                    <thead class="thead-light">
                                                                                        <tr>
                                                                                            <th class="w30p all"></th>
                                                                                            <th class="desktop text-right">Số tiền bảo hiểm</th>
                                                                                            <th class="desktop text-right">Phí bảo hiểm</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Phạm vi A</td>
                                                                                            <td align="right"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="686,666,666"></td>
                                                                                            <td align="right"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="6,523,333"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Phạm vi B</td>
                                                                                            <td align="right"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="686,666,666"></td>
                                                                                            <td align="right"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="6,523,333"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Phạm vi C</td>
                                                                                            <td align="right"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="686,666,666"></td>
                                                                                            <td align="right"><input class="form-control col-content-sm input-money text-right" placeholder="0" type="text" value="6,523,333"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <b><i class="far fa-sigma mr-1"></i>Tổng cộng</b>
                                                                                                <b class="small">(A+B+C)</b>
                                                                                            </td>
                                                                                            <td align="right"><b>2,059,999,998</b></td>
                                                                                            <td align="right"><b>19,569,999</b></td>
                                                                                        </tr>
                                                                                        
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Số người được bảo hiểm: <span class="text-danger">*</span></label>
                                                                            <div class="col-content-sm">
                                                                                <input type="text" class="form-control text-right" placeholder="0">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <?php inc('template/3_doi_tuong_bao_hiem/PER/chuong_trinh_bh.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <?php inc('template/3_doi_tuong_bao_hiem/PER/goi_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </fieldset>
                                                                    
                                                                    <!-- Step 4 -->
                                                                    <fieldset class="tab-pane" id="step4">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
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
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control " select2 name="dinh_muc" >
                                                                                                            <option>Bảo hiểm sức khỏe</option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>2. Phạm vi B (Chết và thương tật thân thể do tai nạn)</td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control " select2 name="dinh_muc" >
                                                                                                            <option>Bảo hiểm sức khỏe</option>                                                   
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>3. Phạm vi C (Ốm đau, bệnh tật, thai sản phải nằm viện hoặc phẫu thuật)</td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" value="10"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" value="0"></td>
                                                                                                    <td><input class="form-control text-right input-float" type="text" placeholder="0.0" value="10.0"></td>
                                                                                                    <td><input class="form-control text-right input-money" type="text" placeholder="0"></td>
                                                                                                    <td>
                                                                                                        <select class="form-control " select2 name="dinh_muc" >
                                                                                                            <option>Bảo hiểm sức khỏe</option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th><b>Tổng cộng: </b></th>
                                                                                                    <th align="right"><input class="form-control text-right" type="text" disabled readonly value="0"></th>
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
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label>Tổng phí chuẩn: </label>
                                                                                    <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="">
                                                                                </div>                                                                            
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label>Tỉ lệ giảm phí: </label>
                                                                                    <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="">
                                                                                </div>                                                                            
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-group ">
                                                                                    <label>Đơn trên phân cấp: 
                                                                                        <a href="#" data-tooltip="tipsy" original-title="<b style='color: red;'>“Có”</b> nếu là đơn trên phân cấp." data-position="top"><i class="icon-info22"></i></a>
                                                                                    </label>
                                                                                    <div class="button-switch">
                                                                                        <input type="checkbox" id="don_tren_phan_cap" checked class="switch required" name="don_tren_phan_cap" disabled>
                                                                                        <label for="don_tren_phan_cap" data-off="Không" data-on="Có"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_dai_li.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tong_tien_hoa_hong_moi_gioi.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dieu_kien_bao_hiem.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/dieu_khoan_loai_tru.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/quy_tac_bao_hiem.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/PRO/trach_nhiem_dong_bao_hiem.php'); ?>
                                                                            </div>  
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/phan_bo_don_vi.php'); ?>
                                                                            </div>  
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thong_tin_ve_thoi_han_thanh_toan.php'); ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/thanh_toan_tai_ngan_hang.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="">Thanh toán bảo hiểm: </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <table class="table table-bordered" style="margin: auto;">
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th class="w65p">Quyền lợi</th>
                                                                                                <th class="w40p text-right">Phí BH có VAT</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Mức trách nhiệm của VNI</td>
                                                                                                <td class="text-right"><input class="form-control input-money text-right" type="text" value="0"></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>1. Phạm vi A (Chết do ốm đau, bệnh tật, thai sản)</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>2. Phạm vi B (Chết và thương tật thân thể do tai nạn)</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>3. Phạm vi C (Ốm đau, bệnh tật, thai sản phải nằm viện hoặc phẫu thuật)</td>
                                                                                                <td class="text-right">0</td>
                                                                                            </tr>
                                                                                            
                                                                                            <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                                <td>Tổng phí BH (chưa VAT)</td>
                                                                                                <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                            </tr>
                                                                                            <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                                <td>Tổng VAT</td>
                                                                                                <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                            </tr>
                                                                                            <tr class="font-weight-bold" style="background-color: #fff;">
                                                                                                <td>Tổng phí BH (có VAT)</td>
                                                                                                <td><input class="form-control text-right" type="text" readonly value="0"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <?php inc('template/4_pham_vi_bao_hiem/lich_thanh_toan.php'); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/ghi_chu_noi_bo.php'); ?>
                                                                            </div>  
                                                                            <div class="col-md-6">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/ghi_chu_cho_khach_hang.php'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <?php inc('template/4_pham_vi_bao_hiem/tai_lieu_dinh_kem.php'); ?>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </form>

                                                            <?php inc('template/actions.php'); ?>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Form wzard with step validation section end -->
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
        <?php inc('quick-action.php'); ?> 

        <?php inc('modal/modal_ds_so_hop_dong_xin_cap.php'); ?> 
        <?php inc('modal/modal_gxx_sua_doi_bo_sung.php'); ?> 
        <?php inc('modal/modal_ds_nguoi_tham_gia_bao_hiem.php'); ?> 

        <div class="modal-group">
            <?php
                inc('modal/modal_ds_cac_khach_hang.php'); 
                inc('modal/modal_cap_nhap_thong_tin_khach_hang.php'); 
            ?>
        </div>

        <?php inc('modal/modal_ds_rui_ro_bao_hiem.php'); ?> 
        <?php inc('modal/modal_ds_dieu_khoan_loai_tru.php'); ?> 
        <?php inc('modal/modal_dieu_khoan_sua_doi_bo_sung.php'); ?> 
        <?php inc('modal/modal_ds_files.php'); ?>
        

    </body>

<?php include_once FOOTER; ?>