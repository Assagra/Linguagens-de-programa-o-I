<!--
Exercicio 3: Distancia entre dois pontos
Autor: Lucas Assagra
Data: 02/04/2022
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 3</title>
</head>
<body>

    <h1>Distancia entre dois pontos</h1>

    <?php
    
        $x1 = 2;
        $x2 = 5;

        $y1 = 2;
        $y2 = 5;

        $distan = 0;

        $distan = pow($x2 - $x1, 2) + pow($y2 - $y1, 2);
        
        $distan = sqrt($distan);

        echo number_format($distan,2);

        echo '<br><br>Lucas Assagra - 8128968';

    ?>
    
</body>
</html>