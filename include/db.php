<?php
$db_type     = 'mysql';
$db_default  = 'std_db';
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_port     = '3306';

include_once("function.php");

try {
    $db_conn = new PDO("$db_type:host=$db_hostname;port=$db_port;dbname=$db_default;charset=utf8", $db_username, $db_password);
    // set the PDO error mode to exception
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    printError("Database connection failed, ".$e->getMessage());
}

function addData($table, $data) {
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

function getAllData(){
    global $db_conn;
    
    $sql = "SELECT * FROM `std_personality` AS D1
            JOIN `std_school`AS D2 ON D1.userID = D2.userID
            JOIN `std_parent`AS D3 ON D1.userID = D3.userID
            JOIN `std_address`AS D4 ON D1.userID = D4.userID";

    $stmt = $db_conn->prepare($sql); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $json_obj = $stmt->fetchAll();
    return $json_obj;
}
?>
