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
        $preco = $_GET["p"];
        echo "O preço recebido é R$ $preco";
        $preco += ($preco*10/100); 
        echo "<br> O novo preço com o aumento de 10% é " . number_format($preco, 2, ',', '.');
        $preco -= ($preco*10/100); 
        echo "<br> O novo preço com o desconto de 10% é " . number_format($preco, 2, ',', '.');
        ?>
    </div>
</body>
</html>