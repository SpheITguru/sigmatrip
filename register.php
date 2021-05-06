<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="images/bg2.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Register</h2>
                <form action = "process.php" method = "post">
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
                        <input type="password" name="password" required>
                    </div>
                    <div class="inputBx">
                        <span>Confirm Password</span>
                        <input type="password" name="cpassword" required>
                    </div>
                    
                    <div class="inputBx">
                        <input type="submit" value="Sign Up" name="submit">
                    </div>
                    <div class="inputBx">
                        <p class="login-registration-text">Have an account? <a href="login.php">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>