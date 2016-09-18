<?php
	
	include("include/session.php");
	$sesion = new session();

	if(!isset($_SESSION['name_usua'])){
		die('ERROR: Ha intentado ingresar a una pagina restringida.');
	}

	include_once('../models/dbconnect.php');
	

	if( $conn->conectado() ){
		if(isset($_GET['do'])){
			switch ($_GET['do']) {
				case 'miinfo':
					miinfo();
					break;
				case 'post':
					post_admin();
					break;
				case 'mispubl':
					mispubl();
					break;
				case 'logout':
					logout($sesion);
					break;
				default:
					miinfo();
					break;
			}
		}else{
			miinfo();
		}
		
	}



	function miinfo(){
		$view = "views/home_admin.php";
		include('./views/include/front_admin.php');		
	}


	function post_admin(){;
		$view = "views/publicar_view.php";
		include('./views/include/front_admin.php');
	}

	function mispubl(){
		$view = "views/mispublicar_view.php";
		include('./views/include/front_admin.php');
	}

	function logout($sesion){
		if( $sesion->endSession() ){
			header("location:../");
		}else{
			echo "Error..";
		}
	}




?>