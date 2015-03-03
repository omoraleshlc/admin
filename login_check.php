<?php

	session_start();
	
	require_once("dbconect.php");
    
	require_once("classes/usuario.php"); // class

	$usuario = new usuario();

	$usuario_form 		= $_POST['username'];	
	$password_form 		= $_POST['passwd'];

	$usuario->selectByUsuario($usuario_form);

	// Do passwords match?
	if($usuario->getPasswd() === md5($password_form)){
		echo "success!";

		// Upload some session variables
		$_SESSION['folio'] 				= $usuario->getFolio();
		$_SESSION['usuario'] 			= $usuario->getUsuario();
		$_SESSION['nombre_completo'] 	= ucwords(strtolower($usuario->getNombre() . " " . $usuario->getaPaterno() . " " . $usuario->getaMaterno()));
		$_SESSION['nombre_corto'] 		= ucwords(strtolower($usuario->getNombre() . " " . $usuario->getaPaterno()));
		$_SESSION['nombre'] 			= ucwords(strtolower($usuario->getNombre()));

	}else{
		echo "something is not right :s";
	}

?>