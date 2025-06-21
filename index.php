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
echo "El tamaño del string original es de " . strlen($var2a) . " caracteres.";

echo "\n\nEjercicio 3a\n\n";

$x = 2;
$y = 3;
$m = 1.5;
$n = 2.5;

echo "Imprimiendo las variables declaradas.\nX: " . $x . "\nY: " . $y . "\nM: " . $m . "\nN: " . $n . "\n\n";
echo "Imprimiendo operaciones con X y Y.\nSuma: " . ($x + $y). "\nResta: " . ($x - $y) . "\nProducto: " . ($x * $y) . "\nMódulo: " . ($x % $y) . "\n\n";
echo "Imprimiendo operaciones con M y N.\nSuma: " . ($m + $n). "\nResta: " . ($m - $n) . "\nProducto: " . ($m * $n) . "\nMódulo: " . ($m % $n) . "\n\n";
echo "Imprimiendo el doble de cada variable.\nX: " . ($x * 2) . "\nY: " . ($y * 2) . "\nM: " . ($m * 2) . "\nN: " . ($n * 2). "\n\n";
echo "Imprimiendo la suma de todas las variables.\n" . ($x + $y + $m + $n) . "\n\n";
echo "Imprimiendo el producto de todas las variables.\n" . ($x * $y * $m * $n);

echo "\n\nEjercicio 3b\n\n";

function calcular(int $var3a, int $var3b, string $operador): string {

    switch ($operador) {
        case "+":
            $resultado = "El resultado de la suma es: " . ($var3a + $var3b);
        break;
        case "-":
            $resultado = "El resultado de la resta es: " . ($var3a - $var3b);
        break;
        case "*":
            $resultado = "El resultado de la multiplicación es: " . ($var3a * $var3b);
        break;
        case "/":
            $resultado = "El resultado de la división es: " . ($var3a / $var3b);
        break;
        default:
            $resultado = "El operador introducido es erróneo.";
    }
    return $resultado;
}

echo "Imprimiendo diferentes resultados de ejecutar la función calculadora.\n";
echo calcular(2, 3, "*") . "\n";
echo calcular(2, 3, "/") . "\n";
echo calcular(2, 3, "&") . "\n";

?>