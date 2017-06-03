<?php
include_once("../include/db.php");

$userID = getPOST('userID', TRUE);

//Personality
$reqKey = array('pName', 'fName', 'lName', 'nName', 'bDay', 'ppID', 'blood', 'origin', 'national', 'phone', 'sick', 'pic');
$prepareData = getMulPOST($reqKey);
updData('std_personality', $prepareData, $userID);

//School
$ReqKey = array('stdID', 'gen', 'dorm');
$prepareData = getMulPOST($ReqKey);
updData('std_school', $prepareData, $userID);

//Parent
$ReqKey = array('ffName', 'flName', 'fJob', 'fPhone', 'mfName', 'mlName', 'mJob', 'mPhone');
$prepareData = getMulPOST($ReqKey);
updData('std_parent', $prepareData, $userID);

//Address
$ReqKey = array('addNo', 'addArea', 'addVill', 'addRoad', 'addStreet', 'addSubDis', 'addDis', 'addPro', 'addZip');
$prepareData = getMulPOST($ReqKey);
updData('std_address', $prepareData, $userID);

printSuscess();


?>
