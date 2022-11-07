<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 2</title>
</head>
<body>
    
    <?php
    
        $x = 8;
        $y = 2;

        echo F();

        function F(){

            global $x;

            $y = 15;
            return ($x + $y);
        }

    ?>

</body>
</html>