<?php
   session_start();
 ?>
<?php  

     include_once '../DBStuff/dbstuff.php';

    
     if(isset($_POST['iPatient'], $_POST['date'], $_POST['resources'])){
        $id = $_POST['iPatient'];
        $date = $_POST['date'];
        $equipments = $_POST['resources'];  
        createEquipmentsRequest($id, $date, $equipments);
     }

     if(isset($_POST['typeE'])){
        deleteAEquipment($type);
     }

     function createEquipmentsRequest($id, $date, $resources){

            $resourcesR = explode(" ",$resources);
            echo $resourcesR[1];
             
            $sqlDoc='SELECT ID
            FROM usuarios
            WHERE mail ='."'".$_SESSION['username']."'".';';
            $idDoc = doQueryAllRows($sqlDoc);
   

            $r = array();
            $data = array();
            for( $i = 1; $i < count($resourcesR)-1; $i++){
                 if( $i%2 != 0){
                     $sql =
                     "SELECT *
                      FROM equipos
                      WHERE tipo = "."'".$resourcesR[$i]."';";
                      $data = doQueryAllRows($sql);
                 }
                 if( $i%2 == 0){
                     $data[0]['und_total'] = $resourcesR[$i];
                     array_push($r, $data);
                 }

            }

            //print_r($r);
            $fields = array('idEquipo','idPaciente', 'idMedico', 'cantidad', 'estado', 'fechaHora' );
            foreach ( $r as $e){
               foreach ( $e as $element){ 
                  $values = array($element['ID'],$id,$idDoc[0]['ID'],$element['und_total'],"'".'abierta'."'", "'".$date."'");
                  doQuery(insertTableSQl('soli_recursos', $fields, $values)); 
               }
                
            }
            echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
            echo '<script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>'; 
            echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>';
            echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>';       
            echo '<script type="text/javascript" src="../view/js/resources.js"></script>';
            $href = "'../view/doctor/resourcesRequest.php'";
           // echo '<input type="button"  onclick="location.href='.$href.'" id="btn-cfm" data-target="#confirmationModal" data-toggle="modal" >'; 
                            
     }

     function deleteAEquipment($type){

        $sqlT =
        "SELECT tipo
        FROM equipos
        WHERE tipo = '".$type."';";
        $dataT = doQueryAllRows($sqlT);
        
      
        print_r($data);
        return $data;
     
    }

     


?>

