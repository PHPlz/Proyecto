<?php
//include_once "/../../DBStuff/dbAdminSv.php";
include_once '../../DBStuff/dbAdminSv.php';
include_once '../../view/templates/table.php';
//message center

$requests = array();
foreach (AdminSv::fetchRequestsActiveNamed() as $va){
$requests[] = array('ph', $va['id'],$va['equipo'],$va['paciente'],$va['medico'],$va['cantidad'],$va['fecha'] );
}

$scripts='';
$pageTitle='Admin menu';
$body="";
//menu

//class="btn btn-primary"
//onclick="location.href='adminMenu.php'"


//requests
$body.="<div class=\"row my-5\">
<h2 class=\"card-body text-center\">Solicitudes</h2>";
$tabProperties = array(
    'header' => array('# solicitud','equipo','paciente','medico','cantidad','fecha solicitud'),
    'select' => false, 
    'actions' => array('edit' => false, 'delete' => false,
        'others' => array( 
            array('id' => 'btn-refuse', 'name' => 'Rechazar'), 
            array('id' => 'btn-accept', 'name' => 'Aceptar' ) ) ) );

ob_start();
createTable($tabProperties, $requests);
$body.= ob_get_clean();
ob_end_clean();
$body.="</div>"; //table


include './templateBig.php';
?>