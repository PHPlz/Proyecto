       <?php

    include_once 'dbstuff.php';

    function verifyAdmin()
    {//if wanna make it harder verify w db
        return isset($_COOKIE['rol']) && $_COOKIE['rol'] == 'admin';
    }

    class AdminSv
    {
        //tables used:  room, bed, users,registers,resources, equipment, EqREqs, patients


        private function __construct()
        {
        }

        static function clrcookies(){
            setcookie('rol','',  time()-200);
            setcookie('usuario','',  time()-200);
            setcookie('email','',  time()-200);
            setcookie('ID', '',  time()-200);
        }

        //if $data['id'] is set updates user, else creates a new admin
        static function addAdmin($data)
        {
            global $tables, ${"fields_$tables[0]"};
            if (!verifyAdmin()) {
                return -1;
            }
            if (isset($data['id'])) {
                //echo "<br>:: >>s BANG upd<br>". var_dump( array_combine( explode(',',$fields),  explode(',',$vals2) ) );
            return doQuery("UPDATE $tables[0] SET rol = 'admin' WHERE ID = ${data['id']}") ;
                //$msg = "$_POST[nombre] updated";
            } else {
                
                $vals= array("'$data[nombre]'" ,"'$data[email]'","'admin'", "'".crypter( $data['password'] )."'");
                
                return  doQuery(insertTableSQl($tables[0], ${"fields_$tables[0]"} , $vals ) );
            }
        }

        //
        static function addRoom(/*$roomName*/)
        { //not needed might add if who knows?
            global $tables, ${"fields_$tables[4]"};

            if (verifyAdmin()) {
                doQuery(insertTableSQl($tables[4], ${"fields_$tables[4]"}, array()));
            }
        }

        static function addBed($roomId)
        {
            global $tables, ${"fields_$tables[5]"};

            if (verifyAdmin()) {
                doQuery(insertTableSQl($tables[5], ${"fields_$tables[5]"}, array($roomId)));
            }
        }

        //gets patients w active equipment
        static function fetchRegisters()
        { //patients w all extra stuff frkn superjoin goes here shite. ..
            //paciente;cama, habitación,medico, equipos

            if (verifyAdmin()) {
                global $tables;
                foreach ($tables as  $value) {
                    global ${"fields_$value"}; // yep getting all tables   
                }

                $sql = <<<bigQ
                SELECT pat.ID,pat.nombre, bed.ID, bed.idRoom , doc.ID, doc.nombre, eqp.tipo
                FROM $tables[8] AS reg
                    LEFT JOIN $tables[1] AS pat ON pat.ID = reg.idPaciente
                    LEFT JOIN $tables[6] AS soli ON soli.idPaciente = pat.ID
                    LEFT JOIN $tables[2] AS eqp ON eqp.ID = soli.idEquipo
                    LEFT JOIN $tables[0] AS doc ON doc.ID = pat.idMedico
                    LEFT JOIN $tables[5] AS bed ON bed.ID = reg.idCama
                WHERE soli.estado='prestado' AND CURRENT_TIMESTAMP < TIMESTAMPADD(DAY, reg.duracion ,reg.fh_ingreso)
                bigQ;
                /*foreach (doQueryAllRows($sql) as $v) {
                    echo var_dump($v);
                }*/
                $patientData = array();
                $queryRows = doQueryAllRows($sql);
                foreach ($queryRows as $value) {
                    echo var_dump($value);
                    $patientData[$value['pat.ID']] =  array();
                };//if this works rows should be collapsed by patient Id

                foreach ($queryRows as $value) {
                    $patientData[$value['pat.ID']]['pat.nombre']  = $value['pat.nombre'];
                    $patientData[$value['pat.ID']]['bed.ID']      = $value['bed.ID'];
                    $patientData[$value['pat.ID']]['bed.idRoom '] = $value['bed.idRoom '];
                    $patientData[$value['pat.ID']]['doc.ID']      = $value['doc.ID'];
                    $patientData[$value['pat.ID']]['doc.nombre']  = $value['doc.nombre'];
                    $patientData[$value['pat.ID']]['eqp.tipo'][]    = $value['eqp.tipo'];
                }// trying to save as:
                //[patient id => [bedId => id,  ... ,eqptype => [ eq1, eq2, eq3]], ...]
            }
            return $patientData;
        }

        // fetchs intern patients w info
        static function fetchRegisters2()
        { //patients w all extra stuff frkn superjoin goes here shite. ..
            //paciente;cama, habitación,medico, equipos

            if (verifyAdmin()) {
                global $tables;
                foreach ($tables as  $value) {
                    global ${"fields_$value"}; // yep getting all tables   
                }

                $sql = <<<bigQ
                SELECT pat.ID as id,pat.nombre as nombre, bed.ID as idCama, bed.idRoom as idRoom, doc.ID as idMed, doc.nombre as nombreDoc, eqp.tipo as equipo
                FROM $tables[8] AS reg
                    LEFT JOIN $tables[1] AS pat ON pat.ID = reg.idPaciente
                    LEFT JOIN $tables[6] AS soli ON soli.idPaciente = pat.ID
                    LEFT JOIN $tables[2] AS eqp ON eqp.ID = soli.idEquipo
                    LEFT JOIN $tables[0] AS doc ON doc.ID = pat.idMedico
                    LEFT JOIN $tables[5] AS bed ON bed.ID = reg.idCama
                WHERE reg.esInterno='true'
                bigQ;
                /*foreach (doQueryAllRows($sql) as $v) {
                    echo var_dump($v);
                }*/
                $patientData = array();
                $queryRows = doQueryAllRows($sql);
                foreach ($queryRows as $value) {
                    //echo var_dump($value);
                    $patientData[$value['id']] =  array();
                };//if this works rows should be collapsed by patient Id

                foreach ($queryRows as $value) {
                    $patientData[$value['id']]['nombre']    = $value['nombre'];
                    $patientData[$value['id']]['idCama']    = $value['idCama'];
                    $patientData[$value['id']]['idRoom']    = $value['idRoom'];
                    $patientData[$value['id']]['idMed']     = $value['idMed'];
                    $patientData[$value['id']]['nombreDoc'] = $value['nombreDoc'];
                    $patientData[$value['id']]['equipo'][]  = $value['equipo'];
                }// trying to save as:
                //[patient id => [bedId => id,  ... ,eqptype => [ eq1, eq2, eq3]], ...]
            }
            return $patientData;
        }

        static function fetchResources()
        {
            global $tables;
            return fetchTable($tables[3]);
        }

        static function addResource($resourceName, $units)
        {
            global $tables, ${"fields_$tables[3]"};

            $testq = "SELECT * FROM $tables[3] WHERE tipo = '$resourceName'";

            if (doQuery2($testq) > 0) {
                $sql = "UPDATE $tables[3] SET und_disp=und_disp+$units";
                $success = doQuery($sql);
            } else {
                $success =  doQuery(insertTableSQl($tables[3], ${"fields_$tables[3]"}, array($resourceName, $units)));
            }
        }

        static function fetchEquipments()
        {
            global $tables;
            return fetchTable($tables[2]);
        }
        
        static function addEquipment($equipName, $units)
        {
            global $tables, ${"fields_$tables[2]"};

            $testq = "SELECT * FROM $tables[2] WHERE tipo = '$equipName'";

            if (doQuery2($testq) > 0) {
                $sql = "UPDATE $tables[2] SET und_total=und_total+$units";
                $success = doQuery($sql);
            } else {
                $success =  doQuery(insertTableSQl($tables[3], ${"fields_$tables[3]"}, array($resourceName, $units)));
            }
        }
        static function reasignEquipment($idEquipo, $patientIdO, $patientIdD)
        {
            global $tables;
            //verify here admin and condition
            if (AdminSv::verifyPriority($patientIdO, $patientIdD)) {
                doQuery("UPDATE $tables[6] SET idPaciente='$patientIdD' WHERE idEquipo='$idEquipo' ");
            }
        }

        static function verifyPriority($idPo, $idPd){
            global $tables;
            $sqlO = "SELECT prioridad FROM $tables[1] WHERE ID = $idPo";
            $sqlD = "SELECT prioridad FROM $tables[1] WHERE ID = $idPd";
            $prioridadO = doQueryFirstRow($sqlO)['prioridad'];
            $prioridadD = doQueryFirstRow($sqlD)['prioridad'];
            if($prioridadO != $prioridadD && ($prioridadO =='baja' || $prioridadD == 'alta' ) ){
                return true;
            }
                return false;
        }

        static function verifyDispEquipo($type)
        {
            global $tables;
            $idEq = AdminSv::getEquipoId($type);
            $disp = doQueryFirstRow("SELECT * FROM $tables[2] WHERE idEquipo = $idEq")['und_total'];
            $eqPrestados = doQuery2("SELECT * FROM $tables[6] WHERE idEquipo = $idEq AND estado = 'prestado' ");
            return $disp > $eqPrestados;
        }
        
        // defaults to 1 equipment w the logged id of logged in
        static function assignEquip($type, $patientId, $idMedic = '',$amount=1){
            if($idMedic = ''){$idMedic = $_COOKIE['ID'];
            }
            global $tables, ${"fields_$tables[6]"};
            if( AdminSv::verifyDispEquipo($type) ){
                $fields = array_diff(${"fields_$tables[6]"},array('fechaHora'));
                $values = array(
                AdminSv::getEquipoId($type), 
                $patientId,
                $idMedic,
                $amount,
                'prestado');
                return doQuery(insertTableSQl($tables[6],$fields,$values) );
            }
            return false;
        }


        static function freeEquip($reqId)
        {
            global $tables;
            doQuery("UPDATE $tables[6] SET estado = 'cerrado' WHERE ID = $reqId" );
        }


        static function fetchRequests()
        {
            global $tables;
            return doQueryAllRows("SELECT * FROM $tables[6]");
        }
        
        static function fetchRequestsActive()
        {
            global $tables;
            return doQueryAllRows("SELECT * FROM $tables[6] WHERE estado = 'abierta'");
        }
        static function fetchRequestsActiveNamed()
        {
            global $tables;
            return doQueryAllRows(
            <<<sqlQ
            SELECT soli.ID AS id, eqp.tipo AS equipo, pat.nombre AS paciente, usr.nombre AS medico, usr.mail as email  ,soli.cantidad AS cantidad, soli.fechaHora as fecha
            FROM $tables[6] AS soli
            LEFT JOIN $tables[0] AS usr ON usr.ID = soli.idMedico 
            LEFT JOIN $tables[1] AS pat ON pat.ID = soli.idPaciente 
            LEFT JOIN $tables[2] AS eqp ON eqp.ID = soli.idEquipo  
            WHERE estado = 'abierta'
            sqlQ
            );
        }


        static function processRequest($reqId, $isApproved)
        {
            global $tables;
            $newState = $isApproved ? "prestado" : "rechazado";
            return doQuery("UPDATE $tables[6] SET estado = $newState WHERE ID = $reqId");
        }

        static function getEquipoId($type){
            global $tables;
            $row = doQueryFirstRow("SELECT ID FROM $tables[2] WHERE tipo ='$type'");
            return $row===false ? $row['ID'] : false;
        }

    }
