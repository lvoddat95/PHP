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
                                <a href="<?php echo HTTP_PATH; ?>" class="breadcrumb-item"><i class="fad fa-home mr-1"></i>Trang chủ</a>
                                <a href="<?php echo HTTP_PATH .'view/tbh/hop-dong-tbh/'; ?>" class="breadcrumb-item">Tái bảo hiểm</a>
                               <span class="breadcrumb-item active">Hợp đồng tái bảo hiểm</span>
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
                            <h1 class="font-weight-semibold font-size-m"><i class="icon-stack-text mr-2"></i>Danh sách hợp đồng tái bảo hiểm</h1>
                        </div>
                        <div class="p-button">
                            <a href="" class="btn btn-labeled btn-labeled-left mr-2"><b><i class="icon-trash"></i></b> Xóa</a>
                            <a href="<?php echo HTTP_PATH .'view/tbh/hop-dong-tbh/them-moi-hop-dong.php'; ?>" class="btn bg-primary btn-labeled btn-labeled-left mr-1"><b><i class="icon-plus2"></i></b> Thêm mới</a>
                        </div>
                    </div>

                    <!-- Content-block -->
                    <div class="content-block">
                        <div class="card card-search">
                            <div class="card-header header-elements-inline">
                                <p class="card-title font-size-s">
                                    <i style="width: 26px;height: 26px;line-height: 26px;font-size: 12px;" class="icon-search4 d-flex-inline align-items-center justify-content-center rounded-round bg-color mr-2"></i> 
                                    Tìm kiếm
                                </p>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="form-group">
                                            <label class="font-weight-semibold">Số hợp đồng:</label>
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-id-card"></i></span>
                                                </span>
                                                <input type="text" class="form-control" name="" placeholder="Nhập số hợp đồng...">
                                                <input type="hidden" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="form-group">
                                            <label class="font-weight-semibold">Thời hạn hợp đồng từ:</label>
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                                </span>
                                                <input type="text" class="form-control datepicker input-date" name="" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="form-group">
                                            <label class="font-weight-semibold">Đến ngày:</label>
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                                </span>
                                                <input type="text" class="form-control datepicker input-date" name="" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-6">
                                        <div class="form-group ">
                                            <label class="font-weight-semibold">Trạng thái:</label>
                                            <div class="form-group-select">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                    </span>
                                                    <select class="form-control" select2>
                                                        <option value="">--- Chọn ---</option>
                                                        <option value="">Mới thêm</option>
                                                        <option value="">Đang áp dụng</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-4 col-6">
                                        <div class="d-flex justify-content-end ">
                                            <div class="d-inline-block">
                                                <button type="submit" style="letter-spacing: 1px;" class="btn text-uppercase w-100 bg-orange"><i class="icon-search4 mr-2"></i> Tìm kiếm </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <table class="table datatable table-bordered" data-paging="true" data-info="true" data-ordering="true"  data-searching="false" data-page-length="20">
                                    <thead class="thead-light">
                                        <tr>
                                            <th data-orderable="false" class="w1p"><input type="checkbox" id="input-chk-all"></th>
                                            <th class="w10p">Số hợp đồng</td>
                                            <th class="w10p">Ngày hợp đồng</td>
                                            <th>Tiêu đề</td>
                                            <th class="w10p">Tình trạng</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">006/2021</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/02/2021</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ Bảo An Tín 2021-2024</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">005/2021</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/02/2021</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ TNDS Xe cơ giới 2021-2024</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">003/2021</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2021</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ Xe cơ giới 2021</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">004/2021</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2021</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ Healthcare 2021</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10417D21</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">30/12/2020</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2021 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">11036D21</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">30/12/2020</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2021 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">001/2020</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2020</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ Xe cơ giới 2020</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">002/2020</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2020</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ Healthcare 2020</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">11036D20</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">24/12/2019</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2020 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10417D20</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">24/12/2019</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2020 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">001/2019</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2019</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ Xe cơ giới 2019</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">11036D19</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2019</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2019 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10417D19</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2019</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2019 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10417D18</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2018</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2018 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">11036D18</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2018</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2018 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">001/2018</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2018</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ Xe cơ giới 2018</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">11036D17</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2017</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2017 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10417D17</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2017</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2017 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">001/2017</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">27/12/2016</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng TBH tỷ lệ Xe cơ giới 2017</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">MVI 2016</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2016</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng bao Xe cơ giới 2016</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10104H16</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2016</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2016 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10417D16</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">31/12/2015</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2016 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10417D15</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2015</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2015 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">MVI 2015</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2015</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng bao Xe cơ giới 2015</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">10104H15</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2015</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2015 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">MVI 2014</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2014</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng bao Xe cơ giới 2014</a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">RUTH429<</a>/td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2014</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2014 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">DUTK463<</a>/td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2014</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2014 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="odd_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">RTTH429<</a>/td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2013</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2013 - nhóm nghiệp vụ hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                        <tr class="round_row">
                                            <td><input type="checkbox"/></td>
                                            <td><a href="chi-tiet-hop-dong.php">DTTK463<</a>/td>
                                            <td><a href="chi-tiet-hop-dong.php">01/01/2013</a></td>
                                            <td><a href="chi-tiet-hop-dong.php">Hợp đồng nhượng TBH cố định năm 2013 - nhóm nghiệp vụ Phi Hàng hải </a></td>
                                            <td>Đang áp dụng</td>
                                        </tr>
                                    </tbody>

                                </table>
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

