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
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Ngày TBTT: 
                <span class="text-danger">*</span> 
                <a href="#" data-tooltip="tipsy" original-title="Ngày thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
            </label>
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Thời gian TBTT: 
                <span class="text-danger">*</span> 
                <a href="#" data-tooltip="tipsy" original-title="Thời gian thông báo tổn thất" data-position="top"><i class="icon-info22"></i></a>
            </label>
            <input type="text" class="form-control input-time" placeholder="hh:ss">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <?php inc('template/public/chuyen_vien_boi_thuong.php'); ?>
    </div>
    <div class="col-md-3">
        <?php inc('template/public/can_bo_nhap_hsbt.php'); ?>
    </div>
    <div class="col-md-3">
        <?php inc('template/public/don_vi_gdbt_ho.php'); ?>
    </div>
    <div class="col-md-3">
        <?php inc('template/public/can_bo_gdbt_ho.php'); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group ">
            <label>Số hồ sơ: <span class="text-danger">*</span></label>
            <div class="input-group">
                <input type="text" class="form-control required" placeholder="Nhập số hồ sơ...">
                <span class="input-group-append">
                    <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_so_ho_giam_dinh_xin_cap">Lấy số</button>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Địa điểm tai nạn: <span class="text-danger">*</span></label>
            <textarea class="form-control" placeholder="Nhập địa điểm tai nạn..."></textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Diễn biến: <span class="text-danger">*</span></label>
            <textarea class="form-control" placeholder="Nhập diễn biến..."></textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Nguyên nhân: <span class="text-danger">*</span></label>
            <textarea class="form-control" placeholder="Nhập nguyên nhân..."></textarea>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Hậu quả: <span class="text-danger">*</span></label>
            <textarea class="form-control" placeholder="Nhập hậu quả..."></textarea>
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
    <div class="col-md-2">
        <div class="form-group">
            <label>Thu hồi tài sản: <span class="text-danger">*</span></label>
            <div class="button-switch">
                <input type="checkbox" id="thu_hoi_tai_san" class="switch">
                <label for="thu_hoi_tai_san" data-off="Không" data-on="Có"></label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Sự kiện: </label>
            <div class="input-group">
                <input style="max-width: 180px;" type="text" class="form-control" placeholder="" value="">
                <input type="text" class="form-control" placeholder="" value="">
                <span class="input-group-append">
                    <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang"><i class="far fa-book mr-1"></i>Chọn</button>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Đơn bảo hiểm số:</label>
            <input type="text" class="form-control" placeholder="Nhập số đơn bảo hiểm...">
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
            <div class="input-group">
                <input style="max-width: 180px;" type="text" class="form-control required" name="ma_kh2" placeholder="Nhập mã khách hàng..." value="">
                <input type="text" class="form-control required" name="ten_kh2" placeholder="Nhập tên khách hàng..." value="">
                <span class="input-group-append">
                    <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang">Chọn từ danh mục <i class="fad fa-user-plus ml-2"></i></button>
                </span>
            </div>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Số điện thoại: <span class="text-danger">*</span></label>
            <input type="text" class="form-control input-phone" placeholder="Nhập số điện thoại...">
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Địa chỉ: </label>
            <textarea class="form-control" placeholder="Nhập địa chỉ..."></textarea>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Đối tượng tổn thất: </label>
            <textarea class="form-control" placeholder="Nhập đối tượng tổn thất..."></textarea>
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
        <div class="form-group">
            <label>Thời hạn bảo hiểm: <span class="text-danger">*</span></label>
            <div class="row">
                <div class="col-md-6 d-flex">
                    <span class="text-right mr-1" style="width: 100px;">Từ</span>
                    <input type="time" class="form-control mr-2 input-time" placeholder="hh:mm" />
                    <input type="text" class="form-control datepicker input-date hasDatepicker" placeholder="dd/mm/yyyy" />
                </div>
                <div class="col-md-6 d-flex">
                    <span class="text-right mr-1" style="width: 100px;">Đến</span>
                    <input type="time" class="form-control mr-2 input-time" placeholder="hh:mm" />
                    <input type="text" class="form-control datepicker input-date hasDatepicker" placeholder="dd/mm/yyyy" />
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Ngày tạo đơn:</label>
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
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

    <div class="col-md-4">
        <div class="form-group">
            <label>Loại tiền: <span class="text-danger">*</span></label>
            <select select2 disabled="">
                <option id="" value="" name="">--- Chọn ---</option>
                <option id="EUR" name="EUR" value="EUR">EUR</option>
                <option id="VND" name="VND" value="VND">VND</option>
                <option id="CHF" name="CHF" value="CHF">>CHF</option>
            </select>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Ngày nhận đủ hồ sơ:</label>
            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
        </div>
    </div>
</div>