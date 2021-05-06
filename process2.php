<?php

    require_once('connection.php');  
    echo 'Starting the page';

    if(isset($_POST['submit']))
    {
        echo 'Button was clicked';
        
        $Uname = $_POST['username']);
        $PWD = $_POST['password']);

        
    }

?>
