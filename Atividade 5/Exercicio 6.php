<!--
Exercicio 6: Classificação 
Autor: Lucas Assagra
Data: 29/03/2022
-->


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 6</title>
</head>
<body>
    
    <h1>classificação Do Campeonato</h1>

    <p>Entre com a sua idade</p>

    <?php
    
        $idade = $_GET["idade"];

        if($idade < 5 ){

            echo "Idade insuficiente";

        }elseif(($idade >= 5) && ($idade <= 7)){
            
            echo "Classificação - Infantil A";

        }elseif(($idade >= 8) && ($idade <= 10)){

            echo "Classificação - Infantil B";

        }elseif(($idade >= 11) && ($idade <= 13)){

            echo "Classificação - Juvenil A";

        }elseif(($idade >= 14) && ($idade <= 17)){

            echo "Classificação - Juvenil B";

        }else{

            echo "Classificação - Adulto";
        }

        echo '<br><br>Lucas Assagra - 8128968';

    ?>

</body>
</html>