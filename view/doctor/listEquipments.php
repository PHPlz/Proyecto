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
        <script type="text/javascript" src="../js/equipments.js"></script>

        <title>Pacientes</title>
    </head>
<body>
<div class="equipmentsForm">   
                      <form action="../../service/equipmentsRequest.php" method="post">
                          <div class="content" style="width: 30%; margin-left: 20px; margin-top: 15px;">
                            <div class="form-group col-md-12">
                             <h4 class="modal-title">Equipos</h4>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="namePatient">Paciente:</label>
                                <?php
                                  $name =  $_SESSION["nPatient"];
                                  echo '<input type="text" class="form-control" value="'.$name.'" id="namePatient" name="namePatient" required readonly>'; 
                            
                                ?> 
                            </div>
                            <div class="form-group col-md-12">
                               <table class="table table-hover table-bordered" id="tableResources">
                                 <thead>
                                    <tr>
                                        <th>Equipo</th>
                                        <th>Cantidad</th>
                                        <th style="width:20%;">Acciones</th>
                                    </tr>
                                 </thead>
        
                                  <!--Información base de datos-->
                                  <tbody>
                                    <?php
                                        include_once('../../service/general.php');
                                        foreach(getEquipmentsRequest($_SESSION["iPatient"]) as $element){
                                            echo '<tr>';
                                            foreach($element as $resource){
                                                    echo '<td id="td-type">'.$resource.'</td>';
                                                   
                                            }
                                            echo '<td style="text-align:center;"><button type="button" class="btn btn-primary" id="btn-delete-es"><i class="fa fa-trash"></i></button></td>';
                                            echo '</tr>';
                                                
                                        }
                                        
                                    ?>      
                            </div>
                           <br>
                         <div class="form-group col-md-12">  
                           <button type="button" onclick="location.href='equipmentsRequest.php'"  id="submitBtn" class="btn btn-primary" style="float:right;">Solicitar</button>
                         </div> 
                         <br>
                         <br>
                  </div>
            </form>
     </div>
</body>

<?php

    include_once ('../templates/modal.php');
    $propertiesFormC = 
    array( 'action' =>  ' ', 'method' =>  ' ', 'id' => 'confirmationModal', 'title' => 'Confirmación', 'buttonName' => 'Aceptar', 'confirmation' => true );
    $contentModalC = 
        array( 'Confirmación' => array( 'type' => 'label', 'value' => 'La solicitud se envio satisfactoriamente.' )); 
    echo '<div>';
    createModal($propertiesFormC, $contentModalC); 
    echo '</div>';    
    
?>

</html>