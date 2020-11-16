<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos enviados</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ies_alumnos';

$mysqli = new mysqli ($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Error de Conexión ('. $mysqli->connect_errno .')'. $mysqli->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$sql = "INSERT INTO `estudiantes` (`nombre`, `apellido`, `edad`) VALUES ('$nombre', '$apellido', '$edad')";

$mysqli->query($sql);
?>

<p><label><h2>Sus datos fueron enviados correctamente </h2></p></<label><br><br>

<?php

    echo "NOMBRE: ", $_POST['nombre'], "<br><br>";
    echo "APELLIDO: ", $_POST['apellido'], "<br><br>";
    echo "EDAD: ", $_POST['edad'], "<br><br>";

?>

<p><label>Si sus datos no son correctos, puede volver a realizar el Formulario.</p></<label><br>
<p><label><a href="formulario.php">Volver al FORMULARIO</a></p></<label><br>
<p><label><a href="formulario.php">Cargar un nuevo ESTUDIANTE</a></p></<label><br>

</body>
</html>