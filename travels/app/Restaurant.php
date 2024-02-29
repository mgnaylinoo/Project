<?php
	class Restaurant{
		private $conn;
		public function __construct($connection){
				$this->conn=$connection;
		}

		public function create($name,$price,$phone,$email,$location,$image){
			try{

					$status=$this->conn->prepare("INSERT INTO restaurant (name,price,phone,email,location,image) VALUES (:name,:price,:phone,:email,:location,:image)");

					$status->bindParam(":name",$name);
					$status->bindParam(":price",$price);
					$status->bindParam(":phone",$phone);
					$status->bindParam(":email",$email);
					$status->bindParam(":location",$location);
					$status->bindParam(":image",$image);
					$status->execute();
					return true;

			}catch(Exception $e){

			}
		}

		public function getAll(){
		try{
				$status=$this->conn->prepare("SELECT * FROM restaurant");
				$status->execute();


				$users=$status->fetchAll(PDO::FETCH_ASSOC);

				return $users;
		}catch(Exception $e){

		}
	}

	public function getPostById($postId){
		try{
				$status=$this->conn->prepare("SELECT * FROM restaurant WHERE id=:id");
				$status->bindParam(":id",$postId);
				$status->execute();
				$post=$status->fetch(PDO::FETCH_ASSOC);
				return $post;
		}catch(Exception $e){

		}
	}

	



	}
?>