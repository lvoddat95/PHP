<!-- Lịch sử tổn thất -->
<div id="lich_su_ton_that" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 text-center">
                <h5 class="modal-title text-uppercase font-weight-semibold">Lịch sử tổn thất</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body text-body">
                    <div class="tab-style2">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item"><a href="#modal_tab1" class="nav-link active" data-toggle="tab">Tổn thất theo số đơn BH</a></li>
                            <li class="nav-item"><a href="#modal_tab2" class="nav-link" data-toggle="tab">Tổn thất theo khách hàng</a></li>
                            <li class="nav-item"><a href="#modal_tab3" class="nav-link" data-toggle="tab">Tổn thất theo biển kiểm soát</a></li>
                            <li class="nav-item"><a href="#modal_tab4" class="nav-link" data-toggle="tab">Tổn thất theo số HĐ</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="modal_tab1">
                                <table class="table table-bordered datatable" 
                                    data-paging="false"
                                    data-info="false"
                                    data-ordering="false"
                                    data-searching="false"
                                    >
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="30px" class="desktop">#</th>
                                            <th class="all">Số hồ sơ BT</th>
                                            <th class="desktop">Số đơn BH</th>
                                            <th width="11%" class="desktop">Ngày tổn thất</th>
                                            <th width="11%" class="desktop">Ngày thông báo</th>
                                            <th width="13%" class="all">Tổng phí BH</th>
                                            <th width="13%" class="min-tablet">Số tiền dự phòng đã duyệt</th>
                                            <th width="13%" class="min-tablet">Số tiền thanh toán đã duyệt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center"> 1 </td>
                                            <td>BT011000269.F02 </td>
                                            <td>010900978.E01.BB068501 </td>
                                            <td> 10/06/2010 </td>
                                            <td>11/06/2010 </td>
                                            <td align="right;" style="text-align: right;">4,001,818 </td>
                                            <td align="right;" style="text-align: right;">2,090,000 </td>
                                            <td align="right;" style="text-align: right;">1,900,000 </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex mt-2"> 
                                    <p class="mr-3 font-weight-semibold text-body">Tổng phí BH: <span class="text-indigo-400"> 4,001,818</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tổng Dự phòng: <span class="text-indigo-400"> 2,090,000</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tổng Bồi thường: <span class="text-indigo-400"> 1,900,000</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tỷ lệ bồi thường/doanh thu: <span class="text-indigo-400">47.48 % </span></p>
                                </div>
                                <div class="modal-chart">
                                    <div class="chart-container text-center">
                                        <div class="d-inline-block" 
                                        data-size="250"
                                        data-color="#3F51B5, #FF9800"
                                        data-columns='["Bồi thường",47.5],["Doanh thu",52.5]'
                                        id="c3-pie-chart"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="modal_tab2">
                                <table class="table table-bordered datatable"
                                    data-paging="false"
                                    data-info="false"
                                    data-ordering="false"
                                    data-searching="false"
                                    >
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="2%" class="desktop">#</th>
                                            <th width="9%" clas="all">Số hồ sơ BT</th>
                                            <th width="13%" class="min-tablet">Số đơn BH</th>
                                            <th width="15%" class="desktop">Loại hình BH</th>
                                            <th width="10%" class="desktop">Ngày tổn thất</th>
                                            <th width="10%" class="desktop">Ngày thông báo</th>
                                            <th width="10%" clas="all">Tổng phí BH</th>
                                            <th width="10%" class="min-tablet">Số tiền dự phòng đã duyệt</th>
                                            <th width="10%" class="min-tablet">Số tiền thanh toán đã duyệt</th>
                                            <th width="10%" class="desktop">Ngày thu phí</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center"> 1 </td>
                                            <td>BT011000269.F02 </td>
                                            <td>010900978.E01.BB068501 </td>
                                            <td> F02 - Bảo hiểm ô tô </td>
                                            <td>10/06/2010 </td>
                                            <td>11/06/2010 </td>
                                            <td align="right;" style="text-align: right;"> 4,001,818 </td>
                                            <td align="right;" style="text-align: right;">2,090,000 </td>
                                            <td align="right;" style="text-align: right;">1,900,000 </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex mt-2"> 
                                    <p class="mr-3 font-weight-semibold text-body">Tổng phí BH: <span class="text-indigo-400"> 4,001,818</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tổng Dự phòng: <span class="text-indigo-400"> 2,090,000</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tổng Bồi thường: <span class="text-indigo-400"> 1,900,000</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tỷ lệ bồi thường/doanh thu: <span class="text-indigo-400">47.48 % </span></p>
                                </div>
                                <div class="modal-chart">
                                    <div class="chart-container text-center">
                                        <div class="d-inline-block" 
                                        data-size="350"
                                        data-color="#3F51B5, #FF9800"
                                        data-columns='["Bồi thường",47.5],["Doanh thu",52.5]'
                                        id="c3-pie-chart2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="modal_tab3">
                                <table class="table table-bordered datatable"
                                    data-paging="false"
                                    data-info="false"
                                    data-ordering="false"
                                    data-searching="false"
                                    >
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="2%" class="desktop">#</th>
                                            <th width="10%" class="all">Số hồ sơ BT</th>
                                            <th width="15%" class="min-tablet">Số đơn BH</th>
                                            <th width="10%" class="desktop">Ngày tổn thất</th>
                                            <th width="10%" class="desktop">Ngày thông báo</th>
                                            <th width="13%" class="all">Tổng phí BH</th>
                                            <th width="13%" class="min-tablet">Số tiền dự phòng đã duyệt</th>
                                            <th width="13%" class="min-tablet">Số tiền thanh toán đã duyệt</th>
                                            <th width="13%" class="desktop">Ngày thu phí</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center">1</td>
                                            <td>BT041101077.F02</td>
                                            <td>041001229.BB051844</td>
                                            <td>19/06/2011 </td>
                                            <td>28/06/2011 </td>
                                            <td align="right;" style="text-align: right;">4,001,818 </td>
                                            <td align="right;" style="text-align: right;">6,000,000 </td>
                                            <td align="right;" style="text-align: right;">4,900,000 </td>
                                            <td>24/06/2010 </td>
                                        </tr>
                                        <tr>
                                            <td align="center"> 2 </td>
                                            <td>BT041400643.F02 </td>
                                            <td> 041301003.BB108467 </td>
                                            <td>05/07/2014 </td>
                                            <td>07/07/2014 </td>
                                            <td align="right;" style="text-align: right;">4,001,818 </td>
                                            <td align="right;" style="text-align: right;">2,000,000 </td>
                                            <td align="right;" style="text-align: right;">1,722,500 </td>
                                            <td>11/07/2013 </td>
                                        </tr>
                                        <tr>
                                            <td align="center">3 </td>
                                            <td> BT041300174.F02 </td>
                                            <td>041200824.BB107296 </td>
                                            <td>20/02/2013 </td>
                                            <td>21/02/2013 </td>
                                            <td align="right;" style="text-align: right;">4,001,818 </td>
                                            <td align="right;" style="text-align: right;">5,500,000 </td>
                                            <td align="right;" style="text-align: right;"> 5,000,000 </td>
                                            <td> 02/07/2012 </td>
                                        </tr>
                                        <tr>
                                            <td align="center"> 4 </td>
                                            <td>BT011000269.F02 </td>
                                            <td> 010900978.E01.BB068501 </td>
                                            <td>10/06/2010 </td>
                                            <td>11/06/2010 </td>
                                            <td align="right;" style="text-align: right;">4,001,818 </td>
                                            <td align="right;" style="text-align: right;">2,090,000 </td>
                                            <td align="right;" style="text-align: right;">1,900,000 </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex mt-2"> 
                                    <p class="mr-3 font-weight-semibold text-body">Tổng phí BH: <span class="text-indigo-400"> 28,187,908</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tổng Dự phòng: <span class="text-indigo-400"> 15,590,000 </span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tổng Bồi thường: <span class="text-indigo-400"> 13,522,500</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tỷ lệ bồi thường/doanh thu: <span class="text-indigo-400">47.97 % </span></p>
                                </div>
                                <div class="modal-chart">
                                    <div class="chart-container text-center">
                                        <div class="d-inline-block" 
                                        data-size="350"
                                        data-color="#3F51B5, #FF9800"
                                        data-columns='["Bồi thường",48.0],["Doanh thu",52.0]'
                                        id="c3-pie-chart3"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="modal_tab4">
                                <table class="table table-bordered datatable"
                                    data-paging="false"
                                    data-info="false"
                                    data-ordering="false"
                                    data-searching="false"
                                    >
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="2%" class="desktop">#</th>
                                            <th width="9%" class="all">Số hồ sơ BT</th>
                                            <th width="13%" class="min-tablet">Số đơn BH</th>
                                            <th width="15%" class="desktop">Loại hình BH</th>
                                            <th width="10%" class="desktop">Ngày tổn thất</th>
                                            <th width="10%" class="desktop">Ngày thông báo</th>
                                            <th width="10%" class="all">Tổng phí BH</th>
                                            <th width="10%" class="min-tablet">Số tiền dự phòng đã duyệt</th>
                                            <th width="10%" class="min-tablet">Số tiền thanh toán đã duyệt</th>
                                            <th width="10%" class="desktop">Ngày thu phí</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex mt-2"> 
                                    <p class="mr-3 font-weight-semibold text-body">Tổng phí BH: <span class="text-indigo-400"> 4,001,818</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tổng Dự phòng: <span class="text-indigo-400"> 0</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tổng Bồi thường: <span class="text-indigo-400"> 0</span></p>
                                    <p class="mr-3 font-weight-semibold text-body">Tỷ lệ bồi thường/doanh thu: <span class="text-indigo-400">0% </span></p>
                                </div>
                                <div class="modal-chart">
                                    <div class="chart-container text-center">
                                        <div class="d-inline-block" 
                                        data-size="350"
                                        data-color="#FF9800"
                                        data-columns='["Doanh thu",100]'
                                        class="c3-pie-chart"
                                        id="c3-pie-chart4"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Lịch sử tổn thất -->