<?php
    $x=20;

    while($x >= 1){
        echo $x. '<br/>';
        $x--;

        // en el ciclo while es muy MUY importante poner un incremento o decremento o crearas un ciclo infinito
    }

    
    $n1 = 1;
        do { // se ejecuta almenos una vez
        echo $n1;
        $n1++;
    }
    while($n1 <= 5);

?>