<?php
// Definition =  This function use to count the string value of substring.
    $str = "Good Health Good Life Good Health Good Life";
    echo $str . "<br>";
    $sub_str = "Good";  
    echo     $sub_str . "<br>";
    $result =  substr_count($str, $sub_str); 
    echo $result;
?>