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
                    <th class="w20p">Tỉ lệ phân bổ</th>
                    <th class="w1p"></th>
                </tr>
            </thead>
            <tbody data-repeater-list="so-lan-thanh-toan">
                <tr data-repeater-item>
                	<td class="text-center">1</td>
                    <td><?php inc('template/chi_nhanh.php',false); ?></td>
                    <td><input class="form-control input-float text-right" type="text" placeholder="0" value=""></td>
                    <td class="text-center"><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
                </tr>
            </tbody>
        </table>
        <div class="border p-1 text-center"><input class="btn bg-success" data-repeater-create type="button" value="+ Thêm"/></div>
    </div>
</div>

