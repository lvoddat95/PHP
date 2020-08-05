<!-- Cập nhập thông tin khách hàng -->
<div id="cap_nhap_thong_tin_khach_hang" class="modal fade" tabindex="-1" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-semibold ">Cập nhập thông tin khách hàng</h5>
                <div class="p-button">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i> Đóng</button>
                    <button type="submit" class="btn bg-primary"><i class="fa fa-save mr-1"></i>Lưu</button>
                </div>
            </div>
            <form action="#">
                <div class="modal-body">
                    <fieldset>
                        <legend class="text-primary-800 font-weight-semibold d-flex align-items-end justify-content-between">
                            Thông tin chung 
                        </legend>
                        <div class="row ">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Mã khách hàng: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="" placeholder="" value="0100006663" readonly>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="d-block">Tên khách hàng: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="d-block">Ngày sinh:</label>
                                    <input type="text" class="form-control input-date datepicker" name="" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Địa chỉ: <span class="text-danger">*</span></label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Thành phố: <span class="text-danger">*</span></label>
                                    <select class="form-control" select2 name="">
                                        <option id="" value="" name="">--- Chọn Tỉnh / Thành Phố ---</option>
                                        <option id="T_KHAC" name="Tỉnh khác" value="T_KHAC">Tỉnh khác</option>
                                        <option id="TP_DANANG" name="Đà Nẵng" value="TP_DANANG">Đà Nẵng</option>
                                        <option id="T_DONGNAI" name="Đồng Nai" value="T_DONGNAI">Đồng Nai</option>
                                        <option id="T_DONGTHAP" name="Đồng Tháp" value="T_DONGTHAP">Đồng Tháp</option>
                                        <option id="T_DACLAK" name="Đắc Lăk" value="T_DACLAK">Đắc Lăk</option>
                                        <option id="T_DACNONG" name="Đắc Nông" value="T_DACNONG">Đắc Nông</option>
                                        <option id="T_DIENBIEN" name="Điện Biên" value="T_DIENBIEN">Điện Biên</option>
                                        <option id="T_ANGIANG" name="An Giang" value="T_ANGIANG">An Giang</option>
                                        <option id="T_BARIAVUNGTAU" name="Bà Rịa Vũng Tàu" value="T_BARIAVUNGTAU">Bà Rịa Vũng Tàu</option>
                                        <option id="T_BINHDINH" name="Bình Định" value="T_BINHDINH">Bình Định</option>
                                        <option id="T_BINHDUONG" name="Bình Dương" value="T_BINHDUONG">Bình Dương</option>
                                        <option id="T_BINHPHUOC" name="Bình Phước" value="T_BINHPHUOC">Bình Phước</option>
                                        <option id="T_BINHTHUAN" name="Bình Thuận" value="T_BINHTHUAN">Bình Thuận</option>
                                        <option id="T_BACLIEU" name="Bạc Liêu" value="T_BACLIEU">Bạc Liêu</option>
                                        <option id="T_BACCAN" name="Bắc Cạn" value="T_BACCAN">Bắc Cạn</option>
                                        <option id="T_BACGIANG" name="Bắc Giang" value="T_BACGIANG">Bắc Giang</option>
                                        <option id="T_BACNINH" name="Bắc Ninh" value="T_BACNINH">Bắc Ninh</option>
                                        <option id="T_BENTRE" name="Bến Tre" value="T_BENTRE">Bến Tre</option>
                                        <option id="T_CAMAU" name="Cà Mau" value="T_CAMAU">Cà Mau</option>
                                        <option id="T_CAOBANG" name="Cao Bằng" value="T_CAOBANG">Cao Bằng</option>
                                        <option id="T_CANTHO" name="Cần Thơ" value="T_CANTHO">Cần Thơ</option>
                                        <option id="T_GIALAI" name="Gia Lai" value="T_GIALAI">Gia Lai</option>
                                        <option id="T_HAGIANG" name="Hà Giang" value="T_HAGIANG">Hà Giang</option>
                                        <option id="TP_HANOI" name="Hà Nội" value="TP_HANOI">Hà Nội</option>
                                        <option id="T_HANAM" name="Hà Nam" value="T_HANAM">Hà Nam</option>
                                        <option id="T_HATAY" name="Hà Tây" value="T_HATAY">Hà Tây</option>
                                        <option id="T_HATINH" name="Hà Tĩnh" value="T_HATINH">Hà Tĩnh</option>
                                        <option id="TP_HOCHIMINH" name="Hồ Chí Minh" value="TP_HOCHIMINH">Hồ Chí Minh</option>
                                        <option id="T_HOABINH" name="Hòa Bình" value="T_HOABINH">Hòa Bình</option>
                                        <option id="T_HUNGYEN" name="Hưng Yên" value="T_HUNGYEN">Hưng Yên</option>
                                        <option id="T_HAIDUONG" name="Hải Dương" value="T_HAIDUONG">Hải Dương</option>
                                        <option id="TP_HAIPHONG" name="Hải Phòng" value="TP_HAIPHONG">Hải Phòng</option>
                                        <option id="T_HAUGIANG" name="Hậu Giang" value="T_HAUGIANG">Hậu Giang</option>
                                        <option id="T_KHANHHOA" name="Khánh Hòa" value="T_KHANHHOA">Khánh Hòa</option>
                                        <option id="T_KIENGIANG" name="Kiên Giang" value="T_KIENGIANG">Kiên Giang</option>
                                        <option id="T_KONTUM" name="Kon Tum" value="T_KONTUM">Kon Tum</option>
                                        <option id="T_LAOCAI" name="Lào Cai" value="T_LAOCAI">Lào Cai</option>
                                        <option id="T_LAMDONG" name="Lâm Đồng" value="T_LAMDONG">Lâm Đồng</option>
                                        <option id="T_LAICHAU" name="Lai Châu" value="T_LAICHAU">Lai Châu</option>
                                        <option id="T_LANGSON" name="Lạng Sơn" value="T_LANGSON">Lạng Sơn</option>
                                        <option id="T_LONGAN" name="Long An" value="T_LONGAN">Long An</option>
                                        <option id="T_NAMDINH" name="Nam Định" value="T_NAMDINH">Nam Định</option>
                                        <option id="T_NGHEAN" name="Nghệ An" value="T_NGHEAN">Nghệ An</option>
                                        <option id="T_NINHBINH" name="Ninh Bình" value="T_NINHBINH">Ninh Bình</option>
                                        <option id="T_NINHTHUAN" name="Ninh Thuận" value="T_NINHTHUAN">Ninh Thuận</option>
                                        <option id="T_PHUTHO" name="Phú Thọ" value="T_PHUTHO">Phú Thọ</option>
                                        <option id="T_PHUYEN" name="Phú Yên" value="T_PHUYEN">Phú Yên</option>
                                        <option id="T_QUANGBINH" name="Quảng Bình" value="T_QUANGBINH">Quảng Bình</option>
                                        <option id="T_QUANGNAM" name="Quảng Nam" value="T_QUANGNAM">Quảng Nam</option>
                                        <option id="T_QUANGNGAI" name="Quảng Ngãi" value="T_QUANGNGAI">Quảng Ngãi</option>
                                        <option id="T_QUANGNINH" name="Quảng Ninh" value="T_QUANGNINH">Quảng Ninh</option>
                                        <option id="T_QUANGTRI" name="Quảng Trị" value="T_QUANGTRI">Quảng Trị</option>
                                        <option id="T_SOCTRANG" name="Sóc Trăng" value="T_SOCTRANG">Sóc Trăng</option>
                                        <option id="T_SONLA" name="Sơn La" value="T_SONLA">Sơn La</option>
                                        <option id="T_TAYNINH" name="Tây Ninh" value="T_TAYNINH">Tây Ninh</option>
                                        <option id="T_THAIBINH" name="Thái Bình" value="T_THAIBINH">Thái Bình</option>
                                        <option id="T_THAINGUYEN" name="Thái Nguyên" value="T_THAINGUYEN">Thái Nguyên</option>
                                        <option id="T_THUATHIENHUE" name="Thừa Thiên Huế" value="T_THUATHIENHUE">Thừa Thiên Huế</option>
                                        <option id="T_THANHHOA" name="Thanh Hóa" value="T_THANHHOA">Thanh Hóa</option>
                                        <option id="T_TIENGIANG" name="Tiền Giang" value="T_TIENGIANG">Tiền Giang</option>
                                        <option id="T_TRAVINH" name="Trà Vinh" value="T_TRAVINH">Trà Vinh</option>
                                        <option id="T_TUYENQUANG" name="Tuyên Quang" value="T_TUYENQUANG">Tuyên Quang</option>
                                        <option id="T_VUNGTAU" name="Vũng Tàu" value="T_VUNGTAU">Vũng Tàu</option>
                                        <option id="T_VINHLONG" name="Vĩnh Long" value="T_VINHLONG">Vĩnh Long</option>
                                        <option id="T_VINHPHUC" name="Vĩnh Phúc" value="T_VINHPHUC">Vĩnh Phúc</option>
                                        <option id="T_YENBAI" name="Yên Bái" value="T_YENBAI">Yên Bái</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Quốc gia: </label>
                                    <select class="form-control" select2 name="">
                                        <option id="N_ANGHERI" name="Algeria" value="N_ANGHERI">Algeria</option>
                                        <option id="N_ARGENTINA" name="Argentina" value="N_ARGENTINA">Argentina</option>
                                        <option id="N_BRAZIN" name="Brazil" value="N_BRAZIN">Brazil</option>
                                        <option id="N_BRUNAY" name="Brunei Darussalam" value="N_BRUNAY">Brunei Darussalam</option>
                                        <option id="N_CAMPUCHIA" name="Cambodia" value="N_CAMPUCHIA">Cambodia</option>
                                        <option id="N_CANADA" name="Canada" value="N_CANADA">Canada</option>
                                        <option id="N_TRUNGQUOC" name="China" value="N_TRUNGQUOC">China</option>
                                        <option id="N_CONGGO" name="Congo" value="N_CONGGO">Congo</option>
                                        <option id="N_SEC" name="Czech Republic" value="N_SEC">Czech Republic</option>
                                        <option id="N_DANMACH" name="Denmark" value="N_DANMACH">Denmark</option>
                                        <option id="N_PHAP" name="France" value="N_PHAP">France</option>
                                        <option id="N_DUC" name="Germany" value="N_DUC">Germany</option>
                                        <option id="hk" name="Hong Kong" value="hk">Hong Kong</option>
                                        <option id="N_INDONEXIA" name="Indonesia" value="N_INDONEXIA">Indonesia</option>
                                        <option id="N_ITALIA" name="Italy" value="N_ITALIA">Italy</option>
                                        <option id="N_NHAT" name="Japan" value="N_NHAT">Japan</option>
                                        <option id="N_HANQUOC" name="Korea" value="N_HANQUOC">Korea</option>
                                        <option id="N_LAO" name="Lao PDR" value="N_LAO">Lao PDR</option>
                                        <option id="N_LIBI" name="Liberia" value="N_LIBI">Liberia</option>
                                        <option id="N_MALAIXIA" name="Malaysia" value="N_MALAIXIA">Malaysia</option>
                                        <option id="N_MEHICO" name="Mexico" value="N_MEHICO">Mexico</option>
                                        <option id="N_MONGOLIA" name="Mongolia" value="N_MONGOLIA">Mongolia</option>
                                        <option id="MM" name="Myanmar" value="MM">Myanmar</option>
                                        <option id="N_HALAN" name="Netherlands" value="N_HALAN">Netherlands</option>
                                        <option id="NORWAY" name="Norway" value="NORWAY">Norway</option>
                                        <option id="N_Oman" name="Oman" value="N_Oman">Oman</option>
                                        <option id="N_PANAMANIA" name="Panamania" value="N_PANAMANIA">Panamania</option>
                                        <option id="PH" name="Philippines" value="PH">Philippines</option>
                                        <option id="N_BI" name="Portugal" value="N_BI">Portugal</option>
                                        <option id="N_RUMANI" name="Romania" value="N_RUMANI">Romania</option>
                                        <option id="N_NGA" name="Russian Federation" value="N_NGA">Russian Federation</option>
                                        <option id="N_SINGAPO" name="Singapore" value="N_SINGAPO">Singapore</option>
                                        <option id="N_TAYBANNHA" name="Spain" value="N_TAYBANNHA">Spain</option>
                                        <option id="SWEDEN" name="Sweden" value="SWEDEN">Sweden</option>
                                        <option id="N_THAILAN" name="Thailand" value="N_THAILAN">Thailand</option>
                                        <option id="N_THONHIKI" name="Turkey" value="N_THONHIKI">Turkey</option>
                                        <option id="N_ANH" name="United Kingdom" value="N_ANH">United Kingdom</option>
                                        <option id="N_MY" name="United States" value="N_MY">United States</option>
                                        <option id="N_VIETNAM" name="Viet Nam" value="N_VIETNAM" selected="">Viet Nam</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Chi nhánh:</label>
                                    <?php inc('template/chi_nhanh.php'); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="d-block">Số điện thoại: <span class="text-danger">*</span> <i class="text-danger float-right font9">(Nhập sai bị trừ 1% CP khai thác)</i></label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="d-block">Số Fax</label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="d-block">Địa chỉ E-mail:</label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-primary-800 font-weight-semibold">Thông tin kinh tế</legend>
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Ngành nghề kinh doanh: </label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nhóm ngành nghề: </label>
                                    <select class="form-control" select2 name="">
                                        <option id="" value="" name="">--- Chọn Nhóm ngành nghề ---</option><option id="01" name="Công nghiệp" value="01">Công nghiệp</option><option id="02" name="Lâm nghiệp" value="02">Lâm nghiệp</option><option id="03" name="Nôngnghiệp" value="03">Nôngnghiệp</option><option id="04" name="Ngư nghiệp" value="04">Ngư nghiệp</option><option id="05" name="Văn hóa" value="05">Văn hóa</option><option id="06" name="Kế toán" value="06">Kế toán</option><option id="07" name="Tài chính" value="07">Tài chính</option><option id="08" name="Dầu khí" value="08">Dầu khí</option><option id="09" name="Chứng khoán" value="09">Chứng khoán</option><option id="10" name="Du lịch" value="10">Du lịch</option><option id="11" name="Bảo hiểm" value="11">Bảo hiểm</option><option id="12" name="Công nghệ thông tin" value="12">Công nghệ thông tin</option><option id="13" name="Điện tử viễn thông" value="13">Điện tử viễn thông</option><option id="14" name="Thủy sản" value="14">Thủy sản</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Loại khách hàng: <span class="text-danger">*</span></label>
                                    <select class="form-control" select2 name="">
                                        <option id="" value="" name="">--- Chọn Loại khách hàng ---</option><option id="KH_CN" name="Cá nhân" value="KH_CN">Cá nhân</option><option id="KH_TC" name="Tổ chức" value="KH_TC">Tổ chức</option><option id="KH_CD" name="Cổ đông" value="KH_CD">Cổ đông</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Thuộc: </label>
                                    <select class="form-control" select2 name="">
                                        <option id="" value="" name="">--- Chọn Thuộc  ---</option><option id="KH_NGOAI_NUOC" name="Ngoài nước" value="KH_NGOAI_NUOC">Ngoài nước</option><option id="KH_TRONG_NUOC" name="Trong nước" value="KH_TRONG_NUOC">Trong nước</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tài khoản ngân hàng: </label>
                                    <input type="text" class="form-control" name="" placeholder="" value="" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tại ngân hàng: </label>
                                    <input type="text" class="form-control" name="" placeholder="" value="" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Địa chỉ ngân hàng: </label>
                                    <input type="text" class="form-control" name="" placeholder="" value="" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mã số thuế: </label>
                                    <input type="text" class="form-control" name="" placeholder="" value="" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số chứng minh thư nhân dân: </label>
                                    <input type="text" class="form-control" name="" placeholder="" value="" >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Ghi chú: </label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Thứ tự hiển thị: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="" placeholder="" value="713811" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label>Hoạt động: </label>
                                    <div class="button-switch">
                                        <input type="checkbox" id="stt" class="switch required" name="stt">
                                        <label for="stt" data-off="Không" data-on="Có"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    
                        
                </div>
                <div class="modal-footer">
                    <div class="p-button">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="far fa-times mr-1"></i>Đóng</button>
                        <button type="submit" class="btn bg-primary"><i class="fa fa-save mr-1"></i>Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Cập nhập thông tin khách hàng -->