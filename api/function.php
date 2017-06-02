<?php

function printError($massege) {
    $dataout['status'] = "error";
    $dataout['detail'] = $massege;
    echo json_encode($dataout);
    exit;
}

function printSuscess($key = NULL, $data = NULL) {
    $dataout['status'] = "suscess";
    if(!is_null($key)) {
        $dataout[$key] = $data;
    }
    echo json_encode($dataout);
    exit;
}

function getMulPOST($nonReqKey = array(), $reqKey = array()) {
    $data = array();

    foreach($nonReqKey as $key) {
        if(isset($_POST[$key])) {
            $data[$key] = getPOST($key);
        }
    }

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

?>
