<?php

include_once '../../DBStuff/dbAdminSv.php';
include_once '../../view/templates/table.php';

$scripts='';
$pageTitle='Resources';
$body='';

$resources = fetchTable('recursos');
$beds = array();
foreach ($resources as $value) {
    $beds[] = array('ph', $value['ID'],$value['tipo'],$value['und_disp']  );
}

//add resourc e
//NEEDS TO BE MODAAAAL HAAAALP

//room table
$body.= "<br><div class='row'>
            <input type=\"button\" value=\"Agregar Recurso\" onclick=\"location.href='admReqHandler.php?type=add-resource'\"  class=\"btn btn-primary\">
        </div>";
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