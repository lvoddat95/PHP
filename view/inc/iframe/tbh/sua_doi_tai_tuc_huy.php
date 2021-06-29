<?php require_once '../../../../config.php'; ?>
<?php include_once HEADER; ?>
<div class="content">
    <div class="tab-style">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#modal_tab1" class="nav-link active show" data-toggle="tab">Lịch sử sửa đổi</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="modal_tab1">
                <div class="form-box mb-3">
                    <table class="table table-bordered datatable" data-paging="false" data-info="false" data-ordering="false" data-searching="false" role="grid">
                        <thead class="thead-light">
                            <tr role="row">
                                <th width="1%" class="all text-center" rowspan="1" colspan="1"><b>#</b></th>
                                <th width="25%" class="all " rowspan="1" colspan="1"><b>Số đơn</b></th>
                                <th width="25%" class=" " rowspan="1" colspan="1"><b>Hình thức cấp đơn</b></th>
                                <th width="10%" class="desktop " rowspan="1" colspan="1"><b>Ngày cấp</b></th>
                                <th width="15%" class="desktop " rowspan="1" colspan="1"><b>Tổng phí</b></th>
                                <th width="5%" class="min-tablet text-center" rowspan="1" colspan="1"><b>#</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> 1 </td>
                                <td>3602101372/F02.E01.BB21/0020434 (<b>Đơn đã sửa đổi</b>)</td>
                                <td>
                                    <b>Sửa đổi, bổ sung</b>
                                    <br />
                                    1. Chỉ thay đổi các thông tin thông thường
                                </td>
                                <td>
                                    07/04/2021
                                </td>
                                <td class="text-right"> 0 </td>
                                <td class="text-center">
                                    <a href="" class="text-underline text-primary font-weight-semibold" target="_blank"> <i class="fa fa-link mr-1"></i>Xem chi tiết</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once FOOTER; ?>

