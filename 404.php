<?php require_once 'config.php'; ?>
<?php include_once HEADER; ?>
    
    <body>

        <div class="page-content">

            <div class="container">
                <div class="content-404 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-fluid" src="<?php echo HTTP_PATH ?>app-assets/images/error-illustration.svg" alt="404">
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="wrapper-404">
                                <h1>404</h1>
                                <h3>Rất tiếc, một lỗi đã xảy ra. Không tìm thấy trang!</h3>
                                <p>Bạn có thể đã nhập sai địa chỉ hoặc trang có thể đã di chuyển.</p>
                                <br>
                                <a class="btn btn-lg btn-outline-white" href="<?php echo HTTP_PATH ?>">Quay lại trang chủ</a>
                            </div>
                        </div>
                    </div>

                    <?php include_once MOBILE_NAV; ?>
                </div>
            </div>
            
        </div>

        <?php inc('modal/lich_su_ton_that.php'); ?>

    </body>

<?php include_once FOOTER; ?>