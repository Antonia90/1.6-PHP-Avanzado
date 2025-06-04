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

$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$email = htmlspecialchars($email);
$telephone = htmlspecialchars($telephone);


$_SESSION["name"] = $name;
$_SESSION["surname"] = $surname;
$_SESSION["email"] = $email;
$_SESSION["telephone"] = $telephone;


header("Location: success.php");
exit();
