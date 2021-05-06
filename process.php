<?php

    require_once('connection.php');

    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($_POST['username'], $con);
        $email = mysqli_real_escape_string($_POST['email'], $con);
        $password = mysqli_real_escape_string($_POST['password'], $con);
        $cpassword = mysqli_real_escape_string($_POST['cpassword'], $con);

        echo $username, $email, $password, $cpassword;
    }

?>