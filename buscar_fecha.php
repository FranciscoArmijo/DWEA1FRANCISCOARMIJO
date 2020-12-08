<?php
include("conex.php");
$link=Conectarse();
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];
$datos_encontrados="";
$fechas= mysql_query("SELECT * FROM transacciones WHERE fecha_transaccion between '".$fecha_inicio."' and '".$fecha_fin."' ",$link);
if (mysql_num_rows($fechas)==0) {
  $mensaje= "<script language='javascript' type='text/javascript'>alert('Fechas no encontradas');</script>";
}else {
  while ($fila = mysql_fetch_array($fechas)) {
    $datos_encontrados .= "ID: ".$fila[0]." Transaccion : ".$fila[1]." Fecha: ".$fila[2]." Rut: ".$fila[3]."\\n";
  }
  $mensaje = "<script language='javascript' type='text/javascript'>alert('".$datos_encontrados."');</script>";
}
echo $mensaje;

 ?>
