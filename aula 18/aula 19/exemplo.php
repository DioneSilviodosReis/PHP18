<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            $m = array ("A", "J", "M", "X", "K");
            print_r($m);
            array_unshift($m, "W");
            print_r($m);
            
        ?>
    </pre>
    
</body>
</html>