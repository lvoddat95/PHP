<div class="form-group ">
    <?php if (!empty($GLOBALS["loai_mien_thuong_pro"]) && $GLOBALS["loai_mien_thuong_pro"] == 'repeater') : ?>
        <div class="form-group" repeater>
            <table class="table table-bordered datatable" datatable-tab data-paging="false" data-info="false" data-ordering="false" data-searching="false" >
                <thead class="thead-light">
                    <tr>
                        <th class="w1p text-center">STT</th>
                        <th class="w25p">Tên miễn thường</th>
                        <th class="w15p desktop">Tỉ lệ giá trị tổn thất</th>
                        <th class="w25p desktop">Khấu trừ tối thiểu</th>
                        <th class="w1p"></th>
                    </tr>
                </thead>
                <tbody data-repeater-list="lmt">
                    <tr data-repeater-item>
                        <td><b>1.</b></td>
                        <td>
                            <input type="text" class="form-control" name="" placeholder="" value="">
                        </td>
                        <td>
                            <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="">
                        </td>
                        <td>
                            <div class="d-flex">
                                <input type="text" class="form-control input-money" name="so_khung" placeholder="0" value="">
                                <select select2 data-container-css-class="bg-primary">
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
    <?php elseif (!empty($GLOBALS["loai_mien_thuong_bi"]) && $GLOBALS["loai_mien_thuong_bi"] == 'repeater'): ?>
        <div class="form-group" repeater>
            <table class="table table-bordered datatable" datatable-tab data-paging="false" data-info="false" data-ordering="false" data-searching="false" >
                <thead class="thead-light">
                    <tr>
                        <th class="w1p">STT</th>
                        <th class="w25p">Tên miễn thường</th>
                        <th class="w25p desktop">Khấu trừ tối thiểu</th>
                        <th class="w1p"></th>
                    </tr>
                </thead>
                <tbody data-repeater-list="lmt">
                    <tr data-repeater-item>
                        <td><b>1.</b></td>
                        <td>
                            <input type="text" class="form-control" name="" placeholder="" value="">
                        </td>
                        <td>
                            <div class="d-flex">
                                <input type="text" class="form-control input-money" name="so_khung" placeholder="0" value="">
                                <select select2 data-container-css-class="bg-primary">
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