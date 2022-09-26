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
            $v = array( 
                "nome" => "ana",
                "idade" => 23,
                "peso" => 65.6,
            );
            $v["fuma"] = true;
            foreach ($v as $campo => $conteudo) {
                echo "O campo $campo possui o conteudo $conteudo <br>";
            }
        ?>
    </pre>
 </body>
 </html>