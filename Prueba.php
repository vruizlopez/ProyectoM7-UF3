<?php

	session_start();
	$_SESSION["Nombre"]="";
	$_SESSION["Apellido"]="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<h1>Registro</h1>
	<form action="Prueba.php" method="POST"  NAME="form">
		Nombre:<br><input type "text"  name="Nombre"/> <br/><br/>
		Primer apellido:<br><input type "text"  name="Apellido1"/> <br/><br>
		Segundo Apellido:<br><input type "text"  name="Apellido2"/><br/><br/> 
		Fecha Nacimiento:<br><input type "text"  name="Fecha_Nacimiento"/><br/><br/> 
		Fecha: <input type="date" name="cumpleanios" step="1" value="<?php echo date("Y-m-d");?>">
		Ciudad:<br><input type "text"  name="Ciudad"/><br/><br/> 
		Direccion:<br><input type "text"  name="Direccion"/><br/><br/> 
		Telefono:<br><input type "text"  name="Telefono"/><br/><br/> 
		<input type="submit" value="Registrar"/><br/><br/>
	</form>

	<?php
		try {
        $hostname = "localhost";
        $dbname = "ConfiguradorOnline";
        $username = "root";
        $password = "12345v";
        $connect = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$password");
      	} 
      catch (PDOException $e) {
        echo "Failed to get DB handle: " . $e->getMessage() . "\n";
        header('Location: http://www.example.com/');
        exit;
      }

		if ($connect && isset($_POST['Nombre']) && isset($_POST['Apellido1']) && isset($_POST['Apellido2']) && isset($_POST['Apellido2']) && isset($_POST['Fecha_Nacimiento']) && isset($_POST['Ciudad']) && isset($_POST['Direccion']) && isset($_POST['Telefono'])){
			echo "conexion exitosa. <br />";
			$Nombre= $_POST ['Nombre'];
			$Apellido1= $_POST ['Apellido1'];
			$Apellido2= $_POST ['Apellido2'];
			$Fecha_Nacimiento= $_POST ['Fecha_Nacimiento'];
			$Ciudad= $_POST ['Ciudad'];
			$Direccion= $_POST ['Direccion'];
			$Telefono= $_POST ['Telefono'];

			$consulta="insert into usuarios (nombre,apellido1,apellido2,fechaNacimiento,ciudad,direccion,telefono) values ('$Nombre','$Apellido1','$Apellido2','$Fecha_Nacimiento','$Ciudad','$Direccion','$Telefono',)";
			echo "Hola<br/>";
			$query=$connect->prepare($consulta);
	        $query->execute();
		}
 	?>	
</body>
</html>