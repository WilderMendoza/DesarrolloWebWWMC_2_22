<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <script src="ajax.js"></script>
</head>
<?php

session_start();
if(isset($_SESSION["cont"])){
    if($_SESSION["cont"] % 2 == 1){
        $nombre = "Wilson Wilder Mendoza Copa";
        $cu = "111 - 98";
    }else{
        $nombre=" ";
        $cu = " ";
    }    
}else{
    $_SESSION["cont"]=0;
}

$_SESSION["cont"]++;
?>

<body>
    <div class="todo">
        <div class="titulo">
            <div id="cab1">
                <p>Estudiante:<?php echo " ".$nombre; ?></p>
            </div>
            <div id="cab1">
                <p>C:U:<?php echo " ".$cu; ?></p>
            </div>
        </div>
        <div class="menu">
            <div class="cuer1">
                <div class="caja1">
                    <a href="parcial2.php"><p>Pregunta 1</p></a>
                </div>
                <div class="caja2">
                   <a href="pregunta2.php"><p>Pregunta 2</p></a>
                </div>
                <div class="caja1">
                    <a href="pregunta3.html"><p>Pregunta 3</p></a>
                </div>
                <div class="caja2">
                    <a href="pregunta4.html"><p>Pregunta 4</p></a>
                </div>
                <div class="caja1">
                    <a href="pregunta5.html"><p>Pregunta 5</p></a>
                </div>
            </div>
            <div class="cuer2">
                <div class="contenido">&nbsp;</div>
                <div class="resultado">&nbsp;</div>
            </div>
          
        </div>
        <div class="mensaje">
            <?php

if(isset($_SESSION["insertado"])){
    echo "<p>Libro Insertado</p>";
}else{
echo "<p>2do Examen Parcial SIS - 256</p>";
}
?> 
        </div>
    </div>
</body>

</html>