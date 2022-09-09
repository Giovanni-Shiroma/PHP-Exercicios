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
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos ";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
        echo "e dessa forma seu voto é $tipo"
        ?>
    </div>
</body>
</html>

<!-- 
    OPERADORES LÓGICOS
        AND = && - Se um dos valores for falso todos são falso, entao para passar é 
        necessário ser verdadeiro 
        OR = || - Se um ou todos os valores for verdadeiro já está bom
        XOR = se um dos valores for verdadeiro já está bom mas se os dois forem verdadeiros
        ele não passa 
        ! = Não - não é não
 -->