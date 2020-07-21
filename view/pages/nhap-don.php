<?php require_once '../../config.php'; 
echo '<pre>';
print_r($_SERVER);
var_dump(include $_SERVER['DOCUMENT_ROOT'] . "/bhhk/view/inc/footer.php");
echo 'string';
var_dump(include $_SERVER['DOCUMENT_ROOT'] . "/app/view/inc/footer.php");
echo '</pre>';

?>
