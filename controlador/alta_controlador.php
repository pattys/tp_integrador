<?php
	require('../conexion_BD.php');
	
	$nombre = $_POST['nomcli'];
	$apellido = $_POST['apecli'];
	$edad = $_POST['edad'];
	////////no andaaaaaaa
	if(empty ($nombre)){
		if(empty ($apellido)){
			if(empty ($edad)){
				
			echo"se guardo correctamente en la BD";
				}
			}
			
			
			}else
			
			echo"ingresar datos";
			

?>
