<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
        
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
      
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
        <!-- Validation JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>       
        
        <!-- Rooms Form JS -->
        <script type="text/javascript" src="../js/patients.js"></script>

        <title>Pacientes</title>
    </head>
<body>
<?php
  include('menu-doctor.php');
  createMenuDoctor();

?>

<div class="container">
      <div class="row my-5">
          <h2 class="card-body text-center">Pacientes</h2>
            <?php
        
                    include('../templates/table.php');
                    include('../../service/general.php');
                
                    $propertiesTable = 
                    array('header' => array('Cédula','Nombre','Diagnóstico','Prioridad'),'select' => false, 
                          'actions' => array('edit' => false, 'delete' => false, 
                                             'others' => array( array('id' => 'btn-resources-r', 'name' => 'Solicitar Recursos'),
                                              array( 'id' => 'btn-equipments', 'name' => 'Equipos') ) )
                    ); 
                    $contentTable = findAllPatientsDoctor();
                    createTable($propertiesTable, $contentTable);
               ?>

        </div>
</div>

<?php

    /*Example Alert
          echo '<div>';
          $propertiesForm = 
          array( 'action' => '../../service/patient.php', 'method' =>  'post', 'id' => 'patientModal', 'title' => 'Pacientes', 'buttonName' => 'Guardar', 'confirmation' => false );
          $contentModal = 
          array( 'Nombre:' => 
                  array ( 'type' => 'text', 'id' => 'namePatient', 'name' =>"name"  ,'value' => "", 'required' => true, 'readonly' => false, 'hidden' => false ),
                  'Identificación:' => 
                  array ( 'type' => 'number', 'id' => 'idPatient', 'name' =>'id' ,'value' => "", 'required' => true, 'readonly' => false, 'hidden' => false ),
                  'Diagnóstico:' => 
                  array ( 'type' => 'textArea', 'id' => 'diagnosticPatient', 'name' =>"diagnostic"  ,'value' => "", 'required' => true, 'readonly' => false, 'hidden' => false ),
                  'Prioridad:' =>
                  array ( 'type' => 'select', 'id' => 'selectPatient', 'options' => array('Alta', 'Baja', 'Media') ),
                  'Fecha de ingreso:' =>
                  array ( 'type' => 'date', 'id' => 'datePatient', 'name' =>"date"  ,'value' => "", 'required' => true, 'readonly' => false, 'hidden' => false ),
                  'Duración (Días):' =>
                  array ( 'type' => 'numeric', 'id' => 'durationPatient', 'name' =>"duration"  ,'value' => "", 'required' => true, 'readonly' => false, 'hidden' => false ),
                  ' ' =>
                  array ( 'type' => 'text', 'id' => 'priorityPatient', 'name' =>"priority"  ,'value' => "", 'required' => false, 'readonly' => true, 'hidden' => false )
              );
          echo createForm($propertiesForm, $contentModal);
          echo '</div>';
        ?>

    include_once ('../templates/modal.php');
    $propertiesFormDelete = 
    array( 'action' =>  '../../service/patient.php', 'method' =>  'post', 'id' => 'deleteModal', 'title' => 'Eliminar', 'buttonName' => 'Si', 'confirmation' => true );
    $contentModalDelete = 
        array( 'Confirmación' => array( 'type' => 'label', 'value' => 'Esta seguro que quiere eliminar este elemento' )); 
    echo '<div>';
    createModal($propertiesFormDelete, $contentModalDelete); 
    echo '</div>';    */
    
?>
</body>
</html>