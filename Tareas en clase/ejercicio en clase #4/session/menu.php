<?php
session_start();
$_SESSION["n1"] = $_GET["n1"];
$_SESSION["n2"] = $_GET["n2"];
?>
<ul>
    <li><a href="resultado.php?op=1">SUMAR</a></li>
    <li><a href="resultado.php?op=2">RESTAR</a></li>
</ul>