<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
     

    </head>
    <body>
        <form id="first_form" method="post" >
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required minlength="8" >
            <span id="name_error"></span><br><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
            <span id="email_error"></span><br><br>

            <label for="pass">Password</label><br>
            <input type="password" name="pass" id="pass" required>
            <span id="pass_error"></span><br><br>
            <input class="submit" type="submit" value="Submit"><br >
        </form>
        <script>
            $(document).ready(function(){
                $("#first_form").submit(function(e){
                    e.preventDefault();
                    var u_name = $("#name").val();
                    var u_email = $("#email").val();
                    var u_pass = $("#pass").val();
                    // var u_id = $("#")
                    $.ajax({
                        type: "POST",
                        url: 'ajax.php',
                        data: {
                            u_name:u_name,
                            u_email:u_email,
                            u_pass,u_pass,
                            'action':'insert'
                        },
                        success: function(response){
            
                        }
                    });
                }) 
            });
        </script>
    </body>
</html>