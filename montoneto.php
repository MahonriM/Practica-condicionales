<?php
$cantidad_articulo=10;
$costo_articulo=200;
$monto=$costo_articulo*$cantidad_articulo;
if($monto>1000){
   
    $iva=$monto*17/100;
    $monto_neto=$monto+$iva;
    echo"El monto es  ".$monto." El iva es ". 17 ."% "." El monto neto es ".$monto_neto;
}
else{
 $iva=$monto*15/100;
$monto_neto=$monto +$iva;
 echo"El monto es  ".$monto." El iva es ". 15 ." %"." El monto neto es ".$monto_neto;
}
?>