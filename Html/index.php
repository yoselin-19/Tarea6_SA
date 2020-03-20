<?php
    $host = 'servidor_bd';
    $user = 'devuser';
    $pass = 'devpass';
    $bd_ = 'Tarea';
    $conexion = mysqli_connect($host, $user, $pass, $bd_);
    
    if($conexion->connect_error){
        echo 'connection failed'. $conexion->connect_error;
    }
    echo 'Sucessfully connected to mysql';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset = "UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mostrar datos</title>
	</head>
	<body>
        <h1>Consulta estudiante</h1>
        <table border="1" >
          
            <tr>
                <td>pais</td>
                <td>nombre</td>
            </tr>
          
            <?php
                $sql = "SELECT * FROM actor;";
                $result = mysqli_query($conexion, $sql);
                
                while($mostrar=mysqli_fetch_array($result)){
                    
            ?>
          
            <tr>
                <td><?php echo $mostrar['pais'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
            </tr>
            <?php
                }
            ?>            
            
        </table>
	</body>
</html>
