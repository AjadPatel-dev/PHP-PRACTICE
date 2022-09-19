<?php
/*
for(initialization; condition; updation){  
    code to be executed  
     }  
*/
for ($i = 1; $i <= 10; $i++) {  
    echo "$i<br/>";
}
echo "<br>";
for ($i = 1; $i <= 10; $i++) { 
    $abc = 10*$i;
    echo " 10 * $i = $abc <br/>";
}
echo "<br>";
for ($i = 1; $i <= 10; $i++) { 
    $abc = 10*$i;
    if( $abc == 40 )continue;
    echo " 10 * $i = $abc <br/>";
}
