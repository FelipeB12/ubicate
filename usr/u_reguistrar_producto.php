<?php
      session_start();
      if (@!$_SESSION['u_id']) {
      header("Location: index_usuario.php");
    }
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $telefono = $_POST['tel'];
  $direccion = $_POST['dir'];
  $descripcion = $_POST['des'];
  $horario = $_POST['hor'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $ide = $_SESSION['u_id'];

  require("../connect_db.php");

  $sql = mysqli_query($conect,"SELECT * FROM login WHERE u_cor='$email'");
  $informacion=mysqli_fetch_array($sql);
    if($pass==$informacion[2]){
      $id = $informacion[6];
      $empro = $informacion[4];

      mysqli_query($conect,"INSERT INTO tb_inf VALUES('$empro','','$ide','$telefono','$nombre','$direccion','$precio','$descripcion','$horario')");
      //echo ' <script language="javascript">alert("Producto registrado con éxito");</script> ';


  $Cat_Id= mysqli_query($conect,"select Cat_Id from tb_inf where Cat_Neg_Nom ='$empro',Cat_Pro= '$nombre',Cat_Des= '$descripcion')");
  echo $Cat_Id;

      $resultado = $ide.$empro.$nombre;
  $id_insert = $ide.$empro.$nombre;
  
  if($_FILES["archivo"]["error"]>0){
    echo "Error al cargar archivo"; 
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
          echo "Archivo Guardado";
          } else {
          echo "Error al guardar archivo";
        }
        
        } else {
        echo "Archivo ya existe";
      }
      
      } else {
      echo "Archivo no permitido o excede el tamaño";
    }
    
  }

     // echo "<script>location.href='u_inscribir.php'</script>";
    }else{
      //echo ' <script language="javascript">alert("Producto no registrado con éxito, verifique sus datos");</script> ';
      //echo "<script>location.href='u_inscribir_new.php'</script>";
    }
?>
