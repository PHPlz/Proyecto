<?php
include_once './dbcfg.php';

function DBQuery($sql)
{
    $conn = mysqli_connect(db_host, db_un, db_pwd);
    $retBool =  mysqli_query($conn, $sql);
    if (!$retBool) {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);
    return $retBool; //yes it's a redbull pun
}

//returns boolean
function doQuery($sql)
{
    $conn = mysqli_connect(db_host, db_un, db_pwd, db_name);
    $retBool =  mysqli_query($conn, $sql);
    if (!$retBool) {
        echo "<br> $sql <br>";
        echo mysqli_error($conn);
    }

    mysqli_close($conn);
    return $retBool; //yes it's a redbull pun
}

//returns some number stuff (rows modded)
function doQuery2($sql)
{
    $conn = mysqli_connect(db_host, db_un, db_pwd, db_name);
    $res =  mysqli_query($conn, $sql);
    $retNotBool = mysqli_num_rows($res);
    if (!$retNotBool) {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);
    return $retNotBool;
}

function doQueryFirstRow($sql)
{
    $conn = mysqli_connect(db_host, db_un, db_pwd, db_name);
    $res =  mysqli_query($conn, $sql);

    $ret = is_bool($res) ? false : mysqli_num_rows($res);
    if (!$ret) {
        echo mysqli_error($conn);
    } else {
        $ret = mysqli_fetch_assoc($res);
    }

    mysqli_close($conn);
    //echo "ret::__".var_dump($ret)."::";
    return $ret;
}

//all rows as assoc array
function doQueryAllRows($sql)
{
    $conn = mysqli_connect(db_host, db_un, db_pwd, db_name);
    $dbData = mysqli_query($conn, $sql);
    $data = array();
    if (!$dbData) {
        echo mysqli_error($conn);
    }
    while ($row = mysqli_fetch_assoc($dbData)) {
        $data[] = $row;
    }
    mysqli_close($conn);
    return $data;
}



//returns  array -> User, Role, C.C. OR false
function doQueryLogin($user, $pwd)
{
    $sql = "SELECT nombre, mail, rol FROM usuarios WHERE nombre='$user' AND pass='" . crypter($pwd) . "'";
    //echo "doQloginsql::".$sql;
    $conn = mysqli_connect(db_host, db_un, db_pwd, db_name);
    $res =  mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        echo "{$row['nombre']},{$row['rol']},{$row['mail']}";
        $ret =  array($row['nombre'], $row['mail'], $row['rol']);
    } else {
        echo mysqli_error($conn);
        $ret = false;
    }

    mysqli_close($conn);
    return $ret;
}

//return a sql statement to create a table
function createTableSQl($tabName, $fields)
{ //fields as field => type.
    $base = 'CREATE TABLE ' . $tabName . ' ( ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID)';
    //echo "<br>REEEEEEEEEEEEEE-_".$base;
    foreach ($fields as $key => $value) {
        $base .= ', ' . $key . ' ' . $value;
    }
    $base .= ')';
    return $base;
}

//receives arrays
function insertTableSQl($tabName, $fields, $values)
{ //fields as fields => values. single string assumed or commas included
    $base = 'INSERT INTO ' . $tabName;
    $base .= ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $values) . ')';
    return $base;
}

function getPersonaRowsSorted($name, $asc)
{
    $base = 'SELECT * FROM personas ORDER BY ';
    $base .= $name == true ? 'nombre ' : 'cedula ';
    $base .= $asc == true ? 'ASC' : 'DESC';
    $conn = mysqli_connect(db_host, db_un, db_pwd, db_name);
    //echo "<br> $base <br>";
    $dbData = mysqli_query($conn, $base);
    $tableRows = "";
    while ($row = mysqli_fetch_assoc($dbData)) {
        $tableRows .= '<tr>';
        foreach ($row as $key => $value) {
            if ($key != 'ID')
                $tableRows .= '<td>' . $value . '</td>';
        }
        $tableRows .= '</tr>';
    }
    mysqli_close($conn);
    return $tableRows;
}

function fetchUsers()
{
    $base = 'SELECT user, rol FROM usuarios';
    $conn = mysqli_connect(db_host, db_un, db_pwd, db_name);
    //echo "<br> $base <br>";
    $dbData = mysqli_query($conn, $base);
    $tableRows = "";
    while ($row = mysqli_fetch_assoc($dbData)) {
        $tableRows .= "<tr>";
        foreach ($row as $key => $value) {
            if ($key != 'ID')
                $tableRows .= "<td><a href='./reqHandler.php?user=$row[user]'>" . $value . '</a></td>';
        }
        $tableRows .= '</tr>';
    }
    mysqli_close($conn);
    return $tableRows;
}

//fetch table w  condition (default empty)
function fetchTable($tableName, $condition = array())
{
    $sql = "SELECT * FROM $tableName" . empty($condition) ? '' : " WHERE $condition";
    return doQueryAllRows($sql);
}

function updateTableSQl($tableN, $tabelData)
{

    $base = "UPDATE $tableN SET ";
    foreach ($tabelData  as $key => $value) {
        $base .= $key == 'edad' ? "$key = $value ," : "$key = '$value'  ,";
    }
    $base = rtrim($base, ',');
    $base .= "WHERE cedula = '$tabelData[cedula]'";
    return $base;
}


function crypter($pwd)
{
    //SALT
    $salt = "fancy shiny salty whiny weepy dashy slashy panty and stocking with garterbelt"; //yo! salty mofo
    return crypt($pwd, $salt);
}

function setUpDB()
{
    DBQuery('DROP DATABASE IF EXISTS ' . db_name);
    DBQuery('CREATE DATABASE ' . db_name);

    //DROP TABLES (BOBBY)
    foreach ($GLOBALS['tables'] as $value) {
        doQuery("DROP TABLE IF EXISTS $value;");
    }

    //CREATE TABLES
    foreach ($GLOBALS['tables'] as $key => $value) {
        doQuery(createTableSQl($value, $GLOBALS["alt_$value"]));
    }

    //INSERT SAMPLE DATA
    //>> sample insert
    /*doQuery(insertTableSQl( // create insertion sql()  -> do query ()
        $GLOBALS['tables'][0], // get table 0 name ; aka first arg
         $GLOBALS["fields_{$GLOBALS['tables'][0]}"], // FIELDS 
        array("'admin','admin@adminmail.fake','admin','" . crypter("madmin") . "'") ) ); // VALUES
    */} 

setUpDB();
