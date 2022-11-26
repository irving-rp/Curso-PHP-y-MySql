<?php  

  include 'includes/conecta.php';



?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/main.css">

    <title>Coffe, Cream & Sugar</title>
  </head>
  <body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
    <header class="container-fluid bg-primary d-flex justify-content-center">
        <p class="text-light mb-0 p-2 fs-6">Contactanos: coffecream@gmail.com</p>
    </header>

    <nav  class="navbar navbar-expand-lg navbar-light p-3"  id="menu">
        <div class="container">
          <a class="navbar-brand" href="#">
              <span class="fs-5 text-primary fw-bold">Coffe, Cream & Sugar</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#equipo">Equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-contacto">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro.php">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="datos.php">Tabla</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="btn btn-primary btn-primary-outline-success" type="button"><a href="login.php">Iniciar Sesion</a></button>
            </form>
          </div>

        </div>
      </nav>

    <!--========================================================== -->
                        <!-- SLIDER DE IMAGENES-->
    <!--========================================================== -->
   
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="./img/cafe.jpg" class="d-block w-100" alt="">
          </div>
          
 
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./img/coffe.jpg" class="d-block w-100" alt="...">
          </div>
 

          <div class="carousel-item" data-bs-interval="3000">
            <img src="./img/postre.jpg" class="d-block w-100" alt="...">
          </div>
 
 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>    
    
        
     
    <!--========================================================== -->
                        <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
    <h1 class="p-3 fs-2 border-top border-3">Una cafeteria para deleitar hasta el mas <span class="text-primary">Fino paladar<span/></h1>
     <p class="p-3  fs-4">
         <span class="text-primary">Coffe, Cream & Sugar</span> es la Cafeteria por excelencia en la cual podras degustar desde malteadas, cafes, frappes y postres.
                  
     </p>   
    </section>

   <!--========================================================== -->
                        <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->


<section class="w-100">
    <div class="row w-75 mx-auto" id="servicios-fila-1">       
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="./img/malteada.png" alt="desarrollo"   width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">Malteadas</h3>
                <p class="px-4">Elaborada a base de leche o helado, que puede llevar diferentes frutas y chocolate.</p>
            </div>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <img src="./img/cafe.png" alt="concepto" width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Cafes</h3>
                <p class="px-4">Extensa variedad de cafes desde Cafe Expreso, Americano, Macchiato, Irlandes y Cafe Caribeño.</p>
            </div>
        </div>   
    </div>
    
    <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">       
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <img src="./img/frappe.png" alt="comunicaciones" width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">Frappes</h3>
                <p class="px-4">Diferentes estilos de Frappes como Caffe Vanilla, Captain Crunch, Blanco Mocha y Caramel Mocha.</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="./img/postre.png" alt="seo" width="180" height="160" >

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">Postres</h3>
                <p class="px-4">Contamos con Cupcakes, Snacks dulces y reposteria, Mini pasteles y tartas.</p>
            </div>
        </div>   
    </div>
</section>

<!--========================================================== -->
                        <!-- SECCION ACERCA DE NOSOTROS-->
<!--========================================================== -->

<section>
    <div class="container w-50 m-auto text-center" id="equipo">
        <h1 class="mb-5 fs-2">Somos una Cafeteria que busca <span class="text-primary">satisfacer y deleitar a nuestros clientes</span>.</h1>
        <p class="fs-4 ">Buscamos a personas aptas y capaces de comunicarse de manera fluida, si tu cuentas con esto que esperas, unete a esta pequeña familia.</p>
    </div>

    <div class="mt-5 text-center">
        <img id="img-equipo" src="./img/postres.jpg" alt="equipo">
    </div>

    <div id="local" class="border-top border-2">
        <div class="mapa"> </div>
        <div>
            <div class="wrapper-local">
                <h2>Nos ubicamos en Polanco</h2>
                <h2 class="text-primary mb-4" id="typewriter"></h2>
                <p class="fs-5 text-body">Nuestra sucursal principal se encuentra en polanco ya que es un lugar que se encuentra muy concurrido por personas que buscan un lugar nuevo para conocer. Que esperas para visitarnos no te arrepentiras.</p>
                <section class="d-flex justify-content-start" id="numeros-local">
                    <div>
                        <p class="text-primary fs-5">26</p>
                        <p>Dia</p>
                    </div>
                    <div>
                        <p class="text-primary fs-5">11</p>
                        <p>Noviembre</p>
                    </div>
                    <div>
                        <p class="text-primary fs-5">2022</p>
                        <p>Año</p>
                    </div>
              </section>
            </div>
        </div>
    </div>

</section>



                        <!-- SECCION CONTACTOS-->
<!--=================================Pagina de la cual saque la parte azul al final del formulario https://getwaves.io/ ========================= -->

<section id="seccion-contacto" class="border-bottom border-secondary border-2">
  <div id="bg-contactos">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>


<!--========================================================== -->
                      <!-- CONTENEDOR DEL FORMULARIO -->
<!--========================================================== -->

  <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
      <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="./img/support.png" alt="" class="img-fluid ps-5"></div>
        <h2>Dudas o Sugerencias</h2>
        <p class="fs-5">Escucharemos tus quejas o sugerencias para poder seguir creciendo.</p>
      </div>

     

      <form   method="POST" data-netlify="true" action="#">     
            <div class= "mb-3">           
              <input type="email" class="form-control" id="email" name="email" placeholder="Correo electronico">
            </div>
 
          
            <div class="mb-3">            
              <input type="input" class="form-control" id="name" name="name" placeholder="Nombre">
            </div>
      

            <div class="mb-3">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono">
            </div>

          <div class="mb-3">       
            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Redacta tu queja o sugerencia"></textarea>
          </div>

          <div class="mb-3">
            <button type="submit" class=" btn btn-primary w-100 fs-5" >Enviar</button>
          </div>
      </form>
  
  </div>
</section>


<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->


<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">Coffe, Cream & Sugar &copy; Todos Los Derechos Reservados 2022</p>
  <div id="iconos" >
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>  
  </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
  </body>
</html>