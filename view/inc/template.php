<?php require_once '../../config.php'; ?>
<?php include_once HEADER; ?>
    
    <body class="sidebar-xs">

        <div class="page-content home-page">

            <?php include_once SIDEBAR; ?>

            <div class="content-wrapper">

                <div class="content">

                    <?php include_once MOBILE_NAV; ?>



                    <?php include_once BOTTOM; ?>
                
                </div>

            </div>
            
        </div>

        <?php inc('modal/lich_su_ton_that.php'); ?>

    </body>

<?php include_once FOOTER; ?>