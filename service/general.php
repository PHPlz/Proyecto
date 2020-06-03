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

function getEquipmentsRequest($id){
    $sql =
    "SELECT tipo, cantidad
    FROM equipos
    JOIN soli_equipos
    ON equipos.ID = soli_equipos.idEquipo AND soli_equipos.idPaciente = "."'".$id."';";
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