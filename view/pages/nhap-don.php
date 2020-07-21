<?php require_once '../../config.php'; 
echo '<pre>';
print_r($_SERVER);
print_r(include $_SERVER['DOCUMENT_ROOT'] . "/bhhk/view/inc/footer.php");
echo '</pre>';

?>
