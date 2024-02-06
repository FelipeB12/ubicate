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

    $query = "SELECT * FROM login where u_id>10 LIMIT 1000000";

    if (isset($_POST['consulta'])) {
        $q = $conn->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM login WHERE u_nom LIKE '%$q%' OR u_cor LIKE '%$q%' OR nom_neg LIKE '%$q%' OR u_pla LIKE '%$q%' OR neg_dir LIKE '%q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
        $salida.="<table border=3 class='tabla_datos'>
                <thead>
                    <tr id='titulo' >
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Negocio</td>
                        <td>Dirección</td>
                        <td>Teléfono</td>
                        <td>Plan</td>
                    </tr>
                </thead>            
        <tbody>";

        while ($fila = $resultado->fetch_assoc()) {
          if($fila['u_id']>10)  {
            $salida.="<tr>
                        <td>".$fila['u_id']."</td>
                        <td>".$fila['u_nom']."</td>
                        <td>".$fila['u_cor']."</td>
                        <td>".$fila['nom_neg']."</td>
                        <td>".$fila['neg_dir']."</td>
                        <td>".$fila['u_telf']."</td>
                        <td>".$fila['u_pla']."</td>
                    </tr>";
          }
        }
        $salida.="</tbody></table>";
    }else{
        $salida.="No coincide con ninguno de los datos ";
    }


    echo $salida;

    $conn->close();
?>