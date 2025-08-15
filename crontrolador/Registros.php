<?php
if (isset($_POST['ButReg'])) {
    include_once __DIR__ . '/../DataBase/database.php';

    $fechaInicio = $_POST['Fecha_Inicio'];
    $fechaFinal = $_POST['Fecha_Final'];
    $huespedes = $_POST['numero_huespedes'];
    $precio = $_POST['precio_total'];

    $sql = "INSERT INTO reservaciones (fecha_inicio, fecha_fin, numero_huespedes, precio_total)
            VALUES ('$fechaInicio', '$fechaFinal', '$huespedes', '$precio')";
    $db->query($sql);
    header("Location: index.php");
}
?>