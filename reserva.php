
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de reservacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/normalize.css">
<script src="js/javascript.js" type="text/javascript"></script>
<script>
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">airHNH</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Pagina principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="alquilar.php">Alquiler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="sobreNo.php">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="Q&A.php">Q&A</a>
        </li>
      </ul>
    </div>
      <li class="nav-item">
    <form action="cerrar-sesion.php" method="post">
    <button type="submit" class="btn btn-sm btn-outline-dark shadow-none">
     Cerrar sesión
    </button>
  </form>
 </li>
  </div>
</nav>    

<h1 class="text-center">Crear reservacion</h1>
<div class= "container-fluid row">
<form class="col-4" method="POST">
<?php
include "DataBase/database.php";
include "crontrolador/Registros.php";
?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de inicio</label>
    <input type="date" class="form-control" name="Fecha_Inicio">
  </div>
  
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de Final</label>
    <input type="date" class="form-control" name="Fecha_Final">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Total de huepedes</label>
    <input type="number" class="form-control" name="numero_huespedes">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">precio del alquiler</label>
    <input type="decimal" class="form-control" name="precio_total">
  </div>
  <a href="check.php">
  <button type="submit" class="btn btn-primary" name="ButReg" value="ok">Submit</button>
  </a>
  <a href="check.php" class="btn btn-sm btn-outline-dark shadow-none">confirme metodo de pago</a>
 </form>

    <div class="col-8 p-4">
       <table class="table">
  <thead class="">
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Fecha de inicio</th>
      <th scope="col">Fecha de Final</th>
      <th scope="col">Total de huepedes</th>
      <th scope="col">precio del alquiler</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php 
include "DataBase/database.php";
$sql = $db->query("SELECT * FROM reservaciones");
while ($dato = $sql->fetch_object()) { ?>
<tr>
  <td><?php echo $dato->idReservacion; ?></td>
  <td><?php echo $dato->fecha_inicio; ?></td>
  <td><?php echo $dato->fecha_fin; ?></td>
  <td><?php echo $dato->numero_huespedes; ?></td>
  <td><?php echo $dato->precio_total; ?></td>
  <td>
    <a href="crontrolador/editar.php?id=<?php echo $dato->idReservacion; ?>" class="btn btn-warning btn-sm">
      <i class="bi bi-pencil-square"></i>
    </a>
    <a href="crontrolador/eliminar.php?id=<?php echo $dato->idReservacion; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?');">
      <i class="bi bi-trash"></i>
    </a>
  </td>
</tr>
<?php } ?>


  </tbody>
</table>
    </div>
</div>

<br><br><br>

<div class="container-fluid bg-white mt-5">
 <div class="row">
  <div class="col-lg-4 p-4">
   <h3 class="h-font fw-bold fs-3 mb-2">airHNH</h3>
   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea consectetur impedit magnam, sint quod alias, fugit voluptate praesentium laboriosam, dolore repudiandae in perferendis nulla quibusdam earum maxime incidunt totam aliquam.
   </p>
  </div>
  <div class="col-lg-4 p-4"> 
    <h5 class="h-font mb-3">Links</h5>
    <a href="index.php" class="d-inline-block mb-2 text-dark text-decration-none">Pagina principal</a><br>
    <a href="alquilar.php" class="d-inline-block mb-2 text-dark text-decration-none">Alquiler</a><br>
    <a href="sobreNo.php" class="d-inline-block mb-2 text-dark text-decration-none">Sobre nosotros</a><br>
    <a href="Q&A.php" class="d-inline-block mb-2 text-dark text-decration-none">Q&A</a><br>
  </div>
  <div class="col-lg-4 p-4">
    <h5 class="h-font mb-3">Siguenos</h5>
    <a href="#" class="d-inline-block text-dark mb-2 text-decoration-none"><i class="bi bi-twitter-x"></i> Twitter
    </a><br>
    <a href="#" class="d-inline-block text-dark mb-2 text-decoration-none"><i class="bi bi-facebook"></i> Facebook
    </a><br>
    <a href="#" class="d-inline-block text-dark mb-2 text-decoration-none"><i class="bi bi-whatsapp"></i> Whatsapp
    </a><br>
    <a href="#" class="d-inline-block text-dark mb-2 text-decoration-none h-font"><i class="bi bi-telephone-fill"></i> Contactanos (9900-2233)
    </a><br>
  </div>
 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>