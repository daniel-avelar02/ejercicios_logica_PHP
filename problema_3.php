<?php
// Función para determinar si una cadena es un palíndromo
function esPalindromo($cadena) {
    // Convertir la cadena a minúsculas y eliminar espacios
    $cadena = strtolower(str_replace(' ', '', $cadena));

    // Verificar si la cadena es igual a su reverso
    return $cadena === strrev($cadena);
}

// Ejemplo de uso
$cadena = "anita lava la tina";
echo "¿La cadena \"$cadena\" es un palíndromo? " . (esPalindromo($cadena) ? "Sí" : "No") . "\n";
?>
