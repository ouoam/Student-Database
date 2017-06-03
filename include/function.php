<?php

date_default_timezone_set('Asia/Bangkok');

function printError($massege) {
    header("Content-Type: application/json; charset=UTF-8");

    $dataout['status'] = "error";
    $dataout['detail'] = $massege;
    echo json_encode($dataout);
    exit;
}

function printSuscess($key = NULL, $data = NULL) {
    header("Content-Type: application/json; charset=UTF-8");
    
    $dataout['status'] = "suscess";
    if(!is_null($key)) {
        $dataout[$key] = $data;
    }
    echo json_encode($dataout);
    exit;
}

function getMulPOST($reqKey = array()) {
    $data = array();

    foreach($reqKey as $key) {
        $data[$key] = getPOST($key, TRUE);
    }

    return $data;
}

function getPOST($name, $req = FALSE) {
    if(!isset($_POST[$name])) {
        if($req) {
            printError("POST '$name' key is not set");
        } else {
            return NULL;
        }
    } else {
        if($_POST[$name]==""||is_null($_POST[$name])) {
            if($req) {
                printError("POST '$name' key is not set");
            } else {
                return NULL;
            }
        }
    }
    return $_POST[$name];
}

function getGET($name, $req = FALSE) {
    if(!isset($_GET[$name])) {
        if($req) {
            printError("GET '$name' key is not set");
        } else {
            return NULL;
        }
    } else {
        return $_GET[$name];
    }
}

function format_ppID($in){
    $in = substr_replace($in, '-', 12, 0);
    $in = substr_replace($in, '-', 10, 0);
    $in = substr_replace($in, '-', 5, 0);
    $in = substr_replace($in, '-', 1, 0);
    return $in;
}

function format_phone($in){
    $in = substr_replace($in, ' ', 6, 0);
    $in = substr_replace($in, ' ', 3, 0);
    return $in;
}

function format_date($in){
    $in = explode('-', $in);
    $in = $in[2] . '/' . $in[1] . '/' . $in[0];
    return $in;
}

?>
