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
    // começamos pegando o valor do numero do form e criando a variavel contador para contar
    // a quantidade de multiplos o valor n possue
        $n = isset($_GET["num"])?$_GET["num"]:1;
        $contador = 0;
        echo "Analisando o numero $n... <br>";
        echo "Valores multiplos ";
        // criamos a variavel c para somar 1 a até chegar no valor n e tambem criamos a var r para 
        // fazer a divisão entre n e c, já no if perguntamos se o valor de r é inteiro, se for ele 
        // printa o valor de r e soma um no contador
        for ($c=1; $c<=$n; $c++) {
            $r = $n/$c;
            if (is_int($r)) {
                echo "$r ";
                $contador +=1;
            }
        }
        // aqui o valor do contador sera a quantidade de numeros inteiros que são divisiveis pela 
        // var n e se p valor do contador for menor que 2 ele é primo se for maior não é primo
        
        echo "<br>";
        echo "Total de multiplos $contador <br>";
        if ($contador < 2) {
            echo "O numero $n é primo ";
        } else {
            echo "O  numero $n não é primo";
        }
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>