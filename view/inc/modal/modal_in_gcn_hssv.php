<div id="in_gcn_hssv" class="bg-white fancybox-content-lg" style="display: none;">
	<div class="modal-header">
	    <h5 class="modal-title">Danh sách In giấy chứng nhận HSSV</h5>
	    <button type="button" class="close" data-fancybox-close><i class="fal fa-times"></i></button>
	</div>
	<div class="modal-body">

		<div class="form-filter">
			<div class="row">
				<div class="col-sm-3">
                    <div class="form-group">
                        <label>Kiểu lấy danh sách: </label>
                        <select select2>
                        	<option value="1">Nhập số thứ tự</option>
                        	<option value="2">Chọn danh sách</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Số thứ tự: <sup class="text-danger">(min:1 - max: 13)</sup></label>
                        <div class="date-to-date">
                        	<div class="input-group">
	                            <span class="input-group-prepend">
	                                <span class="input-group-text">Từ</span>
	                            </span>
	                            <input type="text" class="form-control input-number text-right" placeholder="0" value="1">
	                        </div>
					        <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
					        <div class="input-group">
	                            <span class="input-group-prepend">
	                                <span class="input-group-text">Đến</span>
	                            </span>
	                            <input type="text" class="form-control input-number text-right" placeholder="0" value="13">
	                        </div>
					    </div>
                    </div>
                </div>
				<div class="col-sm-4">
                	<div class="form-group ">
                		<label>Thứ tự ô bắt đầu in trên trang đầu tiên:</label>
            			<input type="text" class="form-control input-number text-right col-content-xs" placeholder="0" value="1">
            			<small>Nhập giá trị số 1 - 9 (Mặc định: 1)</small>
                	</div>	
                </div>
			</div>
		</div>
		
	</div>
	<div class="modal-footer">
		<a href="javascript:;" class="btn bg-primary"><i class="icon-printer2 mr-1"></i> IN</a>
	</div>
</div>
