<?php
session_start();
if (isset($_SESSION["error"])) {
    echo '<div class="error">' . $_SESSION["error"] . '</div>';
    unset($_SESSION["error"]);
}

$name = $surname = $email = $telephone = "";


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Formulario</title>
</head>

<body>
    <header>
        <h2>Formulario de inscripción</h2>
    </header>
    <main>
        <div class="error">* Campo obligatorio</div>
        <div class="form-container">

            <form action="form_process.php" method="POST">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                    <span class="error">*</span>
                </div>

                <div class="form-group">
                    <label for="surname">Apellido:</label>
                    <input type="text" id="surname" name="surname" value="<?php echo $surname; ?>">
                    <span class="error">*</span>
                </div>

                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>">
                    <span class="error">*</span>
                </div>

                <div class="form-group">
                    <label for="telephone">Teléfono:</label>
                    <input type="tel" id="telephone" name="telephone" value="<?php echo $telephone; ?>">
                    <span class="optional">(Opcional)</span>
                </div>
                <div class="form-actions">
                    <button type="submit" name="submit" value="Submit">Enviar</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>