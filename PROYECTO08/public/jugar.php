<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/proyecto(08).css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PROYECTO-06</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <!-- Menú de navegación. -->
  <?php include "./assets/navSup.php"; ?>
  <?php
  //Me conecto con la base de datos.
  $conector=new mysqli ("localhost","root","","juegos");
  if ($conector-> connect_errno) {
    echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
  }
  else {
  $resultado=$conector->query("SELECT id,nombre,puntuacion FROM usuario where id=1");
  //Sale por pantalla la consulta.
  foreach ($resultado as $fila) {
    echo"<br>ID JUGADOR: ".$fila['id'];
    echo"<br>NOMBRE JUGADOR: ".$fila["nombre"];
    echo"<br>PUNTUACIÓN ACTUAL: ".$fila["puntuacion"];
    echo"<br>";
    }
}
  ?>
  <div class="contenedor2"
  <p>Movimientos realizados</p>
  <div id="mov.realizado" class=""></div>
  <p>Numero Movimientos</p>
  <div id="contador.movimientos" class=""></div>
  <script src="./js/juego.js" charset="utf-8"></script>
</body>
</html>
