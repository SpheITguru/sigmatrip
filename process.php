<?php

    require_once('connection.php');

    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

        if($password!=$cpassword)
        {
              echo 'Password Not Matching';
        }else 
        {
            $pass=md5($password);
            $sql = "insert into users (username, email, password) values ('$username', '$email', '$pass')";
            $result = mysqli_query($con, $sql);
            
            if($result)
            {
                echo 'Your Record has been saved in the Database';
            }
            else 
            {
                echo 'Check your inputs';
            }
        }
    }
    echo $username;

?>
