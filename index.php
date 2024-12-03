<?php declare(strict_types = 1);
    echo "E1N1\n";

    $varInteger = 1;
    $varDouble = 0.5;
    $varString = "Hola";
    $varBoolean = true;

    echo "\nLas variables definidas son:\nInteger: " . $varInteger . "\nDouble: " . $varDouble . "\nString: " . $varString . "\nBoolean: " . $varBoolean . "\n";

    define("NOMBRE","Ale");

    echo "\nLa constante en formato título es:\n" . "<h1>" . NOMBRE . "</h1>\n";

    echo "\nE2N1\n";

    $varWorld = "Hello, World!";

    echo "\nLa frase original es " . $varWorld;
    echo "\nLa frase en mayúsculas es " . strtoupper($varWorld);
    echo "\nLa longitud de la frase es de " . strlen($varWorld) . " caracteres";
    echo "\nLa frase invertida es " . strrev($varWorld);

    $varFrase = "Este es el curso de PHP";

    echo "\nLa frase final es " . $varWorld . " " . $varFrase . "\n";

    echo "\nE3N1\n";

    $x = 10;
    $y = 4;
    $m = 2.5;
    $n = 1.5;

    echo "\nEl valor de la variable X es " . $x . " y el de la variable Y es " . $y;
    echo "\nLa suma de ambas es " . ($x + $y);
    echo "\nLa resta de ambas es " . ($x - $y);
    echo "\nEl producto de ambas es " . ($x * $y);
    echo "\nEl resto de la división de ambas es " . ($x % $y) . "\n";

    echo "\nEl valor de la variable M es " . $m . " y el de la variable N es " . $n;
    echo "\nLa suma de ambas es " . ($m + $n);
    echo "\nLa resta de ambas es " . ($m - $n);
    echo "\nEl producto de ambas es " . ($m * $n);
    echo "\nEl resto de la división de ambas es " . ($m % $n) . "\n";

    echo "\nEl doble de las variables X, Y, M y N es respectivamente " . ($x * 2) . ", " . ($y * 2) . ", " . ($m * 2) . ", " . ($n * 2);
    echo "\nLa suma de todas las variables es " . ($x + $y + $m + $n);
    echo "\nEl producto de todas las variables es " . ($x * $y * $m * $n) . "\n";

    $operador;

    function calcular(int $num1, int $num2, string $operador): string {
        switch ($operador) {
            case "+":
                $resultado = "\nEl resultado de la suma es " . ($num1 + $num2);
            break;
            case "-":
                $resultado = "\nEl resultado de la resta es " . ($num1 - $num2);
            break;
            case "*":
                $resultado = "\nEl resultado de la multiplicación es " . ($num1 * $num2);
            break;
            case "/":
                $resultado = "\nEl resultado de la división es " . ($num1 / $num2);
            break;
            default:
                $resultado = "\nEl operador introducido es erróneo";
        }
        return $resultado;
    }

    echo "\nCalculadora\n";
    echo calcular(5, 2, "+");
    echo calcular(5, 2, "-");
    echo calcular(5, 2, "*");
    echo calcular(5, 2, "/");
    echo calcular(5, 2, "&") . "\n";

    echo "\nE4N1\n";

    function contar(int $num1, int $num2 = 10): string {
        $i = 0;
        $resultado = "";
        while ($i <= $num2) {
            $resultado .= $i . " ";
            $i = $i + $num1;
        }
        return "\nA continuación la secuencia desde el 0 hasta el " . $num2 . ", contada de " . $num1 . " en " . $num1 . ":\n" . $resultado;
    }

    echo contar(2, 20) . "\n";

    echo contar(2) . "\n";

    echo "\nE5N1\n";

    function verificar(float $nota, int $base): string {
        $respuesta = "";
        $nota = ($nota * 100) / $base;
        if ($nota >= 60) {
            $respuesta = "\nPrimera División";
        }
        else if ($nota >= 45) {
            $respuesta = "\nSegunda División";
        }
        else if ($nota >= 33) {
            $respuesta = "\nTercera División";
        }
        else {
            $respuesta = "\nReprobará";
        }
        return $respuesta;
    }

    echo verificar(4.5,10) . "\n";

    echo "\nE6N1\n";

    function isBitten(): bool {
        $num = rand(1,100);
        if ($num <= 50) {
            $bite = true;
        } else {
            $bite = false;
        }
        
        return $bite;
    }

    $resultado = (isBitten() < 50) ? "Charle me ha mordido!" : "Charle no me ha mordido!";

    echo "\n" . $resultado . "\n";
    ?>
