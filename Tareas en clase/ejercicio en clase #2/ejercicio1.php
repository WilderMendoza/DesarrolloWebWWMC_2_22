<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Numero mayor</h1>
<hr>
<body>
    <?php
    $a = 1;
    $b = 2;
    $c = 3;
    
    if($a > $b && $a>$c){
        echo("el numero mayor es: ".$a);
    }else{
        if($b>$a && $b>$c){
            echo("el numero mayor es: ".$b);
        }else{
            echo("el numero mayor es: ".$c);
        }

    }

    ?>
</body>
</html>