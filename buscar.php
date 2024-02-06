<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "u494777114_empre";

    $conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM tb_inf LIMIT 1000000";

    if (isset($_POST['consulta'])) {
        $q = $conn->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM tb_inf WHERE Cat_Neg_Nom LIKE '%$q%' OR Cat_Pro LIKE '%$q%' OR Cat_Pre LIKE '%$q%' OR Cat_Des LIKE '%$q%' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
        $salida.="<table border=3 class='tabla_datos'>
                <thead>
                    <tr id='titulo' >
                        <td>Nombre Empresa</td>
                        <td>Producto</td>
                        <td>Precio</td>
                        <td>Dirección</td>
                        <td>Teléfono</td>
                        <td>Descripción</td>
                        <td>Horario</td>
                        <td>Foto</td>          
                    </tr>
                </thead>            
        <tbody>";

        while ($fila = $resultado->fetch_assoc()) {
              if($fila['Cat_Id']){
                
                        $ide =$fila['Cat_Id'];
                        $idu =$fila['Neg_Id'];
                        $nombreneg=$fila['Cat_Neg_Nom'];
                        $nom=$fila['Cat_Pro'];      
                        $narch=$idu.$nombreneg.$nom;

              $path = "usr/files/".$narch;
              if(file_exists($path)){
                $directorio = opendir($path);
                $archivo = readdir($directorio);
              
            $salida.="<tr>
                        <td>".$fila['Cat_Neg_Nom']."</td>
                        <td>".$fila['Cat_Pro']."</td>
                        <td>".$fila['Cat_Pre']."</td>
                        <td>".$fila['Cat_Dir']."</td>
                        <td>".$fila['Cat_Tel']."</td>
                        <td>".$fila['Cat_Des']."</td>
                        <td>".$fila['Cat_hor']."</td>  
                        <td><a href='".$path."/".$archivo."' title='Ver Archivo Adjunto'>Archivo no compatible, clic para ver las fotos<img src='usr/files/$narch/$archivo' width='170' height='20' /></td>                    
                    </tr>";
                    }
               }
        }
        $salida.="</tbody></table>";
    }else{
        $salida.="Lo que buscas no coincide con nuestros datos, por favor, revise la ortografia o use sinónimos. ";
    }

    echo $salida;

    $conn->close();
?>