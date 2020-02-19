<?php
//conexion a la base de dato
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDato = "adoptame";
$caracteres = "utf8";

//conectamos a la BD
$link = mysqli_connect($servidor, $usuario, $clave, $baseDeDato);

//comprobamos la conexion
if(!$link)
{
  echo "Error de conexion con el servidor";
}else
{
  echo "Conexion Exitosa a la base de Datos";
}

//obtenemos los valores del formularios metodo POST

$user = $_POST["user"];
$contraseña = $_POST["contraseña"];
$contraE = MD5($contraseña);

//comparamos los parametros con la Base de Datos
$comparar = "SELECT * FROM usuario where user = '$user' and contraseña = '$contraE'";

if($contraseña =! $contraE)
{


}else
{
  //ejecutamos
  $resultado = mysqli_query($link,$comparar);
  //verificamos si el usuario existe
  $fila = mysqli_num_rows($resultado);
}
//creamos condicion de verificacion de ususario
if($fila>0)
{
  //iniciamos la sesion
  session_start();
  $_SESSION["usuario"]=$_POST["user"];
  header("location:../pages/login.php?answer=Bienvenido");
}else
{
  header("location:../pages/inicioSesion.php?answer=Contraseña_incorrecta");
}

//liberamos memoria
mysqli_free_result($usuario);
//cerramos conexion BD
mysqli_close($link);
?>
