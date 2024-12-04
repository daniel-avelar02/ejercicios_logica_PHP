<?php
// Función para generar la serie Fibonacci
function generarFibonacci($n) {
    // Validar si el número es menor o igual a 0
    if ($n <= 0) {
        return [];
    }

    // La serie Fibonacci comienza con 0 y 1
    $fibonacci = [0];
    if ($n > 1) {
        $fibonacci[] = 1;
    }

    // Generar los siguientes términos de la serie
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Ejemplo de uso
$n = 10;
echo "Serie Fibonacci de $n términos: " . implode(', ', generarFibonacci($n)) . "\n";
?>
