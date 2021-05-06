<?php 


    $con = mysqli_connect($_ENV["DB_HOST"],$_ENV["DB_USER"],$_ENV["DB_PASSWORD"],'sigmadb');

    if(!$con)
    {

        echo 'Please check your Database Connection';
       

    }
    echo $_ENV["DB_HOST"];

?>