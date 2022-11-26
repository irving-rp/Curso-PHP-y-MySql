<?php 
error_reporting(0);

include 'includes/conecta.php';
if(isset($_POST['entrar'])){
$ruser= $conecta->real_escape_string($_POST['usuario']);
$rpass= $conecta->real_escape_string(md5($_POST['pass']));

$consulta="SELECT * FROM usuarios WHERE Usuario = '$ruser' and Password = '$rpass' "; 
if($resultado = $conecta->query($consulta)){
    while($row = $resultado->fetch_array()){
        $userok = $row['Usuario'];
        $passwordok = $row['Password'];
    }
    $resultado->close();
}
$conecta->close();
if(isset($ruser) && isset($rpass)){
    if($ruser == $userok && $rpass == $passwordok){
   $_SESSION['login'] = True;
   $_SESSION['Usuario'] = $usuario;
   header("location:principal.php");
    }
    else { 
      $mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>No se encontraron tus datos</strong> Verifica los datos.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }
}
else{
    $mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>No se encontraron tus datos</strong> Verifica los datos.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";  
}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | VFast</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<style>
   body{
       background: #bd100a;
       background: linear-gradient(to right, #bd100a, #bd100a);
   }
   .bg{
        
        background-image: url(img/user.png);
        background-position: center center;
        background-size: cover;
    }
</style>
</head>
<body>

    <div class="container w-75 bg-light mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-5 rounded">
           
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/logo.png" width="0" alt="">
                </div>

                <h2 class="fw-bold text-center pt-5 mb-5">Bienvenid@</h2>

                <!-- Login-->
            
                <form action="#">
                  
                   
                    <div class="mb-4">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="text" class="form-label">Usuario</label>
                    <input type="text" id="correo" class="form-control" name="usuario">
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="pass" class="form-control" name="pass">
                    </div>
                    
                    <div class="mb-4" form-check>
                        <input type="checkbox" name="connected" class="form-check-input" id="">
                        <label for="connected" class="form-check-label">Recordar usuario</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="entrar" value="Entrar" class="btn btn-primary">Iniciar Sesion</button>
                    </div>

                    <div class="my-3">
                        <span>¿No tienes cuenta? <a href="registro.html">Registrate</a></span> <br>
                        
                        <span><a href="recu.html">¿Olvidaste tu contraseña?</a></span>
                    </div>
                </form>
                

                <!--Redes Sociales-->
                <div class="container" w-100 my-5>
                    <div class="row text-center">
                        <div class="col-12">Iniciar Sesion</div>
                    </div>
                    <div class="row">
                        <div class="col">
                          <button class="btn btn-outline-primary w-100 my-1">
                           <div class="row align-items-center">
                               <div class="col-2 d-none d-md-block">
                                   <img src="img/fb.png" width="32" alt="">
                               </div>

                               <div class="col-12 col-md-10 text-center">
                                   Facebook
                               </div>
                           </div>
                          </button>  
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="img/go.png" width="32" alt="">
                                    </div>
     
                                    <div class="col-12 col-md-10 text-center">
                                        Google
                                    </div>
                                </div>
                               </button>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $mensaje; ?>
     </div>

    <script src="js/bootstrap.min.js"></script>   
</body>
</html>