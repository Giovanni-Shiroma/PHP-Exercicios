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
        include "funcoes.php";
        echo "<h1>Testando novas funcoes</h1>";
        ola();
        mostrarValor(4);
        echo "<h2>Finalizando funcoes...</h2>"
    ?>
</body>
</html>

<!-- 
Include inclui algo no seu programa e mesmo se ele não existir o programa 
continua rodando
Required tambem inclui algo no seu programa porem se ele não existir o programa
para tudo
Para testar isso mude o nome de funcoes.php para algo que não exista e mude
Include para required
include_once/required_once - faz o include rodar apenas uma vez mesmo que o tenha 
mais de uma vez no programa


 -->