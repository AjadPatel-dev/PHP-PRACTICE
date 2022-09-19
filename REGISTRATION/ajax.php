
<?php
   include_once("config.php");
   $msg=array();
      $user_fname = !empty($_POST['u_fname']) ? $_POST['u_fname'] : "";
      $user_lname = !empty($_POST['u_lname']) ? $_POST['u_lname'] : "";
      $user_email = !empty($_POST['u_email']) ? $_POST['u_email'] : "";
      $user_number = !empty($_POST['u_num']) ? $_POST['u_num'] : "";
      $user_password = !empty($_POST['u_pass']) ? $_POST['u_pass'] : "";
      $user_pass = !empty($_POST['cn_pass']) ? $_POST['cn_pass'] : "";
      $id= !empty($_POST['idd']) ? $_POST['idd'] : "";
      $action=$_POST['action'];
      if($action =="updatepassword") {
         $update_pass = "UPDATE user_data SET password='$user_pass' WHERE id=$id";
         $result = mysqli_query($conn, $update_pass);
         if($result){
            $msg=array('msg'=>'user update','status' =>3);
         } else {
            $msg=array('msg'=>'user not update','status' =>4);
         }
      }else if($action == "insert"){
         $match_data =mysqli_query($conn, "SELECT * FROM user_data WHERE email='$user_email' or number='$user_number'");
         $num_result = mysqli_num_rows($match_data);
         if(!empty( $num_result) &&  $num_result>0){
            $msg=array('msg' =>'User email and password already register','status' =>2);
         } else{
            $msg=array('msg'=>' You are Register Successfully.','status'=>1);
            $query = "INSERT INTO user_data(f_name,l_name,email,number,password) VALUES('$user_fname','$user_lname','$user_email','$user_number','$user_password')";
            $register_data = mysqli_query($conn,$query);
         }
      }
      echo json_encode($msg);
      die(); 
?>
