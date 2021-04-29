<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Sigma Trip</title>
    <script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="images/bg2.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Register</h2>
                <form name="sign-up" action="" method="POST"
                onsubmit="return signupValidation()">
                
                    <!-- php -->
                    <?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
    <!-- /php-->


                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username" required>
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="text" name="email" required>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="signup-password" required>
                    </div>
                    <div class="inputBx">
                        <span>Confirm Password</span>
                        <input type="password" name="confirm-password-info" required>
                    </div>
                    
                    <div class="inputBx">
                        <input type="submit" value="Sign Up" name="signup-btn">
                    </div>
                    <div class="inputBx">
                        <p class="login-registration-text">Have an account? <a href="login.php">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        function signupValidation() {
            var valid = true;
        
            $("#username").removeClass("error-field");
            $("#email").removeClass("error-field");
            $("#password").removeClass("error-field");
            $("#confirm-password").removeClass("error-field");
        
            var UserName = $("#username").val();
            var email = $("#email").val();
            var Password = $('#signup-password').val();
            var ConfirmPassword = $('#confirm-password').val();
            var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        
            $("#username-info").html("").hide();
            $("#email-info").html("").hide();
        
            if (UserName.trim() == "") {
                $("#username-info").html("required.").css("color", "#ee0000").show();
                $("#username").addClass("error-field");
                valid = false;
            }
            if (email == "") {
                $("#email-info").html("required").css("color", "#ee0000").show();
                $("#email").addClass("error-field");
                valid = false;
            } else if (email.trim() == "") {
                $("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
                $("#email").addClass("error-field");
                valid = false;
            } else if (!emailRegex.test(email)) {
                $("#email-info").html("Invalid email address.").css("color", "#ee0000")
                        .show();
                $("#email").addClass("error-field");
                valid = false;
            }
            if (Password.trim() == "") {
                $("#signup-password-info").html("required.").css("color", "#ee0000").show();
                $("#signup-password").addClass("error-field");
                valid = false;
            }
            if (ConfirmPassword.trim() == "") {
                $("#confirm-password-info").html("required.").css("color", "#ee0000").show();
                $("#confirm-password").addClass("error-field");
                valid = false;
            }
            if(Password != ConfirmPassword){
                $("#error-msg").html("Both passwords must be same.").show();
                valid=false;
            }
            if (valid == false) {
                $('.error-field').first().focus();
                valid = false;
            }
            return valid;
        }
        </script>

</body>
</html>