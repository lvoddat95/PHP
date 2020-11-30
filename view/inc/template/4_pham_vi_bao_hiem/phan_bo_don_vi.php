<div class="form-group">
    <label>Phân bổ doanh thu: </label>
    <div class="repeater-obj" repeater>
        <table class="table table-bordered lich-thanh-toan datatable" datatable-tab
            data-paging="false"
            data-info="false"
            data-ordering="false"
            data-searching="false" >
            <thead class="thead-light">
                <tr>
                    <th class="w1p text-center">STT</th>
                    <th class="">Đơn vị phân bổ</th>
                    <th class="">Cán bộ phân bổ</th>
                    <th class="w20p">Tỉ lệ phân bổ</th>
                    <th class="w1p"></th>
                </tr>
            </thead>
            <tbody data-repeater-list="so-lan-thanh-toan">
                <tr data-repeater-item>
                	<td class="text-center">1</td>
                    <td><?php inc('template/chi_nhanh.php',false); ?></td>
                    <td>
                        <select select2>
                            <option value="">--- Chọn ---</option>
                            <option value="">Cán bộ A</option>
                            <option value="">Cán bộ B</option>
                            <option value="">Cán bộ C</option>
                            <option value="">Cán bộ D</option>
                        </select>
                    </td>
                    <td><input class="form-control input-float text-right" type="text" placeholder="0" value=""></td>
                    <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>XÓA</a></td>
                </tr>
            </tbody>
        </table>
        <div class="border p-1" style="margin-top: -1px;">
            <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>THÊM</a>
        </div>
    </div>
</div>

