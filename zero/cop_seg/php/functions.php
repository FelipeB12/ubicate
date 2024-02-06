<?php
//desde aquí vamos a insertar los datos
//usando las variables de la funcion
function insertar_datos($user,$password,$email,$pasadmin){
		global $conexion;
	$sentencia = "insert into login (user,password,email,pasadmin) values ('$user','$password','$email','$pasadmin')";
	$ejecutar = mysqli_query($conexion,$sentencia);
	return $ejecutar;
}
?>