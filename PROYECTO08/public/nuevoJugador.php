<?php
  require "./src/Jugador.php";
  $jugador = new Jugador();
  $error=$jugador->comprobarCampos($_POST);
  $BD=$jugador->conexionBD();
  $jugador=$jugador->insertarJugador();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo jugador</title>
    <link rel="stylesheet" href="./css/proyecto(08).css">
  </head>
  <body>
    <!-- Menú de navegación. -->
    <?php include "./assets/navSup.php"; ?>
    <!-- Error. -->
    <?php if (isset($error)) {
      echo "$error";
    } ?>
    <h1>Nuevo Jugador</h1>
    <!-- Formulario de inserción. -->
    <form class="formNBA" action="nuevoJugador.php" method="post">
      <div class="grupoFormItem">
        <label for="id">ID:</label>
        <input type="text" name="id" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Apellidos">Apellidos:</label>
        <input type="text" name="Apellidos" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Edad">Edad:</label>
        <input type="text" name="Edad" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Curso">Curso:</label>
        <input type="text" name="Curso" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Puntuacion">Puntuacion:</label>
        <input type="text" name="Puntuacion" value="">
      </div>
      <!-- Botón de inserción. -->
      <div class="grupoFormItem">
        <input type="submit" name="Insert" value="Insert">
      </div>
    </form>
  </body>
</html>
