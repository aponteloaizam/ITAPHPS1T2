<?php declare(strict_types = 1); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ITAPHPS1T2</title>
        <link  rel="stylesheet" href="css/styles.css">
    </head>
    <body class="body">
        <?php 
        echo "<b>E1N1</b>\n<br/>";
        
        $varInteger = 1;
        $varDouble = 0.5;
        $varString = "Hola";
        $varBoolean = true;

        echo "\n<br/>Las variables definidas son:\n<br/>Integer: " . $varInteger . "\n<br/>Double: " . $varDouble . "\n<br/>String: " . $varString . "\n<br/>Boolean: " . $varBoolean . "\n<br/>";
        
        define("NOMBRE","Ale");

        echo "\n<br/>La constante en formato título es:\n<br/>" . "<h1>" . NOMBRE . "</h1>\n<br/>";

        echo "\n<br/><b>E2N1</b>\n<br/>";

        $varWorld = "Hello, World!";

        echo "\n<br/>La frase original es " . $varWorld;
        echo "\n<br/>La frase en mayúsculas es " . strtoupper($varWorld);
        echo "\n<br/>La longitud de la frase es de " . strlen($varWorld) . " caracteres";
        echo "\n<br/>La frase invertida es " . strrev($varWorld);

        $varFrase = "Este es el curso de PHP";

        echo "\n<br/>La frase final es " . $varWorld . " " . $varFrase . "\n<br/>";

        echo "\n<br/><b>E3N1</b>\n<br/>";

        $x = 10;
        $y = 4;
        $m = 2.5;
        $n = 1.5;

        echo "\n<br/>El valor de la variable X es " . $x . " y el de la variable Y es " . $y;
        echo "\n<br/>La suma de ambas es " . ($x + $y);
        echo "\n<br/>La resta de ambas es " . ($x - $y);
        echo "\n<br/>El producto de ambas es " . ($x * $y);
        echo "\n<br/>El resto de la división de ambas es " . ($x % $y) . "\n<br/>";

        echo "\n<br/>El valor de la variable M es " . $m . " y el de la variable N es " . $n;
        echo "\n<br/>La suma de ambas es " . ($m + $n);
        echo "\n<br/>La resta de ambas es " . ($m - $n);
        echo "\n<br/>El producto de ambas es " . ($m * $n);
        echo "\n<br/>El resto de la división de ambas es " . ($m % $n) . "\n<br/>";

        echo "\n<br/>El doble de las variables X, Y, M y N es respectivamente " . ($x * 2) . ", " . ($y * 2) . ", " . ($m * 2) . ", " . ($n * 2);
        echo "\n<br/>La suma de todas las variables es " . ($x + $y + $m + $n);
        echo "\n<br/>El producto de todas las variables es " . ($x * $y * $m * $n) . "\n<br/>";

        $operador;

        function calcular(int $num1, int $num2, string $operador): string {
            switch ($operador) {
                case "+":
                    $resultado = "\n<br/>El resultado de la suma es " . ($num1 + $num2);
                break;
                case "-":
                    $resultado = "\n<br/>El resultado de la resta es " . ($num1 - $num2);
                break;
                case "*":
                    $resultado = "\n<br/>El resultado de la multiplicación es " . ($num1 * $num2);
                break;
                case "/":
                    $resultado = "\n<br/>El resultado de la división es " . ($num1 / $num2);
                break;
                default:
                    $resultado = "\n<br/>El operador introducido es erróneo";
            }
            return $resultado;
        }

        echo "\n<br/>Calculadora\n<br/>";
        echo calcular(5, 2, "+");
        echo calcular(5, 2, "-");
        echo calcular(5, 2, "*");
        echo calcular(5, 2, "/");
        echo calcular(5, 2, "&") . "\n<br/>";

        echo "\n<br/><b>E4N1</b>\n<br/>";

        function contar(int $num1, int $num2 = 10): string {
            $i = 0;
            $resultado = "";
            while ($i <= $num2) {
                $resultado .= $i . " ";
                $i = $i + $num1;
            }
            return "\n<br/>A continuación la secuencia desde el 0 hasta el " . $num2 . ", contada de " . $num1 . " en " . $num1 . ":\n<br/>" . $resultado;
        }

        echo contar(2, 20) . "\n<br/>";

        echo contar(2) . "\n<br/>";

        echo "\n<br/><b>E5N1</b>\n<br/>";

        function verificar(float $nota, int $base): string {
            $respuesta = "";
            $nota = ($nota * 100) / $base;
            if ($nota >= 60) {
                $respuesta = "\n<br/>Primera División";
            }
            else if ($nota >= 45) {
                $respuesta = "\n<br/>Segunda División";
            }
            else if ($nota >= 33) {
                $respuesta = "\n<br/>Tercera División";
            }
            else {
                $respuesta = "\n<br/>Reprobará";
            }
            return $respuesta;
        }

        echo verificar(4.5,10) . "\n<br/>";

        echo "\n<br/><b>E6N1</b>\n<br/>";

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

        echo "\n<br/>" . $resultado . "\n<br/>";
        ?>
    </body>
</html>
