<?php
include_once '../../DBStuff/dbAdminSv.php';
if (!empty($_GET)){
    
    switch ($_GET['type']) {
        case 'add-room':
            AdminSv::addRoom();
            header("Location:room.php");
            break;
        case 'add-bed':
              AdminSv::addBed($_GET['id']);
              header("Location:room.php");
              break;
        case 'set-db':
            AdminSv::adminResetDb();
            header("Location:index.php");
        break;
        default:
            # code...
            break;
    } 
}
?>