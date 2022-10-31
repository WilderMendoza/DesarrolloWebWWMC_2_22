<?php

if(isset($_COOKIE["valor"])){
    $aux = $_COOKIE["valor"]+1;
    echo "visita numero: ".$aux;
    setcookie("valor",$aux,time()+3);
}else{
    setcookie("valor",1,time()+60);
    echo "visita numero 1";
}

?>