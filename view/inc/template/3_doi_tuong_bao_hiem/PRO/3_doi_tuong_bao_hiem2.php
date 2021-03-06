<fieldset class="tab-pane" id="step3">
    <div class="row">
        <div class="col-md-3">
            <?php inc('template/3_doi_tuong_bao_hiem/PRO/ma_dia_diem.php'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?php inc('template/3_doi_tuong_bao_hiem/PRO/nhom_rui_ro.php'); ?>
        </div>
        <div class="col-md-4">
            <?php inc('template/3_doi_tuong_bao_hiem/PRO/nganh_nghe_kinh_doanh.php'); ?>
        </div>
    </div>

    <hr class="border-dashed border-silver mb-3">

    <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Upload thông tin danh sách tài sản</p>

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
    
    <div class="form-group" repeater>
        <table class="table table-bordered datatable table-fixed"  
            data-paging="false"
            data-info="false"
            data-ordering="false"
            data-searching="false"
            >
            <thead class="thead-light">
                <tr>
                    <th class="w3p desktop text-center"></th>
                    <th class="w20p">Tên hạng mục tài sản bh</th>
                    <th class="desktop w5p">Số lượng</th>
                    <th class="desktop w10p">Đơn giá</th>
                    <th class="desktop w10p">Giá trị</th>
                    <th class="w10p">Số tiền bảo hiểm</th>
                    <th class="all w5p"></th>
                </tr>
            </thead>
            <tbody data-repeater-list="repeater-list">
                <tr data-repeater-item>
                    <td class="text-center">
                        <b class="item-level">1.</b> 
                    </td>
                    <td><input type="text" class="form-control" name=""></td>
                    <td><input type="text" class="form-control input-number" name=""></td>
                    <td><input type="text" class="form-control input-money" name=""></td>
                    <td><input type="text" class="form-control input-money" name=""></td>
                    <td><input type="text" class="form-control input-money" name=""></td>
                    <td><a href="#" data-repeater-delete class="btn bg-danger"> <i class="icon-trash mr-1"></i> Xoá</a></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered datatable table-fixed" data-paging="false" data-info="false" data-ordering="false" data-searching="false" >
            <thead class="thead-light d-none" >
                <tr>
                    <th class="w23p"></th>
                    <th class="desktop w5p">Tổng số lượng</th>
                    <th class="desktop w10p">Đơn giá</th>
                    <th class="desktop w10p">Tổng giá trị</th>
                    <th class="desktop  ">Tổng số tiền bảo hiểm</th>
                    <th class="all w5p"></th>
                </tr>
            </thead>
            <tbod>
                <tr>
                    <td class="w23p"><b>Tổng cộng: </b></td>
                    <td class="w5p"><input type="text" class="form-control input-number" name="" disabled></td>
                    <td class="w10p"><input type="text" class="form-control input-number" name="" disabled></td>
                    <td class="w10p"><input type="text" class="form-control input-money" name="" disabled></td>
                    <td class="w10p"><input type="text" class="form-control input-money" name="" disabled></td>
                    <td class="w5p"></td>
                </tr>
            </tbody>
        </table>
    </div>

</fieldset>