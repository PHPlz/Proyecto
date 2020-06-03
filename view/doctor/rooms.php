<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
      
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 

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
                    include('../../service/room.php');
                
                    $propertiesTable = 
                    array('header' => array('Habitación','Camas'), 'actions' => array(), 'select' => true); 
                   // array('header' => array('Habitación','Camas'), 'actions' => array( 'edit' => true, 'delete' => true ), 'select' => true);  
                    $contentTable = findAllRooms();
                    createTable($propertiesTable, $contentTable);
                    echo 'Propietario script actual: ' . get_current_user();
                ?>
        </div>
    </div>
  
    <div class="patientForm">
            <form action="../../service/patient.php" method="post">
                <div class="modal fade" id="patientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Paciente</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group col-md-12">
                                <label for="namePatient">Nombre:</label>
                                <input type="text" class="form-control" id="namePatient" name="name" required> 
                            </div>
                            <div class="form-group col-md-12">
                                <label for="idPatient">Cédula:</label>
                                <input type="number" class="form-control" id="idPatient" name="id" required> 
                            </div>
                            <div class="form-group col-md-12">
                                <label for="idPatient">Diagnóstico:</label>
                                <textarea class="form-control" id="diagnosticPatient" name="diagnostic" rows="5" cols="40" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="selectPatient">Prioridad:</label>
                                <select id="selectPatient" class="form-control">
                                  <option selected>Seleccione</option>
                                  <option>Baja</option>
                                  <option>Media</option>
                                  <option>Alta</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="datePatient">Fecha de Ingreso:</label>
                                <input type="date" class="form-control" id="datePatient" name="date" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="durationPatient">Duración (Días):</label>
                                <input type="number" class="form-control" id="durationPatient" name="duration" required>
                            </div>
                                <input id="priorityPatient" type="text" name="priority" value="" style="height: 10px;" readonly hidden>
                                <input id="idBedPatient" type="number" name="idBed" value="" style="height: 10px;" readonly hidden>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" id="submitBtn" class="btn btn-primary">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </form>
       </div>
        
    
  </body>
</html>