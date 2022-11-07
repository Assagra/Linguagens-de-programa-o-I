<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = '';

    $connection = new mysqli($server, $username, $password, $database) or die("not connected <br/>");

    echo "Connected <br/>";

    $sql = "CREATE DATABASE lp1";

    $sql2 = "CREATE DATABASE lp2";

    if(mysqli_query($connection, $sql)){

        echo "Base de Dados criada com sucesso <br/>";

    }else{

        echo "Erro <br/>";

    }

    mysqli_close($connection);

?>