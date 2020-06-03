<?php

    include_once '../../DBStuff/dbstuff.php';
    
    class Room{

        public $id;
        public $name;
        
        function __construct($name){
        $this->name = $name;
        }
        
    }

   

    function findAllRooms(){  

         $sql =
         "SELECT *
         FROM habitaciones;";
         $dataRooms = doQueryAllRows($sql);
         if( $dataRooms != null){
            $i = 0;
            foreach($dataRooms as $element){
                    $id = $element['ID'];
                    $sqlBeds =
                    "SELECT ID
                    FROM camas WHERE idRoom = $id";// AND activo = 1;";
                    $dataBeds = doQueryAllRows($sqlBeds);
                    array_push($dataRooms[$i], $dataBeds);
                    ++$i;
             }
          }
         return $dataRooms;
    }


?>