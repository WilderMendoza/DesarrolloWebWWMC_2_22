<?php

session_start();

if($_GET["op"] == 1){
    $res = $_SESSION["n1"]+$_SESSION["n2"];
}else{
    if($_GET["op"] == 2){
        $res = $_SESSION["n1"] - $_SESSION["n2"];
    }
}
echo "Resultado = ".$res;

?>