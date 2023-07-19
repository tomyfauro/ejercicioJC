<?php
if (isset($_GET['nombre']) && isset($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Edad: $edad</p>";

    // Otros datos creados con variables
    $ocupacion = "Estudiante";
    $ciudad = "Ciudad de México";
    $hobby = "Fotografía";

    echo "<p>Ocupación: $ocupacion</p>";
    echo "<p>Ciudad: $ciudad</p>";
    echo "<p>Hobby: $hobby</p>";

} else {
    echo "<p>No se recibieron los datos correctamente.</p>";
}

// Datos de conexión a la base de datos
$servername = "formulario";
$username = "juancampos";
$password = "jujuplay7";
$dbname = "DBNAME";


// Establecer conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Datos a almacenar
$titulo = "Formulario";
$descripcion = "Descripción del contenido";
$autor = "Juan Campos";

// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO tabla (titulo, descripcion, autor) VALUES ('$titulo', '$descripcion', '$autor')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Contenido almacenado correctamente.";
} else {
    echo "Error al almacenar el contenido: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>