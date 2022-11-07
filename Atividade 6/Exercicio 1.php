<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 1</title>
</head>
<body>

    <form action="receber_dados.php" method="POST">
        
        <span>Nome: </span><input type="text" name="nome" />
        <span>Idade: </span><input type="number" name="idade" />

        <input type="submit" value="Enviar" name="enviar" />
        <input type="reset" value="Limpar" name="limpar" />
    </form>

</body>
</html>