<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O a raiz do valor é " . number_format($rq,2);
        ?>
        <br>
        <a href="01-exercicio.html">Voltar</a>
    </div>
</body>

<!-- 
$_get pega o valor de v pois a action é o mesmo nome da action do ex01
 -->