<?php

// esto es una variable, las variables tienen que empezar con el signo ' $ ' y son sencibles a mayusculas y minusculas.
#string-- cadena de texto: las cadenas de texto se escriben entre "" ó ' ' pero se usan de manera diferente 
$nombre = 'jesus';
//las comillas simples no te dejan asignar variables y las comillas simbples te permiten meter variables dentro de un texto
"hola $nombre";
//Integer-- Numeros enteros
$edad = 22;


//Double-- NUmeros decimales
$decimal = 22.7;


//boolean -- Verdadero( true ) falso( false )
$variable = true;


//Array -- arreglo--- despues de definir la variable se ocupa la palabra reservada ARRAY( aqui va nuestro arreglo);
$colores = array("rojo", "negro", "morado", "gris","azul"); # para poder mostrar en pantalla tendremos que especificar ejemplo
$colores[ 4 ]; //imprimira el color negro lo mandamos a llamar por la posicion detro de el array.
echo '<br></br>';


// array con propiedades en este tipo de dato usariamos los signos => para indicar las propiedades.
$colores2 = array("Color1"=>"morado","color2"=>"gris","color3"=>"oscuro");
echo '<br><br>';
echo $colores2["Color1"]; //su sintaxis es ( "nombre" => "valor" ) para mandar a llamar hay que poner solo el nombre
echo "<br> <br>";


//object -- objetos dentro de php
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana"];
echo $frutas->fruta1; # se ocupan -> para mandar a llamar algo dentro del objeto en este caso pera

//class -- Clase

//null -- objeto nulo; cuando a una variable no se le asigna valor se le considera nulo

//gettype();-- se ocupa para saber el tipo de dato en una variable 
# se pone con echo para mostrar el tipo de dato en pantalla


//var_dump(); al igual que gettype muestra el tipo de dato que estan ingresando.

#  ----- constantes ----
# las constantes son valores que no podemos modificar ..... SE OCUPA LA PALABRA: define(aqui_va_el_nombre ,  aqui_el_valor);


?>