<!--
Exercicio 3: par ou impar, positivo ou negativo  
Autor: Lucas Assagra
Data: 29/03/2022
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 3</title>
</head>
<body>
    
    <h1>Exercicio 3 - leitura de um numero</h1>

    <?php
    
        $a = $_GET["num"];


        if($a > 0){

            echo "o numero $a é positivo <br>";

        }else{
            echo "o numero $a é negativo <br>";
        }

        if( $a % 2 == 0){
            echo "o numero $a é par <br>";
        }else{
            echo "o numero $a é impar <br>";
        }

        echo '<br><br>Lucas Assagra - 8128968';
    
    ?>

</body>
</html>