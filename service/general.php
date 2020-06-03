<?php
include_once '../../DBStuff/dbstuff.php';
function findAllPatientsDoctor(){
       
    $sqlDoc='SELECT ID
    FROM usuarios
    WHERE mail ='."'".$_SESSION['username']."'".';';
    $idDoc = doQuery2($sqlDoc);
   
    $sql =
    "SELECT idMedico, ID, nombre, diagnostico, prioridad 
    FROM pacientes 
    WHERE".$idDoc.";";
    $data = doQueryAllRows($sql);

    return $data;

}

function findAllResources(){
       
    $sql='SELECT tipo
    FROM recursos
    WHERE und_disp > 0;';

    $data = doQueryAllRows($sql);

    return $data;

}

function findAllResourcesUnd(){
       
    $sql='SELECT und_disp
    FROM recursos
    WHERE und_disp > 0;';

    $data = doQueryAllRows($sql);

    return $data;

}


function getDoctorName($mail){

    $sql='SELECT nombre
    FROM usuarios
    WHERE mail ='."'".$mail."'".';';
    $name = doQuery3($sql);
    return $name['nombre']; 
    
}

?>