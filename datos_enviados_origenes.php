<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gracias por contactarnos</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;300;400&family=Nunito:wght@300;700&display=swap" rel="stylesheet">
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
    <?php
     include("conex.php");
     /*agregar eliminar modificar usuario*/
     $opcion=$_POST['opcion'];
     $origen=$_POST['nombre_origen'];
     $descripcion=$_POST['descripcion_origen'];

     /*buscar usuario*/
     $link=Conectarse();
     if ($opcion=="guardar") {
       if (mysql_query("INSERT INTO origenes(origen,descripcion) values ('".$origen."','".$descripcion."')",$link)) {
         echo "<div class='datos_enviados'>
           <h2>LOS DATOS FUERON ENVIADOS EXITOSAMENTE</h2>
         </div>";
       }else {
         echo "<div class='datos_enviados'>
           <h2>PROBLEMAS AL INSERTAR DATOS</h2>
         </div>";
       }
     }else {
       if ($opcion=="modificar") {
         mysql_query("UPDATE origenes SET origen= '".$origen."',descripcion='".$descripcion."'WHERE origen='".$origen."'",$link);
         echo "<div class='datos_enviados'>
           <h2>LOS DATOS FUERON ACTUALIZADOS EXITOSAMENTE</h2>
         </div>";
       }else {
         mysql_query("DELETE FROM origenes WHERE origen='".$origen."'",$link);
         echo "<div class='datos_enviados'>
           <h2>LOS DATOS FUERON BORRADOS EXITOSAMENTE</h2>
         </div>";
       }
     }


     ?>

  </body>
  <footer>
    <p>
      Cruchaga Montt 760, Quinta normal <br>
      +56930820964<br>
      francisco.j.armijo@gmail.com<br>
    </p>
</html>
