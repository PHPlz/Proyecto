<?php
   
   function createTable($propertiesTable, $contentTable){
          
            $str_datos = "";
            $str_datos.='<table class="table table-hover table-bordered">';
            $str_datos.='<thead>';
            $str_datos.='<tr>';
            for($i = 0; $i < count($propertiesTable['header']); ++$i) {
                $str_datos.='<th>'.$propertiesTable['header'][$i]."</th>";
            }
            if($propertiesTable['actions'] != null){
                $str_datos.='<th>Acciones</th>'; 
            }
            $str_datos.='</thead>';
            $str_datos.='<tbody>';
            for($i = 0; $i < count($contentTable); ++$i) {
                $str_datos.='<tr>';
                
                for($j = 0; $j < count($contentTable[$i]); ++$j) {
                    
                    if($j == count($contentTable[$i])-1 && $propertiesTable['select'] == true ){
                       break;
                    }

                    $str_datos.= '<td>'.$contentTable[$i][$j]."</td>";

                }
                 
                if($propertiesTable['select'] == true ){
                
                    $str_datos.='<td><select class="form-control" id="select-data">';
                    $str_datos.="<option selected>Seleccione</option>";
                    if(count($contentTable[$i][count($contentTable[$i])-1]) > 0){                   
                       for ( $k = 0; $k < count($contentTable[$i][count($contentTable[$i])-1]); ++$k){
                            $str_datos.='<option>'.$contentTable[$i][count($contentTable[$i])-1][$k]."</option>";           
                       }
                    }
                    $str_datos.="</select></td>";
                  
                }

                if($propertiesTable['actions'] != null){
                   
                   $str_datos.='<td>';
                   if($propertiesTable['actions']['edit'] == true){
                      $str_datos.='
                      <button class="btn btn-primary" id="btn-editModal" data-toggle="modal" data-target="#editModal" ><i class="fa fa-edit"></i></button>';
                   }
                   if($propertiesTable['actions']['delete'] == true){
                      $str_datos.='
                      <button class="btn btn-primary" id="btn-deleteModal" data-toggle="modal" data-target="#deleteModal" ><i class="fa fa-trash"></i></button>';
                   }  

                   $str_datos.="</td>";
                }
                
                $str_datos.= "</tr>";
            }

            $str_datos.='<tbody>';
            $str_datos.= "</table>";

            echo $str_datos; 
    
   }


?>