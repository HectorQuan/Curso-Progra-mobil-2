<?php
include_once __DIR__ . '/../DataBase/database.php';

$id = $_GET['id'];
$sql = $db->query("SELECT * FROM reservaciones WHERE idReservacion = $id");
$dato = $sql->fetch_object();

if (isset($_POST['actualizar'])) {
    $fechaInicio = $_POST['Fecha_Inicio'];
    $fechaFinal = $_POST['Fecha_Final'];
    $huespedes = $_POST['numero_huespedes'];
    $precio = $_POST['precio_total'];

    $db->query("UPDATE reservaciones SET 
        fecha_inicio='$fechaInicio', 
        fecha_fin='$fechaFinal',
        numero_huespedes='$huespedes', 
        precio_total='$precio'
        WHERE idReservacion = $id");

    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Reservación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Editar Reservación</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Fecha de inicio</label>
            <input type="date" class="form-control" name="Fecha_Inicio" value="<?php echo $dato->fecha_inicio ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha final</label>
            <input type="date" class="form-control" name="Fecha_Final" value="<?php echo $dato->fecha_fin ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Número de huéspedes</label>
            <input type="number" class="form-control" name="numero_huespedes" value="<?php echo $dato->numero_huespedes ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio total</label>
            <input type="number" step="0.01" class="form-control" name="precio_total" value="<?php echo $dato->precio_total ?>" required>
        </div>
        <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
        <a href="../index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>