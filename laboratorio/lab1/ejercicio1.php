<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <div class="contenido">
        <div class="cabeza">
            <img src="usfx.png" alt="">
            <h1>UNIVERSIDAD DE SAN FRANCISCO XAVIER</h1>
            <h2>FACULTAD DE TECNOLOGIA<span style="color: red;margin-left:100px;font-size:10px;">SUCR<span style="color:yellow;font-size:10px;">E-BOL<span
                            style="color:green;font-size:10px;">IVIA</span></span></span></h2>
            <p style="text-align:left;">Carrera Ing. de Sistemas - Ing. Ciencias de la Computación<span style="margin-left:400px">Semestre 2-2022</span></p>
        </div>
        <div class="cuerpo">
            <div class="caja">
                <a href="informacion.html">Informacion</a>
                <a href="horarios.html">Horarios</a>
            </div>
            <div class="cajac">
                &nbsp;
            </div>
            <div class="caja">
                <a href="docente.html">docente</a>
                <a href="alumnos.html">alumnos</a>
            </div>
        </div>
        <div class="pie">
            <p>Alumno : Wilson Wilder Mendoza Copa</p>
            <p>CU: 111-98</p>
            <p>N° de visitas al sitio: <span>
                <?php
if(isset($_COOKIE["contador"])){
$aux = $_COOKIE["contador"]+1;
echo $aux;
setcookie("contador",$aux,time()+3);
}else{
    setcookie("contador",1,time()+5);
    echo "1";
}

?>
            </span></p>
        </div>
    </div>
</body>

</html>