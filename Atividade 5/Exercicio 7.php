<!--
Exercicio 7: contagem ate 100
Autor: Lucas Assagra
Data: 01/04/2022
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 7</title>
</head>
<body>
    
    <h1>Incira um numero ate 100</h1>

    <?php
    
        $numero = $_GET["num"];

        if( ( $numero <= 100 ) && ( $numero >= 0 ) ){

            for($i = $numero; $i <= 100; $i++){

                echo "$i ";

            }

        }elseif($numero > 100){

            echo "O numero incerido é maior que 100";

        }else{

            echo "O numero incerido é menor que 0";

        }

        echo '<br><br>Lucas Assagra - 8128968';
    
    ?>

</body>
</html>