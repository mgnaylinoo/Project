<?php 
	session_start();
	include "../app/DB.php";
	include '../app/Login.php';

	$db = new DB();
	$connection = $db->connect();

	$login = new login($connection);

	if(isset($_POST["email"])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email == "" || $password ==""){
			if($email == ""){
			$_SESSION['email'] = "Email must not be empty.";
			}

			if($password == ""){
				$_SESSION['password'] = "Password must not be empty.";
			}
			header("Location: ".$_SERVER["HTTP_REFERER"]);
		}else{
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		$login->check($email, $password);
	}
		
		
	}
	if(isset($_GET['action'])){
		if($_GET['action']=="logout"){
			unset($_SESSION["auth"]);
			unset($_SESSION['status']);
			unset($_SESSION["username"]);
			unset($_SESSION['email']);
			unset($_SESSION["password"]);
			unset($_SESSION['title']);
			unset($_SESSION['description']);
			unset($_SESSION['image']);
		}
		header("Location: ../index.php");
	}

 ?>