<?php
	session_start();
	require_once('../models/config.php');
	require_once('../models/dbconnect.php');
	$conn = new DBconnect(SERVERNAME,DBUSER,DBPASS,DBNAME);
	
if( isset($_POST['title']) && empty($_POST['title']) ){
	echo "<script>alert('Campo: Titulo de post, vacio');javascript:history.back(1);</script>";
	die("");
}
if( isset($_POST['text']) && empty($_POST['text']) ){
	echo "<script>alert('Campo: Texto, vacio');javascript:history.back(1);</script>";
	die("");
}
if( isset($_POST['cat']) && empty($_POST['cat']) ){
	echo "<script>alert('Campo: Seleccione una categoria');javascript:history.back(1);</script>";
	die("");
}

 class uploadImage{
 	public $target_dir;
 	public $target_file;
 	public $ext;
 	public $mime;
 	public $size;
 	public $check;
 	public $nec;

 	function __construct($image, $nec){
 		$this->target_dir = "../img/posts/";
 		$this->target_file = "../img/posts/".basename($_FILES['fileToUpload']['name']);
 		$this->ext = pathinfo($this->target_file,PATHINFO_EXTENSION);
 		$this->check = getimagesize($_FILES['fileToUpload']['tmp_name']);
 		$this->mime = $this->check["mime"]; 		
 		$this->nec = $nec;

 	}

 	public function checkExt(){
 		if( $this->ext == "jpg" || $this->ext == "jpeg" && $this->ext == "png")
 			return true;
 		else
 			return false;
 	}

 	public function checkMime(){
  		if($this->check !== false ){
 			if($this->mime != "image/pjpeg" && $this->mime != "image/jpeg" && $this->mime != "image/png")
	 			return false;
	 		else
	 			return true;	
 		}else{
 			return true;
 		}
 		
 	}

 	public function checkZise(){
 		if($this->size > 500000)
 			return false;
 		else
 			return true;
 	}


 	// GUARDANDO MENSAJE EN EL SERVIDOR E INSERTANDO TITULO, TEXTO EN LA DB
 	public function addImage(){
 		$this->changeName();
 		
 		while(file_exists($this->target_file)){
 			$this->changeName();	
 			
 		}
 		if( move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $this->target_file) ){

 			// INSERTANDO TITULO, TEXTO EN LA BASE DE DATOS
 			$url_image = basename($_FILES['fileToUpload']['name']);
 			if($this->nec->insert_post( $_POST['title'], $url_image, $_POST['text'], $_POST['cat']) ){
 				return true;
 			}else{
 				return false;
 			} 			
 		}
 		else
 			return false;

 	}

 	public function changeName(){
 		$_FILES['fileToUpload']['name'] = rand(100, 10000).".".$this->ext;
 		$this->target_file = $this->target_dir.basename($_FILES['fileToUpload']['name']);
 	}


 	public function deleteImage(){
 		if(file_exists($target_file)){
 			unlink($target_file);
 		}
 		else
 			echo "FIle don't exist";

 	}

 }



 //RECIBIENDO DATOS DEL FORMULARIO

 if( isset($_POST['upload']) ){
  	$imageObj = new uploadImage( $_POST['fileToUpload'],$conn );

 	if( $imageObj->checkExt() && $imageObj->checkMime() ){

 		if( $imageObj->addImage() ){
 			echo "<script>alert('PUBLICACION SUBIDA SATISFACTORIAMENTE');window.location='http://readcode.esy.es/0xc0d3/admin.php';</script>";

 		}else{
 			echo "no agregado";
 		}

 	}else{
 		echo "<script>alert('ERROR: Escoga una image | Formato no permitido');javascript:history.back(1);</script>";
 	}
 
 }else{
 	echo "<script>javascript:history.back(1);</script>";
 }



?>