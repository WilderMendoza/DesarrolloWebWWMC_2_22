<?php
include 'conexion.php';
$imagen = $_POST["imagen"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$idEditorial = $_POST["idEditorial"];
$anio = $_POST["anio"];
$idUsuario = $_POST["idCarrera"];
$idCarrera = $_POST["idCarrera"];


$insertar = "INSERT INTO libros (id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera)
 VALUES (NULL, '$imagen', '$titulo', '$autor', '$idEditorial', '$anio', '$idUsuario', '$idCarrera');";
$query = mysqli_query($conectar,$insertar);
if($query){
    echo "<br>"."Insertado";
    session_start();
    $_SESSION["insertado"]=1;
}else{
    echo "<br>"."nada men";
}
$conectar->close();
?>
<meta http-equiv="refresh" content="1; url=parcial2.php">
