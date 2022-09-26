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
        $site = "Curso em Video";
        $sub = substr($site,-8);
        //se passarmos apenas um parametro ele vai escrever do valor em diante
        //se colocra dois vai cortar entre o primeiro e o segundo valor
        //se for negativo vai pegar de trás para frente
        echo "$sub ";
        // Vai cortar a string nas posições passadas no parametro
        $nome = "Guanaraba";
        $novo = str_pad($nome,30, " ", STR_PAD_LEFT);
        print("<br>Meu professor é $novo.");
        // Serve para deixar algo com certa quantidade de caracteres

        $txt = str_repeat($nome,5);
        print("<br>O texto gerado foi $txt <br>");
        print(str_repeat("-",20));
        // repete algo com certa quantitade de caracteres

    ?>
</body>
</html>