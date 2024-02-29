<?php 
	class Login{
		private $conn;
		public function __construct($connection){
			$this->conn = $connection;
		}

		public function check($email, $password){
			try{
				$status = $this->conn->prepare("SELECT * FROM users WHERE email=:email");
				$status->bindParam(":email", $email);
				$status->execute();
				$result = $status->fetch(PDO::FETCH_ASSOC);
				if($result==""){
					$_SESSION['email'] = "Wrong Email.";
				}else{
					if($password==$result["password"]){
						$_SESSION["auth"] = true;
					}else{
						$_SESSION['password'] = "Wrong password";
					}

				} 
				header("Location: ".$_SERVER['HTTP_REFERER']);
			}catch(Exception $e){
				
			}
		}
	}
 ?>