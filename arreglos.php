<?php


$semana = array("lunes", "martes", "miercoles","jueves","viernes");
#  $semana =["lunes", "martes", "miercoles","jueves","viernes"];
echo "<br/>";
echo $semana[0]; 

//conociendo el numero de elementos de un arreglo

$ultimo_dia =count($semana);
echo $ultimo_dia . "<br/>";
echo $semana[$ultimo_dia - 1];
?>