<?php
include_once("../include/db.php");
include_once("../include/function.php");

$sql = "SELECT * FROM `std_personality` AS D1
        JOIN `std_school`AS D2 ON D1.userID = D2.userID
        JOIN `std_parent`AS D3 ON D1.userID = D3.userID
        JOIN `std_address`AS D4 ON D1.userID = D4.userID";

$stmt = $db_conn->prepare($sql); 
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$json_obj = $stmt->fetchAll();
echo json_encode($json_obj);

?>
