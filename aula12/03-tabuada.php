<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $multiplicador = 1;
    $num = isset($_GET["num"])?$_GET["num"]:1;
    echo "<h1>Tabuada do $num </h1>";
    do {
        $calc = $num * $multiplicador;
        echo "$num X $multiplicador = $calc <br>";
        $multiplicador++;
    } while ($multiplicador <= 10)
    ?>
    <br>
    <a href="javascript:history.go(-1)">
        voltar
    </a>
</body>
</html>