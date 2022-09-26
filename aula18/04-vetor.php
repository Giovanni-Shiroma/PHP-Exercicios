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
        // temos um vetor dentro de vetores
          $m = array(
            array(4,5),
            array(3,9),
            array(1,1),
          );
        //   aqui o $m na posição 0/1 ou seja o 4 vira o $m na posição 2/0 ou seja
        // o 1
          $m[0][1] = $m [2][0];
          print_r($m);
        ?>
    </pre>
 </body>
 </html>