<!-----------------------------------------------------------------------------------
Exercicio 2: Uso da função gettype()
Autor: Lucas Assagra
Data: 15/03/2022
------------------------------------------------------------------------------------>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Uso da Função gettype()</title>
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

        if(is_integer($i)){
            echo '<br> $i é inteiro...';
        }

        if(is_string($nome)){
            echo '<br> $falso é boolean...';
        }

        if(is_float($valor)){
            echo '<br> $valor é float...';
        }

        if( is_numeric($i) and is_numeric($valor)){
            echo '<br> &i e &valor são valores numéricos....';
        }

        echo '<p>8128968 - Lucas Assagra</p>'
    
    ?>

</body>
</html>