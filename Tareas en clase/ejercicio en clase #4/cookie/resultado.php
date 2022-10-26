<?php

if($_GET["op"] == 1){
    $res = $_COOKIE["n1"]+$_COOKIE["n2"];
}else{
    if($_GET["op"] == 2){
        $res = $_COOKIE["n1"] - $_COOKIE["n2"];
    }
}
echo "Resultado = ".$res;

?>