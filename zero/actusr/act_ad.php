<!DOCTYPE html>

 <?php
  session_start();
  if (@!$_SESSION['ad_id']) {
    header("Location: act_ad.php");
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

<div style="text-align: center; " > 
 <h2 style=" text-align: center;"> Gestionar usuarios</h2>  


        <?php
          require("../../connect_db.php");
          $sql=("SELECT * FROM login WHERE u_id > 10");
          $query=mysqli_query($conect,$sql);

          echo "<table border='1'; class='table table-hover';>";
            echo "<tr class='warning'>";
              echo "<td>**Id**</td>";
              echo "<td>**Usaurio**</td>";
              echo "<td>**Correo**</td>";
              echo "<td>**Password**</td>";
              echo "<td>**Pago**</td>";
              echo "<td>**Editar**</td>";
              echo "<td>**Borrar**</td>";
            echo "</tr>";    
        
           while($arreglo=mysqli_fetch_array($query)){
              echo "<tr class='success'>";
                echo "<td>$arreglo[5]</td>";
                echo "<td>$arreglo[0]</td>";
                echo "<td>$arreglo[1]</td>";
                echo "<td>$arreglo[2]</td>";
                echo "<td>$arreglo[9]</td>";

                echo "<td><a href='actualizar.php?id=$arreglo[5]'>Ir</td>";
              echo "<td><a href='act_ad.php?id=$arreglo[5]&idborrar=2'>Ir</a></td>";   
            echo "</tr>";
          }
          echo "</table>";

            extract($_GET);
            if(@$idborrar==2){
      
              $sqlborrar="DELETE FROM login WHERE u_id=$id";
              $resborrar=mysqli_query($conect,$sqlborrar);
              echo '<script>alert("REGISTRO ELIMINADO")</script> ';
              //header('Location: proyectos.php');
              echo "<script>location.href='act_ad.php'</script>";
            }
        ?> 
</div><br>
</body>
<?php 
	include ("../../footer.php");
?>



