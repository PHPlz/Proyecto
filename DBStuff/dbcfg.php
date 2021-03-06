<?php

//Geraldine DB
define('db_un', 'admindb');
define('db_pwd', 'rA7VvZTcI4NlQrfI');
define('db_host', 'localhost');
define('db_name', 'miBD');


/*
//Ale db
define('db_un', 'lain');
define('db_pwd', '48OAWAjszUKSehJn');
define('db_host', 'localhost');
define('db_name', 'fancyshinyproyectdb');
*/

/*
  //Pablo DB
  define('db_un', 'pablo');
  define('db_pwd', 'wWu4dyOjvBlLoWpQ');
  define('db_host', 'localhost');
  define('db_name', 'Proyecto');
*/

define('test_data_path', 'C:/xampp/htdocs/Proyecto/DBStuff/testDataInserts');

// DB stuff ahead:

$tables =  array(
    /*0 */
    'Usuarios',
    /*1 */    'Pacientes',
    /*2 */    'Equipos',
    /*3 */    'Recursos',
    /*4 */    'Habitaciones',
    /*5 */    'Camas',
    /*6 */    'Soli_Equipos',
    /*7 */    'Soli_Recursos',
    /*8 */    'Registro'
);


// Fields
${"fields_$tables[0]"} = array('nombre', 'mail', 'rol' /* enum */, 'pass'); // 'Usuarios'
${"fields_$tables[1]"} = array('nombre', 'diagnostico', 'prioridad' /* enum */, 'idMedico' /*fk user */); // 'Pacientes'
${"fields_$tables[2]"} = array('tipo', 'und_total'); // 'Equipos'
${"fields_$tables[3]"} = array('tipo', 'und_disp'); // 'Recursos'
${"fields_$tables[4]"} = array( /*me parece q simplemente no necesita */); // 'Habitaciones'
${"fields_$tables[5]"} = array('idRoom','activo'); // 'Camas'

${"fields_$tables[6]"} = array('idEquipo', 'idPaciente', 'idMedico', 'cantidad', 'estado' /*enum */, 'fechaHora'); // 'Soli_Equipos'

${"fields_$tables[7]"} = array('idRecurso', 'idPaciente', 'cantidad', 'estado' /*enum */, 'fechaHora'); // 'Soli_Recursos'
${"fields_$tables[8]"} = array('fh_ingreso', 'duracion', 'idPaciente', 'idCama', 'esInterno'); // 'Log'

function generateType($fields)
{
    $types = array();
    foreach ($fields as $value) {
        switch ($value) {
            case 'rol':
                $type = "ENUM('admin','medic')";
                break;
            case 'prioridad':
                $type = "ENUM('baja','media','alta')";
                break;
            case 'estado': //ilegítimo de israel
                $type = "ENUM('abierta','rechazado','prestado', 'cerrado')";
                break;
            case 'und_total':
            case 'und_disp':
                $type = 'INT';
                break;
            case 'esInterno':
                $type = 'BOOLEAN';
                break;
            case 'duracion':// en días
                $type = 'INT';
                break;
            case 'fh_ingreso':
            case 'fechaHora':
                $type = 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP';
                break;
            case 'idMedico':
                $type = "INT, FOREIGN KEY (idMedico) REFERENCES {$GLOBALS['tables'][0]}(ID)";
                break;
            case 'idPaciente':
                $type = "INT, FOREIGN KEY (idPaciente) REFERENCES {$GLOBALS['tables'][1]}(ID)";
                break;
            case 'idEquipo':
                $type = "INT, FOREIGN KEY (idEquipo) REFERENCES {$GLOBALS['tables'][2]}(ID)";
                break;
            case 'idRecurso':
                $type = "INT, FOREIGN KEY (idRecurso) REFERENCES {$GLOBALS['tables'][3]}(ID)";
                break;
            case 'idRoom':
                $type = "INT, FOREIGN KEY (idRoom) REFERENCES {$GLOBALS['tables'][4]}(ID)";
                break;
            case 'idCama':
                $type = "INT, FOREIGN KEY (idCama) REFERENCES {$GLOBALS['tables'][5]}(ID)";
                break;
            case 'mail':
            case 'tipo':
                $type = "CHAR(50) UNIQUE";
                break;
            case 'activo':
                $type = 'BOOLEAN';
                break;
            default:
                $type = 'CHAR(128)';
                break;
        }


        $types[] = $type;
    }
    return $types;
}
// field => type arrays
${"alt_$tables[0]"} = array_combine(${"fields_$tables[0]"}, generateType(${"fields_$tables[0]"})); // 'Usuarios'
${"alt_$tables[1]"} = array_combine(${"fields_$tables[1]"}, generateType(${"fields_$tables[1]"})); // 'Pacientes'
${"alt_$tables[2]"} = array_combine(${"fields_$tables[2]"}, generateType(${"fields_$tables[2]"})); // 'Equipos'
${"alt_$tables[3]"} = array_combine(${"fields_$tables[3]"}, generateType(${"fields_$tables[3]"})); // 'Recursos'
${"alt_$tables[4]"} = array_combine(${"fields_$tables[4]"}, generateType(${"fields_$tables[4]"})); // 'Habitaciones'
${"alt_$tables[5]"} = array_combine(${"fields_$tables[5]"}, generateType(${"fields_$tables[5]"})); // 'Camas'
${"alt_$tables[6]"} = array_combine(${"fields_$tables[6]"}, generateType(${"fields_$tables[6]"})); // 'Soli_Equipos'
${"alt_$tables[7]"} = array_combine(${"fields_$tables[7]"}, generateType(${"fields_$tables[7]"})); // 'Soli_Recursos' //revisar fb para comentarios o preguntarle al we
${"alt_$tables[8]"} = array_combine(${"fields_$tables[8]"}, generateType(${"fields_$tables[8]"})); // 'Log'
