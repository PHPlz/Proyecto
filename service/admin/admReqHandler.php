<?php
include_once '../../DBStuff/dbAdminSv.php';
if (!empty($_GET)){
    
    switch ($_GET['type']) {
        case 'add-room':
            AdminSv::addRoom();
            header("Location:room.php");
            break;
        
        default:
            # code...
            break;
    } 
}
?>