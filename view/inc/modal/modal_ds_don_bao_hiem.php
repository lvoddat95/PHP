<!-- Xin cấp số hợp đồng-->
<div id="ds_don_bao_hiem" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Danh sách đơn bảo hiểm</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">

                    <div class="form-filter mb-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Đơn vị:</label>
                                    <?php inc('template/chi_nhanh.php',false); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Loại hình BH: </label>
                                    <?php inc('template/loai_hinh.php',false); ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Người được BH: </label>
                                    <input type="text" class="form-control" name="" placeholder="Nhập người được BH... " value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số đơn BH: </label>
                                    <input type="text" class="form-control" name="" placeholder="Nhập số đơn BH..." value="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="p-button justify-content-end">
                                    <a href="#" class="btn bg-primary"><i class="icon-checkmark4 mr-1"></i>Chọn</a>
                                </div>
                            </div>  
                        </div>
                    </div>

                    <table class="table table-bordered table-hover datatable" data-paging="true" data-info="true" data-ordering="false" data-searching="false">
                        <thead>
                            <tr class="thead-light">
                                <th class="w1p" data-orderable="false">#</th>
                                <th>Số đơn</th>
                                <th>Ngày cấp</th>
                                <th>Tên khách hàng</th>
                                <th>Loại hình BH</th>
                                <th>Ngày hiệu lực</th>
                                <th>Ngày hết hạn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000009/A01</td>
                                <td>01/08/2020</td>
                                <td>Công Ty Cổ Phần Hàng Không Hành Tinh Xanh</td>
                                <td>PHL</td>
                                <td>06/08/2020</td>
                                <td>05/11/2021</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>011800004/C01.E01</td>
                                <td>29/06/2018</td>
                                <td>Công Ty Cổ Phần Thủy Điện Pắc Ma</td>
                                <td>CAR</td>
                                <td>29/06/2018</td>
                                <td>29/08/2022</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000010/J05</td>
                                <td>28/07/2020</td>
                                <td>Vinare</td>
                                <td>J05</td>
                                <td>01/01/2016</td>
                                <td>31/12/2016</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000002/J06.E01.VND</td>
                                <td>06/04/2020</td>
                                <td>Vinare</td>
                                <td>J06</td>
                                <td>01/01/2019</td>
                                <td>31/12/2019</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000019/B02.E01</td>
                                <td>26/05/2020</td>
                                <td>Công Ty TNHH Hyosung Việt Nam</td>
                                <td>PAR</td>
                                <td>04/05/2020</td>
                                <td>04/04/2021</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>011800022/B01.E04</td>
                                <td>30/09/2018</td>
                                <td>Van Phong Bonded Petroleum Terminal Joint Venture Co.,Ltd</td>
                                <td>FIR</td>
                                <td>06/06/2019</td>
                                <td>17/11/2019</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000001/B05.E04</td>
                                <td>15/01/2020</td>
                                <td>CHỦ CĂN HỘ RUBY CITY CT3</td>
                                <td>HMR</td>
                                <td>17/06/2020</td>
                                <td>17/06/2023</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>011900001/J09.E01.USD</td>
                                <td>24/05/2019</td>
                                <td>Tổng Công Ty Cổ Phần Bảo Hiểm Sài Gòn - Hà Nội (BSH)</td>
                                <td>J09</td>
                                <td>01/01/2018</td>
                                <td>01/01/2019</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>011900001/J09.E01.KRW</td>
                                <td>24/05/2019</td>
                                <td>Tổng Công Ty Cổ Phần Bảo Hiểm Sài Gòn - Hà Nội (BSH)</td>
                                <td>J09</td>
                                <td>01/01/2018</td>
                                <td>01/01/2019</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000017/J06.USD</td>
                                <td>17/07/2020</td>
                                <td>Vinare</td>
                                <td>J06</td>
                                <td>01/01/2012</td>
                                <td>31/12/2012</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000017/J06.KRW</td>
                                <td>17/07/2020</td>
                                <td>Vinare</td>
                                <td>J06</td>
                                <td>01/01/2012</td>
                                <td>31/12/2012</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000002/E01</td>
                                <td>14/07/2020</td>
                                <td>Điều Chỉnh Doanh Thu</td>
                                <td>ACX</td>
                                <td>14/07/2020</td>
                                <td>14/07/2021</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000007/F02.OTO19/DCDT</td>
                                <td>14/07/2020</td>
                                <td>Điều Chỉnh Doanh Thu</td>
                                <td>MV</td>
                                <td>14/07/2020</td>
                                <td>14/07/2021</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>011900027/J05.E01.USD</td>
                                <td>11/09/2019</td>
                                <td>Vinare</td>
                                <td>J05</td>
                                <td>01/01/2019</td>
                                <td>31/12/2019</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>011900027/J05.E01.EUR</td>
                                <td>11/09/2019</td>
                                <td>Vinare</td>
                                <td>J05</td>
                                <td>01/01/2019</td>
                                <td>31/12/2019</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000002/G01</td>
                                <td>14/07/2020</td>
                                <td>Điều Chỉnh Doanh Thu</td>
                                <td>AHP</td>
                                <td>14/07/2020</td>
                                <td>14/07/2021</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000004/B01</td>
                                <td>14/07/2020</td>
                                <td>Điều Chỉnh Doanh Thu</td>
                                <td>FIR</td>
                                <td>14/07/2020</td>
                                <td>14/07/2021</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000011/C01</td>
                                <td>14/07/2020</td>
                                <td>Điều Chỉnh Doanh Thu</td>
                                <td>CAR</td>
                                <td>14/07/2020</td>
                                <td>14/07/2021</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>011800007/C02.E01</td>
                                <td>21/09/2018</td>
                                <td>Tổng Công Ty Truyền Tải Điện Quốc Gia - Ban Quản Lý Dự Án Các Công Trình Điện Miền Bắc</td>
                                <td>EAR</td>
                                <td>21/09/2018</td>
                                <td>11/08/2021</td>
                            </tr>
                            <tr>
                                <td class="w1p"><input type="checkbox" /></td>
                                <td>012000002/J09.USD</td>
                                <td>06/07/2020</td>
                                <td>Vinare</td>
                                <td>J09</td>
                                <td>01/01/2016</td>
                                <td>31/12/2016</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               
            </form>
        </div>
    </div>
</div>
<!-- / Xin cấp số hợp đồng -->