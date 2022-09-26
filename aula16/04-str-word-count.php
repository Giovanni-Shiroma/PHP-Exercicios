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
    // str_word_count serve para contar palavras
        $frase = "Eu vou estudar PHP agora";
        $count = str_word_count($frase, 0); // se colocar de parametro o numero 1 ele retorna um vetor
        // e se colocar 2 ele retorna um vetor com a posição do começo da palavra
        echo "$count"
    ?>
</body>
</html>