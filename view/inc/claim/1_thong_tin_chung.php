
<div class="row form-group">
    <label class="col-label col-form-label">Số hồ sơ: <span class="text-danger">*</span></label>
    <div class="col-content col-content-md">
        <div class="input-group">
            <input type="text" class="form-control required" placeholder="Nhập số hồ sơ..." value="BT3412000897.F02">
            <span class="input-group-append">
                <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_so_ho_giam_dinh_xin_cap">Lấy số</button>
            </span>
        </div>
    </div>
</div>

<hr class="border-dashed border-silver mb-3">

<div id="khoi-don-bao-hiem">

    <div class="row form-group">
        <label class="col-label col-form-label">Đơn bảo hiểm số:</label>
        <div class="col-content col-content-md">
            <input type="text" class="form-control" placeholder="Nhập số đơn bảo hiểm..." value="3412005162/F02.BB19/0080992" disabled>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Loại hình: <span class="text-danger">*</span></label>
        <div class="col-content col-content-lg">
            <select class="form-control" select2 disabled>
                <option value="">F02 - Bảo hiểm ô tô</option>
            </select>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Khách hàng (Mã/Tên): <span class="text-danger">*</span></label>
        <div class="col-content col-content-xl">
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

    <div class="row form-group">
        <label class="col-label col-form-label">Số điện thoại: <span class="text-danger">*</span></label>
        <div class="col-content col-content-sm">
            <input type="text" class="form-control input-phone" placeholder="Nhập số điện thoại..." value="0395013333" disabled>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Địa chỉ:</label>
        <div class="col-content col-content-xl">
            <textarea class="form-control" placeholder="Nhập địa chỉ..." disabled>Phúc Thắng, Phúc Yên, Vĩnh Phúc</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Đối tượng tổn thất:</label>
                <div class="col-content col-content-md">
                    <textarea class="form-control" placeholder="Nhập đối tượng tổn thất...">88A27218</textarea>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Mức độ tổn thất:</label>
                <div class="col-content col-content-sm">
                    <select class="form-control" select2>
                        <option value="">--- Chọn ---</option>
                        <option value="">Tổn thất toàn bộ</option>
                        <option value="">Tổn thất bộ phận</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row form-group mb-md-2">
        <label class="col-label col-form-label">Thời hạn bảo hiểm: <span class="text-danger">*</span></label>
        <div class="col-content col-content-lg date-to-date">
            <div class="d-flex">
                <input type="text" class="form-control mr-2 input-time" placeholder="hh:mm">
                <input type="text" class="form-control datepicker input-date" placeholder="Từ: dd/mm/yyyy">
            </div>
            <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
            <div class="d-flex">
                <input type="text" class="form-control mr-2 input-time" placeholder="hh:mm">
                <input type="text" class="form-control datepicker input-date" placeholder="Đến: dd/mm/yyyy">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Ngày tạo đơn:</label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="29/06/2020" />
                </div>
            </div>
        </div>  
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Ngày thanh toán phí:</label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy"/>
                </div>
            </div>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Mức miền thường:</label>
        <div class="col-content col-content-sm">
            <input type="text" class="form-control input-money text-right" placeholder="0">
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Bồi thường:</label>
        <div class="col-content col-content-sm">
            <select select2 class="form-control">
                <option>--- Chọn ---</option>
                <option selected="">Vật chất xe</option>
                <option>Khác</option>
            </select>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Loại tiền: <span class="text-danger">*</span></label>
        <div class="col-content col-content-xs">
            <select select2 class="form-control" disabled>
                <option id="" value="" name="">--- Chọn ---</option>
                <option id="EUR" name="EUR" value="EUR">EUR</option>
                <option id="VND" name="VND" value="VND" selected>VND</option>
                <option id="CHF" name="CHF" value="CHF">>CHF</option>
            </select>
        </div>
    </div>
</div>

<hr class="border-dashed border-silver mb-3">

<div id="khoi-tinh-trang">
    <div class="row form-group">
        <label class="col-label col-form-label">Tình trạng hồ sơ: <span class="text-danger">*</span></label>
        <div class="col-content col-content-sm">
            <select select2 class="form-control" disabled>
                <option>Đang xử lý</option>
                <option>Đã đóng</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="row form-group">
                <label class="col-label col-form-label">
                Ngày tổn thất: 
                    <span class="text-danger">*</span> 
                </label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="06/08/2020">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row form-group">
                <label class="col-label col-form-label">
                    Thời gian tổn thất: 
                    <span class="text-danger">*</span> 
                </label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-time" placeholder="hh:ss" value="09:00">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="row form-group">
                <label class="col-label col-form-label">
                    Ngày TBTT: 
                    <span class="text-danger">*</span> 
                    <a href="#" data-tooltip="tipsy" original-title="Ngày thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                </label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy" value="06/08/2020">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row form-group">
                <label class="col-label col-form-label">
                    Thời gian TBTT: 
                    <span class="text-danger">*</span> 
                    <a href="#" data-tooltip="tipsy" original-title="Thời gian thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
                </label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-time" placeholder="hh:ss" value="09:00">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Chuyên viên bồi thường: <span class="text-danger">*</span></label>
                <div class="col-content col-content-md">
                    <select select2 class="form-control">
                        <option>--- Chọn ---</option>
                        <option selected>Lê Văn A</option>
                        <option>Lê Văn B</option>
                        <option>Lê Văn C</option>
                        <option>........</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Cán bộ nhập HSBT: <span class="text-danger">*</span></label>
                <div class="col-content col-content-md">
                    <select select2 class="form-control">
                        <option>--- Chọn ---</option>
                        <option selected>Lê Văn A</option>
                        <option>Lê Văn B</option>
                        <option>Lê Văn C</option>
                        <option>........</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Đơn vị GĐBT hộ: <span class="text-danger">*</span></label>
                <div class="col-content col-content-md">
                    <select select2 class="form-control">
                        <option>--- Chọn ---</option>
                        <option>Đơn vị A</option>
                        <option>Đơn vị B</option>
                        <option>Đơn vị C</option>
                        <option>........</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Cán bộ GĐBT hộ: <span class="text-danger">*</span></label>
                <div class="col-content col-content-md">
                    <select select2 class="form-control">
                        <option>--- Chọn ---</option>
                        <option>Cán bộ Lê A</option>
                        <option>Cán bộ Lê B</option>
                        <option>Cán bộ Lê C</option>
                        <option>........</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="border-dashed border-silver mb-3">

