<?php
$f = $_POST["fila"];
$c = $_POST["columna"];
$band = 1;
echo "<table style='text-align:center' border=1>";
for($i=0; $i<$f; $i++){
    echo "<tr>";
    
for($j=0; $j<$c; $j++){
    if($band == 1){
        echo "<td style='background:red;'>"."&nbsp;&nbsp;&nbsp;&nbsp;"."</td>";
        $band = 2;
    }else{
        if($band == 2){
            echo "<td style='background:yellow;'>"."&nbsp;&nbsp;&nbsp;&nbsp;"."</td>";
            $band = 3;
        }else{
            if($band == 3){
                echo "<td style='background:green;'>"."&nbsp;&nbsp;&nbsp;&nbsp;"."</td>";
                $band = 1;
            }
        }
    }
}
echo "</tr>";
}
echo "</table>";
?>