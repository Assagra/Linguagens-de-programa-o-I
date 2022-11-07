<?php

    $sever = 'localhost';
    $username = 'root';
    $password = '';
    $database = '';
    
    $connection = new mysqli($sever, $username, $password, $database) or die("not connected");

    echo "connected";
    mysqli_close($connection);

?>