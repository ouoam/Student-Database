<?php

function printError($type, $massege){
    $dataout['status']  = "error";
    $dataout['error']['type']    = $type;
    $dataout['error']['messege'] = $massege;
    echo json_encode($dataout);
    exit;}

function checkPost($name){
    if(!isset($_POST[$name])){
        printError("Post data incomplete", "'$name' is not set");
    }
}

?>
