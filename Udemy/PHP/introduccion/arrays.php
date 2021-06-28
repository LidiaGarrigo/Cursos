<?php

//Arrays

$array = array("manzana", "durazno", "pera");

/* $array = array(
'numero1' => 10,
'numero2' => 11,
'numero3' => 22,
'numero4' => 33,
'numero5' => 44,
); */

echo "Bucle For: <br>";
for ($i=0; $i < count($array); $i++) { 
    echo $array[$i]."<br>";
}

//Foreach
echo "Bucle Foreach: <br>";
foreach ($array as $key => $value){
    echo "Indice: ".$key." - ".$value."<br>";
}
?>