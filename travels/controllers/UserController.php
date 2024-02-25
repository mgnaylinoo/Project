<?php
session_start();
include "../app/DB.php";
include "../app/User.php";

$db = new DB();
$connection = $db->connect();

$user = new User($connection);

if(isset($_POST['username'])){
	$name=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	if($name == "" | $email =="" | $password ==""){
		if($name == ""){
			$_SESSION["username"]="Username must not be empty!";
		}
		if($email == ""){
			$_SESSION["email"]="Email must not be empty!";
		}
		if($password == ""){
			$_SESSION["password"]="Password must not be empty!";
		}
		header("Location:".$_SERVER['HTTP_REFERER']);
	}else{
		unset($_SESSION['username']);
		unset($_SESSION['email']);
		unset($_SESSION['password']);

		if($_POST['action'] == "add"){
			$res = password_hash($password,PASSWORD_BCRYPT);
			$user->create($name,$email,$res);

			 $_SESSION['status'] = "User created sucessfully.";
			 $_SESSION['expire']=time();
			 header("Location:".$_SERVER['HTTP_REFERER']);


		}else if($_POST['action']=="update"){
			$res = password_hash($password,PASSWORD_BCRYPT);
			$userid = $_POST['userId'];
			$status = $user->update($name, $email, $res, $userid);

			if($status){
				
				$_SESSION['status'] = "User updated successufully.";
			}else{
				$_SESSION['status'] = "Something went wrong.";
			}
				$_SESSION['expire']=time();
			header("Location: ../views/backends/admin.php?page=users");
		}

		
	}
}
 ?>
