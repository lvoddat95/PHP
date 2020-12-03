<!-- Danh sách điều khoản loại trừ-->
<div id="ds_dieu_khoan_loai_tru" class="modal fade" tabindex="-1" datatable-modal>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Danh sách điều khoản loại trừ</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fal fa-times"></i></button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-sm-12" repeater>
                                <table class="table table-bordered datatable"  
                                    data-paging="true"
                                    data-info="false"
                                    data-ordering="false"
                                    data-searching="true"
                                >
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="30px"><input type="checkbox" value=""></th>
                                            <th class="w15p">Mã điều khoản</th>
                                            <th>Tên điều khoản</th>
                                        </tr>
                                    </thead>
                                    <tbody data-repeater-list="ruiro">
                                        <tr data-repeater-item style="display: none;">
                                            <td><input type="checkbox" value=""></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <?php if (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g01') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Hành động cố ý gây thiệt hại của Người được bảo hiểm hoặc người thừa kế hợp pháp (trừ trường hợp người thừa kế là trẻ em dưới 14 tuổi).</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm có sử dụng rượu, bia, ma túy hoặc các chất kích thích tương tự khác.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm vi phạm nghiêm trọng pháp luật, nội quy, quy định của chính quyên địa phương hoặc các tổ chức xã hội.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị hoặc sử dụng thuốc không theo hướng dẫn của cơ sở y tế.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều dưỡng, an dưỡng, nằm viện để kiểm tra sức khỏe hoặc khám giám định y khoa mà không liên quan đến việc điều trị bệnh tật.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị hoặc phẫu thuật các bệnh tật bẩm sinh, những thương tật và chỉ định phẫu thuật có từ trước ngày bắt đầu bảo hiểm.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị chưa được khoa học công nhận hoặc điều trị thử nghiệm. Tạo hỉnh thẩm mỹ, chỉnh hình, phục hồi chức năng, làm chân, tay giả, mắt giả, răng giả.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Kế hoạch hóa gia đình.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>
                                                    Bệnh đặc biệt (chỉ áp dụng trong năm đàu tiên tham gia bảo hiểm) <br>
                                                    &nbsp;&nbsp;&nbsp;a. Chỉ được áp dụng trong nấm đầu tiên kể từ ngày bắt đầu bảo hiểm đối với hợp đồng bảo hiểm nhóm dưới 30 thành viên. <br>
                                                    &nbsp;&nbsp;&nbsp;b. Không áp dụng đối với hợp đồng bảo hiểm nhóm có từ 30 thành viên trở lên.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bão hiểm mắc các bệnh giang mai, lậu, nhiễm vi rút HIV, sốt rét, lao và bệnh nghề nghiệp.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các hoạt động hàng không (trừ khi với tư cách là hành khách có vé), các cuộc diễn tập, huấn luyện quân sự, tham gia chién đấu của các lực lượng vũ trang.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm tham gia đánh nhau trừ khi được xác nhận đó là hành động tự vệ.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Động đẩt, núi lửa, nhiễm phóng xạ, chiến tranh, nội chiến, đình công, khủng bố.</td>
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g02') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các dịch vụ điều trị ngoại trú. Điểm loại trừ này sẽ không áp dụng nếu Người được bảo hiểm tham gia quyền lợi “Điều trị ngoại trú”.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Dịch vụ điều trị tại nhà (không bao gồm chi phí y tá chăm sóc tại nhà) hoặc tại viện điều trị bằng thủy lực hay các phương pháp thiên nhiên, spa, viện điều dưỡng, an dưỡng, hoặc tại những nơi không phải là Cơ sở y tế.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Kiểm tra tầm soát và khám sức khỏe định kỳ/khám sức khỏe tổng quát; khám kiểm tra phụ khoa/nam khoa; khám thai định kỳ; tiêm chủng, vacxin và thuốc chủng ngừa, kiểm tra mắt thông thường, kiểm tra thính giác thông thường, kiểm tra và điều trị các khuyết tật thoái hóa tự nhiên của mắt, các tật khúc xạ của mắt (bao gồm nhưng không giới hạn ở các tật khúc xạ mắt như cận, viễn, loạn thị), đục thủy tinh thể không do bệnh lý, bất kỳ phẫu thuật nào để hiệu chỉnh các khuyết tật thoái hóa thính giác và thị giác, và khám sức khỏe trước khi đi du lịch hoặc đi làm.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Khuyết tật bẩm sinh, dị tật bẩm sinh, bệnh bẩm sinh, các bệnh hoặc dị dạng thuộc về gen, tình trạng sức khỏe di truyền với các dấu hiệu từ lúc sinh.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các hình thức điều trị ngoại trú về răng và liên quan đến răng (nướu, lợi) và tất cả các điều trị nội trú liên quan đến răng. Điểm loại trừ này không được áp dụng nếu Người được bảo hiểm tham gia quyền lợi “Điều trị ngoại trú” hoặc “Điều trị răng toàn diện".</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị và phẫu thuật theo yêu cầu của Người được bảo hiểm mà không liên quan tới điều kiện điều trị và phẫu thuật bình thường do ngành y tế quy định.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Khám và các xét nghiệm không có kết luận bệnh của bác sĩ.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các hình thức điều trị thẩm mỹ, điều trị cân nặng, giải phẫu thẩm mỹ hoặc phẫu thuật tạo hình và các hậu quả liên quan.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Thực phẩm chức năng, khoáng chất, các chất hữu cơ bồ sung cho chế độ dinh dưỡng hoặc phục vụ cho chế độ ăn kiêng có sẵn trong tự nhiên, các sản phẩm dược mỹ phẩm, các loại vitamin.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Kế hoạch hóa gia đình, điều trị vô sinh, điều trị bất lực, rối loạn chức năng sinh dục, thụ tinh nhân tạo, liệu pháp thay thế hóc môn trong thời kỳ tiền mãn kinh hay mãn kinh ở phụ nữ, thay đổi giới tính, hay bất cứ hậu quả hoặc biến chứng nào của điều trị trên.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bệnh đặc biệt trong năm bảo hiểm đầu tiên kể từ ngày bắt đầu bảo hiểm. Điểm loại trừ này không áp dụng cho hợp đồng bảo hiểm nhóm tù' 50 nhân viên trở lên.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bệnh có sẵn trong năm bảo hiểm đầu tiên tính từ ngày bắt đầu bảo hiểm. Điểm loại trừ này không áp dụng cho hợp đồng bảo hiếm nhóm tù’ 50 nhân viên trở lên.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các bệnh lý về tâm thần, rối loạn tâm lý, mệt mỏi, mất ngủ (bao gồm rối loạn giấc ngủ) suy nhược thần kinh và suy nhược cơ thể không có nguyên nhân bệnh lý, mỏi mắt điều tiết, stress, phong, giang mai, lậu, AIDS và các hội chứng liên quan, bệnh hoa liễu và các bệnh lây nhiễm qua đường tình dục khác, bệnh nghề nghiệp.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các điều trị liên quan đến chứng ngủ ngáy không rõ nguyên nhân.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các chi phí cung cấp, bảo dưỡng, sửa chữa các thiết bị, dụng cụ chỉnh hình, các thiết bị trợ thính hoặc thị lực, nạng hay xe lăn, các máy móc, thiết bị, dụng cụ phục vụ cá nhân Người được bảo hiểm để chẩn đoán bệnh hoặc hỗ trợ điều trị y tế (máy tạo nhịp tim, máy khí dung...). Các chi phí cung cấp, bảo dưỡng, sửa chữa thiết bị, bộ phận giả ngoại trừ các dụng cụ, thiết bị cần thiết phải được cấy ghép vào bên trong cơ thể để duy trì sự sống như quy định trong Quyền lợi chi phí phẫu thuật.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Hậu quả của việc sử dụng ma túy, các chất có cồn, thuốc không có chỉ định của bác sĩ chuyên môn hoặc thuốc chỉ định để điều trị các bệnh nghiện.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Chiến tranh hoặc các hành động thù địch kể cả có tuyên chiến hay không, khủng bố, tác nhân hạt nhân hoặc do chất phóng xạ.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các chi phí để có cơ quan cấy ghép nội tạng như cho, nhận, mua, vận chuyển, bảo quản nội tạng. Tuy nhiên, hợp đồng bảo hiểm này bảo hiểm cho các chi phí y tế cho việc cấy ghép nội tạng vào cơ thể.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Việc điều trị khồng được khoa học công nhận, điều trị thử nghiệm.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Việc điều trị do sai sót chuyên môn của Bác sĩ.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các chi phí và điều trị cho các đối tượng không đủ điều kiện tham gia bảo hiểm.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị tại phòng mạch bác sỹ tư, phòng nha tư nhân không có giấy phép hành nghề và không cung cấp được chứng từ/hóa đơn tài chính theo quy định của luật pháp trừ trường hợp có quy định khác được ghi rõ trong Bảng tóm tắt hợp đồng bảo hiểm hoặc Sửa đổi bổ sung.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bệnh viêm amyđan cần phải cắt, VA quá phát cần phải nạo, trĩ, thoái hóa khớp, thoát vị đĩa đệm, xoang, hen phế quản, rối loạn tiền đình, viêm tai giữa (áp dụng cho năm bảo hiểm đầu tiên của nhóm dưới 50 nhân viên)</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Stent động mạch vành, van tim.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Dao mổ trĩ theo phương pháp mổ longo.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các điều trị thai sản, chăm sóc thai sản cho Người được bảo hiểm có thai bàng biện pháp thụ tinh nhân tạo, thụ tinh ống nghiệm và các biện pháp tương tự.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các bộ phận/thiết bị y tế hỗ trợ điều trị.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Tử vong không rõ nguyên nhân, cảm đột ngột, trúng gió.</td>
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g03') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Hành động cố ý của Người được bảo hiểm hoặc người thừa kế hợp pháp (trừ trường hợp người thừa kể là trẻ em dưới 14 tuối).</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người dược bảo hiểm vi phạm nghiêm trọng pháp luật, nội quy, quy định của chính quyền dịa phương hoặc các to chức xã hội .</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiếm bị ảnh hưởng trực ti ốp do sử dụng rượu, bia, ma túy hoặc các chất kích thích tương tự khác.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị hoặc sử dụng thuốc không theo hướng dẫn của cơ sở y tế.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các hoạt động hàng không (trừ khi với tư cách là hành khách có vé), các cuộc diễn tập, huấn luyện quân sự, tham gia chiên đấu của các lực lượng vũ trang.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm tham gia dánh nhau trừ khi dược xác nhận đó là hành động tự vệ.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Cảm đột ngột, trúng gió, bệnh tật, sấy thai, bệnh nghề nghiệp, những tai biển trong quá trình điều trị bệnh và thai sán.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Ngộ độc thức ăn, đồ uống hoặc hít phải hơi ga độc hại.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Động đất, núi lửa, nhiễm phóng xạ.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Chiến tranh, nội chiến, đình công.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Khủng bổ.</td>
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g04') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Thương tật thân thể<br> 
                                                    a. Xảy ra <br>   
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i). Khi người được bảo hiểm đang tham gia (chơi hay tập luyện) vào bất kỳ hoạt động loại trừ nào được đề cập như trên.<br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ii). Đối với những người không thuộc độ tuổi giới hạn trong thời hạn bảo hiểm của Đơn bảo hiểm này.<br>
                                                    b. Do<br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i). Người được bảo hiểm tự tử hay cố ý định tự tử, cố ý tự gây thương tích hoặc dấn thân vào nơi nguy hiểm không cẩn thiết. từ khi có ý định cứu người.<br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ii). Thương tật thân thể do hạn quả của chiến tranh (dù tuyên bố hay không tuyên bố), xâm lược, chiến sự, nội chiến, bạo loạn, cách mạng, khởi nghĩa, hành động quân sự hay cướp chính quyền, nổi loạn, bạo loạn dân sự.<br>
                                                    c. Phát sinh từ liên quan một cách trực tiếp hoặc gián tiếp tới các "Hoạt động khủng bố" như định nghĩa trong đơn, Loại trừ này vẫn được áp dụng cho dù có một nguyên nhân hay sự kiện nào khác, dưới bất kỳ hình thức nào, đóng góp đồng thời hoặc dẫn tới thương tật thân thể.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Chết, thương tật thân thể hoặc phát sinh các chi phí y tế do hậu quả của người được bảo hiểm.<br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i). Đã sử dụng ma tuý trừ khi người được bão hiểm chứng minh được rằng họ dã sử dụng thuốc theo đúng don thuốc và sự chỉ dẫn y tế của bác sĩ và không phải là điều trị cơn nghiện ma tuý hay chất kích thích hoặc thuốc ngủ. <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ii). Bị suy giảm thể lực, trí nhớ hay bệnh có sắn mà không khai báo cho VNI và không được VNI chấp nhận bằng văn bản.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Chết, thương tật hoặc các chi phí y tế do hoặc có thể quy cho Người được bảo hiểm đang có thai hay ốm đau, bệnh tật mà không phải do tai nạn gây ra hoặc bị thương tật thân thể do nguyên nhân phẫu thuật biến chứng dần thành.</td>
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g05') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm bị ảnh hưởng trực tiếp do sử dụng rượu, bia, ma túy hoặc các chất kích thích tương tự khác.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm tham gia đánh nhau trừ khi được xác nhận đó là hành động tự vệ. Người được bảo hiểm từ 14 tuổi trở lên vi phạm nghiêm trọng pháp luật, các quy định của nhà trường, chính quyền địa phương.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị hoặc sử dụng thuốc không theo hướng dẫn của cơ sở y tế.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều dưỡng, an dưỡng.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Nằm viện để kiểm tra sức khỏe hoặc khám giám định y khoa mà không liên quan đến việc điều trị bệnh tật.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị hoặc phẫu thuật các bệnh tật bẩm sinh, những thương tật và chỉ định phẫu thuật có từ trước ngày bắt đầu bảo hiểm.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị chưa được khoa học công nhận hoặc điều trị thử nghiệm.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Tạo hình thẩm mỹ, chỉnh hình, phục hồi chức năng, làm chân, tay giả, mắt giả, răng giả.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Kế hoạch hoá gia đình.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Những bệnh đặc biệt theo định nghĩa ở Điều 4.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Những bệnh có sẵn theo định nghĩa ở Điều 4. Tuy nhiên, điểm loại trừ này: 
                                                Chỉ được áp dụng trong năm dầu tiên kể từ ngày bắt đầu bảo hiểm đối với hợp đồng bảo hiểm nhóm dưới 50 thành viên. không áp dụng đối với hợp đồng bảo hiểm nhóm có từ 50 thành viên trở lên.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm mắc các bệnh giang mai, lậu, nhiễm vi rút H1V, sốt rét, lao và bệnh nghề nghiệp.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các hoạt động hàng không (trừ khi với tư cách là hành khách có vé), các cuộc diễn tập, huấn luyện quân sự, tham gia chiến đấu của các lực lượng vũ trang.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Động đât, núi lửa, nhiêm phóng xạ.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Chiến tranh, nội chiến, đình công.</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Khủng bố.</td>
                                            </tr>
                                            
                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g06') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người dược bảo hiểm cố ý vi phạm: pháp luật, nội quy, quy định của cơ quan du lịch, của chính quyền địa phương nơi du lịch.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Hành dộng cố ý của Người được bảo hiếm hoặc người thừa kế hợp pháp (là người được chỉ dịnh nhận tiền báo hiểm theo giấy chứng nhận bảo hiểm hoặc di chúc hay theo pháp luật).</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiếm bị ảnh hưởng của rượu, bia, ma túy hay các chất kích thích tương tự khác.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điêu trị hoặc sử dụng thuốc không theo chỉ dẫn của y, bác sĩ điều trị.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Chiến tranh.</td>
                                                
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g071') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bệnh tật hay tổn thương có sẵn, bệnh hay khuyết tật bẩm sinh, nhiễm HĨV, AIDS và các bệnh liên quan den AIDS. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bệnh mãn tính cho dù phát biện trước hay trong thời gian bảo hiém bao gồm : bệnh trĩ. chứng thoát vị, amidan dẫn đến phẫu thuật, dị tật vách ngăn mũi hoặc xương xoắn mũi, cường tuyến giáp, đục nhân mắt, bệnh xoang phái phẫu thuật, bệnh lạc màng trong tử cung, bệnh lao, rò hậu môn, viêm túi mật, sỏi các loại. dị tật hay bệnh về bàng quang hoặc niệu đạo, cao huyết áp hoặc bệnh tim mạch, u dạ dày hoặc tá tràng, tật vẹo ngón chân ra ngoài, tất cả các loại u thông thường hay u ác tính, ung thư, rối loạn máu hay tủy xương, bệnh đái đường. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Nổi loạn và đình công, chiến tranh (cho dù có tuyên bố hay không), xâm lược, hành động ngoại xâm, nội chiến, cách mạng, bạo loạn dân sự, quyền lực quân sự hay tiếm quyền, việc thi hành nhiệm vụ như một thành viên của lực lượng quân đội, hay công an, hoặc đơn vị thi hành luật. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Liên quan một cách trực tiếp hoặc gián tiếp tới các "Hoạt động khủng bố". <br>
                                                Điểm loại trừ này vẫn dược áp dụng cho dù cỏ một nguyên nhân hay sự kiện nào khác, dưới bất kỳ hình thức nào, dóng góp dồng thời hoặc dẫn tới thương tật thân thể.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Tự sát, cố gắng tự sát hay cố ý gây thương tích trên thân thể, bệnh thần kinh, rối loạn tâm thần, sảy thai, phá thai, sinh dẻ, bệnh hoa liễu, sử dụng dồ uống có con, chất kích thích hay các dung môi mà không có sự chỉ định của bác sĩ hành nghề hợp pháp, điều trị răng trừ khi diều trị những răng tự nhiên còn tốt do hậu quã của tai nạn. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Sự phân hạt của hạt nhân, hỗn hợp hạt nhân hoặc nhiễm phóng xạ. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Tai nạn trong khi tham gia vào (kế cả trường hợp luyện tập hoặc theo chương trình bat buộc) bâl kỳ môn thô thao hay các cuộc thi nào trong phạm vi chuyên nghiệp hay nghiệp dư hoặc các môn thể thao được tổ chức, các cuộc đua xe hay dua xe có động CƯ đường trường, leo vách đá hay núi có sử dụng dây leo hay thiết bị khác, khám phá hang động, nhảy dù nhào lộn trên không, bay lượn bang diều, nhẫy dù, đi sàn trên ngựa, lên xuống bất kỳ máy bay nào mả không phái là các máy bay được cấp phép được vận hành bởi một hãng hàng không dược cấp phép kinh doanh mà Người được báo hiểm đi trên các máy bay đó với tư các là hành khách có mua vé. Tham gia vào các công việc laơ động chân tay hay công việc nguy hiểm có liên quan đến việc sử dụng máy móc hay dụng cụ. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Leo lên tới độ cao trên 5.000 mét so với mực nước biển hoặc sử dụng bình dưỡng khí lặn sâu hơn 20 mét so với mặt nước biển. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Chết hay thương tật hoặc các chì phí liên quan trực tiếp hay gián tiếp gây ra bởi hoặc được góp phần bởi hay phát sinh từ hỏng hóc hay không có khả năng hoạt động tại bat kỳ thời diem nào của máy vi tính, thiết bị điện tử, thiết bị hay phương tiện xử lý dữ liệu hay truyền thông, vi mạch, vi mạch dược bao kín, mạch tích hợp hoặc các thiết bị lương tự hoặc bất kỳ phàn mềm máy tính nào, cho dù tài sản đó thuộc Người dược bảo hiểm hay không. Trong việc nhận diện chính xác hoặc xử lý ngày tháng giống như ngày theo lịch thực tế và/hoặc lưu giữ, duy trì quá trình,truyền dạt hay diễn giải chính xác các dữ liệu, thông tin, lệnh hoặc các hướng dẫn do kết quả của việc không thể xử lý ngày tháng dúng như ngày theo lịch thực té hoặc lệnh được lập trình mà do hậu quả của việc không có khả năng xử lý ngày tháng đúng như ngày theo lịch thực tế gây ra mat mát về dữ liệu hoặc không có khả năng lưu trữ hoặc duy trì hoặc xử lý chính xác các dữ liệu đó tại bất kỳ thời dicm nào. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Tổn thất gián tiếp hoặc thiệt hại mang tính hậu quả.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Mọi hình thức tổn thất, thiệt hại hay trách nhiệm phát sinh nào mà đã được bảo hiểm bởi một đơn bảo hiếm khác hay đã dược một bên thứ ba có trách nhiệm thanh toán, Tuy nhiên, điểm loại trù' này không áp dụng cho các Diều 4 và Điều 5 cúa Quy tắc bảo hiểm này. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Trừ khi được VNĨ chấp thuận trước, việc Người được bảo hiểm thực hiện công việc hay nghề nghiệp phái hứng chịu các mối nguy hiểm hoặc các nguy cơ hay rủi ro đặc biệt như nghe đi biển, công việc ngoài giản khoan, công việc dưới hầm mỏ, nghề lặn ...</td>
                                                
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g072') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Rủi ro xảy ra do những nguyên nhân trực tiếp sau:  <br>
                                                    a. Người được bảo hiêm cô ý vi phạm: pháp luật, quỵ định của nước đen du lịch, và nội quy cúa cư quan tô chức du lịch. <br>
                                                    b. Hành động cổ ý của Người được bảo hiểm hoặc người thừa kế hợp pháp (là người được chỉ dịnh nhận tiền báo hiểm theo giấy chứng nhận báo hiềm hoặc di chúc hay theo pháp luật). <br>
                                                    c. Người dược bảo hiểm bị ảnh hưởng của rượu, bia, ma túy hay các chất kích thích tương tự khác. <br>
                                                    d. Chiến tranh. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Những chi phí phát sinh theo Điều 11.3 dưói đây trong trường hợp: <br>
                                                    a. Người được bảo hiểm phát bệnh tâm thần, mang thai (trà trường hợp sẩy thai do hậu quả cúa tai nạn), sinh đẻ. <br>
                                                    b. Người dược bảo hiểm tiếp tục diều trị tổn thương hoặc bệnh tật phát sinh trước khi bảo hiếm có hiệu lực. <br>
                                                    c. Diều trị hoặc sử dụng thuốc không theo chỉ dẫn của Y, Bác sĩ điều trị. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Những thiệt hại về hành lý theo Điều 13 dưới dây trong trường hợp: <br>
                                                    a. Mất vảng, đá quý, kim loại quý, tiên mặt, séc. hộ chiếu, bằng lái xe, vé các loại, chứng từ cỏ giá trị như tiền, bản vẽ, bản thiết kế. <br>
                                                    b. Đô vật bị xây xát, ưứt. mà không làm mất chức năng của nó. <br>
                                                    c. Cữ quan nhà nước có thẩm quyền trưng thu, cầm giữ hoặc tịch thu.</td>
                                                
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g073') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>VNI không chịu trách nhiệm đối với: <br>
                                                    Rủi ro xảy ra do những nguyên nhân trực tiếp sau đây: <br>
                                                    a. Người được bảo hiểm cố ý vi phạm pháp luật, nội quy, quy định của cơ quan du lịch, của chính quyền địa phuơng nơi du lịch. <br>
                                                    b. Hành động cố ý của Người được bảo hiểm hay người thừa kế hợp pháp (là người được chỉ định nhận tiền bảo hiểm theo giấy chứng bảo hiểm hoặc di chúc hay theo pháp luật) <br>
                                                    c. Người được bảo hiểm bị ảnh hưởng của rượu bia, ma túy và các chất kích thích tương tự khác. <br>
                                                    d. Chiến tranh. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Những chi phí phát sinh theo điều 11.2 dưới đây trong trường hợp: <br>
                                                    a. Người được bảo hiểm phát bệnh tâm thần, mang thai (trừ trường hợp xảy thai do hậu quả của tai nạn), sinh đẻ. <br>
                                                    b. Người được bảo hiểm tiếp tục điều trị vết thương hoặc bệnh tật phát sinh từ trước khi bảo hiểm có hiệu lực. <br>
                                                    c. Điều trị hoặc sử dụng thuốc không theo chỉ dẫn của y, bác sĩ điều trị. </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Những thiệt hại về hành lý theo điều 13 dưới đây trong trường hợp: <br>
                                                    a. Mất vàng bạc, đá quý, kim loại quý, tiền mặt, séc du lịch, các chứng từ có giá trị như tiền, hộ chiếu, bằng lái xe, vé các loại, tài liệu, chứng từ, bản vẽ, bản thiết kế. <br>
                                                    b. Đồ vật bị xây xát, ướt mà không làm mất đi chức năng của nó. <br>
                                                    c. Cơ quan Nhà nước có thẩm quyền trưng thu, cầm giữ hoặc tịch thu.</td>
                                                
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g08') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Hành dộng cố ý của Người dược bào hiếm hoặc người thừa kế hợp pháp.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiếm vi phạm nghiêm trọng pháp luật, nội quy, quy định của chính quyên dịa phương hoặc các tô chức xã hội.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm bị ảnh hưởng trực tiếp do sứ dụng rượu, bia, ma túy hoặc các chất kích thích tương tự khác.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều dưỡng, an dưỡng.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Nằm viện dể kiểm tra sức khoe hoặc khám giám định y khoa mà không liên quan đến việc diều trị bệnh tật.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị hoặc phẫu thuật các bệnh tật bấm sinh, những thương tật và chi dịnh phẫu thuật cỏ từ trước ngày bát dầu bảo hiểm.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều trị chưa được khoa học công nhận hoặc diều trị thử nghiệm.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Tạo hình thấm mỹ, chỉnh hình, phục hồi chức năng, làm chân, tay giả, mắt giá. răng giả.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Kể hoạch hoá gia đình.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Những bệnh có sẵn theo định nghĩa ở Điều 4. Tuy nhiên, điển loại trừ này chi áp dụng trong năm dầu tiên kể từ ngày bắt dầu bảo hiểm.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người dược bảo hiểm mắc các bệnh giang mai, lậu, nhiễm vi rút mv, sốt rét. lao và bệnh nghề nghiệp.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Động đất, núi lửa, nhiễm phóng xạ.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Chiến tranh, nội chiến, đình công.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Khủng bố.</td>
                                                
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g09') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bất cứ trách nhiệm nào của Người Được Bảo Hiềm bị ràng buộc dưới dạng thỏa thuận mà lẽ ra nếu không có thỏa thuận này thì trách nhiệm đã không phát sinh;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Trách nhiệm của Người Được Bão Hiểm đối với người lao động của các nhà thầu độc lập do Người Được Bẳo Hiếm thuê;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bất kỳ người nào làm việc cho Người Được Bão Hiểm mà không phái là “Người Lao Động” xét theo ý nghĩa như Luật định;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bất kỳ các khoản chậm thanh toán, tiền phạt, chi phí trả thêm hoặc tiền phạt cành cáo do vi phạm luật mà Người Được Báo Hiểm có thể phải chịu trách nhiệm như Luật dinh hay ngoài Luật định;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bất kỳ khoản tiền nào mà nếu như không có thỏa thuận giữa Người Được Bào Hiểm và bất cứ bên nào thì Người Được Báo Hiếm 12 ra đã có quyền truy dòi từ bên dó;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Trách nhiệm trực tiếp hay gián tiếp gây ra bới là kết quả của hay có lien quan đến các hoạt động sau dây bât kế các nguyên nhân hoặc sự kiện nào khác tác động đồng thời hoặc theo bất kỳ trình tự nào khác dối với trách nhiệm: <br>
                                                (a) Gây rối. nổi dậy quần chúng, bài công, công nhân bế xưởng; <br>
                                                (b) Chiến tranh, xâm lược, hành dộng thù dịch nước ngoài, hành động gây hấn hoặc các hoạt động có tính chât chiến tranh (dù có tuyên chiến hay không), nội chiến; <br>
                                                (c) Hành động khủng bổ; <br>
                                                (d) Binh biến, dấy binh, bạo loạn, khởi nghĩa, cách mạng, bạo động, đáo chính, lực lượng quân sự tiếm quyền, thiết quân luật, phong tỏa hoặc những biến cổ và nguyên nhân dẫn dến việc tuyên bổ hay duy trì tình trạng phong tỏa hoặc thiết quân luật;<br>
                                                Cho mục dích của Hợp Đồng Bảo Hiểm này, ‘Tành dộng khủng bố” là hành động bao gồm nhưng không giới hạn ở việc sứ dụng vũ lực hoặc đc dọa bang vũ lực, cúa một cá nhân hay một nhóm người, hành động đơn lẻ hay dại diện cho hoặc có liên quan dến bất kỳ (các) tổ chức hay (các) chính phú, vận động cho một bè phái chính trị, một tôn giáo, một ý thức hệ hay cho những mục đích tương tự bao gồm cá những mưu toan nhàm tác động đển chính phủ và/hoặc gieo rắc nỗi sợ hãi trong dân chúng hoặc một bộ phận dân chúng; <br>
                                                Điểm Loại Trừ này cũng áp dụng cho tai nạn, bệnh nghề nghiệp, chi phí hoặc phí tốn với bất kỳ bản chất;
                                                nào trực tiếp hay gián tiếp gẫy ra bởi, là kết quả của hay có liên quan đến bất kỳ hành động nào đã thực hiện nhằm kiểm soát, ngăn ngừa, trẩn áp hoặc bằng những cách khác có liên quan dến điểm loại trừ ơ trên; <br>
                                                Trong bất kỳ việc kiện tụng hay tố tụng nào mà Công Ty Bảo Hiểm, do quy định của nhũng Điểm Loại Trù’ được ghi trong các mục trên, cho rằng những tai nạn, bệnh nghề <br>
                                                Trong trường hợp có bất kỳ phần nào cúa điều khoản loại trừ này không có hiệu lực hoặc không thế thi hành, các phần còn lại vần giữ nguyên hiệu lực;
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bất kỳ trách nhiệm nào với bất kỳ tính chất nào trực tiếp hay gián tiếp gây ra do, hay được tác động bới, hay phát sinh từ; <br>
                                                    (a) Nguyên liệu vũ khí hạt nhân; <br>
                                                    (b) (i) Phóng xạ ion hóa hay nhiễm xạ từ nhiên liệu hạt nhân hoặc từ chất thãi hạt nhân do việc <br>
                                                    dốt cháy nhiên liệu hạt nhân. Riêng cho mục dích của diểm loại trừ 7(b) này sự đoi cháy sẽ bao gồm cả quá trình lự phân húy của phản ứng phân hạch hạt nhân; <br>
                                                    (ii) Tính phóng xạ, tính nổ hay các thuộc lính nguy hiếm khác của thành phần nổ hạt nhân.
                                                    </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bất cứ thương tật của bất kỳ Người Lao Động nào cùa Người Được Bão Hiếm là hậu quá của một tai nạn, mà thương tật này được quy là trực tiếp gây ra bởi Người Lao Động trong tình trạng bị ảnh hường của rượu hoặc các chất kích thích mà không phải do bác sĩ ke toa, trừ phi Người Được Bảo Hiểm phải chịu trách nhiệm theo Luật dịnh;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Ngộ độc thức ăn đồ uống;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bất kỳ cái chết hay mất khả năng nào do cố ý tự gây thương tích cho bân thân hoặc cố ý làm trầm trọng thêm vết thương do tai nạn;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Các tai nạn, thương tật, bệnh nghề nghiệp xảy ra ngoài phạm vi lãnh thố của nước Cộng Xã Hội Chủ Nghĩa Việt Nam;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Bất kỳ trách nhiệm thực tế hay trách nhiệm mặc định nào dối với khiếu nại hoặc các khiếu nại về tổn thất hay các tốn hại trực tiếp hay gián tiếp phát sinh từ, là hậu quả của, hay trong bât kỳ cách nào khác có liên quan tới amiăng hoặc nguyên liệu chứa amíăng băng bât cứ hình thức hay số lượng nào;</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Thương tật của Người Lao Động gây ra do ẩu đá, trừ trường hợp tự vệ.</td>
                                                
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g12') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>
                                                    Loại trừ cho bảo hiểm tai nạn  <br>
                                                    - Thương tật thân thể xảy ra khi NĐBH đang tham gia tập luyện hoặc tham gia thi đấu các môn thể thao chuyên nghiệp hoặc thương tật thân thể xảy ra khi NĐBH đang tham gia vào (hay dang luyện tập hay tham gia huấn luyện đặc biệt nào) bất kỳ các hoạt động có tính chất nguy hiểm. <br>
                                                    - Thương tật thân thể hoặc chết hoặc chi phí ỵ tế phát siĩnh từ hoặc là hậu quả của việc bị ốm đau hay tàn tật cả về thể lực và trí lực đã có sẵn từ tước khi xảy ra tai Him mà ốm đau hay tàn tật đó không được khai báo cho VNI và không được VNI chấp thuận bằng văn bản. <br>
                                                    - NĐBH tự tử, cố tình gây thương tích, đánh nhau trừ phi cluing minh được đó là hàna động tự vệ, cứu người, bảo vệ tài sản.<br>
                                                    - Những chi phí liên quan tới việc NĐBĨT tham gia vào hay cố tình thực hiện những hành vi vi phạm pháp luật<br>
                                                    - Các hoạt động hàng Ikhông trừ khi là hành khách đi trên máy bay thuộc Hãng hàng không có giấy phép hợp pháp kinh doanh chuyên chở hành khách.<br>
                                                    - Tai nạn do sử dụng chất kích thích như: rượu, bia, ma tuý,...<br>
                                                    - Các chi phí trực tiếp hoặc gián tiếp phát sinh từ hoặc yêu cầu từ hậu quả của: chiên tranh, bạo động, sự xâm lược, hành động thù địch hoặc hoạt động hiếu chiến tử các thề lực thù địch bên ngoài (dù có tuyên bố hay không), đình công, nội chiến, nổi loạn, khởi nghĩa, khủng bô, cướp chính, quyên, bạo động, dần biến, phiến loạn, các hành động quân sự hoặc hành động của bất kỳ người câm đầu của tổ chức nào nhằm lật đổ, đe dọa chính quyền, kiểm soát bằng vũ lực, killing bố hoặc hành động bạo lực.<br>
                                                    - Hạt nhân, phóng xạ
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>
                                                    Loại trừ cho bảo hiểm ốm đau bệnh tật <br>
                                                    -   Chi phí và điều trị ốm đau bệnh tật: phát sinh ừong ba mươi (30) ngày đầu tiên kể tò khi Hợp đồng bảo hiểm có hiệu lực. Chi phí cho thai sản trong vòng ba trăm sáu mươi lăm (365) ngày trường hợp sinh nở và 90 ngày với các trường hợp biến chứng. <br>
                                                    -   Các sản phẩm vitamin hoặc khoáng chất, các loại thuốc bổ sung cho chế độ dinh dưỡng, ăn kiêng bao gồm cả các sản phẩm làm đẹp (ngoại trừ để điều trị theo chẩn đoán, triệu chứng thiếu hụt Vitamin điển hình). <br>
                                                    -   Bất kỳ hình thức điều trị hoặc thuốc nào dựa vào thí nghiệm hoặc chưa được chứng minh dựa trên kiến thức y học được chấp nhận rộng rãi. <br>
                                                    -   Dịch vụ hoặc điều trị tại nhà hoặc các trung tâm điều trị bằng thủy lực, spa, trung tâm điều dưỡng, an dưỡng, bệnh xá hoặc trung tâm chăm sóc dài hạn mà khuông được coi là bệnh vỉện theo như định nghĩa ở trên. <br>
                                                    -   Kiểm ưa sức khỏe hoặc khám giám định y khoa mà không liên quan đến việc điều ưị bệnh tật. <br>
                                                    -   Điều trị các khuyết tật thoái hóa tự nhiên của mắt (bao gồm cận ,viễn, loạn thị), bất kỳ phẫu thuật nào đê hiệu chỉnh các khuyêt tật thoái hóa thính giác và thị giác.  <br>
                                                    -   Điều trị hoặc phẫu thuật khuyết tật thai nhi, các bệnh bẩm sinh, di truyền, những thương tật và chỉ định phẫu thuật có từ trước ngày bắt đầu bảo hiểm. <br>
                                                    -   Điều trị hoặc phẫu thuật theo yêu cầu của người được bảo hiểm và không liên quan đến việc điều trị và phẫu thuật bình thường do ngành y tế quy định. <br>
                                                    -   Giải phẫu thẩm mỹ hoặc phẫu thuật tạo hình trừ khi việc giải phẫu này nhằm mục đích tái tạo để phục hồi chức năng của cơ quan bị tổn thương phát sinh trong thời hạn bảo hiêm nêu trong Hợp đông/ Giấy chứng nhận bảo hiểm. <br>
                                                    -   Giải phẫu thẩm mỹ, chỉnh hình , phục hồi chức năng, chi phí cung cấp, duy trì hay chỉnh sửa các bộ phận hoặc dụng cụ giả được lắp đặt bên ngoài (bao gồm các; thiết bị/ bộ phận nhân tạo điều trị hay hô trợ điều trị cho các cơ quan nội tạng), làm chân, tay giả, mãt giả, răng giả,...hoặc các thiêt bị điều chỉnh, nạng chống, xe đẩy và các thiết bị khác. <br>
                                                    -   Chăm sóc trước sinh đê (khám thai định kỳ) và sau khi sinh dẻ (khám hậu sản) < 5 <br>
                                                    -   Sinh mổ theo yêu cầu của người được bảo hiểm và/hoặc thân r hân.  <br>
                                                    -   Thực hiện các biện pháp kế hoạch hóa gia đình, phá thai do nguyên nhân tâm lý hay xã hội và hậu quả từ việc phá thai đó Các xét nghiệm hoặc chữa trị liên quan đến triệt sản, đình sản hay các rối loạn chức năng sinh dục.  <br>
                                                    -   Những bệnh đặc biệt và bệnh có sẵn trong năm (12 tháng) đầu tiên được bảo hiểm.Tuy nhiên đối với hợp đồng tái tục, tất cà các bệnh đặc biệt, bệnh có sẵn sẽ được chấp nhận bôi thường với điều kiện  NĐBH trong vòng 12 tháng kể trên chưa: <br>
                                                    &nbsp;&nbsp;&nbsp;+ Phải đi khám để điều trị và xin tư vấn (kể cả kiểm tra sức khỏe), hoặc <br>
                                                    &nbsp;&nbsp;&nbsp;+ Phải dùng thuốc (bao gồm cả thuốc, thuốc kích thích, ăn kiêng đặc biệt hay tiêm). <br>
                                                    -   Những bệnh sau đây sẽ bị loại trừ trong năm đầu tiên tham gia bảo hiểm dù điều khoản loại trừ bệnh đặc biệt, bệnh có sẵn có áp dụng hay lchông: ung thư, hỏng các bộ phận nội tạng, các tiệnli và triệu chứng liên quan đến hệ thống; tạo máu, viêm gan mãn tính, thiếu hócmon sinh trưởng, đái tháo đường, Parkinson. <br>
                                                    -   Bảo hiểm sinh mạng cho những bệnh đặc: biệt, bệnh có sẵn và các bệnh liệt kê trên trong vòng 24 tháng; cho thai sản trong vòng 12 tháng <br>
                                                    -   Các bệnh lao, bệnh phong, sốt rét, bệnh nghề nghiệp. <br>
                                                    -   Điều trị răng nội trú hoặc phẫu thuật khoang miệng, nhổ răng sữa <br>
                                                    -   Hậu quả của việc uống rượu, bia, sử dụng các chất kích thích <br>
                                                    -   Điều trị bệnh tâm thần hoặc rối loạn tâm thần. <br>
                                                    -   Điều trị hoặc kiểm tra các bệnh liên quan đến bệnh hội chứng suy giảm miễn dịch (AIDS), các hội chứng phức tạp liên quan đến AIDS, hoặc hậu quả khác của bệnh AIDS. <br>
                                                    -   Điều trị những bệnh lây nhiễm qua đường tình dục. <br>
                                                    -   Điều trị ở những nước không thuộc phạm vi lãnh thổ của Chương trình. <br>
                                                    -   Hậu quả của nổ hạt nhân hoặc nhiễm phóng xạ hạt nhân, chất am ian g gây ra.<br>
                                                    -   Chi phí y tế liên quan tới cùng thương tật:, ốm đau, bệnh tật có thể được bồi thường từ những loại hình bảo hiêm khác. Trong trường hợp đó, VNI chỉ thanh toán khoản tiền vượt quá mức được bồi thường theo các đơn bảo hiểm khác đó hoặc giói hạn trách nhiệm trong Bảng; quyền lợi bảo hiểm thuộc đơn bảo hiểm này, số tiền nào nhỏ hơn sẽ được áp dụng. <br>
                                                    “ Các dịch vụ điều trị miễn phí tại bất kỳ bệnh viện nào. <br>
                                                    -   Điều trị y tế hoặc sử dụng thuốc không có sự chỉ dẫn của bảc sỹ. <br>
                                                    -   Tất cả các chi phí liên quan đến việc làm thủ tục xin thị thực xuất nhập cảnh và/hoặc hộ chiếu. <br>
                                                    -   Những chi phí phát sinh và/ hoặc tử vong do thảm họa thiên nhiên, thiên tai hay đại dịch gây ra. <br>
                                                    -   Chi phí phát sinh do điều trị tai nạn <br>

                                                </td>
                                                
                                            </tr>


                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g13') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Hành động cổ ý gây tai nạn của Người được bảo hiềm hoặc người thụ hường quyền lợi bảo hiểm</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Cố ý vì phạm che độ an toàn khi sử dụng điện do cơ quan quàn lý điện quy định.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm sử dụng rượu, bia, ma túy, và các chất kích thích khác.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Tai nạn xảy ra. do hậu quả gián tiếp của việc sử dụng điện (cháy, nổ do điện).</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Người được bảo hiểm bị chết hoặc bị thương tật thân thể không phải do dòng điện trực tiếp gây nên.</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Khi xảy ra tai nạn, Người được bảo hiểm chưa đóng phí bào hiểm theo quy định tại Điều 13 Quy tắc này.</td>
                                                
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == 'g16') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td></td>
                                                
                                            </tr>

                                        <?php elseif (!empty($GLOBALS["dk_loai_tru"]) && $GLOBALS["dk_loai_tru"] == '') : ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td></td>
                                                
                                            </tr>

  


                                        <?php else: ?>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều khoản loại trừ chiến tranh và nội chiến</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều khoản lại trừ rủi ro khủng bố</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều khoản loại trừ rủi ro hạt nhân</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều khoản loại trừ rủi ro liên quan đến công nghệ thông tin</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều khoản cấm vận</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều khoản loại trừ amiăng</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" value=""></td>
                                                <td>MA_DK_LOAI_TRU</td>
                                                <td>Điều khoản loại trừ khác</td>
                                                
                                            </tr>
                                        <?php endif; ?>
                                        
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-success" data-toggle="modal" data-target="#cap_nhap_dieu_khoan_loai_tru">+ Thêm</button>
                    <a href="#" class="btn bg-primary"><i class="icon-checkmark4 mr-1"></i>Chọn</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php inc('modal/modal_cap_nhap_dieu_khoan_loai_tru.php'); ?>

<!-- / Danh sách điều khoản loại trừ -->