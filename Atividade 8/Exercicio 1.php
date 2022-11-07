<?php

    echo "Bom dia <br/>";
    
    $con = mysqli_connect("localhost", "root","");

    echo "Estou entrando <br/>";

    if(!$con){
        echo "Erro ao conectar com a base de dados: ". mysqli_connect_error();
    }else{
        echo "COnexão Aberta <br/>";
    }

?>