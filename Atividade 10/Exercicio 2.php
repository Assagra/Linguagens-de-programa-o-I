<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 2</title>
</head>
<body>
    
    <h3>Recursividade - Soma de um array</h3>

    <?php
    
        $lista = array();

        for($i = 0; $i<5; $i++){

            $lista[$i] = $_GET["L$i"];
        }

        $n = 5;

        echo soma($lista, $n);

        function soma($lista, $n){

            if($n == 1){
                
                return $lista[0];
            }else{

                return soma($lista, $n-1) + $lista[$n - 1];
            }
        }

    ?>

</body>
</html>