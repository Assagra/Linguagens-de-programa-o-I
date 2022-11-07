<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'vendas';

    $connection = new mysqli($server, $username, $password, $database) or die("not connected <br>");

    $sql = 'SELECT Nome, Sobrenome, CPF FROM clientes';

    $resultado = mysqli_query($connection, $sql);

    while($cliente = mysqli_fetch_array($resultado)){

        echo $cliente['Nome'] . " " . $cliente['Sobrenome']. " " . $cliente['CPF']. "<br><br>";
    }

    mysqli_close($connection);

?>