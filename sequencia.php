<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

// Teste com os primeiros 10 números da sequência
$resultado = fibonacci(10);
print_r($resultado);

?>
</body>
</html>