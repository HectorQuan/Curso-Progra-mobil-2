<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A</title>
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

<div class="container-info availability-form">
 <div class="row">
  <div class="col-lg-11 col-md-2 bg-white shadow p-4 rounded">
    <h4 class="mt-2 pt-2 mb-3 text-center fw-bold h-font">¿Como puedo alquilar mas de un cuarto?</h4>
   <p class="text-center"> por los momentos, no es posible, solo una reservacion o alquilacion por pago.
   </p>

   <h4 class="mt-2 pt-2 mb-3 text-center fw-bold h-font">¿como puedo confiar en las casas que alquil?</h4>
   <p class="text-center"> no se preocupe, nuetros clietes de alquiler siempre nos proveen de la suficiente informacion para asegurar que su
    experiencia en casa de otros se segura y comoda.
   </p>

   <h4 class="mt-2 pt-2 mb-3 text-center fw-bold h-font">¿cual es el plazo de cancelacion de un alquiler o reserva?</h4>
   <p class="text-center"> tiene un plazo de dos semanas para cancelar se transaccion, pero solo le devolvemos el dinero en caso de daños a
    su persona o que en caso de estafa (que los inquilinos originales no proveyeron lo que prometieron).
   </p>

   <h4 class="mt-2 pt-2 mb-3 text-center fw-bold h-font">¿A que numero debo contactar para una queja si los inquilinos de una casa no responden?</h4>
   <p class="text-center"> llame al <a class="h-font text-dark">9900-2233</a> para ponerce en contacto con uno de nuestros asistentes de compañia 24/7, si no puede proveerle una
    respuesta satisfactoria, espere a que lo llamemos al siguiente dia para darle una respuesta mas satisfactoria.
   </p>
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