/*
Un ADMINISTRADOR solamente puede ser agregado por otro administrador. 
El sistema inicialmente debe contar con un usuario ADMINISTRADOR por defecto. (SetUpDb se encarga)

Una vez el administrador ingrese contará con un centro de mensajes, el cual debe desplegar si tiene o no mensajes de aprobación de equipos pendientes (message table)
Un ADMINISTRADOR puede agregar al sistema nuevas habitaciones y camas (estas deben estar asociadas a una habitación)
Un ADMINISTRADOR puede consultar todos los pacientes, su cama, habitación asignada y el médico tratante. También podrá consultar los equipos asignados.
Un ADMINISTRADOR puede visualizar todos los recursos, empezando por los no disponibles y podrá comprar (adicionar) nuevas cantidades de recursos o nuevos recursos si así lo requiere.
Un ADMINISTRADOR puede visualizar todos los equipos (asignados o no) y agregar nuevos equipos al hospital. En el caso de los equipos estén asignados, el ADMINSITRADOR tendrá la posibilidad de cambiar la asignación siempre y cuando sea para un paciente de mayor prioridad y este no tenga el máximo de equipos asignados (prioridad alta hasta 3 equipos, y media hasta 2 equipos).
El centro de mensajes es donde el ADMINSITRADOR podrá aprobar o rechazar la asignación de equipos. Esta lista debe estar ordenada por prioridad de pacientes y si tiene varios con la misma prioridad, por fecha de solicitud. Esta lista se debe actualizar de acuerdo con los recursos asignados. Por ejemplo, si quedan 2 ventiladores y el primer, segundo y tercer paciente en la lista requieren un ventilador, al momento de llegar al tercero se informará que ya no hay ese equipo disponible y no se podrá asignar; si hay otros equipos disponibles, estos pueden ser asignados normalmente, en caso de que ya no haya ninguno de los equipos solicitados, el ADMINISTRADOR solo tendrá la opción de rechazar solicitud.
Una vez el ADMINISTRADOR apruebe o rechace una asignación de equipo, se le enviará un correo al médico tratante informándole del estado final de su solicitud (aprobada/rechazada y si fue aprobada, cuales equipos fueron asignados/no asignados)
*/

function testAdmnSv(){
    
    doQueryLogin('admin@adminmail.fake','madmin');
    if (!isset($_COOKIE['rol'])){ header("Refresh:5"); die();}
    AdminSv::clrcookies();
    echo 'testing...';
    //AdminSv::addAdmin(array('nombre'=> 'juanto alimaña','email'=> 'mucha@maña.net','password'=> 'elpaswn')); //create admin
    echo 'testing...2';
    AdminSv::addAdmin(array('id'=>5 )); //upd w/e
    echo 'testing...3';
    
    AdminSv::addRoom();//25 rooms in test data
    AdminSv::addRoom();//3 new rooms 
    AdminSv::addRoom();
    echo 'testing...4';
    AdminSv::addBed(6);
    AdminSv::addBed(27);
    
    echo 'testing...5';
    echo var_dump(AdminSv::fetchRegisters());
    echo 'testing...6';
    echo var_dump(AdminSv::fetchRegisters2());
    echo 'testing....6.5';
    echo "<br><br><br><br>";
    echo var_dump(AdminSv::fetchEquipments());
    echo "<br><br><br><br>";
    echo 'testing...7';
    
    
    echo 'testing...8';
}

//testAdmnSv();