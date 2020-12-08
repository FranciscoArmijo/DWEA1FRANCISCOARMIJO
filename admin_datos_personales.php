<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DATOS PERSONALES</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;300;400&family=Nunito:wght@300;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
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
    <script type="text/javascript">
      function validaRut(){
        var rut = document.getElementById("rut_usuario");
        var valid = document.getElementById("textoValido");
        var rutCompleto = rut.value;
        var rutVector = rutCompleto.split("-");
        rutCompleto = rutVector[0];
        if(rutCompleto.length<8){
          while(rutCompleto.length!=8)
          rutCompleto = "0"+rutCompleto
        }
        var arregloNumeros=[3,2,7,6,5,4,3,2];
        var sum = 0;
        for(var i = 0; i < 8; i++){
          sum += parseInt(rutCompleto[i])*arregloNumeros[i];
        }
        var div = sum/11;
        var entero = Math.floor(div);
        var decimal = div-entero;
        var digito = Math.round((11-(11*(decimal))));
        if(digito == 10){
          digito="k";
        }
        if(digito == 11){
          digito == 0;
        }
        if(digito == rutVector[1]){
          valid.style.color = "#00B108";
          valid.innerHTML = "RUT VALIDO";
        }else {
          valid.style.color = "#B10000";
          valid.innerHTML = "RUT INVALIDO";
        }
      }
    </script>
      <div class="contenido_h">
        <div class="cont_form">
          <h3>AGREGAR/MODIFICAR/ELIMINAR</h3>
          <form class="formulario_datos" action="datos_enviados_personales.php" method="post">
            <label id="textoValido" for="nombre_usuario">RUT</label>
            <input type="text" id="rut_usuario" name="rut_usuario" value="" placeholder="Rut de usuario..." required onkeyup="validaRut()">
            <label for="nombre_usuario">NOMBRE</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" value="" placeholder="Nombre de usuario..." required>
            <label for="clave_usuario">APELLIDO PATERNO</label>
            <input type="text" id="apellido_paterno_usuario" name="apellido_paterno_usuario" value="" placeholder="Apellido paterno..." required>
            <label for="clave_usuario">APELLIDO MATERNO</label>
            <input type="text" id="apellido_materno_usuario" name="apellido_materno_usuario" value="" placeholder="Apellido materno..." required>
            <label for="origen_usuario">DOMICILIO</label>
            <input type="text" id="domicilio_usuario" name="domicilio_usuario" value="" placeholder="Domicilio de usuario..." required>
            <label for="clave_usuario">SEXO</label>
            <input type="text" id="sexo_usuario" name="sexo_usuario" value="" placeholder="Sexo de usuario..." required>
            <label for="clave_usuario">FECHA NACIMIENTO</label>
            <input type="text" id="fecha_nacimiento_usuario" name="fecha_nacimiento_usuario" value="" placeholder="Fecha nacimiento..." required>
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
          <script type="text/javascript">
            $(document).ready(function(){
              $("#rut_usuario").focus();
              $("#rut_usuario").keyup(function(e){
                var url="auto_completar.php";
                $.getJSON(url ,{ _rut : $("#rut_usuario").val()}, function(datosPersonales){
                  $.each(datosPersonales, function(i, persona){
                    $("#nombre_usuario").val(persona.nombre_usuario);
                    $("#apellido_paterno_usuario").val(persona.apellido_paterno);
                    $("#apellido_materno_usuario").val(persona.apellido_materno);
                    $("#domicilio_usuario").val(persona.domicilio_usuario);
                    $("#sexo_usuario").val(persona.sexo_usuario);
                    $("#fecha_nacimiento_usuario").val(persona.fecha_nacimiento_usuario);
                  });
                });
              });
            });
          </script>
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
