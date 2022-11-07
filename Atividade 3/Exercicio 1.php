<!--
Exercicio 1: Area do Circulo
Autor: Lucas Assagra
Data: 02/04/2022
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 1</title>
</head>
<body>
    
    <h1>Calculo da Área de um Circulo</h1>

    <?php
    
        $area = 0.0;
        $raio = 2.0;

        $area = 3.14159 * ($raio * $raio);

        echo number_format($area,4);

        echo '<br><br>Lucas Assagra - 8128968';
    
    ?>

</body>
</html>