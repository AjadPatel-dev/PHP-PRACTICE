<?php
// Definition =  This function use to file name to change to the encripted formate.
    $filename = "md5.php";
    echo $filename."<br>";
    $md5file = md5_file($filename);
    echo $md5file;
?>

