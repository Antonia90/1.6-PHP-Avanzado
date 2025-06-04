<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario enviado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Gracias por inscribirte.</h2>
    <h4>Tus datos fueron recibidos correctamente:</h4>
    <br>
    <ul>
        <li><strong>Nombre:</strong> <?php echo $_SESSION["name"] ?? ""; ?></li>
        <li><strong>Apellido:</strong> <?php echo $_SESSION["surname"] ?? ""; ?></li>
        <li><strong>Correo:</strong> <?php echo $_SESSION["email"] ?? ""; ?></li>
        <li><strong>Teléfono:</strong> <?php echo $_SESSION["telephone"] ?? ""; ?></li>
    </ul>
    <br>
    <a href="index.php">Volver al formulario</a>
</body>
</html>