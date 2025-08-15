<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/normalize.css">
<script src="js/javascript.js" type="text/javascript"></script>
</head>
<body class="bg-light">

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
  </div>
</nav>

<form method="POST" action="check.php"> <!-- Asegúrate de que el archivo se llame así o ajusta -->
    <div class="modal-header">
      <h5 class="modal-title d-flex align-items-center">
      <i class="bi bi-cash"></i> pago de su alquiler
      </h5>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Fecha de pago</label>
               <input type="date" name="fecha_pago" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Metodo de pago</label>
               <input type="text" name="metodo_pago" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Numero de tarjeta</label>
               <input type="number" name="numero_tarjeta" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0">
               <label class="form-label">Numero de seguridad</label>
               <input type="number" name="numero_seguridad" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0">
               <label class="form-label">Fecha de vencimiento</label>
               <input type="date" name="fecha_vencimiento" class="form-control shadow-none">
            </div>
        </div>
        <br>
        </div>
        <div class="text-center my-1">
         <button type="submit" class="btn btn-dark shadow-none">PAGAR</button>
        </div>
</form>

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