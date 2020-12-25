<div class="form-group" repeater>
    <label for="">Thông tin khẩu trừ:</label>
    <table class="table table-bordered datatable" datatable-tab data-paging="false" data-info="false" data-ordering="false" data-searching="false" >
        <thead class="thead-light">
            <tr>
                <th class="w1p text-center">STT</th>
                <th width="17%" class="desktop">Loại khấu trừ</th>
                <th class="w30p">Tên khấu trừ</th>
                <th width="17%" class="desktop">Tỷ lệ khấu trừ tối thiểu</th>
                <th class="w25p desktop">Khấu trừ tối thiểu</th>
                <th class="w1p"></th>
            </tr>
        </thead>
        <tbody data-repeater-list="loai_khau_tru">
            <tr data-repeater-item>
                <td><b>1.</b></td>
                <td>
                    <select select2>
                        <option value="">--- Chọn ---</option>
                        <option value="">Có khấu trừ</option>
                        <option value="">Không có khấu trừ</option>
                    </select>
                </td>
                <td>
                    <input type="text" class="form-control" name="" placeholder="" value="">
                </td>
                <td>
                    <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="">
                </td>
                <td>
                    <div class="d-flex flex-wrap">
                        <div style="width: 120px;" class="mr-1">
                            <input type="text" class="form-control input-money " name="" placeholder="0" value="">
                        </div>
                        <div style="width: calc(100% - 130px);">
                            <select select2 data-container-css-class="">
                                <option value="">triệu đồng / vụ</option>
                                <option value="">ngày làm việc</option>
                            </select>
                        </div>
                    </div>
                </td>
                <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
            </tr>
        </tbody>
    </table>
    <div class="border p-1" style="margin-top: -1px;">
        <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
    </div>
</div>
