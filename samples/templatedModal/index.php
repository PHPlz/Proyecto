<?php 


$bigBody = '';
$modalBody = '<br><h1>shiny var for modal body</h1><br>';
ob_start(); //output buffer, used to pre output html which will be inserted in big template
include './templateModal.php';
$modal= ob_get_clean();
ob_end_clean();

$bigBody.="<br><h1>BOOM START</h1><br>";
$bigBody.=$modal;
$bigBody.="<br><h1>BOOM FINISH</h1><br>";

include './templateBig.php';


?>