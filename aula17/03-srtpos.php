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
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase <br> A string foi encontrada na posição $pos ";
        // pega a posição da string 

        $ipos = stripos($frase, "php");
        echo "A string foi encontrada na posição $ipos ";
        // a mesma coisa da strpos mas ignora se o texto está em caixa alta ou baixa
        
        $cont = substr_count($frase, "PHP");
        print("<br> PHP encontrado $cont vezes");
        // conta a quantidade de vezes que certa palavra foi encontrada na frase
    ?>
</body>
</html>