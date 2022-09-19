<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>
            body,h1,h2,h3,h4,h5 {
                font-family: "Raleway", sans-serif;
            }
            a#logout {
                margin: 0px 0px 0px 1400px;
            }
        </style>
    </head>
    <body class="w3-light-grey">
    <a id="logout" href="logout.php" >Logout</a>
        <?php
        session_start();
        if(empty($_SESSION['email']) || $_SESSION['password'] == ''){
            header("Location:login.php");
            die();
        }
        ?>
        <?php
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 28800)) {
                // last request was more than 30 minutes ago
                session_unset();     // unset $_SESSION variable for the run-time 
                session_destroy();   // destroy session data in storage
            }
            $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
        ?>
        <!-- <div class="w3-content" style="max-width:1400px"> -->
        <header class="w3-container w3-center "> 
        <h1><b>MY BLOG</b></h1>
        <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
        </header>
        <img src="aaaa.jpg" width="100%" height="100%">
        </div>
        <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
        <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
        </footer>

    </body>
</html>
