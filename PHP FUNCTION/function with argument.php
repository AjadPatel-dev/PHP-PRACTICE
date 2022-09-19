<?php
    //Function with argument => function with argument to declear the function and pass with argument is calld ti function with argument.
    //Call by valuefunction ,Pass single argument in PHP function.
    function Mydemo($var){
        echo "Hell how are you ! $var.<br>";
    } 
    Mydemo("Ajad");
    Mydemo("Aman");
    Mydemo("Roshan");
    Mydemo("Arpit");
    echo "<br>";

    //Call by valuefunction ,Pass two argument in PHP function.
    function Mydemo1($name,$age){
        echo "My Self = $name.<br>My age is = $age.<br><br>";
    } 
    Mydemo1("Ajad Patel",21);
    Mydemo1("Aman Maurya",22);
    Mydemo1("Roshan Patel",20);
    Mydemo1("Arpit Kumar Patel",21);
    echo "<br>";
     
    //Call by reference function.
    function adder(&$str2) {  
        $str2 .= 'How are you study';  
    }  
    $a='azad';
    adder($a); 
    echo $a;
    echo "<br>"; 
    //Default Argument Value
    function sayHello($name="Sonoo"){  
        echo "Hello $name<br/>";  
    }  
    sayHello("Rajesh");  
    sayHello();//passing no value  
    sayHello("John");
    echo "<br>"; 

    //Returning Value
    function cube($n){  
    return $n*$n*$n;  
    }  
    echo cube(3);  
  

?>