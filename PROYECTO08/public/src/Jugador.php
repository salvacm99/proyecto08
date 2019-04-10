<?php
/**
 * Jugador
 */
class Jugador
{
  private $conexion=null;
  private $id;
  private $nombre;
  private $apellidos;
  private $edad;
  private $curso;
  private $puntuacion;

  function __construct()
  {
  }
  public function listarjugadores (){
    $consulta="SELECT * FROM usuario where ido=$id";
    $resultado=$this->conexion->query($consulta);

      return $resultado;
  }


  /*
  * Param entrada: array $_POST
  * Param salida: string con el $error
  *               - ""-> sin error
                  - "MSG"-> error encontrado
  */
  public function comprobarCampos($post){
    $error=NULL;
    if(!isset($post)||!isset($post["id"])||!isset($post["Nombre"])||!isset($post["Apellidos"])||!isset($post["Edad"])||!isset($post["Curso"])||!isset($post["Puntuacion"])){
      $error="";
    }elseif($post["id"]==""){
      $error="No has introducido la id";
    }elseif($post["Nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["Apellidos"]==""){
      $error="No has introducido el Apellidos";
    }elseif($post["Edad"]==""){
      $error="No has introducido el Edad";
    }elseif($post["Curso"]==""){
      $error="No has introducido el Curso";
    }elseif($post["Puntuacion"]==""){
      $error="No has introducido el Puntuacion";
    }else{
      $error=false;
      $this->id=$post["id"];
      $this->nombre=$post["Nombre"];
      $this->apellidos=$post["Apellidos"];
      $this->edad=$post["Edad"];
      $this->curso=$post["Curso"];
      $this->puntuacion=$post["Puntuacion"];
    }
    return $error;
  }
  public function conexionBD(){
    $this->conexion = new mysqli("localhost", "root", "", "juegos");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
  public function insertarJugador(){
    $consulta="INSERT INTO usuario (id, Nombre, Apellidos, Edad, Curso, Puntuacion)
                VALUES ($this->id, '$this->nombre', '$this->apellidos', $this->edad, $this->curso, $this->puntuacion)";
    $this->conexion->query($consulta);
  }
}
 ?>
