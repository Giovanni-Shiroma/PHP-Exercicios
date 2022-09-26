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
        $t = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $r = wordwrap($t, 5, "<br>\n", false);
        echo $r;
        // wordwrap serve para quebrar linhas de textos grandes, no primeiro parametro vc coloca
        // a var com o txt, no segundo a quantidade de caracteres por linha e no terceiro a forma
        // de quebrar a linha, ou seja, com o br e o  \n é para quebrar a linha no codigo fonte tb
        // O false serve para não quebrar palavras no meio se colocar true ele vai cortar palavras que
        // possuem mais letras do que o segundo parametro
    ?>    
</body>
</html>