<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Si tu MySQL tiene una contraseña, cámbiala aquí.
$password = "";
$dbname = "game_records";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener los datos del formulario, asegurando que estén definidos y limpiándolos
$player_name = isset($_POST['username']) ? $conn->real_escape_string($_POST['username']) : '';
$game_time = isset($_POST['game_time']) ? $conn->real_escape_string($_POST['game_time']) : '';
$game_date = isset($_POST['game_date']) ? $conn->real_escape_string($_POST['game_date']) : '';

// Verificar si los datos están completos antes de insertar
if (!empty($player_name) && !empty($game_time) && !empty($game_date)) {
    // Usar una declaración preparada para evitar la inyección de SQL
    $stmt = $conn->prepare("INSERT INTO users (username, game_time, game_date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $player_name, $game_time, $game_date);

    // Ejecutar la declaración
    if ($stmt->execute()) {
        echo "Record saved successfully. <a href='index.php'>Go Back</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
} else {
    echo "Please fill in all fields.";
}

// Cerrar conexión
$conn->close();
?>
