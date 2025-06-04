<?php
session_start();

$name = $_POST["name"] ?? "";
$surname = $_POST["surname"] ?? "";
$email = $_POST["email"] ?? "";
$telephone = $_POST["telephone"] ?? "";


if (empty(trim($name)) || empty(trim($surname)) || empty(trim($email
)) ) {
    $_SESSION["error"] = "Debes completar todos los campos obligatorios.";
    header("Location: index.php");
    exit();
}

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["error"] = "El correo no es válido.";
    header("Location: index.php");
    exit();
}

$_SESSION["name"] = htmlspecialchars($name);
$_SESSION["surname"] = htmlspecialchars($surname);
$_SESSION["email"] = htmlspecialchars($email);
$_SESSION["telephone"] = htmlspecialchars($telephone);


header("Location: success.php");
exit();
