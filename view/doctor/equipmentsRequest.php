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
        


        <title>Pacientes</title>
    </head>
<body>
<div class="equipmentsForm">
            <form action="../../service/equipmentRequest.php" method="post">
                          <div class="content" style="width: 30%; margin-left: 20px; margin-top: 15px;">
                            <div class="form-group col-md-12">
                            <h4 class="modal-title">Solicitar Equipo</h4>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="namePatient">Médico:</label>
                                <?php
                                  include_once('../../service/general.php');
                                  $name = getDoctorName($_SESSION['username']);
                                  echo '<input type="text" class="form-control" id="nameDoctor" name="nameDoctor" value="'.$name.'" required readonly>';
                                ?>
                                 
                            </div>
                            <div class="form-group col-md-12">
                                <label for="namePatient">Paciente:</label>
                                <?php
                                  $id =  $_SESSION["iPatient"];
                                  $name =  $_SESSION["nPatient"];
                                  $priority =  $_SESSION["pPatient"];
                                  echo '<input type="text" class="form-control" value="'.$name.'" id="namePatient" name="namePatient" required readonly>'; 
                                  echo '<input type="number" class="form-control" value="'.$id.'" id="iPatient" name="iPatient" required readonly hidden>';
                                  echo '<input type="text" class="form-control" value="'.$priority.'" id="pPatient" name="pPatient" required readonly hidden>';
                                ?> 
                            </div>
                            <div class="form-group col-md-12">
                                <label for="date">Fecha y Hora:</label>
                                <?php
                                   include_once('../../service/general.php');
                                   
                                   date_default_timezone_set('America/Bogota');
                                   
                                   $today = date('Y-m-d H:i:s A');
                                   echo '<input type="text" class="form-control" value="'.$today.'"id="date" name="date" required readonly>'; 
                                   echo '<input type="number" class="form-control" value="'.getEquipmentsRequestUnd($_SESSION["iPatient"]).'" id="qPatient" required readonly hidden>';
                                ?>
                            </div>
                            <div class="form-group col-md-12" style=" width: 75%;">
                                <label for="selectResources">Equipos disponibles:</label>
                                <select id="selectResources" class="form-control">
                                  <option selected>Seleccione</option>
                                  <?php
                                     include_once('../../service/general.php');
                                      foreach( findAllEquipments() as $element){
                                           $i = 0;
                                           foreach($element as $resource){
                                                 if( $i == 0){
                                                     echo "<option>".$resource."</option>";
                                                 }
                                                 ++$i;
                                           }
                                              
                                      }
                                     
                                  ?>      
                                </select>
                            </div>
                            <button type="button" id="btn-addR" class="btn btn-primary" style=" margin-top:-96px; margin-left:340px;">Agregar</button>
                             
                            <div class="form-group col-md-12">  
                            <table class="table table-hover table-bordered" id="tableResources">
                                <thead>
                                    <tr>
                                        <th>Equipo</th>
                                        <th>Cantidad</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
        
                                <!--Información base de datos-->
                                <tbody>
                                </tbody>
                            </table>  
                            </div>
                            <div class="form-group col-md-12" style=" width: 75%;">
                                <select id="selectResourcesUnd" class="form-control" hidden>
                                  <option selected>Seleccione</option>
                                  <?php
                                     include_once('../../service/general.php');
        
                                      foreach( findAllEquipmentsUndT() as $element){
                                           foreach($element as $resource){
                                                 echo '<option>'.$resource.'</option>';
                                                 
                                           }
                                              
                                      }
                                     
                                  ?>      
                                </select>
                            </div>  
                            <input id="resourcesPatient" type="text" name="resources" value="" style="height: 10px;" readonly hidden>                    
                          <br>
                          <div class="form-group col-md-12">  
                          <button type="submit" id="submitBtn" class="btn btn-primary" style="margin-left:160px;">Solicitar</button>
                          </div> 
                 </div> 

            </form>
       </div>
<!--Modal Quantity -->
       <div class="quantityForm">
            <form>
                <div class="modal fade" id="resourcesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Solicitar Equipo</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group col-md-12">
                                <label for="namePatient">Equipo:</label>
                                <input type="text" class="form-control" id="nameR" required readonly> 
                            </div>
                            <div class="form-group col-md-12">
                                <label for="namePatient">Cantidad Disponible:</label>
                                <input type="number" class="form-control" id="quantityD" required readonly> 
                            </div>
                            <div class="form-group col-md-12">
                                <label for="namePatient">Cantidad Requerida:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required> 
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="button" id="btn-quantity" class="btn btn-primary">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </form>
        </div> 
  
</body>

<?php

    include_once ('../templates/modal.php');
    $propertiesFormC = 
    array( 'action' =>  ' ', 'method' =>  ' ', 'id' => 'alertModal', 'title' => 'Alerta', 'buttonName' => 'Aceptar', 'confirmation' => true );
    $contentModalC = 
        array( 'Confirmación' => array( 'type' => 'label', 'value' => 'Ha superado la cantidad máxima de equipos que puede solicitar para un paciente con prioridad '.$_SESSION["pPatient"].'.' )); 
    echo '<div>';
    createModal($propertiesFormC, $contentModalC); 
    echo '</div>';    
    
?>

</html>