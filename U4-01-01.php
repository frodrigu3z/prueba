<?php
setcookie('idioma', 'es', time() + 5);
if (isset($_COOKIE['idioma'])) {
    echo "<p>Espanol</p>";
} else {
    echo "<p>There was upon a time</p>";
}
?>