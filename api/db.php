<?php
$database_type     = 'mysql';
$database_default  = 'std_db';
$database_hostname = 'localhost';
$database_username = 'root';
$database_password = '';
$database_port     = '3306';

header("Content-Type: application/json; charset=UTF-8");
include_once("function.php");

try {
    $db_conn = new PDO("$database_type:host=$database_hostname;port=$database_port;dbname=$database_default;charset=utf8", $database_username, $database_password);
    // set the PDO error mode to exception
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
        printError("Database connection failed, ".$e->getMessage());
    }

function addData($table, $data){
    global $db_conn;

    $sqlKey   = '';
    $sqlValue = '';
    $bind     = array();
    foreach($data as $key => $value){
        $sqlKey       .= "`$key`, ";
        $sqlValue     .= ":$key, ";
        $bind[":$key"] = $value;
    }
    $sqlKey   = str_split($sqlKey  , strlen($sqlKey)   - 2)[0];
    $sqlValue = str_split($sqlValue, strlen($sqlValue) - 2)[0];

    $sth = $db_conn->prepare("INSERT INTO `$table` ($sqlKey) VALUES ($sqlValue);");
    $sth->execute($bind);
    return $db_conn->lastInsertId();
}
?>
