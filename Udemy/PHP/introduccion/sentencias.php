<?php

//Sentencias If, Else If y Else

/* $manzana = true;
$durazno = false;
$guayaba = true; */

// Si manzana es igual que durazno entonces
// De lo contrario si durazno es igual a guayaba entonces
// De lo contrario...

/* if($manzana == $durazno){
    echo "Verdadero primer if";
} elseif ($durazno == $guayaba){
    echo "Verdadero segundo if";
} else {
    echo "Entro en el else";
} */

$usuario = 17;
$edadDefault = 18;

if($usuario >= $edadDefault){
    echo "Mostrar contenido";
} else {
    echo "No te podemos mostrar el contenido porque no eres mayor de edad :(";
}

?>