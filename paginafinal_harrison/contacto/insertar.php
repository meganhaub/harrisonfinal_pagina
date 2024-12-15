<?php
// Conexión a la base de datos
$host = 'localhost';
$dbname = 'bdd_formulario';
$username = "root"; // Cambia esto por tu usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña de la base de datos

try {
    // Crear una conexión
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar la consulta
    $stmt = $conn->prepare("INSERT INTO contactos (nombre, email, asunto, mensaje) VALUES (:name, :email, :subject, :message)");

    // Vincular los parámetros
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':subject', $_POST['subject']);
    $stmt->bindParam(':message', $_POST['message']);

    // Ejecutar la consulta
    $stmt->execute();

    // Mensaje de éxito
    echo "Mensaje enviado correctamente.";
} catch (PDOException $e) {
    // Manejo de errores
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;
?>
