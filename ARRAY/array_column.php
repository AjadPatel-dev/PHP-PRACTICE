<?php
    $arr = array(
        array(
            'id' => 1,
            'first_name' => 'Anil',
            'last_name' => 'Griffin',
        ),
        array(
            'id' =>2,
            'first_name' => 'Aman',
            'last_name' => 'Maurya',

        ),
        array(
            'id' => 3,
            'first_name' => 'Harsh',
            'last_name' => 'Narayan Simgh',
        ),
    );
    // $id = array_column($arr,'id');
    $last_name = array_column($arr,'last_name','id');
    
    echo "<pre>";
    // print_r($id);
    print_r($last_name);
?>



<?php
    $arrr=array(
        array(
            'name' => 'Ajad',
            'last_name' => 'Patel',
            'email' => 'ajad@gmail.com',
        ),
        array(
            'name' => 'Roshan',
            'last_name' => 'Patel',
            'email' => 'rosanpatrl@gmail.com',
        ),
        array(
            'name' => 'Aman',
            'last_name' => 'Maurya',
            'email' => 'maurya@gmail.com',
        ),
        array(
            'name' => 'Sachin',
            'last_name' => 'Patel',
            'email' => 'sachin@gmail.com',
        ),
    );
    $a = array_column($arrr,'email','name');
    echo "<pre>";
    print_r($a);
?>
