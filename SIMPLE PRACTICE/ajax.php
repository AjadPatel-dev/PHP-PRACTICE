<?php
    include_once("config.php");
echo     $user_name = !empty($_POST['u_name']) ? $_POST['u_name'] : "";
echo     $user_email = !empty($_POST['u_email']) ? $_POST['u_email'] : "";
echo     $user_password = !empty($_POST['u_pass']) ? $_POST['u_pass'] : "";
    // $u_id= !empty($_POST['id']) ? $_POST['id'] : "";
    $action=$_POST['action'];

    if($action == "insert"){
        $match_data =mysqli_query($conn, "SELECT * FROM datas WHERE name='$user_name' or email='$user_email' or password='$user_password'");
         $num_result = mysqli_num_rows($match_data);
         if(!empty( $num_result) &&  $num_result>0){
            echo "record match! .<br>please new register";
         }else{
           $query = "INSERT INTO datas(name,email,password) VALUES('$user_name','$user_email','$user_password')";
           $register_data = mysqli_query($conn,$query);
           if($register_data = true){
            header("Location: login.php" );
           }else{
            echo "nahi huaa fir se karo";
           }
        }
    }
     
?>