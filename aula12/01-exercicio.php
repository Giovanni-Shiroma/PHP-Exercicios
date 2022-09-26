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
        $c = 0;
        do {
            echo "$c ";
            $c++;
        } while ($c <= 20);
        echo "<br>";
        $d = 20;
        do {
            echo "$d ";
            $d--;
        } while ($d >= 0);
    ?>
</body>
</html>