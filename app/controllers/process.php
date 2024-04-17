<?php
include '../config/bd.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo_electronico = $_POST["correo_electronico"];
    $contrasena = $_POST["contrasena"];

    $usuario_autenticado = true;

    if ($usuario_autenticado) {
        header("Location: ../views/home.php");
        exit();
    } else {
        header("Location: index.php?error=1");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
