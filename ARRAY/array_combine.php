<?php
//Array combine = Array combine function 2 are many array add to single array 
//Bosth array are equal array of element
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
echo "<pre>";
print_r($c);
?>


<?php
    $name = array("Aman","Anil",'Roshan','Arpit');
    $id = array('11','22','33','44');
    $result =array_combine($name,$id);
    $age=array("35","37","43","ud");
    $result1 =array_combine($result,$age);
    echo "<pre>";
    print_r($result1);
?>
