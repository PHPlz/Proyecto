<?php
   
    include_once '../DBStuff/dbstuff.php';

    $nameR = $_POST['name'];
    $emailR = $_POST['email'];
    $passwordR = $_POST['password'];

    
    if(isset($nameR,$emailR, $passwordR)){
       
       $rol = 'medic';
       $fieldsRegister = array('nombre','mail', 'rol', 'pass');
       $valuesRegister = array("'".$nameR."'", "'".$emailR."'", "'".$rol."'", "'".crypter($passwordR)."'");
       doQuery(insertTableSQl('pacientes', $fieldsRegister, $valuesRegister));
    }
?>