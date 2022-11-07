<!-----------------------------------------------------------------------------------
Exercicio 4: Cálculo de combustivel da Viagem do Pedro
Autor: Lucas Assagra
Data: 15/03/2022
------------------------------------------------------------------------------------>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Cálculo de Combustivel da Viagem do Pedro</title>
</head>
<body>
    
    <h1>Cálculo de combustível da Viagem do Pedro</h1>

    <?php
        
        $consumodeCombustivel = 12.0;
        $velocidadeMedia = 85.0;
        $tempoViagem = 10.0;
        $custoLitroGasolina = 4.0;

        $distanciaPercorrida = $velocidadeMedia * $tempoViagem;
        $litrosGastos = $distanciaPercorrida / $consumodeCombustivel;
        $custoViagem = $litrosGastos * $custoLitroGasolina;

        printf('Consumo de combustivel do veiculo: %s Km/l', number_format($consumodeCombustivel,1));
        printf('<br>Velocidade média da viagem: %s Km/h', number_format($velocidadeMedia,1));
        printf('<br>tempo da viagem: %s horas', number_format($tempoViagem,1));
        printf('<br>Custo do combustivel: R$ %s /litro', number_format($custoLitroGasolina,2));

        printf('<br><hr><hr>');
        printf('<br>Custo do combustivel na viagem = R$ %s', number_format($custoViagem,2));

        echo '<p>8128968 - Lucas Assagra</p>';
    
    ?>

</body>
</html>