<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de equipos</title>
    <link rel="stylesheet" href="./css/proyecto(08).css">
  </head>
  <body><!-- Menú de navegación. -->
  <?php include "./assets/navSup.php"; ?>

<?php
//Me conecto con la base de datos.
$conector=new mysqli ("localhost","root","","juegos");
if ($conector-> connect_errno) {
  echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
}
else {
$resultado=$conector->query("select * from usuario");
//Sale por pantalla la consulta.
foreach ($resultado as $usuario) {
  echo"<br>id: ".$usuario["id"];
  echo"<br>Nombre: ".$usuario["nombre"];
  echo"<br>Apellidos: ".$usuario["apellidos"];
  echo"<br>Edad: ".$usuario["edad"];
  echo"<br>Curso: ".$usuario["curso"];
  echo"<br>Puntuacion: ".$usuario["puntuacion"];
  echo"<br>";
  }
}
 ?>
 <!-- contenido -->
 <div class="container">

 </div>
 <!--Footer -->
 <?php include "./assets/footer.html"; ?>
  </body>
</html>
