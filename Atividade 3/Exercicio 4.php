<!--
Exercicio 4: Calculo de notas para troco 
Autor: Lucas Assagra
Data: 02/04/2022
-->


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 4</title>
</head>
<body>

    <h1>Troco</h1>

    <?php
    
        $total = 576;
        
        for($cem = 0; $total >= 100; $cem++){

            $total = $total - 100;
        }

        for($cin = 0; $total >= 50; $cin++){

            $total = $total - 50;
        }

        for($vin = 0; $total >= 20; $vin++){

            $total = $total - 20;
        }

        for($dez = 0; $total >= 10; $dez++){

            $total = $total - 10;
        }

        for($cinc = 0; $total >= 5; $cinc++){

            $total = $total - 5;
        }

        for($do = 0; $total >= 2; $do++){

            $total = $total - 2; 
        }

        for($um = 0; $total >= 1; $um++){

            $total = $total - 1; 
        }

        echo "o troco restante é de $total reais <br><br>";

        echo "<h1>Notas usadas para o troco</h1>";

        echo "Notas de R$100: $cem <br><br>";
        echo "Notas de R$50: $cin <br><br>";
        echo "Notas de R$20: $vin <br><br>";
        echo "Notas de R$10: $dez <br><br>";
        echo "Notas de R$5: $cinc <br><br>";
        echo "Notas de R$2: $do <br><br>";
        echo "Notas de R$1: $um <br><br>";

        echo 'Lucas Assagra - 8128968';

    ?>
    
</body>
</html>