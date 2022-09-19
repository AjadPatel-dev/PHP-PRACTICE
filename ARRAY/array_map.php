<?php
    $arr = array('a'=>'aman','b'=>'anil','ajad','roshan','atul');
    $strupper = array_map('strtoupper',$arr);
    echo "<pre>";
    print_r($strupper);

echo "<pre>";
    function myfunction($num){
        return($num*$num);
    }

    $a=array(1,2,3,4,5);
    print_r(array_map("myfunction",$a));

echo "<pre>";
    function myfunctiong($va){
        if ($va =="Dog"){
        return "Fido";
        }
        return $va;
    }

    $b=array("Horse","Dog","Cat");
    print_r(array_map("myfunctiong",$b));
?>
