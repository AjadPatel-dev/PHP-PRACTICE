<?php
// Definition =  This function use to removes whitespace and other predefined characters from both sides of a string.
    $str = "d A string is series of characters, where a character is the same as a byte";
    echo $str . "<br>";
    $result =  trim($str,"d A string is series byte");
    echo $result;
?>