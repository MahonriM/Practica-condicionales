<?php
$nombre="Jose";
$horas=10;
$sueldo_hora=150000;
$sueldo_bruto=$horas*$sueldo_hora;
if($sueldo_bruto<=150000){
    $retencion=$sueldo_bruto*7.5/100;
    $sueldo_neto=$sueldo_bruto-$retencion;
    echo("7.5");
    echo"El sueldo bruto es  ".$sueldo_bruto."El sueldo neto es  ".$sueldo_neto."Las retenciones son ".$retencion;
}
else{
    $retencion=$sueldo_bruto*8.9/100;
    $sueldo_neto=$sueldo_bruto-$retencion;
    echo"El sueldo bruto es  ".$sueldo_bruto."El sueldo neto es  ".$sueldo_neto."Las retenciones son ".$retencion;
}
?>