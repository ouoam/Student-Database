<?php
include_once("db.php");
include_once("function.php");

//Personality
$reqKey = array('pName', 'fName', 'lName', 'nName', 'bDay', 'ppID', 'blood', 'origin', 'national', 'phone', 'sick', 'pic');
$prepareData = getMulPOST($reqKey);
$userID = addData('std_personality', $prepareData);

//School
$ReqKey = array('stdID', 'gen', 'dorm');
$prepareData = getMulPOST($ReqKey);
$prepareData['userID'] = $userID;
addData('std_school', $prepareData);

//Parent
$ReqKey = array('ffName', 'flName', 'fJob', 'fPhone', 'mfName', 'mlName', 'mJob', 'mPhone');
$prepareData = getMulPOST($ReqKey);
$prepareData['userID'] = $userID;
addData('std_parent', $prepareData);

//Address
$ReqKey = array('addNo', 'addArea', 'addVill', 'addRoad', 'addStreet', 'addSubDis', 'addDis', 'addPro', 'addZip');
$prepareData = getMulPOST($ReqKey);
$prepareData['userID'] = $userID;
addData('std_address', $prepareData);

printSuscess();


?>
