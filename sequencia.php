<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Insira um número: <input type="text" name="numero">
    <input type="submit" value="Calcular">
</form>

<div class="output">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_elementos = isset($_POST["numero"]) ? (int)$_POST["numero"] : 0;
        
        if ($num_elementos > 0) {
            $fib = [0, 1];
            for ($i = 2; $i < $num_elementos; $i++) {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            }
            echo "<p>Sequência de Fibonacci com $num_elementos elementos:</p>";
            echo "<p>" . implode(", ", $fib) . "</p>";
        } else {
            echo "<p>Por favor, insira um número válido.</p>";
        }
    }
    ?>
</div>

</body>
</html>
