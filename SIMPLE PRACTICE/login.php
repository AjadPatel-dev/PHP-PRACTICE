
<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <style>
            input#button {
                margin: -40px 0px -1px 183px;
            }
            input[type="checkbox"] {
                margin: 41px 0px 0px 0px;
            }
        </style>
    </head>
        <form id="login_form" method="post"> 
                <label >Username</label>
                <input  type="email" name="email" id="email"><br><br><br>

                <label>Password</label>
                <input type="password" name="password" id="password"><br>

                <input type="checkbox" checked="checked"> Remember me<br><br>
                <input type="submit" name="login" id="button" ><br><br>

                <span >Forgot <a href="#">password?</a></span>
                <span class="register"> <a href="register.php">NewRegister</a> </span>
            </fieldset>
        </form>
    
        <?php 
            if(isset($_POST['login'])){
                include_once("config.php");
                $u_email = $_POST['email'];
                $password = $_POST['password'];
                $query = "SELECT id,name,email,password FROM datas where email='$u_email' AND password='$password'";   
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["name"] = $row["name"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["password"] = $row["password"];
                        header("Location:welcome.php");
                    }
                }else{
                    echo '<div class="alert alert-danger">User name and password are not match</div>';
                }
            }
        ?>

    </body>
</html>