<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'lp1';
  

    $connection = new mysqli($server, $username, $password, $database) or die("not connected <br/>");

    $sql1 = "INSERT INTO Pessoa VALUES('Ana', 'Souza', 20)";

    mysqli_query($connection, $sql1);

    $sql2 = "INSERT INTO Pessoa (Nome, Sobrenome, Idade) VALUES('Carlos', 'Costa', 22)";

    mysqli_query($connection, $sql2);
    mysqli_close($connection);

?>