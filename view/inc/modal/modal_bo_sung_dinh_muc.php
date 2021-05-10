<!-- Danh sách files -->
<div id="bo_sung_dinh_muc" class="modal-none fancybox-content-lg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Bổ sung thêm định mức cho đơn bảo hiểm</h5>
                <button type="button" class="close" data-fancybox-close><i class="fal fa-times"></i></button>
            </div>

            <div class="modal-body">
                <div repeater>
                    <table class="table table-bordered datatable"  
                        data-paging="false"
                        data-info="false"
                        data-ordering="false"
                        data-searching="false" >
                        <thead class="thead-light">
                            <tr>
                                <th width="w1p">STT</th>
                                <th>Ngày bổ sung</th>
                                <th>Số tiền lương DT</th>
                                <th>Số tiền CPKT</th>
                                <th>Số tiền CPQL BĐ</th>
                                <th>Diễn giải</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody data-repeater-list="them_dinh_muc">
                            <tr data-repeater-item>
                                <td>1</td>
                                <td><input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy"></td>
                                <td><input type="text" class="form-control input-money" placeholder="0"></td>
                                <td><input type="text" class="form-control input-money" placeholder="0"></td>
                                <td><input type="text" class="form-control input-money" placeholder="0"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="border p-1" style="margin-top: -1px;">
                        <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-primary"><i class="fa fa-save mr-1"></i>Lưu</button>
                </div>
            </div>
        </div>
    </div>
</div>
