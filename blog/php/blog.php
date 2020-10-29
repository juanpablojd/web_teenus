<?php

if (!empty($_POST)) {
    require_once('../../conexion.php');

    $op = $_POST['operacion'];
    switch ($op) {
        case '1':
            $sql = "SELECT * FROM notices  
            ORDER BY `notices`.`id_notice`  DESC";
            $query = $conn->prepare($sql);
            $query->execute();
            $result = $query->rowCount();


            if ($result > 0) {


                while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                    $arreglo["data"][] = $data;
                }
                if (empty($arreglo)) {
                    echo '3';
                    exit();
                }

                echo json_encode($arreglo, JSON_UNESCAPED_UNICODE);
            }
            break;
            
        case 2:
            $id = $_POST['id_articulo'];

            $sql = "SELECT * FROM notices WHERE id_notice = :id";
            $query = $conn->prepare($sql);
            $query->execute(['id' => $id]);
            $result = $query->rowCount();

            $data = $query->fetch(PDO::FETCH_ASSOC);

            if (empty($data)) {
                echo '0';
                exit();
            }

            echo json_encode($data, JSON_UNESCAPED_UNICODE);

            break;
    }
}
