<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("../../connect_db.php");
	$sentencia="update login set u_nom='$usern', u_cor='$email', u_pla='$plan', u_cont='$contr' where u_id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($conect,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		//header("location: admin.php");
		
	//	echo "<script>location.href='index_ad.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='act_ad.php'</script>";	
	}
	//$sentencia="update registros set Usr_Nombre='$usern', Usr_Contraseña='$pass', Usr_Correo='$email', Usr_Plan='$plan' where Usr_id='$id'";
?>

