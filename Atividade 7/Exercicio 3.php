<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 3</title>
</head>
<body>
    
    <?php
    
        $i = 1;

        while( $i < 5){

            $t = F();
            $i++;
            echo "<br>".$t;

        }

        function F(){

            static $x=1;

            $x = $x + 2;
            return $x;

        }

    ?>

</body>
</html>