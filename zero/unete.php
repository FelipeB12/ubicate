
<!DOCTYPE html>
 <?php
  session_start();
  if (@!$_SESSION['ad_id']) {
    header("Location: unete.php");
  }
  ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Pon tu negocio en línea" />
<meta name="keywords" content="mosquera, cundinamarca, negocio, microempresa, publicidad" />
<link rel="stylesheet" type="text/css" href=../css/estilo_articulo.css">
<link rel="stylesheet" type="text/css" href="../css/estilo_footer.css">
<link rel="stylesheet" type="text/css" href="../css/estilo_barra.css">

	<title>Ubícate</title>
</head>
<body>
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

<form method="post" action="" >
    <center><h3>Registro</h3><br>
      <label>Ingresa tu nombre:</label><br>
      <input type="text" name="usuario" placeholder="Pepito Pérez..." required><br>
      <label>Ingresa tu email:</label><br>
      <input type="email" name="email" required placeholder="pepito@mail.com..."><br>
      <label>Ingresa tu Password:</label><br>
      <input type="password" name="pass" required placeholder="********"><br>
      <label>Repite tu contraseña:</label><br>
      <input type="password" name="rpass" required placeholder="********"><br>
      <label>Ingresa tu teléfono:</label><br>
      <input type="text" name="numero" placeholder="xxx-xxx-xx-xx" required><br>
      <label>Ingresa el nombre de tu negocio:</label><br>
      <input type="text" name="nneg" required placeholder="______________________________"><br>
      <label>Ingresa la direccion de tu establecimineto:</label><br>
      <input type="text" name="dir" placeholder="xxx-xxx-xx-xx" required><br>
      <label>Ingrese el plan y la fecha:</label><br>
      <input type="text" name="plan" placeholder="xxx-xxx-xx-xx" required><br><br>
      <input style="font-size: 15px;" type="submit" name="submit" value="Registrarse"><br>
	</center>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?> 

</body>
	<?php 
		include ("../footer.php")
	?>
</html>