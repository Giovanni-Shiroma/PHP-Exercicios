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
        $nome = "giovanNi shIRoma";
        $nome2 = ucfirst(strtolower($nome));
        echo "Seu nome é $nome2";
        // Deixa apenas a primeira letra em caixa alta

        $nome3 = ucwords(strtolower($nome));
        echo "<br>Seu nome é $nome3";
        // Deixa a primeira letra de cada palavra em caixa alta

        $nome4 = strrev(strtolower($nome));
        echo "<br>Seu nome ao contrario é  $nome4";

    ?>
</body>
</html>