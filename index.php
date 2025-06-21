<?php

declare(strict_types=1);

echo "Ejercicio 1";

$var1a = 2;
$var1b = 5.42;
$var1c = "Hola";
$var1d = true;

echo "\n\nImprimiendo las variables según su tipo.\nInteger: " . $var1a . "\nDouble: " . $var1b . "\nString: " . $var1c . "\nBoolean: " . $var1d . "\n\n";

define("NOMBRE","Ale");

echo "Imprimiendo la constante en formato título.\n" . "<h1>" . NOMBRE . "</h1>";

?>