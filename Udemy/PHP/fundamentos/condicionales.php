<?php

// if(condicion){
//  //Instrucciones
// }

/* Operadores de comparación: 

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación

*/

/* Operadores lógicos: 

&& - Evalua que se cumplan las 2 condiciones
||, OR - Evalua que se cumpla al menos una condición
XOR - Evalua que se cumpla una sola condición

*/

$edad = 18;
$nombre = 'Lidia';

if ($edad >= 18 || $nombre == 'Lidia'){
    echo "<h1> Bienvenid@ </h1>";
}

/* if ($edad < 18 or $nombre != 'Lidia'){
    echo "<h1> Eres menor de edad y/o no te llamas Lidia </h1>";
} */

?>