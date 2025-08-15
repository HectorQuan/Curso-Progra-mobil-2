<?php
include_once __DIR__ . '/../DataBase/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $db->query("DELETE FROM reservaciones WHERE idReservacion = $id");
}

header("Location: ../index.php");
exit;
?>