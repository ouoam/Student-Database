<?php
include_once("function.php");

if(isset($_FILES["file"]["type"])) {
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    if (
            (
                ($_FILES["file"]["type"] == "image/png") || 
                ($_FILES["file"]["type"] == "image/jpg") || 
                ($_FILES["file"]["type"] == "image/jpeg")
            ) &&
            ($_FILES["file"]["size"] < 10000000) && //Approx. 100kb files can be uploaded.
            in_array($file_extension, $validextensions)
        )
    {
        if ($_FILES["file"]["error"] > 0) {
            printError("Return Code: " . $_FILES["file"]["error"]);
        } else {
            $md5 = md5_file($_FILES['file']['tmp_name']);
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "../upload/".$md5;

            if (!file_exists('../upload')) {
                mkdir('../upload', 0777, true);
            }

            move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

            printSuscess('file', $md5);
        }
    }else {
        printError("Invalid file Size or Type");
    }
}else{
    printError("Don't have file to upload");
}
?>
