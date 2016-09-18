
<?php 
	//echo str_replace($_SERVER["DOCUMENT_ROOT"],'', str_replace('\\','/',__FILE__ ) );
	//echo "<br>";
	//echo $_SERVER['REQUEST_URI'];
	session_start();
	//require_once("./include/config.php");
	require_once('./models/dbconnect.php');

	if( $conn->conectado() ){
		if( isset($_GET['opt']) ){
			switch ($_GET['opt']) {
				case 'home':
					home();
					break;
				case 'publications':
					home();
					break;
				case 'team':
					team();
					break;
				case 'contact':
					contact();
					break;
				default:
					home();
					break;
			}

		}elseif (isset($_GET['post'])) {
			get_post();
		}
		else{
			home();
		}
	}else{
		echo "error al connectar db";
	}


	function home(){
		$showp = 0;
		$view = 'menupubl.php';
		include('./views/include/front_view.php');
	}



	function team(){
		$showp = 0;
		$view = 'views/team_view.php';
		include('./views/include/front_view.php');
	}


	function contact(){
		$showp = 0;
		$view = 'views/contact_view.php';
		include('./views/include/front_view.php');
	}


	/* GET PUBLICATION */

	function get_post(){
		$showp = 1;
		$view = 'views/post_view.php';
		include('./views/include/front_view.php');
	}


?>	