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
        $nota1 = $_GET["n2"];
        $nota2 = $_GET["n1"];
        $m = ($nota1 + $nota2)/2;
        echo "A media entre a $nota1 e $nota2 é $m <br>";
        // $sit = ($m>6)?"PASSOU":"REPROVOU";
        echo "O aluno ". (($m>6)?"PASSOU":"REPROVOU")
        ?>
    </div>
</body>
</html>

<!-- 
    OPERADORES LÓGICOS
        AND = && - Se um dos valores for falso todos são falso, entao para passar é 
        necessário ser verdadeiro 
        OR = || - Se um ou todos os valores for verdadeiro já está bom
        XOR = se um dos valores for verdadeiro já está bom mas se os dois forem verdadeiros
        ele não passa 
        ! = Não - não é não
 -->