<!DOCTYPE html>

 <?php
  session_start();
  if (@!$_SESSION['ad_id']) {
    header("Location: index.php");
  }
  ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Pon tu negocio en línea" />
<meta name="keywords" content="mosquera, cundinamarca, negocio, microempresa, publicidad" />
<link rel="stylesheet" type="text/css" href="../../../css/estilo_articulo.css">
<link rel="stylesheet" type="text/css" href="../../../css/estilo_footer.css">
<link rel="stylesheet" type="text/css" href="../../../css/estilo_barra.css">
  
  <title>Ubícate</title>
</head>
<body >
  <header id="cabecera">
    <img src="../../../img/logo.jpg"  style="margin-left: -5px;">
  </header>
   <div style="float: right; margin-top: -25px; margin-right: 1%;">
     <a>Bienvenido <strong><?php echo $_SESSION['nom'];?></strong></a><a href="../../desconectar.php"> Cerrar Sesión </a>
    </div>
  <div class="separador" style="margin-bottom: 10px;"></div>
  <nav id="navegador">
    <ul>
          <li><a href="index.php">Backup</a></li>
          <li><a href="../../index.php">Buscar</a></li>
          <li><a href="../../unete.php">Registrar </a></li>
          <li><a href="../../actadmin/act_ad.php">Administradores</a></li>
          <li><a href="../../actusr/act_ad.php">Usuarios</a></li>
     </ul>
  </nav>
  <div class="separador" style="margin-bottom: 10px;"></div>
<div style="text-align: center; margin-left: 20%;margin-right: 20%;">
  
<h4>Instrucciones de copia de seguridad y restauración:</h4>
<p>Resaltado en azúl, está el link donde con un solo click hace la copia de seguridad.<br><br>Y para implementarla la selecionas el en desplegable la de la fecha que desees y das en restaurar, sencillo.<br><br> <strong>IMPORTANTE</strong><br>Basta con un solo click para crear la copia, verificar en el desplegable las creadas, y verificar la restaruación dando click en "Bienvenido Admin".</p>

  <a href="./Backup.php">Realizar copia de seguridad</a>
  <form action="./Restore.php" method="POST">
    <label>Selecciona un punto de restauración</label><br>
    <select name="restorePoint">
      <option value="" disabled="" selected="">Selecciona un punto de restauración</option>
//el php conectara el roll option con las copias de seguridad a restaurar
      <?php
        include_once './Connet.php';
        $ruta=BACKUP_PATH;
        if(is_dir($ruta)){
            if($aux=opendir($ruta)){
                while(($archivo = readdir($aux)) !== false){
                    if($archivo!="."&&$archivo!=".."){
                        $nombrearchivo=str_replace(".sql", "", $archivo);
                        $nombrearchivo=str_replace("-", ":", $nombrearchivo);
                        $ruta_completa=$ruta.$archivo;
                        if(is_dir($ruta_completa)){
                        }else{
                            echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
                        }
                    }
                }
                closedir($aux);
            }
        }else{
            echo $ruta." No es ruta válida";
        }
      ?>
    </select>
    <button type="submit" >Restaurar</button>
  </form>
    
<?php
//incluye el archivo externo dentro del proyecto, si el archivo no existe se ejecuta de todos modos
//include();
//incluye un archivo que debe existir, en caso de no existir o de estar mal ubicado no se seguirá ejecutando el programa 
//require();
//incluye un archivo que debe existir, en caso de no existir o de estar mal ubicado no se seguirá ejecutando el programa PEEEROOO solo lo deja incluir una vez
//require_once();

if(isset($_POST["enviar"])){// nos perminte Recepcionar una variable que sí exista ya que no sea null
  
  require_once("conexion.php");
  require_once("functions.php");

  //se recogen los archivos con "$_FILES[""] lo recepcionamos por el nombre en ["archivo"] y direccionarla con ["name"]
  $archivo =$_FILES["archivo"]["name"];
  //cómo acceder a la carpeta temporal en que se guarda el archivo
  //creamos la nueva variable, tomamos el archivo por el nombre y la redireccionamos la direccion del archivo
  $archivo_copiado = $_FILES["archivo"]["tmp_name"];
  $archivo_guardado = "copia_".$archivo;
  //y ya está el archivo copiado a nuestra carpeta temporal del trabajo personal
  echo $archivo."está en la ruta temporal" .$archivo_copiado;

  if(copy($archivo_copiado , $archivo_guardado )){
    echo "se copio correctamente el archivo a nuestra carpeta de trabajo<br/>";
  }else{
    echo "hubo un error";
  }

  if (file_exists($archivo_guardado)) {
  //echo "si existe una copia";
  // como si existe vamos a realizar las consultas desde aqui
  // fopen es una manera de leer o abrir un archivo en partiular en los parametros el nombre del archivo o variable que lo contenga y la funcion o formato "r" de diminutivo de lectura en ingles
  $fp = fopen($archivo_guardado, "r");
  //y usamos el while para recorrer las filas del archivo y la fucion para leer los datos "$fp es el archivo abierto de la variable, 1000 con la cantidad maxima de columnas introducidas y la manera en que estan separadas"
    while ($datos = fgetcsv($fp, 1000 , ";" )) {
      //y para escribir los archivos se hará con arreglos de la siguiente manera, la cantidad de posiciones que pongamos van a ser la cantidad de colummnas que se van a escribir por fila
      echo $datos[0]. " ". $datos[1]. " ". $datos[2]. " ". $datos[3]. " ". $datos[4]. "<br/>";
      $resultado = insertar_datos($datos[0],$datos[1],$datos[2],$datos[3]);
      if ($resultado) {
        echo "se insertaron los datos<br/>";
      }else{
        echo "no se insertaron los datos<br/>";
      }
    }
  }else{
    echo "no existe el archivo copiado";
  }
  //ahora vamos a manipular el archivo
  //creamos una variable de lectura
}

//echo "<br/>por aquí se subirá un archivo csv a la base de datos mysqli";
?>



    <!-- el "enctype="multipart/form-data""es para recepcionar de manera correcta -->
    <form action="index.php"method="POST" enctype="multipart/form-data">
      <input type="file" name="archivo">
      <input type="submit" name="enviar" value="Subir Archivo">
    </form>



</div>
<?php 
  include ("../../../footer.php");
?>



