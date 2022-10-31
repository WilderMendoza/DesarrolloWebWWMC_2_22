<?php 
session_start();
$e1 = $_POST["e1"];
echo $e1."<br>";
$e2 = $_POST["e2"];
$e3 = $_POST["e3"];
$e4 = $_POST["e4"];
if($e1 != "si"){
    if (isset($_SESSION['contador1'])) {
        $_SESSION['contador1']++;
        echo "candidato 1 = ".$_SESSION["contador1"]." votos";
       
    } else {
        $_SESSION['contador1']=1;
        echo "candidato 1 = ".$_SESSION["contador1"]." votos";
    }
}
if($e2 != "si"){
    if (isset($_SESSION['contador2'])) {
        $_SESSION['contador2']++;
        echo "candidato 2 = ".$_SESSION["contador2"]." votos";
       
    } else {
        $_SESSION['contador2']=1;
        echo "candidato 2 = ".$_SESSION["contador2"]." votos";
    }
}
if($e3 != "si"){
    if (isset($_SESSION['contador3'])) {
        $_SESSION['contador3']++;
        echo "candidato 3 = ".$_SESSION["contador3"]." votos";
       
    } else {
        $_SESSION['contador3']=1;
        echo "candidato 3 = ".$_SESSION["contador3"]." votos";
    }
}
if($e4 != "si"){
    if (isset($_SESSION['contador4'])) {
        $_SESSION['contador4']++;
        echo "candidato 4 = ".$_SESSION["contador4"]." votos";
       
    } else {
        $_SESSION['contador3']=1;
        echo "candidato 4 = ".$_SESSION["contador4"]." votos";
    }
}
?>