<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>
    
    <body>

        <div class="page-content login-page">

            <div class="content-wrapper">

                <div class="content">

                    <!-- Content-block -->
                    <div class="content-block">

                            <div class="login-signin">

                                <div class="login-header">
                                    <img src="<?php echo HTTP_PATH .'app-assets/images/logo/logo3.png'; ?>" alt="VNI Logo">
                                    <h3>Đăng nhập</h3>
                                    <p>Đăng nhập vào tài khoản của bạn. Quản lý tất cả các tài khoản của bạn ở một nơi</p>
                                </div>

                                <form>

                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Tài khoản" name="username" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Mật khẩu" name="password">
                                    </div>

                                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <input type="checkbox" id="remember"><label class="m-0 ml-2" for="remember">Ghi nhớ đăng nhập</label>
                                        </div>
                                        <a href="javascript:;" class="text-white">Quên mật khẩu ?</a>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn">Đăng nhập</button>
                                    </div>
                                    
                                </form>

                            </div>
                       
                    </div>
                    <!-- /Content-block -->

                </div>

            </div>
            
        </div>

    </body>
<?php include_once FOOTER; ?>
<script src="<?php echo ASSET_ROOT; ?>/vendors/js/three.js"></script>