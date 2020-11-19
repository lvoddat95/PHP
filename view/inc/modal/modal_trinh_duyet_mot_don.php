<!-- Trình duyệt đơn -->
<div id="trinh_duyet_mot_don" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Trình duyệt đơn bảo hiểm</h5>
                <div>
                    <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
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
                                <th class="desktop">Số tiền BH</th>
                                <th class="desktop">Phí bảo hiểm</th>
                                <th class="min-tablet w20p">Người duyệt <sup class="text-primary"><i class="fas fa-angle-double-down"></i> Trong phần cấp</sup></td>
                                <th class="min-tablet w20p">Người duyệt <sup class="text-danger"><i class="fas fa-angle-double-up"></i> Trên phân cấp</sup></td>
                                <th class="min-tablet w20p" data-orderable="false">Ghi chú</th>
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
                                <td>
                                    <select select2>
                                        <option>--- Chọn---</option>
                                        <option>Nguyễn Thanh Thủy - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>
                                        <option>Nguyễn Thanh Bình(DA) - Ban Dự Án - Hạn mức duyệt:30,000,000,000 VND</option>
                                        <option>Lê Thị Kim Liên - Ban nghiệp vụ XCG&amp;CN - Hạn mức duyệt:50,000,000,000 VND</option>                                
                                    </select>
                                </td>
                                <td><span class="badge badge-primary badge-icon-circle"><i class="icon-"></i></span></td>
                            </tr>
                        </tbody>
                    </table>

                   

                    <div class="chu-thich mt-2">
                        <label class="font-weight-bold"><span class="text-danger">*</span> Chú thích: </label>
                        <p class="mb-1"><span class="badge badge-primary badge-icon-circle"><i class="icon-"></i></span> <em>Đơn trình trong phân cấp</em></p>
                        <p class="mb-0"><span class="badge badge-danger badge-icon-circle"><i class="icon-"></i></span> <em>Đơn trình trên phân cấp (do số tiền lớn hơn hạn mức duyệt hoặc số ngày nhập phát sinh muộn)</em></p>
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