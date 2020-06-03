<?php
include_once '../../DBStuff/dbstuff.php';
function findAllPatientsDoctor(){
       
    $sql =
    "SELECT idMedico, ID, nombre, diagnostico, prioridad 
    FROM pacientes 
    WHERE idMedico = ".$_SESSION['id'].";";
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
    $name = doQueryAllRows($sql);
    print_r($name);
    return $name[0]['nombre']; 
    
}

function getEquipmentsRequest($id){
    $a = 'prestrado';
    $sql =
    "SELECT tipo, cantidad
    FROM equipos
    JOIN soli_equipos
    ON equipos.ID = soli_equipos.idEquipo AND estado = '$a' AND soli_equipos.idPaciente = "."'".$id."';";
    $data = doQueryAllRows($sql);
    return $data;
}

function getEquipmentsRequestUnd($id){
    
    $sql =
    "SELECT cantidad
    FROM soli_equipos
    WHERE idPaciente = "."'".$id."';";
    $data = doQueryAllRows($sql);
    
    $total = 0;
    foreach( $data as $element){
            $total += $element['cantidad'];
    }

    return $total;
}

function findAllEquipments(){
       
    $sql='SELECT tipo, und_total
    FROM equipos
    WHERE und_total > 0;';

    $data = doQueryAllRows($sql);
    print_r($data);
    return $data;

}

function findAllEquipmentsUndT(){
   
    $sql='SELECT und_total
    FROM equipos
    WHERE und_total > 0;';

    $data = doQueryAllRows($sql);

    return $data;

}

?>