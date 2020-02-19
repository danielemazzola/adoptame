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
    <div class="contenedor_imagen">
      <div class="imagen">
        <img class="imagen" src="../assets/images/perro.jpg">
      </div>
      <div class="descripcion">
        <h3 id="titulo">Titulo</h3>
        <p id="descripcion">Loreo de la ia sido  para hglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de las hojs de Lorem Ipsum.</p>
      </div>
    </div>
    <div class="contenedor_imagen">
      <div class="imagen">
        <img class="imagen" src="../assets/images/perro2.jpg">
      </div>
      <div class="descripcion">
        <h3 id="titulo">Titulo</h3>
        <p id="descripcion">Loreo de la ia sido  para hglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de las hojs de Lorem Ipsum.</p>
      </div>
    </div>
    <div class="contenedor_imagen">
      <div class="imagen">
        <img class="imagen" src="../assets/images/perro1.jpg">
      </div>
      <div class="descripcion">
        <h3 id="titulo">Titulo</h3>
        <p id="descripcion">Loreo de la ia sido  para hglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de las hojs de Lorem Ipsum.</p>
      </div>
    </div>
    <footer>
    <p>Copyright &copy; 2020 todos los derechos reservados.</p>
   </footer>
    <script src="../java/jquery.js"></script>
   </body>
</html>
