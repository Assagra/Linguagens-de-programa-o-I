<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 10</title>
</head>
<body>
    
    <?php

        $n1 = $_GET["n1"];
        $soma = 0;

        for($i = 1; $i <= $n1; $i++){

            $soma = $soma + $i;

        }

        echo "$soma";

    ?>

</body>
</html>