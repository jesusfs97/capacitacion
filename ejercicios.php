<?php

#....::::::EJERCICIO NUMERO 11:::::::........
 $edad = 16 ;
 if ($edad>=18) {
     echo "eres mayor de edad";
 } else {
     echo "eres menor de edad";
 }
 
    echo "<br/>";
    echo "<hr/>";
    
#......::::::EJERCICIO NUMERO 12::::::...
    echo "<br/>";
    $numero1= 550;
    $numero2= 560;
    if ($numero1<$numero2) {
        echo $numero1;
    }else{
        echo $numero2;
    }
    echo "<hr/>";
    echo "<br/>";

#......:::::EJERCICIO 13:::::::........

$numberOne = 20;
$numberTwo =20;
if($numberOne != $numberTwo ){
    echo "los numeros son diferentes";
}
    echo "los numeros son iguales";

    echo "<hr/>";
    echo "<br/>";

#....::::::EJERCICIO NUMERO 14:::::::........

    $numero= 0;
    if ($numero < 0) {
        echo $numero *3;
    } elseif($numero > 0){
        echo $numero * 2;
    }elseif ($numero===0)
    {echo " el numero es neutro";}

    echo "<hr/>";
    echo "<br/>";

#....::::::EJERCICIO NUMERO 15:::::::........
    $num1= 30;
    $num2= 10;
    $num3= 20;
    if ($num1>$num2 && $num1>$num3) {
        echo $num1;
    }
    

?>