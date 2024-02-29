<?php
session_start();
include "../app/DB.php";
include "../app/Restaurant.php";

$db=new DB();
$connection=$db->connect();
$restaurant = new Restaurant($connection);
	if(isset($_POST["rName"])){
		$name=$_POST['rName'];
		$price=$_POST["rPrice"];
		$phone=$_POST["rPhone"];
		$email=$_POST["rEmail"];
		$location=$_POST["rLocation"];
		$imageName=$_FILES['rImage']['name'];

		if($name==""| $price==""| $phone=="" | $email==""|$location=="" | $imageName=="" ){
			if($name==""){
				$_SESSION["rname"]="Name Must Not Be Empty";
			}
				if($price==""){
				$_SESSION["rprice"]="Price Must Not Be Empty";
			}
			if($phone==""){
				$_SESSION["rphone"]="Phone Must Not Be Empty";
			}
			if($email==""){
				$_SESSION["remail"]="Email Must Not Be Empty";
			}

			if($location==""){
				$_SESSION["rlocation"]="Location Must Not Be Empty";
			}
			if($imageName==""){
				$_SESSION["rimage"]="Image Must Not Be Empty";
			}
			$_SESSION['expire']=time();
			header("Location:".$_SERVER["HTTP_REFERER"]);
			

		}else{
			unset($_SESSION['rname']);
			unset($_SESSION['rprice']);
			unset($_SESSION['rphone']);
			unset($_SESSION['remail']);
			unset($_SESSION['rlocation']);
			unset($_SESSION['rimage']);
			$tmp_name=$_FILES['rImage']['tmp_name'];


			$folder="../assets/posts/";

			$saveImageName=uniqid().$imageName;
			move_uploaded_file($tmp_name, $folder.$saveImageName);
				$action =$_POST["action"];

			if($action=="add"){
					$status=$restaurant->create($name,$price,$phone,$email,$location,$saveImageName);
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