<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'vendas';

    $connection = new mysqli($server, $username, $password, $database) or die("not connected <br>");

    $sql = "INSERT INTO clientes VALUES('$_POST[Nome]', '$_POST[Sobrenome]', '$_POST[CPF]')";

    if(mysqli_query($connection, $sql)){

        echo "Conta criada com sucesso!!!! <br>";

    }else{

        echo "ERRO<br>";
    }

    mysqli_close($connection);

?>