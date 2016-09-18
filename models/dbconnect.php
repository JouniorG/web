<?php 

require_once("config.php");

class DBconnect{
	private $host;
	private $user;
	private $pass;
	private $dbname;
	public $pdo;

	function __construct($host, $user, $pass, $dbname){
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbname = $dbname;

		try{
			$this->pdo = new PDO("mysql:dbname=$this->dbname;host=$this->host",$this->user, $this->pass);
		}catch(PDOExceptoin $e){
			die("Error: No fue posible conectar a la base de datos".$e->getMessage() );
		}
	}

	public function conectado(){
		if($this->pdo)
			return true;
		else
			return false;
	}


	public function sql_all_post(){
		//$sql = "SELECT title_post,text_post FROM Post";
		$sql = "SELECT id_post, title_post, text_post, image_post FROM Post where id_post in (SELECT id_post FROM Post ORDER BY id_post DESC) limit 6";

		if( $result = $this->pdo->query($sql) ){
			while($row[] = $result->fetch(PDO::FETCH_ASSOC));
			return $row;
		}
		else 
			return false;
	}


	public function sql_cat_post($cat){
		$sql ="SELECT id_post, title_post, text_post, image_post FROM Post where id_post in (SELECT id_post FROM Post ORDER BY id_post DESC) && category_post='".$cat."' limit 6";

		if( $result = $this->pdo->query($sql) ){
			while( $row[] = $result->fetch(PDO::FETCH_ASSOC) );
			return $row;
		}		
		else
			return false;
	}






	// LOGIN ADMIN AND USERS

	public function get_user($user){
		$sql = "SELECT * FROM Usuario where nickname_usua = '$user'";
		if( $result = $this->pdo->query($sql) ){
			$row = $result->fetch(PDO::FETCH_ASSOC);
			return $row;
		}			
		else{
			return false;
		}
	}





	// INSERT INTO  DATABASE

	public function insert_post($title_post, $image_url,$text_post, $category_post){
		$d = getdate();
        $date = $d['year']."-".$d['mon']."-".$d['mday'];
		$sql = "INSERT INTO Post(title_post, date_post, image_post, text_post, category_post,id_usua)".
			   "VALUE('$title_post','$date', '$image_url', '$text_post', '$category_post', 1 )";
		$ret = $this->pdo->exec($sql);
		if( $ret === false ){
			echo "ERROR: No fue posible ejecutar $sql. " . print_r($pdo->errorInfo() );
		}
		else
			return true;

	}


}

$conn = new DBconnect(SERVERNAME,DBUSER,DBPASS,DBNAME);




?>	