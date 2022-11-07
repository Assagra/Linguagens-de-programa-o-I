<?php

    $carros = array("gol", "civic", "corsa");

    echo $carros[2] . "<br>";

    $carros[3] = "HB20";
    $carros[4] = "uno";
    
    echo $carros[4] . "<br><br>";

    echo "<pre>";
    print_r($carros);
    echo "</pre>"

?>