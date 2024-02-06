
<?php

	session_start();
		require("connect_db.php");

		$username=$_POST['mail'];
		$pass=$_POST['pass'];

		$sql2=mysqli_query($conect,"SELECT * FROM login WHERE u_cor='$username'");
		if($f2=mysqli_fetch_array($sql2)){
			if($pass==$f2[8]){
				$_SESSION['u_id']=$f2['u_id'];
				$_SESSION['u_nom']=$f2['u_nom'];
				echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			
				echo "<script>location.href='admin/index_ad.php'</script>";
			}
		}

		$sql=mysqli_query($conect,"SELECT * FROM login WHERE u_cor='$username'");

		if($f=mysqli_fetch_array($sql)){
			if($pass==$f[2]){
				$_SESSION['u_id']=$f2['u_id'];
				$_SESSION['u_nom']=$f2['u_nom'];
				header("Location: usr/u_inscribir.php");
			}else{
				echo '<script>alert("CONTRASEÑA INCORRECTA: si no la recuerdas contáctate con soporte en el área de contactos")</script> ';
			
				echo "<script>location.href='inicio.php'</script>";
			}
		}else{
			
			echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
			
			echo "<script>location.href='inicio.php'</script>";
		}
?>