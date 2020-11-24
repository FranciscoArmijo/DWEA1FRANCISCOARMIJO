<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DATOS PERSONALES</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;300;400&family=Nunito:wght@300;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="menu" id="menu_sup">
      <ul>
        <li><a href="login.php">LOGOUT</a></li>
        <li><a href="contacto.php">CONTÁCTENOS</a></li>
        <li><a href="vision_mision.php">MISIÓN Y VISIÓN</a></li>
        <li><a href="que_hacemos.php">QUE HACEMOS</a></li>
        <li><a href="quienes_somos.php">QUIENES SOMOS</a></li>
        <li><a href="index.php">INICIO</a></li>
        <li><a href="#">ADMINISTRAR TABLAS</a>
          <ul>
            <li><a href="admin_datos_personales.php">DATOS PERSONALES</a></li>
            <li><a href="admin_datos_origenes.php">ORIGENES</a></li>
            <li><a href="transacciones.php">TRANSACCIONES</a></li>
            <li><a href="pagina_admin.php">USUARIOS</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </head>
  <body>
      <div class="contenido_h">
        <div class="cont_form">
          <h3>TRANSACCIONES</h3>
          <?php
          include("conex.php");
          $link=Conectarse();
          $consulta= mysql_query("SELECT * FROM transacciones ",$link);
          echo "<p>";
          while ($fila=mysql_fetch_array($consulta)) {
            echo "Cod: ".$fila[0]." </br> Acción: ".$fila[1]."</br> Fecha: ".$fila[2];
            echo "</br>";
            echo "</br>";
          }
          echo "</p>";
           ?>
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
