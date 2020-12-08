<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Galeria</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;300;400&family=Nunito:wght@300;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <?php
    error_reporting(0);
    if(isset($_GET['origen'])&&($_GET['rut'])){
      $rut=$_GET['rut'];
      $origen=$_GET['origen'];
    }
    if(isset($_POST['origen'])&&($_POST['rut'])){
      $rut=$_POST['rut'];
      $origen=$_POST['origen'];
    }
     ?>
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
    <div class="galeria">
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta1.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>Bolillo metal</h1>
            <p>Bolillo para detalles</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like Bolillo metal">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta2.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>Set metalico</h1>
            <p>Herarmientas metalicas</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like Set metalico">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta3.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>Set 15 pcs</h1>
            <p>15 piezas surtidas</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like Set 15 pcs">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta4.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>Set 30 pcs</h1>
            <p>30 piezas surtidas</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like Set 30 pcs">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta5.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>Pincel Goma</h1>
            <p>PInceles con punta de goma</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like Pincel Goma">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta6.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>Sculpey Firm</h1>
            <p>Arcilla polymerica</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like Sculpey Firm">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta7.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>Sculpey Med</h1>
            <p>Arcilla polymerica</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like Sculpey Med">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta8.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>NSP</h1>
            <p>Plasticera dura</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like NSP">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta9.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>Monster Clay</h1>
            <p>Plasticera Profesional</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like Monster Clay">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
      <div class="contenedor_tarjeta">
        <div class="tarjeta_galeria">
          <div class="tarjeta_frente">
            <img class="imagen_circular" src="img\herramienta10.jpg" alt="">
          </div>
          <div class="tarjeta_back">
            <h1>PLastilina escultor</h1>
            <p>Plasticera Chilena</p>
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
              <input type="hidden" name="like" value="like PLastilina escultor">
              <input type="hidden" name="rut" value="<?php echo $rut?>">
              <input type="hidden" name="origen" value="<?php echo $origen ?>">
              <button class="like" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    include("conex.php");
    $link=Conectarse();
    if (isset($_POST['like'])&&($_POST['rut'])&&($_POST['origen'])) {
      $like=$_POST['like'];
      $rut2=$_POST['rut'];
      $origen2=$_POST['origen'];
      mysql_query("INSERT INTO transacciones(transaccion, rut, origen,fecha_transaccion) values ('".$like."','".$rut2."','".$origen2."', SYSDATE())",$link);
    }
     ?>
  </body>

</html>
