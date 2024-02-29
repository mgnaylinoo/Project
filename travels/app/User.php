<?php 
class User{
	private $conn;
	public function __construct($connection){
		$this->conn = $connection;
	}

	public function create($name, $email, $password){
		try{
			$status = $this->conn->prepare("INSERT INTO users (username,email,password) VALUES (:username,:email,:password)");
			$status->bindParam(":username",$name);
			$status->bindParam(":email",$email);
			$status->bindParam(":password",$password);
			$status->execute();
			return true;
		}catch(Exception $e){
			return false;
		}
	}
	public function getAll(){
		try{
				$status=$this->conn->prepare("SELECT * FROM users");
				$status->execute();


				$users=$status->fetchAll(PDO::FETCH_ASSOC);

				return $users;
		}catch(Exception $e){

		}
	}
	public function getUserById($id){
		try{
			$status = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
			$status->bindParam(":id",$id);
			$status->execute();
			$users = $status->fetch(PDO::FETCH_ASSOC);
			return $users;
		}catch(Exception $e){

		}
	}

	public function update($name, $email, $password, $id){
		try{
			$status = $this->conn->prepare("UPDATE users SET username=:username, email=:email, password=:password WHERE id=:id");
			$status->bindParam(":username", $name);
			$status->bindParam(":email", $email);
			$status->bindParam(":password", $password);
			$status->bindParam(":id",$id);
			$status->execute();
			return true;

		}catch(Exception $e){
			return false;
		}
	}

	public function delete($id){
		try{
				$status=$this->conn->prepare("DELETE from users where id=:id");
				$status->bindParam(":id",$id);
				$status->execute();
				return true;
		}catch(Exception $e){

		}
	}
	public function mustone(){
		try{
			$status = $this->conn->prepare("SELECT count(*) FROM users");
			$status->execute();
			$number_of_rows = $status->fetchColumn();
			if($number_of_rows>1){
				return true;
			}else{
				return false;
			}

		}catch(Exception $e){

		}
	}
}
 ?>