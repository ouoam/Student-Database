<?php

function printError($massege){
    $dataout['status'] = "error";
    $dataout['error']  = $massege;
    echo json_encode($dataout);
    exit;}

function checkPost($name){
    if(!isset($_POST[$name])){
        printError("'$name' key is not set");
    }
}

function getPost($name){
    if(!isset($_POST[$name])){
        return NULL;
    } else {
        return $_POST[$name];
    }
}

?>
