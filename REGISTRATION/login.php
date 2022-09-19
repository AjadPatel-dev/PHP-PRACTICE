
<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
    </head>
    <body id="bodyimage">
        <form id="login_form" method="post"> 
            <fieldset id="field">
                <img src="images.png" id="userimg">
                <label class="user">Username</label>
                <input class="user" type="email" name="email" id="email"><br><br><br>
                <label class="user">Password</label>
                <input class="user" type="password" name="password" id="password">
                <p class="show_password"><input type="checkbox" id="showPass">Show Password</p>
                <input type="checkbox" checked="checked"> Remember me<br><br>
                <input type="submit" name="login" id="button" ><br><br>

                <span >Forgot <a href="forgot.php">password?</a></span>
                <span class="register"> <a href="index.php">NewRegister</a> </span>
            </fieldset>
        </form>
        <?php 
            if(isset($_POST['login'])){
                include_once("config.php");
                $user_email = $_POST['email'];
                $password = $_POST['password'];
                
                $query = "SELECT id,f_name,l_name,email,number,password FROM user_data where email='$user_email' AND password='$password'";   
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["f_name"] = $row["f_name"];
                        $_SESSION["l_name"] = $row["l_name"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["password"] = $row["password"];
                        $_SESSION["number"] = $row["number"];
                        header("Location:welcome.php");
                    }
                }else{
                    echo '<div class="alert alert-danger">User name and password are not match</div>';
                }
            }
        ?>
        <script>
             $(document).ready(function(){
                $('#showPass').on('click', function(){
                var passInput=$("#password");
                if(passInput.attr('type')==='password')
                {
                    passInput.attr('type','text');
                }else{
                passInput.attr('type','password');
                }
                })
                })
        </script>
    </body>
</html>