<?php

    require_once('connection.php');

    if(isset($_POST['submit']))
    {
        $username = $_POST['username']);
        $password = $_POST['password']);

        if(empty($username) || empty($password))
        {
              echo 'Please fill in the blanks';
        }else 
        {
            $query = "select * from users where username = '$username'";
            $result = mysqli_query($con, $query);
            
            if($row=mysqli_fetch_assoc($result))
            {
                $db_password = $row['password'];
                if(md5($password) == $db_password)
                {
                  header("location:dashboard.html");               
                }
              else
              {
                echo 'Incorrect Password';
              }
            }
            else 
            {
                echo 'Check your inputs';
            }
        }
    }

?>
