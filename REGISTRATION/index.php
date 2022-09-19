<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
    </head>
    <body id="bodyimg">
    <p id="success_message" ></p>
        <h1>Registration form</h1>
        <fieldset id="fieldaa">
            <form id="form_validation" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>First Name :</label><br>
                            <input type="text" name="fname" id="fname"  placeholder="Enter Your first name" required="" >
                            <p  id="fname_error"></p>
                        </div>
                        <div class="col-sm-6" >
                            <label>Last Name :</label><br>
                            <input type="text" name="lname" id="lname"  placeholder="Enter Your last name" required="">
                            <p id="lname_error"></p>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Email :</label><br>
                            <input type="email" name="email" id="email"  placeholder="Enter Your email" required="">
                            <p id="email_error"></p>
                        </div>
                        <div class="col-sm-6" >
                            <label>Contact Number :</label><br>
                            <input type="text" name="num" id="num"  placeholder="Enter Your contact number" required=""><br><br>
                            <p id="num_error"></p>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Create Password :</label><br>
                            <input type="password" name="pass" id="pass" placeholder="create password" required="">
                            <p id="pass_error"></p>
                        </div>
                        <div class="col-sm-6" ></div>
                    </div> 
                </div><br><br>
                <input type="submit" value="Register" name="regsiter">
                
            </form>
        </fieldset>
        <script>
            $(document).ready(function(){
                // alert("w");
                $('#fname_error').hide();
                $('#lname_error').hide();
                $('#email_error').hide();
                $('#num_error').hide();
                $('#pass_error').hide();

                var error_fname = true;
                var error_lname = true;
                var error_email = true;
                var error_num = true;
                var error_pass = true;
                //fname validation
                $('#fname').keyup(function(){
                    fname_check();
                });
                function fname_check() {
                    var fname_pattern = /^[a-zA-Z ]*$/;
                    var u_fname = $("#fname").val();
                    if (fname_pattern.test(u_fname) && u_fname != '') {
                        $("#fname_error").hide();
                        $("#fname").css("border","2px solid gray");
                    } else {
                        $("#fname_error").html("Enter your valid first Name");
                        $("#fname_error").show();
                        error_fname = false;
                        return false;
                        
                    }
                }
                //lname validation
                $('#lname').keyup(function(){
                    lname_check();
                });
                function lname_check() {
                    var lname_pattern = /^[a-zA-Z ]*$/;
                    var u_lname = $("#lname").val();
                    if (lname_pattern.test(u_lname) && u_lname != '') {
                        $("#lname_error").hide();
                        $("#lname").css("border","2px solid gray");
                    } else {
                        $("#lname_error").html("Enter your valid last Name");
                        $("#lname_error").show();
                        error_lname = false;
                        return false;
                        
                    }
                }

                //email validation
                $('#email').keyup(function(){
                    email_check();
                });
                function email_check() {
                    var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    var u_email = $("#email").val();
                    if (email_pattern.test(u_email) && u_email != '') {
                        $("#email_error").hide();
                        $("#email").css("border","2px solid gray");
                    } else {
                        $("#email_error").html("Enter your valid email");
                        $("#email_error").show();
                        error_email = false;
                        return false;
                        
                    }
                }

                // contact number validation
                $('#num').keyup(function(){
                    num_check();
                });
                function num_check() {
                    var num_pattern = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
                    var u_num = $("#num").val();
                    if (num_pattern.test(u_num) && u_num != '') {
                        $("#num_error").hide();
                        $("#num").css("border","2px solid gray");
                    } else {
                        $("#num_error").html("Enter your valid 10 dijit number");
                        $("#num_error").show();
                        error_num = false;
                        return false;
                        
                    }
                }
                //password validation

                $('#pass').keyup(function(){
                    pass_check();
                });
                function pass_check() {
                    var pass_pattern = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
                    var u_pass = $("#pass").val();
                    if (pass_pattern.test(u_pass) && u_pass != '') {
                        $("#pass_error").hide();
                        $("#pass").css("border","2px solid gray");
                    } else {
                        $("#pass_error").html("Password should contain atleast one number and one special character");
                        $("#pass_error").show();
                        error_pass = false;
                        return false;
                        
                    }
                }

                $("#form_validation").submit(function(event) {
                    event.preventDefault();
                    fname_check();
                    lname_check();
                    email_check();
                    num_check();
                    pass_check();
                    var u_fname = $("#fname").val();
                    var u_lname = $("#lname").val();
                    var u_email = $("#email").val();
                    var u_num = $("#num").val();
                    var u_pass = $("#pass").val();
                        $.ajax({
                            type: "POST",
                            url: 'ajax.php',
                            data: {
                                u_fname: u_fname,
                                u_lname: u_lname,
                                u_email: u_email,
                                u_num:u_num,
                                u_pass:u_pass,
                                'action':'insert'
                            },
                            success: function(response){
                                var obj = JSON.parse(response);
                                if(obj.status !=''){
                                    if(obj.status == 2){
                                        jQuery('#success_message').text(obj.msg);
                                    }
                                    else if(obj.status == 1){
                                        jQuery('#success_message').text(obj.msg);  
                                        setTimeout(function() {
                                            window.location.href="login.php";
                                        }, 1000 );
                                    }
                                }
                                }
                            
   
                        });
                    
                    return false;
                });

            });
        </script>
    </body>
</html>