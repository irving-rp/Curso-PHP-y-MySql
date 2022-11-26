<?php 
include 'includes/conecta.php';
$consulta="SELECT * FROM Usuarios";
$guardar = $conecta->query($consulta);


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
       <h3 class="text-center">Tabla Dinamica</h3>
     <div class="table-responsive table-hover" id="tabla">
      <table class="table">
       <thead class="text-muted">
      <th class="text-center">Nombre</th>
      <th class="text-center">Apellidos</th>
      <th class="text-center">Telefono</th>
      <th class="text-center">Fecha Nacimiento</th>
      <th class="text-center">Opciones</th>

       </thead>
       <tbody>
        <?php while($row = $guardar->fetch_assoc()){ ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Apellidos']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['FechaNac']; ?></td>
            <td><a href="#">Editar</a> -  <a href="#">Borrar</a></td>
           </tr> 
         <?php } ?>
      </tbody>

       </table>
          <script src="js/bootstrap.min.js"></script>
      </body>
    </html>
    