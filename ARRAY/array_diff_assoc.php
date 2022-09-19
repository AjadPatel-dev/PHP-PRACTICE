<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue","e"=>"yellow","g"=>"yelvvvlow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue","f"=>"yellow");
$result=array_diff_assoc($a1,$a2);
print_r($result);
?>