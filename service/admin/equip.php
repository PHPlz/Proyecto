<?php

include_once '../../DBStuff/dbAdminSv.php';
include_once '../../view/templates/table.php';

$scripts='';
$pageTitle='Equip';
$body='';

$equip = fetchTable('equipos');
$beds = array();
foreach ($equip as $value) {
    $beds[] = array('ph', $value['ID'],$value['tipo'],$value['und_total']  );
}

//add resourc e
//NEEDS TO BE MODAAAAL HAAAALP
$body.= "<br><div class='row'>
            <input type=\"button\" value=\"Agregar Equipo\" onclick=\"location.href='admReqHandler.php?type=add-resource'\"  class=\"btn btn-primary\">
        </div>";

//room table
$body.="<div class=\"row my-5\">
<h2 class=\"card-body text-center\">Recursos</h2>";
$tabProperties = array(
    'header' => array('id Recurso', 'tipo' ,'unidades'),
    'select' => false, 
    'actions' => array('edit' => false, 'delete' => false,
        'others' => array( 
            array('id' => 'btn-add-to-resource', 'name' => 'Agregar unds') ) ) );

ob_start();
createTable($tabProperties, $beds);
$body.= ob_get_clean();
ob_end_clean();
$body.="</div>"; //table


include './templateBig.php';

?>