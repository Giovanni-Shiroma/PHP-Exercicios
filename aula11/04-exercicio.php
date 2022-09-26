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
        $start = isset($_GET['start'])?$_GET['start']:0;
        $end = isset($_GET['end'])?$_GET['end']:0;
        $increment = isset($_GET['increment'])?$_GET['increment']:1;
        if ($start <= $end ) {
            while ($start <= $end ) {
                echo "$start ";
                $calc = ($start + $increment);
                $start = $calc;
            }
        } else if ($end <= $start) {
            while ($end <= $start) {
                echo "$start ";
                $calcE = ($start - $increment);
                $start = $calcE;
            }
        }
    ?>
     <a href="javascript:history.go(-1)">
        Voltar
    </a>
</body>
</html>