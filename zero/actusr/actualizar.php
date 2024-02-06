<!DOCTYPE html>

 <?php
  session_start();
  if (@!$_SESSION['ad_id']) {
    header("Location: actualizar.php");
  }
  ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Pon tu negocio en línea" />
<meta name="keywords" content="mosquera, cundinamarca, negocio, microempresa, publicidad" />
<link rel="stylesheet" type="text/css" href="../../css/estilo_articulo.css">
<link rel="stylesheet" type="text/css" href="../../css/estilo_footer.css">
<link rel="stylesheet" type="text/css" href="../../css/estilo_barra.css">
  
  <title>Ubícate</title>
</head>
<body >
	<header id="cabecera">
    <img src="../../img/logo.jpg"  style="margin-left: -5px;">
  </header>
   <div style="float: right; margin-top: -25px; margin-right: 1%;">
     <a>Bienvenido <strong><?php echo $_SESSION['nom'];?></strong></a><a href="../desconectar.php"> Cerrar Sesión </a>
    </div>
  <div class="separador" style="margin-bottom: 10px;"></div>
  <nav id="navegador">
    <ul>
			    <li><a href="../cop_seg/php/index.php">Backup</a></li>
          <li><a href="../index.php">Buscar</a></li>
          <li><a href="../unete.php">Registrar </a></li>
          <li><a href="../actadmin/act_ad.php">Administradores</a></li>
          <li><a href="act_ad.php">Usuarios</a></li>
	   </ul>
	</nav>
	<div class="separador" style="margin-bottom: 10px;"></div>

 <div style="text-align: center;">
    <h4>Edición de usuarios</h4>

  <?php
    extract($_GET);
    require("../../connect_db.php");

    $sql="SELECT * FROM login WHERE u_id=$id";
  //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    $ressql=mysqli_query($conect,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
          $id=$row[5];
          $usern=$row[0];
          $contr=$row[2];
          $email=$row[1];
          $pasadmin=$row[4];
          $plan=$row[9];
        }
    ?>
<form action="ejecutaactualizar.php" method="post">
        Id<br><input type="text" name="id" value= "<?php echo $id?>" readonly="readonly"><br>
        Usuario<br> <input type="text" name="usern" value="<?php echo $usern?>"><br>
        Correo usuario<br> <input type="email" name="email" value="<?php echo $email?>"><br>
        Password usuario<br> <input type="text" name="contr" value="<?php echo $contr?>"><br>
        Pago<br> <input type="text" name="plan" value="<?php echo $plan?>"><br>
        
        <br>
        <input type="submit" value="Guardar">
      </form>
</div>
</body>
<?php 
	include ("../../footer.php");
?>