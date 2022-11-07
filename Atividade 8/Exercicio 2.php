<?php

    $sever = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'bad_exemplo';
    
    $connection = new mysqli($sever, $username, $password, $database) or die("not connected <br/>");

    echo "connected <br/>";
?>