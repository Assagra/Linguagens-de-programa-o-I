<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = '';

    $connection = new mysqli($server, $username, $password, $database) or die("not connected <br/>");

    $sql = "DROP DATABASE lp1";

    if(mysqli_query($connection, $sql)){

        echo "Base de Dados removida com sucesso <br/>";

    }else{

        echo "Erro <br/>";
    }
    
    mysqli_close($connection);

?>