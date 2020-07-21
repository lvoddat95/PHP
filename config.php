<?php 

set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'].'/view/inc/' . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'].'/bhhk/view/inc/'  );
define('HEADER', 'header.php');
define('FOOTER', 'footer.php');
define('SIDEBAR', 'sidebar.php');
define('MOBILE_NAV', 'mobile-bottom.php');
define('BOTTOM', 'bottom.php');

define('DIR', dirname(__FILE__));
define('APP_NAME', trim(strrchr(__DIR__, DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR));

define('HTTP_ROOT', get_site_url()); 

define('INC_ROOT', HTTP_ROOT.'view/inc'); 

define('ASSET_ROOT', HTTP_ROOT.'app-assets');

define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/'.APP_NAME); 

var_dump(APP_NAME) ;
var_dump(get_site_url('',true)) ;

function get_site_url($p_dir="", $root=false) 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 

    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath)['dirname']; 
    if ($root == true) {
        $pathInfo = '/'.APP_NAME;
    }

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 

    $isSecure = false;
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $isSecure = true;
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
        $isSecure = true;
    }
    $protocol = $isSecure ? 'https' : 'http';

    // return: http://localhost/myproject/
    return $protocol.'://'.$hostName.$pathInfo."/".$p_dir;
}

