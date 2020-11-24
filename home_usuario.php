<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Datos Personales</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;300;400&family=Nunito:wght@300;700&display=swap" rel="stylesheet">
    <div class="menu" id="menu_sup">
      <ul>
        <li><a href="index.php">LOGOUT</a></li>
      </ul>
    </div>
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
           <?php echo "<h1>".$fila[1]." ".$fila[2]." ".$fila[3]."</h1>";  ?>
           <?php echo "<h3>Rut: ".$rut."</h3>"; ?>
           <?php echo "<h3>Domicilio: ".$fila[4]."</h3>"; ?>
           <?php echo "<h3>Sexo: ".$fila[5]."</h3>"; ?>
           <?php echo "<h3>Fecha Nacimiento: ".$fila[6]."</h3>"; ?>
           <?php echo "<h3>Origen: ".$fila_origen[1]."</h3>"; ?>
         </div>
         <!--buscar historial-->
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
        $historial= mysql_query("SELECT * FROM transacciones WHERE origen = (select origen from usuarios where nombre ='$usuario')",$link);
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
