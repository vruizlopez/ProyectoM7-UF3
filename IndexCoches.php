<?php

	session_start();
	$_SESSION["nombre"]="";
	$_SESSION["apellido1"]="";
	$_SESSION["apellido2"]="";
	$_SESSION["fecha"]="";
	$_SESSION["ciudad"]="";
	$_SESSION["direccion"]="";
	$_SESSION["telefono"]="";

?>
<!DOCTYPE html>
<html>
<head>
<title>Concesionarios VR</title>
<meta charset="utf-8">
<style>
	.titulo{
		text-align:center;
	}
</style>
</head>
<body>
<h1 class="titulo">Concesionarios VR: todo tipo de vehiculos</h1>
<p>Somos Victor Ruiz y Rubén Arregui, aficionados al mundo del motor y hemos decidido hacer una pagina web de coches en la cual podremos configurar una serie de vehiculos a nuestro gusto. </p>
<?php
print_r($_REQUEST);

$action=$_REQUEST['action'];
if ($action=="") 

    {
    ?>
<form name="formulario" action="IndexCoches.php" method="post">

	<p><b>Nombre: </b><input type="text" size="20" maxlength="30" placeholder="Introduce tu nombre" name="nombre"/></p>
	<p><b>Primer apellido: </b><input type="text" size="20" maxlength="30" placeholder="Introduce tu primer apellido" name="apellido1"/></p>
	<p><b>Segundo apellido: </b><input type="text" size="20" maxlength="30" placeholder="Introduce tu segundo apellido" name="apellido2"/></p>
	<p><b>Fecha de nacimiento: </b><input type="text" size="20" maxlength="30" placeholder="Introduce tu fecha de nacimiento" name="fecha"/></p>
	<p><b>Ciudad: </b><input type="text" size="20" maxlength="30" placeholder="Introduce tu ciudad" name="ciudad"/></p>
	<p><b>Dirección: </b><input type="text" size="20" maxlength="30" placeholder="Introduce tu direccion" name="direccion"/></p>
	<p><b>Telefono: </b><input type="text" size="20" maxlength="30" placeholder="Introduce tu telefono" name="telefono"/></p>
	<input type="submit" name="enviar" value="Enviar datos"/> <br><br>
</form>
  <?php
    } 
	else                
    {
    $nombre=$_REQUEST['nombre'];
    $apellido1=$_REQUEST['apellido1'];
    $apellido2=$_REQUEST['apellido2'];
    $fecha=$_REQUEST['fecha'];
    $ciudad=$_REQUEST['ciudad'];
    $direccion=$_REQUEST['direccion'];
    $telefono=$_REQUEST['telefono'];
    if (($nombre=="")||($apellido1=="")||($apellido2=="")||($fecha=="")||($ciudad=="")||($direccion=="")||($telefono==""))
        {
		echo "Es obligatorio poner todos los campos";
	    }
    }  
	?>

</body>
</html>