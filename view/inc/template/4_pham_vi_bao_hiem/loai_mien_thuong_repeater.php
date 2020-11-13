<div class="form-group ">
    <?php if (!empty($GLOBALS["loai_mien_thuong"]) && $GLOBALS["loai_mien_thuong"] == 'repeater') : ?>
        <div class="form-group" repeater>
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
                                <option value="">--- Chọn ---/option>
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
                            <div class="d-flex">
                                <input type="text" class="form-control col-content-xs input-money mr-1" name="" placeholder="0" value="">
                                <select select2 data-container-css-class="">
                                    <option value="">triệu đồng / vụ</option>
                                    <option value="">ngày làm việc</option>
                                </select>
                            </div>
                        </td>
                        <td><a href="javascript:;" data-repeater-delete="" class="btn bg-danger"> - Xoá</a></td>
                    </tr>
                </tbody>
            </table>
            <div class="border p-1 text-center"><input class="btn bg-success" data-repeater-create="" type="button" value="+ Thêm"></div>
        </div>
    <?php else: ?>
     
    <?php endif; ?>
</div>