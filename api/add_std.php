<?php
include_once("db.php");
include_once("function.php");

switch(getGET("part", TRUE)) {
    case 1: //Personality
        $reqKey = array('pName', 'fName', 'lName');
        $nonReqKey = array('bDay', 'ppID', 'blood', 'origin', 'national', 'phone', 'pic');
        $table = 'std_personality';
        break;

    case 2: //School
        $reqKey = array('userID');
        $nonReqKey = array('stdID', 'gen', 'dorm');
        $table = 'std_school';
        break;

    case 3: //Parent
        $reqKey = array('userID');
        $nonReqKey = array('ffName', 'flName', 'fJob', 'fPhone', 'mfName', 'mlName', 'mJob', 'mPhone');
        $table = 'std_parent';
        break;

    case 4: //Address
        $reqKey = array('userID');
        $nonReqKey = array('addNo', 'addArea', 'addVill', 'addRoad', 'addStreet', 'addSubDis', 'addDis', 'addPro', 'addZip');
        $table = 'std_address';
        break;

    default:
        printError("Don't have that part.");
        break;
}

$prepareData = getMulPOST($nonReqKey, $reqKey);
if(getGET("part", TRUE) == 1) {
    printSuscess("userID", addData($table, $prepareData));
} else {
    addData($table, $prepareData);
    printSuscess();
}


?>
