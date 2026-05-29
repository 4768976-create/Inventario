<?php
// Incluir la conexión del archivo anterior
require_once 'conexion.php';

try {
    // Consulta SQL para traer los productos
    $query = "SELECT p.nombre_producto, p.precio, p.stock FROM productos p";

    // Ejecutar la consulta
    $result = $conn->query($query);

    echo "<h1>Enlace Exitoso: Conexión y Consulta Verificadas</h1>";
    echo "<p>Productos recuperados desde MySQL:</p>";
    echo "<ul>";

    // Recorrer los resultados fila por fila
    while ($prod = $result->fetch_assoc()) {
        echo "<li><strong>" . $prod['nombre_producto'] . "</strong> - Precio: $" . $prod['precio'] . " | Stock: " . $prod['stock'] . " unidades.</li>";
    }

    echo "</ul>";

    // Liberar memoria
    $result->free();

} catch (mysqli_sql_exception $e) {
    echo "Error al consultar los datos: " . $e->getMessage();
}
?>