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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos<br>";
        if($i >= 18) {
            $v = "Já pode votar✔";
            $d = "Já pode dirigir✔";
        } 
        else {
            $v = "Ainda não pode votarX";
            $d = "Ainda não pode dirigirX";
        }
        echo "$v <br> $d"
    ?>
</body>
</html>