<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="bodyimage">
        <form id="login_form" method="post"> 
            <fieldset id="field">
                <img src="images.png" id="userimg">
                <label class="user">Username</label>
                <input class="user" type="email" name="email" id="email"><br><br><br>
                <label class="user">Password</label>
                <input class="user" type="password" name="password" id="password"><br><br><br>
                <input type="checkbox" checked="checked"> Remember me<br><br>
                <input type="submit" name="login" id="button" ><br><br>
                <span >Forgot <a href="#">password?</a></span>
                <span class="register"> <a href="index.php">NewRegister</a> </span>
            </fieldset>
        </form>
        <?php 
            if(isset($_POST['login'])){
                include_once("config.php");
                $username = $_POST['email'];
                $password = $_POST['password'];
                $query = "SELECT id,f_name,l_name,email,number,password FROM user_data where email='$username' AND password='$password'";   
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION["f_name"] = $row["f_name"];
                        $_SESSION["l_name"] = $row["l_name"];
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




<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="bodyimage">
        <form id="login_form" method="post"> 
        <fieldset id="field">
            <img src="images.png" id="userimg">
            <form action="login.php" method="post">
            <img src="images.pngok" alt="">
                <label class="user">Username</label>
                <input class="user" type="email" name="email" id="email"><br><br><br>
                <label class="user">Password</label>
                <input class="user" type="password" name="password" id="password"><br><br><br>
                <input type="checkbox" checked="checked"> Remember me<br><br>
                <input type="submit" name="login" id="button" ><br><br>
                    <span >Forgot <a href="forgot.php">password?</a></span>
                    <span class="register"> <a href="index.php">NewRegister</a> </span>

            </form>
            <?php 
        if(isset($_POST['login'])){
            include_once("config.php");
    
                $username = $_POST['email'];
                $password = $_POST['password'];
            $query = "SELECT id,f_name,l_name,email,number,password FROM user_data where email='$username' AND password='$password'";   
        $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){


                  
                    session_start();
                    $_SESSION["f_name"] = $row["f_name"];
                    $_SESSION["l_name"] = $row["l_name"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["password"] = $row["password"];
                    $_SESSION["id"] = $row["id"];


                    header("Location:welcome.php");
                }
            }else{
                echo '<div class="alert alert-danger">User name and password are not match</div>';
            }
        }
        ?>

        </fieldset>
    </body>
</html>











<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="bodyimage">
        <form id="login_form" method="post"> 
        <fieldset id="field">
            <img src="images.png" id="userimg">
            <form action="login.php" method="post">
            <img src="images.pngok" alt="">
                <label class="user">Username</label>
                <input class="user" type="email" name="email" id="email"><br><br><br>
                <label class="user">Password</label>
                <input class="user" type="password" name="password" id="password"><br><br><br>
                <input type="checkbox" checked="checked"> Remember me<br><br>
                <input type="submit" name="login" id="button" ><br><br>
                    <span >Forgot <a href="#">password?</a></span>
                    <span class="register"> <a href="index.php">NewRegister</a> </span>

            </form>
            <?php 
        if(isset($_POST['login'])){
            include_once("config.php");
    
                $username = $_POST['email'];
                $password = $_POST['password'];
            $query = "SELECT id,f_name,l_name,email,number,password FROM user_data where email='$username' AND password='$password'";   
        $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){


                  
                    session_start();
                    $_SESSION["f_name"] = $row["f_name"];
                    $_SESSION["l_name"] = $row["l_name"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["password"] = $row["password"];
                    $_SESSION["id"] = $row["id"];


                    header("Location:welcome.php");
                }
            }else{
                echo '<div class="alert alert-danger">User name and password are not match</div>';
            }
        }
        ?>

        </fieldset>
    </body>
</html>











