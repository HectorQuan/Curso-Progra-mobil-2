<?php
    require './vistas/funciones.php';
    $consulta = obtener_casas();
    $consulta_hoteles = obtener_hoteles();
    $consulta_salas = obtener_salas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquilar</title>
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

<h2 class="mt-2 pt-2 mb-3 text-center fw-bold h-font">Casas</h2>

<div class="container my-4">
  <div id="carouselCasas" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Indicadores -->
    <div class="carousel-indicators">
      <?php
      $i = 0;
      mysqli_data_seek($consulta, 0); // reiniciar puntero por si se usó antes
      while($casa = mysqli_fetch_assoc($consulta)) {
      ?>
        <button type="button" data-bs-target="#carouselCasas" data-bs-slide-to="<?php echo $i; ?>"
          class="<?php echo $i === 0 ? 'active' : ''; ?>"
          aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
          aria-label="Casa <?php echo $i + 1; ?>"></button>
      <?php $i++; } ?>
    </div>

    <!-- Contenido del carrusel -->
    <div class="carousel-inner">
      <?php
      $i = 0;
      mysqli_data_seek($consulta, 0); // volver a recorrer desde el inicio
      while($casa = mysqli_fetch_assoc($consulta)) 
        {
        ?>
        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card shadow mb-4">
                <img src="img/casas/<?php echo $casa['id'];?>.jpg" class="card-img-top" alt="Imagen de casa <?php echo $id; ?>">
                <div class="card-body">
                  <h5 class="card-title h-font""><?php echo $casa['titulo'];?></h5>
                  <h5 class="card-title h-font"><?php echo $casa['descripcion']; ?></h5>
                  <h6 class="mb-4"><?php echo $casa['precio_noche']; ?> L por noche</h6>
                  <div class="features mb-3">
                    <h6 class="mb-1">Características</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $casa['caracteristicas']; ?></span>
                  </div>
                  <div class="extras mb-3">
                    <h6 class="mb-1">Añadidos</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $casa['añadidos']; ?></span>
                  </div>
                  <div class="rating mb-3">
                    <h6 class="mb-1">Valoración</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $casa['calificacion']; ?></span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="reserva.php?id=<?php echo $id; ?>" class="btn btn-sm text-white custom-bg shadow-none">Alquila ahora</a>
                    <a href="detalles.php?id=<?php echo $id; ?>" class="btn btn-sm btn-outline-dark shadow-none">Más detalles</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; } ?>
    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCasas" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCasas" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</div>

<h2 class="mt-2 pt-2 mb-3 text-center fw-bold h-font">hoteles</h2>

<div class="container my-4">
  <div id="carouselhoteles" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Indicadores -->
    <div class="carousel-indicators">
      <?php
      $i = 0;
      mysqli_data_seek( $consulta_hoteles, 0); // reiniciar puntero por si se usó antes
      while($hotel = mysqli_fetch_assoc( $consulta_hoteles)) {
      ?>
        <button type="button" data-bs-target="#carouselhoteles" data-bs-slide-to="<?php echo $i; ?>"
          class="<?php echo $i === 0 ? 'active' : ''; ?>"
          aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
          aria-label="Casa <?php echo $i + 1; ?>"></button>
      <?php $i++; } ?>
    </div>

    <!-- Contenido del carrusel -->
    <div class="carousel-inner">
      <?php
      $i = 0;
      mysqli_data_seek( $consulta_hoteles, 0); // volver a recorrer desde el inicio
      while($hotel = mysqli_fetch_assoc( $consulta_hoteles)) 
        {
        ?>
        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card shadow mb-4">
                <img src="img/hoteles/<?php echo $hotel['id'];?>.jpg" class="card-img-top" alt="Imagen de hotel <?php echo $id; ?>">
                <div class="card-body">
                  <h5 class="card-title h-font""><?php echo $hotel['titulo'];?></h5>
                  <h5 class="card-title h-font"><?php echo $hotel['descripcion']; ?></h5>
                  <h6 class="mb-4"><?php echo $hotel['precio_noche']; ?> L por noche</h6>
                  <div class="features mb-3">
                    <h6 class="mb-1">Características</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $hotel['caracteristicas']; ?></span>
                  </div>
                  <div class="extras mb-3">
                    <h6 class="mb-1">Añadidos</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $hotel['añadidos']; ?></span>
                  </div>
                  <div class="rating mb-3">
                    <h6 class="mb-1">Valoración</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $hotel['calificacion']; ?></span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="reserva.php?id=<?php echo $id; ?>" class="btn btn-sm text-white custom-bg shadow-none">Alquila ahora</a>
                    <a href="detalles.php?id=<?php echo $id; ?>" class="btn btn-sm btn-outline-dark shadow-none">Más detalles</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; } ?>
    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselhoteles" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselhoteles" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</div>

