<html>
    <head>
        <meta charset="utf-8">
        <meta content="no-cache" http-equiv="cache-control"></meta>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <form id="firm-form" method="post" >
            <p>Firm Name</p><input class="firm-name" type="text" name="firm-name"  >
            <p>Email</p><input type="text" name="firm-email" >
            <p>Telephone</p><input type="text" name="telephone" >
            <p>Address</p><input type="text" name="address" >
            <p>City</p><input type="text" name="city" >
            <p>Firm Code</p><input type="text" name="firm-code" > <br>
        </form>
        <?php print $_SESSION["valid_firm"]; ?>
        <input class="submit" type="submit" value="Submit"><br >
        <span class="error" style="display:none"> Please Fill The Empty Fields</span>
        <span class="success" style="display:none"> Form Submitted Success</span>
        <script>
            $(document).ready(function() {
                var empty_fields = 0;
                $(".submit").on("click", function(){
                    $("#firm-form *").filter(":input").each(function(){
                    if(!$(this).val()){
                        empty_fields += 1;
                    }
                    });
                    if(empty_fields > 0){
                        $(".error").fadeIn(800).show();
                        $(".success").fadeOut(800).hide();
                    }
                    else {
                    var firm_name = $(".firm-name").val();
                        $.ajax({
                            type:"POST",
                            url:"../registration-control/register-firm.php",
                            data: "firm_name=" + firm_name,
                            success: function(){
                                $(".success").fadeIn(800).show();
                                $(".error").fadeOut(800).hide();
                            }
                        });
                    }
                    empty_fields = 0;
                });
            });
        </script>
    </body>
    <footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </footer>
</html>

<?php
    if (isset($_POST["firm_name"])){
        validateName($_POST["firm_name"]);

        $_SESSION["firm"] = $_POST["firm_name"];
        //echo $_SESSION["firm"]." from register-firm";
    }

    function validateName($firm_name){
        var_dump($firm_name);
        if (preg_match("/^[A-ZΑ-Ω]{1}[a-zA-Zα-ωΑ-Ω0-9\.]*/", $firm_name) && !ctype_digit($firm_name)){
            $_SESSION["valid_firm"] = 1;
        }
        $_SESSION["valid_firm"] = 0;
    }
?>