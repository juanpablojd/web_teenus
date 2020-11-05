
<?php

if (!empty($_POST)) {

    require_once('../../conexion.php');

    $nombres = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $plan = $_POST['plan'];

    if (empty($nombres) || empty($telefono) || empty($email) || empty($empresa)) {
        echo '0';
        exit();
    }

    $sql = "INSERT cotizaciones (nombres, telefono, email, empresa, plan)
            VALUES(:nombres, :telefono, :email, :empresa, :plan)";
    $query = $conn->prepare($sql);
    $result = $query->execute([
        'nombres' => $nombres,
        'telefono' => $telefono,
        'email' => $email,
        'empresa' => $empresa,
        'plan' => $plan,
    ]);

    if ($result) {
        echo '1';
        exit();
    }
}
