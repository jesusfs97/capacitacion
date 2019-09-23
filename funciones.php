<?php
# ------Funciones ------- 
// Funciones Sin parametros
function saludo(){
    echo "hola <br/>";
}
saludo();

// funciones con parametros
$nombre="jesus";
function despedida( $adios ){
    echo $adios;
}
despedida('Hasta luego '.$nombre);




?>