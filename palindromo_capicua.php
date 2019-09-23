<?php
$p='somos';
function palindromo($p){
    $palabra=trim($p);
    
    for($i=strlen($palabra)-1;$i>=0;$i--){
        $nueva_palabra.=substr($palabra,$i,1);
    }
    
    $cad="La palabra ".$palabra;
    if(strtolower($palabra)==strtolower($nueva_palabra)){
        $cad.=" si es palindrome";
            $estado=true;
    }else{
        $cad.=" no es palindrome";
            $estado=false;
    }
    //bien retornas el resultado
    return $cad;
    //o bien retornas true o false
    return $estado;
    }
    
    //y la llamas asi
    $p="palabra";
    $resultado=palindromo($p);
    //y ya tu ve que haces con resultado
?>