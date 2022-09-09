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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Nome não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sexo não informado]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos."
        ?>
        <br>
        <a href="02-exercicio.html">Voltar</a>
    </div>
</body>

<!-- 
$_get pega o valor de v pois a action é o mesmo nome da action do ex01
 -->