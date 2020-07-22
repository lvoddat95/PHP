<!-- Trình duyệt đơn -->
<div id="trinh_duyet_don" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-semibold ">Trình duyệt đơn bảo hiểm</h5>
                <div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>
            <form action="#">
                <div class="modal-body">
                    
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="font-weight-bold">Ngày trình duyệt: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control input-date datepicker" placeholder="dd/mm/yyyy">
                        </div>
                    </div>

                    <table class="table-list table table-bordered table-hover datatable" 
                        data-paging="false"
                        data-info="false"
                        data-ordering="false"
                        data-searching="false"
                        data-page-length="20"
                        >
                        <thead class="thead-light">
                            <tr>
                                <th class="all">Số đơn</th>
                                <th width="20%" class="desktop">Số tiền BH</th>
                                <th width="20%" class="desktop">Phí bảo hiểm</th>
                                <th width="20%" class="min-tablet">Người duyệt</td>
                                <th width="20%" class="text-center min-tablet" data-orderable="false">Ghi chú</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3412000035/G06</td>
                                <td>18,240,000,000 VND</td>
                                <td>1,520,000 VND</td>
                                <td>
                                    <select select2>
                                        <option>--- Chọn---</option>
                                        <option>Nguyễn Thanh Thủy - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>
                                        <option>Nguyễn Thanh Bình(DA) - Ban Dự Án - Hạn mức duyệt:30,000,000,000 VND</option>
                                        <option>Lê Thị Kim Liên - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>                                
                                    </select>
                                </td>
                                <td><span class="badge badge-danger badge-icon rounded-circle"><i class="icon-"></i></span> Số tiền duyệt trên phân cấp</td>
                            </tr>
                            <tr>
                                <td>4532001940/F02.AD20/206549</td>
                                <td>580,000,000 VND</td>
                                <td>6,380,000 VND</td>
                                <td>
                                    <select select2>
                                        <option>--- Chọn---</option>
                                        <option>Nguyễn Thanh Thủy - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>
                                        <option>Nguyễn Thanh Bình(DA) - Ban Dự Án - Hạn mức duyệt:30,000,000,000 VND</option>
                                        <option>Lê Thị Kim Liên - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>                                
                                    </select>
                                </td>
                                <td><span class="badge badge-danger badge-icon rounded-circle"><i class="icon-"></i></span> Số ngày nhập phát sinh (334) vượt quá số ngày cho phép (60 ngày).</td>
                            </tr>
                            <tr>
                                <td>062003777/F02.AD20/135642</td>
                                <td>1,240,000,000 VND</td>
                                <td>1,520,000 VND</td>
                                <td>
                                    <select select2>
                                        <option>--- Chọn---</option>
                                        <option>Nguyễn Thanh Thủy - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>
                                        <option>Nguyễn Thanh Bình(DA) - Ban Dự Án - Hạn mức duyệt:30,000,000,000 VND</option>
                                        <option>Lê Thị Kim Liên - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>                                
                                    </select>
                                </td>
                                <td><span class="badge badge-primary badge-icon rounded-circle"><i class="icon-"></i></span></td>
                            </tr>
                            <tr>
                                <td>4842003931/F02.AD20/0143689 </td>
                                <td>8,240,000 VND</td>
                                <td>126,300 VND</td>
                                <td>
                                    <select select2>
                                        <option>--- Chọn---</option>
                                        <option>Nguyễn Thanh Thủy - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>
                                        <option>Nguyễn Thanh Bình(DA) - Ban Dự Án - Hạn mức duyệt:30,000,000,000 VND</option>
                                        <option>Lê Thị Kim Liên - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>                                
                                    </select>
                                </td>
                                <td><span class="badge badge-primary badge-icon rounded-circle"><i class="icon-"></i></span></td>
                            </tr>
                        </tbody>
                    </table>

                   

                    <div class="chu-thich mt-2">
                        <label class="font-weight-bold"><span class="text-danger">*</span> Chú thích: </label>
                        <p class="mb-1"><span class="badge badge-primary badge-icon rounded-circle"><i class="icon-"></i></span> <em>Đơn trình trong phân cấp</em></p>
                        <p class="mb-0"><span class="badge badge-danger badge-icon rounded-circle"><i class="icon-"></i></span> <em>Đơn trình trên phân cấp (do số tiền lớn hơn hạn mức duyệt hoặc số ngày nhập phát sinh muộn)</em></p>
                    </div>

                    
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn bg-primary">Trình</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Trình duyệt đơn  -->