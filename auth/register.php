<?php
     require  './vistas/funciones.php';    
     $ErrorClave = false;
     $ErrorMensage = '';
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
         //var_dump($_POST);
         $nombre     = $_POST['inputFirstName'];
         $edad     = $_POST['inputAge'];
         $telefono     = $_POST['inputPhone'];
         $idUsuario     = $_POST['inputidUsuario'];
         $correo     = $_POST['inputcorreo'];
         $clave     = $_POST['inputPassword'];
         $claveConfirm     = $_POST['inputPasswordConfirm'];
         if($clave != $claveConfirm){
             $ErrorClave = true;
             $tipo_banner = 'alert alert-danger';
             $ErrorMensage = 'La clave ingresada y la confirmacion son distintas';
         }else{
           $ErrorClave = false;
           $ErrorMensage = CrearUsuario($nombre, $edad, $telefono, $idUsuario, $correo, $clave);
           if($ErrorMensage == 'success'){
               $ErrorMensage = 'Registro creado exitosamente';
               $tipo_banner = 'alert alert-success';
               $ErrorClave = true;
           }else{
               $ErrorClave = true;
               $tipo_banner = 'alert alert-danger';
           }
         }
     }   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="css/normalize.css">
</head>
<body class="bg-light">

<main>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form>
    <div class="modal-header">
      <h5 class="modal-title d-flex align-items-center">
       <i class="bi bi-person-add fs-3 "></i> Nuevo usuario
      </h5>
    <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
            Aviso: sus datos deben ser similares a los de sus credenciales de ID (targeta de identidad, pasaporte, licencia de conducir, etc)
            Estos se requerieren para evitar suplantacion y/o dar denuncias justificadas.
        </span>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Usuario</label>
               <input type="text" id="inputidUsuario" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Nombre completo</label>
               <input type="text" id="inputFirstName" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Correo electronico</label>
               <input type="email" id="inputcorreo" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Numero de telfeono</label>
               <input type="phone" id="inputPhone" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">edad</label>
               <input type="number" id="inputAge" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Contraseña</label>
               <input type="password" id="inputPassword" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
               <label class="form-label">Confirme Contraseña</label>
               <input type="password" id="inputPasswordConfirm" class="form-control shadow-none">
            </div>
        </div>
        </div>
        <div class="text-center my-1">
         <button type="submit" class="btn btn-dark shadow-none">REGISTRARSE</button>
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