<?php

session_start();  
include_once '../DBStuff/dbstuff.php';

$emailL = $_POST['emailL'];
$passwordL = $_POST['passwordL'];

if(isset($emailL, $passwordL)){
    $user = doQueryLogin($emailL, $passwordL);
    $es = false;
    if($user === $es){
       echo "aaf"; 
    }
    else{
        $_SESSION['username'] = $user[1];
        if($user[2] == 'medic'){
           header('Location: ../view/doctor/rooms.php');
        }
        
    }
       
  
}

?>