<!--
Exercicio 2: Operaçoes $_GET
Autor: Lucas Assagra
Data: 29/03/2022
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 2</title>
</head>
<body>
    
    <h1>Linguagem de Programação</h1>

    <?php
    
        $a = $_GET["num1"];
        $b = $_GET["num2"];

        echo $a + $b . "<br>";
        echo $a - $b . "<br>";
        echo $a * $b . "<br>";
        echo $a / $b . "<br>";

        echo '<br><br>Lucas Assagra - 8128968';

    ?>

</body>
</html>