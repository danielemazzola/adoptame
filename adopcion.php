<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/style.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <title>AdoptaMe</title>

  </head>

  <body>
    <?php
      session_start();
      if(!isset($_SESSION["usuario"]))
      {
          header("location:../pages/inicioSesion.php?answer=Debes_iniciar_sesion");
      }
     ?>
    <header class="header">
      <div class="contenedor">
       <nav class="barra_nav">
          <div class="circulo_logo">
            <div class=tarjetaUsuario></div>
            <a class="logo" href="../pages/login.php"><h5>AdoptaMe</h5></a>
          </div>

          <div class="iconMenu">
            <img class="icono_menu" src="../assets/images/menu.png"  aria-hidden="true"/>
            <img class="icono_menu1" src="../assets/images/cruzar.png"  aria-hidden="true"/>
          </div>

          <ul class="menu">
            <li class="nombreUsuario"><?php echo "Hola ".$_SESSION["usuario"];?></li>
            <li><a href="../pages/login.php">Home</a></li>
            <li><a href="../pages/adopcion.php">Dar en Adopcion</a></li>
            <li><a href="../pages/miPerfil.php">Mi Perfil</a></li>
            <li><a href="../pages/contactLogin.php">Contactanos</a></li>
            <li><a href="../pages/quienesSomos.php">Quienes somos</a></li>
            <li><a href="../pages/foroLogin.php">Foro</a></li>
            <li><a href="../pages/cierreSesion.php">Cerrar Sesión</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <form action="../formularios/formularioAnimal.php" method="POST" enctype="multipart/form-data">
    <table class="contenedor_imagenForm">
      <td type="hidden" name="id"></td>
      <tr>
        <td>Nombre
        </td>
        <td>
          <input type="text" name="nombre" class="cuadroTexto" required>
        </td>
      </tr>
      <tr>
        <td>Animal
        </td>
        <td>
          <select class="cuadroTexto" name="tipo" required>
            <option></option>
            <option  value="Gato">Gato</option>
            <option  value="Perro">Perro</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Sexo
        </td>
        <td>
          <select class="cuadroTexto" name="sexo" required>
            <option></option>
            <option value="Macho">Macho</option>
            <option value="Hembra">Hembra</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Edad
        </td>
        <td>
          <input type="text" name="edad" class="cuadroTexto" required>
        </td>
      </tr>
      <tr>
        <td>Motivo de la adopcion
        </td>
        <td>
          <textarea type="text" name="motivo" class="cuadroTexto" rows="5" cols="16" required></textarea>
        </td>
      </tr>
      <tr>
        <td>Sube una imagen
        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <div class="file"><input type="file" name="foto" class="upFile"></input></div>
        </td>
        <td>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
        <input id="botones" class="cuadroTexto" type="submit" name="registrarse" value="Enviar">
        <input id="botones" class="cuadroTexto" type="button" name="volver" value="Cancelar" onclick="history.back()">
      </td>
      </tr>
    </table>
  </form>
  <footer>
    <p>Copyright &copy; 2020 todos los derechos reservados.</p>
  </footer>
    <script src="../java/jquery.js"></script>
   </body>
</html>
