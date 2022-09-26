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
    // Colocar & antes do $x
        function teste($x) {
            $x += 2;
            echo "O valor de X é $x";
        }

        $a = 3;
        teste($a);
        echo "<br> O valor de A é $a"
    ?>
</body>
</html>

<!-- 
        Conceito de reuso de funções
        Criar uma pasta funcoes.php para armazenar funções que poderam ser utilizadas
        em varias paginas e para não ficar dando control c control v nas funçoes 
        vc faz o include
 -->