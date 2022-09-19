<?php
//Array case change

// function = array_change_key_case
$array = array("ajad"=>1, "roshni"=>'hh', "abhisek maurya"=>3 , "manish"=>4, "ved prakash"=>5, "ritesh sharma"=>6, "sahil"=>7);
print_r(array_change_key_case($array, CASE_UPPER));
echo "<br>";
$array1 = array("MANISH"=>1 ,"AdsfdNIL"=>2 ,"VIKAsdfSH"=> 3,"SANsdfTOSH"=>4 ,"SURdsfAJ"=>5 ,"SAdsfNDEEP CHAsdfsURASIYA"=> 6,"MAHsdfsdfESH"=> 7,"RAsdfdsVI"=> 8);
print_r(array_change_key_case($array1,  CASE_LOWER));
?>