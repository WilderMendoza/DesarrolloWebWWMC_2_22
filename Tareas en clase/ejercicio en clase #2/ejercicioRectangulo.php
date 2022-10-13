<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rectangulo con el caracter "*"</h1>
    <hr>
    <?php

$alto = 20;
$largo = $alto*3;
for($i=1; $i<=$alto; $i++){
    for($j=1; $j<=$largo; $j++){
        if($i<=2){
            echo "*";
        }else{
           if($i>$alto-2){
            echo "*";
           }else{
            if($i>2 && $j<=2){
                echo "*";
            }else{
                if($i>2 && $j<=$largo-2){
                    echo "&nbsp;&nbsp;";
                }else{
                echo "*";
            }
           }
        }
    }
}
    echo "<br>";
}
    ?>
</body>
</html>