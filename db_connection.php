<?php
// Configuración de la base de datos PostgreSQL
$host = 'dpg-crkbierv2p9s73b4n2cg-a.oregon-postgres.render.com';
$port = '5432';
$dbname = 'game_results_db';
$user = 'game_results_db_user';
$password = 'hPjNoZ4r2wcKWQkUSBqk8Xq0cTDZnJlc';

// Crear conexión a PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Verificar la conexión
if (!$conn) {
    die("Error en la conexión a la base de datos: " . pg_last_error());
} else {
    echo "Conexión exitosa a la base de datos!";
}

// Código para manejar los datos (como insertar, actualizar, eliminar, etc.)

// Ejemplo de cómo insertar datos
$player_name = $_POST['username'];
$game_time = $_POST['game_time'];
$game_date = $_POST['game_date'];

$query = "INSERT INTO users (username, game_time, game_date) VALUES ('$player_name', '$game_time', '$game_date')";
$result = pg_query($conn, $query);

if ($result) {
    echo "Datos guardados exitosamente.";
} else {
    echo "Error al guardar los datos: " . pg_last_error();
}

// Cerrar la conexión
pg_close($conn);
?>
