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
        function soma() {
            $p = func_get_args(); // Cria um vetor p para cada valor da soma() ex $p[1], $p[2]...
            $tot = func_num_args(); // Recebe o numero de argumentos que existem na soma() ou seja 5
            $s = 0;
            for ($i=0; $i<$tot; $i++) {
                $s = $s +$p[$i]; //ou $s +=
            }
            return $s;
        }
        $res = soma(3,4,8,1,2,12);
        echo "A soma dos valorres é $res";
    ?>
</body>
</html>