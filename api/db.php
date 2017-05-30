<?php
$database_type     = "mysql";
$database_default  = "std_db";
$database_hostname = "localhost";
$database_username = "root";
$database_password = "1234";
$database_port     = "3306";

header("Content-Type: application/json; charset=UTF-8");
include_once("function.php");

try {
    $db_conn = new PDO("$database_type:host=$database_hostname;port=$database_port;dbname=$database_default;charset=utf8", $database_username, $database_password);
    // set the PDO error mode to exception
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
        printError("Database connection failed", $e->getMessage());
    }
?>
