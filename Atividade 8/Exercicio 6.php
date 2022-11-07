<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'lp1';

    $connection = new mysqli($server, $username, $password, $database) or die("not connected <br/>");

    $sql = "CREATE TABLE Pessoa(Nome Char(30), Sobrenome CHAR(30), Idade Int)";

    if(mysqli_query($connection, $sql)){

        echo "tabela Criada com sucesso <br/>";

    }else{

        echo "Erro <br/>";
    }

    mysqli_close($connection);

?>