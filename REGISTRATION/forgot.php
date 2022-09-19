<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <body>
    <p id="success_message" ></p>
        <form id="forgot_password" method="post"> 
            <?php
                session_start();
            ?>
            <fieldset id="f_password">
                <img src="images.png" id="userimg"><br>
                <input type="hidden" name="id" id="id" value="<?php echo $_SESSION["id"];?>">
                <input type="hidden" name="old_passs" id="old_passs" value="<?php echo $_SESSION["password"];?>">

                <label >Enter Old Password :</label>
                <input  type="password" name="old_pass" id="old_pass">
                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password1"></span><br><br>
                <p id="error_old_pass"></p>

                <label >Create New password :</label>
                <input  type="password" name="n_pass" id="n_pass">
                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password2"></span><br><br>
                <p id="error_n_pass"></p>

                <label >Re-type password :</label>
                <input  type="password" name="re_n_pass" id="re_n_pass">
                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password3"></span><br><br>
                <p id="error_re_n_pass"></p>
                <input type="submit" value="save" id="button" ><br><br>
            </fieldset>
        </form>
        <script>






            $(document).ready(function(){
                $('#error_old_pass').hide();
                $('#error_n_pass').hide();
                $('#error_re_n_pass').hide();

                var oldpass_err = true;
                var npass_err = true;
                var nrpass_err = true;

                //match old password
                $('#old_pass').keyup(function(){
                    old_pass_check();
                });
                function old_pass_check(){
                    var old_passss = $('#old_passs').val();
                    var old_pass_pass = $('#old_pass').val();
                    
                    if(old_passss !== old_pass_pass){
                        $('#error_old_pass').show();
                        $('#error_old_pass').html('old password not match');
                        $('#error_old_pass').focus();
                        $('#error_old_pass').css('color','red');
                        oldpass_err = false;
                        return false;
                    }else{
                        $('#error_old_pass').hide();
                    }
                }

                //create new password validation
                $('#n_pass').keyup(function(){
                    n_pass_check();
                });
                function n_pass_check() {
                    var pass_pattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
                    var cn_pass = $("#n_pass").val();
                    if (pass_pattern.test(cn_pass) && cn_pass != '') {
                        $("#error_n_pass").hide();
                        $("#n_pass").css("border","2px solid gray");
                    } else {
                        $("#error_n_pass").html("Password should contain atleast eight characters,at one number and one special character");
                        $("#error_n_pass").show();
                        npass_err = false;
                        return false;
                        
                    }
                }

                //match new password
                $('#re_n_pass').keyup(function(){
                    re_n_pass_check();
                });
                function re_n_pass_check(){
                    var cn_pass = $("#n_pass").val();
                    var crt_pass = $('#re_n_pass').val();
                    
                    if(cn_pass !== crt_pass){
                        $('#error_re_n_pass').show();
                        $('#error_re_n_pass').html('Password not match');
                        $('#error_re_n_pass').focus();
                        $('#error_re_n_pass').css('color','red');
                        nrpass_err = false;
                        return false;
                    }else{
                        $('#error_re_n_pass').hide();
                    }
                }


$(document).on('click', '.toggle-password1', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#old_pass");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});

$(document).on('click', '.toggle-password2', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#n_pass");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});

$(document).on('click', '.toggle-password3', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#re_n_pass");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
                // $('#forgot_password').submit(function(){

                    $("#forgot_password").submit(function(event) {
                    event.preventDefault();
                    var cn_pass = $("#n_pass").val();
                    var idd= jQuery('#id').val();
                        $.ajax({
                        type: "POST",
                        url: 'ajax.php',
                        data: {
                            idd:idd,
                            cn_pass: cn_pass,
                            'action':'updatepassword'
                        },
                        success: function(response){
                            setTimeout(function() {
                                window.location.href="login.php";
                            }, 1000 );

                            }
                        

                    });
                     return false;   
                });

            });
        </script>
    </body>
</html>
