<?php

    include_once '../DBStuff/dbstuff.php';
    
    class Room{

        public $id;
        public $name;
        
        function __construct($name){
        $this->name = $name;
        }
        
    }

    function findAll(){  

         $sql =
         "SELECT *
         FROM habitaciones;";
         $dataRooms = doQueryAllRows($sql);
         $dataBeds = array();

         if( $dataRooms != null){
            foreach($dataRooms as $element){
                    $id = $element['ID'];
                    $sqlBeds =
                    "SELECT ID
                    FROM camas WHERE idRoom = $id;";
                    $dataBeds = doQueryAllRows($sqlBeds);
                    array_push($dataRooms, $dataBeds);
                    
            }
          }

    
        for($i = 0; $i < count($dataRooms); ++$i){
             echo "aqui toy";
             echo count($dataRooms);
         }

         return $data;
    }


   
    findAll();

?>