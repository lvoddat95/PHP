<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet">
<style>
    
    #print-container {
        display: none;
        margin: 0;
        font-weight: 400;
        color: #212529;
        text-align: left;
        background-color: #fff;
        font-size: 10px;
        line-height: 17px;
        font-family: 'Roboto', sans-serif;
    }

    /*@media print {*/
        *::before,
        *::after,
        *{
            box-sizing: border-box;
            margin: 0; 
            padding: 0;
            /*-webkit-print-color-adjust: exact !important;*/
            text-shadow: none !important;
            box-shadow: none !important;
        }

        @page {
            size: a4;
            margin-top: 80px;
            margin-left: 0;
            margin-bottom: 0;
            margin-right: 0;
        }

        #print-container {
            display: block !important;
            min-width: 992px !important;
        }
        .print {
            float: left;
            width: 1000px;
        }
        .item{
            float: left;
            width: calc((100% / 3) - 60px);
            height: 330px;
            margin-left: 60px;
            margin-bottom: 150px;
            overflow: hidden;
            background-image: url('http://localhost/bhhk/app-assets/images/truoc.png') no-repeat;
        }

        .item:nth-child(3n + 1){
            margin-left: 30px;
        }

        .item:nth-child(9n+1){
            page-break-inside: avoid;
        }
        .item:nth-child(9n+9),
        .item:nth-child(9n+8),
        .item:nth-child(9n+7){
            margin-bottom: 0px;
        }
        p{
            margin-bottom: 0;
        }
        ul{
            margin-bottom: 3px;
        }
        .bigcity-boiz{
            text-transform: uppercase;
            text-align: center;
            float: right;
            margin-right: 1.5rem;
        }
        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }
        .lbl{
            display: inline-block;
            width: 69px;
        }
        .lbl2{
            display: inline-block;
            margin-right: 9px;
        }
        .fleft{
            float: left;
        }
        .fright{
            float: right;
        }
        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        .no-wrap{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .table-custom{
            display: table;
        }
        .table-custom > *{
            display: table-cell;
            vertical-align: top;
        }

    /*}*/
    
</style>
<div id="print-container">
    <div class="print">
        <div id="item_id_0" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đoàn Gia Bảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_1" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Minh Hiếu
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_2" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Tiến Đạt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_3" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Ngọc Thiên Kim
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_4" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ Minh Kiệt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    5
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_5" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Văn Trần Khôi Nguyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_6" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        A Dăm Nguyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    7
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_7" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Anh Thơ
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    8
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_8" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Lê Thiên Thảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    9
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_9" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hoàng Linh San
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    10
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_10" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Trần Anh Thư
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    11
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_11" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Minh Kỳ Thư
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    12
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_12" class="item">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Minh Diệu Thư
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    13
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_13" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lý Hoài An
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    14
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_14" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Anh Tú
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    15
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_15" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trương Phú Dương
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    16
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_16" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Anh Quân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    17
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_17" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đào Trương Bảo Hiền
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    18
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_18" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Quốc Gia Bảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    19
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_19" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Võ Quang Anh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    20
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_20" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Tấn Kiệt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    21
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_21" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ Khánh Huy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    22
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_22" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Hồ Huy Hoàng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    23
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_23" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Nguyễn Quỳnh Lam
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    24
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_24" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Khôi Nguyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    25
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_25" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Thái Hoàng Phong
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    26
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_26" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đỗ Hoàng Phúc
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    27
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_27" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Minh Quân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    28
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_28" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Thu Thảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    29
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_29" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Mạc An Thi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    30
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_30" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Mai Trường Hoàng Thịnh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    31
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_31" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Văn Nhật Tiến
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    32
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_32" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Ki Zi Ti Na
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    33
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_33" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Thùy Trâm
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    34
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_34" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Nguyễn Bảo Trâm
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    35
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_35" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trương Quang Trường
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    36
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_36" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Quang Tùng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    37
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_37" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Vũ Thục Uyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    38
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_38" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Khánh Chi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    39
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_39" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Thái Duy An
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    40
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_40" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phan Lê Hồng Ân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    41
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_41" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Quế Chi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    42
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_42" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trình Thanh Diệu
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    43
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_43" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Ngọc Linh Đan
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    44
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_44" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Tấn Đạt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    45
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_45" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Y Ka Hiu
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    46
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_46" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Nhật Linh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    47
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_47" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Văn Long Nhật
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    48
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_48" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đoàn Ngọc Bảo Nhi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    49
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_49" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Ngọc An Nhiên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    50
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_50" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Tạ Ngọc Ngân Vy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    51
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_51" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Ngọc Gia Hân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    52
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_52" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Hoàng Hiếu
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    53
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_53" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Lê Hoàn Mỹ
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    54
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_54" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Hồ Thảo Nguyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    55
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_55" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Tống Hạo Nhiên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    56
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_56" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Minh Quân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    57
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_57" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Gia Hưng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    58
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_58" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Kim Nhật
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    59
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_59" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Chí Dũng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    60
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_60" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Quỳnh Ly
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    61
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_61" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đinh Ngọc Vượng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    62
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_62" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Minh Khánh Ngọc
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    63
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_63" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Lưu Nguyễn
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    64
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_64" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Quang Huy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    65
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2014
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    1A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_65" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Hương Giang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    66
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_66" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hồ Xuân Nguyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    67
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_67" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Đình Phong
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    68
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_68" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Minh Quân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    69
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_69" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Thái An
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    70
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_70" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ Anh Tài
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    71
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_71" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ Trần An Nhiên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    72
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_72" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đặng Mia Thục Hân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    73
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_73" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Văn Tri
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    74
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_74" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trịnh Văn Hoàng Vũ
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    75
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_75" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Xuân Vi Linh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    76
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_76" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Ngô Hoàng Nam
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    77
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_77" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Nhã Khanh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    78
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_78" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Duy Tân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    79
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_79" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Thái Kiều Linh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    80
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_80" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Đỗ Quyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    81
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_81" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ Bùi Khánh Lâm
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    82
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_82" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Khải Phong
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    83
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_83" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Lê Quỳnh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    84
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_84" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phan Phúc An
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    85
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_85" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lâm Linh Đan
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    86
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_86" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đinh Trần Hoàng Anh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    87
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_87" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Hà Anh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    88
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_88" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đặng Ngọc Thảo Vy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    89
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_89" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đinh Như Phong
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    90
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_90" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Đăng Phong
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    91
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_91" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Nguyễn An Bình
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    92
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_92" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Ngô Việt Hòa
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    93
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_93" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Huỳnh Vương
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    94
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_94" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Nguyễn Chấn Vinh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    95
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_95" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Như Thảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    96
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_96" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phí Huy Hoàng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    97
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2013
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    2A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_97" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Ngọc Tuấn Huy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    98
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_98" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Duy Đạt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    99
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_99" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Quốc Hảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    100
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_100" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Phạm Thùy Dương
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    101
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_101" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Gia Huy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    102
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_102" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Phạm Hoàng Khang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    103
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_103" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Anh Thư
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    104
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_104" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Huỳnh Quang Minh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    105
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_105" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Gia Khôi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    106
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A1
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_106" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Y Phương Vi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    107
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_107" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Bùi Việt Anh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    108
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_108" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đặng Quốc Việt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    109
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_109" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phan Minh Quân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    110
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_110" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Hoàng Anh Khoa
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    111
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_111" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ Bùi Khánh Uyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    112
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_112" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Anh Quân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    113
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_113" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Quỳnh Anh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    114
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_114" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Gia Hân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    115
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A2
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_115" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Trắc Phi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    116
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_116" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Tô Nhã Thi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    117
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_117" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Phương Nhi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    118
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_118" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Đồng Bá Kim
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    119
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_119" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Cái Văn Khang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    120
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A4
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_120" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Thị Ngân Hà
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    121
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_121" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Dư Nguyễn Hùng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    122
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_122" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Nhất Huy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    123
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_123" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Mai Diệu Huyền
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    124
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_124" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Huỳnh Nguyễn Khải
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    125
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_125" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Gia Khánh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    126
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_126" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hoàng Ngọc Long
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    127
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_127" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Thân Đức Long
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    128
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_128" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Thế Ngọc
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    129
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_129" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Mai Đỗ Hoàng Nguyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    130
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_130" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lưu Trọng Nguyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    131
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_131" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hồ Minh Nguyệt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    132
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_132" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Lê Khánh Thi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    133
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_133" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Thị Thanh Huyền
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    134
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_134" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Bảo Vân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    135
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_135" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đinh Xuân Minh Vũ
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    136
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_136" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Ngô Yến Vy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    137
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2012
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A6
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_137" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Bích Ngọc
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    138
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_138" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Dương Bá Đạt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    139
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_139" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hồ Minh Huy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    140
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_140" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Minh Huyền
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    141
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_141" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Bảo Khiêm
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    142
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_142" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Bảo Lâm
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    143
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_143" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đinh Thị Quỳnh Mai
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    144
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_144" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Nguyễn Mộng Quỳnh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    145
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_145" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ Anh Tuấn
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    146
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_146" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Huỳnh Lê Thảo Nhi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    147
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_147" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Thị Tuyết Như
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    148
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_148" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đỗ Quốc Khang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    149
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_149" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Y Đào Thúy Trang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    150
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_150" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Thị Ngân Hà
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    151
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_151" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Kim Hoạt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    152
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_152" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đặng Trần Anh Dũng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    153
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_153" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Bùi Trúc Quỳnh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    154
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_154" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Điền Hải Yến
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    155
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_155" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đào Thị Anh Thư
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    156
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_156" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Vàng Anh Khôi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    157
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_157" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ Thị Thanh Trinh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    158
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_158" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Ngô Đoàn Thảo Nhi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    159
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_159" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đoàn Tiến Thành
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    160
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_160" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Đông Quỳnh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    161
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_161" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Quốc An
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    162
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_162" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lý Trọng Nhân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    163
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_163" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Hoàng Gia Bảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    164
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_164" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Hà Lan Anh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    165
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_165" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Ngọc Bích
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    166
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_166" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hồ Văn Khang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    167
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_167" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Dương Đông Nhi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    168
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_168" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Xuân Gia Phúc
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    169
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_169" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Vũ Thị Thảo Quyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    170
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_170" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Minh Trang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    171
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_171" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Nguyễn Thu Nhi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    172
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4D
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_172" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đào Trần Hoàng Tina
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    173
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4D
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_173" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        A Duy Lộc
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    174
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4D
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_174" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Gia Huy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    175
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4D
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_175" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Vũ Như Thùy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    176
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4D
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_176" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Võ Kim Khánh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    177
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4E
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_177" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Kim Ngân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    178
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4E
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_178" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Anh Nguyên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    179
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4E
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_179" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Hữu Thành
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    180
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4E
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_180" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Đỗ Gia Thuận
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    181
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4E
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_181" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Thái Trà My
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    182
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2011
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    4E
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_182" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trương Thiên Ân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    183
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_183" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Bảo Khang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    184
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_184" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đặng Nhật Hoàng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    185
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_185" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Hữu Thảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    186
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_186" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Pu Mạnh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    187
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_187" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Gia Bảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    188
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_188" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Thị Quỳnh Anh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    189
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_189" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Lê Duy Thức
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    190
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_190" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đậu Lê Huyền My
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    191
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_191" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Vũ Nguyên Minh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    192
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_192" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Ngọc Duy Tiến
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    193
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_193" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Hải Sơn
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    194
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_194" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đoàn Thanh Hoàng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    195
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_195" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Phạm Võ Bích Phương
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    196
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_196" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Gia Hùng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    197
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_197" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Trịnh Khánh Linh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    198
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_198" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đinh Ngọc Khánh Ny
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    199
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_199" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hồ Hà Quỳnh Như
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    200
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_200" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đoàn Duy Linh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    201
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_201" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Thế Hưng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    202
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5A
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_202" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Quang Đạt
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    203
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_203" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Huỳnh Long Hải
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    204
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_204" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Thảo Uyên Nhi
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    205
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_205" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Triều Thiên
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    206
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_206" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đôc Quỳnh Như
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    207
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5B
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_207" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đặng Nhật Hiếu
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    208
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_208" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Thành Hùng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    209
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_209" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Mạnh Cường
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    210
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_210" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Hoàng Bảo My
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    211
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/2010
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    5C
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_211" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trương Đỗ Quỳnh Anh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    212
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_212" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Long Bảo
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    213
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_213" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Hoàng Kim Đức
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    214
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_214" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Võ An Hòa
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    215
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_215" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Đặng Văn Hoàng
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    216
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_216" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hồ Ngọc Gia Huệ
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    217
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_217" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Trần Nguyễn Quốc Huy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    218
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_218" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Minh Khang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    219
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_219" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Minh Khang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    220
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_220" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Nhật Khang
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    221
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_221" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Hà Thị Thùy Linh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    222
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_222" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Lê Hữu Long
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    223
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_223" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Mai Thế Bảo Nam
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    224
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_224" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Kim Ngân
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    225
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_225" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Thái Ngọc Phú
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    226
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_226" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Dương Trúc Phương
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    227
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_227" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Duy Trực
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    228
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_228" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Anh Tuấn
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    229
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_229" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Bùi Quang Vinh
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    230
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_230" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Nguyễn Đan Vũ
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    231
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>

        <div id="item_id_231" class="item no-print">
            <div>
                <div class="text-center">
                    <i>132000011/G05</i>
                </div>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Thông tin người được bảo hiểm:</b>
                        <div>
                            <div>
                                <div class="fleft">
                                    <p class="no-wrap">
                                        <span class="lbl">Họ và tên:</span>
                                        Ngô Thị Yến Vy
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">STT:</span>
                                    232
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div>
                                <div class="fleft">
                                    <p>
                                        <span class="lbl">Ngày sinh:</span>
                                        01/01/1900
                                    </p>
                                </div>
                                <span class="fright">
                                    <span class="lbl2">Lớp:</span>
                                    3A3
                                </span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="table-custom">
                                <span class="lbl">Trường:</span>
                                <span>TRƯỜNG TIỂU HỌC PHAN CHU TRINH</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="list-unstyled">
                    <li>
                        <b>Số tiền bảo hiểm:</b>
                        <p>
                            Phạm vi bảo hiểm A:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                12,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm B:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                20,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm C:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                15,000,000 VNĐ
                            </span>
                        </p>
                        <p>
                            Phạm vi bảo hiểm D:
                            <span style="width: 98px; display: inline-block; text-align: right;">
                                10,000,000 VNĐ
                            </span>
                        </p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Thời hạn bảo hiểm:</b>
                        <p>Từ 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                        <p>Đến 7 giờ 00 ngày 30 tháng 10 năm 2021</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>
                        <b>Phí bảo hiểm: 105,000 VNĐ</b>
                        <p class="text-right">Cấp hồi 7 giờ 00 ngày 30 tháng 10 năm 2020</p>
                    </li>
                </ul>
                <p class="bigcity-boiz">
                    <b style="text-transform: uppercase;">
                        CÔNG TY BẢO HIỂM <br />
                        HÀNG KHÔNG <span>Tây Nguyên</span>
                    </b>
                </p>
            </div>
        </div>
    </div>
</div>
