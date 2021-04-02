<?php require_once 'config.php'; ?>

<?php include_once HEADER; ?>

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

              





<div class="card">
  <div class="card-body">
    <p>
      Using <code>.fancybox()</code> method
    </p>
    <p class="mb-0">

      <a data-fancybox data-type="iframe" href="https://view.officeapps.live.com/op/embed.aspx?src=https://github.com/lvoddat95/bhhk/raw/master/K%E1%BA%BF%20ho%E1%BA%A1ch.xlsx" class="btn btn-primary pdf-view">
        Click me
      </a>

  </div>
</div>

<!-- 
<style type="text/css">
    .fancybox-slide--iframe .fancybox-content {
        width  : 800px;
        height : 600px;
        max-width  : 80%;
        max-height : 80%;
        margin: 0;
      background: #191919;
    }
</style>

 -->







                <?php include_once BOTTOM; ?>

            </div>

        </div>

    </div>

</body>

<?php include_once FOOTER; ?>
<script>
    $('.pdf-view').fancybox({
      toolbar  : true,
      smallBtn : true,
      iframe : {
        preload : false,
        css : {
                width : '60%'
            }
      }
    })
</script>
