<?php
    $n=5;
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            echo  " *";
        }
        echo "<br>";
    }
//RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
echo "<br>";
//RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
    for($i=1;$i<=$n;$i++){
        for($j=$n;$j>=$i;$j--){
            echo " *";
        } 
        echo "<br>";
    }

?>
