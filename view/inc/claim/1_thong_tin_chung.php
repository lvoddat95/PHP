<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Tình trạng hồ sơ: <span class="text-danger">*</span></label>
            <select select2 disabled>
                <option>Đang xử lý</option>
                <option>Đã đóng</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Ngày tổn thất: <span class="text-danger">*</span></label>
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="05/08/2020">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Ngày TBTT: 
                <span class="text-danger">*</span> 
                <a href="#" data-tooltip="tipsy" original-title="Ngày thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
            </label>
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="06/08/2020">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Thời gian TBTT: 
                <span class="text-danger">*</span> 
                <a href="#" data-tooltip="tipsy" original-title="Thời gian thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
            </label>
            <input type="text" class="form-control input-time" placeholder="hh:ss" value="09:00">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <?php inc('template/public/chuyen_vien_boi_thuong.php'); ?>
    </div>
    <div class="col-md-6">
        <?php inc('template/public/can_bo_nhap_hsbt.php'); ?>
    </div>
    <div class="col-md-6">
        <?php inc('template/public/don_vi_gdbt_ho.php'); ?>
    </div>
    <div class="col-md-6">
        <?php inc('template/public/can_bo_gdbt_ho.php'); ?>
    </div>
</div>

<hr class="border-dashed border-silver mb-3">

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Số hồ sơ: <span class="text-danger">*</span>
            </label>
            <div class="input-group">
                <input type="text" class="form-control required" placeholder="Nhập số hồ sơ..." value="BT3412000897.F02">
                <span class="input-group-append">
                    <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_so_ho_giam_dinh_xin_cap">Lấy số</button>
                </span>
            </div>
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
    <div class="col-12"></div>
    <div class="col-md-2">
        <div class="form-group">
            <label>Thu hồi tài sản: <span class="text-danger">*</span></label>
            <div class="button-switch">
                <input type="checkbox" id="thu_hoi_tai_san" class="switch">
                <label for="thu_hoi_tai_san" data-off="Không" data-on="Có"></label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Kết quả xử lý:</label>
            <select class="form-control" select2>
                <option value="">--- Chọn ---</option>
                <option value="">Chưa xử lý</option>
                <option value="">Đã xử lý</option>
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Sự kiện: </label>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <input type="text" class="form-control required" nplaceholder="">
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="input-group">
                        <input type="text" class="form-control required" placeholder="">
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
    <div class="col-md-4">
        <div class="form-group">
            <label>Mức độ tổn thất:</label>
            <select class="form-control" select2>
                <option value="">--- Chọn ---</option>
                <option value="">Tổn thất toàn bộ</option>
                <option value="">Tổn thất bộ phận</option>
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <?php inc('template/4_pham_vi_bao_hiem/thoi_han_bao_hiem.php'); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Ngày tạo đơn:</label>
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="29/06/2020" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Mức miền thường:</label>
            <input type="text" class="form-control input-money text-right" placeholder="0">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Ngày thanh toán phí:</label>
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Bồi thường: </label>
            <select select2>
                <option>--- Chọn ---</option>
                <option selected="">Vật chất xe</option>
                <option>Khác</option>
            </select>
        </div>
    </div>

    <div class="col-md-4">
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
    <div class="col-md-4">
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
    <div class="col-md-4">
        <div class="form-group">
            <label>Ngày nhận đủ hồ sơ:</label>
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="01/01/1900">
        </div>
    </div>
</div>

<hr class="border-dashed border-silver mb-3">

<div class="border-group box-shadow form-group mt-2 mb-2">
    <div class="mb-2">
        <span class="text-primary-800 text-uppercase font-weight-bold"><i class="icon-info22 mr-1"></i>Phạm vi bảo hiểm (section)</span>
    </div>
    <div class="">
        <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
            <thead class="thead-light">
                <tr>
                    <th class="w1p text-center" data-orderable="false">#</th>
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
        <span class="text-primary-800 text-uppercase font-weight-bold"><i class="icon-info22 mr-1"></i>Cấu trúc tái bảo hiểm</span>
    </div>
    <div class="">
        <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
            <thead class="thead-light">
                <tr>
                    <th class="w1p text-center" data-orderable="false">#</th>
                    <th class="w40p">Loại hình tái bảo hiểm</th>
                    <th class="w15p">Tỉ lệ tái</th>
                    <th class="w20p">Số tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>
                        <select select2>
                            <option>AON Benfield Asia PTE Ltd</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control input-float text-right" value="20.00" placeholder="0"></td>
                    <td><input type="text" class="form-control input-money text-right" value="0" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>
                        <select select2>
                            <option>HLAP Ltd</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control input-float text-right" value="10.00" placeholder="0"></td>
                    <td><input type="text" class="form-control input-money text-right" value="0" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
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
    


<div class="border-group box-shadow form-group mt-2 mb-2">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <span class="text-primary-800 text-uppercase font-weight-bold"><i class="icon-info22 mr-1"></i>Quá trình giải quyết khiếu nại bồi thường</span>
        <div class="p-button">
            <a href="javascript:;" class="btn bg-danger"><i class="far fa-minus"></i> Xoá</a>
            <a href="javascript:;" class="btn bg-success" data-toggle="modal" data-target="#knbt"><i class="far fa-plus"></i> Thêm</a>
        </div>
    </div>
    <div class="">
        <table class="table datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
            <thead class="thead-light">
                <tr>
                    <th class="w1p text-center" data-orderable="false">#</th>
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
    
