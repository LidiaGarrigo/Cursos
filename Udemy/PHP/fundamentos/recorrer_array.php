<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// Recorrer el array para evitar acceder de esta manera:
/* <li><?php echo $meses[0]; ?></li>
    <li><?php echo $meses[1]; ?></li> */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }
        ?>
    </ul>

</body>
</html>