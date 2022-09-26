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
        $letra = chr(99);
        echo "A letra de codigo 99 é $letra <br>";
        // serve para passar o codigo de uma letra e transformar ele em letra
        $letra = "c";
        $cod = ord($letra);
        echo "A letra $letra tem código $cod"
    ?>
</body>
</html>