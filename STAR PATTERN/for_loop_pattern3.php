<?php
   for ($i = 1; $i <=5-1; $i++) {
    for ($j = 4; $j > $i; $j--) {
        echo "&nbsp;&nbsp";
    }
    for ($k = 5; $k >5-$i; $k--) {
        echo "*";
    }
    echo "<br>";
}
//RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
echo "<br>";
//RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
for ($i = 1; $i <=5-1; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "&nbsp;&nbsp";
    }
    for ($k = 0; $k <5-$i; $k++) {
        echo "*";
    }
    echo "<br>";
}
?>