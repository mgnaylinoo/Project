<?php
session_start();
include "../app/DB.php";
include "../app/Hotel.php";

$db=new DB();
$connection=$db->connect();
$Hotel = new Hotel($connection);
	if(isset($_POST["hName"])){
		$name=$_POST['hName'];
		$price=$_POST["mHPrice"];
		$phone=$_POST["hPhoneNo"];
		$email=$_POST["hEmail"];
		$location=$_POST["hLocation"];
		$imageName=$_FILES['image']['name'];

		if($name==""| $price==""| $phone=="" | $email==""|$location=="" | $imageName=="" ){
			if($name==""){
				$_SESSION["name"]="Name Must Not Be Empty";
			}
				if($price==""){
				$_SESSION["price"]="Price Must Not Be Empty";
			}
			if($phone==""){
				$_SESSION["phone"]="Phone Must Not Be Empty";
			}
			if($email==""){
				$_SESSION["hotel_email"]="Email Must Not Be Empty";
			}

			if($location==""){
				$_SESSION["hotel_location"]="Location Must Not Be Empty";
			}
			if($imageName==""){
				$_SESSION["hotel_image"]="Image Must Not Be Empty";
			}
			$_SESSION['expire']=time();
			header("Location:".$_SERVER["HTTP_REFERER"]);
			

		}else{
			unset($_SESSION['name']);
			unset($_SESSION['price']);
			unset($_SESSION['phone']);
			unset($_SESSION['hotel_email']);
			unset($_SESSION['hotel_location']);
        	unset($_SESSION['hotel_image']);
			$tmp_name=$_FILES['image']['tmp_name'];


			$folder="../assets/posts/";

			$saveImageName=uniqid().$imageName;
			move_uploaded_file($tmp_name, $folder.$saveImageName);
				$action =$_POST["action"];

			if($action=="add"){
					$status=$Hotel->create($name,$price,$phone,$email,$location,$saveImageName);
			if($status){
				$_SESSION["status"]="Created Successfully";
			}else{
				$_SESSION["status"]="Something went wrong";
			}

			$_SESSION['expire']=time();
			header("Location:".$_SERVER["HTTP_REFERER"]);

			}else if($action=="updatePost"){
				$postId=$_POST['postId'];

				$status=$Hotel->update($name,$price,$phone,$email,$location,$saveImageName,$postId);

				if($status){
				
				$_SESSION["status"]="Post Updated Successfully";
			}else{
				$_SESSION["status"]="Something went wrong";
			}

			$_SESSION['expire']=time();
			header("Location: ../views/backends/admin.php?page=posts");
			}
		}
	}
?>