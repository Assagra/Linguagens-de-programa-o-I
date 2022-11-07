<!--
Exercicio 5: sequencia de numeros pares
Autor: Lucas Assagra
Data: 29/03/2022
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 5</title>
</head>
<body>
    
    <h1>Numeros Pares</h1>

    <?php
    
        $a = $_GET["num"];

        for($i = 0; $i < $a; $i+=2){
            echo "$i ";
        }

        echo '<br><br>Lucas Assagra - 8128968';

    ?>

</body>
</html>