<?php

include_once '../../DBStuff/dbAdminSv.php';
include_once '../../view/templates/table.php';

$scripts='';
$pageTitle='Rooms and beds';
$body='';

$camas = fetchTable('habitaciones');
foreach ($camas as $key => $value) {
    $camas[$key];
}

//requests
$body.="<div class=\"row my-5\">
<h2 class=\"card-body text-center\">Solicitudes</h2>";
$tabProperties = array(
    'header' => array('# habitación', '#camas'),
    'select' => false, 
    'actions' => array('edit' => false, 'delete' => false,
        'others' => array( 
            array('id' => 'btn-refuse', 'name' => 'Rechazar'), 
            array('id' => 'btn-accept', 'name' => 'Aceptar') ) ) );

ob_start();
createTable($tabProperties, $camas);
$body.= ob_get_clean();
ob_end_clean();
$body.="</div>"; //table



include './templateBig.php';
?>