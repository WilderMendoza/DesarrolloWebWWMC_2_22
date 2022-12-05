<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

$fila = $_POST["fila"]+1;
$columna = $_POST["columna"]+1;
$f = $_POST["fila"]+1;
$c = $_POST["columna"];
$cf = $_POST["fila"];
$cc = $_POST["columna"];
echo "<div>";
echo "<table>";
for($i=0; $i<$fila; $i++){
    echo"<tr>";
    $f--;
    $aux = $c;
    for($j=0; $j<$columna; $j++){
        echo "<th>";
        if($j==$columna-1){
            echo "<div class='fondo'>";
            echo $cf;
            $cf--;
            echo "</div>";
        }else{
            if($i==$fila-1){
                echo "<div class='fondo'>";
                echo $cc;
                $cc--;
                echo "</div>";
            }else{
        echo $f*$aux; 
        echo "</th>";
        $aux--;}
    }
}
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>    
</body>
</html>
