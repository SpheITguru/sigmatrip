<?php

    require_once('connection.php');  
    echo 'Starting the page';

    if(isset($_POST['submit']))
    {
        echo 'Button was clicked';
        
        $username = $_POST['username']);
        $password = $_POST['password']);

        if(empty($username) || empty($password))
        {
              echo 'Please fill in the blanks';
        }else 
        {
            echo 'Quering the DB';
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
