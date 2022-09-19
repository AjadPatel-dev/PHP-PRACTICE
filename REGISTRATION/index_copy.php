<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
    </head>
    <body id="bodyimg">
        <h1>Registration form</h1>
        <fieldset>
        <p id="message"> Please fill our form then submit</p>
            <form id="form_validation" method="post">
                <label>First Name :</label><br>
                <input type="text" name="fname" id="fname"  placeholder="Enter Your first name"><br><br>
                <span id="fname_error">Enter your first name</span>

                <label>Last Name :</label><br>
                <input type="text" name="lname" id="name"  placeholder="Enter Your last name"><br><br>
                <span id="name_error">Enter your last name</span>

                <label>Email :</label><br>
                <input type="email" name="email" id="email"  placeholder="Enter Your email"><br><br>
                <span id="email_error">Enter your email</span>

                <label>Contact Number :</label><br>
                <input type="text" name="num" id="num"  placeholder="Enter Your contact number"><br><br>
                <span id="num_error">Enter your Valid contact number</span>

                <label>Address :</label><br>
                <textarea name="address" id="address" rows="2"></textarea><br><br>
                <span id="address_error">Enter your Address</span>

                <label>Create Password :</label><br>
                <input type="password" name="pass" id="pass" placeholder="create password"><br><br>
                <span id="pass_error">Enter Password</span>

                <input type="submit" value="Save" id="rbutton">
            </form>
        </fieldset>
        <script>
            $(document).ready(function(){
          $("#form_validation").submit(function(event) {
            event.preventDefault();
            var u_fname = $("#fname").val();
            var u_lname = $("#name").val();
            var u_email = $("#email").val();
            var u_number = $("#num").val();
            var u_address= $("#address").val();
            var u_pass = $("#pass").val();
            if(u_fname == ''  &&  u_lname == ''  &&  u_email == ''  &&  u_number == ''  &&  u_address == ''  &&  u_pass == ''){
                $("#message").css({'display':'block'});

            } else if(u_fname != '' ){
                $("#fname_error").css({'display':'none'});
                $("#name_error").css({'display':'block'});

            } else if(u_lname != ''){
                $("#fname_error").css({'display':'none'});
                $("#name_error").css({'display':'none'});
                $("#email_error").css({'display':'block'});

            } else if(u_email != ''){
                $("#email_error").css({'display':'none'});
                $("#fname_error").css({'display':'none'});
                $("#name_error").css({'display':'none'});
                $("#num_error").css({'display':'block'});
                
            } else if(u_number != ''){
                $("#num_error").css({'display':'none'});
                $("#fname_error").css({'display':'none'});
                $("#name_error").css({'display':'none'});
                $("#email_error").css({'display':'block'});
                $("#address_error").css({'display':'block'});
                
            } else if(u_address != ''){
                $("#fname_error").css({'display':'none'});
                $("#name_error").css({'display':'none'});
                $("#email_error").css({'display':'none'});
                $("#num_error").css({'display':'none'});
                $("#address_error").css({'display':'none'});
                $("#pass_error").css({'display':'block'});
                
            } else if(u_pass != ''){
                
            }
         
            return false;
          
     
          });
        });
        </script>
    </body>
</html>