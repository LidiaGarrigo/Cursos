<?php

//Ciclos o bucles

//For
//$i++ = +crop_16_9
echo "Bucle For: <br>";
for ($i=0; $i <10 ; $i++) { 
    echo $i."<br>";
}

// While
echo "Bucle While: <br>";
$i = 1;

while ($i <= 10) {
    echo $i. "<br>";
    $i++;
}

//Do while
echo "Bucle Do-while: <br>";
$i = 0;

do {
    echo $i. "<br>";
    $i++;
} while($i < 10);

?>