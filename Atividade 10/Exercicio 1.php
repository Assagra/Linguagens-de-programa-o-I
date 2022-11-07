<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 1</title>
</head>
<body>
    
    <h3> Recursividade - Fatorial </h3>
    
    <?php
    
        $n = $_GET['n'];

        echo fatorial($n);

        function fatorial($n){

            if($n == 0){

                return 1;

            }else{

                return $n * fatorial($n - 1);

            }

        }
    
    ?>

</body>
</html>