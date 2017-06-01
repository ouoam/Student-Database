<?php
include_once("db.php");
include_once("function.php");

//Personality
$reqKey = array('pName', 'fName', 'lName');
$nonReqKey = array('nName', 'bDay', 'ppID', 'blood', 'origin', 'national', 'phone', 'pic');
$prepareData = getMulPOST($nonReqKey, $reqKey);
$userID = addData('std_personality', $prepareData);

//School
$nonReqKey = array('stdID', 'gen', 'dorm');
$prepareData = getMulPOST($nonReqKey);
$prepareData['userID'] = $userID;
addData('std_school', $prepareData);

//Parent
$nonReqKey = array('ffName', 'flName', 'fJob', 'fPhone', 'mfName', 'mlName', 'mJob', 'mPhone');
$prepareData = getMulPOST($nonReqKey);
$prepareData['userID'] = $userID;
addData('std_parent', $prepareData);

//Address
$nonReqKey = array('addNo', 'addArea', 'addVill', 'addRoad', 'addStreet', 'addSubDis', 'addDis', 'addPro', 'addZip');
$prepareData = getMulPOST($nonReqKey);
$prepareData['userID'] = $userID;
addData('std_address', $prepareData);




?>
