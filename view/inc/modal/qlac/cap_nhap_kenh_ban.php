<!-- Danh sách files -->
<div id="cap_nhap_kenh_ban" class="modal-none fancybox-content-xl">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Danh sách kênh bán</h5>
                <button type="button" class="close" data-fancybox-close><i class="fal fa-times"></i></button>
            </div>

            <div class="modal-body">
                <div repeater>
                    <table class="table table-bordered lich-thanh-toan datatable" datatable-tab
                        data-paging="false"
                        data-info="false"
                        data-ordering="false"
                        data-searching="false" >
                        <thead class="thead-light">
                            <tr>
                                <th class="w1p text-center">#</th>
                                <th class="w20p">Kênh bán</th>
                                <th class="desktop w20p">Chi tiết kênh bán</th>
                                <th class="desktop w10p text-center">Từ quyển</th>
                                <th class="desktop w10p text-center">Đến quyển</th>
                                <th class="desktop">Danh sách quyển</th>
                                <th class="all w1p"></th>
                            </tr>
                        </thead>
                        <tbody data-repeater-list="so-lan-thanh-toan">
                            <tr data-repeater-item>
                                <td class="text-center">1</td>
                                <td>
                                    <select select2 class="form-control"><option id="" value="">--- Chọn ---</option><option id="DANG_KIEM" name="Đăng Kiểm" value="DANG_KIEM">Đăng Kiểm</option><option id="SHOW_ROOM" name="Show room" value="SHOW_ROOM">Show room</option><option id="NGAN_HANG" name="Ngân hàng" value="NGAN_HANG">Ngân hàng</option><option id="CO_DONG" name="Cổ đông" value="CO_DONG">Cổ đông</option><option id="999" name="Trực tiếp" value="999">Trực tiếp</option><option id="ABBANK" name="Ngân hàng ABBank" value="ABBANK">Ngân hàng ABBank</option><option id="DANG_KIEM_HOANG_QUANG_QUY_HCM" name="Tổng đại lý-Ông Hoàng Quang Quý-HCM" value="DANG_KIEM_HOANG_QUANG_QUY_HCM">Tổng đại lý-Ông Hoàng Quang Quý-HCM</option><option id="TPBANK" name="TPBANK" value="TPBANK">TPBANK</option><option id="DT_ONLINE" name="Đấu thầu online" value="DT_ONLINE">Đấu thầu online</option><option id="GARAGE" name="Garage" value="GARAGE">Garage</option><option id="BANK_VN0032" name="VIETBANK" value="BANK_VN0032">VIETBANK</option><option id="BANK_VN0020" name="HDBANK" value="BANK_VN0020">HDBANK</option><option id="BANK_VN0022" name="OCBBANK" value="BANK_VN0022">OCBBANK</option><option id="JACCS" name="Công ty TNHH MTV Quốc tế VIỆT NAM(JACCS)" value="JACCS">Công ty TNHH MTV Quốc tế VIỆT NAM(JACCS)</option><option id="HHVT" name="Hiệp hội vận tải" value="HHVT">Hiệp hội vận tải</option><option id="VCB_VCBL" name="Vietcombank Leasing - VCBL" value="VCB_VCBL">Vietcombank Leasing - VCBL</option><option id="DIRECT_SALE" name="DIRECT SALE" value="DIRECT_SALE">DIRECT SALE</option><option id="WEBSITE_ONLINE" name="Kênh bán online" value="WEBSITE_ONLINE">Kênh bán online</option><option id="CTTC" name="Công ty tài chính" value="CTTC">Công ty tài chính</option></select>
                                </td>
                                <td>
                                    <select select2 class="form-control">
                                        <option id="" value="">--- Chọn ---</option>
                                    </select>
                                </td>
                                <td><input class="form-control input-number text-center" type="text" name="" placeholder="0" value=""></td>
                                <td><input class="form-control input-number text-center" type="text" name="" placeholder="0" value=""></td>
                                <td><input class="form-control" type="text" name="" placeholder="" value=""></td>
                                <td class="text-center"><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="border p-1 text-center"><input class="btn bg-success" data-repeater-create type="button" value="+ Thêm"/></div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn bg-primary btn-labeled btn-labeled-left"><b><i class="icon-checkmark4"></i></b> Ghi</a>
            </div>
        </div>
    </div>
</div>
<!-- / Danh sách files -->