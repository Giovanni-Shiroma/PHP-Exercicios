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
            $n = array( 
                0=>5,
                1=>9,
                2=>5,
                3=>7,
            );
            // o unset destroi um campo de um vetor
            unset($n[1]);
            print_r($n);
        ?>
    </pre>
 </body>
 </html>