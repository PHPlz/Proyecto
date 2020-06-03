<?php
     
    function createModal($propertiesForm, $contentModal){

        $str_datos = "";
        

        if($propertiesForm['script'] != null){
            $str_datos.= $propertiesForm['script'];
        }
        $str_datos.='<form action="'.$propertiesForm['action'].'" method="'.$propertiesForm['method'].'">';
          $str_datos.='<div class="modal fade" id="'.$propertiesForm['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
               $str_datos.='<div class="modal-dialog" role="document">';
                    $str_datos.='<div class="modal-content">';
                       $str_datos.='<div class="modal-header">';
                           $str_datos.='<h5 class="modal-title" id="exampleModalLabel">'.$propertiesForm['title']."</h5>";
                           $str_datos.='<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                           $str_datos.='<span aria-hidden="true">&times;</span>';
                           $str_datos.="</button>";
                        $str_datos.="</div>";
                        $str_datos.='<div class="modal-body">';
                        
                            foreach ($contentModal as $key => $element){

                            $str_datos.='<div class="form-group col-md-12">';

                                if ($element['type'] != 'select' && $element['type'] != 'label') { 
                                    
                                    $str_datos.='<label for='.$element['id'].'>'.$key."</label>";
                                    $str_datos.='<input type="'.$element['type'].'" name="'.$element['name'].'"  id="'.$element['id'].'" class="form-control"';
                                    
                                    if($element['type'] == "button"){
                                       $str_datos.=' btn btn-primary"';
                                    }

                                    if($element['value'] != ""){
                                       $str_datos.=' value="'.$element['value'].'"';  
                                    }
                                    
                                    if($element['required'] == true){
                                       $str_datos.=' required';
                                    }
                                     
                                    if($element['readonly'] == true){
                                        $str_datos.=' readonly';
                                    }

                                    if($element['hidden'] == true){
                                        $str_datos.=' hidden';
                                    }
                                    
                                    $str_datos.=' >';
                                    
                                   
                                }
                                elseif ($element['type'] == 'select') {

                                    $str_datos.='<label for='.$element['id'].'>'.$key."</label>";
                                    $str_datos.='<select class="form-control" id="'.$element['id'].' ">';
                                    $str_datos.="<option selected>Seleccione</option>";
                                    if( $element['options'] != null){
                                        for($i = 0; $i < count($element['options']); ++$i) {
                                            $str_datos.='<option>'.$element['options'][$i]."</option>"; 
                                        }
                                    }
                                    $str_datos.="</select>";
                                        
                                }
                                else{
                                     
                                    $str_datos.='<p>'.$element['value'].'</p>';
                                }

                            $str_datos.="</div>";
                            
                            }
                        

                    $str_datos.="</div>";
                    $str_datos.='<div class="modal-footer">';
                    
                    if($propertiesForm['confirmation'] == true){
                       $str_datos.='<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>';
                       $str_datos.='<button type="submit" id="btn-alert" class="btn btn-danger">'.$propertiesForm['buttonName'].'</button>';
                    }
                    else{
                        $str_datos.='<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>';
                        $str_datos.='<button type="submit" id="btn-prueba" class="btn btn-primary">'.$propertiesForm['buttonName']."</button>";
                        $str_datos.="</div>";
                    }
                $str_datos.="</div>";
             $str_datos.="</div>";
        $str_datos.="</form>";

        echo $str_datos; 
        
    }

?>