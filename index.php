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
        echo "<b>E1N1</b><br/>";
        
        $varInteger = 1;
        $varDouble = 0.5;
        $varString = "Hola";
        $varBoolean = true;

        echo "<br/>Las variables definidas son:<br/>Integer: " . $varInteger . "<br/>Double: " . $varDouble . "<br/>String: " . $varString . "<br/>Boolean: " . $varBoolean . "<br/>";
        
        define("NOMBRE","Ale");

        echo "<br/>La constante en formato título es:<br/>" . "<h1>" . NOMBRE . "</h1>  ";

        echo "<br/><b>E2N1</b><br/>";

        $varWorld = "Hello, World!";

        echo "<br/>La frase original es " . $varWorld;
        echo "<br/>La frase en mayúsculas es " . strtoupper($varWorld);
        echo "<br/>La longitud de la frase es de " . strlen($varWorld) . " caracteres.";
        echo "<br/>La frase invertida es " . strrev($varWorld);

        $varFrase = "Este es el curso de PHP.";

        echo "<br/>La frase final es " . $varWorld . " " . $varFrase . "<br/>";

        echo "<br/><b>E3N1</b><br/>";

        $x = 10;
        $y = 4;
        $m = 2.5;
        $n = 1.5;

        echo "<br/>El valor de la variable X es " . $x . " y el de la variable Y es " . $y;
        echo "<br/>La suma de ambas es " . ($x + $y);
        echo "<br/>La resta de ambas es " . ($x - $y);
        echo "<br/>El producto de ambas es " . ($x * $y);
        echo "<br/>El resto de la división de ambas es " . ($x % $y) . "<br/>";

        echo "<br/>El valor de la variable M es " . $m . " y el de la variable N es " . $n;
        echo "<br/>La suma de ambas es " . ($m + $n);
        echo "<br/>La resta de ambas es " . ($m - $n);
        echo "<br/>El producto de ambas es " . ($m * $n);
        echo "<br/>El resto de la división de ambas es " . ($m % $n) . "<br/>";

        echo "<br/>El doble de las variables X, Y, M y N es respectivamente " . ($x * 2) . ", " . ($y * 2) . ", " . ($m * 2) . ", " . ($n * 2);
        echo "<br/>La suma de todas las variables es " . ($x + $y + $m + $n);
        echo "<br/>El producto de todas las variables es " . ($x * $y * $m * $n) . "<br/>";

        $operador;

        function calculadora(int $num1, int $num2, $operador): float {
            switch ($operador) {
                case "+":
                    $resultado = $num1 + $num2;
                break;
                case "-":
                    $resultado = $num1 - $num2;
                break;
                case "*":
                    $resultado = $num1 * $num2;
                break;
                case "/":
                    $resultado = $num1 / $num2;
                break;                
            }
            return $resultado;
        }

        echo "<br/>Calculadora";
        echo "<br/>El resultado de la suma es " . calculadora(5, 2, "+");
        echo "<br/>El resultado de la resta es " . calculadora(5, 2, "-");
        echo "<br/>El resultado de la multiplicación es " . calculadora(5, 2, "*");
        echo "<br/>El resultado de la división es " . calculadora(5, 2, "/") . "<br/>";

        echo "<br/><b>E4N1</b><br/>";

        function contar(int $num1, int $num2): string {
            if ($num1 == 0) {
                $num1 = 10;
            }
            $i = 0;
            $resultado = "";
            while ($i <= $num1) {
                $resultado .= $i . " ";
                $i = $i + $num2;
            }
            return "<br/>A continuación la secuencia desde el 0 hasta el " . $num1 . ", contada de " . $num2 . " en " . $num2 . ":<br/>" . $resultado;
        }

        echo contar(20,2) . "<br/>";

        echo "<br/><b>E5N1</b><br/>";

        function grado(float $nota, int $base): string {
            $nota = ($nota * 100) / $base;
            if ($nota >= 60) {
                return "<br/>El estudiante corresponde a Primera División.";
            }
            else if ($nota >= 45 && $nota <= 59) {
                return "<br/>El estudiante corresponde a Segunda División.";
            }
            else if ($nota >= 33 && $nota <= 44) {
                return "<br/>El estudiante corresponde a Tercera División.";
            }
            else {
                return "<br/>El estudiante reprobará.";
            }
        }

        echo grado(4.5,10) . "<br/>";

        echo "<br/><b>E6N1</b><br/>";

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

        echo "<br/>" . $resultado . "<br/>";
        ?>
    </body>
</html>
