<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validar Clave</title>
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
    <?php
    include("conex.php");
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    $link=Conectarse();
    $consulta= mysql_query("SELECT clave, nivel,rut FROM usuarios WHERE nombre ='".$usuario."'",$link);
    $fila = mysql_fetch_row($consulta);
    $rut= $fila[2];
    $nivel =$fila[1];
    if ($fila[0]==$clave){
      if ($nivel==1) {
        header('location:pagina_admin.php?rut='.$rut);
        exit();
      }else {
        header('location:datos_personales.php?rut='.$rut);
        exit();
      }
    }else {
      echo "<h2 class='incorrecto'>clave invalida</h2>";
    }

     ?>
  </body>
  <footer>
    <p>
      Cruchaga Montt 760, Quinta normal <br>
      +56930820964<br>
      francisco.j.armijo@gmail.com<br>
    </p>
  </footer>
</html>
