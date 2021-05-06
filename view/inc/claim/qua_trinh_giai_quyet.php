<div>
    <div class="row form-group">
        <label class="col-label col-form-label">Hình thức:</label>
        <div class="col-content col-content-sm">
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

    <div class="row form-group">
        <label class="col-label col-form-label">Tháng kế toán:</label>
        <div class="col-content col-content-sm">
            <input type="text" class="form-control " disabled="" value="8/2020">
        </div>
    </div>

    <div class="row form-group">
        <label class="col-label col-form-label">Chuyên viên bồi thường: <span class="text-danger">*</span></label>
        <div class="col-content col-content-md">
            <select select2 class="form-control">
                <option>--- Chọn ---</option>
                <option>Lê Văn A</option>
                <option>Lê Văn B</option>
                <option>Lê Văn C</option>
                <option>........</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Ngày giám định:</label>
                <div class="col-content col-content-md">
                    <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="05/08/2020" id="" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Ngày BC sơ bộ:</label>
                <div class="col-content col-content-md">
                    <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="06/08/2020" id="" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Ngày BCGĐ giữa kỳ</label>
                <div class="col-content col-content-md">
                    <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="" id="" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Ngày BC cuối cùng:</label>
                <div class="col-content col-content-md">
                    <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="" id="" />
                </div>
            </div>
        </div>
    </div>

    <div class="card border-1 border-dashed border-silver shadow-0 rounded-0 mb-3">
        <div class="card-header header-elements-inline pl-0 pr-0" data-action="collapse">
            <p class="card-title text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Thông tin tổn thất (Nhấn để xem chi tiết)</p>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item rotate-180" data-action="collapse" style="pointer-events: none;"></a>
                    <a class="list-icons-item" data-fullscreen="remove"></a>
                </div>
            </div>
        </div>
        <hr class="border-dashed border-silver mx-2 mt-0 mb-1" />
        <div class="card-body">
            <div class="card-block">
                <div class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Địa điểm tai nạn:
                                </label>
                                <textarea class="form-control" placeholder="Nhập địa điểm tai nạn..." disabled>xuân mai, phúc thắng, phúc yên</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Diễn biến:</label>
                                <textarea class="form-control" placeholder="Nhập diễn biến..." disabled>va quệt vào chậu cây cạnh góc sân</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nguyên nhân:</label>
                                <textarea class="form-control" placeholder="Nhập nguyên nhân..." disabled>va quệt vào chậu cây cạnh góc sân</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hậu quả:</label>
                                <textarea class="form-control" placeholder="Nhập hậu quả..." disabled>xước sát xe</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Đơn bảo hiểm số:</label>
                                <input type="text" class="form-control" placeholder="Nhập số đơn bảo hiểm..." value="3412005162/F02.BB19/0080992" disabled>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Loại hình:</label>
                                <?php inc('template/loai_hinh_disabled.php'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Khách hàng (Mã/Tên):</label>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <input type="text" class="form-control required" nplaceholder="Nhập mã khách hàng..." value="34100024379" disabled>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control required" placeholder="Nhập tên khách hàng..." value="Đặng Thanh Tùng" disabled>
                                            <span class="input-group-append">
                                                <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#ds_cac_khach_hang" disabled>Chọn từ danh mục <i class="fad fa-user-plus ml-1"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Số điện thoại:</label>
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
                                <textarea class="form-control" placeholder="Nhập đối tượng tổn thất..." disabled>88A27218</textarea>
                            </div>
                        </div>

                        <div class="col-12"></div>

                        <div class="col-md-6">
                            <div class="row form-group mb-md-2">
                                <label class="col-label col-form-label">Thời hạn bảo hiểm:</label>
                                <div class="col-content col-content-md date-to-date">
                                    <div class="d-flex">
                                        <input type="text" class="form-control datepicker input-date" disabled placeholder="Từ: ..." value="09/10/2019" id="dp1620200833689" />
                                    </div>
                                    <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
                                    <div class="d-flex">
                                        <input type="text" class="form-control datepicker input-date" disabled placeholder="Đến: ..." value="08/10/2020" id="dp1620200833690" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Loại tiền: <span class="text-danger">*</span></label>
                <div class="col-content col-content-sm">
                    <select class="form-control" select2="" disabled>
                        <option value="">--- Chọn ---</option>
                        <option selected="selected" value="VND" data-select2-id="6">VND</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="CHF">CHF</option>
                        <option value="CNY(RMB)">CNY</option>
                        <option value="GBP">GBP</option>
                        <option value="JPY">JPY</option>
                        <option value="RM(MYR)">RM(MYR)</option>
                        <option value="NGOAITE">Tất cả ngoại tệ </option>
                        <option value="AUD">AUD</option>
                        <option value="SGD">SGD</option>
                        <option value="CAD">CAD</option>
                        <option value="KRW">KRW</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Tỷ giá: <span class="text-danger">*</span></label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-number " placeholder="0" value="" />
                </div>
            </div>
        </div>
    </div>


    

    <hr class="border-dashed border-silver mb-3">

    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Chi tiết về người:</label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-number " placeholder="0" value="" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-label col-form-label">Chi tiết về người:</label>
                <div class="col-content col-content-sm">
                    <input type="text" class="form-control input-number " placeholder="0" value="" />
                </div>
            </div>
        </div>
    </div>

    <div class="card border-1 border-dashed border-silver shadow-0 rounded-0 mb-3">
        <div class="card-header header-elements-inline pl-0 pr-0" data-action="collapse">
            <p class="card-title text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Thông tin phí giám định</p>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item rotate-180" data-action="collapse" style="pointer-events: none;"></a>
                    <a class="list-icons-item" data-fullscreen="remove"></a>
                </div>
            </div>
        </div>
        <hr class="border-dashed border-silver mx-2 mt-0 mb-1" />
        <div class="card-body">
            <div class="card-block">
       
                <div class="row form-group">
                    <label class="col-label col-form-label">Đơn vị giám định:</label>
                    <div class="col-content col-content-md">
                        <input type="text" class="form-control" placeholder="" value="" />
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-label col-form-label">Cán bộ giám định:</label>
                    <div class="col-content col-content-md">
                        <input type="text" class="form-control" placeholder="" value="" />
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-label col-form-label">Số tiền:</label>
                    <div class="col-content col-content-sm">
                        <input type="text" class="form-control input-money " placeholder="0" value="100,000,000" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-1 border-dashed border-silver shadow-0 rounded-0 mb-3">
        <div class="card-header header-elements-inline pl-0 pr-0" data-action="collapse">
            <p class="card-title text-primary-800 font-weight-bold"><i class="icon-info22 mr-1"></i>Thông tin phí giám định cho bên thứ 3</p>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item rotate-180" data-action="collapse" style="pointer-events: none;"></a>
                    <a class="list-icons-item" data-fullscreen="remove"></a>
                </div>
            </div>
        </div>
        <hr class="border-dashed border-silver mx-2 mt-0 mb-1" />
        <div class="card-body">
            <div class="card-block">
       
                <div class="row form-group">
                    <label class="col-label col-form-label">Đơn vị giám định:</label>
                    <div class="col-content col-content-md">
                        <input type="text" class="form-control" placeholder="" value="" />
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-label col-form-label">Cán bộ giám định:</label>
                    <div class="col-content col-content-md">
                        <input type="text" class="form-control" placeholder="" value="" />
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-label col-form-label">Số tiền:</label>
                    <div class="col-content col-content-sm">
                        <input type="text" class="form-control input-money " placeholder="0" value="100,000,000" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Tài liệu đính kèm: <span class="text-danger">*</span></label>
                <div class="p-button">
                    <button type="button" class="btn btn-light btn-file mr-3">
                        <i class="far fa-upload mr-1"></i>
                        <span class="hidden-xs">Tải lên tài liệu</span>
                        <input type="file" name="FileUpload" class="file-input-preview" multiple="">
                    </button>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#ds_files">
                        <i class="far fa-folder-open mr-1"></i>
                        <span class="hidden-xs">Danh sách tài liệu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
  
</div>
