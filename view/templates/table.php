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
                $str_datos.='<th style="width:23%">Acciones</th>';
            }
            $str_datos.='</thead>';
            $str_datos.='<tbody>';
            $i=0;
            foreach($contentTable as $element) {
                $str_datos.='<tr>';

                $j = 0;
                foreach( $element as $key => $elementA ) {
                    if( $propertiesTable['select'] == true ){
                       if($j == count($element)-1){
                           echo $j;
                           $str_datos.='<td><select class="form-control" id="selectData1'.$i.'">';
                           $str_datos.="<option selected>Seleccione</option>";
                           if($elementA != null || empty($elementA)){
                              foreach( $elementA as $arrayS) {
                                 foreach( $arrayS as $elementS) {
                                          $str_datos.='<option>'.$elementS."</option>";
                                 }
                              }
                            }

                           $str_datos.="</select></td>";
                        }

                        elseif($j == 0){
                            $str_datos.= '<td>'.$elementA."</td>";
                        }


                    }

                    elseif($j != 0){
                        $str_datos.= '<td id="'.$key.'">'.$elementA."</td>";
                    }

                    ++$j;

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
                   if($propertiesTable['actions']['others'] != null){
                       foreach($propertiesTable['actions']['others'] as $button)
                       $str_datos.='
                       <button type="submit" class="btn btn-primary" id="'.$button['id'].'">'.$button['name'].'</button>';
                    }

                   $str_datos.="</td>";
                }

                $str_datos.= "</tr>";
                ++$i;
            }

            $str_datos.='<tbody>';
            $str_datos.= "</table>";

            echo $str_datos;

   }


?>
