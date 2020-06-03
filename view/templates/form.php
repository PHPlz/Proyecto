<?php
     
    function createForm($propertiesForm, $contentModal){

        $str_datos = "";
        $str_datos.='<form action="'.$propertiesForm['action'].'" method="'.$propertiesForm['method'].'">';
         
                        $str_datos.='<div>';
                        
                            foreach ($contentModal as $key => $element){

                            $str_datos.='<div class="form-group">';

                                if ($element['type'] != 'select' && $element['type'] != 'label' && $element['type'] != 'textArea' ) { 
                                    
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
                                elseif ($element['type'] == 'textArea') {
                                    $str_datos.='<label for='.$element['id'].'>'.$key."</label>";
                                    $str_datos.='<textarea class="form-control" id="diagnosticPatient" name="diagnostic" rows="5" cols="40" required></textarea>';
                                
                                }
                                else{
                                     
                                    $str_datos.='<p>'.$element['value'].'</p>';
                                }

                            $str_datos.="</div>";
                            
                            }
                        
                        if($propertiesForm['confirmation'] == true){
                           $str_datos.='<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>';
                           $str_datos.='<button type="submit" class="btn btn-danger">Si</button>';
                        }
                        else{
                            $str_datos.='<button type="submit" class="btn btn-primary">'.$propertiesForm['buttonName']."</button>";
                            $str_datos.='<br>';
                            $str_datos.='<br>';
                        }

            $str_datos.="</div>";
                    
          $str_datos.="</form>";

        echo $str_datos; 
        
    }

?>