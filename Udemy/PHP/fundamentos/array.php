<?php

# Los arrays son como variables que nos permiten guardar multiples valores.

# En los arrays podemos guardar cualquier tipo de dato, incluso podemos guardar un array dentro de otro.
$array = array('cadenas de texto', 1, array('cadena', 123), true);

# Ejemplo de un arreglo con los días de la semana:
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

echo $semana[2]."<br>";

//para cambiar el valor de la semana
echo $semana[7] = 'Estudio';

?>