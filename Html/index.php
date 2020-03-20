<?php
    $host = 'servidor_bd';
    $user = 'devuser';
    $pass = 'devpass';
    $bd_ = 'sakila';
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
        <h1>Consulta actor</h1>
        <table border="1" >
          
            <tr>
                <td>actor_id</td>
                <td>first_name</td>
                <td>last_name</td>
                <td>last_update</td>
            </tr>
          
            <?php
                $sql = "SELECT * FROM actor limit=25";
                $result = mysqli_query($conexion, $sql);
                
                while($mostrar=mysqli_fetch_array($result)){
                    
            ?>
          
            <tr>
                <td><?php echo $mostrar['actor_id'] ?></td>
                <td><?php echo $mostrar['first_name'] ?></td>
                <td><?php echo $mostrar['last_name'] ?></td>
                <td><?php echo $mostrar['last_update'] ?></td>
            </tr>
            <?php
                }
            ?>            
            
        </table>
	</body>
</html>
