<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>
    
    <body>

        <div class="page-content page-login">

            <div class="content-wrapper">

                <div class="content d-flex justify-content-center align-items-center">
                    <!-- Login form -->
                    <form class="login-form" action="">
                        <div class="card mb-0">
                            <div class="login-top"></div>
                            <div class="card-body">
                                <div class="login-title">
                                    <img class="img-fluid" src="<?php echo HTTP_PATH ?>app-assets/images/avatar2.png" alt="">
                                    <h3>ĐĂNG NHẬP</h3>
                                    <span>Một vài lần nhấp nữa để đăng nhập vào tài khoản của bạn. Quản lý tất cả các tài khoản thương mại điện tử của bạn ở một nơi</span>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control form-control-lg border-2" placeholder="Tài khoản">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-primary"></i>
                                    </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control form-control-lg border-2" placeholder="Mật khẩu">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-primary"></i>
                                    </div>
                                </div>

                                <div class="form-group d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label class="ml-2 mb-0" for="remember">Lưu mật khẩu</label>
                                    </div>

                                    <a href="" class="ml-auto">Quên mật khẩu ?</a>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn bg-color btn-lg btn-block">Đăng nhập</button>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- /login form -->

                    <?php include_once MOBILE_NAV; ?>
                
                </div>

            </div>
            
        </div>

    </body>

<?php include_once FOOTER; ?>