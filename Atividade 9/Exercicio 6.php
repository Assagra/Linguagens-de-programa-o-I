<?php

    $name = array(4,3,5,2,1,0);

    $array = array(
        "chave1" => 1,
        "chave2" => "php",
        "chave3" => false
    );

    echo "Acesso aos elementos do array por indice <br>";
    echo $name[0];
    echo $name[1];
    echo $name[2];

    echo "<br>Acesso aos elementos do array por chave";
    echo "<br>";
    echo $array["chave1"];
    echo "<br>";
    echo $array["chave2"];

?>