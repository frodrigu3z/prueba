<?php
session_start();
session_unset();
$_SESSION['nombre'] = 'Prueba';
$count = count($_SESSION);
echo 'Sesion iniciada';
echo '<br>';
if (count($_SESSION) == 1) {
    echo "<p>Nuevo en el lugar</p>";
} else {
    echo "<p>Mas veces</p>";
}
echo $count;
