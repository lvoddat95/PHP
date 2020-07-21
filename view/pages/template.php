<?php require_once 'config.php'; ?>
<?php include_once HEADER; ?>
        
        <!-- page-content -->
        <div class="page-content">

            <?php include_once SIDEBAR; ?>
            
            <!-- content-wrapper -->
            <div class="content-wrapper">
                
                <!-- content -->
                <div class="content">

                    <?php include_once MOBILE_NAV; ?>

                    <!-- Header -->
                    <div class="header-top">
                        <button class="d-md-none sidebar-mobile-main-toggle" type="button">
                            <i class="linearicons-text-align-left font-size-m font-weight-bold"></i>
                        </button>
                        <div class="top-left">
                            <div class="breadcrumb">
                                <a href="index2.html" class="breadcrumb-item"><i class="icon-steering-wheel mr-1"></i> F02 - Bảo hiểm ô tô</a>
                                <span class="breadcrumb-item active">Cập nhập đơn</span>
                            </div>
                            <div class="d-md-none logo-mobile">
                                <a href="index.html" class="logo-text">
                                    <div class="logo-img"><img src="app-assets/images/logo/logo2.png" alt="VNI Logo"></div>
                                    <span class="text align-middle" style="font-weight: 900;">VNI</span>
                                </a>
                            </div>
                        </div>

                        <?php include_once MOBILE_NAV; ?>
                    </div>
                    <!-- /Header -->

                    


                    <?php include_once BOTTOM; ?>
                
                </div>
                <!-- /content -->

            </div>
            <!-- /content-wrapper -->
            
        </div>
        <!-- /page-content -->

<?php include_once FOOTER; ?>