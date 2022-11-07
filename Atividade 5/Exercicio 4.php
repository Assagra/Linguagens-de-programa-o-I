<!--
Exercicio 4: Peso ideal 
Autor: Lucas Assagra
Data: 29/03/2022
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 4</title>
</head>
<body>
    
    <h1>Peso ideal</h1>

    <p>incira o seu sexo F/M e sua altura</p>
    <?php
    
        $sexo = $_GET["sexo"];
        $altura = $_GET["altura"];

        if($sexo == "M"){

            $peso = (72.7 * $altura) - 58.2;    
            echo "O peso ideal para um homem com $altura de altura
            é de $peso quilos";
        
        }else{

            $peso = (62.1 * $altura) - 44.7;
            echo "o peso idseal para uma mulher com $altura de altura
            é de $peso quilos";
        }

        echo '<br><br>Lucas Assagra - 8128968';
    
    ?>

</body>
</html>