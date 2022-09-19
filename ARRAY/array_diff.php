<?php
    //This functuion use  for 2 or more array values to compare and return the difference element
    $arr=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","d"=>"yellow");
    $arr1=array("e"=>"red","f"=>"black","g"=>"purple");
    $arr2=array("a"=>"red","e"=>"red","f"=>"black","g"=>"purple","b"=>"black","h"=>"yellow");
    $arr3=array("a"=>"red","b"=>"black","h"=>"yellow","b"=>"green","e"=>"red","f"=>"black","g"=>"purple");
    $result=array_diff($arr,$arr1,$arr2,$arr3);
    print_r($result);
echo "<pre>";

?>
