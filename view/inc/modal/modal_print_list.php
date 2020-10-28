<!-- Duyệt đơn -->
<div id="print_list" class="modal modal-flex fade" tabindex="-1">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="icon-printer2 mr-1"></i>Chọn danh sách IN</h5>
                    <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <i class="text-danger text-right">(*) Tích chọn vào mục cần in</i>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-item d-flex align-items-center">
                        <input id="in01" class="mr-1" type="checkbox">
                        <label for="in01" class="mb-0" data-tooltip="tipsy" original-title="In thông báo thu phí" data-position="right"><i class="icon-file-text2"></i> In TB thu phí</label>
                    </div>
                    <div class="dropdown-item d-flex align-items-center">
                        <input id="in02" class="mr-1" type="checkbox">
                        <label for="in02" class="mb-0" data-tooltip="tipsy" original-title="In thông báo hoa hồng" data-position="right"><i class="icon-cash3"></i> In TB HH</label>
                    </div>
                    <div class="dropdown-item d-flex align-items-center">
                        <input id="in03" class="mr-1" type="checkbox">
                        <label for="in03" class="mb-0" data-tooltip="tipsy" original-title="In phiếu thanh toán hoa hồng" data-position="right"><i class="icon-credit-card"></i> In phiếu TT HH</label>
                    </div>
                    <div class="dropdown-item d-flex align-items-center">
                        <input id="in04" class="mr-1" type="checkbox">
                        <label for="in04" class="mb-0" data-tooltip="tipsy" original-title="In mẫu in" data-position="right"><i class="icon-stack"></i> In mẫu in</label>
                    </div>
                    <div class="dropdown-item d-flex align-items-center">
                        <input id="in05" class="mr-1" type="checkbox">
                        <label for="in05" class="mb-0" data-tooltip="tipsy" original-title="In tờ trình" data-position="right"><i class="icon-certificate"></i> In tờ trình</label>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div>
                        <a href="#" class="dropdown-item btn-print bg-primary justify-content-center" data-print="grid6"><i class="icon-printer2"></i>IN</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Duyệt đơn-->