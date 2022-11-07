<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 5</title>
</head>
<body>
    
    <?php
    
       $s = 0;
       for ($i = 0; $i <= 10; $i++){

            if($i % 2 == 0) continue;
            $s = $s + $i;
       }

       echo $s;

    ?>

</body>
</html>