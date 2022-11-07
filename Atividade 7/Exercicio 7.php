<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 7</title>
</head>
<body>
    
    <?php

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        if( $num1 > $num2){

            echo "$num1 é o maior numero";

        }elseif( $num1 == $num2){

            echo "os numeros são iguais";

        }else{

            echo "$num2 é o maior numero";

        }

    ?>

</body>
</html>