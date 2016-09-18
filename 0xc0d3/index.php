<?php

include("include/session.php");
$sesion = new session();


	include_once("../models/dbconnect.php");
	$error = 0;
	if(isset($_POST['user']) && $_POST['passwd']){
		
		if( $usuario = $conn->get_user($_POST['user']) ){
			if( $_POST['passwd'] == $usuario['passwd_usua']){
				$sesion->startSession($usuario);
				header("location:admin.php");
				
			}else{
				$error=1;
				include('views/login_view.php');	
			}
		}else{
			$error=1;
			include('views/login_view.php');
		}
	}else{
		include('views/login_view.php');
	}


?>