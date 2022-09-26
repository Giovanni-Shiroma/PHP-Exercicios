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
        $p = "leite";
        $pr = 4.5;
        // echo "O $p está custando R$" . number_format($pr,2);
        printf("O %s custa R$ %.2f", $p, $pr);
        // $s substitui o $p e significa que é uma string
        // $.2f substitui o $pr e significa que é do tipo float e vai pegar 2 casas decimais
    ?>
</body>
</html>