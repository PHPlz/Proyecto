<?php

include_once '../../DBStuff/dbAdminSv.php';
include_once '../../view/templates/table.php';

$scripts='';
$pageTitle='Rooms and beds';
$body='';

$rooms = fetchTable('habitaciones');
$beds = array();
foreach ($rooms as $value) {
    $beds[] = array('ph', $value['ID'], doQuery2("SELECT * FROM camas WHERE idRoom = $value[ID]") );
}

//add room
$body.= "<div class='row'>
            <input type=\"button\" value=\"Agregar Habitación\" id=\"btn-add\"  class=\"btn btn-primary\">
        </div>";

//room table
$body.="<div class=\"row my-5\">
<h2 class=\"card-body text-center\">Solicitudes</h2>";
$tabProperties = array(
    'header' => array('# habitación', '# camas'),
    'select' => false, 
    'actions' => array('edit' => false, 'delete' => false,
        'others' => array( 
            array('id' => 'btn-add-bed', 'name' => 'Agregar cama') ) ) );

ob_start();
createTable($tabProperties, $beds);
$body.= ob_get_clean();
ob_end_clean();
$body.="</div>"; //table


include './templateBig.php';

echo '<script type="text/javascript" src="../../view/js/roomA.js"></script>';

?>


<?php
/*
include_once ('../../view/templates/modal.php');
$propertiesFormC = 
array( 'action' =>  ' ', 'method' =>  ' ', 'id' => 'addRoomModal', 'title' => 'Alerta', 'buttonName' => 'Aceptar', 'confirmation' => true, 'script' => '<script type="text/javascript" src="../../view/js/roomA.js"></script>' );
$contentModalC = 
    array( 'Confirmación' => array( 'type' => 'label', 'value' => 'Ha superado la cantidad máxima de equipos que puede solicitar para un paciente con prioridad ' )); 
echo '<div>';
createModal($propertiesFormC, $contentModalC); 
echo '</div>';    
*/
?>