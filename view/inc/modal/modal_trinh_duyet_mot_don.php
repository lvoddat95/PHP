<!-- Trình duyệt đơn -->
<div id="trinh_duyet_mot_don" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-semibold ">Trình duyệt đơn bảo hiểm</h5>
                <div>
                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i> Đóng</button>
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
                                <th width="20%" style="max-width: 200px;" class="min-tablet">Người duyệt</td>
                                <th width="20%" class="text-center min-tablet" data-orderable="false">Ghi chú</th>
                            </tr>
                        </thead>
                        <tbody>
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
                    <button type="submit" class="btn bg-primary"><i class="icon-file-check mr-1"></i>Trình duyệt</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Trình duyệt đơn  -->