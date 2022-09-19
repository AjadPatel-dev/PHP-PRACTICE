<?php
// Definition =  This function use to replace the some characters another charecter in string.
    $str_replace = "Hi Ra-One,How are you ArPiT 001.I am fine ok Sir";
    echo $str_replace;
    echo "<br>";
    $replace_item = ['How','ArPiT','fine'];
    $new_replace_item= ['ARE','AJAD','Thanks'];
    $result = str_replace($replace_item, $new_replace_item, $str_replace);
    echo $result;
?>

