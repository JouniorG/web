<?php 
	class session{

		function __construct(){
			session_start();
		}



		public function startSession($user){
			$_SESSION = $user;
		}


		public function endSession(){
			session_start();
	        $_SESSION = array();
	        session_regenerate_id(TRUE); 
	        session_destroy();
	        return true;
		}

	}

?>