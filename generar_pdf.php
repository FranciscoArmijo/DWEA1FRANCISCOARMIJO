<?php
include('class.ezpdf.php');
include("conex.php");
$link=Conectarse();
$rut = $_POST['rut'];
$id = $_POST['id'];
$consulta= mysql_query("SELECT * FROM datospersonales WHERE rut ='".$rut."'",$link);
$fila = mysql_fetch_row($consulta);

$trans= mysql_query("SELECT * FROM transacciones WHERE id_transaccion ='".$id."'",$link);
$fila_trans = mysql_fetch_row($trans);
/*fromato de pagina*/
$options=array(
			'shadeCol'=>array(0.9,0.9,0.9),
			'xOrientation'=>'center',
			'fontSize'=>6,
			'width'=>500
		);
$pdf=& new  Cezpdf('a4');
$pdf-> selectFont('fonts/Times-Roman.afm');
$datacreator= array(
  'Title'=> 'Resultado PDF',
  'Author'=> 'Referencia',
  'Subjet'=> 'PDF con tablas',
  'Creator'=> ''
);
$pdf->ezImage('img/escultura.jpg', 0, 100, 'none', 'center');
$pdf->ezText($fila[1]." ".$fila[2]." ".$fila[3],24,array('justification'=>'center','spacing'=>'1.0'));
$pdf->ezText("RUT: ".$rut,18,array('justification'=>'center','spacing'=>'1.5'));
$pdf->ezText("Domicilio: ".$fila[4],9,array('justification'=>'center','spacing'=>'1.5'));
$pdf->ezText("Fecha nacimiento: ".$fila[6],9,array('justification'=>'center','spacing'=>'1.0'));
$pdf->setLineStyle(2,'round');
$pdf->line(50,690,550,690);
$pdf->setLineStyle(1,'round');
$pdf->line(50,630,550,630);
$pdf->ezText("ID: ".$id,24,array('justification'=>'center','spacing'=>'2.0'));
$pdf->ezText("Detalle: ".$fila_trans[1],12,array('justification'=>'left','spacing'=>'1.0'));
$pdf->ezText("Fecha: ".$fila_trans[2],12,array('justification'=>'left','spacing'=>'1.0'));
$pdf->ezText("Origen: ".$fila_trans[4],12,array('justification'=>'left','spacing'=>'1.0'));
ob_end_clean();
$pdf->ezStream();
 ?>
