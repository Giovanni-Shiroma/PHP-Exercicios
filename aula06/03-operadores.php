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
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variavel A vale $a" . "<br> A variavel B vale $b";
        $a = 3;
        $b = &$a; // B está referenciada a $a ou seja se b somar 5 a tambem ira somar
        $b += 5;
        echo "<br> A variavel A vale $a" . "<br> A variavel B vale $b";
        ?>
    </div>
</body>
</html>