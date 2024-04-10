<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Document</title>
</head>
<body>
<?php

function fibonacci($n) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;
    
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

// Número de elementos da sequência de Fibonacci que deseja calcular
$num_elementos = 10;

$sequencia = fibonacci($num_elementos);

echo "Sequência de Fibonacci com $num_elementos elementos: ";
echo implode(", ", $sequencia);
?>
</body>
</html>