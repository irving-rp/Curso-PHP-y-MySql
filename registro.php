<?php 
error_reporting(0);
include 'includes/conecta.php';

if(isset($_POST['registrar'])) {
$mensaje = "";
$nombre = $conecta->real_escape_string($_POST['Nombre']);
$apellidos = $conecta->real_escape_string($_POST['Apellido']);
$telefono = $conecta->real_escape_string($_POST['Telefono']);
$fecha = $conecta->real_escape_string($_POST['Fecha']);
$pedido = $conecta->real_escape_string($_POST['Pedido']);
$user = $conecta->real_escape_string($_POST['Usuario']);
$pass = $conecta->real_escape_string(md5($_POST['Password']));

$validar = "SELECT * FROM usuarios WHERE Usuario = '$user' || Telefono = '$telefono' ";
$validando = $conecta->query($validar);
if($validando->num_rows > 0) {
    $mensaje.="<h5 class='text-danger text-center'>El usuario y/o telefono ya se encuentra registrado</h5>";
}else {

$insertar = "INSERT INTO usuarios (Nombre, Apellidos, Telefono, 
FechaNac, Id_Pedido, Usuario, Password) VALUES ('$nombre','$apellidos','$telefono','$fecha','$pedido','$user','$pass')";
$guardando = $conecta->query($insertar);
if($guardando > 0) {
  $mensaje.="<h5 class='text-success text-center'> Tu registro se realizo con exito</h5>";
}
else{
    $mensaje.="<h5 class='text-danger text-center'> Tu registro no se realizo con exito</h5>";
}
}
}
?>
<DOCTYPE html>
    <html lang="es">
    <head>
      <title>Crear cuenta</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width-device-width, initial-scale= 1">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
      <body>
        <div class="col-sm-12 col-md-12 col-lg-12">
      <h4 class="text-center">Registro</h4>
        <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <input type="text" name="Nombre" placeholder="Nombre" class="form-control" Required>
       <input type="text" name="Apellido" placeholder="Apellidos" class="form-control" Required>
       <input type="text" name="Telefono" placeholder="Telefono" class="form-control" Required>
       <input type="date" name="Fecha"  class="form-control" Required>
       <input type="text" name="Pedido" placeholder="Pedido" class="form-control" Required>
       <input type="text" name="Usuario" placeholder="Usuario" class="form-control" Required>
       <input type="password" name="Password" placeholder="Contraseña" class="form-control" Required>
       <input type="submit" name="registrar" value="registrar" class="btn btn-sm btn-block btn-success">
        </form>
        <?php echo $mensaje ?>
</body>
</html>