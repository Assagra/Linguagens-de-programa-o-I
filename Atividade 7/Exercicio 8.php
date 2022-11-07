<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 8</title>
</head>
<body>
    
    <?php

        $p1 = $_GET["p1"];
        $p2 = $_GET["p2"];
        $ativit = $_GET["atividade"];

        if(($p1 + $p2 + $ativit) >= 12){

            echo "APROVADO";

        }else{

            echo "REPROVADO";
            
        }


    ?>

</body>
</html>