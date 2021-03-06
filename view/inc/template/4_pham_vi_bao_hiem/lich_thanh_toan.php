<div class="repeater-obj" repeater>
    <table class="table table-bordered lich-thanh-toan datatable" datatable-tab
        data-paging="false"
        data-info="false"
        data-ordering="false"
        data-searching="false" >
        <thead class="thead-light">
            <tr>
                <th class="w10p"><b>Lần</b></th>
                <th class="w20p"><b>Ngày thanh toán</b></th>
                <th class="desktop w25p"><b>Phí BH(có VAT)</b></th>
                <th class="desktop w25p"><b>Thành tiền VAT</b></th>
                <th class="desktop w25p"><b>Phí BH(chưa VAT) </b></th>
                <th class="all w5p text-center"></th>
            </tr>
        </thead>
        <tbody data-repeater-list="so-lan-thanh-toan">
            <tr data-repeater-item>
                <td><input class="form-control input-number" type="text" name="stt" value="1" placeholder="0"></td>
                <td><input class="form-control datepicker input-date" name="date" type="text" placeholder="dd/mm/yyyy" value="16/06/2020"></td>
                <td><input class="form-control input-money" type="text" name="money" placeholder="0" value="893,400"></td>
                <td><input class="form-control input-money" type="text" name="vat" placeholder="0" value="79,400"></td>
                <td><input class="form-control input-money" type="text" name="novat" placeholder="0" value="814,000"></td>
                <td class="text-center"><input data-repeater-delete class="btn bg-danger" type="button" value="- Xóa"/></td>
            </tr>
        </tbody>
    </table>
    <div class="border p-1 text-center"><input class="btn bg-success" data-repeater-create type="button" value="+ Thêm"/></div>
</div>