<div id="khoi-ho-so">
    

    <div class="row form-group">
        <label class="col-label col-form-label">Địa điểm tai nạn: <span class="text-danger">*</span></label>
        <div class="col-content col-content-xl">
            <textarea class="form-control" placeholder="Nhập địa điểm tai nạn...">xuân mai, phúc thắng, phúc yên</textarea>
        </div>
    </div>
    <div class="row form-group">
        <label class="col-label col-form-label">Diễn biến: <span class="text-danger">*</span></label>
        <div class="col-content col-content-xl">
            <textarea class="form-control" placeholder="Nhập địa điểm tai nạn...">va quệt vào chậu cây cạnh góc sân</textarea>
        </div>
    </div>
    <div class="row form-group">
        <label class="col-label col-form-label">Nguyên nhân: <span class="text-danger">*</span></label>
        <div class="col-content col-content-xl">
            <textarea class="form-control" placeholder="Nhập địa điểm tai nạn...">va quệt vào chậu cây cạnh góc sân</textarea>
        </div>
    </div>
    <div class="row form-group">
        <label class="col-label col-form-label">Hậu quả: <span class="text-danger">*</span></label>
        <div class="col-content col-content-xl">
            <textarea class="form-control" placeholder="Nhập địa điểm tai nạn...">xước sát xe</textarea>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Số người chết:</label>
        <div class="col-content col-content-xs">
            <input type="text" class="form-control input-number" placeholder="0">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Thu hồi tài sản: <span class="text-danger">*</span></label>
                <div class="col-content col-content-xs">
                    <div class="button-switch">
                        <input type="checkbox" id="thu_hoi_tai_san" class="switch">
                        <label for="thu_hoi_tai_san" data-off="Không" data-on="Có"></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Kết quả xử lý:</label>
                <div class="col-content col-content-sm">
                    <select class="form-control" select2>
                        <option value="">--- Chọn ---</option>
                        <option value="">Chưa xử lý</option>
                        <option value="">Đã xử lý</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Có giám định tại hiện trường hay không? <span class="text-danger">*</span></label>
        <div class="col-content col-content-xs">
            <div class="button-switch">
                <input type="checkbox" id="giam_dinh_yes_no" class="switch">
                <label for="giam_dinh_yes_no" data-off="Không" data-on="Có"></label>
            </div>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Ước bồi thường:</label>
        <div class="col-content col-content-xs">
            <input type="text" class="form-control input-number text-right" placeholder="0">
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Sự kiện:</label>
        <div class="col-content col-content-xl">
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

<div class="form-box mb-3">
    <p class="text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Lích sử tổn thất</p>
    <hr class="border-dashed border-silver mb-2">
    <div>
        <div id="DataTables_Table_5_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header"></div><div class="datatable-body"><table class="table table-bordered datatable dataTable no-footer dtr-column" data-paging="false" data-info="false" data-ordering="false" data-searching="false" id="DataTables_Table_5" role="grid">
            <thead class="thead-light">
                <tr role="row"><th class="cell sorting_disabled w1p control not-desktop text-center" rowspan="1" colspan="1" style="display: none;"><i class="fa fa-ellipsis-v"></i></th><th data-orderable="false" class="w1p all text-center sorting_disabled" rowspan="1" colspan="1">#</th><th class="sorting_disabled" rowspan="1" colspan="1">Số hồ sơ</th><th class="sorting_disabled" rowspan="1" colspan="1">Số tiền</th><th class="sorting_disabled" rowspan="1" colspan="1">Ngày xảy ra</th><th class="sorting_disabled" rowspan="1" colspan="1">Ngày giải quyết</th></tr>
            </thead>
            <tbody>
                
            <tr role="row" class="odd"><td class="cell w1p control not-desktop text-center" tabindex="0" style="display: none;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr></tbody>
        </table></div><div class="datatable-footer"><div class="datatable-li"></div></div></div>
        <i class="text-danger">* Chưa phát sinh</i>
    </div>
</div>

<!-- <hr class="border-dashed border-silver mb-3">

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
    
 -->