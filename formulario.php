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
            
    <form method = "post" action = "Connect.php" > <br><br>
    <h2>FORMULARIO DE ESTUDIANTES</h2>

        <p><label><b><u>NOMBRE: <br></p></label> <input = "text" name = "nombre" class="field"> </fieldset></u></b><br><br>
        <p><label><b><u>APELLIDO: <br></p></label> <input = "text" name = "apellido" class="field"> </fieldset></u></b><br><br>
        <p><label><b><u>EDAD: <br></p></label> <input = "text" name = "edad" class="field"> </u></b><br><br>
        
        <p><input type = "submit" value = "ENVIAR EL FORMULARIO" name = "submit" class="btn btn-green"></p>
        
    <?php

    //validaciones del formulario en el usuario

    if(isset($_POST["submit"])) {

        if(empty($_POST["nombre"])){
           $errores[] = "Ingrese el nombre del Estudiante";
        }
        if(empty($_POST["apellido"])){
            $errores[] = "Ingrese el apellido del Estudiante";
        }
        if(empty($_POST["edad"])){
           $errores[] = "ingrese la edad del estudiante";
        }
        
    }

    ?>    
    
    
</body>
</html>