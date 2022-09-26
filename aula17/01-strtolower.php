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
        $nome = "Giovanni Shiroma";
        $nome2 = strtolower($nome);
        echo "Seu nome é $nome2";
        // Deixa todas as letras em caixa baixa
        $nome3 = strtoupper($nome);
        echo "<br>Seu nome é $nome3"
        // Deixa todas as letras em caixa alta
    ?>
</body>
</html>