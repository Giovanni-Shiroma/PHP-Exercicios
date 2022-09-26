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
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $calc = ($nota1 + $nota2)/2;
        echo "A média entre $nota1 e $nota2 é $calc <br>";
        if($calc < 5) {
            $mediaFinal = "REPROVADO";
        } else if($calc >= 5 && $calc <= 7) {
            $mediaFinal = "RECUPERAÇÃO";
        } else {
            $mediaFinal = "APROVADO";
        }
        echo "A situação atual do aluno é $mediaFinal"
    ?>
</body>
</html>