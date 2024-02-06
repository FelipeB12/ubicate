<!doctype html>

  <?php
  session_start();
  if (@!$_SESSION['u_id']) {
    header("Location: u_soporte.php");
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
    <nav id="navegador">
      <ul>
        <li><a href="index.php">Buscar usuarios</a></li>
          <li><a href="unete.php">Registrar</a></li>
          <li><a href="u_soporte.php">Soporte</a></li>
      </ul>
    </nav>
  <div class="separador" style="margin-bottom: 10px;"></div>


  <div style="text-align: center;">
    <p>Planes pequeños negocios:<br><br>
1.  5 productos * (100 pesos del valor diario * 30 días del mes) = 15.000 <br>
2.  10 productos * (90 pesos del valor diario * 30 días del mes) = 27.000 <br>
3.  15 productos * (80 pesos del valor diario * 30 días del mes) = 36.000 <br>
4.  20 productos * (70 pesos del valor diario * 30 días del mes) = 42.000 <br>
5.  25 productos * (60 pesos del valor diario * 30 días del mes) = 45.000 <br>
6.  30 productos * (55 pesos del valor diario * 30 días del mes) = 49.900 <br>
7.  35 productos * (50 pesos del valor diario * 30 días del mes) = 52.500 <br>
8.  40 productos * (50 pesos del valor diario * 30 días del mes) = 60.000 <br>
9.  45 productos * (50 pesos del valor diario * 30 días del mes) = 67.500 <br>
10. 50 productos * (50 pesos del valor diario * 30 días del mes) = 75.000 <br><br><br><br><br><br><br>
</p>
  </div>
    <a href="entrazero.php">Administrador</a>

  </body>
<?php 
  include ("../footer.php")
?>
</html>
