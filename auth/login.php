<?php
require './vistas/funciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['inputcorreo'] ?? '';
    $clave = $_POST['inputPassword'] ?? '';

    $resp = Login($usuario, $clave);

    if (isset($resp['idUsuario'])) {
        session_start();
        $_SESSION['idUsuario'] = $resp['idUsuario'];
        $_SESSION['login'] = true;
        $_SESSION['nombre'] = $resp['nombre'];
        $_SESSION['correo'] = $resp['correo'];
        $_SESSION['telefono'] = $resp['telefono'];

        header('Location: /index.php');
        exit;
    }
}

$auth = estaAutenticado();
if ($auth) {
    header('location: /index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/normalize.css">
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
<main>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form method="POST">
    <div class="modal-header">
      <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3"></i> Cuenta de usuario
      </h5>
    </div>
    <div class="modal-body">
     <div class="mb-3">
     <label class="form-label">Usuario</label>
     <input type="text" id="inputcorreo" class="form-control">
     </div>

     <div class="mb-4">
     <label class="form-label">Contrasena</label>
     <input type="password" id="inputPassword" class="form-control shadow-none">
     </div>
     <div class="d-flex align-items-center justify-content-between ">
     <button type="submit" class="btn btn-dark shadow-none">Log</button>
     <a href="javascrip: void(0)" class="text-secundary text-decaration-none">¿Contraseña olvidad?</a>
       <a href="register.php">necesitas una cuenta? registrate!</a>
      </div>
      </div>
      </form>
    </div>
  </div>
</main>

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