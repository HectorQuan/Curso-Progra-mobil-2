<?php
require './vistas/funciones.php';

$auth = estaAutenticado();
if (!$auth) {
    header('Location: ./auth/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>airHNH</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/normalize.css">
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
      <li class="nav-item">
    <form action="cerrar-sesion.php" method="post">
    <button type="submit" class="btn btn-sm btn-outline-dark shadow-none">
     Cerrar sesión
    </button>
  </form>
 </li>
  </div>
</nav>

<!--Carrucel-->
<div id="carouselHeros" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/IMG/casas/2.jpg" class="d-block w-100" alt="casa">
    </div>
    <div class="carousel-item">
      <img src="/IMG/hoteles/2.jpg" class="d-block w-100" alt="hotel">
    </div>
    <div class="carousel-item">
      <img src="/IMG/salas/2.jpg" class="d-block w-100" alt="sala">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeros" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHeros" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 
<!--Nuestras opciones para usted-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Nuestras opciones para usted</h2>
<div class="container">
  <div class="row">
  <h3 class="text-center">Favoritos</h3>
  <div class="col-lg-4 col-md-6 my-3">    
   <div class="card border-0 shadow">
   <img src="/img/casas/1.jpg" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title h-font">Vivienda de doble nivel, San Pedro Sula</h5>
    <h6 class="mb-4">150.00L por dias</h6>
    <div class="features mb-4">
     <h6 class="mb-1">Caracteristicas</h6>
        <span class="badge bg-light text-dark text-wrap lh-base">
            3 cuartos (uno inabilitado por cuestiones del propiedad). 
        </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            sala espaciosa, picina, balcon.
        </span>
       <!-- <br>-->
        <span class="badge bg-light text-dark text-wrap lh-base">
            cocina electrica solo disponible. 
        </span>
    </div>
    <div class="extras mb-4">
        <h6 class="mb-1">añadidos</h6>
        <span class="badge bg-light text-dark text-wrap lh-base">
            WIFI
        </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            Television
        </span>
       <!-- <br>-->
        <span class="badge bg-light text-dark text-wrap lh-base">
            consola xbox
        </span>
    </div>
    <div class="rating mb-4">
      <h6 class="mb-1">Valoracion</h6>
      <span class="badge bg-light text-dark text-wrap lh-base">
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>

    </div>
   <div class="d-flex justify-content-evenly mb-2">
    <a href="reserva.php" class="btn btn-sm text-white custom-bg shadow-none">Alquila ahora</a>
    <a href="detalles.php" class="btn btn-sm btn-outline-dark shadow-none">Mas detalles</a>
   </div>
   </div>
   </div>
  </div>

  <div class="col-lg-4 col-md-6 my-3">    
   <div class="card border-0 shadow">
   <img src="/img/hoteles/1.jpg" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title h-font">Hotel florencia, Francisco Morazan</h5>
    <h6 class="mb-4">175.00L por dias</h6>
    <div class="features mb-4">
     <h6 class="mb-1">Caracteristicas</h6>
        <span class="badge bg-light text-dark text-wrap lh-base">
            2 camas. 
        </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            balcon, tocador para maquillaje.
        </span>
    </div>
    <div class="extras mb-4">
        <h6 class="mb-1">añadidos</h6>
        <span class="badge bg-light text-dark text-wrap lh-base">
            WIFI
        </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            Television
        </span>
       <!-- <br>-->
        <span class="badge bg-light text-dark text-wrap lh-base">
            servicio de cuarto 24/7
        </span>
    </div>
    <div class="rating mb-4">
      <h6 class="mb-1">Valoracion</h6>
      <span class="badge bg-light text-dark text-wrap lh-base">
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>

    </div>
   <div class="d-flex justify-content-evenly mb-2">
    <a href="reserva.php" class="btn btn-sm text-white custom-bg shadow-none">Alquila ahora</a>
    <a href="detalles.php" class="btn btn-sm btn-outline-dark shadow-none">Mas detalles</a>
   </div>
   </div>
   </div>
  </div>

 <div class="col-lg-4 col-md-6 my-3">    
  <div class="card border-0 shadow">
  <img src="/img/salas/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title h-font">salon para reuniones, Francisco Morazan</h5>
    <h6 class="mb-4">500.00L por evento</h6>
    <div class="features mb-4">
     <h6 class="mb-1">Caracteristicas</h6>
        <span class="badge bg-light text-dark text-wrap lh-base">
            espacio para 15 a 30 personas 
        </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            lugar insonorizado del exterior
        </span>
    </div>
    <div class="extras mb-4">
        <h6 class="mb-1">añadidos</h6>
        <span class="badge bg-light text-dark text-wrap lh-base">
            servicio de logistica
        </span>
        <span class="badge bg-light text-dark text-wrap lh-base">
            decoracion a gusto
        </span>
       <!-- <br>-->
    </div>
    <div class="rating mb-4">
      <h6 class="mb-1">Valoracion</h6>
      <span class="badge bg-light text-dark text-wrap lh-base">
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>
       <i class="bi bi-star-fill text-warning"></i>

    </div>
  <div class="d-flex justify-content-evenly mb-2">
    <a href="reserva.php" class="btn btn-sm text-white custom-bg shadow-none">Alquila ahora</a>
    <a href="detalles.php" class="btn btn-sm btn-outline-dark shadow-none">Mas detalles</a>
  </div>
  </div>
 </div>
</div>

    <div class="col-lg-12 text-center mt-5">
      <a href="alquilar.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Mas opciones >>></a>
    </div>
  </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Lugares por conocer de Honduras</h2>

<div class="container-videos">
 <div class="row">

  <div class="col-lg-6 col-md-2 bg-white shadow p-4 rounded">
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa veniam modi, architecto doloremque expedita nisi ex cupiditate vero atque quam deleniti unde necessitatibus iusto, enim sed. Ratione similique harum sequi.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa veniam modi, architecto doloremque expedita nisi ex cupiditate vero atque quam deleniti unde necessitatibus iusto, enim sed. Ratione similique harum sequi.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa veniam modi, architecto doloremque expedita nisi ex cupiditate vero atque quam deleniti unde necessitatibus iusto, enim sed. Ratione similique harum sequi.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa veniam modi, architecto doloremque expedita nisi ex cupiditate vero atque quam deleniti unde necessitatibus iusto, enim sed. Ratione similique harum sequi.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa veniam modi, architecto doloremque expedita nisi ex cupiditate vero atque quam deleniti unde necessitatibus iusto, enim sed. Ratione similique harum sequi.
   </p>
  </div>

  <div class="col-lg-6 col-md-6 my-4">
   <div class="embed-responsive embed-responsive-21by10" >
   <iframe class="embed-responsive-item" src="/videos/cerro_Aquatico.mp4.mp4"></iframe>
   </div>
   </br>
   <div class="embed-responsive embed-responsive-21by10" >
   <iframe class="embed-responsive-item" src="/videos/Playa.mp4"></iframe>
   </div>
  </div>
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