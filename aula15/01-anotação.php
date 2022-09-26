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
// Com o & a var x passa a ser uma referencia portanto $a vai ter o mesmo valor
// De x mesmo estando fora da function;
        function teste(&$x) {
            $x += 2;
            echo $x;
        }
        $a = 3;
        teste($a);
        echo " $a";
    ?>
</body>
</html>