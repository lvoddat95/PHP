<?php require_once 'config.php'; ?>

<?php include_once HEADER; ?>
<?php $GLOBALS["menu"] = 'index'; ?>
<body>

    <div class="page-content home-page">

        <?php include_once SIDEBAR; ?>

        <div class="content-wrapper">

            <div class="content">

                <?php include_once 'view/inc/mobile-bottom.php'; ?>

                <!-- Header -->
                <div class="header-top">
                    <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                        <i class="far fa-align-left"></i>
                    </button>
                    <div class="top-left">
                        <div class="breadcrumb">
                            <a href="" class="breadcrumb-item"><i class="fad fa-home mr-1"></i> Trang chủ</a>
                            <span class="breadcrumb-item active">Ứng dụng</span>
                        </div>
                        <div class="d-md-none logo-mobile">
                            <a href="" class="logo-text">
                                <div class="logo-img"><img src="app-assets/images/logo/logo2.png" alt="VNI Logo"></div>
                                <span class="text align-middle" style="font-weight: 900;">VNI</span>
                            </a>
                        </div>
                    </div>

                    <?php include_once TOP_RIGHT; ?>

                </div>
                <!-- /Header -->
   
                <main>

                    
                    <a id="example" href="#" class="btn btn-success ">CLICK</a>
                    <div id="congrats" class="congrats" style="display: none;">
                        <div class="modal-congrats-top">
                            <img class="modal-congrats-icon u-imgResponsive" src="app-assets/images/cup.png" alt="Trophy" />
                            <div class="modal-congrats-header">Xin chúc mừng!</div>
                            <div class="modal-congrats-subheader">Đơn bảo hiểm số: HDTS12345 đã trúng giải thưởng trị giá <b style="color: #f44336;">300,000VNĐ</b> trong CTTĐ TEST tháng 07/2021</div><br>
                            <div class="modal-congrats-subheader">Đơn bảo hiểm số: HDTS12345 đã trúng giải thưởng trị giá 300,000VNĐ trong CTTĐ TEST tháng 07/2021</div>
                        </div>
                    </div>


                </main>
                

                <?php include_once BOTTOM; ?>

            </div>

        </div>

    </div>

</body>

<?php include_once FOOTER; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/zebra_dialog@latest/dist/css/flat/zebra_dialog.min.css" type="text/css">
     <script src="https://cdn.jsdelivr.net/npm/zebra_pin@2.0.0/dist/zebra_pin.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/zebra_dialog@latest/dist/zebra_dialog.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript" charset="utf-8" async defer></script>

 <a id="example" href="#" class="btn btn-success ">CLICK</a>
<div id="congrats" class="congrats" style="display: none;">
    <div class="modal-congrats-top">
        <img class="modal-congrats-icon u-imgResponsive" src="app-assets/images/cup.png" alt="Trophy" />
        <div class="modal-congrats-header">Xin chúc mừng!</div>
        <div class="modal-congrats-subheader">Đơn bảo hiểm số: HDTS12345 đã trúng giải thưởng trị giá <b style="color: #f44336;">300,000VNĐ</b> trong CTTĐ TEST tháng 07/2021</div><br>
        <div class="modal-congrats-subheader">Đơn bảo hiểm số: HDTS12345 đã trúng giải thưởng trị giá 300,000VNĐ trong CTTĐ TEST tháng 07/2021</div>
    </div>
</div>

<script>
    $(function() {
        $('#example').on('click', function() {
            new $.Zebra_Dialog(
                {
                    type: false,  
                    title: false,
                    custom_class: "modal-congrats", 
                    source: {
                        inline: $("#congrats").html()
                    },
                    buttons: [
                        {caption: "Xác nhận", callback: function() {
                            
                        }},
                    ]
                }
            );
        });
    });
</script>

<style type="text/css">

.u-imgResponsive {
    max-width: 100%;
}
.u-btn {
    max-width: 260px;
    flex: 0 0 100%;
    padding: 8px 14px;
    border: 0;
    background: linear-gradient(to top, rgba(255, 255, 255, 0) 0%, rgba(250, 198, 100, 0.27) 100%), #2976df;
    border-radius: 24px;
    color: #fff;
    font-size: 18px;
    letter-spacing: 1px;
    transition: all 0.2s ease;
}
.modal-btn {
    flex: 1;
    margin: 0;
    max-width: 190px;
}

.modal-btn {
    margin: 10px auto;
}
.u-btn.u-btn--success {
    background: #00d000;
}
.wrapper {
    min-height: 100vh;
}

.ZebraDialog.modal-congrats {
    border-radius: 10px;
    width: 100%;
    max-width: 530px;
    margin: 20px;
    overflow: hidden;
    box-shadow: 0 60px 80px 0 rgba(0, 0, 0, 0.4);
}
.ZebraDialog.modal-congrats .ZebraDialog_Body{
    height: 100% !important;
    padding: 0;
    margin: 0;
}
.ZebraDialog.modal-congrats .ZebraDialog_Buttons{
    text-align: center;
}
.ZebraDialog.modal-congrats .ZebraDialog_Buttons a{
    width: 260px;
    flex: 0 0 100%;
    padding: 8px 14px;
    border: 0;
    background: linear-gradient(to top, rgba(255, 255, 255, 0) 0%, rgba(250, 198, 100, 0.27) 100%), #00d000;
    border-radius: 24px;
    color: #fff;
    font-size: 18px;
    letter-spacing: 1px;
    transition: all 0.2s ease;
}
.modal-congrats-top {
    padding: 30px 30px 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    background: rgba(251, 251, 251, 2);
}
.modal-congrats-icon {
    display: block;
    max-width: 150px;
    margin: 0 auto 25px;
}
.modal-congrats-header {
    margin-bottom: 15px;
    font-size: 28px;
    font-weight: 600;
    letter-spacing: 2px;
    text-align: center;
}
.modal-congrats-subheader {
    max-width: 400px;
    margin: 0 auto;
    font-size: 16px;
    line-height: 1.3;
    letter-spacing: 1.25px;
    text-align: center;
    color: #999;
}
.modal-congrats-bottom {
    display: flex;
    flex-wrap: wrap;
    padding: 5px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    background: #fff;
}
.modal-congrats-btn {
    margin: 10px auto;
}
.blob {
    height: 50px;
    width: 50px;
    color: #ffcc00;
    position: absolute;
    top: 45%;
    left: 45%;
    z-index: 1;
    font-size: 30px;
    display: none;
}

</style>