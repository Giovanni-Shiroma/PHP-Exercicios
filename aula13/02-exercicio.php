<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="02-tabuada.php" method="get">
        <select name="num" id="num">
            <?php 
                for ($c = 1;$c<=10;$c++) { 
                    echo "<option value='$c'>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>