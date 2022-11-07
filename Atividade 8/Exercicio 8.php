<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'lp1';

    $connection = new mysqli($server, $username, $password, $database) or die("not connected <br/>");

    $sql = "SELECT Nome, Sobrenome FROM Pessoa";

    $resultado = mysqli_query($connection, $sql);

    echo "<h2>Pessoas</h2>";

    while($pessoa = mysqli_fetch_array($resultado)){

        echo $pessoa['Nome'] . " " .$pessoa['Sobrenome']. "<br>";
    }

    mysqli_close($connection);

?>