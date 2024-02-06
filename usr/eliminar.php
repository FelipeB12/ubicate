<?php
	
	require ("../connect_db.php");

 session_start();
    if (@!$_SESSION['u_id']) {
      header("Location: u_actualizar.php");
    }
    $idu=$_SESSION['u_id']
 
	$ide = $_GET['ide'];
	
	$sql=("SELECT * FROM tb_inf where Cat_Id = $ide");
       $ressql=mysqli_query($conect,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
          $nombreneg=$row[0];
          $nom=$row[4];
        }
        $narch=$idu.$nombreneg.$nom;
      
  
  eliminarDir('files/'.$narch);
  
  function eliminarDir($carpeta)
  {
    foreach(glob($carpeta . "/*") as $archivos_carpeta)
    {
      if (is_dir($archivos_carpeta))
      {
        eliminarDir($archivos_carpeta);
      }
      else
      {
        unlink($archivos_carpeta);
      }
    }
    rmdir($carpeta);
  }
              
	
?>

