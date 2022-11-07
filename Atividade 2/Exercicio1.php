<!-----------------------------------------------------------------------------------
Exercicio 1: Uso da função gettype()
Autor: Lucas Assagra
Data: 15/03/2022
------------------------------------------------------------------------------------>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Uso da função gettype()</title>
</head>
<body>
    
    <?php
    
        $i = 10;
        $nome = "lucas";
        $falso = FALSE;
        $valor = 100.50;

        echo '<br>$i é do tipo: '. gettype($i);
        echo '<br>$nome é do tipo: '. gettype($nome);
        echo '<br>$valor é do tipo: '. gettype($valor);

        echo '<p> 8128968 - Lucas Assagra </p>';
    ?>

</body>
</html>