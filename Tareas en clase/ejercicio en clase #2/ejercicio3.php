<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sumatoria de un numero</h1>
    <hr>
    <?php

$numero = 3;
$sum = 0;
$cont = 1;
while($cont <= $numero){
$sum = $sum + $cont;
$cont++;
}
echo "la sumatoria del numero ".$numero." es ".$sum;
    ?>
</body>
</html>