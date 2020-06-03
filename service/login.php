<?php

session_start();  
include_once '../DBStuff/dbstuff.php';

$emailL = $_POST['emailL'];
$passwordL = $_POST['passwordL'];

if(isset($emailL, $passwordL)){
    $user = doQueryLogin($emailL, $passwordL);
    $es = false;
    if($user === $es){
       echo "Usuario no encontrado"; 
    }
    else{
        if($user[2] == 'medic'){
            header('Location: ../view/doctor/patients.php');
        }elseif($user[2] == 'admin'){
            header('Refresh:2;url=./admin/index.php');
        }
        
    }
       
  
}

?>