<!-- Duyệt đơn -->
<div id="in_option" class="modal modal-flex fade" tabindex="-1">
        <div class="modal-dialog modal-xs">
            <div class="modal-content">
                <form action="#">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="icon-printer2 mr-1"></i>Chọn kiểu IN</h5>
                        <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <span href="#" class="dropdown-item d-flex align-items-center">
                            <input id="same" class="mr-1" type="checkbox" onchange="on_change_kich_thuoc_anh(this);">
                            <label for="same" class="mb-0">Đặt kích thước ảnh bằng nhau</label>
                        </span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item btn-print" data-print="list"><i class="far fa-list"></i>In dạng danh sách</a>
                        <a href="#" class="dropdown-item btn-print" data-print="grid4"><i class="far fa-border-all"></i>In 4 Ảnh / Trang</a>
                        <a href="#" class="dropdown-item btn-print" data-print="grid6"><i class="far fa-grip-vertical"></i>In 6 Ảnh / Trang</a>
                       
                    </div>
                </form>
            </div>
        </div>
</div>
<!-- / Duyệt đơn-->