<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>USUARIOS</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;300;400&family=Nunito:wght@300;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <?php
    $nivel=$_GET['nivel'];
    if ($nivel==1) {
      ?>
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
      <?php
    }else {
      ?>
      <div class="menu" id="menu_sup">
        <ul>
          <li><a href="login.php">LOGOUT</a></li>
          <li><a href="contacto.php">CONTÁCTENOS</a></li>
          <li><a href="vision_mision.php">MISIÓN Y VISIÓN</a></li>
          <li><a href="que_hacemos.php">QUE HACEMOS</a></li>
          <li><a href="quienes_somos.php">QUIENES SOMOS</a></li>
          <li><a href="index.php">INICIO</a></li>
        </ul>
      </div>
      <?php
    }
     ?>
  </head>
  <body>
    <div class="contenedor">
      <?php
      include("conex.php");
      $link=Conectarse();
      $rut=$_GET['rut'];
      $usuario=$_GET['usuario'];
      $consulta= mysql_query("SELECT * FROM datospersonales WHERE rut ='".$rut."'",$link);
      $origen= mysql_query("SELECT * FROM origenes WHERE origen = (SELECT origen from usuarios where nombre='".$usuario."')",$link);
      $fila = mysql_fetch_row($consulta);
      $fila_origen = mysql_fetch_row($origen);
       ?>
      <div class="menu" id="menu_izq">
        <ul>
          <li><a href="enlaces.php">ENLACES</a></li>
          <li><a href=<?php echo "galeria.php?rut=".$rut."&origen=".$fila_origen[0]?>>GALERIA</a></li>
          <li><a href="nuestro_equipo.php">EQUIPO</a></li>
        </ul>
      </div>
      <div class="contenido_h">
         <div class="tarjeta_datos">
           <h2>Bienvenido</h2>
           <?php echo "<h1>".$fila[1]." ".$fila[2]." ".$fila[3]."</h1>";  ?>
         </div>
         <div class="cont_form">
           <a href="#miModal" class="linkModal">MOSTRAR HISTORIAL</a>
         </div>
      </div>
    </div>
    <div id="miModal"class="modal">
      <div class="tarjeta_datos">
        <header>
          HISTORIAL
        </header>
        <?php
        $historial= mysql_query("SELECT * FROM transacciones",$link);
        if (mysql_num_rows($historial)==0) {
          echo "<h3>HISTORIAL NO ENCONTRADO</h3>";
        }else {
          while ($fila = mysql_fetch_array($historial)) {
            echo "<p> ID:  ".$fila['id_transaccion']." Transacción:  ".$fila['transaccion']." </br>
            Fecha:  ".$fila['fecha_transaccion']." Rut: ".$fila['rut']."</br>
            </p>";
            ?>
            <form class="botonPdf"action="generar_pdf.php" method="post">
              <input type="hidden" name="rut" value="<?php echo $fila['rut']; ?>">
              <input type="hidden" name="id" value="<?php echo $fila['id_transaccion']; ?>">
              <input class="boton_formularios" type="submit" name="boton" value="EXPORTAR PDF">
            </form>
            <br>
            <?php
          }
        }
         ?>
         <a href="#" class="linkModal ">CERRAR</a>
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
