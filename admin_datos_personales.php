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
          <h3>AGREGAR/MODIFICAR/ELIMINAR</h3>
          <form class="formulario_datos" action="datos_enviados_personales.php" method="post">
            <label for="nombre_usuario">RUT</label>
            <input type="text" name="rut_usuario" value="" placeholder="Rut de usuario..." required>
            <label for="nombre_usuario">NOMBRE</label>
            <input type="text" name="nombre_usuario" value="" placeholder="Nombre de usuario..." required>
            <label for="clave_usuario">APELLIDO PATERNO</label>
            <input type="text" name="apellido_paterno_usuario" value="" placeholder="Apellido paterno..." required>
            <label for="clave_usuario">APELLIDO MATERNO</label>
            <input type="text" name="apellido_materno_usuario" value="" placeholder="Apellido materno..." required>
            <label for="origen_usuario">DOMICILIO</label>
            <input type="text" name="domicilio_usuario" value="" placeholder="Domicilio de usuario..." required>
            <label for="clave_usuario">SEXO</label>
            <input type="text" name="sexo_usuario" value="" placeholder="Sexo de usuario..." required>
            <label for="clave_usuario">FECHA NACIMIENTO</label>
            <input type="text" name="fecha_nacimiento_usuario" value="" placeholder="Fecha nacimiento..." required>
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
            <label for="buscar_rut">RUT USUARIO</label>
            <input type="text" name="buscar_rut" value="" placeholder="Rut de usuario..." required>
            <input class="boton_formularios" type="submit" name="buscar" value="BUSCAR">
          </form>
          <?php
          include("conex.php");
          $link=Conectarse();
          if (isset($_POST['buscar'])) {
            $rut_usuario=$_POST['buscar_rut'];
            $usuario= mysql_query("SELECT * FROM datospersonales WHERE rut ='".$rut_usuario."'",$link);
            if (mysql_num_rows($usuario)==0) {
              echo "<h3>RUT NO ENCONTRADO</h3>";
            }else {
              $fila = mysql_fetch_row($usuario);
              echo "<h3>Rut de usuario: </h3>";
              echo "<p>".$fila[0]."</p>";
              echo "<h3>Nombre de usuario: </h3>";
              echo "<p>".$fila[1]."</p>";
              echo "<h3>Apellido paterno: </h3>";
              echo "<p>".$fila[2]."</p>";
              echo "<h3>Apellido materno: </h3>";
              echo "<p>".$fila[3]."</p>";
              echo "<h3>Domicilio: </h3>";
              echo "<p>".$fila[4]."</p>";
              echo "<h3>Sexo: </h3>";
              echo "<p>".$fila[5]."</p>";
              echo "<h3>Fecha Nacimiento </h3>";
              echo "<p>".$fila[6]."</p>";
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
