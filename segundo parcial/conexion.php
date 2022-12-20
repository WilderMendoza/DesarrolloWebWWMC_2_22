<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "bd_biblioteca";
$conectar = mysqli_connect($host,$user,$pass,$bd);
if($conectar){
}else{
    echo "no conectado";
}