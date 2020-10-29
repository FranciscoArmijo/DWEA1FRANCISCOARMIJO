<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contáctenos</title>
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
        <h3>CONTACTENOS</h3>
        <form class="formulario_datos" action="datos_enviados.php" method="get">
          <input type="text" name="Nombre" placeholder="Su nombre…">
          <input type="email" name="Correo" placeholder="Su correo…">
          <textarea name="Mensaje" placeholder="Su Mensaje…"></textarea>
          <input class="boton_formularios" type="submit" name="enviar" value="ENVIAR">
        </form>
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
