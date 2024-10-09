<?php
//  *************************************************************
//  **********  19-validacion/procesar_formulario.php  **********
//  *************************************************************

$error = 'faltan_valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) &&  !empty($_POST['edad']) &&  !empty($_POST['email']) &&  !empty($_POST['pass'])) {

    $error = 'OK';

    //  -----  Asignamos variables  -----
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //  ----------  Validar los Campos  ----------

    //  -----  Validar Nombre (solo letras)  -----
    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) error('nombre');
    
    //  -----  Validar Apellidos (solo letras)  -----
    if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) error('apellidos');
    
    //  -----  Validar Edad (entero)  -----
    if (!filter_var($edad, FILTER_VALIDATE_INT)) error('edad');
    
    //  -----  Validar Email (formato correcto)  -----
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) error('email');
    
    //  -----  Validar Contraseña (mínimo 5 caracteres)  -----
    if (strlen($pass) < 5) error('password');
    
} else error('faltan_valores');


//  -----  Función para manejar errores y redirigir a la página principal -----
function error($valor_error)
{
    header("Location: index.php?error=" . $valor_error);
    exit();  // Detiene la ejecución del script después de la redirección
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario Validado </title>
</head>

<body>

    <?php if ($error === 'OK') : ?>

        <h1> Datos Validados Correctamente ..... 😊 </h1>
        <p> Nombre: <?= htmlspecialchars($nombre) ?> </p>
        <p> Apellidos: <?= htmlspecialchars($apellidos) ?> </p>
        <p> Edad: <?= htmlspecialchars($edad) ?> </p>
        <p> Email: <?= htmlspecialchars($email) ?> </p>

    <?php endif; ?>

</body>

</html>