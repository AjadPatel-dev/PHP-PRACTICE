<?php
    $arr = array(
        array('Aman','Anil','Ajad','Arpit'),
        array('1','2','2','3'),
        array('a','b','c','d'),
        array('LAMBORGINI','HARIEAR','OODI','BMW'),
    );
   ?>
 <table style='border:2px solid red;'>
 <tr>
 <th>Advdf</th>
 <th>fsdfdsf</th>
 <th>dsfdsfdfds</th>
 <th>sdfthyt</th>

</tr>
<?php
 foreach ($arr as $element) {
    echo "<tr><td>" . $element[0] . "</td>";
    echo "<td>" . $element[1] . "</td>";
    echo "<td>" . $element[2] . "</td>";
    echo "<td>" . $element[3] . "</td></tr>";
    }


 echo "</table>";
?>