<?php
use Phppot\Member;

if (! empty($_POST["Sign in"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
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
                <h2>Login</h2>
                <form name="signup-btn" action="dashboard.html" method="POST"
                onsubmit="return signupValidation()">

                    <?php if(!empty($loginResult)){?>
                        <div class="error-msg"><?php echo $loginResult;?></div>
                        <?php }?>

                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username" required>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password" required>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name=""> Remember me</label>
                    </div>
                    <div class="inputBx">
                        <a href="dashboard.html"> <input type="submit" value="Sign in" name=""> </a>
                    </div>
                    <div class="inputBx">
                        <p class="login-registration-text">Don't have an account? <a href="register.php">Sign up</a></p>
                    </div>
                </form>
                <h3>Login with social media</h3>
                <ul class="sci">
                    <li><img src="images/facebook.png"></li>
                    <li><img src="images/twitter.png"></li>
                    <li><img src="images/instagram.png"></li>
                </ul>
            </div>
        </div>
    </section>

    <script>
    function loginValidation() {
        var valid = true;
        $("#username").removeClass("error-field");
        $("#password").removeClass("error-field");
    
        var UserName = $("#username").val();
        var Password = $('#login-password').val();
    
        $("#username-info").html("").hide();
    
        if (UserName.trim() == "") {
            $("#username-info").html("required.").css("color", "#ee0000").show();
            $("#username").addClass("error-field");
            valid = false;
        }
        if (Password.trim() == "") {
            $("#login-password-info").html("required.").css("color", "#ee0000").show();
            $("#login-password").addClass("error-field");
            valid = false;
        }
        if (valid == false) {
            $('.error-field').first().focus();
            valid = false;
        }
        return valid;
    }
    </script>
    <p>
     <?php
        print "env via \$_ENV is: ".$_ENV["DB_HOST"]."\n";
        print "env via getenv is: ".getenv("DB_HOST")."\n";
        ?>
    </p>
</body>

</html>