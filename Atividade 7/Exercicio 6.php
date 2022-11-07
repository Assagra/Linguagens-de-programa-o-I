<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 6</title>
</head>
<body>
    
    <?php
    
      $s = 0;

      for($i = 0; $i<=10; $i++){

            if($s == 10) break;

            $s = $s + $i;
      }

      echo $s;

    ?>

</body>
</html>