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
    <div class="contenido_h">
      <?php
      include("conex.php");
      $link=Conectarse();
      $rut=$_GET['rut'];
      $consulta= mysql_query("SELECT * FROM datospersonales WHERE rut ='".$rut."'",$link);
      $origen= mysql_query("SELECT * FROM origenes WHERE origen = (SELECT origen from usuarios where rut='".$rut."')",$link);
      $fila = mysql_fetch_row($consulta);
      $fila_origen = mysql_fetch_row($origen);
       ?>
       <div class="tarjeta_datos">
         <?php echo "<h1>".$fila[1]." ".$fila[2]." ".$fila[3]."</h1>";  ?>
         <?php echo "<h3>Rut: ".$rut."</h3>"; ?>
         <?php echo "<h3>Domicilio: ".$fila[4]."</h3>"; ?>
         <?php echo "<h3>Sexo: ".$fila[5]."</h3>"; ?>
         <?php echo "<h3>Fecha Nacimiento: ".$fila[6]."</h3>"; ?>
         <?php echo "<h3>Origen: ".$fila_origen[1]."</h3>"; ?>
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
