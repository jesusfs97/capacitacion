<?php

#:::::::::CICLOS::::::::
// los ciclos son acciones que queremos que se repitan cierto numero de veces
// el ciclo while tiene la siguiente sintaxis ' while(condicon para que se ejecute el ciclo) {codigo}'
$n = 0;
 // si la variable N es menor o igual ( '<=' ) a 10 
 while($n <= 10) { 
     echo $n;// ejecuta este codigo;
     $n++; //Y/o incremnta el valor de N en uno;
}
echo "<br> <br>";

#.......Do While.....
// el ciclo Do while es simar a do solo cambia la sintaxis ' Do { aqui va el ciclo } while (aqui va la codicion);

$n1 = 1;
do { 
    echo $n1;
    $n1++;
}
while($n1 <= 5);


#::::::Ciclo FOR::::::::::::
/*el ciclo ' for ' es mas sencillo de aplicar su sintaxis es " For(variable=valor;limite del ciclo; 
incremento del valor){codigo a ejecutar}
*/


for ($i =0; $i <=10; $i++){
    echo $i;
}

#atajo IF

echo '<br/>';
$age=18;

$age = (isset($age)) ? 'su edad es '. $age : 'el usuario no establecio su edad ';
#ISSET -> Verifica si existe algo y TRUE devuelve 1 si no FALSE devuelve 0;
echo $age;
echo '<br/>';
echo '<br/>';

$texto = sara;
$numero =10;
$numero_dos ="5";
$arreglo ['hugo ', 'tunerd'];
$arreglo_asociativo =['name'=>'sara', 'age'=>'23'];
$booleano = true;

var_dump();
print_r();


?>