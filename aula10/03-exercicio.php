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
      $estados = isset($_GET["estado"])?$_GET["estado"]:0;
      echo "<strong>$estados</strong> ";
      switch ($estados) {
        case "AM":
        case "RR":
        case "AP":
        case "PA":
        case "TO":
        case "RO":
        case "AC":
            echo "Região Norte";
            break;
        case "MA":
        case "PI":
        case "CE":
        case "RN":
        case "PE":
        case "PB":   
        case "SE": 
        case "AL":
        case "BA":
            echo "Região Nordeste";
            break;
        case "MT":
        case "MS":
        case "GO":
          echo "Região Centro-Oeste";
          break;
        case "SP":
        case "RJ":
        case "ES":
        case "MG":
          echo "Região Sudeste";
          break;
        case "PR";
        case "RS";
        case "SC";
          echo "Região Sul";
          break;
        default: 
            echo "lugar invalido";
      }
    ?>
    <br>
    <br>
    <a href="javascript:history.go(-1)">
    Voltar
    </a>
</body>
</html>