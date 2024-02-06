<!DOCTYPE html>

 <?php
  session_start();
  if (@!$_SESSION['u_id']) {
    header("Location: index.php");
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
     <a href="index_ad.php">Bienvenido <strong><?php echo $_SESSION['u_nom'];?></strong></a><a href="desconectar.php"> Cerrar Sesión </a>
    </div>
  <div class="separador" style="margin-bottom: 10px;"></div>
  <nav id="navegador">
    <ul>
	    <li><a href="index.php">Buscar usuarios</a></li>
        <li><a href="unete.php">Registrar </a></li>
	    <li><a href="u_soporte.php">Soporte</a></li>
	 </ul>
	</nav>
	<div class="separador" style="margin-bottom: 10px;"></div>



	<div style="margin-right: 10%; margin-left: 10%; text-align: center;">
  <h3 style="margin-top: 30px;">Buscar usuarios</h3>  <br>
  
	<div class="formulario" style="margin-left: 0%;">
		<label for="caja_busqueda">Buscar</label>
		<input style="font-size: 15px;" type="text" name="caja_busqueda" id="caja_busqueda"placeholder="___________________________________________" autofocus><br><br></input>
	</div>
  
	<div id="datos" style="margin-left: -7%; margin-right: -7%;"></div>
	
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<br><br> 
</div>	
</body>
<?php 
	include ("../footer.php")
?>

</html>