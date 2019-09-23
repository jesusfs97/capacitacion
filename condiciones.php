<?php
#:::::::CONDICIONES:::::::
//una condicion se especifica con la palabra '  if  ' y su sintaxis es "  if ( aqui va la condicion ){ aqui va el codigo;}


$A = 10;
$B = 10;

if( $A > $B){ //si la variable A es mayor que (>) B
    echo "la variable A es mayor!"; //ejecuta este codigo
}
// ' Y TAMBIEN ' si A es igual (==) a B 
else if ( $A == $B ){
    echo "la variable A es igual a B";//ejecuta este codigo
}
//" SI NO " ejecuta este codigo
else{ echo "la Variable B es mayor";}

echo "<br> <br>";

#::::::::::SUICHES::::::::
// los suiches con otra forma de poner condiciones pero por CASOS se utiliza la palabra   "  switch "
$Dia = "lunes";

switch ($Dia){

    case 'sabado': // especificar el primer caso
    echo 'Voy a repasar php'; //la accion que realizara
    break;// esta palabra sale del caso y pasa al siguiente

    case "domingo":
    echo "voy a descansar";
    break;

    case "viernes":
    echo 'terminamos la semana';
    break;

    default: echo 'vamos a TNE a APRENDER xD';


}


?>