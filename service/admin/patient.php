<?php
//include_once "/../../DBStuff/dbAdminSv.php";
include_once '../../DBStuff/dbAdminSv.php';
include_once '../../view/templates/table.php';
//message center


$scripts='';
$pageTitle='Admin view patiens';
$body="";


$patients = array();
foreach (AdminSv::fetchRegisters2() as $va){
$patients[] =  array(array('ph'),$va[''], $va['nombre'], $va[''], );
//pacientes, su cama, habitación asignada y
//el médico tratante. También podrá consultar los equipos asignados.
}

//menu

//class="btn btn-primary"
//onclick="location.href='adminMenu.php'"


//patients
$body.="<div class=\"row my-5\">
<h2 class=\"card-body text-center\">Información de todos los pacientes</h2>";
$tabProperties = array(
    'header' => array('# solicitud','equipo','paciente','medico','cantidad','fecha solicitud'),
    'select' => false, 
    'actions' => false/*array('edit' => false, 'delete' => false,
        'others' => array(
            array('id' => 'btn-refuse', 'name' => 'Rechazar'), 
        array('id' => 'btn-accept', 'name' => 'Aceptar' ) ) )*/ );

ob_start();
createTable($tabProperties, $patients);
$body.= ob_get_clean();
ob_end_clean();
$body.="</div>"; //table


include './templateBig.php';
?>