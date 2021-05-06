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
        }
        
    }

?>
