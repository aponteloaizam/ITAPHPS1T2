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

echo "\n\nEjercicio 2\n\n";

$var2a = "Hello, World!";
$var2b = "Este es el curso de PHP!";

echo "Imprimiendo strings utilizando funciones.\n";

echo "Original: " . $var2a . "\n";
echo "Mayúsculas: " . strtoupper($var2a) . "\n";
echo "Invertida: " . strrev($var2a) . "\n";
echo "Concatenada: " . $var2a . " " . $var2b . "\n";
echo "El tamaño del string original es de " . strlen($var2a) . " caracteres.\n";

?>