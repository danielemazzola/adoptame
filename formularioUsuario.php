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
  echo "Error de conexion con el servidor".$link.CONNECT_ERRNO;
}else
{
  echo "Conexion Exitosa a la base de Datos";
}

//obtenemos los valores del formularios metodo POST
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
$user = $_POST["user"];
$contraseña = $_POST["contraseña"];
$repcontraseña = $_POST["repcontraseña"];
$contraE= MD5($contraseña);

//se confirma la contraseña sea igual a repcontraseña
if($contraseña != $repcontraseña)
{
  header("location: ../pages/registroUsuario.php?answer=Las_contraseñas_no_coinciden");

}else
{

  //ingresar los valores a la tabla, todos los datos son obligatorios declarados en registroUsuario.php
  $insertar = "INSERT INTO usuario VALUES ('','$nombre',
                                              '$apellido',
                                              '$edad',
                                              '$email',
                                              '$telefono',
                                              '$sexo',
                                              '$user',
                        /*Encriptamos pass*/  '$contraE')";
  $ejecutarInsertar = mysqli_query($link,$insertar);
  //si usuario se registra correctamente
  header("location:../pages/registroUsuario.php?answer=Usuario_creado");
  //si usuario ya esta registrado
    if(!$ejecutarInsertar)
    {
      header("location:../pages/registroUsuario.php?answer=Usuario_ya_registrado");
    }
}

//cerramos conexion BD
mysqli_close($link);
?>
