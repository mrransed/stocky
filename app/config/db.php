<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=stocky', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Error al conectarse con la base de datos: ' . $e->getMessage();
    exit;
}
?>
