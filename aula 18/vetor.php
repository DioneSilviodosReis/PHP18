<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor</title>
</head>
<body>
    <?php
        $v = array("nome"=> "Ana", "idade"=> 23, "peso"=> 78.5);
        
        foreach($v as $k =>$c){
            echo "O campo $k possui o conteudo $c <br>";
        }
    ?>  
    
</body>
</html>