
<?php

	session_start();
if($_SESSION['u_id']){	
	session_destroy();
}

	session_start();
		require("../connect_db.php");

		$username=$_POST['mail'];
		$pass=$_POST['pass'];

		$sql2=mysqli_query($conect,"SELECT * FROM admins WHERE ad_email='$username'");
		if($f2=mysqli_fetch_array($sql2)){
			if($pass==$f2[3]){
				$_SESSION['ad_id']=$f2['ad_id'];
				$_SESSION['nom']=$f2['nom'];
				echo '<script>alert("BIENVENIDO ADMINISTRADOR ZERO")</script> ';
			
				echo "<script>location.href='../zero/administrador.php'</script>";
			}else {
				echo '<script>alert("Datos errados")</script> ';
			
				echo "<script>location.href='../index.php'</script>";
			}
		}
		
?>