<?php
    session_start();
      if (@!$_SESSION['u_id']) {
      header("Location: u_ejecutaactualizar.php");
    }
extract($_POST);
  $id = $_POST['id'];
  $nombre = $_POST['nom'];
  $precio = $_POST['precio'];
  $telefono = $_POST['tel'];
  $direccion = $_POST['dir'];
  $descripcion = $_POST['des'];
  $horario = $_POST['hor'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $ide = $_SESSION['u_id'];

require ("../connect_db.php");

  $sql=("SELECT * FROM login where u_cor = '$email'");
    $query=mysqli_query($conect,$sql);
    $arreglo=mysqli_fetch_array($query);

    if($email==$arreglo[1]){
      if ($pass==$arreglo[2]) {
        $empro = $arreglo[4];
      mysqli_query($conect,"update tb_inf set Cat_Pro='$nombre', Cat_Pre='$precio', Cat_Tel='$telefono', Cat_Dir = '$direccion', Cat_Des='$descripcion', Cat_hor='$horario' where Cat_Id='$id'");

  $resultado = $ide.$empro.$nombre;
  $id_insert = $ide.$empro.$nombre;
  
  if($_FILES["archivo"]["error"]>0){
    echo "No se encontró imágen"; 
    } else {
    
    $permitidos = array("image/png","image/jpeg");
    $limite_kb = 200;
    
    if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024){
      
      $ruta = 'files/'.$id_insert.'/';
      $archivo = $ruta.$_FILES["archivo"]["name"];
      
      if(!file_exists($ruta)){
        mkdir($ruta);
      }
      
      if(!file_exists($archivo)){
        
        $resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
        
        if($resultado){
          echo "Imagen Guardada";
          } else {
          echo "No se guardó Imagen";
        }
        
        } else {
        echo "La imagen ya existe";
      }
      
      } else {
      echo "imagen no permitida o excede el tamaño";
    }
    
  }




      echo '<script>alert("Registro actualizado")</script> ';
      echo "<script>location.href='u_inscribir.php'</script>";    
      }else{
        echo '<script>alert("Contraseña errada")</script> ';
        echo "<script>location.href='u_inscribir.php'</script>";
      }
  }else{
    echo '<script>alert("El correo no coinside")</script> ';
    echo "<script>location.href='u_inscribir.php'</script>";  
  }
?>