<!DOCTYPE html>

 <?php
  session_start();
  if (@!$_SESSION['ad_id']) {
    header("Location: administrador.php");
  }
  ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Pon tu negocio en línea" />
<meta name="keywords" content="mosquera, cundinamarca, negocio, microempresa, publicidad" />
<link rel="stylesheet" type="text/css" href="../css/estilo_articulo.css">
<link rel="stylesheet" type="text/css" href="../css/estilo_footer.css">
<link rel="stylesheet" type="text/css" href="../css/estilo_barra.css">
  
  <title>Ubícate</title>
</head>
<body >
	<header id="cabecera">
    <img src="../img/logo.jpg"  style="margin-left: -5px;">
  </header>
   <div style="float: right; margin-top: -25px; margin-right: 1%;">
     <a>Bienvenido <strong><?php echo $_SESSION['nom'];?></strong></a><a href="desconectar.php"> Cerrar Sesión </a>
    </div>
  <div class="separador" style="margin-bottom: 10px;"></div>
  <nav id="navegador">
    <ul>
	        <li><a href="cop_seg/php/index.php">Backup</a></li>
	        <li><a href="index.php">Buscar</a></li>
          <li><a href="unete.php">Registrar </a></li>
          <li><a href="actadmin/act_ad.php">Administradores</a></li>
          <li><a href="actusr/act_ad.php">Usuarios</a></li>
	   </ul>
	</nav>
	<div class="separador" style="margin-bottom: 10px;"></div>

<div style="text-align: center; " > 
 <h2 style=" text-align: center;">Bienvenido </h2>  

</body>
<div style="margin-top: 400px;">
<?php 
	include ("../footer.php");
?>
</div>


