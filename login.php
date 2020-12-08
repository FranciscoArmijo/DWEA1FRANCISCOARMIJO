<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log-In</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;300;400&family=Nunito:wght@300;700&display=swap" rel="stylesheet">
    <div class="menu" id="menu_sup">
      <ul>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="contacto.php">CONTÁCTENOS</a></li>
        <li><a href="vision_mision.php">MISIÓN Y VISIÓN</a></li>
        <li><a href="que_hacemos.php">QUE HACEMOS</a></li>
        <li><a href="quienes_somos.php">QUIENES SOMOS</a></li>
        <li><a href="index.php">INICIO</a></li>
      </ul>
    </div>
  </head>
  <body>
    <div class="contenido">
      <div class="cont_form">
        <h3>LOG-IN</h3>
        <form class="formulario_datos" action="validar_clave.php" method="post">
          <input id="usuario" type="text" name="usuario" placeholder="Nombre usuario" required>
          <input id="clave" type="password" name="clave" placeholder="Su clave" required>
          <input class="boton_formularios" type="submit" name="entrar" value="ENTRAR">
          <p class="warning" id="warning"></p>
        </form>
      </div>
    </div>
    </div>
  </body>
  <footer>
    <p>
      Cruchaga Montt 760, Quinta normal <br>
      +56930820964<br>
      francisco.j.armijo@gmail.com<br>
    </p>
  </footer>
</html>
