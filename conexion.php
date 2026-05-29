<?php
// Credenciales de la base de datos
$host = "localhost";
$db_name = "sistema_inventario";
$username = "root";
$password = ""; // Vacío por defecto en XAMPP

// Activar modo de excepciones para usar try...catch
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Crear el objeto de conexión
    $conn = new mysqli($host, $username, $password, $db_name);

    // Configurar UTF-8 para tildes y eñes
    $conn->set_charset("utf8");

} catch (mysqli_sql_exception $e) {
    // Si falla, muestra mensaje seguro sin exponer datos internos
    die("Error crítico: No se pudo establecer la conexión segura con el servidor de datos.");
}
?>