<?php
	$usuario=$_POST['usuario'];
	$email=$_POST['email'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$numero=$_POST['numero'];
	$passA= 'admin';
	$neg =$_POST['nneg'];
	$dir = $_POST['dir'];
	$plan = $_POST['plan'];
require ("connect_db.php");

$checkemail=mysqli_query($conect,"SELECT * FROM login WHERE u_cor='$email'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
				mysqli_query($conect,"INSERT INTO login VALUES('$usuario','$email','$pass','$numero','$neg','','','$dir','$passA','$plan')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}	


?>





