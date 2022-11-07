<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 4</title>
</head>
<body>

    <p>Escolha um curso</p>

    <form name="informaçoes" method="POST" action="Exercicio 7.php">

        <select name="curso">

            <option value="ADS" selected>
                <span>Tecnologia em Análise e Desenvolvimento de Sistema</span>
            </option>

            <option value="Automacao">
                <span>Tecnologia em Automação Industrial</span>
            </option>
            
            <option value="Matematica">
                <span>Licenciatura em</span>
            </option>

            <option value="TMSI">
                <span>Técnico de Manutenção e Suporte em Informatica</span>
            </option>

            <option value="TAI">
                <span>Tecnico em Manutenção Industrial</span>
            </option>
        </select> <br>

        <input name="enviar" type="submit" value="Enviar">

    </form>

</body>
</html>