<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

        <link href="./css/index.css" rel="stylesheet" type="text/css"  />
        
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
        <!-- Validation JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>       
        
        <!-- Rooms Form JS -->
        <script type="text/javascript" src="../js/rooms.js"></script>

        <title>Habitaciones</title>
    </head>


<body>
    <div class="container">
      <div class="row my-5">
          <h2 class="card-body text-center">Habitaciones</h2>
            <?php
        
                    include('../templates/table.php');
                    $propertiesTable = 
                    array('header' => array('Habitación','Camas'), 'actions' => array( 'edit' => true, 'delete' => true ), 'select' => true);  
                    $contentTable = array(array('001', array('Cama 1','Cama 2')), array('002', array('Cama 1','Cama 2')));
                    createTable($propertiesTable, $contentTable);
                ?>
        </div>
    </div>
    <div>
    <input class="btn btn-primary" data-toggle="modal" data-target="#deleteModal" type="button" value="Paciente">
    <?php
    
        include('../templates/modal.php');
        
        /*Example Form*/
        
        echo '<div>';
        $propertiesForm = 
        array( 'action' =>  '', 'method' =>  'post', 'id' => 'editModal', 'title' => 'Pacientes', 'buttonName' => 'Guardar', 'confirmation' => false );
        $contentModal = 
        array( 'Nombre' => 
                array ( 'type' => 'numeric', 'id' => 'namePatient', 'name' =>"name"  ,'value' => "", 'required' => true, 'readonly' => true, 'hidden' => false ),
                'Identificación' => 
                array ( 'type' => 'text', 'id' => 'idPatient', 'name' =>'id' ,'value' => "", 'required' => true, 'readonly' => false, 'hidden' => false ),
                'Prueba' =>
                array ( 'type' => 'select', 'id' => 'prueba', 'options' => array('Alta', 'Baja', 'Media') )
            );

        echo createModal($propertiesForm, $contentModal);
        echo '</div>';
    ?>

    <?php
  
        /*Example Alert*/
        
        $propertiesFormDelete = 
        array( 'action' =>  's', 'method' =>  'post', 'id' => 'deleteModal', 'title' => 'Eliminar', 'buttonName' => 'Si', 'confirmation' => true );
        $contentModalDelete = 
            array( 'Confirmación' => array( 'type' => 'label', 'value' => 'Esta seguro que quiere eliminar este elemento' )); 
        echo '<div>';
        createModal($propertiesFormDelete, $contentModalDelete); 
        echo '</div>';    
        
    ?>
    
    </div>
  </body>
</html>