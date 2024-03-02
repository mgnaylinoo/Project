<?php
session_start();
include "../app/DB.php";
include "../app/Taxi.php";

$db=new DB();
$connection=$db->connect();
$taxi = new Taxi($connection);
	if(isset($_POST["name"])){
		$name=$_POST['name'];
		$price=$_POST["price"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$location=$_POST["location"];
		$imageName=$_FILES['image']['name'];

		if($name==""| $price==""| $phone=="" | $email==""|$location=="" | $imageName=="" ){
			if($name==""){
				$_SESSION["tname"]="Name Must Not Be Empty";
			}
				if($price==""){
				$_SESSION["tprice"]="Price Must Not Be Empty";
			}
			if($phone==""){
				$_SESSION["tphone"]="Phone Must Not Be Empty";
			}
			if($email==""){
				$_SESSION["temail"]="Email Must Not Be Empty";
			}

			if($location==""){
				$_SESSION["tlocation"]="Location Must Not Be Empty";
			}
			if($imageName==""){
				$_SESSION["timage"]="Image Must Not Be Empty";
			}
			$_SESSION['expire']=time();
			header("Location:".$_SERVER["HTTP_REFERER"]);
			

		}else{
			unset($_SESSION['tname']);
			unset($_SESSION['tprice']);
			unset($_SESSION['tphone']);
			unset($_SESSION['temail']);
			unset($_SESSION['tlocation']);
			unset($_SESSION['timage']);
			$tmp_name=$_FILES['image']['tmp_name'];


			$folder="../assets/posts/";

			$saveImageName=uniqid().$imageName;
			move_uploaded_file($tmp_name, $folder.$saveImageName);
				$action =$_POST["action"];

			if($action=="add"){
					$status=$taxi->create($name,$price,$phone,$email,$location,$saveImageName);
			if($status){
				$_SESSION["status"]="Created Successfully";
			}else{
				$_SESSION["status"]="Something went wrong";
			}

			$_SESSION['expire']=time();
			header("Location:".$_SERVER["HTTP_REFERER"]);

			}
		}
	}
?>