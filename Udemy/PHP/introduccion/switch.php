<?php

//Sentencias Switch

//Enteros
echo "Variable entero:";
echo "<br>";
$i = 1;

switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
    default:
        echo "i no contiene ningun caso";
        break;
}

//Cadena

echo "<br>";
echo "Variable Cadena:";
echo "<br>";

$cadena = "pera";

switch ($cadena) {
    case "manzana":
        echo "Tu variable cadena es una Manzana";
        break;
    case "durazno":
        echo "Tu variable cadena es un Durazno";
        break;
    default:
        echo "Parece ser que tu variable cadena es un tipo de fruta diferente";
        break;
}


?>