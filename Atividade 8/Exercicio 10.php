<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'lp1';

    $connection = new mysqli($server, $username, $password, $database) or die("not connected <br>");

    $sql = "INSERT INTO Pessoa VALUES('$_POST[nome]','$_POST[sobrenome]','$_POST[idade]')";

    if(mysqli_query($connection, $sql)){
     
        echo "Pessoa inserida com sucesso!!! <br>";
    
    }else{

        echo "ERROR";
    }

    mysqli_close($connection);

?>