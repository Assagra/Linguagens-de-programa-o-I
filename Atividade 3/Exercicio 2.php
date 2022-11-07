<!--
Exercicio 2: Media do estudante
Autor: Lucas Assagra
Data: 02/04/2022
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 2</title>
</head>
<body>

    <h1>Media do Estudante</h1>

    <?php
    
        $media = 0.0;
        $p1 = 5.0;
        $p2 = 7.1;

        $media = ($p1 * 3.5 + $p2 * 7.5) / (3.5 + 7.5);

        echo number_format($media,5);

        echo '<br><br>Lucas Assagra - 8128968';

    ?>
    
</body>
</html>