<?php
function generateRandomString($length = 10) {
    return
   substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUV
   WXYZ"), 0, $length);
   }

setcookie('identificador', generateRandomString(10), time() + 3600);
if (isset($_COOKIE['identificador'])) {
    echo "<p>Ya estabas registrado</p>";
} else {
    echo "<p>Eres nuevo en el lugar</p>";
}