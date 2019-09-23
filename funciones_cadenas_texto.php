<?php
    $texto = '<> & ""';

    #convertir caracteres especiales en entidades thml
echo thmlspecialchars($texto);
echo '<br/>';
#evitampos que puedan ingresar codigo malingno
$texto = '<b> hola <b/>';
echo $texto;

 
