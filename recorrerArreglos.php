<?php
 $meses =["enero", "febrero", 'marzo',  "abril ", "mayo ", "junio","julio", "agosto", "septiembre" , "octubre" ,"noviembre", "diciembre"];
// count va a regresar el numero de elementos en un arreglo
 for ($i=0; $i < count($meses) ; $i++) { 
     echo $meses[$i]. '<br/>';
 }

 #ciclo for each

 $jesus = ['telefono'=>546541561, 'edad'=>22, 'pais'=>'mexico'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php 

        #IMPRIMIR EN PANTALLA LOS MESES ENERO, MARZO, ABRIL Y MAYO

            /*
            
            echo '<br/>';
            foreach ($jesus as $dato => $value) {
                echo '<li>'. $dato . ':' . $value .'</li>' ;

                */
            echo '<hr>';
            $num =  rand(1,5);
            switch ($num) {
                case 1:
                echo "el valor es uno";
                    break;
                case 2:
                echo 'el valor es dos';
                    break;
                case 3:
                echo "el valor es tres";
                    break;
                case 4:
                echo "el valor es cuatro";
                    break;
                case 5:
                echo "el valor es cinco";
                    break;
                default:
                    break;
            }
                


        ?>
    </ul>
    
</body>
</html>