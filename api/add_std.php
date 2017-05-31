<?php
include_once("db.php");
include_once("function.php");
//checkPost("stdID");

$reqKey = array('pName', 'fName', 'lName');
$nonReqKey = array('bDay', 'ppID', 'blood', 'origin', 'national', 'phone', 'pic');

foreach($reqKey as $key){
    checkPost($key);
    $prepareData[$key]    = getPost($_POST[$key]);
}

foreach($nonReqKey as $key){
    $prepareData[$key]    = getPost($_POST[$key]);
}

echo addData("std_personality", $prepareData);

?>
