<?php
if (isset($_GET['termino_busqueda'])) {
    $termino = htmlspecialchars($_GET['termino_busqueda']);
} else {
    $termino = "Ningún término introducido";
}

echo "<h2>Resultado de la búsqueda</h2>";
echo "Has buscado: <strong>" . $termino . "</strong>";
?>
