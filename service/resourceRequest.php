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
            for( $i = 1; $i < count($resourcesR)-1; $i++){
                 $data = array();
                 if( $i%2 != 0){
                     $sql =
                     "SELECT *
                      FROM recursos
                      WHERE tipo = "."'".$resourcesR[$i]."';";
                      $data = doQuery2($sql);
                 }
                 elseif( $i%2 == 0){
                     $data['und_disp'] = $resourcesR[$i];
                     print_r($data);
                     array_push($r, $data);
                 }

            }

            print_r($r);
            $p=NULL;
            $fields = array('ID','idRecurso','idPaciente', 'cantidad', 'estado', 'fechaHora' );
            foreach ( $r as $element){
                  $values = array(1,2, $id,$element['und_disp'],"'".'Esperando Aprobación'."'", $p);
                  doQuery(insertTableSQl('recursos', $fields, $values)); 
                
                
            }
            
           
   
          
        
         return $data;
                            
     }

     


?>
