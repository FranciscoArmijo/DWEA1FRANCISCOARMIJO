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
    $consulta= mysql_query("SELECT clave, nivel,rut, origen FROM usuarios WHERE nombre ='".$usuario."'",$link);
    $fila = mysql_fetch_row($consulta);
    $rut= $fila[2];
    $nivel =$fila[1];
    $origen=$fila[3];
    if ($fila[0]==$clave){
      if ($nivel==1) {
        header('location:home_admin.php?rut='.$rut.'&usuario='.$usuario.'&nivel='.$nivel);
        $consulta2=mysql_query("INSERT INTO transacciones (transaccion,fecha_transaccion, rut, origen) values ('Inicio de sesión', SYSDATE(),'".$rut."','".$origen."')",$link);
        exit();
      }else {
        header('location:home_usuario.php?rut='.$rut.'&usuario='.$usuario.'&nivel='.$nivel);
        $consulta2=mysql_query("INSERT INTO transacciones (transaccion,fecha_transaccion, rut, origen) values ('Inicio de sesión', SYSDATE(),'".$rut."','".$origen."')",$link);
        exit();
      }
    }else {
      echo "<h2 class='incorrecto'>clave invalida</h2>";
    }
    /*valida rut*/
    function validarut($rut){
      if(strlen($rut)<10){
        while (strlen($rut)!=10) {
          $rut= "0".$rut;
        }
      }
      $rut_vector=str_split($rut);
      $arreglo_numeros=array(3,2,7,6,5,4,3,2);
      $suma=0;
      for ($i=0; $i < 8; $i++){
        $suma+=$arreglo_numeros[$i]*$rut[$i];
      }
      $div=$suma/11;
      $entero=intval($div);
      $decimal=$div-$entero;
      $digito=(11-(11*($decimal)));
      if (strval($digito)=="10") {
        $digito="k";
      }
      if (strval($digito)=="11") {
        $digito=0;
      }
      $largo_rut=strlen($rut);
      if (strval($digito)==strval($rut[$largo_rut-1])){
        $validar= true;
      }else {
        $validar= false;
      }
      return $validar;
    }
    /*fin valida rut*/
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
