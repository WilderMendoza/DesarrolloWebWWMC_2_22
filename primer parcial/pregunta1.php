<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="contenido">
        <div class="cabeza">
            <div class="imagen1">
                <img class="imagen" src="images/usfx.png">
            </div>
            <div class="imagen2">
                <h1>UNIVERSIDAD DE SAN FRANCISCO XAVIER</h1>
                <div class="bo">
                    <h2>Facultad de Tecnologia</h2>
                    <p style="color: red;font-size: 12px;margin-top: 10px;margin-left: 30px;">SUCR</p>
                    <p style="color: yellow;font-size: 12px;margin-top: 10px;">E-BOL</p>
                    <p style="color: green;font-size: 12px;margin-top: 10px;">IVIA</p>
                </div>
                <p>Carrera Ing de SIstemas, Ciencias de la Computacion</p>
                <p>Semestre 2-2022</p>
            </div>
            <div class="imagen3">
                <img class="imagen" src="images/tecnologia.png" alt="">
            </div>
        </div>
        <div class="cuerpo">
            <div class="bloque1">
                <div class="caja">A</div>
                <div class="caja1">&nbsp;</div>
                <div class="caja">B</div>
                <div class="caja1">&nbsp;</div>
                <div class="caja">C</div>
                <div class="caja1">&nbsp;</div>
                <div class="caja">D</div>
                <div class="caja1">&nbsp;</div>
                <div class="caja">E</div>
                <div class="caja1">&nbsp;</div>
            </div>
            <div class="bloque2">

                <div class="bloque22">
                    <div class="bloque221">
                    <a href="pregunta1.php">INICIO</a>
                    <a href="Pregunta2.php">Pregunta2</a>
                    <a href="Pregunta3.html">Pregunta3</a>
                    <a href="Pregunta4.html">Pregunta4</a>
                </div>
                <div>&nbsp;</div>
                </div>
                <div class="bloque23">
                    <p>Bienvenido al</p>

                </div>
                <div class="bloque24">
                    <p>Alumno:</p>
                    <p>Wilson Wilder Mendoza Copa</p>
                    <hr>
                    <p>Carrera:</p>
                    <p>Ing: Ciencias de la Computacion</p>
                    <hr>
                    <p>Imagen:</p>
                    <img src="images/estudiante.png" width="120px" alt="">
                </div>
            </div>
        </div>
        <div class="pie">
            <div class="pie1">
                <p>Usted ingreso a la pagina <span> <?php 
                if(isset($_COOKIE["valor"])){
                    $aux = $_COOKIE["valor"]+1;
                    echo $aux;
                    setcookie("valor",$aux,time()+60);
                }else{
                    setcookie("valor",1,time()+60);
                    echo "1";
                }
                
                ?> </span> veces</p>
            </div>
            <div class="pie2">
&nbsp;
            </div>

        </div>
</body>

</html>