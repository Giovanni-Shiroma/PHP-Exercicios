<!-- 
    Vetor - cria varios valores dentro de uma variavel
    array é um vetor
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <pre>
        <?php 
            $n = array(4,3,2,5);
            // Se adicionarmos o [] na var e colocarmos um novo valor ela add esse novo
            // valor depois do ultimo que no caso é o 5
            $n[] = 7;
            print_r($n);


            // com o range ele começa com o primeiro valor até o segundo valor e vai
            // pulando de acordo com o terceiro parametro
            $c = range(5,20,5);
            print_r($c);
            // para cada elemento do vetor$c tratado como $valor
            // escreva o $valor
            foreach ($c as $valor) {
                echo "$valor ";
            }
        ?>
    </pre>
 </body>
 </html>