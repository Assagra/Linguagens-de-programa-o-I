<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exercicio 4</title>


    <?php
    
    switch ($_GET["cor"]){
        case "R": $background = "rgb(255,0,0)"; break;
        case "G": $background = "rgb(0,255,0)"; break;
        case "B": $background = "rgb(0,0,255)"; break;
        default: $background = "rgb(255,255,255)"; break;
    }
    
    ?>

</head>
<body style="background: <?php echo $background;?>;">

    <?php echo "<h1>Olá ".$_GET["nome"]."</h1>"; ?>


</body>
</html>