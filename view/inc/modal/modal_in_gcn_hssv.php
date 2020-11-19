<div id="in_gcn_hssv" class="bg-white fancybox-content-xl" style="display: none;">
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
                        <select select2 onchange="kieu_lay_danh_sach(this);">
                        	<option value="1">Nhập số thứ tự</option>
                        	<option value="2">Chọn trong danh sách</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3" id="stt">
                    <div class="form-group">
                        <label>Số thứ tự: <sup class="text-danger">(min:1 - max: 12)</sup></label>
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
	                            <input type="text" class="form-control input-number text-right" placeholder="0" value="12">
	                        </div>
					    </div>
                    </div>
                </div>
				<div class="col-sm-3">
                	<div class="form-group ">
                		<label>Vị trí In: <a href="#" data-tooltip="tipsy" original-title="Đặt vị trí in trên trang đầu tiên của phôi" data-position="top"><i class="icon-info22"></i></a></label>
            			<input type="text" class="form-control input-number text-right col-content-xs" placeholder="0" value="1">
            			<small>Giá trị số 1 - 9 (Mặc định: 1)</small>
                	</div>	
                </div>
                <div class="col-sm-3">
                	<div class="form-group ">
                		<label>&nbsp;</label>
            			<div>
            				<a href="javascript:;" class="btn bg-primary" onclick="in_gcn_hssv(this);"><i class="icon-printer2 mr-1"></i> In giấy chứng nhận</a>
            			</div>
                	</div>	
                </div>
			</div>
		</div>

        <div>
        	<table class="table table-bordered table-hover datatable"  data-paging="true" data-info="true" data-ordering="false" data-searching="false" data-page-length="10" >
        		<thead class="thead-light">
        			<tr>
        				<th rowspan="2" class="cell control not-desktop text-center">
                            <i class="fa fa-ellipsis-v"></i>
                        </th>
        				<th rowspan="2" class="w1p text-center"><input type="checkbox" id="input-chk-all"></th>
        				<th rowspan="2" class="w1p text-center">STT</th>
        				<th rowspan="2" class="w15p">Người được bảo hiểm</th>
        				<th rowspan="2" class="w11p">Ngày sinh</th>
        				<th rowspan="2" class="w5p">Lớp</th>
        				<th colspan="4" class="text-center">Số tiền bảo hiểm</th>
        				<th rowspan="2">Phí bảo hiểm</th>
        				<th rowspan="2">Ghi chú</th>
        			</tr>
        			<tr>
        				<th>Phạm vi A</th>
        				<th>Phạm vi B</th>
        				<th>Phạm vi C</th>
        				<th>Phạm vi D</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" id="input-chk-all"></td></td>
        				<td class="text-center">1</td>
        				<td><input type="text" class="form-control" value="Đoàn Gia Bảo"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nam"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">2</td>
        				<td><input type="text" class="form-control" value="Trần Minh Hiếu"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nam"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">3</td>
        				<td><input type="text" class="form-control" value="Trần Tiến Đạt"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nam"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">4</td>
        				<td><input type="text" class="form-control" value="Nguyễn Ngọc Thiên Kim"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nữ"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">5</td>
        				<td><input type="text" class="form-control" value="Võ Minh Kiệt"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nam"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">6</td>
        				<td><input type="text" class="form-control" value="Văn Trần Khôi Nguyên"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nam"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">7</td>
        				<td><input type="text" class="form-control" value="A Dăm Nguyên"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nam"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">8</td>
        				<td><input type="text" class="form-control" value="Nguyễn Anh Thơ"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nữ"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">9</td>
        				<td><input type="text" class="form-control" value="Trần Lê Thiên Thảo"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nữ"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">10</td>
        				<td><input type="text" class="form-control" value="Hoàng Linh San"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nữ"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">11</td>
        				<td><input type="text" class="form-control" value="Nguyễn Trần Anh Thư"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nữ"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        			<tr>
        				<td class="cell control not-desktop text-center" title="Xem thêm thông tin"></td>
        				<td class="text-center"><input type="checkbox" class="input-chk"></td></td>
        				<td class="text-center">12</td>
        				<td><input type="text" class="form-control" value="Phạm Minh Kỳ Thư"></td>
        				<td><input type="text" class="form-control input-date datepicker" value="01/01/2014"></td>
        				<td><input type="text" class="form-control" value="Nữ"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="12000000" placeholder="0"></td>
        				<td><input type="text" class="form-control input-money" value="105000" placeholder="0"></td>
        				<td><input type="text" class="form-control"></td>
        			</tr>
        		</tbody>

        	</table>
        </div>
		
	</div>
	
</div>
<?php inc('modal/in_gcn_hssv.php'); ?> 
