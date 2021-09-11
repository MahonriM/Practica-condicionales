<?php
$meses=12;
$monto=200;
$inversion_mensual=$meses*$monto;
if($inversion_mensual<=450000){
$interes=$inversion_mensual*2/100;
echo("Interes es de ".$interes);
}
else{
    $interes=$inversion_mensual*7/100;
    echo("Interes es de ".$interes);
}
?>