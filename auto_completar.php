<?php
include("conex.php");
$rut = $_GET["_rut"];
$link=Conectarse();
$consulta = mysql_query("SELECT * FROM datospersonales WHERE rut='".$rut."'",$link);
$datosPersonales = array();
$contar = mysql_num_rows($consulta);
if($contar==0){
  $datosPersonales[] = array('nombre_usuario'=>' ', 'apellido_paterno'=>' ', 'apellido_materno'=>' ', 'domicilio_usuario'=> ' ', 'sexo_usuario'=>' ', 'fecha_nacimiento_usuario' => ' ');
}else {
  while ($fila = mysql_fetch_row($consulta)) {
    $datosPersonales[] = array('nombre_usuario'=>$fila[1], 'apellido_paterno'=>$fila[2], 'apellido_materno'=>$fila[3], 'domicilio_usuario'=> $fila[4], 'sexo_usuario'=>$fila[5], 'fecha_nacimiento_usuario' => $fila[6]);
  }
}
$json_string = json_encode($datosPersonales);
echo $json_string;
 ?>
