<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<div class="bg-white">
	<div class="modal-header">
	    <h5 class="modal-title">Danh sách tỉ lệ thương tật</h5>
	</div>
	<div class="modal-body bg-white">
		<div class="mb-3">
			<div class="row">
		        <div class="col-sm-4">
		            <div class="form-group">
		                <label>Nhóm bộ phận: </label>
		                <select class="form-control" select2>
						    <option value="">Tất cả</option>
						    <option value="67">⦿ • Bảng tỷ lệ trả tiền phẫu thuật</option>
						    <option value="67-68">&nbsp;&nbsp;&nbsp;&nbsp; • Não - Hệ thần kinh</option>
						    <option value="67-68-83">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương sọ</option>
						    <option value="67-68-84">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Não</option>
						    <option value="67-68-85">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cột sống</option>
						    <option value="67-69">&nbsp;&nbsp;&nbsp;&nbsp; • Mắt</option>
						    <option value="67-69-86">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Kết mạc</option>
						    <option value="67-69-87">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Giác mạc</option>
						    <option value="67-69-88">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Nhãn cầu</option>
						    <option value="67-69-89">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Thủy tinh thể</option>
						    <option value="67-69-90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Võng mạc</option>
						    <option value="67-69-91">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Củng mạc</option>
						    <option value="67-70">&nbsp;&nbsp;&nbsp;&nbsp; • Tai Mũi Họng</option>
						    <option value="67-70-92">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tai</option>
						    <option value="67-70-93">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Mũi</option>
						    <option value="67-70-94">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Họng</option>
						    <option value="67-71">&nbsp;&nbsp;&nbsp;&nbsp; • Hệ thống nội tiết</option>
						    <option value="67-72">&nbsp;&nbsp;&nbsp;&nbsp; • Tim và Bộ máy tuần hoàn</option>
						    <option value="67-72-95">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tim</option>
						    <option value="67-72-96">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Van tim</option>
						    <option value="67-72-97">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Động mạch chủ và các mạch máu lớn</option>
						    <option value="67-72-98">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Động mạch vành</option>
						    <option value="67-72-99">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Động mạch phổi</option>
						    <option value="67-72-100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Các động mạch và tĩnh mạch</option>
						    <option value="67-73">&nbsp;&nbsp;&nbsp;&nbsp; • Ngực - Cơ quan hô hấp</option>
						    <option value="67-74">&nbsp;&nbsp;&nbsp;&nbsp; • Bụng - Bộ máy tiêu hóa</option>
						    <option value="67-74-101">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bụng</option>
						    <option value="67-74-102">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Đường dẫn mật</option>
						    <option value="67-74-103">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Gan</option>
						    <option value="67-74-104">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tụy</option>
						    <option value="67-74-105">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Lách</option>
						    <option value="67-74-106">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Thoát vị</option>
						    <option value="67-74-107">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Nội soi</option>
						    <option value="67-74-108">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Thực quản</option>
						    <option value="67-74-109">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Dạ dày</option>
						    <option value="67-74-110">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Ruột non</option>
						    <option value="67-74-111">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Ruột thừa</option>
						    <option value="67-74-112">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Trực tràng</option>
						    <option value="67-74-113">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Hậu môn</option>
						    <option value="67-75">&nbsp;&nbsp;&nbsp;&nbsp; • Bộ máy tiết niệu</option>
						    <option value="67-75-114">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Thận</option>
						    <option value="67-75-115">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Niệu quản</option>
						    <option value="67-75-116">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Niệu đạo</option>
						    <option value="67-75-117">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bàng quang</option>
						    <option value="67-76">&nbsp;&nbsp;&nbsp;&nbsp; • Các cơ quan sinh dục</option>
						    <option value="67-76-118">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cơ quan sinh dục nữ</option>
						    <option value="67-76-118-154">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Âm hộ và đường vào âm đạo</option>
						    <option value="67-76-118-155">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Âm đạo</option>
						    <option value="67-76-118-156">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cổ tử cung</option>
						    <option value="67-76-118-157">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Thân tử cung</option>
						    <option value="67-76-118-158">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Ống dẫn trứng</option>
						    <option value="67-76-118-159">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Buồng trứng</option>
						    <option value="67-76-119">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cơ quan sinh dục nam</option>
						    <option value="67-76-119-160">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Dương vật</option>
						    <option value="67-76-119-161">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Thừng tinh</option>
						    <option value="67-76-119-162">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tinh hoàn</option>
						    <option value="67-76-119-163">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tuyến tiền liệt</option>
						    <option value="67-77">&nbsp;&nbsp;&nbsp;&nbsp; • Hộ sinh (Nếu có thể áp dụng)</option>
						    <option value="67-77-120">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Đẻ thường</option>
						    <option value="67-78">&nbsp;&nbsp;&nbsp;&nbsp; • Hệ thống cơ xương</option>
						    <option value="67-78-121">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cắt cụt&nbsp; và tháo khớp</option>
						    <option value="67-79">&nbsp;&nbsp;&nbsp;&nbsp; • Trật khớp</option>
						    <option value="67-79-122">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Hàm</option>
						    <option value="67-79-123">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Vai</option>
						    <option value="67-79-124">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Khủyu tay</option>
						    <option value="67-79-125">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cổ tay</option>
						    <option value="67-79-126">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Các ngón tay</option>
						    <option value="67-79-127">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Háng</option>
						    <option value="67-79-128">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Khớp gối</option>
						    <option value="67-79-129">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bánh chè</option>
						    <option value="67-79-130">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cổ chân</option>
						    <option value="67-79-131">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Ngón chân</option>
						    <option value="67-80">&nbsp;&nbsp;&nbsp;&nbsp; • Gãy xương</option>
						    <option value="67-80-132">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Chi trên (gx)</option>
						    <option value="67-80-132-164">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương cánh tay</option>
						    <option value="67-80-132-165">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Khuỷu tay</option>
						    <option value="67-80-132-166">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương quay</option>
						    <option value="67-80-132-167">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương trụ</option>
						    <option value="67-80-132-168">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương trụ và xương quay</option>
						    <option value="67-80-132-169">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cổ tay</option>
						    <option value="67-80-132-170">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Các ngón tay</option>
						    <option value="67-80-133">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Chi dưới (gx)</option>
						    <option value="67-80-133-171">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương đùi</option>
						    <option value="67-80-133-172">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bánh chè</option>
						    <option value="67-80-133-173">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương chày</option>
						    <option value="67-80-133-174">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương mác</option>
						    <option value="67-80-133-175">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương chày và xương mác</option>
						    <option value="67-80-133-176">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cổ chân&nbsp;(xương gót, xương sên, xương thuyền)</option>
						    <option value="67-80-133-177">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bàn chân</option>
						    <option value="67-80-134">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Các xương khác</option>
						    <option value="67-80-134-178">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương hàm</option>
						    <option value="67-80-134-179">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương đòn</option>
						    <option value="67-80-134-180">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương bả</option>
						    <option value="67-80-134-181">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương sườn</option>
						    <option value="67-80-134-182">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cột sống</option>
						    <option value="67-81">&nbsp;&nbsp;&nbsp;&nbsp; • Cắt bỏ, Cố định hay sửa chữa bằng phẫu thuật</option>
						    <option value="67-81-135">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương cánh tay</option>
						    <option value="67-81-136">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bàn ngón tay</option>
						    <option value="67-81-137">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương chân</option>
						    <option value="67-81-138">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Háng</option>
						    <option value="67-81-139">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Xương đùi</option>
						    <option value="67-81-140">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Khớp gối</option>
						    <option value="67-81-141">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cổ chân</option>
						    <option value="67-82">&nbsp;&nbsp;&nbsp;&nbsp; • Da, Tổ chức dưới da, Hệ thống bạch huyết và vú</option>
						    <option value="67-82-142">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Ap xe</option>
						    <option value="67-82-143">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tổn thương lành tính</option>
						    <option value="67-82-144">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tổn thương ác tính</option>
						    <option value="67-82-145">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Nang</option>
						    <option value="67-82-146">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bọc hoặc nang cụm lông</option>
						    <option value="67-82-147">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Hạch</option>
						    <option value="67-82-148">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Hạch bạch huyết</option>
						    <option value="67-82-149">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Móng</option>
						    <option value="67-82-150">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Các vật có chân nuôi</option>
						    <option value="67-82-151">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tạo hình</option>
						    <option value="67-82-152">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Lấy chuyển hoặc xoay chuyển tổ chức</option>
						    <option value="67-82-153">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Vú</option>
						    <option value="65">⦿ • Bảng tỷ lệ trả tiền thương tật</option>
						    <option value="65-184">&nbsp;&nbsp;&nbsp;&nbsp; • Thương tật toàn bộ</option>
						    <option value="65-185">&nbsp;&nbsp;&nbsp;&nbsp; • Thương tật bộ phận</option>
						    <option value="65-185-186">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Thương tật vĩnh viễn</option>
						    <option value="65-185-186-265">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Chi Trên (vv)</option>
						    <option value="65-185-186-267">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Chi Dưới (vv)</option>
						    <option value="65-185-186-269">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cột Sống (vv)</option>
						    <option value="65-185-186-270">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Sọ Não (vv)</option>
						    <option value="65-185-186-272">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Lồng Ngực (vv)</option>
						    <option value="65-185-186-274">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bụng (vv)</option>
						    <option value="65-185-186-276">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cơ quan tiết niệu, sinh dục (vv)</option>
						    <option value="65-185-186-278">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Mắt (vv)</option>
						    <option value="65-185-186-279">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Tai –Mũi – Họng (vv)</option>
						    <option value="65-185-186-280">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Răng - Hàm - Mặt (vv)</option>
						    <option value="65-185-186-283">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Vết Thương Phần Mềm – Bỏng (vv)</option>
						    <option value="65-185-187">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Thương tật tạm thời</option>
						    <option value="65-185-187-266">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Chi Trên (tt)</option>
						    <option value="65-185-187-268">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Chi Dưới (tt)</option>
						    <option value="65-185-187-271">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Sọ Não (tt)</option>
						    <option value="65-185-187-273">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Lồng Ngực (tt)</option>
						    <option value="65-185-187-275">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bụng (tt)</option>
						    <option value="65-185-187-277">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cơ quan tiết niệu, sinh dục (tt)</option>
						    <option value="65-185-187-281">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Răng - Hàm - Mặt (tt)</option>
						    <option value="65-185-187-282">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Vết Thương Phần Mềm – Bỏng (tt)</option>
						    <option value="65-185-187-284">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Cột sống (tt)</option>
						</select>
		            </div>
		        </div>
		        <div class="col-sm-4">
		            <div class="form-group">
		                <label>Loại hình: </label>
		                <select class="form-control" select2>
		                	<option value="">Tất cả</option>
		                	<option value="">Vĩnh viễn</option>
		                	<option value="">Tạm thời</option>
		                	<option value="">Phẫu thuật</option>
		                </select>
		            </div>
		        </div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		            <div class="form-group">
		                <label>Tên bộ phận (Thương tật/ Phẫu thuật): </label>
		                <input type="text" class="form-control" name="" placeholder="" value="">
		            </div>
		        </div>
		        <div class="col-sm-2">
		            <div class="form-group">
		                <label>Tỉ lệ Min: </label>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="">
		            </div>
		        </div>
		        <div class="col-sm-2">
		            <div class="form-group">
		                <label>Tỉ lệ Max: </label>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="">
		            </div>
		        </div>
		        <div class="col-sm-4">
		            <div class="form-group">
		                <label>Mức trách nhiệm: </label>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="100,000,000">
		            </div>
		        </div>

		    </div>
		    <div class="text-right">
	            <button type="submit" class="btn bg-primary"><i class="fa fa-filter mr-1"></i>Lọc</button>
	            <button type="button" class="btn btn-light" data-dismiss="modal"><i class="icon-cross2 mr-1"></i>Hủy điều kiện lọc</button>
	        </div>
		</div>

		<table class="table table-bordered datatable"  data-paging="false" data-info="false" data-ordering="false" data-searching="false">
		    <thead class="thead-light">
		        <tr>
		            <th rowspan="2" width="2%" align="center">#</th>
		            <th rowspan="2" width="30%">Tên bộ phận (Thương tật/ Phẫu thuật)</th>
		            <th rowspan="2" width="8%" align="center">Loại hình</th>
		            <th rowspan="2" width="10%" align="center">Nhóm bộ phận</th>
		            <th colspan="2" width="7%" class="text-center">Ti lệ</th>
		            <th rowspan="2" width="5%" class="text-center">Tỉ lệ chi trả</th>
		            <th rowspan="2" width="10%" class="text-right">Tiền phải trả</th>
		        </tr>
		        <tr>
		            <th align="center">Min</th>
		            <th align="center">Max</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;1. Khoan sọ không kèm theo can thiệp nào khác</td>
		            <td>Phẫu thuật</td>
		            <td>Xương sọ</td>
		            <td>8</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;2. Khoan sọ hoặc khoét tròn xương sọ để lấy máu tụ, não dập</td>
		            <td>Phẫu thuật</td>
		            <td>Xương sọ</td>
		            <td>20</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;3. Khoan sọ hoặc khoét tròn xương sọ để dẫn lưu áp xe, nang</td>
		            <td>Phẫu thuật</td>
		            <td>Xương sọ</td>
		            <td>25</td>
		            <td>33</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;4. Cắt bỏ hay cắt mở phần xương sọ</td>
		            <td>Phẫu thuật</td>
		            <td>Xương sọ</td>
		            <td>38</td>
		            <td>48</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;5. Nâng mảnh xương gãy sập ngoài màng cứng, gãy đơn giản hay gãy vụn nhiều mảnh</td>
		            <td>Phẫu thuật</td>
		            <td>Xương sọ</td>
		            <td>22</td>
		            <td>38</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;6. Có kèm theo cắt lọc não và tái tạo màng cứng</td>
		            <td>Phẫu thuật</td>
		            <td>Xương sọ</td>
		            <td>30</td>
		            <td>38</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;7. Lấy bỏ u não</td>
		            <td>Phẫu thuật</td>
		            <td>Não</td>
		            <td>45</td>
		            <td>57</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;8. Lấy bỏ áp xe não</td>
		            <td>Phẫu thuật</td>
		            <td>Não</td>
		            <td>40</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;9. Lấy dị vật trong não</td>
		            <td>Phẫu thuật</td>
		            <td>Não</td>
		            <td>40</td>
		            <td>48</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;10. Cắt bỏ bộ phận hoặc toàn bộ thùy não</td>
		            <td>Phẫu thuật</td>
		            <td>Não</td>
		            <td>44</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;11. Mở thông thùy não, kể cả mở bó liên hợp khứu - hải mã</td>
		            <td>Phẫu thuật</td>
		            <td>Não</td>
		            <td>25</td>
		            <td>33</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;12. Cắt bỏ bán cầu não</td>
		            <td>Phẫu thuật</td>
		            <td>Não</td>
		            <td>55</td>
		            <td>67</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;13. Cắt bỏ đĩa đệm đường trước hoặc sau</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>28</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;14. Cắt bỏ cung sau, có hay không có giải phóng rễ thần kinh vùng cổ ngực</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>38</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;15. Cắt bỏ cung sau, có hay không có giải phóng rễ thần kinh vùng thắt lưng</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>32</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;16. Cắt bỏ cung sau, có hay không có giải phóng rễ thần kinh quá 2 đoạn cổ ngực, thắt lưng</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>62</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;17. Mở cung sau giải phóng chèn ép rễ thần kinh vùng cổ ngực</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>26</td>
		            <td>36</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;18. Mở cung sau giải phóng chèn ép rễ thần kinh vùng thắt lưng</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>22</td>
		            <td>33</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;19. Chọc cột sống thắt lưng giải ép</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>2</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;20. Chích tháo nang, phỏng dịch</td>
		            <td>Phẫu thuật</td>
		            <td>Kết mạc</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;21. Chích chắp ở một hoặc nhiều vị trí</td>
		            <td>Phẫu thuật</td>
		            <td>Kết mạc</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;22. Lấy bỏ dị vật</td>
		            <td>Phẫu thuật</td>
		            <td>Kết mạc</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;23. Cắt hoặc di chuyển mộng mắt</td>
		            <td>Phẫu thuật</td>
		            <td>Giác mạc</td>
		            <td>5</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;24. Khoét bỏ thương tổn</td>
		            <td>Phẫu thuật</td>
		            <td>Giác mạc</td>
		            <td>5</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;25. Xử trí vết thương cơ ngoài mắt</td>
		            <td>Phẫu thuật</td>
		            <td>Giác mạc</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;26. Lấy bỏ có ghép độn</td>
		            <td>Phẫu thuật</td>
		            <td>Nhãn cầu</td>
		            <td>23</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;27. Chích tháo tuyến hay túi lệ</td>
		            <td>Phẫu thuật</td>
		            <td>Nhãn cầu</td>
		            <td>1</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;28. Cắt bỏ tuyến hoặc túi lệ</td>
		            <td>Phẫu thuật</td>
		            <td>Nhãn cầu</td>
		            <td>8</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;29. Cắt thủy tinh thể</td>
		            <td>Phẫu thuật</td>
		            <td>Thủy tinh thể</td>
		            <td>15</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;30. Có lắp thủy tinh thể nhân tạo</td>
		            <td>Phẫu thuật</td>
		            <td>Thủy tinh thể</td>
		            <td>20</td>
		            <td>27</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;31. Rạch bao thủy tinh thể (chích hoặc chọc thủng bao)</td>
		            <td>Phẫu thuật</td>
		            <td>Thủy tinh thể</td>
		            <td>3</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;32. Điều trị bong võng mạc</td>
		            <td>Phẫu thuật</td>
		            <td>Võng mạc</td>
		            <td>22</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;33. Ap lạnh, sử dụng biện pháp thấu nhiệt, quang đông, laser hay nhiều đợt</td>
		            <td>Phẫu thuật</td>
		            <td>Võng mạc</td>
		            <td>12</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;34. Tạo đường rò xuyên trong glôcôm, khoan thủng với cắt bỏ mống mắt</td>
		            <td>Phẫu thuật</td>
		            <td>Củng mạc</td>
		            <td>16</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;35. Xử trí lồi củng mạc có ghép</td>
		            <td>Phẫu thuật</td>
		            <td>Củng mạc</td>
		            <td>25</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;36. Cắt bỏ Pôlyp trong tai</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;37. Cắt bỏ đường rò luân nhĩ</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;38. Mở cửa sổ</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>32</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;39. Cắt mê lộ kèm theo cắt xương chũm</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>75</td>
		            <td>85</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;40. Cắt xương chũm</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>28</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;41. Tạo hình màng nhĩ</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>17</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;42. Lấy xương bàn đạp</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>15</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;43. Mở hang chũm qua xương chũm</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>12</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;44. Tạo hình màng nhĩ có cắt xương chũm, tái tạo chùm tiểu cốt nhĩ</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>32</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;45. Mở thông màng nhĩ, đặt ống thông</td>
		            <td>Phẫu thuật</td>
		            <td>Tai</td>
		            <td>4</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;46. Đốt, sinh thiết PNS</td>
		            <td>Phẫu thuật</td>
		            <td>Mũi</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;47. Cắt bỏ pôlyp, nang</td>
		            <td>Phẫu thuật</td>
		            <td>Mũi</td>
		            <td>3</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;48. Cắt dưới niêm mạc, cắt xương xoăn 1 phần hay toàn bộ</td>
		            <td>Phẫu thuật</td>
		            <td>Mũi</td>
		            <td>10</td>
		            <td>14</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;49. Lấy bỏ dị vật trong mũi</td>
		            <td>Phẫu thuật</td>
		            <td>Mũi</td>
		            <td>4</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;50. Rửa xoang hang</td>
		            <td>Phẫu thuật</td>
		            <td>Mũi</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;51. Mở xoang hàm (phẫu thuật Caldwell Luc) một hoặc hai bên</td>
		            <td>Phẫu thuật</td>
		            <td>Mũi</td>
		            <td>14</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;52. Mở thông xoang</td>
		            <td>Phẫu thuật</td>
		            <td>Mũi</td>
		            <td>2</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;53. Soi thanh quản có làm sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Họng</td>
		            <td>2</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;54. Mở thanh quản lấy u</td>
		            <td>Phẫu thuật</td>
		            <td>Họng</td>
		            <td>20</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;55. Cắt toàn bộ thanh quản có hay không kèm theo nạo vét hạch cổ</td>
		            <td>Phẫu thuật</td>
		            <td>Họng</td>
		            <td>40</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;56. Cắt bỏ hoặc cắt bấm các dây nói</td>
		            <td>Phẫu thuật</td>
		            <td>Họng</td>
		            <td>5</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;57. VA, viêm Amidan, dẫn lưu áp xe quanh hạnh nhân</td>
		            <td>Phẫu thuật</td>
		            <td>Họng</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;58. Cắt Amidan, có hay không kèm theo nạo VA</td>
		            <td>Phẫu thuật</td>
		            <td>Họng</td>
		            <td>3</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;59. Điều trị họng hạt bằng phương pháp nhiệt</td>
		            <td>Phẫu thuật</td>
		            <td>Họng</td>
		            <td>2</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;60. Chích tháo dẫn lưu nang tuyến giáp, nang giáp lưỡi, sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Hệ thống nội tiết</td>
		            <td>2</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;61. Cắt bỏ u nang tuyến giáp, cắt eo tuyến</td>
		            <td>Phẫu thuật</td>
		            <td>Hệ thống nội tiết</td>
		            <td>10</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;62. Cắt một phần, bán phần, hoặc hầu như toàn bộ tuyến giáp</td>
		            <td>Phẫu thuật</td>
		            <td>Hệ thống nội tiết</td>
		            <td>16</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;63. Cắt toàn bộ tuyến giáp</td>
		            <td>Phẫu thuật</td>
		            <td>Hệ thống nội tiết</td>
		            <td>18</td>
		            <td>24</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;64. Cắt toàn bộ hoặc hầu như toàn bộ tuyến giáp kèm theo nạo vét triệt để hạch cổ</td>
		            <td>Phẫu thuật</td>
		            <td>Hệ thống nội tiết</td>
		            <td>37</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;65. Mở màng ngoài tim để lấy máu cục hay dị vật</td>
		            <td>Phẫu thuật</td>
		            <td>Tim</td>
		            <td>20</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;66. Cắt u trong tim có làm nối tắt</td>
		            <td>Phẫu thuật</td>
		            <td>Tim</td>
		            <td>45</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;67. Đặt máy tạo nhịp với điện cực ở lá tạng màng ngoài tim</td>
		            <td>Phẫu thuật</td>
		            <td>Tim</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;68. Xử trí vết thương tim có làm nối tắt</td>
		            <td>Phẫu thuật</td>
		            <td>Tim</td>
		            <td>35</td>
		            <td>43</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;69. Mở rộng van tim đơn thuần (nong van tim)</td>
		            <td>Phẫu thuật</td>
		            <td>Van tim</td>
		            <td>35</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;70. Mở rộng van tim có nối tắt</td>
		            <td>Phẫu thuật</td>
		            <td>Van tim</td>
		            <td>40</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;71. Tạo hình van tim có nối tắt</td>
		            <td>Phẫu thuật</td>
		            <td>Van tim</td>
		            <td>45</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;72. Đặt van đơn</td>
		            <td>Phẫu thuật</td>
		            <td>Van tim</td>
		            <td>60</td>
		            <td>72</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;73. Mở van tim đặt van kép hay tạo hình một van tim</td>
		            <td>Phẫu thuật</td>
		            <td>Van tim</td>
		            <td>65</td>
		            <td>82</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;74. Đặt van ba lá</td>
		            <td>Phẫu thuật</td>
		            <td>Van tim</td>
		            <td>80</td>
		            <td>100</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;75. Khâu tổn thương có nối tắt</td>
		            <td>Phẫu thuật</td>
		            <td>Động mạch chủ và các mạch máu lớn</td>
		            <td>35</td>
		            <td>43</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;76. Thủ thuật sau nhồi máu thông vách liên thất</td>
		            <td>Phẫu thuật</td>
		            <td>Động mạch chủ và các mạch máu lớn</td>
		            <td>63</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;77. Thắt động mạch</td>
		            <td>Phẫu thuật</td>
		            <td>Động mạch vành</td>
		            <td>24</td>
		            <td>31</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;78. Có kèm theo nối tắt</td>
		            <td>Phẫu thuật</td>
		            <td>Động mạch vành</td>
		            <td>50</td>
		            <td>62</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;79. Lấy bỏ cục máu gây tắc mạch, có nối tắt</td>
		            <td>Phẫu thuật</td>
		            <td>Động mạch phổi</td>
		            <td>45</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;80. Lấy cục nghẽn động mạch</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;81. Lấy cục máu tĩnh mạch</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>13</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;82. Thắt, cắt, rút: tĩnh mạch hiển dài giãn một bên</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>7</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;83. Thắt, cắt, rút: tĩnh mạch hiển dài giãn hai bên</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>11</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;84. Thắt, cắt, rút: tĩnh mạch hiển ngắn giãn một bên</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>6</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;85. Thắt, cắt, rút: tĩnh mạch hiển ngắn giãn hai bên</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>11</td>
		            <td>14</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;86. Thắt, cắt, rút: tĩnh mạch hiển dài và ngắn giãn một bên</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>10</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;87. Thắt, cắt, rút: tĩnh mạch hiển dài và ngắn giãn hai bên</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>15</td>
		            <td>19</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;88. Thắt và khoét bỏ các tĩnh mạch nhỏ</td>
		            <td>Phẫu thuật</td>
		            <td>Các động mạch và tĩnh mạch</td>
		            <td>2</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;89. Soi phế quản có sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>5</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;90. Cắt màng phổi thành</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>24</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;91. Cắt lá phổi</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>38</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;92. Cắt thùy, phân thùy phổi</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>32</td>
		            <td>39</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;93. Mở lá phổi dẫn lưu áp xe, nang</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>16</td>
		            <td>21</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;94. Bóc vỏ phổi</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>25</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;95. Cắt rìa lá phổi, cắt bỏ tổn thương một hay nhiều vị trí</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>25</td>
		            <td>31</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;96. Cắt có đánh sập sườn hay tạo hình thành ngực</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>37</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;97. Mở ngực có hoặc không làm sinh thiết phổi, màng phổi</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>10</td>
		            <td>14</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;98. Mở thành ngực đặt ống dẫn lưu vào bình nước</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;99. Có cắt sườn để điều trị mủ phế mạc</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>10</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;100.&nbsp;Cắt sườn đánh sập sườn</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;101.&nbsp;Mở khí quản</td>
		            <td>Phẫu thuật</td>
		            <td>Ngực - Cơ quan hô hấp</td>
		            <td>5</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;102.&nbsp;Mở ổ bụng thăm dò, thủ thuật mở bụng, thăm dò sau phúc mạc</td>
		            <td>Phẫu thuật</td>
		            <td>Bụng</td>
		            <td>12</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;103.&nbsp;Dẫn lưu áp xe trong hố phúc mạc</td>
		            <td>Phẫu thuật</td>
		            <td>Bụng</td>
		            <td>13</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;104.&nbsp;Cắt túi mật đơn thuần</td>
		            <td>Phẫu thuật</td>
		            <td>Đường dẫn mật</td>
		            <td>16</td>
		            <td>21</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;105.&nbsp;Cắt túi mật kèm theo kiểm tra đường dẫn mật (ống mật chủ…)</td>
		            <td>Phẫu thuật</td>
		            <td>Đường dẫn mật</td>
		            <td>17</td>
		            <td>23</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;106.&nbsp;Mở túi mật hoặc mở thông đường dẫn mật lấy sỏi</td>
		            <td>Phẫu thuật</td>
		            <td>Đường dẫn mật</td>
		            <td>14</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;108.&nbsp;Làm sinh thiết qua da</td>
		            <td>Phẫu thuật</td>
		            <td>Gan</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;109.&nbsp;Cắt bờ gan</td>
		            <td>Phẫu thuật</td>
		            <td>Gan</td>
		            <td>14</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;110.&nbsp;Khâu thông túi nang hoặc áp xe</td>
		            <td>Phẫu thuật</td>
		            <td>Gan</td>
		            <td>17</td>
		            <td>23</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;111.&nbsp;Cắt gan, cắt phân thùy gan</td>
		            <td>Phẫu thuật</td>
		            <td>Gan</td>
		            <td>24</td>
		            <td>31</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;112.&nbsp;Khâu gan do vết thương hay chấn thương</td>
		            <td>Phẫu thuật</td>
		            <td>Gan</td>
		            <td>17</td>
		            <td>23</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;113.&nbsp;Khâu thông túi nang, làm sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Tụy</td>
		            <td>13</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;114.&nbsp;Khâu tụy</td>
		            <td>Phẫu thuật</td>
		            <td>Tụy</td>
		            <td>18</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;115.&nbsp;Cắt tụy kèm mở thông tụy hỗng tràng</td>
		            <td>Phẫu thuật</td>
		            <td>Tụy</td>
		            <td>27</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;116.&nbsp;Kiểu Whipple</td>
		            <td>Phẫu thuật</td>
		            <td>Tụy</td>
		            <td>45</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;117.&nbsp;Khâu lách do chấn thương</td>
		            <td>Phẫu thuật</td>
		            <td>Lách</td>
		            <td>18</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;118.&nbsp;Cắt lách</td>
		            <td>Phẫu thuật</td>
		            <td>Lách</td>
		            <td>20</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;119.&nbsp;Khâu thoát vị, tạo hình thoát vị</td>
		            <td>Phẫu thuật</td>
		            <td>Thoát vị</td>
		            <td>10</td>
		            <td>14</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;120.&nbsp;Soi đại tràng làm sinh thiết, cắt bỏ pôlyp</td>
		            <td>Phẫu thuật</td>
		            <td>Nội soi</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;121.&nbsp;Soi thực quản, soi dạ dày có sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Nội soi</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;122.&nbsp;Cắt thực quản, cắt đoạn thực quản kèm theo nối dạ dày</td>
		            <td>Phẫu thuật</td>
		            <td>Thực quản</td>
		            <td>38</td>
		            <td>47</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;123.&nbsp;Mở thực quản có hoặc không kèm theo nối dạ dày</td>
		            <td>Phẫu thuật</td>
		            <td>Thực quản</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;124.&nbsp;Mở dạ dày kiểm tra hoặc lấy dị vật, khâu lổ thủng dạ dày</td>
		            <td>Phẫu thuật</td>
		            <td>Dạ dày</td>
		            <td>13</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;125.&nbsp;Cắt 3/4 hoặc 2/3 dạ dày kèm theo cắt dây thần kinh phế vị</td>
		            <td>Phẫu thuật</td>
		            <td>Dạ dày</td>
		            <td>25</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;126.&nbsp;Cắt toàn bộ dạ dày kèm theo tạo hình ghép ruột</td>
		            <td>Phẫu thuật</td>
		            <td>Dạ dày</td>
		            <td>37</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;127.&nbsp;Cắt dây phế vị và tạo hình môn vị có hay không kèm theo mở dạ dày</td>
		            <td>Phẫu thuật</td>
		            <td>Dạ dày</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;128.&nbsp;Mở ruột non kiểm tra hay để lấy dị vật, khâu lổ thủng ruột non</td>
		            <td>Phẫu thuật</td>
		            <td>Ruột non</td>
		            <td>18</td>
		            <td>24</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;129.&nbsp;Cắt đoạn ruột non, cắt đoạn đại tràng, cắt đoạn ruột non hay đại tràng</td>
		            <td>Phẫu thuật</td>
		            <td>Ruột non</td>
		            <td>20</td>
		            <td>27</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;130.&nbsp;Cắt đoạn ruột kèm theo mở đại tràng</td>
		            <td>Phẫu thuật</td>
		            <td>Ruột non</td>
		            <td>22</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;131.&nbsp;Mở đại tràng, manh tràng, hồi tràng</td>
		            <td>Phẫu thuật</td>
		            <td>Ruột non</td>
		            <td>12</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;132.&nbsp;Khâu do vết thương, cắt mạc treo ruột, mạc nối</td>
		            <td>Phẫu thuật</td>
		            <td>Ruột non</td>
		            <td>14</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;133.&nbsp;Chích áp xe dẫn lưu</td>
		            <td>Phẫu thuật</td>
		            <td>Ruột thừa</td>
		            <td>9</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;134.&nbsp;Cắt ruột thừa</td>
		            <td>Phẫu thuật</td>
		            <td>Ruột thừa</td>
		            <td>12</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;135.&nbsp;Chích dẫn lưu áp xe trên cơ nâng, quang hoặc sau trực tràng</td>
		            <td>Phẫu thuật</td>
		            <td>Trực tràng</td>
		            <td>6</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;136.&nbsp;Cắt bỏ trực tràng, cắt đường bụng – tầng sinh môn</td>
		            <td>Phẫu thuật</td>
		            <td>Trực tràng</td>
		            <td>28</td>
		            <td>36</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;137.&nbsp;Nâng trực tràng sa trễ</td>
		            <td>Phẫu thuật</td>
		            <td>Trực tràng</td>
		            <td>28</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;138.&nbsp;Khâu vết thương trực tràng</td>
		            <td>Phẫu thuật</td>
		            <td>Trực tràng</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;139.&nbsp;Chích dẫn lưu áp xe</td>
		            <td>Phẫu thuật</td>
		            <td>Hậu môn</td>
		            <td>3</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;140.&nbsp;Tạo hố xử trí áp xe quanh hậu môn</td>
		            <td>Phẫu thuật</td>
		            <td>Hậu môn</td>
		            <td>4</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;141.&nbsp;Cắt bỏ đường rò dưới da</td>
		            <td>Phẫu thuật</td>
		            <td>Hậu môn</td>
		            <td>3</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;142.&nbsp;Cắt bỏ đường rò dưới cơ</td>
		            <td>Phẫu thuật</td>
		            <td>Hậu môn</td>
		            <td>11</td>
		            <td>14</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;143.&nbsp;Cắt kẽ nứt có hoặc không kèm theo mở cơ vòng</td>
		            <td>Phẫu thuật</td>
		            <td>Hậu môn</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;144.&nbsp;Cắt trĩ nội, ngoại</td>
		            <td>Phẫu thuật</td>
		            <td>Hậu môn</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;145.&nbsp;Thắt dải cao su</td>
		            <td>Phẫu thuật</td>
		            <td>Hậu môn</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;146.&nbsp;Thắt các búi trĩ nội, ngoại</td>
		            <td>Phẫu thuật</td>
		            <td>Hậu môn</td>
		            <td>4</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;147.&nbsp;Dẫn lưu áp-xe thận, quanh thận</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;148.&nbsp;Sinh thiết qua da</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>3</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;149.&nbsp;Rạch mở để sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>8</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;150.&nbsp;Cắt bỏ nang</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>20</td>
		            <td>26</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;151.&nbsp;Phá sỏi bằng sóng xung động ngoài cơ thể</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;152.&nbsp;Khâu thận do chấn thương</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;153.&nbsp;Cắt thận một phần</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>20</td>
		            <td>24</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;154.&nbsp;Cắt bỏ thận kèm theo cắt một phần niệu quản</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;155.&nbsp;Rạch mở thận, rạch mở dài bể thận lấy sỏi</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;156.&nbsp;Rạch mở thận dẫn lưu, thăm dò</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;157.&nbsp;Ghép thận</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>35</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;158.&nbsp;Với cắt thận trên người nhận ghép 1 bên, 2 bên</td>
		            <td>Phẫu thuật</td>
		            <td>Thận</td>
		            <td>60</td>
		            <td>72</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;159.&nbsp;Mở niệu quản để kiểm tra hoặc dẫn lưu , lấy sỏi, khâu niệu quản do vết thương</td>
		            <td>Phẫu thuật</td>
		            <td>Niệu quản</td>
		            <td>20</td>
		            <td>26</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;160.&nbsp;Cắt bỏ niệu quản</td>
		            <td>Phẫu thuật</td>
		            <td>Niệu quản</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;161.&nbsp;Mở niệu đạo</td>
		            <td>Phẫu thuật</td>
		            <td>Niệu đạo</td>
		            <td>3</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;162.&nbsp;Nong đoạn niệu đạo chít hẹp</td>
		            <td>Phẫu thuật</td>
		            <td>Niệu đạo</td>
		            <td>2</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;163.&nbsp;Khâu nói niệu đạo sau</td>
		            <td>Phẫu thuật</td>
		            <td>Niệu đạo</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;164.&nbsp;Biến chứng dò, nhiễm trùng phải mổ</td>
		            <td>Phẫu thuật</td>
		            <td>Niệu đạo</td>
		            <td>15</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;165.&nbsp;Chọc hút bằng kim có nòng</td>
		            <td>Phẫu thuật</td>
		            <td>Bàng quang</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;166.&nbsp;Cắt bỏ bộ phận, toàn bộ bàng quang kèm theo sinh thiết, thủ thuật trong bàng quang, đốt nhiệt điện</td>
		            <td>Phẫu thuật</td>
		            <td>Bàng quang</td>
		            <td>25</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;167.&nbsp;Mở bàng quang đốt điện, lấy sỏi</td>
		            <td>Phẫu thuật</td>
		            <td>Bàng quang</td>
		            <td>15</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;168.&nbsp;Khâu vết thương bàng quang</td>
		            <td>Phẫu thuật</td>
		            <td>Bàng quang</td>
		            <td>12</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;169.&nbsp;Mở bàng quang dẫn lưu (dẫn lưu bàng quang trên xương mu)</td>
		            <td>Phẫu thuật</td>
		            <td>Bàng quang</td>
		            <td>5</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;170.&nbsp;Soi bàng quang niệu đạo làm sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Bàng quang</td>
		            <td>3</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;171.&nbsp;Thụt tháo sỏi nghiền</td>
		            <td>Phẫu thuật</td>
		            <td>Bàng quang</td>
		            <td>11</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;172.&nbsp;Rạch tháo dẫn lưu áp-xe hay làm sinh thiết tầng sinh môn</td>
		            <td>Phẫu thuật</td>
		            <td>Cơ quan sinh dục nữ</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;173.&nbsp;Rạch tháo nang tuyến Bartholin</td>
		            <td>Phẫu thuật</td>
		            <td>Âm hộ và đường vào âm đạo</td>
		            <td>2</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;174.&nbsp;Khâu thông túi</td>
		            <td>Phẫu thuật</td>
		            <td>Âm hộ và đường vào âm đạo</td>
		            <td>4</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;175.&nbsp;Cắt bỏ tuyến, u tuyến Bartholin</td>
		            <td>Phẫu thuật</td>
		            <td>Âm hộ và đường vào âm đạo</td>
		            <td>5</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;176.&nbsp;Sinh thiết niêm mạc âm đạo</td>
		            <td>Phẫu thuật</td>
		            <td>Âm đạo</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;177.&nbsp;Mở âm đạo thăm dò</td>
		            <td>Phẫu thuật</td>
		            <td>Âm đạo</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;178.&nbsp;Cắt mở âm đạo bị cắt hoàn toàn</td>
		            <td>Phẫu thuật</td>
		            <td>Âm đạo</td>
		            <td>12</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;179.&nbsp;Khâu âm đạo trước điều trị thoát vị bàng quang có / không có sa niệu đạo</td>
		            <td>Phẫu thuật</td>
		            <td>Âm đạo</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;180.&nbsp;Khâu âm đạo sau điều trị sa trực tràng</td>
		            <td>Phẫu thuật</td>
		            <td>Âm đạo</td>
		            <td>6</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;181.&nbsp;Khâu âm đạo trước/sau kết hợp</td>
		            <td>Phẫu thuật</td>
		            <td>Âm đạo</td>
		            <td>13</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;182.&nbsp;Điều trị thoát vị thành âm đạo sau (qua đường bụng)</td>
		            <td>Phẫu thuật</td>
		            <td>Âm đạo</td>
		            <td>15</td>
		            <td>19</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;183.&nbsp;Làm sinh thiết hay cắt bỏ, tổn thương,đốt điện áp lạnh,điều trị laser</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ tử cung</td>
		            <td>2</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;184.&nbsp;Sửa chữa mỏm cụt cổ tử cung</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ tử cung</td>
		            <td>7</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;185.&nbsp;Làm sinh thiết màng trong tử cung</td>
		            <td>Phẫu thuật</td>
		            <td>Thân tử cung</td>
		            <td>1</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;186.&nbsp;Cắt bỏ u xơ,cắt u đơn hoặc nhiều u qua đường bụng</td>
		            <td>Phẫu thuật</td>
		            <td>Thân tử cung</td>
		            <td>16</td>
		            <td>21</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;187.&nbsp;Cắt bỏ toàn bộ tử cung qua đường bụng có hoặc không kèm theo vòi hoặc buồng trứng 1 hoặc 2 bên</td>
		            <td>Phẫu thuật</td>
		            <td>Thân tử cung</td>
		            <td>20</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;188.&nbsp;Cắt ngang ống dẫn trứng 1 hoặc 2 bên</td>
		            <td>Phẫu thuật</td>
		            <td>Ống dẫn trứng</td>
		            <td>11</td>
		            <td>14</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;189.&nbsp;Cắt bỏ hoàn toàn vòi-buồng trứng 1 hoặc 2 bên</td>
		            <td>Phẫu thuật</td>
		            <td>Ống dẫn trứng</td>
		            <td>13</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;190.&nbsp;Dẫn lưu nang, áp xe buồng trứng 1 hoặc 2 bên qua đường âm đạo</td>
		            <td>Phẫu thuật</td>
		            <td>Buồng trứng</td>
		            <td>5</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;191.&nbsp;Dẫn lưu nang, áp xe buồng trứng 1 hoặc 2 bên qua đường bụng</td>
		            <td>Phẫu thuật</td>
		            <td>Buồng trứng</td>
		            <td>14</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;192.&nbsp;Cắt bỏ buồng trứng kèm theo cắt mạc nối</td>
		            <td>Phẫu thuật</td>
		            <td>Buồng trứng</td>
		            <td>16</td>
		            <td>21</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;193.&nbsp;Soi ổ bụng kèm theo đốt điện thương tổn gỡ dính</td>
		            <td>Phẫu thuật</td>
		            <td>Buồng trứng</td>
		            <td>7</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;194.&nbsp;Sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Dương vật</td>
		            <td>1</td>
		            <td>1</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;195.&nbsp;Cắt bao quy đầu</td>
		            <td>Phẫu thuật</td>
		            <td>Dương vật</td>
		            <td>3</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;196.&nbsp;Cắt bỏ các vết loét</td>
		            <td>Phẫu thuật</td>
		            <td>Dương vật</td>
		            <td>8</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;197.&nbsp;Phẫu thuật điều trị giãn tĩnh mạch thừng tinh, cắt bỏ u nang thừng tinh</td>
		            <td>Phẫu thuật</td>
		            <td>Thừng tinh</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;198.&nbsp;Hút, chích dẫn lưu tràn dịch màng tinh hoàn, sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Tinh hoàn</td>
		            <td>1</td>
		            <td>1</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;199.&nbsp;Cắt bỏ tổn thương cục bộ, phẫu thuật lộn màng tinh hoàn</td>
		            <td>Phẫu thuật</td>
		            <td>Tinh hoàn</td>
		            <td>7</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;200.&nbsp;Cắt bỏ 1 tinh hoàn</td>
		            <td>Phẫu thuật</td>
		            <td>Tinh hoàn</td>
		            <td>7</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;201.&nbsp;Cắt bỏ 2 tinh hoàn</td>
		            <td>Phẫu thuật</td>
		            <td>Tinh hoàn</td>
		            <td>10</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;202.&nbsp;Làm sinh thiết bằng kim, kim bấm</td>
		            <td>Phẫu thuật</td>
		            <td>Tuyến tiền liệt</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;203.&nbsp;Rạch mở tuyến</td>
		            <td>Phẫu thuật</td>
		            <td>Tuyến tiền liệt</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;204.&nbsp;Cắt bỏ tuyến, dẫn lưu áp xe tuyến</td>
		            <td>Phẫu thuật</td>
		            <td>Tuyến tiền liệt</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;205.&nbsp;Cắt bỏ tuyến, cắt đại bộ phận hoặc toàn bộ</td>
		            <td>Phẫu thuật</td>
		            <td>Tuyến tiền liệt</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;206.&nbsp;Hút thai</td>
		            <td>Phẫu thuật</td>
		            <td>Hộ sinh (Nếu có thể áp dụng)</td>
		            <td>2</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;207.&nbsp;Nạo thai (kể cả trường hợp sau sẩy thai)</td>
		            <td>Phẫu thuật</td>
		            <td>Hộ sinh (Nếu có thể áp dụng)</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;208.&nbsp;Phá thai bằng phương pháp đặt túi nước</td>
		            <td>Phẫu thuật</td>
		            <td>Hộ sinh (Nếu có thể áp dụng)</td>
		            <td>6</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;209.&nbsp;Không phải cắt tầng sinh môn</td>
		            <td>Phẫu thuật</td>
		            <td>Đẻ thường</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;210.&nbsp;Có phải cắt tầng sinh môn</td>
		            <td>Phẫu thuật</td>
		            <td>Đẻ thường</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;211.&nbsp;Đẻ có phải can thiệp bằng For-ceps</td>
		            <td>Phẫu thuật</td>
		            <td>Đẻ thường</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;212.&nbsp;Mổ lấy thai qua đường rạch cổ tử cung thấp (kinh điển)</td>
		            <td>Phẫu thuật</td>
		            <td>Đẻ thường</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;213.&nbsp;Mổ lấy thai chửa ngoài dạ con</td>
		            <td>Phẫu thuật</td>
		            <td>Đẻ thường</td>
		            <td>16</td>
		            <td>31</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;214.&nbsp;Mở cổ tử cung, nạo thai chửa trứng</td>
		            <td>Phẫu thuật</td>
		            <td>Đẻ thường</td>
		            <td>6</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;215.&nbsp;Lấy thai chửa trứng qua đường mở ổ bụng, rạch mở tử cung</td>
		            <td>Phẫu thuật</td>
		            <td>Đẻ thường</td>
		            <td>16</td>
		            <td>21</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;216.&nbsp;Cắt bỏ tử cung có thai bên trong, cắt toàn bộ / hầu như toàn bộ</td>
		            <td>Phẫu thuật</td>
		            <td>Đẻ thường</td>
		            <td>20</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;217.&nbsp;Cắt xương cánh tay, xương quay và xương trụ</td>
		            <td>Phẫu thuật</td>
		            <td>Cắt cụt&nbsp; và tháo khớp</td>
		            <td>15</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;218.&nbsp;Cắt ngón tay, cắt ngang khớp bao gồm cắt dây thần kinh</td>
		            <td>Phẫu thuật</td>
		            <td>Cắt cụt&nbsp; và tháo khớp</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;219.&nbsp;Cắt bàn tay hay bàn chân</td>
		            <td>Phẫu thuật</td>
		            <td>Cắt cụt&nbsp; và tháo khớp</td>
		            <td>2</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;220.&nbsp;Cắt cụt qua háng, chậu hông-bụng</td>
		            <td>Phẫu thuật</td>
		            <td>Cắt cụt&nbsp; và tháo khớp</td>
		            <td>70</td>
		            <td>80</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;221.&nbsp;Cắt cụt cẳng chân, qua xương chày và xương mác với kỹ thuật sửa chữa cho tiện sử dụng chi</td>
		            <td>Phẫu thuật</td>
		            <td>Cắt cụt&nbsp; và tháo khớp</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;222.&nbsp;Cắt cụt xương đùi ở bất kỳ vị trí nào</td>
		            <td>Phẫu thuật</td>
		            <td>Cắt cụt&nbsp; và tháo khớp</td>
		            <td>16</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;223.&nbsp;Chỉnh kín khớp thái dương-hàm dưới</td>
		            <td>Phẫu thuật</td>
		            <td>Hàm</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;224.&nbsp;Chỉnh ngỏ khớp có cố định răng 2 hàm</td>
		            <td>Phẫu thuật</td>
		            <td>Hàm</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;225.&nbsp;Chỉnh kín khớp ức đòn trật</td>
		            <td>Phẫu thuật</td>
		            <td>Vai</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;226.&nbsp;Chỉnh ngỏ khớp vai trật kín hoặc hở tạo hình ghép</td>
		            <td>Phẫu thuật</td>
		            <td>Vai</td>
		            <td>14</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;227.&nbsp;Chỉnh khớp bảo tồn (kín)</td>
		            <td>Phẫu thuật</td>
		            <td>Khủyu tay</td>
		            <td>2</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;228.&nbsp;Chỉnh ngỏ khớp trật kín hay hở</td>
		            <td>Phẫu thuật</td>
		            <td>Khủyu tay</td>
		            <td>13</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;229.&nbsp;Chỉnh kín cổ tay trật khớp</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ tay</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;230.&nbsp;Chỉnh ngỏ khớp cổ tay trật kín hay hở</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ tay</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;231.&nbsp;Chỉnh khớp kín</td>
		            <td>Phẫu thuật</td>
		            <td>Các ngón tay</td>
		            <td>2</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;232.&nbsp;Chỉnh ngỏ khớp trật kín hay hở</td>
		            <td>Phẫu thuật</td>
		            <td>Các ngón tay</td>
		            <td>7</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;233.&nbsp;Trật khớp háng chỉnh bảo tồn (kín)</td>
		            <td>Phẫu thuật</td>
		            <td>Háng</td>
		            <td>5</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;234.&nbsp;Chỉnh ngỏ khớp trật có cố định đầu xương đùi vào ổ cối</td>
		            <td>Phẫu thuật</td>
		            <td>Háng</td>
		            <td>28</td>
		            <td>36</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;235.&nbsp;Chỉnh kín khớp gối trật</td>
		            <td>Phẫu thuật</td>
		            <td>Khớp gối</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;236.&nbsp;Chỉnh ngỏ khớp gối trật kín hay hở</td>
		            <td>Phẫu thuật</td>
		            <td>Khớp gối</td>
		            <td>20</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;237.&nbsp;Chỉnh kín bánh chè trật khớp</td>
		            <td>Phẫu thuật</td>
		            <td>Bánh chè</td>
		            <td>2</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;238.&nbsp;Chỉnh ngỏ bánh chè trật,có/không cắt bỏ xương bánh chè</td>
		            <td>Phẫu thuật</td>
		            <td>Bánh chè</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;239.&nbsp;Chỉnh khớp bảo tồn (kín)</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ chân</td>
		            <td>2</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;240.&nbsp;Chỉnh ngỏ khớp trật kín hay hở</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ chân</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;241.&nbsp;Chỉnh kín xương ngón chân trật khớp</td>
		            <td>Phẫu thuật</td>
		            <td>Ngón chân</td>
		            <td>3</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;242.&nbsp;Chỉnh ngỏ xương ngón chân trật khớp kín hay hở</td>
		            <td>Phẫu thuật</td>
		            <td>Ngón chân</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;243.&nbsp;Chỉnh kín xương gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương cánh tay</td>
		            <td>5</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;244.&nbsp;Chỉnh ngỏ xương gãy kín hay hở,có/không cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương cánh tay</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;245.&nbsp;Chỉnh kín khuỷu gãy vụn thành nhiều mảnh</td>
		            <td>Phẫu thuật</td>
		            <td>Khuỷu tay</td>
		            <td>9</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;246.&nbsp;Chỉnh ngỏ khuỷu gãy kín hay hở, có / không cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Khuỷu tay</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;247.&nbsp;Chỉnh kín xương gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương quay</td>
		            <td>4</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;248.&nbsp;Chỉnh ngỏ xương gãy kín hay hở, có / không cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương quay</td>
		            <td>13</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;249.&nbsp;Chỉnh kín xương gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương trụ</td>
		            <td>4</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;250.&nbsp;Chỉnh ngỏ xương gãy kín hay hở, có / không cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương trụ</td>
		            <td>10</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;251.&nbsp;Chỉnh kín xương gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương trụ và xương quay</td>
		            <td>7</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;252.&nbsp;Chỉnh ngỏ xương gãy kín hay hở, có cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương trụ và xương quay</td>
		            <td>20</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;253.&nbsp;Gãy kiểu Colles hay Smith,chỉnh kín</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ tay</td>
		            <td>5</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;254.&nbsp;Xương gãy phức tạp phải cố định ngoại vi đóng xuyên đinh</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ tay</td>
		            <td>10</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;255.&nbsp;Lấy bỏ các mảnh ghép nằm nông</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ tay</td>
		            <td>2</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;256.&nbsp;Lấy bỏ các mảnh ghép nằm sâu</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ tay</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;257.&nbsp;Chỉnh kín xương ngón gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Các ngón tay</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;258.&nbsp;Chỉnh ngỏ xương gãy, có / không cố định xương</td>
		            <td>Phẫu thuật</td>
		            <td>Các ngón tay</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;259.&nbsp;Chỉnh kín xương gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương đùi</td>
		            <td>10</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;260.&nbsp;Chỉnh ngỏ xương gãy, có/không cố định trên xương kèm theo</td>
		            <td>Phẫu thuật</td>
		            <td>Xương đùi</td>
		            <td>24</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;261.&nbsp;Chỉnh ngỏ</td>
		            <td>Phẫu thuật</td>
		            <td>Bánh chè</td>
		            <td>5</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;262.&nbsp;Chỉnh kín xương chày gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương chày</td>
		            <td>7</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;263.&nbsp;Chỉnh ngỏ xương chày gãy kín hay hở cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương chày</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;264.&nbsp;Chỉnh kín xương gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương mác</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;265.&nbsp;Chỉnh ngỏ xương gãy kín hay hở</td>
		            <td>Phẫu thuật</td>
		            <td>Xương mác</td>
		            <td>9</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;266.&nbsp;Chỉnh kín hai xương gãy có không kèm theo xuyên đinh</td>
		            <td>Phẫu thuật</td>
		            <td>Xương chày và xương mác</td>
		            <td>12</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;267.&nbsp;Chỉnh ngỏ hai xương&nbsp; gãy kín hay hở cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương chày và xương mác</td>
		            <td>19</td>
		            <td>24</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;268.&nbsp;Chỉnh kín</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ chân&nbsp;(xương gót, xương sên, xương thuyền)</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;269.&nbsp;Chỉnh ngỏ xương gãy kín hay hở có cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ chân&nbsp;(xương gót, xương sên, xương thuyền)</td>
		            <td>12</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;270.&nbsp;Chỉnh kín sụn bàn chân, xương bàn chân gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Bàn chân</td>
		            <td>3</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;271.&nbsp;Chỉnh kín hàm dưới gãy kèm theo cố định 2 cung răng</td>
		            <td>Phẫu thuật</td>
		            <td>Xương hàm</td>
		            <td>9</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;272.&nbsp;Chỉnh ngỏ xương hàm gãy kèm theo có cố định 2 cung răng</td>
		            <td>Phẫu thuật</td>
		            <td>Xương hàm</td>
		            <td>22</td>
		            <td>28</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;273.&nbsp;Chỉnh kín xương gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương đòn</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;274.&nbsp;Chỉnh ngỏ xương đòn gãy kín hay hở có / không cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương đòn</td>
		            <td>11</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;275.&nbsp;Chỉnh kín xương bả gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Xương bả</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;276.&nbsp;Chỉnh ngỏ xương gãy có / không kèm theo cố định trên xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương bả</td>
		            <td>15</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;277.&nbsp;Gãy 1 sườn</td>
		            <td>Phẫu thuật</td>
		            <td>Xương sườn</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;278.&nbsp;Gãy từ 2 sườn trở lên</td>
		            <td>Phẫu thuật</td>
		            <td>Xương sườn</td>
		            <td>4</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;a. Đi đường vào phía sau</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>36</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;b. Đi dường vào phía trước,có ghép xương mào chậu hoặc xương khác</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>38</td>
		            <td>48</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;280.&nbsp;Cắt, nạo bỏ nang, u xương lành</td>
		            <td>Phẫu thuật</td>
		            <td>Xương cánh tay</td>
		            <td>12</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;281.&nbsp;Khuỷu tạo hình đầu xương quay có dùng mảnh ghép</td>
		            <td>Phẫu thuật</td>
		            <td>Xương cánh tay</td>
		            <td>13</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;282.&nbsp;Cắt, nạo bỏ nang, u xương lành có ghép xương tự thân</td>
		            <td>Phẫu thuật</td>
		            <td>Bàn ngón tay</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;283.&nbsp;Cắt, bỏ nang, u xương lành, xương chậu ở nông, có / không kèm theo ghép xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương chân</td>
		            <td>6</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;284.&nbsp;Tạo hình khớp háng, ổ cối</td>
		            <td>Phẫu thuật</td>
		            <td>Háng</td>
		            <td>37</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;285.&nbsp;Đặt ổ cối và đầu cận xương đùi nhân tạo</td>
		            <td>Phẫu thuật</td>
		            <td>Háng</td>
		            <td>40</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;286.&nbsp;Cắt, đục xương chậu, ổ cối</td>
		            <td>Phẫu thuật</td>
		            <td>Háng</td>
		            <td>20</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;287.&nbsp;Đóng cứng khớp háng có đục xương đùi dưới mấu chuyển</td>
		            <td>Phẫu thuật</td>
		            <td>Háng</td>
		            <td>40</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;288.&nbsp;Lấy nang xương, u lành có/không kèm theo ghép xương</td>
		            <td>Phẫu thuật</td>
		            <td>Xương đùi</td>
		            <td>13</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;289.&nbsp;Có kém xương tự thân</td>
		            <td>Phẫu thuật</td>
		            <td>Xương đùi</td>
		            <td>20</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;290.&nbsp;Khâu dây chằng xương bánh chè kỳ đầu, kéo dài, gân bị co ngắn ở 1 chi</td>
		            <td>Phẫu thuật</td>
		            <td>Khớp gối</td>
		            <td>10</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;291.&nbsp;Tái tạo kỳ đầu dây chằng bên rách, đứt có / không kèm theo cắt bỏ đĩa đệm</td>
		            <td>Phẫu thuật</td>
		            <td>Khớp gối</td>
		            <td>18</td>
		            <td>23</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;292.&nbsp;Mở nối bao khớp phía sau</td>
		            <td>Phẫu thuật</td>
		            <td>Khớp gối</td>
		            <td>18</td>
		            <td>23</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;293.&nbsp;Nối gân Achille kỳ đầu</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ chân</td>
		            <td>14</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;294.&nbsp;Nối dây chằng bên cổ chân bị rách, đứt</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ chân</td>
		            <td>13</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;295.&nbsp;Nối cả 2 dây chằng bên</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ chân</td>
		            <td>18</td>
		            <td>23</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;296.&nbsp;Cắt bỏ chai phồng ngón chân cái, cắt gai xương</td>
		            <td>Phẫu thuật</td>
		            <td>Cổ chân</td>
		            <td>4</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;298.&nbsp;Chích dẫn lưu đinh, nhọt</td>
		            <td>Phẫu thuật</td>
		            <td>Ap xe</td>
		            <td>1</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;299.&nbsp;Cắt bỏ</td>
		            <td>Phẫu thuật</td>
		            <td>Tổn thương lành tính</td>
		            <td>1</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;300.&nbsp;Khoét, nạo có/không kèm theo đốt điện</td>
		            <td>Phẫu thuật</td>
		            <td>Tổn thương lành tính</td>
		            <td>1</td>
		            <td>1</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;301.&nbsp;Cắt bỏ</td>
		            <td>Phẫu thuật</td>
		            <td>Tổn thương ác tính</td>
		            <td>4</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;302.&nbsp;Làm sinh thiết da, tổ chức dưới da, bao gồm đóng vết mổ</td>
		            <td>Phẫu thuật</td>
		            <td>Tổn thương ác tính</td>
		            <td>1</td>
		            <td>1</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;303.&nbsp;Chích dẫn lưu nang nhiễm trùng hoặc không nhiễm trùng</td>
		            <td>Phẫu thuật</td>
		            <td>Nang</td>
		            <td>1</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;304.&nbsp;Khoét bỏ nang, lấy vỏ nang và xử lý hốc tổn thương</td>
		            <td>Phẫu thuật</td>
		            <td>Nang</td>
		            <td>2</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;305.&nbsp;Chích dẫn lưu, cắt bỏ</td>
		            <td>Phẫu thuật</td>
		            <td>Bọc hoặc nang cụm lông</td>
		            <td>2</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;306.&nbsp;Cắt bỏ</td>
		            <td>Phẫu thuật</td>
		            <td>Hạch</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;307.&nbsp;Làm sinh thiết: cắt bỏ hạch ở nông</td>
		            <td>Phẫu thuật</td>
		            <td>Hạch bạch huyết</td>
		            <td>2</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;308.&nbsp;Làm sinh thiết: cắt bỏ hạch ở sâu</td>
		            <td>Phẫu thuật</td>
		            <td>Hạch bạch huyết</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;309.&nbsp;Tháo, cắt bộ phận móng</td>
		            <td>Phẫu thuật</td>
		            <td>Móng</td>
		            <td>1</td>
		            <td>1</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;310.&nbsp;Khoét bỏ móng lẫn chân nuôi dương bộ phận hay toàn bộ</td>
		            <td>Phẫu thuật</td>
		            <td>Móng</td>
		            <td>2</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;311.&nbsp;Vật hình trụ da và tổ chức dưới da</td>
		            <td>Phẫu thuật</td>
		            <td>Các vật có chân nuôi</td>
		            <td>11</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;312.&nbsp;Đơn giản</td>
		            <td>Phẫu thuật</td>
		            <td>Tạo hình</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;313.&nbsp;Trung bình</td>
		            <td>Phẫu thuật</td>
		            <td>Tạo hình</td>
		            <td>4</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;314.&nbsp;Phức tạp</td>
		            <td>Phẫu thuật</td>
		            <td>Tạo hình</td>
		            <td>6</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;315.&nbsp;Ở thân</td>
		            <td>Phẫu thuật</td>
		            <td>Lấy chuyển hoặc xoay chuyển tổ chức</td>
		            <td>6</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;316.&nbsp;Da đầu, tay, chân</td>
		            <td>Phẫu thuật</td>
		            <td>Lấy chuyển hoặc xoay chuyển tổ chức</td>
		            <td>8</td>
		            <td>11</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;317.&nbsp;Trán, mí mắt, mũi, má, môi, cằm, tai, cổ, nách, cơ quan sinh dục, bàn tay và bàn chân</td>
		            <td>Phẫu thuật</td>
		            <td>Lấy chuyển hoặc xoay chuyển tổ chức</td>
		            <td>11</td>
		            <td>14</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;318.&nbsp;Rạch áp xe, làm sinh thiết</td>
		            <td>Phẫu thuật</td>
		            <td>Vú</td>
		            <td>3</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;319.&nbsp;Cắt bỏ nang, u xơ tuyến lành tính, tổ chức lạc chỗ, tổn thương núm vú trên bệnh nhân nam/nữ cắt ở một hay nhiều vị trí</td>
		            <td>Phẫu thuật</td>
		            <td>Vú</td>
		            <td>5</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;320.&nbsp;Cắt bỏ tuyến vú hoàn toàn: 1 bên</td>
		            <td>Phẫu thuật</td>
		            <td>Vú</td>
		            <td>9</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;321.&nbsp;Cắt bỏ tuyến vú hoàn toàn: 2 bên</td>
		            <td>Phẫu thuật</td>
		            <td>Vú</td>
		            <td>13</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>&nbsp;322.&nbsp;Cắt triệt để vú, cơ ngực và nạo vét hạch nách</td>
		            <td>Phẫu thuật</td>
		            <td>Vú</td>
		            <td>16</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>1. Mù hoặc mất hoàn toàn hai mắt</td>
		            <td>Vĩnh viễn</td>
		            <td>Thương tật toàn bộ</td>
		            <td>100</td>
		            <td>100</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>2. Rối loạn tâm thần hoàn toàn không thể chữa được</td>
		            <td>Vĩnh viễn</td>
		            <td>Thương tật toàn bộ</td>
		            <td>100</td>
		            <td>100</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>3. Hỏng toàn bộ chức năng nhai và nói</td>
		            <td>Vĩnh viễn</td>
		            <td>Thương tật toàn bộ</td>
		            <td>100</td>
		            <td>100</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>4. Mất hoặc liệt hoàn toàn 2 tay (từ vai hoặc khuỷu xuống) hoặc 2 chân (từ háng hoặc đầu gối xuống)</td>
		            <td>Vĩnh viễn</td>
		            <td>Thương tật toàn bộ</td>
		            <td>100</td>
		            <td>100</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>5. Mất cả 2 bàn tay hoặc 2 bàn chân, hoặc mất 1 cánh tay và 1 bàn&nbsp; chân, hoặc mất 1 cánh tay và 1 cẳng chân, hoặc 1 bàn tay và 1 cẳng chân, hoặc 1 bàn tay và 1 bàn chân</td>
		            <td>Vĩnh viễn</td>
		            <td>Thương tật toàn bộ</td>
		            <td>100</td>
		            <td>100</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>6. Cắt toàn bộ 1 bên phổi và 1 phần phổi bên kia</td>
		            <td>Vĩnh viễn</td>
		            <td>Thương tật toàn bộ</td>
		            <td>100</td>
		            <td>100</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>7. Mất hoàn toàn khả năng lao động mà không thể làm bất cứ việc gì (toàn bộ bị tê liệt, bị thương dẫn đến tình trạng nằm liệt giường hoặc dẫn đến tàn tật toàn bộ vĩnh viễn)</td>
		            <td>Vĩnh viễn</td>
		            <td>Thương tật toàn bộ</td>
		            <td>100</td>
		            <td>100</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>8. Mất 1 cánh tay từ vai xuống (tháo khớp vai)</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>80</td>
		            <td>80</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>9. Cắt cụt cánh tay từ dưới vai xuống</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>10. Cắt cụt 1 cánh tay từ khuỷu xuống (tháo khớp khuỷu)</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>70</td>
		            <td>70</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>11. Mất trọn 1 bàn tay hoặc cả 5 ngón tay</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>12. Mất đồng thời cả 4 ngón tay (trừ ngón cái)</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>45</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>13. Mất đồng thời cả ngón cái và ngón trỏ</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>14. Mất 3 ngón 3 - 4 - 5</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>32</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>15. Mất ngón cái và 2 ngón khác</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>37</td>
		            <td>37</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>16. Mất ngón cái và 1 ngón khác</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>32</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>17. Mất ngón trỏ và 2 ngón khác</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>37</td>
		            <td>37</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>18. Mất ngón trỏ và 1 ngón giữa</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>32</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>19. Mất trọn ngón cái và đốt bàn</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>27</td>
		            <td>27</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất trọn ngón cái</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>22</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất cả đốt ngoài</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất ½ đốt ngoài</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>8</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>20. Mất ngón trỏ và đốt bàn</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>22</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất ngón trỏ</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất 2 đốt 2 và 3</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất đốt 3</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>9</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>21. Mất trọn ngón giữa hoặc ngón nhẫn (cả đốt bàn)</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất trọn ngón giữa hoặc ngón nhẫn</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>17</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất 2 đốt 2 và 3</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất đốt 3</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>5</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>22. Mất cả ngón út và đốt bàn</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>17</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất cả ngón út</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất 2 đốt 2 và 3</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>9</td>
		            <td>9</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mất đốt 3</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>5</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>23. Cứng khớp bả vai</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>24. Cứng khớp khuỷu tay</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>25. Cứng khớp cổ tay</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Trên (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>26. Gãy tay can lệch hoặc mất xương làm chi ngắn trên 3 cm và chức năng quay sấp ngửa hạn chế hoặc tạo thành khớp giả</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>27. Gãy xương cánh tay ở cổ giải phẫu, không phẫu thuật, can tốt, cử động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>28. Gãy xương cánh tay ở cổ giải phẫu, không phẫu thuật, can xấu, hạn chế cử động khớp vai</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>29. Gãy xương cánh tay ở cổ giải phẫu, có phẫu thuật, can tốt, cử động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>30. Gãy xương cánh tay ở cổ giải phẫu, có phẫu thuật, can xấu, hạn chế cử động khớp vai</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>31. Gãy xương cánh tay, không phẫu thuật, can tốt, cử động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>32. Gãy xương cánh tay, có phẫu thuật, can tốt, cử động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>33. Gãy xương cánh tay, không phẫu thuật, can xấu, teo cơ</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>34. Gãy xương cánh tay, có phẫu thuật, can xấu, teo cơ</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>35. Gãy 2 xương cẳng tay, không phẫu thuật, can tốt, cử động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>36. Gãy 2 xương cẳng tay, có phẫu thuật, can tốt, cử động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>18</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>37. Gãy 2 xương cẳng tay, không phẫu thuật, can xấu, hạn chế cử động sấp ngửa</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>38. Gãy 2 xương cẳng tay, có phẫu thuật, can xấu, hạn chế cử động sấp ngửa</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>39. Gãy 1 xương quay hoặc trụ, không phẫu thuật, can tốt, cử động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>40. Gãy 1 xương quay hoặc trụ, có phẫu thuật, can tốt , cử động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>41. Gãy 1 xương quay hoặc trụ, không phẫu thuật, can xấu, hạn chế cử động sấp ngửa</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>42. Gãy 1 xương quay hoặc trụ, có phẫu thuật, can xấu, hạn chế cử động sấp ngửa</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>43. Gãy 2 xương cẳng tay, không phẫu thuật, di chứng khớp giả 2 xương</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>44. Gãy 2 xương cẳng tay, có phẫu thuật, di chứng khớp giả 2 xương</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>45. Gãy 2 xương cẳng tay, không phẫu thuật, di chứng khớp giả 1 xương</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>46. Gãy 2 xương cẳng tay, có phẫu thuật, di chứng khớp giả 1 xương</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>47. Gãy đầu dưới xương quay, không phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>48. Gãy đầu dưới xương quay, có phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>14</td>
		            <td>14</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>49. Gãy đầu dưới xương quay, không phẫu thuật, can xấu, hạn chế động tác cổ tay</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>50. Gãy đầu dưới xương quay, có phẫu thuật, can xấu, hạn chế động tác cổ tay</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>18</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>51. Gãy mỏm trâm quay hoặc trụ, không phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>8</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>52. Gãy mỏm trâm quay hoặc trụ, có phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>53. Gãy mỏm trâm quay hoặc trụ, không phẫu thuật, can xấu, hạn chế động tác cổ tay</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>54. Gãy mỏm trâm quay hoặc trụ, có phẫu thuật, can xấu, hạn chế động tác cổ tay</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>55. Gãy xương cổ tay, không phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>56. Gãy xương cổ tay, có phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>13</td>
		            <td>13</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>57. Gãy xương cổ tay, không phẫu thuật, can xấu, hạn chế động tác cổ tay</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>58. Gãy xương cổ tay, có phẫu thuật, can xấu, hạn chế động tác cổ tay</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>18</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>59. Gãy xương đốt bàn (tùy mức độ từ 1 đến nhiều đốt, mỗi đốt tăng thêm tương ứng 2)</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>8</td>
		            <td>16</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>60. Gãy xương đòn, không phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>8</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>61. Gãy xương đòn, có phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>62. Gãy xương đòn không phẫu thuật, can gồ, cứng vai</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>18</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>63. Gãy xương đòn, có phẫu thuật, can gồ, cứng vai</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>64. Gãy xương đòn, không phẫu thuật, có chèn ép thần kinh mũ vai</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>65. Gãy xương đòn, có phẫu thuật, có chèn ép thần kinh mũ vai</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>66. Gãy xương bả vai, gãy vỡ, khuyết phần thân xương, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>67. Gãy xương bả vai, gãy vỡ, khuyết phần thân xương, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>68. Gãy xương bả vai, gãy vỡ ngành ngang, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>17</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>69. Gãy xương bả vai, gãy vỡ ngành ngang, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>22</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>70. Gãy xương bả vai, gãy vỡ phần khớp vai, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>71. Gãy xương bả vai, gãy vỡ phần khớp vai, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>72. Gãy xương ngón tay (tùy mức độ từ 1 đến nhiều ngón, mỗi ngón tăng thêm tương ứng 3)</td>
		            <td>Tạm thời</td>
		            <td>Chi Trên (tt)</td>
		            <td>3</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>73. Mất 1 chân từ háng xuống (tháo khớp háng 1 đùi)</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>80</td>
		            <td>80</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>74. Cắt cụt 1 đùi</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;1/3 trên</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;1/3 giữa hoặc dưới</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>75. Cắt cụt 1 chân từ gối xuống (tháo khớp gối)</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>76. Tháo khớp cổ chân hoặc mất 1 bàn chân</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>60</td>
		            <td>60</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>77. Mất xương sên</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>37</td>
		            <td>37</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>78. Mất xương gót</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>79. Mất đoạn xương chày, mác gây khớp giả cẳng chân</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>80. Mất đoạn xương mác</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>81. Mất mắt cá chân</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mắt cá ngoài</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;Mắt cá trong</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>17</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>82. Mất cả 5 ngón chân</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>83. Mất 4 ngón cả ngón cái</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>42</td>
		            <td>42</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>84. Mất 4 ngón trừ ngón cái</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>85. Mất 3 ngón 3 - 4 - 5</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>27</td>
		            <td>27</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>86. Mất 3 ngón 1 - 2 - 3</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>32</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>87. Mất 1 ngón cái và ngón 2</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>22</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>88. Mất 1 ngón cái</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>17</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>89. Mất 1 ngón ngoài ngón cái</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>90. Mất 1 đốt ngón cái</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>91. Cứng khớp háng</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>92. Cứng khớp gối</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>93. Mất phần lớn xương bánh chè và giới hạn nhiều khả năng duỗi cẳng chân trên đùi</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>94. Gãy chân can lệch hoặc mất xương làm ngắn chi</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;ít nhất 5 cm</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>42</td>
		            <td>42</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;từ 3 - 5 cm</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>37</td>
		            <td>37</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>95. Liệt hoàn toàn dây thần kinh hông khoeo ngoài</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>96. Liệt hoàn toàn dây thần kinh hông khoeo trong</td>
		            <td>Vĩnh viễn</td>
		            <td>Chi Dưới (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>97. Gãy xương đùi 1/3 giữa hoặc dưới, không phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>98. Gãy xương đùi 1/3 giữa hoặc dưới, có phẫu thuật, can tốt, củ động bình thường</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>99. Gãy xương đùi 1/3 giữa hoặc dưới, không phẫu thuật, can xấu, trục lệch, chân dạng hoặc khép, teo cơ</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>100.&nbsp;Gãy xương đùi 1/3 giữa hoặc dưới, có phẫu thuật, can xấu, trục lệch, chân dạng hoặc khép, teo cơ</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>101.&nbsp;Gãy 1/3 trên hay cổ xương đùi, không phẫu thuật, can tốt, trục thẳng</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>102.&nbsp;Gãy 1/3 trên hay cổ xương đùi, có phẫu thuật, can tốt, trục thẳng</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>103.&nbsp;Gãy 1/3 trên hay cổ xương đùi, không phẫu thuật, can xấu, chân vẹo, đi đau, teo cơ</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>104.&nbsp;Gãy 1/3 trên hay cổ xương đùi, có phẫu thuật, can xấu, chân vẹo, đi đau, teo cơ</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>45</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>105.&nbsp;Gãy cổ xương đùi, không phẫu thuật, di chứng khớp giả cổ xương đùi</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>45</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>106.&nbsp;Gãy cổ xương đùi, có phẫu thuật, di chứng khớp giả cổ xương đùi</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>107.&nbsp;Gãy 2 xương cẳng chân, không phẫu thuật, can tốt, trục thẳng</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>108.&nbsp;Gãy 2 xương cẳng chân, có phẫu thuật, can tốt, trục thẳng</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>109.&nbsp;Gãy 2 xương cẳng chân, không phẫu thuật, can xấu, chân vẹo</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>110.&nbsp;Gãy 2 xương cẳng chân, có phẫu thuật, can xấu, chân vẹo</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>111.&nbsp;Gãy xương chày, không phẫu thuật, can tốt, trục thẳng</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>112.&nbsp;Gãy xương chày, có phẫu thuật, can tốt, trục thẳng</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>18</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>113.&nbsp;Gãy xương chày, không phẫu thuật, can xấu, chân vẹo</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>18</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>114.&nbsp;Gãy xương chày, có phẫu thuật, can xấu, chân vẹo</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>22</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>115.&nbsp;Gãy đoạn mâm chày, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>116.&nbsp;Gãy đoạn mâm chày, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>117.&nbsp;Gãy xương mác, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>118.&nbsp;Gãy xương mác, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>119.&nbsp;Đứt gân bánh chè, cơ năng khớp gối tốt</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>120.&nbsp;Đứt gân bánh chè, hạn chế cơ năng khớp gối</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>121.&nbsp;Gãy xương bánh chè, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>122.&nbsp;Gãy xương bánh chè, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>123.&nbsp;Gãy xương bánh chè không phẫu thuật, bị cứng khớp gối hoặc teo cơ tứ đầu</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>124.&nbsp;Gãy xương bánh chè có phẫu thuật, bị cứng khớp gối hoặc teo cơ tứ đầu</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>125.&nbsp;Đứt gân Achille, cơ năng vùng gót chân tốt</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>126.&nbsp;Đứt gân Achille, cơ năng vùng gót chân bị hạn chế</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>127.&nbsp;Gãy xương đốt bàn (tùy theo mức độ từ 1 đến nhiều đốt, mỗi đốt tương ứng 2)</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>7</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>128.&nbsp;Gãy xương gót, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>129.&nbsp;Gãy xương gót, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>130.&nbsp;Gãy xương ngón chân (tùy mức độ từ 1 đến nhiều đốt, mỗi đốt tương ứng 2)</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>4</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>131.&nbsp;Gãy ngành ngang xương mu, không dập niệu đạo</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>132.&nbsp;Gãy ngành ngang xương mu, có dập niệu đạo</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>32</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>133.&nbsp;Gãy ụ ngồi</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>134.&nbsp;Gãy cánh xương chậu 1 bên, không điều trị chỉnh hình</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>135.&nbsp;Gãy cánh xương chậu 1 bên, có điều trị chỉnh hình</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>136.&nbsp;Gãy xương chậu 2 bên, liền xương tốt, không méo xương chậu</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>137.&nbsp;Gãy xương chậu 2 bên, méo xương chậu ảnh hưởng đến sinh đẻ</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>138.&nbsp;Gãy xương cùng, không phẫu thuật, không rối loạn cơ tròn</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>139.&nbsp;Gãy xương cùng, có phẫu thuật, không rối loạn cơ tròn</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>140.&nbsp;Gãy xương cùng, không phẫu thuật, có rối loạn cơ tròn</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>141.&nbsp;Gãy xương cùng, có phẫu thuật, có rối loạn cơ tròn</td>
		            <td>Tạm thời</td>
		            <td>Chi Dưới (tt)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>142.&nbsp;Cắt bỏ cung sau của 1 đốt sống</td>
		            <td>Vĩnh viễn</td>
		            <td>Cột Sống (vv)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>143.&nbsp;Cắt bỏ cung sau của 2 - 3 đốt sống trở lên</td>
		            <td>Vĩnh viễn</td>
		            <td>Cột Sống (vv)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>144.&nbsp;Gãy xẹp thân 1 đốt sống, không phẫu thuật, không liệt tủy</td>
		            <td>Tạm thời</td>
		            <td>Cột sống (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>145.&nbsp;Gãy xẹp thân 1 đốt sống, có phẫu thuật, không liệt tủy</td>
		            <td>Tạm thời</td>
		            <td>Cột sống (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>146.&nbsp;Gãy xẹp thân 2 đốt sống trở lên, không phẫu thuật, không liệt tủy</td>
		            <td>Tạm thời</td>
		            <td>Cột sống (tt)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>147.&nbsp;Gãy vỡ mõm gai hoặc mõm bên của 1 đốt sống, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Cột sống (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>148.&nbsp;Gãy vỡ mõm gai hoặc mõm bên của 1 đốt sống, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Cột sống (tt)</td>
		            <td>17</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>149.&nbsp;Gãy vỡ mõm gai hoặc mõm bên của 2 - 3 đốt sống, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Cột sống (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>150.&nbsp;Gãy vỡ mõm gai hoặc mõm bên của 2 - 3 đốt sống, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Cột sống (tt)</td>
		            <td>45</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>151.&nbsp;Khuyết xương sọ, chưa có biểu hiện thần kinh, tâm thần, đường kính dưới 6 cm</td>
		            <td>Vĩnh viễn</td>
		            <td>Sọ Não (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>152.&nbsp;Khuyết xương sọ, chưa có biểu hiện thần kinh, tâm thần, đường kính từ 6 đến 10 cm</td>
		            <td>Vĩnh viễn</td>
		            <td>Sọ Não (vv)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>153.&nbsp;Khuyết xương sọ, chưa có biểu hiện thần kinh, tâm thần, đường kính trên 10 cm</td>
		            <td>Vĩnh viễn</td>
		            <td>Sọ Não (vv)</td>
		            <td>60</td>
		            <td>60</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>154.&nbsp;Rối loạn ngôn ngữ do ảnh hưởng của vết thương đại não:</td>
		            <td>Vĩnh viễn</td>
		            <td>Sọ Não (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;nói ngọng , nói lắp, nói khó khăn ảnh hưởng đến giao tiếp</td>
		            <td>Vĩnh viễn</td>
		            <td>Sọ Não (vv)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;không nói được (câm) do tổn hại vùng Broca</td>
		            <td>Vĩnh viễn</td>
		            <td>Sọ Não (vv)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;mất khả năng giao dịch bằng chữ viết, mất nhận biết&nbsp; về ngôn ngữ do tổn hại vùng Werricke</td>
		            <td>Vĩnh viễn</td>
		            <td>Sọ Não (vv)</td>
		            <td>60</td>
		            <td>60</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>155.&nbsp;Lột da đầu toàn bộ (1 phần theo tỷ lệ)</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>156.&nbsp;Vết thương sọ não hở, xương bị nứt rạn</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>45</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>157.&nbsp;Vết thương sọ não hở , lún xương sọ</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>45</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>158.&nbsp;Vết thương sọ não hở , nhiều mảnh xương đi sâu vào não</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>159.&nbsp;Chấn thương sọ não kín, gãy xương vòm sọ (đường rạn nứt thường , lõm hoặc lún xương), không điều trị phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>160.&nbsp;Chấn thương sọ não kín, gãy xương vòm sọ (đường rạn nứt thường , lõm hoặc lún xương), có điều trị phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>161.&nbsp;Chấn thương sọ não kín, gãy xương lan xuống nền sọ không liệt dây thần kinh ở nền sọ, không điều trị phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>162.&nbsp;Chấn thương sọ não kín, gãy xương lan xuống nền sọ không liệt dây thần kinh ở nền sọ, có điều trị phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>163.&nbsp;Chấn thương sọ não kín, gãy xương lan xuống nền sọ có liệt dây thần kinh ở nền sọ, không điều trị phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>164.&nbsp;Chấn thương sọ não kín, gãy xương lan xuống nền sọ có liệt dây thần kinh ở nền sọ, có điều trị phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>165.&nbsp;Chấn thương sọ não gây chấn động não</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>166.&nbsp;Chấn thương sọ não gây phù não</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>167.&nbsp;Chấn thương sọ não gây giập não, dẹp não</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>168.&nbsp;Chấn thương sọ não gây chảy máu khoang dưới nhện</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>169.&nbsp;Chấn thương sọ não gây máu tụ trong sọ (ngoài màng cứng, trong màng cứng, trong não)</td>
		            <td>Tạm thời</td>
		            <td>Sọ Não (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>170.&nbsp;Cắt bỏ 1 - 2 xương sườn</td>
		            <td>Vĩnh viễn</td>
		            <td>Lồng Ngực (vv)</td>
		            <td>17</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>171.&nbsp;Cắt bỏ 3 xương sườn (mỗi xương sườn cắt bỏ trên 03 xương sườn tăng thêm 5)</td>
		            <td>Vĩnh viễn</td>
		            <td>Lồng Ngực (vv)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>172.&nbsp;Cắt bỏ đoạn mỗi xương sườn (mỗi đoạn xương sườn cắt bỏ thêm tăng 3)</td>
		            <td>Vĩnh viễn</td>
		            <td>Lồng Ngực (vv)</td>
		            <td>8</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>173.&nbsp;Cắt toàn bộ 1 bên phổi</td>
		            <td>Vĩnh viễn</td>
		            <td>Lồng Ngực (vv)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>174.&nbsp;Cắt nhiều thùy phổi ở 2 bên, dung tích sống giảm trên 50</td>
		            <td>Vĩnh viễn</td>
		            <td>Lồng Ngực (vv)</td>
		            <td>70</td>
		            <td>70</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>175.&nbsp;Cắt nhiều thùy phổi ở 1 bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Lồng Ngực (vv)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>176.&nbsp;Cắt 1 thùy phổi</td>
		            <td>Vĩnh viễn</td>
		            <td>Lồng Ngực (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>177.&nbsp;Gãy 1 - 2 xương sườn, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>7</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>178.&nbsp;Gãy 1 - 2 xương sườn, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>179.&nbsp;Gãy 3 xương sườn trở lên, không phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>180.&nbsp;Gãy 3 xương sườn trở lên, có phẫu thuật</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>181.&nbsp;Gãy xương ức đơn thuần, không phẫu thuật (chức năng tim và hô hấp bình thường)</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>182.&nbsp;Gãy xương ức đơn thuần, có phẫu thuật (chức năng tim và hô hấp bình thường)</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>183.&nbsp;Mẽ hoặc rạn nứt xương ức</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>184.&nbsp;Tràn dịch, khí, máu màng phổi (chỉ chọc hút đơn thuần)</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>8</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>185.&nbsp;Tràn khí, máu màng phổi (phải dẫn lưu, mổ cầm máu)</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>186.&nbsp;Tổn thương các van tim, vách tim do chấn thương (chưa suy tim)</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>187.&nbsp;Khâu màng ngoài tim, phẫu thuật kết quả hạn chế</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>188.&nbsp;Khâu màng ngoài tim, phẫu thuật kết quả tốt</td>
		            <td>Tạm thời</td>
		            <td>Lồng Ngực (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>189.&nbsp;Cắt toàn bộ dạ dày</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>80</td>
		            <td>80</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>190.&nbsp;Cắt đoạn dạ dày</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>191.&nbsp;Cắt gần hết ruột non (còn lại dưới 1 m)</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>80</td>
		            <td>80</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>192.&nbsp;Cắt đoạn ruột non</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>45</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>193.&nbsp;Cắt toàn bộ đại tràng</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>80</td>
		            <td>80</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>194.&nbsp;Cắt đoạn đại tràng</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>195.&nbsp;Cắt bỏ gan phải đơn thuần</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>196.&nbsp;Cắt bỏ gan trái đơn thuần</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>197.&nbsp;Cắt ½ của một thùy gan</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>60</td>
		            <td>60</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>198.&nbsp;Cắt 1/3 của một thùy gan</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>199.&nbsp;Cắt dưới 1/3 của một thùy gan</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>200.&nbsp;Cắt bỏ túi mật</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>201.&nbsp;Cắt bỏ lá lách</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>45</td>
		            <td>45</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>202.&nbsp;Cắt bỏ đuôi tụy, lách</td>
		            <td>Vĩnh viễn</td>
		            <td>Bụng (vv)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>203.&nbsp;Khâu lổ thủng dạ dày</td>
		            <td>Tạm thời</td>
		            <td>Bụng (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>204.&nbsp;Khâu lổ thủng ruột non (có thể 1 hay nhiều lổ thủng)</td>
		            <td>Tạm thời</td>
		            <td>Bụng (tt)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>205.&nbsp;Khâu lổ thủng đại tràng (có thể 1 hay nhiều lổ thủng)</td>
		            <td>Tạm thời</td>
		            <td>Bụng (tt)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>206.&nbsp;Đụng dập gan, khâu gan</td>
		            <td>Tạm thời</td>
		            <td>Bụng (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>207.&nbsp;Khâu vỡ lách</td>
		            <td>Tạm thời</td>
		            <td>Bụng (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>208.&nbsp;Khâu tụy</td>
		            <td>Tạm thời</td>
		            <td>Bụng (tt)</td>
		            <td>32</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>209.&nbsp;Cắt bỏ 1 thận, thận còn lại bình thường</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>210.&nbsp;Cắt bỏ 1 thận, thận còn lại bị tổn thương hoặc bệnh lý</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>211.&nbsp;Cắt 1 phần thận trái hoặc phải</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>212.&nbsp;Mất dương vật và 2 tinh hoàn ở người dưới 55 tuổi chưa con</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>213.&nbsp;Mất dương vật và 2 tinh hoàn ở người dưới 55 tuổi đã có con rồi</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>60</td>
		            <td>60</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>214.&nbsp;Mất dương vật và 2 tinh hoàn ở người trên 55 tuổi</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>215.&nbsp;Cắt bỏ dạ con và buồng trứng 1 bên ở người dưới 45 tuổi chưa con</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>216.&nbsp;Cắt bỏ dạ con và buồng trứng 1 bên ở người dưới 45 tuổi đã có con</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>217.&nbsp;Cắt bỏ dạ con và buồng trứng 1 bên ở người trên 45 tuổi</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>27</td>
		            <td>27</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>218.&nbsp;Cắt vú ở nữ dưới 45 tuổi 1 bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>219.&nbsp;Cắt vú ở nữ dưới 45 tuổi 2 bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>220.&nbsp;Cắt vú ở nữ trên 45 tuổi 1 bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>17</td>
		            <td>17</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>221.&nbsp;Cắt vú ở nữ trên 45 tuổi 2 bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>222.&nbsp;Cắt 1 phần bàng quang</td>
		            <td>Vĩnh viễn</td>
		            <td>Cơ quan tiết niệu, sinh dục (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>223.&nbsp;Chấn thương thận nhẹ (không phải xử lý đặc hiệu, theo dõi dưới 5 ngày)</td>
		            <td>Tạm thời</td>
		            <td>Cơ quan tiết niệu, sinh dục (tt)</td>
		            <td>6</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>224.&nbsp;Chấn thương thận trung bình (phải dùng thuốc đặc trị, theo dõi trên 5 ngày)</td>
		            <td>Tạm thời</td>
		            <td>Cơ quan tiết niệu, sinh dục (tt)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>225.&nbsp;Chấn thương thận nặng (có đụng dập, phải can thiệp ngọai khoa)</td>
		            <td>Tạm thời</td>
		            <td>Cơ quan tiết niệu, sinh dục (tt)</td>
		            <td>50</td>
		            <td>50</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>226.&nbsp;Mổ thông bàng quang vĩnh viễn</td>
		            <td>Tạm thời</td>
		            <td>Cơ quan tiết niệu, sinh dục (tt)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>227.&nbsp;Khâu lổ thủng bàng quang (có thể một hay nhiều lỗ thủng)</td>
		            <td>Tạm thời</td>
		            <td>Cơ quan tiết niệu, sinh dục (tt)</td>
		            <td>32</td>
		            <td>32</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>228.&nbsp;Mất hoặc mù hoàn toàn 1 mắt, không lắp được mắt giả</td>
		            <td>Vĩnh viễn</td>
		            <td>Mắt (vv)</td>
		            <td>60</td>
		            <td>60</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>229.&nbsp;Mất hoặc mù hoàn toàn 1 mắt, lắp được mắt giả</td>
		            <td>Vĩnh viễn</td>
		            <td>Mắt (vv)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>230.&nbsp;Một mắt thị lực còn đến 1/10</td>
		            <td>Vĩnh viễn</td>
		            <td>Mắt (vv)</td>
		            <td>37</td>
		            <td>37</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>231.&nbsp;Một mắt thị lực còn từ 2/10 đến 4/10</td>
		            <td>Vĩnh viễn</td>
		            <td>Mắt (vv)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>232.&nbsp;Một mắt thị lực còn từ 5/10 đến 7/10</td>
		            <td>Vĩnh viễn</td>
		            <td>Mắt (vv)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>233.&nbsp;Mất hoặc mù hoàn toàn 1 mắt nhưng trước khi xảy ra tai nạn này đã mất hoặc mù 1 mắt rồi</td>
		            <td>Vĩnh viễn</td>
		            <td>Mắt (vv)</td>
		            <td>90</td>
		            <td>90</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>234.&nbsp;Điếc 2 tai hoàn toàn không phục hồi được</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>80</td>
		            <td>80</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>235.&nbsp;Điếc 2 tai nặng (nói to hoặc thét vào tai còn nghe)</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>65</td>
		            <td>65</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>236.&nbsp;Điếc 2 tai vừa (nói to 1 - 2 m còn nghe)</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>237.&nbsp;Điếc 2 tai nhẹ (nói to 2 - 4 m còn nghe)</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>238.&nbsp;Điếc 1 tai hoàn toàn không phục hồi được</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>239.&nbsp;Điếc 1 tai mức độ vừa</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>240.&nbsp;Điếc 1 tai mức độ nhẹ</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>8</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>241.&nbsp;Mất vành tai 2 bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>242.&nbsp;Mất vành tai 1 bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>15</td>
		            <td>15</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>243.&nbsp;Sẹo rúm vành tai, chít hẹp ống tai</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>244.&nbsp;Mất mũi hoàn toàn</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>245.&nbsp;Biến dạng mũi</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>18</td>
		            <td>18</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>246.&nbsp;Vết thương họng sẹo hẹp ảnh hưởng đến nuốt</td>
		            <td>Vĩnh viễn</td>
		            <td>Tai –Mũi – Họng (vv)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>247.&nbsp;Mất toàn bộ xương hàm trên và một phần xương hàm dưới từ cành cao trở xuống khác bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>85</td>
		            <td>85</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>248.&nbsp;Mất toàn bộ xương hàm trên và một phần xương hàm dưới từ cành cao trở xuống cùng bên</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>249.&nbsp;Mất toàn bộ xương hàm trên hoặc dưới</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>75</td>
		            <td>75</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>250.&nbsp;Mất 1 phần xương hàm trên hoặc 1 phần xương hàm dưới từ 1/3 đến ½ bị mất từ cành cao trở xuống</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>251.&nbsp;Khớp hàm giả do không liền xương hay khuyết xương</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>22</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>252.&nbsp;Mất răng trên 8 cái không lắp được răng giả</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>253.&nbsp;Mất răng trên 8 cái lắp được răng giả</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>254.&nbsp;Mất từ 5 đến 7 răng&nbsp;</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>255.&nbsp;Mất từ 3 đến 4 răng</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>256.&nbsp;Mất từ 1 đến 2 răng</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>4</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>257.&nbsp;Mất ¾ lưỡi còn gốc lưỡi (từ đường gai V trở ra)</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>80</td>
		            <td>80</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>258.&nbsp;Mất 2/3 lưỡi từ đầu lưỡi</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>55</td>
		            <td>55</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>259.&nbsp;Mất 1/3 lưỡi ảnh hưởng đến phát âm</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>260.&nbsp;Mất 1 phần nhỏ lưỡi (dưới 1/3) ảnh hưởng đến phát âm</td>
		            <td>Vĩnh viễn</td>
		            <td>Răng - Hàm - Mặt (vv)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>261.&nbsp;Gãy xương hàm trên và hàm dưới, không phẫu thuật, cơ năng các khớp tốt</td>
		            <td>Tạm thời</td>
		            <td>Răng - Hàm - Mặt (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>262.&nbsp;Gãy xương hàm trên và hàm dưới, có phẫu thuật, cơ năng các khớp tốt</td>
		            <td>Tạm thời</td>
		            <td>Răng - Hàm - Mặt (tt)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>263.&nbsp;Gãy xương hàm trên và hàm dưới, không phẫu thuật, di chứng can xấu gây sai khớp nhai, ăn khó</td>
		            <td>Tạm thời</td>
		            <td>Răng - Hàm - Mặt (tt)</td>
		            <td>30</td>
		            <td>30</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>264.&nbsp;Gãy xương hàm trên và hàm dưới, có phẫu thuật, di chứng can xấu gây sai khớp nhai, ăn khó</td>
		            <td>Tạm thời</td>
		            <td>Răng - Hàm - Mặt (tt)</td>
		            <td>35</td>
		            <td>35</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>265.&nbsp;Gãy xương gò má, cung tiếp xương hàm trên hoặc xương hàm dưới gây rối loạn nhẹ khớp cắn và chức năng nhai</td>
		            <td>Tạm thời</td>
		            <td>Răng - Hàm - Mặt (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>266.&nbsp;Vết thương phần mềm (VTPM) là các vết cắt, chém bề rộng dưới 2 cm gây rách da, rách niêm mạc … không ảnh hưởng đến cơ năng, chiều dài:</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 2 cm – 4 cm</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>2</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 4 cm – 7 cm</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>3</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 7 cm – 10 cm</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>4</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 10 cm – 15 cm</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>5</td>
		            <td>5</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Trên 15 cm</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>7</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>267.&nbsp;Vết thương phần mềm là các tổn thương dập nát, không để lại di chứng, diện tích:</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Dưới 9 cm2</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>2</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 9 cm2&nbsp;đến 12 cm2</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>3</td>
		            <td>3</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 12 cm2&nbsp;đến 16 cm2</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>4</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 16 cm2&nbsp;đến 24 cm2</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>6</td>
		            <td>6</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 24 cm2&nbsp;đến 30 cm2</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>8</td>
		            <td>8</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Từ 30 cm2&nbsp;đến 35 cm2</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>10</td>
		            <td>10</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;Trên 35 cm2</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>(Nếu các vết thương trên do súc vật gây ra thì cộng thêm 1 vào tỷ lệ ở trên)</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>268.&nbsp;Vết thương phần mềm gây bong gân ở các khớp cổ chân, khớp gối, khớp háng, khớp cổ tay, khớp khuỷu, khớp vai</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>4</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>269.&nbsp;Vết thương phần mềm gây trật khớp ở các khớp bàn ngón tay và bàn ngón chân</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>2</td>
		            <td>2</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>270.&nbsp;Vết thương phần mềm gây trật khớp ở các khớp cổ chân, khớp gối, khớp háng, khớp cổ tay, khớp khuỷu, khớp vai</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>7</td>
		            <td>7</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>271.&nbsp;Bỏng nông (độ I, độ II)</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;diện tích dưới 5</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>4</td>
		            <td>4</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;diện tích từ&nbsp; 5 - 15</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>12</td>
		            <td>12</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;diện tích trên 15</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>20</td>
		            <td>20</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>272.&nbsp;Bỏng sâu (độ III, độ IV)</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;diện tích dưới 5</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>22</td>
		            <td>22</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;diện tích từ 5 - 15</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>40</td>
		            <td>40</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>- &nbsp;&nbsp;diện tích trên 15</td>
		            <td>Tạm thời</td>
		            <td>Vết Thương Phần Mềm – Bỏng (tt)</td>
		            <td>70</td>
		            <td>70</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>273.&nbsp;VTPM như nêu trong các mục 266, 267 để lại di chứng đau, rát, tê, co, kéo lâu dài sau khi liền vết thương: cộng thêm 5 vào các tỷ lệ tương ứng ở trên</td>
		            <td>Vĩnh viễn</td>
		            <td>Vết Thương Phần Mềm – Bỏng (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>274.&nbsp;VTPM như nêu trong các mục 266, 267 ảnh hưởng đến mạch máu lớn, thần kinh: cộng thêm 10 vào các tỷ lệ tương ứng ở trên</td>
		            <td>Vĩnh viễn</td>
		            <td>Vết Thương Phần Mềm – Bỏng (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>275.&nbsp;VTPM như nêu trong các mục 266, 267 nhưng là vết thương ở ngực, bụng, sau khi liền vết thương để lại di chứng ảnh hưởng đến hô hấp: cộng thêm 20 vào các tỷ lệ tương ứng ở trên.</td>
		            <td>Vĩnh viễn</td>
		            <td>Vết Thương Phần Mềm – Bỏng (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>276.&nbsp;VTPM như nêu trong các mục 266, 267 để lại di chứng sẹo cơ cứng làm biến dạng mặt gây trở ngại đến ăn, nhai và cử động cổ: cộng thêm 30 vào các tỷ lệ tương ứng ở trên.</td>
		            <td>Vĩnh viễn</td>
		            <td>Vết Thương Phần Mềm – Bỏng (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>277.&nbsp;VTPM như nêu trong các mục 266, 267 để lại khuyết hổng lớn ở chung quanh hốc miệng, ảnh hưởng nhiều đến ăn uống: cộng thêm 35 vào các tỷ lệ tương ứng ở trên.</td>
		            <td>Vĩnh viễn</td>
		            <td>Vết Thương Phần Mềm – Bỏng (vv)</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>278.&nbsp;Mất 1 phần hàm ếch làm thông giữa mũi và miệng</td>
		            <td>Vĩnh viễn</td>
		            <td>Vết Thương Phần Mềm – Bỏng (vv)</td>
		            <td>25</td>
		            <td>25</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		        <tr>
		            <td class="text-center">
		                <input type="checkbox" />
		            </td>
		            <td>279. Chỉnh kín gai xương (đốt sống) gãy, chỉnh ngỏ đốt sống cổ gãy</td>
		            <td>Phẫu thuật</td>
		            <td>Cột sống</td>
		            <td>0</td>
		            <td>0</td>
		            <td>
		                <input type="text" class="form-control input-float text-right" name="" placeholder="0" value="" />
		            </td>
		            <td>
		                <input type="text" class="form-control input-money text-right" name="" placeholder="0" value="" />
		            </td>
		        </tr>
		    </tbody>
		</table>
	</div>
	<div class="modal-footer  justify-content-between">
		<a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Cập nhập</a>
		<div class="d-flex align-items-center justify-content-end">
			<span class="mr-1 font-weight-semibold">Tổng tiền phải trả: </span>
			<input type="text" class="form-control input-money text-right col-content-sm" placeholder="0" value="0" disabled="">
		</div>
	</div>
</div>
<?php include_once FOOTER; ?>
