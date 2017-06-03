<?php
include_once("../include/db.php");

header("Content-Type: application/json; charset=UTF-8");

echo json_encode(getAllData());

?>
