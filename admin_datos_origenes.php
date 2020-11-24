<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ORIGENES</title>
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
            <li><a href="datos_origenes.php">ORIGENES</a></li>
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
        <h3>AGREGAR/MODIFICAR/ELIMINAR</h3>
        <form class="formulario_datos" action="datos_enviados_origenes.php" method="post">
          <label for="nombre_origen">ORIGEN</label>
          <input type="text" name="nombre_origen" value="" placeholder="Nombre de origen..." required>
          <label for="descripcion_origen">DESCRIPCIÓN</label>
          <input type="text" name="descripcion_origen" value="" placeholder="Descripción de origen..." required>
          <div class="contenido_h">
            <label for="guardar">GUARDAR</label>
            <input class="selector icono_gaurdar" type="radio" name="opcion" value="guardar">
            <label for="modificar">MODIFICAR</label>
            <input class="selector icono_modificar" type="radio" name="opcion" value="modificar">
            <label for="eliminar">ELIMINAR</label>
            <input class="selector icono_eliminar" type="radio" name="opcion" value="eliminar">
          </div>
          <input class="boton_formularios" type="submit" name="guardar" value="EJECUTAR">
        </form>
      </div>
      <div class="cont_form">
        <h3>BUSCAR</h3>
        <form class="formulario_datos" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
          <label for="buscar_origen">ORIGEN</label>
          <input type="text" name="buscar_origen" value="" placeholder="Nombre de origen..." required>
          <input class="boton_formularios" type="submit" name="buscar" value="BUSCAR">
        </form>
        <?php
        include("conex.php");
        $link=Conectarse();
        if (isset($_POST['buscar'])) {
          $buscar_origen=$_POST['buscar_origen'];
          $origen= mysql_query("SELECT * FROM origenes WHERE origen ='".$buscar_origen."'",$link);
          if (mysql_num_rows($origen)==0) {
            echo "<h3>ORIGEN NO ENCONTRADO</h3>";
          }else {
            $fila = mysql_fetch_row($origen);
            echo "<h3>Nombre de origen: </h3>";
            echo "<p>".$fila[0]."</p>";
            echo "<h3>Descripción: </h3>";
            echo "<p>".$fila[1]."</p>";
          }
        }
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
