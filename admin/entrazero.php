<!doctype html>

  <?php
  session_start();
  if (@!$_SESSION['u_id']) {
    header("Location: entrazero.php");
  }
  ?>

<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilo_articulo.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo_barra.css"> 
    <title>En Mosquera</title>
  </head>

  <body>
  <header>
    <img src="../img/logo.jpg">
  </header>

  <div style="float: right; margin-top: -25px; margin-right: 1%;">
     <a  href="index_ad.php">Bienvenido <strong><?php echo $_SESSION['u_nom'];?></strong></a><a href="desconectar.php"> Cerrar Sesión </a>
  </div>
   
  <div class="separador" style="margin-bottom: 10px;"></div>
  <div style="text-align: center;">
    <form action="validar.php" method="POST">
      <label style="font-size: 14pt;">Correo: </label><br>
      <input type="email" name="mail" placeholder="__________________________" required autofocus><br>
      <label style="font-size: 14pt; margin-top: 10px;">Contraseña:</label><br>
      <input type="password" name="pass" placeholder="*******************************" required><br>
      <input style="font-size: 14pt; margin-top: 5px;" type="submit" value="Aceptar">
    </form><br>
  </div>

  </body>
<?php 
  include ("../footer.php")
?>
</html>
