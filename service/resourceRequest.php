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
            echo $resourcesR[1];
            
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
            $href = "'../view/doctor/resourcesRequest.php'";
            echo '<input type="button"  onclick="location.href='.$href.'" id="btn-cfm" data-target="#confirmationModal" data-toggle="modal" >'; 
                            
     }

     


?>

