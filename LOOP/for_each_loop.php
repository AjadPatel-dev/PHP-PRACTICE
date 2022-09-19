<?php  
    /*
        foreach ($array as $value) {  
            code to be executed  
        }  
    */
    $season = array ("Summer", "Winter", "Autumn", "Rainy");  
    foreach ($season as $element) {  
        echo "$element";  
        echo "</br>";  
    }  
    echo "<br>";
    $user = array (  
        "Name" => "Ajad",  
        "Email" => "ajad123@gmail.com",  
        "Age" => 21,  
        "Gender" => "Male"  
    );  
    foreach ($user as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>";   
    }  
?>  