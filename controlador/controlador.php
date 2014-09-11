
<?php
	
	session_start();
	header("Content-Type: text/html; charset=UTF-8");
		
		if($_POST['nombre'] == 'patty' && $_POST['contrasenia'] == '123456'){
			$_SESSION['nombre'] = $_POST['nombre'];
			echo "Bienvenido,".$_SESSION['nombre'];
			echo "<h1><a href='../vista/salida.php'>Cerrar sesión</a></h1>";
			require("../conexion_BD.php");
			require("../modelo/acceso_consulta.php");
	
	}else{
	//if(!isset($_SESSION['nombre'])):
	echo"Error: no ha iniciado sesión \n";
	echo "<h1><a href='../index.php'>Iniciar sesión </a> </h1>";
	
}
	
