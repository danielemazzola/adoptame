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
    <header class="header">
      <div class=contenedor>
       <nav class="barra_nav">
          <div class="circulo_logo">
            <a class="logo" href="../index.html"><h3>AdoptaMe</h3></a>
          </div>
          <div class="iconMenu">
            <img class="icono_menu" src="../assets/images/menu.png"  aria-hidden="true"/>
            <img class="icono_menu1" src="../assets/images/cruzar.png"  aria-hidden="true"/>
          </div>
          <ul class="menu">
            <li><a href="../pages/inicioSesion.php">Inicia sesión</a></li>
            <li><a href="../pages/registroUsuario.php">Registrate</a></li>
            <li><a href="../pages/contact">Contactanos</a></li>
            <li><a href="../pages/quienes_somos">Quienes somos</a></li>
            <li><a href="../pages/foro">Foro</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <form action="../formularios/formularioUsuario.php" method="POST">
    <table class="contenedor_imagenForm">
      <td type="hidden" name="id"></td>
      <?php
      $datoUsuario = array('nombre' =>'Nombre' ,'apellido' =>'Apellido','edad' =>'Edad','email' =>'E-mail','telefono' =>'Telefono' );
      foreach ($datoUsuario as $llave => $valor):
      ?>
      <tr>
        <td class="texto"><?php echo $valor ?>
        </td>
        <td>
          <input class="cuadroTexto" type="text" name=<?php echo $llave ?> required>
        </td>
      </tr>
    <?php endforeach; ?>
      <tr>
        <td class="texto">Sexo
        </td>
        <td>
          <input type="radio" name="sexo" value=1>Hombre
          <input type="radio" name="sexo" value=2>Mujer
        </td>
      </tr>
      <tr>
        <td>Nombre de Usuario
        </td>
        <td>
          <input type="text" name="user" class="cuadroTexto">
        </td>
      </tr>
      <tr>
        <td class="texto">Contraseña
        </td>
        <td>
          <input class="cuadroTexto" type="password" name="contraseña" required>
        </td>
      </tr>
      <tr>
        <td class="texto">Repetir Contraseña
        </td>
        <td>
          <input class="cuadroTexto" type="password" name="repcontraseña" required>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
            <a class="atras" href="../index.html">Atras</a>
        <input class="cuadroTexto" type="submit" name="registrarse" value="Enviar">
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
