<?php
	class Post{
		private $conn;
		public function __construct($connection){
				$this->conn=$connection;
		}

		public function create($title,$description,$location,$image){
			try{

					$status=$this->conn->prepare("INSERT INTO posts (title,description,location,image) VALUES (:title,:description,:location,:image)");

					$status->bindParam("title",$title);
					$status->bindParam("description",$description);
					$status->bindParam("location",$location);
					$status->bindParam("image",$image);
					$status->execute();
					return true;

			}catch(Exception $e){

			}
		}

		public function getAll(){
		try{
				$status=$this->conn->prepare("SELECT * FROM posts");
				$status->execute();


				$users=$status->fetchAll(PDO::FETCH_ASSOC);

				return $users;
		}catch(Exception $e){

		}
	}

	public function getPostById($postId){
		try{
				$status=$this->conn->prepare("SELECT * FROM posts WHERE id=:id");
				$status->bindParam(":id",$postId);
				$status->execute();
				$post=$status->fetch(PDO::FETCH_ASSOC);
				return $post;
		}catch(Exception $e){

		}
	}
	public function update($title, $description,$location,$image, $id){
		try{
			$status = $this->conn->prepare("UPDATE posts SET title=:title, description=:description,
			location=:location, image=:image WHERE id=:id");

			$status->bindParam(":title", $title);
			$status->bindParam(":description", $description);
			$status->bindParam(":location", $location);
			$status->bindParam(":image", $image);
			$status->bindParam(":id",$id);
			$status->execute();
			return true;

		}catch(Exception $e){
			return false;
		}
	}
	public function delete($id){
		try{
				$status=$this->conn->prepare("DELETE from posts where id=:id");
				$status->bindParam(":id",$id);
				$status->execute();
				return true;
		}catch(Exception $e){

		}
	}




	}
?>