<h2 class="mt-2 pt-2 mb-3 text-center fw-bold h-font">Salas</h2>

<div class="container my-4">
  <div id="carouselsalas" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Indicadores -->
    <div class="carousel-indicators">
      <?php
      $i = 0;
      mysqli_data_seek( $consulta_salas, 0); // reiniciar puntero por si se usó antes
      while($sala = mysqli_fetch_assoc( $consulta_salas)) {
      ?>
        <button type="button" data-bs-target="#carouselsalas" data-bs-slide-to="<?php echo $i; ?>"
          class="<?php echo $i === 0 ? 'active' : ''; ?>"
          aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
          aria-label="Casa <?php echo $i + 1; ?>"></button>
      <?php $i++; } ?>
    </div>

    <!-- Contenido del carrusel -->
    <div class="carousel-inner">
      <?php
      $i = 0;
      mysqli_data_seek( $consulta_salas, 0); // volver a recorrer desde el inicio
      while($sala = mysqli_fetch_assoc( $consulta_salas)) 
        {
        ?>
        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card shadow mb-4">
                <img src="img/salas/<?php echo $sala['id'];?>.jpg" class="card-img-top" alt="Imagen de sala <?php echo $id; ?>">
                <div class="card-body">
                  <h5 class="card-title h-font""><?php echo $sala['titulo'];?></h5>
                  <h5 class="card-title h-font"><?php echo $sala['descripcion']; ?></h5>
                  <h6 class="mb-4"><?php echo $sala['precio_noche']; ?> L por noche</h6>
                  <div class="features mb-3">
                    <h6 class="mb-1">Características</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $sala['caracteristicas']; ?></span>
                  </div>
                  <div class="extras mb-3">
                    <h6 class="mb-1">Añadidos</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $sala['añadidos']; ?></span>
                  </div>
                  <div class="rating mb-3">
                    <h6 class="mb-1">Valoración</h6>
                    <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $sala['calificacion']; ?></span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="reserva.php?id=<?php echo $id; ?>" class="btn btn-sm text-white custom-bg shadow-none">Alquila ahora</a>
                    <a href="detalles.php?id=<?php echo $id; ?>" class="btn btn-sm btn-outline-dark shadow-none">Más detalles</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; } ?>
    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselsalas" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselsalas" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</div>

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

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form>
    <div class="modal-header">
      <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3"></i> Cuenta de usuario
      </h5>
     <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <div class="mb-3">
     <label class="form-label">Correo electronico</label>
     <input type="email" class="form-control">
     </div>

     <div class="mb-4">
     <label class="form-label">Contrasena</label>
     <input type="password" class="form-control shadow-none">
     </div>
     <div class="d-flex align-items-center justify-content-between ">
     <button type="submit" class="btn btn-dark shadow-none">INICIAR</button>
     <a href="javascrip: void(0)" class="text-secundary text-decaration-none">¿Contraseña olvidad?</a>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form>
    <div class="modal-header">
      <h5 class="modal-title d-flex align-items-center">
       <i class="bi bi-person-add fs-3 "></i> Nuevo usuario
      </h5>
     <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
            Aviso: sus datos deben ser similares a los de sus credenciales de ID (targeta de identidad, pasaporte, licencia de conducir, etc)
            Estos se requerieren para evitar suplantacion y/o dar denuncias justificadas.
        </span>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Nombre</label>
               <input type="text" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Correo electronico</label>
               <input type="email" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Numero de telefono</label>
               <input type="number" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">foto</label>
               <input type="file" class="form-control shadow-none">
            </div>
            <div class="col-md-12 ps-0">
               <label class="form-label">Direccion</label>
               <textarea class="form-control" rows="1"></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">numero postal</label>
               <input type="number" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">fecha de nacimiento</label>
               <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Contraseña</label>
               <input type="password" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Confirme Contraseña</label>
               <input type="password" class="form-control shadow-none">
            </div>
        </div>
        </div>
        <div class="text-center my-1">
         <button type="submit" class="btn btn-dark shadow-none">REGISTRARSE</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>