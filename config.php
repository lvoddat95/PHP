<?php 

define('HTTP_ROOT', get_site_url()); 

define('INC_ROOT', HTTP_ROOT.'view/inc'); 

define('ASSET_ROOT', HTTP_ROOT.'app-assets');

define('CONFIG', 'config.php');
define('HEADER', 'view/inc/header.php');
define('FOOTER', 'view/inc/footer.php');
define('SIDEBAR', 'view/inc/sidebar.php');
define('MOBILE_NAV', 'view/inc/mobile-bottom.php');
define('BOTTOM', 'view/inc/bottom.php');





function get_site_url($p_dir="") 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 

    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 

    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';

    // return: http://localhost/myproject/
    return $protocol.'://'.$hostName.$pathInfo['dirname']."/".$p_dir;
}

