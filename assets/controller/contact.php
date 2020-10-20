<?php

if (!empty($_POST)) {

    require_once("../../conexion.php");

    $nombres = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $producto = $_POST['producto'];
    $mensaje = $_POST['mensaje'];

    if (empty($nombres) || empty($telefono) || empty($email) || empty($producto) || empty($mensaje)) {
        echo '0';
        exit();
    }

    $sql = "INSERT contactenos (nombres, telefono, email, producto, mensaje)
            VALUES(:nombres, :telefono, :email, :producto,:mensaje)";
    $query = $conn->prepare($sql);
    $result = $query->execute([
        'nombres' => $nombres,
        'telefono' => $telefono,
        'email' => $email,
        'producto' => $producto,
        'mensaje' => $mensaje,
    ]);

    if ($result) {
        echo '1';
        exit();
    }
}
