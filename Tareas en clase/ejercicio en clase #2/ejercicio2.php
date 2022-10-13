<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fibonacci</h1>
    <hr>

    <?php
    
     $n = 10;
     $f1 = 0;
     $f2 = 1;

     echo($f1." ".$f2." ");

     for($i=0; $i<=7; $i++){
        $aux = $f1+$f2;
        echo($aux." ");
        $f1 = $f2;
        $f2 = $aux;
     }

    ?>
</body>
</html>