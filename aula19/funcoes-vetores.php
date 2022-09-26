<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- O pre serve para pre formatar -->
    <pre>
    <?php 
        $v = array(
            "A", "J", "X", "K"
        );
        // count conta os elementos dentro de um vetor
        echo "O vetor tem " . count($v) . " elementos<br>" ;
        print_r($v);
        // var dump mostra o tipo do elemento
        var_dump($v);
    ?>
    </pre>
</body>
</html>