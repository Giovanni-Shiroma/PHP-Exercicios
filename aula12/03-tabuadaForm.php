<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="03-tabuada.php" method="get">
        <label for="num">Numero:</label>
        <select name="num" id="num">
            <?php 
                $num = 1;
                do {
                    echo "<option value='$num'> $num </option>";
                    $num++;
                }  while ($num <= 10)
            ?>  
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>