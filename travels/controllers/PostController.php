<?php
session_start();
include "../app/DB.php";
include "../app/Post.php";

$db=new DB();
$connection=$db->connect();
$postDB=new Post($connection);
	if(isset($_POST["title"])){
		$title=$_POST['title'];
		$description=$_POST["description"];
		$location=$_POST["location"];
		$imageName=$_FILES['image']['name'];

		if($title==""| $description==""| $imageName=="" | $location==""){
			if($title==""){
				$_SESSION["title"]="Title Must Not Be Empty";
			}
				if($description==""){
				$_SESSION["description"]="Description Must Not Be Empty";
			}
			if($location==""){
				$_SESSION["location"]="Location Must Not Be Empty";
			}
			if($imageName==""){
				$_SESSION["image"]="image Must Not Be Empty";
			}
			$_SESSION['expire']=time();
			header("Location:".$_SERVER["HTTP_REFERER"]);
			

		}else{
			unset($_SESSION['title']);
			unset($_SESSION['description']);
			unset($_SESSION['location']);
			unset($_SESSION['image']);
			$tmp_name=$_FILES['image']['tmp_name'];


			$folder="../assets/posts/";

			$saveImageName=uniqid().$imageName;
			move_uploaded_file($tmp_name, $folder.$saveImageName);
				$action =$_POST["action"];

			if($action=="add"){
					$status=$postDB->create($title,$description,$location,$saveImageName);
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