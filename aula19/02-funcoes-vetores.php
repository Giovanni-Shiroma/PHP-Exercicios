<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- O pre serve para pre formatar -->
    <pre>
    <?php 
        $v = array(
            "K", "J", "X", "A",
        );
        print_r($v);
        // coloca um elemento no final do vetor
        $v[] = "V";
        print_r($v);
        // array_push oloca um elemento no final do vetor
        array_push($v, 7);
        print_r($v);
        echo"array_push <br>";
        // array_pop elimina um elemento do vetor
        array_pop($v);
        print_r($v);
        echo"array_pop <br>";
        // inclui um elemento no começo do vetor
        array_unshift($v, 7);
        print_r($v);
        echo"array_unshift <br>";
        // tira o primeiro elemento do vetor
        array_shift($v);
        print_r($v);
        echo"sort <br>";
        // sort coloca o vetor em ordem(seja number ou string)
        sort($v);
        print_r($v);
        echo"rsort <br>";
        // reverte o sort    
        rsort($v);
        print_r($v);
        echo"asort <br>";
        // muda tanto os elementos quando os indices(id)
        asort($v);
        print_r($v);
        echo"arsort <br>";
        // muda tanto os elementos quando os indices(id) de forma reversa
        arsort($v);
        print_r($v);
        echo"krsort <br>";
        // krsort() deixa os indices em ordem de forma reversa
        krsort($v);
        echo"krsort <br>";
        // ksort() deixa os indices em ordem
        ksort($v);
    ?>
    </pre>
</body>
</html>