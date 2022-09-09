<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o próximo é " . ++$atual . "e o anterior é " . ($atual - 2);
        ?>
    </div>
</body>
</html>