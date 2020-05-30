   <?php

    include_once './dbstuff.php';

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

        static function addAdmin()
        {
            global $tables;
            if (!verifyAdmin()) {
                return -1;
            }
            // like alter user or what?
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

        //ok don't know if this will work 
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
                    LEFT JOIN $tables[5] AS bed ON bed.ID = bed.reg.idCama
                WHERE soli.estado='prestado', CURRENT_TIMESTAMP() < TIMESTAMPADD(DAY, reg.duracion ,reg.fh_ingreso)
                bigQ;
                /*foreach (doQueryAllRows($sql) as $v) {
                    echo var_dump($v);
                }*/
                return doQueryAllRows($sql);
            }
        }

        static function fetchResources()
        {
            global $tables;
            fetchTable($tables[3]);
        }

        static function addResource($name, $units)
        {
        }

        static function fetchEquipments()
        {
        }
        static function addEquipment($name, $units)
        {
        }
        static function reasignEquipment($name, $patientIdO, $patientIdD)
        {
        }

        static function fetchRequests()
        {
        }
        static function processRequest($ReqId, $isApproved)
        {
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
