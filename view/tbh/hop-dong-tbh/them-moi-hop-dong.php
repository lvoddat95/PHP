<?php require_once '../../../config.php'; ?>
<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'tbh,hop-dong-tbh'; ?>
<body>

    <div class="page-content home-page">

        <?php include_once SIDEBAR; ?>

        <div class="content-wrapper">

            <div class="content">

                <!-- Header -->
                <div class="header-top">
                    <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                        <i class="far fa-align-left"></i>
                    </button>
                    <div class="top-left">
                        <div class="breadcrumb">
                            <a href="<?php echo HTTP_PATH . 'view/tbh/hop-dong-tbh/'; ?>" class="breadcrumb-item"><i class="fad fa-file-certificate mr-1"></i>Hợp đồng tái bảo hiểm</a>
                            <span class="breadcrumb-item active">Thêm mới hợp đồng tái bảo hiểm</span>
                        </div>
                        <div class="d-md-none logo-mobile">
                            <a href="<?php echo HTTP_PATH; ?>" class="logo-text">
                                <div class="logo-img"><img src="<?php echo HTTP_PATH .'app-assets/images/logo/logo2.png'; ?>" alt="VNI Logo"></div>
                                <span class="text align-middle" style="font-weight: 900;">VNI</span>
                            </a>
                        </div>
                    </div>
                    <?php include_once TOP_RIGHT; ?>
                </div>
                <!-- /Header -->

                <!-- Content-block -->
                <div class="content-block">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-sticky">
                                    <div class="page-title">
                                        <div class="p-title">
                                            <p class="t-top"><i class="icon-certificate mr-2"></i>Thêm mới hợp đồng</p>
                                            <span class="desc">Vui lòng nhập đầy đủ thông tin vào trường bắt buộc có dấu <code>*</code>.</span>
                                        </div>
                                        <div class="p-button">
                                            <a href="" class="btn mr-1"><i class="fa fa-reply mr-1"></i> Quay lại</a>
                                            <a href="javascript:;" class="btn bg-primary"><i class="fa fa-save mr-1"></i> Lưu</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">

                                        <div class="form-box mb-3">
                                            <p class="text-primary-800 font-weight-bold"><i class="fa fa-info-circle mr-1"></i>Thông tin chung</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150 col-form-label">
                                                            Số hợp đồng: 
                                                            <span class="text-danger">*</span> 
                                                        </label>
                                                        <div class="col-content col-content-sm">
                                                            <input type="text" class="form-control " placeholder="" value="" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150 col-form-label">
                                                            Ngày hợp đồng: 
                                                        </label>
                                                        <div class="col-content col-content-sm">
                                                            <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-md-2">
                                                <div class="row form-group">
                                                    <label class="col-label col-label-150 col-form-label">Thời hạn hợp đồng:</label>
                                                    <div class="col-content date-to-date">
                                                        <div class="d-flex">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <span class="input-group-text">Từ ngày</span>
                                                                </span>
                                                                <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="">
                                                            </div>
                                                        </div>
                                                        <span class="ml-2 mr-2"><i class="far fa-arrow-right"></i></span>
                                                        <div class="d-flex">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <span class="input-group-text">Đến ngày</span>
                                                                </span>
                                                                <input type="text" class="form-control input-date datepicker " placeholder="dd/mm/yyyy" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Tiêu đề: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-xl">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Phương pháp tái: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-md">
                                                    <select select2="" class="form-control">
                                                        <option>--- Chọn ---</option>
                                                        <option>Kết hợp số thành và mức đôi</option>
                                                        <option >Mức đôi</option>
                                                        <option >Số thành</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150 col-form-label">TL đồng bảo hiểm cần tính lại treaty: <span class="text-danger">*</span></label>
                                                        <div class="col-content col-content-sm">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text">%</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row form-group">
                                                        <label class="col-label col-label-150 col-form-label">TL treaty tính lại<span class="text-danger">*</span></label>
                                                        <div class="col-content col-content-sm">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text">%</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">TL treaty tính lại với đơn nhận tái: <span class="text-danger">*</span></label>
                                                <div class="col-content col-content-sm">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">%</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Hoa hồng:</label>
                                                <div class="col-content col-content-sm">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">%</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Thông báo tổn thất ngay:</label>
                                                <div class="col-content col-content-md">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-money text-right" placeholder="0" value="0" >
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">USD</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Thu đòi bồi thường ngay:</label>
                                                <div class="col-content col-content-md">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-money text-right" placeholder="0" value="0" >
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">USD</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Kì thanh toán:</label>
                                                <div class="col-content col-content-xs">
                                                    <input type="text" class="form-control input-number text-center" placeholder="0" value="0" >
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <label class="col-label col-label-150 col-form-label">Tình trạng áp dụng:<span class="text-danger">*</span></label>
                                                <div class="col-content col-content-xl d-inline-flex align-items-center">
                                                    <div class="button-switch mr-2">
                                                        <input type="checkbox" id="tttpv" class="switch" name="tttpv" checked="">
                                                        <label for="tttpv" data-off="Không" data-on="Có"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-box mb-3">
                                            <p class="text-primary-800 font-weight-bold"><i class="icon-grid mr-1"></i>Danh sách nhà tái</p>
                                            <hr class="border-dashed border-silver mb-2">

                                            <div class="form-group" repeater>
                                                <table class="table datatable table-bordered" data-paging="false" data-info="false" data-ordering="false" data-searching="false">
                                                    <thead class="thead-light-3">
                                                        <tr>
                                                            <th><span class="text-danger">*</span> Tên công ty</th>
                                                            <th class="w12p text-center"><span class="text-danger">*</span> TL tham gia(%)</th>
                                                            <th class="w1p text-center">#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="danh-sach-nha-tai">
                                                        <tr data-repeater-item style="display: none">
                                                            <td>
                                                                <select select2 class="form-control">
                                                                    <option value="">--- Chọn ---</option>
                                                                    <option name="AAA" value="077383A2-0738-4244-BAB1-E071456E3DD7">AAA</option>
                                                                    <option name="ABIC" value="06E022C8-5C89-4EA9-B742-0FB03E49BA29">ABIC</option>
                                                                    <option name="ABIC (thừa, đề nghị không chọn)" value="907943B4-D0A8-4F1D-889F-6D5590C3CAEA">ABIC (thừa, đề nghị không chọn)</option>
                                                                    <option name="ACE Vietnam" value="B9480E38-561B-46E4-9694-FC0B2E9A3BB9">ACE Vietnam</option>
                                                                    <option name="ACR" value="6B66E7BC-4E2D-47C5-9FF3-14EF40913195">ACR</option>
                                                                    <option name="AIG" value="30DA65C3-3548-44A8-BEE3-9A5768C0B493">AIG</option>
                                                                    <option name="Al Wasl Insurance Brokers Limited" value="2EEE609D-2ADC-473C-9660-1A6257C46069">Al Wasl Insurance Brokers Limited</option>
                                                                    <option name="Allianz Global Corporate &amp; Specialty AG" value="68389780-1771-4AB3-B81A-41BDDC4B368D">Allianz Global Corporate &amp; Specialty AG</option>
                                                                    <option name="Aon Benfield" value="34F1A717-9160-4CC0-916A-59E047CCCA8F">Aon Benfield</option>
                                                                    <option name="AON Benfield Asia PTE Ltd" value="E2A4252E-8AA1-4318-BC9D-A9BC9277D37B">AON Benfield Asia PTE Ltd</option>
                                                                    <option name="Aon Vietnam" value="44BA7B82-F04F-4EE8-8DE1-D34961B359E8">Aon Vietnam</option>
                                                                    <option name="Argenta" value="4F288736-F873-4769-84C3-1AABCE67DBDA">Argenta</option>
                                                                    <option name="ARIG" value="AF192D19-F987-4D14-BAB8-19D8F0F9D55D">ARIG</option>
                                                                    <option name="Bank of China Group Insurance Company Limited" value="F638429A-D5A3-48E4-92EB-715875E5989C">Bank of China Group Insurance Company Limited</option>
                                                                    <option name="Bảo hiểm Hùng Vương" value="1C976808-195F-47B4-9AA0-F925DF04CB57">Bảo hiểm Hùng Vương</option>
                                                                    <option name="Bảo hiểm Viễn Đông (thừa, đề nghị không chọn)" value="3D03CC34-427C-47AE-8C14-926EB7628DF2">Bảo hiểm Viễn Đông (thừa, đề nghị không chọn)</option>
                                                                    <option name="Bảo Long (thừa, đề nghị không chọn)" value="9F91F219-3D2F-4A86-801B-7B7E99D9F8AB">Bảo Long (thừa, đề nghị không chọn)</option>
                                                                    <option name="Bảo Minh (thừa, đề nghị không chọn)" value="9A354118-F398-4956-AD0E-4ABF9B26DD4C">Bảo Minh (thừa, đề nghị không chọn)</option>
                                                                    <option name="Bảo Việt (thừa, đề nghị không chọn)" value="E97C3E6F-1F60-4D32-92DB-CCFA4598D068">Bảo Việt (thừa, đề nghị không chọn)</option>
                                                                    <option name="Baolong" value="D86BE16F-6F50-4D82-9CCA-5788E40318C0">Baolong</option>
                                                                    <option name="Baominh" value="A8EADC72-8551-4EEE-84C1-228930A81379">Baominh</option>
                                                                    <option name="Baoviet" value="8ED5468D-E840-4888-BF6B-4B0E38983867">Baoviet</option>
                                                                    <option name="Best Re" value="B0080BC8-6FAD-46DF-86BF-C77A94407F3D">Best Re</option>
                                                                    <option name="Best Re (thừa, đề nghị không chọn)" value="0535FB0F-24E5-49B2-9634-2CE534883E0B">Best Re (thừa, đề nghị không chọn)</option>
                                                                    <option name="BIC" value="6495F5D7-761B-4FC0-819E-51CFC3433E2F">BIC</option>
                                                                    <option name="BSH" value="23BC645F-F5A6-4A34-91B8-E40D8310466D">BSH</option>
                                                                    <option name="Cathay Insurance Vietnam" value="0B370FCA-C4CE-4FB4-B16F-161B007D1BF3">Cathay Insurance Vietnam</option>
                                                                    <option name="Catlin" value="4D0EE39F-E122-4C6F-B636-8446E1C44407">Catlin</option>
                                                                    <option name="CCR" value="70A9E856-4433-4C34-A87C-6B4B252E9EB3">CCR</option>
                                                                    <option name="Chartis Insurance UK Ltd" value="0A1D39A7-5BE1-46EA-A1CD-19A06B31E538">Chartis Insurance UK Ltd</option>
                                                                    <option name="Chartis Vietnam" value="3869197A-912B-4F7D-B9CF-160D75D9ACE3">Chartis Vietnam</option>
                                                                    <option name="China Property and Casualty Company Reinsurance Corporation" value="1D06639D-DE58-4B04-BCA3-B7FF096F8391">China Property and Casualty Company Reinsurance Corporation</option>
                                                                    <option name="CHUBB" value="664B58F7-5068-4B2E-9D37-2251AFBD72AA">CHUBB</option>
                                                                    <option name="COOPER GAY (ASIA) PTE LTD" value="1AADAE92-63B5-4C95-BE9A-697C55A3CC66">COOPER GAY (ASIA) PTE LTD</option>
                                                                    <option name="Fubon Việt Nam" value="E00BC2CE-33F1-4455-A112-EC0952C6120B">Fubon Việt Nam</option>
                                                                    <option name="Gard" value="DA53AD7B-8049-4B47-A469-A6A8321CB30A">Gard</option>
                                                                    <option name="GIC" value="44A8A368-754F-43D5-AB76-EA49D58FC080">GIC</option>
                                                                    <option name="GIC (thừa 2, đề nghị không chọn)" value="5AECEF35-486E-4A41-80A8-40859D9C3FBB">GIC (thừa 2, đề nghị không chọn)</option>
                                                                    <option name="GIC Re" value="300ACE09-2A61-4390-BB6F-4E16633F5C91">GIC Re</option>
                                                                    <option name="GMIC" value="CC521833-AE77-47FD-9E69-A60CE8952E67">GMIC</option>
                                                                    <option name="Gras Savoye Willis Vietnam" value="BFDD372C-0EF0-4F24-A697-FC3B385029E8">Gras Savoye Willis Vietnam</option>
                                                                    <option name="Groupama" value="EA3BA5A9-6C31-473F-9831-4F0E742530BB">Groupama</option>
                                                                    <option name="Guy Carpenter &amp; Co Pte Ltd" value="B2E05A9B-7DAB-4344-811E-7391C44E04B4">Guy Carpenter &amp; Co Pte Ltd</option>
                                                                    <option name="HD Insurance" value="43B864EA-D47D-42D3-828F-96601B0FDE4F">HD Insurance</option>
                                                                    <option name="HLAP Ltd" value="9DA88DDB-1421-42F6-9AE0-0EC62CD8146C">HLAP Ltd</option>
                                                                    <option name="HLAP Ltd (Hannover Re)" value="A1A61958-14B0-4258-90D1-EC1D2C063FE9">HLAP Ltd (Hannover Re)</option>
                                                                    <option name="HOWDEN SPECIALTY" value="DA9D60C3-BB65-4BA5-883B-A6F98E82DFA7">HOWDEN SPECIALTY</option>
                                                                    <option name="Huatai Insurance Company of China Ltd" value="166A0A9B-A492-47E2-B805-0157A0FCFAAB">Huatai Insurance Company of China Ltd</option>
                                                                    <option name="Jardine Lloyd Thompson" value="E16E08EA-7528-446C-BC42-45C538E2732A">Jardine Lloyd Thompson</option>
                                                                    <option name="Jardine Lloyd Thompson - Việt Nam(JLT)" value="499500E0-FC85-4A06-9935-F97AEE047197">Jardine Lloyd Thompson - Việt Nam(JLT)</option>
                                                                    <option name="Kiln" value="0EDFC179-3CAB-40C3-AA4A-97F402FA54E5">Kiln</option>
                                                                    <option name="Korean Re" value="419D1601-AA87-4044-88CF-DDA12E5AE2D0">Korean Re</option>
                                                                    <option name="KP&amp;I" value="768EE201-25B1-4EAA-99D2-21505EAA3091">KP&amp;I</option>
                                                                    <option name="Kuwait Re" value="984FABC8-1970-4500-8F0B-3A70B7B64EAF">Kuwait Re</option>
                                                                    <option name="Labuan Re" value="C898317C-411E-4FCF-9972-94A07C729A63">Labuan Re</option>
                                                                    <option name="Liberty Singapore" value="46936017-14C2-4672-A147-25CDD6D36E3D">Liberty Singapore</option>
                                                                    <option name="London Steamship" value="0986F1C1-575E-485B-AB16-6C5BA96A49E0">London Steamship</option>
                                                                    <option name="Malakut" value="28409F0D-35ED-41EE-8420-3A346045AB24">Malakut</option>
                                                                    <option name="Malaysian Re" value="D0D4228D-7E56-4175-870D-F2B849C715B1">Malaysian Re</option>
                                                                    <option name="MARITIME MUTUAL P&amp;I" value="30051E55-62CD-46C5-9FA4-59D87EC701E8">MARITIME MUTUAL P&amp;I</option>
                                                                    <option name="Marnix" value="943197B9-72B2-4053-8EC0-509607A3D47F">Marnix</option>
                                                                    <option name="Marsh Vietnam Ltd" value="6CB70580-C509-4767-B182-FDCDDDE54C27">Marsh Vietnam Ltd</option>
                                                                    <option name="MIC" value="ACA36C1E-D3C1-4C4F-BE6A-360D49D3ADA7">MIC</option>
                                                                    <option name="MSIG" value="C4367B21-021A-4A12-80F7-4E017AFCE753">MSIG</option>
                                                                    <option name="Myanmar Insurance Company" value="9322CB40-59FE-4790-A322-6803C489C289">Myanmar Insurance Company</option>
                                                                    <option name="New Reinsurance Company Ltd" value="B1176B8B-F655-47BF-9989-A347DBAD801A">New Reinsurance Company Ltd</option>
                                                                    <option name="NEW WORLD MARINE INSURANCE CONSULTANTS LTD (NW)" value="99979067-A165-4CAC-9FA3-B0C28B7FEB7C">NEW WORLD MARINE INSURANCE CONSULTANTS LTD (NW)</option>
                                                                    <option name="Pana Harrison (Asia) Pte Ltd" value="07BC8046-E94D-45CC-9321-8D6E8CC2EFCE">Pana Harrison (Asia) Pte Ltd</option>
                                                                    <option name="PICC Property and Casualty Company Limited" value="2D46D504-2233-498A-8F8F-FE17E01C62B5">PICC Property and Casualty Company Limited</option>
                                                                    <option name="Pioneer Insurance &amp; Reinsurance Brokers Pvt Ltd" value="250B8C07-4E94-499F-B01E-1A7990F67B47">Pioneer Insurance &amp; Reinsurance Brokers Pvt Ltd</option>
                                                                    <option name="PJICO" value="7551E505-2AF1-497B-9219-4DD3A0B385EC">PJICO</option>
                                                                    <option name="PJICO (thừa, đề nghị không chọn)" value="F86846CA-322D-41BB-A118-F38878FA7033">PJICO (thừa, đề nghị không chọn)</option>
                                                                    <option name="Protection Re" value="3B56ED31-2C54-4D4C-909E-63D3C264ED77">Protection Re</option>
                                                                    <option name="PTI" value="A31E3D98-0766-4310-A270-1B087EC2AE46">PTI</option>
                                                                    <option name="PTI (thừa, đề nghị không chọn)" value="F8AC13CF-95F6-42A5-828C-44824C1011C6">PTI (thừa, đề nghị không chọn)</option>
                                                                    <option name="PVI" value="D3299B0D-1371-427D-AF03-D7EC4A0EBC38">PVI</option>
                                                                    <option name="PVI (thừa, đề nghị không chọn)" value="FAF757F5-77DA-4284-AECE-5B90B4A771EC">PVI (thừa, đề nghị không chọn)</option>
                                                                    <option name="PVI Re" value="81098B17-1BCF-4445-B968-E77F14167C35">PVI Re</option>
                                                                    <option name="QBE Vietnam" value="19AFFC16-6F0C-41D2-988E-97C1A8717E6A">QBE Vietnam</option>
                                                                    <option name="S.O.P" value="5213C4A8-AF3E-460C-8E7F-802DF1F3764D">S.O.P</option>
                                                                    <option name="Samsung Vina" value="389AB2A3-2C0C-4D98-AB04-7DC891073051">Samsung Vina</option>
                                                                    <option name="Save Re" value="80B5B724-604A-4BD3-B0DE-696291CF5874">Save Re</option>
                                                                    <option name="SCR" value="23079A54-4035-4C72-A55B-4F11B733743D">SCR</option>
                                                                    <option name="Sirius International" value="E248FCA6-33F0-480D-8F3E-D20F773AD31E">Sirius International</option>
                                                                    <option name="SRC Morrocco" value="81318CC2-8C96-4ABB-9884-985339D120B4">SRC Morrocco</option>
                                                                    <option name="Standard Insurance Co. Brunei" value="125B985D-5113-4A6B-9D85-80AA26E8DFB8">Standard Insurance Co. Brunei</option>
                                                                    <option name="SVIC" value="C60B35D8-CF62-4ED9-A55B-0312B1F5DBA3">SVIC</option>
                                                                    <option name="Taiping Re" value="CBB168D2-98FA-41C1-BC9F-4B35EE19560B">Taiping Re</option>
                                                                    <option name="Toa Re" value="8729F67D-5DBD-4AEC-A20A-21B2A35A76A5">Toa Re</option>
                                                                    <option name="Tokio Marine Global Re" value="818A1C89-491E-47F6-8012-35F4031B8172">Tokio Marine Global Re</option>
                                                                    <option name="Trans Re" value="572833C6-1463-4D51-80B8-BC0A4D43DE07">Trans Re</option>
                                                                    <option name="Trust" value="2093A03A-0CB8-400B-8634-32B38B83C594">Trust</option>
                                                                    <option name="Tugu Insurance Company Limited" value="47B77399-6BE8-4CDC-A4FA-5B3F4393BBB6">Tugu Insurance Company Limited</option>
                                                                    <option name="UIB Asia Reinsurance Brokers Pte Ltd" value="982D0AF6-4FE5-4E92-9AF7-0BA15A824464">UIB Asia Reinsurance Brokers Pte Ltd</option>
                                                                    <option name="UIC" value="C018FC59-8278-4B36-A6EF-988DF0B9D936">UIC</option>
                                                                    <option name="UIC (thừa, đề nghị không chọn)" value="7197245A-328F-4FB0-885C-4F46D7F44C31">UIC (thừa, đề nghị không chọn)</option>
                                                                    <option name="VASS" value="A532D7B5-C8D2-447A-8CA1-9C7854CCA607">VASS</option>
                                                                    <option name="Vietinsco" value="5B12CE3B-70D5-4283-BBB9-2E8D74F868DA">Vietinsco</option>
                                                                    <option name="Vinare" value="F89234B6-4624-4E6B-913D-27FE465D22B0">Vinare</option>
                                                                    <option name="Vinare (thừa 2, đề nghị không chọn)" value="85B3D6A0-7C96-4511-BF0E-D4CD42BDA553">Vinare (thừa 2, đề nghị không chọn)</option>
                                                                    <option name="Vinare (thừa, đề nghị không chọn)" value="E1D5C3F8-2B88-42FB-A4E3-0560FE455BF6">Vinare (thừa, đề nghị không chọn)</option>
                                                                    <option name="West Of England" value="3ED7AFE8-7536-40D8-9EAD-8BC1FD76C31B">West Of England</option>
                                                                    <option name="Willis London" value="98628181-6D9B-4CC9-BA9C-7B30471B54FF">Willis London</option>
                                                                    <option name="Willis Singapore" value="E18ED965-6D0C-45D6-A569-CDFCCF1CB098">Willis Singapore</option>
                                                                    <option name="Willis Singapore (ACR)" value="CA7DE432-F0AA-46EA-806C-C796DF1D0532">Willis Singapore (ACR)</option>
                                                                    <option name="Xuân Thành (XTI)" value="80545619-6A69-47BB-8A60-B976CC8142B8">Xuân Thành (XTI)</option>
                                                                </select>
                                                            </td>
                                                            <td><input type="text" class="form-control input-float text-center" value="" placeholder="0"></td>
                                                            <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <select select2 class="form-control">
                                                                    <option value="">--- Chọn ---</option>
                                                                    <option name="AAA" value="077383A2-0738-4244-BAB1-E071456E3DD7">AAA</option>
                                                                    <option name="ABIC" value="06E022C8-5C89-4EA9-B742-0FB03E49BA29">ABIC</option>
                                                                    <option name="ABIC (thừa, đề nghị không chọn)" value="907943B4-D0A8-4F1D-889F-6D5590C3CAEA">ABIC (thừa, đề nghị không chọn)</option>
                                                                    <option name="ACE Vietnam" value="B9480E38-561B-46E4-9694-FC0B2E9A3BB9">ACE Vietnam</option>
                                                                    <option name="ACR" value="6B66E7BC-4E2D-47C5-9FF3-14EF40913195">ACR</option>
                                                                    <option name="AIG" value="30DA65C3-3548-44A8-BEE3-9A5768C0B493">AIG</option>
                                                                    <option name="Al Wasl Insurance Brokers Limited" value="2EEE609D-2ADC-473C-9660-1A6257C46069">Al Wasl Insurance Brokers Limited</option>
                                                                    <option name="Allianz Global Corporate &amp; Specialty AG" value="68389780-1771-4AB3-B81A-41BDDC4B368D">Allianz Global Corporate &amp; Specialty AG</option>
                                                                    <option name="Aon Benfield" value="34F1A717-9160-4CC0-916A-59E047CCCA8F">Aon Benfield</option>
                                                                    <option name="AON Benfield Asia PTE Ltd" value="E2A4252E-8AA1-4318-BC9D-A9BC9277D37B">AON Benfield Asia PTE Ltd</option>
                                                                    <option name="Aon Vietnam" value="44BA7B82-F04F-4EE8-8DE1-D34961B359E8">Aon Vietnam</option>
                                                                    <option name="Argenta" value="4F288736-F873-4769-84C3-1AABCE67DBDA">Argenta</option>
                                                                    <option name="ARIG" value="AF192D19-F987-4D14-BAB8-19D8F0F9D55D">ARIG</option>
                                                                    <option name="Bank of China Group Insurance Company Limited" value="F638429A-D5A3-48E4-92EB-715875E5989C">Bank of China Group Insurance Company Limited</option>
                                                                    <option name="Bảo hiểm Hùng Vương" value="1C976808-195F-47B4-9AA0-F925DF04CB57">Bảo hiểm Hùng Vương</option>
                                                                    <option name="Bảo hiểm Viễn Đông (thừa, đề nghị không chọn)" value="3D03CC34-427C-47AE-8C14-926EB7628DF2">Bảo hiểm Viễn Đông (thừa, đề nghị không chọn)</option>
                                                                    <option name="Bảo Long (thừa, đề nghị không chọn)" value="9F91F219-3D2F-4A86-801B-7B7E99D9F8AB">Bảo Long (thừa, đề nghị không chọn)</option>
                                                                    <option name="Bảo Minh (thừa, đề nghị không chọn)" value="9A354118-F398-4956-AD0E-4ABF9B26DD4C">Bảo Minh (thừa, đề nghị không chọn)</option>
                                                                    <option name="Bảo Việt (thừa, đề nghị không chọn)" value="E97C3E6F-1F60-4D32-92DB-CCFA4598D068">Bảo Việt (thừa, đề nghị không chọn)</option>
                                                                    <option name="Baolong" value="D86BE16F-6F50-4D82-9CCA-5788E40318C0">Baolong</option>
                                                                    <option name="Baominh" value="A8EADC72-8551-4EEE-84C1-228930A81379">Baominh</option>
                                                                    <option name="Baoviet" value="8ED5468D-E840-4888-BF6B-4B0E38983867">Baoviet</option>
                                                                    <option name="Best Re" value="B0080BC8-6FAD-46DF-86BF-C77A94407F3D">Best Re</option>
                                                                    <option name="Best Re (thừa, đề nghị không chọn)" value="0535FB0F-24E5-49B2-9634-2CE534883E0B">Best Re (thừa, đề nghị không chọn)</option>
                                                                    <option name="BIC" value="6495F5D7-761B-4FC0-819E-51CFC3433E2F">BIC</option>
                                                                    <option name="BSH" value="23BC645F-F5A6-4A34-91B8-E40D8310466D">BSH</option>
                                                                    <option name="Cathay Insurance Vietnam" value="0B370FCA-C4CE-4FB4-B16F-161B007D1BF3">Cathay Insurance Vietnam</option>
                                                                    <option name="Catlin" value="4D0EE39F-E122-4C6F-B636-8446E1C44407">Catlin</option>
                                                                    <option name="CCR" value="70A9E856-4433-4C34-A87C-6B4B252E9EB3">CCR</option>
                                                                    <option name="Chartis Insurance UK Ltd" value="0A1D39A7-5BE1-46EA-A1CD-19A06B31E538">Chartis Insurance UK Ltd</option>
                                                                    <option name="Chartis Vietnam" value="3869197A-912B-4F7D-B9CF-160D75D9ACE3">Chartis Vietnam</option>
                                                                    <option name="China Property and Casualty Company Reinsurance Corporation" value="1D06639D-DE58-4B04-BCA3-B7FF096F8391">China Property and Casualty Company Reinsurance Corporation</option>
                                                                    <option name="CHUBB" value="664B58F7-5068-4B2E-9D37-2251AFBD72AA">CHUBB</option>
                                                                    <option name="COOPER GAY (ASIA) PTE LTD" value="1AADAE92-63B5-4C95-BE9A-697C55A3CC66">COOPER GAY (ASIA) PTE LTD</option>
                                                                    <option name="Fubon Việt Nam" value="E00BC2CE-33F1-4455-A112-EC0952C6120B">Fubon Việt Nam</option>
                                                                    <option name="Gard" value="DA53AD7B-8049-4B47-A469-A6A8321CB30A">Gard</option>
                                                                    <option name="GIC" value="44A8A368-754F-43D5-AB76-EA49D58FC080">GIC</option>
                                                                    <option name="GIC (thừa 2, đề nghị không chọn)" value="5AECEF35-486E-4A41-80A8-40859D9C3FBB">GIC (thừa 2, đề nghị không chọn)</option>
                                                                    <option name="GIC Re" value="300ACE09-2A61-4390-BB6F-4E16633F5C91">GIC Re</option>
                                                                    <option name="GMIC" value="CC521833-AE77-47FD-9E69-A60CE8952E67">GMIC</option>
                                                                    <option name="Gras Savoye Willis Vietnam" value="BFDD372C-0EF0-4F24-A697-FC3B385029E8">Gras Savoye Willis Vietnam</option>
                                                                    <option name="Groupama" value="EA3BA5A9-6C31-473F-9831-4F0E742530BB">Groupama</option>
                                                                    <option name="Guy Carpenter &amp; Co Pte Ltd" value="B2E05A9B-7DAB-4344-811E-7391C44E04B4">Guy Carpenter &amp; Co Pte Ltd</option>
                                                                    <option name="HD Insurance" value="43B864EA-D47D-42D3-828F-96601B0FDE4F">HD Insurance</option>
                                                                    <option name="HLAP Ltd" value="9DA88DDB-1421-42F6-9AE0-0EC62CD8146C">HLAP Ltd</option>
                                                                    <option name="HLAP Ltd (Hannover Re)" value="A1A61958-14B0-4258-90D1-EC1D2C063FE9">HLAP Ltd (Hannover Re)</option>
                                                                    <option name="HOWDEN SPECIALTY" value="DA9D60C3-BB65-4BA5-883B-A6F98E82DFA7">HOWDEN SPECIALTY</option>
                                                                    <option name="Huatai Insurance Company of China Ltd" value="166A0A9B-A492-47E2-B805-0157A0FCFAAB">Huatai Insurance Company of China Ltd</option>
                                                                    <option name="Jardine Lloyd Thompson" value="E16E08EA-7528-446C-BC42-45C538E2732A">Jardine Lloyd Thompson</option>
                                                                    <option name="Jardine Lloyd Thompson - Việt Nam(JLT)" value="499500E0-FC85-4A06-9935-F97AEE047197">Jardine Lloyd Thompson - Việt Nam(JLT)</option>
                                                                    <option name="Kiln" value="0EDFC179-3CAB-40C3-AA4A-97F402FA54E5">Kiln</option>
                                                                    <option name="Korean Re" value="419D1601-AA87-4044-88CF-DDA12E5AE2D0">Korean Re</option>
                                                                    <option name="KP&amp;I" value="768EE201-25B1-4EAA-99D2-21505EAA3091">KP&amp;I</option>
                                                                    <option name="Kuwait Re" value="984FABC8-1970-4500-8F0B-3A70B7B64EAF">Kuwait Re</option>
                                                                    <option name="Labuan Re" value="C898317C-411E-4FCF-9972-94A07C729A63">Labuan Re</option>
                                                                    <option name="Liberty Singapore" value="46936017-14C2-4672-A147-25CDD6D36E3D">Liberty Singapore</option>
                                                                    <option name="London Steamship" value="0986F1C1-575E-485B-AB16-6C5BA96A49E0">London Steamship</option>
                                                                    <option name="Malakut" value="28409F0D-35ED-41EE-8420-3A346045AB24">Malakut</option>
                                                                    <option name="Malaysian Re" value="D0D4228D-7E56-4175-870D-F2B849C715B1">Malaysian Re</option>
                                                                    <option name="MARITIME MUTUAL P&amp;I" value="30051E55-62CD-46C5-9FA4-59D87EC701E8">MARITIME MUTUAL P&amp;I</option>
                                                                    <option name="Marnix" value="943197B9-72B2-4053-8EC0-509607A3D47F">Marnix</option>
                                                                    <option name="Marsh Vietnam Ltd" value="6CB70580-C509-4767-B182-FDCDDDE54C27">Marsh Vietnam Ltd</option>
                                                                    <option name="MIC" value="ACA36C1E-D3C1-4C4F-BE6A-360D49D3ADA7">MIC</option>
                                                                    <option name="MSIG" value="C4367B21-021A-4A12-80F7-4E017AFCE753">MSIG</option>
                                                                    <option name="Myanmar Insurance Company" value="9322CB40-59FE-4790-A322-6803C489C289">Myanmar Insurance Company</option>
                                                                    <option name="New Reinsurance Company Ltd" value="B1176B8B-F655-47BF-9989-A347DBAD801A">New Reinsurance Company Ltd</option>
                                                                    <option name="NEW WORLD MARINE INSURANCE CONSULTANTS LTD (NW)" value="99979067-A165-4CAC-9FA3-B0C28B7FEB7C">NEW WORLD MARINE INSURANCE CONSULTANTS LTD (NW)</option>
                                                                    <option name="Pana Harrison (Asia) Pte Ltd" value="07BC8046-E94D-45CC-9321-8D6E8CC2EFCE">Pana Harrison (Asia) Pte Ltd</option>
                                                                    <option name="PICC Property and Casualty Company Limited" value="2D46D504-2233-498A-8F8F-FE17E01C62B5">PICC Property and Casualty Company Limited</option>
                                                                    <option name="Pioneer Insurance &amp; Reinsurance Brokers Pvt Ltd" value="250B8C07-4E94-499F-B01E-1A7990F67B47">Pioneer Insurance &amp; Reinsurance Brokers Pvt Ltd</option>
                                                                    <option name="PJICO" value="7551E505-2AF1-497B-9219-4DD3A0B385EC">PJICO</option>
                                                                    <option name="PJICO (thừa, đề nghị không chọn)" value="F86846CA-322D-41BB-A118-F38878FA7033">PJICO (thừa, đề nghị không chọn)</option>
                                                                    <option name="Protection Re" value="3B56ED31-2C54-4D4C-909E-63D3C264ED77">Protection Re</option>
                                                                    <option name="PTI" value="A31E3D98-0766-4310-A270-1B087EC2AE46">PTI</option>
                                                                    <option name="PTI (thừa, đề nghị không chọn)" value="F8AC13CF-95F6-42A5-828C-44824C1011C6">PTI (thừa, đề nghị không chọn)</option>
                                                                    <option name="PVI" value="D3299B0D-1371-427D-AF03-D7EC4A0EBC38">PVI</option>
                                                                    <option name="PVI (thừa, đề nghị không chọn)" value="FAF757F5-77DA-4284-AECE-5B90B4A771EC">PVI (thừa, đề nghị không chọn)</option>
                                                                    <option name="PVI Re" value="81098B17-1BCF-4445-B968-E77F14167C35">PVI Re</option>
                                                                    <option name="QBE Vietnam" value="19AFFC16-6F0C-41D2-988E-97C1A8717E6A">QBE Vietnam</option>
                                                                    <option name="S.O.P" value="5213C4A8-AF3E-460C-8E7F-802DF1F3764D">S.O.P</option>
                                                                    <option name="Samsung Vina" value="389AB2A3-2C0C-4D98-AB04-7DC891073051">Samsung Vina</option>
                                                                    <option name="Save Re" value="80B5B724-604A-4BD3-B0DE-696291CF5874">Save Re</option>
                                                                    <option name="SCR" value="23079A54-4035-4C72-A55B-4F11B733743D">SCR</option>
                                                                    <option name="Sirius International" value="E248FCA6-33F0-480D-8F3E-D20F773AD31E">Sirius International</option>
                                                                    <option name="SRC Morrocco" value="81318CC2-8C96-4ABB-9884-985339D120B4">SRC Morrocco</option>
                                                                    <option name="Standard Insurance Co. Brunei" value="125B985D-5113-4A6B-9D85-80AA26E8DFB8">Standard Insurance Co. Brunei</option>
                                                                    <option name="SVIC" value="C60B35D8-CF62-4ED9-A55B-0312B1F5DBA3">SVIC</option>
                                                                    <option name="Taiping Re" value="CBB168D2-98FA-41C1-BC9F-4B35EE19560B">Taiping Re</option>
                                                                    <option name="Toa Re" value="8729F67D-5DBD-4AEC-A20A-21B2A35A76A5">Toa Re</option>
                                                                    <option name="Tokio Marine Global Re" value="818A1C89-491E-47F6-8012-35F4031B8172">Tokio Marine Global Re</option>
                                                                    <option name="Trans Re" value="572833C6-1463-4D51-80B8-BC0A4D43DE07">Trans Re</option>
                                                                    <option name="Trust" value="2093A03A-0CB8-400B-8634-32B38B83C594">Trust</option>
                                                                    <option name="Tugu Insurance Company Limited" value="47B77399-6BE8-4CDC-A4FA-5B3F4393BBB6">Tugu Insurance Company Limited</option>
                                                                    <option name="UIB Asia Reinsurance Brokers Pte Ltd" value="982D0AF6-4FE5-4E92-9AF7-0BA15A824464">UIB Asia Reinsurance Brokers Pte Ltd</option>
                                                                    <option name="UIC" value="C018FC59-8278-4B36-A6EF-988DF0B9D936">UIC</option>
                                                                    <option name="UIC (thừa, đề nghị không chọn)" value="7197245A-328F-4FB0-885C-4F46D7F44C31">UIC (thừa, đề nghị không chọn)</option>
                                                                    <option name="VASS" value="A532D7B5-C8D2-447A-8CA1-9C7854CCA607">VASS</option>
                                                                    <option name="Vietinsco" value="5B12CE3B-70D5-4283-BBB9-2E8D74F868DA">Vietinsco</option>
                                                                    <option name="Vinare" value="F89234B6-4624-4E6B-913D-27FE465D22B0">Vinare</option>
                                                                    <option name="Vinare (thừa 2, đề nghị không chọn)" value="85B3D6A0-7C96-4511-BF0E-D4CD42BDA553">Vinare (thừa 2, đề nghị không chọn)</option>
                                                                    <option name="Vinare (thừa, đề nghị không chọn)" value="E1D5C3F8-2B88-42FB-A4E3-0560FE455BF6">Vinare (thừa, đề nghị không chọn)</option>
                                                                    <option name="West Of England" value="3ED7AFE8-7536-40D8-9EAD-8BC1FD76C31B">West Of England</option>
                                                                    <option name="Willis London" value="98628181-6D9B-4CC9-BA9C-7B30471B54FF">Willis London</option>
                                                                    <option name="Willis Singapore" value="E18ED965-6D0C-45D6-A569-CDFCCF1CB098">Willis Singapore</option>
                                                                    <option name="Willis Singapore (ACR)" value="CA7DE432-F0AA-46EA-806C-C796DF1D0532">Willis Singapore (ACR)</option>
                                                                    <option name="Xuân Thành (XTI)" value="80545619-6A69-47BB-8A60-B976CC8142B8">Xuân Thành (XTI)</option>
                                                                </select>
                                                            </td>
                                                            <td><input type="text" class="form-control input-float text-center" value="" placeholder="0"></td>
                                                            <td><a href="javascript:;" data-repeater-delete="" class="d-flex align-items-center font-weight-bold text-danger"><i class="icon-trash mr-1"></i>Xoá</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="border p-1" style="margin-top: -1px;">
                                                    <a href="javascript:;" data-repeater-create="" class="d-flex align-items-center justify-content-center font-weight-bold text-success"><i class="far fa-plus-circle mr-1"></i>Thêm</a>
                                                </div>
                                            </div>
                                        </div>

                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Content-block -->

                    <?php include_once MOBILE_NAV; ?>
                    <?php include_once BOTTOM; ?>
                </div>

            </div>

        </div>
        <?php inc('modal/qlac/cap_nhap_kenh_ban.php'); ?>



</body>

<?php include_once FOOTER; ?>