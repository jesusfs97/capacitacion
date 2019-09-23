<?php
    /* TAREAA !

    Dada una fecha determinar cuantos dias faltan para que termine el año 
    */

    $mensajes='';
    $mes = $_POST['mes'];
    $dia = intval($_POST['dia']);
    define('año',365);
    define("enero",31);
    define("febrero",28);
    define("marzo",31);
    define("abril",30);
    define("mayo",31);
    define("junio",30);
    define("julio",31);
    define("agosto",31);
    define("septiembre",30);
    define("octubre",31);
    define("noviembre",30);
    define("diciembre",31);

    if ($mes=="enero") {
            $resultado = año - $dia;
            echo 'faltan ' . $resultado . ' dias para fin de año' ;  
             
    }
    
    
    if ($mes=="febrero") {
        if ($dia <= febrero) {
                $resultado = año - (enero + $dia);
            echo 'faltan ' . $resultado . ' dias para fin de año' ; 
               
        }else{ echo "error recuerda que febrero solo tiene 28 dias";}
         
    }
    
    if ($mes=="marzo") {
        $resultado = año - (enero + febrero + $dia);
        echo 'faltan ' . $resultado . ' dias para fin de año' ;
           
    }

    if ($mes=="abril") {
        if ($dia <= abril ) {
                $resultado = año - (enero + febrero + marzo + $dia);
            echo 'faltan ' . $resultado . ' dias para fin de año' ; 
               
        }else{ echo "error recuerda que abril solo tiene 30 dias";}
         
    }

    if ($mes=="mayo") {
        $resultado = año - (enero + febrero + marzo + abril + $dia);
        echo 'faltan ' . $resultado . ' dias para fin de año' ;  
         
    }

    if ($mes=="junio") {
        if ($dia <= junio ) {
            $resultado = año - (enero + febrero + marzo + abril + mayo + $dia);
            echo 'faltan ' . $resultado . ' dias para fin de año' ; 
           
    }else{ echo "error recuerda que junio solo tiene 30 dias";}
    
    }


    if ($mes=="julio") {
        $resultado = año - (enero + febrero + marzo + abril + mayo + junio + $dia);
        echo 'faltan ' . $resultado . ' dias para fin de año' ;
           
    }

    if ($mes=="agosto") {
        $resultado = año - (enero + febrero + marzo + abril + mayo + junio + julio + $dia);
        echo 'faltan ' . $resultado . ' dias para fin de año' ;
           
    }

    if ($mes=="septiembre") {
        if ($dia <= septiembre ) {
            $resultado = año - (enero + febrero + marzo + abril + mayo + junio + julio + agosto + $dia);
            echo 'faltan ' . $resultado . ' dias para fin de año' ;   
        }else{ echo "error recuerda que septiembre solo tiene 30 dias";}
        
    }
    

    if ($mes=="octubre") {
        $resultado = año - (enero + febrero + marzo + abril + mayo + junio + julio + agosto + septiembre + $dia);
        echo 'faltan ' . $resultado . ' dias para fin de año' ;
           
    }
    
    
    if ($mes=="noviembre") {
        if ($dia <= noviembre ) {
            $resultado = año - (enero + febrero + marzo + abril + mayo + junio + julio + agosto + septiembre + octubre + $dia);
            echo 'faltan ' . $resultado . ' dias para fin de año' ;   
    }else{ echo "error recuerda que noviembre solo tiene 30 dias";}
    
    }

    if ($mes=="diciembre") {
        if ($dia==31){
            echo "saquen el bodka ¡YA ES FIN DE AÑO!";
        }else {
        $resultado = año - (enero + febrero + marzo + abril + mayo + junio + julio + agosto + septiembre + octubre + noviembre + $dia);
        echo 'faltan ' . $resultado . ' dias para fin de año' ;
        
        }
   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta</title>
</head>
<body>
    <section>
        <div>
            <hr>
            <a href="index.php">REGRESAR</a>
        </div>
    </section>
    
</body>
</html>