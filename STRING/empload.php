<?php
// Definition =  This function use to convert the all array to string 
    $arr = array('Hello','World!','this','is','a','autiful','Day!');
    echo $arr."<pre>";
    $result =  (implode (" ",$arr));
    echo "<pre>";
    echo $result;
