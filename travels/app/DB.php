<?php 
//to connect with db
	class DB{
		private $host = "localhost";
		private $dbname = "travels";
		private $username = "root";
		private $password = "";
		private $connection;

		public function connect(){
			try{
				$this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
			return $this->connection;
			}catch(Exception $e){
				
			}
			
		}
	}
 ?>