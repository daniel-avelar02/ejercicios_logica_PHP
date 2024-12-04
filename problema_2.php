<?php
// Función para determinar si un número es primo
function esPrimo($numero) {
    // 0, 1 y números negativos no son primos
    if ($numero <= 1) {
        return false;
    }

    // Comprobar divisores desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si es divisible, no es primo
        }
    }

    return true; // Si no se encontró divisor, es primo
}

// Ejemplo de uso
$numero = 29;
echo "¿El número $numero es primo? " . (esPrimo($numero) ? "Sí" : "No") . "\n";
?>
