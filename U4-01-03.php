<?php

setcookie('prueba','cookie',time()+10);

if (count($_COOKIE) > 0) {
    echo "<p>Hay cookies establecidas</p>";
} else {
    echo "<p>No hay cookies establecidas</p>";
}