<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <?php 
        $v = 1;
        while ($v <= 5) {
            $vContador = isset($_GET["v$v"])?$_GET["v$v"]:0;
            echo "Valor $v: $vContador <br>"; 
            $v++;
        }
        ?>
        <a href="javascript:history.go(-1)">
            Voltar
        </a>
    </form>
</body>
</html>