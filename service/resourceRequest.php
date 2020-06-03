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

     $id = $_POST['iPatient'];
     $date = $_POST['date'];
     $resources = $_POST['resources'];

     if(isset($id,$date,$resources)){
        createResourcesRequest($id, $date, $resources);
     }

     function createResourcesRequest($id, $date, $resources){

            $resourcesR = explode(" ",$resources);
            
            $r = array();
            $data = array();
            for( $i = 1; $i < count($resourcesR)-1; $i++){
                 if( $i%2 != 0){
                     $sql =
                     "SELECT *
                      FROM recursos
                      WHERE tipo = "."'".$resourcesR[$i]."';";
                      $data = doQueryAllRows($sql);
                 }
                 if( $i%2 == 0){
                     $data[0]['und_disp'] = $resourcesR[$i];
                     array_push($r, $data);
                 }

            }

            //print_r($r);
            $fields = array('idRecurso','idPaciente', 'cantidad', 'estado', 'fechaHora' );
            foreach ( $r as $e){
               foreach ( $e as $element){
                    $values = array($element['ID'],$id,$element['und_disp'],"'".'abierta'."'", "'".$date."'");
                    doQuery(insertTableSQl('soli_recursos', $fields, $values)); 
                    
                    
               }
            }
            echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
            echo '<script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>'; 
            echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>';
            echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>';       
            echo '<script type="text/javascript" src="../view/js/resources.js"></script>';
     
            echo '<div style="width: 30%; margin-left: 40px; margin-top: 15px;">';
            echo '<h2 style="margin-top: 5px; margin-left: 40px">Solicitud Recursos</h2>';   
            echo '<br>';
            echo 'La solicitud de recursos se envio satisfactoriamente.';
            echo '<br>';
            echo '<br>';
            echo "<input style=\"margin-left: 130px;\" class=\"btn btn-primary\" onclick=\"location.href='../view/doctor/patients.php'\" type=\"button\" value=\"Aceptar\">";
            echo "</div>";
            echo '</div>';

           
     }
?>
  </body>
</html>

