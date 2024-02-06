<?php
require("../connect_db.php");
if (isset($_POST['email']) && !empty($_POST['email']) ) {
	$username = $_POST['email'];
	$sql2=mysqli_query($conect,"SELECT * FROM login WHERE u_cor='$username'");
	
	if($f2=mysqli_fetch_array($sql2)){
	    $pass=$f2[2];
	    $nom=$f2[0];
	    
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "Ubícate";
        $to = $_POST['email'];
        $subject = "Recuperación de contraseña";
        $message = "Cordíal saludo ".$nom."\n"."\n"."Ha solicitado satisfactoriamente su contraseña: ".$pass."\n"."\n"."En caso de que el correo esté en spam: en la parte superior del presente está la opción de <No es spam> para que regrese a la bandeja de entrada"."\n"."\n"."\n"."Para más infomracíon comuníquese con Ubicate a el correo <servicioalcliente@ubicate.space>, vía telefónica o chat al <3023531670>."."\n"."Att: Soporte técnico de Ubícate."."\n"."\n"."\n"."\n"."********************************************************AVISO********************************************************"."\n"."Este mensaje es solamente para la persona a la que va dirigido. Puede contener información  confidencial.No  hay  renuncia  a la confidencialidad o privilegio por cualquier transmisión mala/errónea. Si usted ha recibido este mensaje por error,  le rogamos que borre de su sistema inmediatamente el mensaje así como todas sus copias, destruya todas las copias del mismo de su disco duro y notifique al remitente.  No debe,  directa o indirectamente, usar, revelar, distribuir, imprimir o copiar ninguna de las partes de este mensaje si no es usted el destinatario";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);

        echo '<script>alert("Información enviada... en caso de tardar más de un minuto verificar la sección de spam.")</script> ';
		echo "<script>location.href='../index.php'</script>";
	}else{
	    echo '<script>alert("El correo no se encuentra registrado")</script> ';
		echo "<script>location.href='recuperar.php'</script>";
    	}
}else{
    echo '<script>alert("Problemas con el envío, intentelo más tarde.")</script> ';
	echo "<script>location.href='recuperar.php'</script>";
}
?>