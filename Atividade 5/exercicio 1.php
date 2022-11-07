<!--
Exercicio 1: comando $_GET
Autor: Lucas Assagra
Data: 29/03/2022
-->


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 1</title>
</head>
<body>
    
    <h1>Linguagem de Programação</h1>

    <?php
    
        $a = $_GET["param1"];
        $b = $_GET["param2"];

        if( $a > $b){
            echo "$a é maior que $b";
        } elseif ($a==$b) {
            echo "$a é igual a $b";
        } else {
            echo "$a e menor que $b";
        }

        echo 'Lucas Assagra - 8128968';
    
    ?>

</body>
</html>