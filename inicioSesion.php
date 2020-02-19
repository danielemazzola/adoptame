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
      <div class="contenedor">
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
    <form method="POST" action="../formularios/formularioLogin.php">
    <table class="contenedor_imagenForm">
      <tr>
        <td class="texto">Usuario
        </td>
        <td>
          <input class="cuadroTexto" type="text" name="user" required>
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
        <td>
        </td>
        <td>
        <input class="cuadroTexto" type="submit" name="login" value="Entrar">
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
