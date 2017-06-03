<?php
include_once("../include/function.php");

//thank https://www.formget.com/ajax-image-upload-php/

if(isset($_FILES["file"]["type"])) {
    if (
            (
                ($_FILES["file"]["type"] == "image/png") || 
                ($_FILES["file"]["type"] == "image/jpg") || 
                ($_FILES["file"]["type"] == "image/jpeg")
            ) &&
            ($_FILES["file"]["size"] < 10000000)
        )
    {
        if ($_FILES["file"]["error"] > 0) {
            printError("Return Code: " . $_FILES["file"]["error"]);
        } else {
            $sourcePath = $_FILES['file']['tmp_name'];
            $filename = md5_file($sourcePath);
            $targetPath = "../upload/".$filename;

            if (file_exists($targetPath)) {
                printSuscess('file', $filename);
            }

            if (!file_exists('../upload')) {
                mkdir('../upload', 0777, true);
            }

            move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

            printSuscess('file', $filename);
        }
    }else {
        printError("Invalid file Size or Type");
    }
}else{
    printError("Don't have file to upload");
}
?>
