<?php
define('DB_NAME','diario');
define('DB_HOST', 'https://cafofo--mateusgoncalve2.repl.co/');
define('DB_PASS','');
define('DB_USER','root');
class Conexao{
	private static $instance;
	public static function getInstance(){
		if(!isset($this->$instance)){
			try {
				$this->$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
				$this->$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
		return $this->$instance;
	}
 	
	public static function prepare($sql){
		return $this->getInstance()->prepare($sql);
	}
}

?>