<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <title></title>
    </head>
 <body>
<?php

    include_once '../DBStuff/dbstuff.php';
    
    function findAllPatients(){  

         $sql =
         "SELECT *
         FROM pacientes;";
         $data = doQueryAllRows($sql);
        
         return $data;
    }

    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $priority = $_POST['priority'];
    $diagnostic = $_POST['diagnostic'];
    $duration = $_POST['duration'];
    $idBed = $_POST['idBed'];

    if(isset($id, $name, $date, $priority, $diagnostic, $duration, $idBed, $_SESSION['username'])){
       assignPatientBed($id, $name, $date, $priority, $diagnostic, $duration, $idBed);  
    }
    
    function assignPatientBed($id, $name, $date, $priority, $diagnostic, $duration, $idBed ){
           
        $sqlDoc='SELECT ID
        FROM usuarios
        WHERE mail ='."'".$_SESSION['username']."'".';';
        $idDoc = doQuery2($sqlDoc);
        echo $idDoc;
        
        if( $idDoc != null){
            $fieldsPatient = array('ID', 'nombre','diagnostico', 'prioridad', 'idMedico' );
            $valuesPatient = array($id, "'".$name."'", "'".$diagnostic."'", "'".$priority."'", $idDoc);
            doQuery(insertTableSQl('pacientes', $fieldsPatient, $valuesPatient));
            
            $fieldsRegister = array('fh_ingreso','duracion','idPaciente','idCama');
            $valuesRegister = array("'".$date."'", "'".$duration."'", $id, $idBed);
            doQuery(insertTableSQl('registro', $fieldsRegister, $valuesRegister));
            
            $sql = 'UPDATE camas
                    SET activo= 0
                    WHERE ID ='.$idBed.';'; 

            doQuery($sql);
        }
       
        echo '<div style="width: 30%; margin-left: 40px; margin-top: 15px;">';
        echo '<h2 style="margin-top: 5px; margin-left: 12px">Ingresar Paciente</h2>';   
        echo '<br>';
        echo 'El paciente se ingreso satisfactoriamente.';
        echo '<br>';
        echo '<br>';
        echo "<input style=\"margin-left: 100px;\" class=\"btn btn-primary\" onclick=\"location.href='../view/doctor/rooms.php'\" type=\"button\" value=\"Aceptar\">";
        echo "</div>";
        echo '</div>';
       // header('Location: ../view/doctor/rooms.php');

        
    } 

?>

   </body>
</html>