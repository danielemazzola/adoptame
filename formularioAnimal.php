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
$tipo = $_POST["tipo"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
$motivo = $_POST["motivo"];
$imagen = $_FILES["foto"]["name"];
$tipo_imagen = $_FILES["foto"]["type"];
$tamaño_imagen = $_FILES["foto"]["size"];



  //ingresar los valores a la tabla, todos los datos son obligatorios declarados en registroUsuario.php
  $insertar = "INSERT INTO formularioanimal VALUES ('','$nombre',
                                                       '$tipo',
                                                       '$sexo',
                                                       '$edad',
                                                       '$motivo')";



if($tamaño_imagen<=1000000){

  if($tipo_imagen == "image/jpeg" || "image/jpg" || "image/png"){

  //ejecutamos registro en la BD
  $ejecutarInsertar = mysqli_query($link,$insertar);

  //ruta carpeta destino imagen al servidor
  $almacen_imagen = $_SERVER["DOCUMENT_ROOT"] . "/adoptame/assets/images/";

  //movemos la imagen del directorio temporal al directorio escogido
  move_uploaded_file($_FILES["foto"]["tmp_name"], $almacen_imagen . $imagen);

  //si la mascota se registra correctamente
  header("location:../pages/adopcion.php?answer=MascotaCreada");

  }

}else if(!$ejecutarInsertar)
  {
    header("location:../pages/adopcion.php?answer=Error_contacta_Administrador");
  }
  
//cerramos conexion BD
mysqli_close($link);
?>
