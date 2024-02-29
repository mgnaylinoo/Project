<?php 
	include "header.php";
	include "sidebar.php";
  include "../../app/DB.php";
  include "../../app/User.php";
  include "../../app/Post.php";

  session_start();
    //db connection
    $db=new DB();
    $connection =$db->connect();
    $user=new User($connection);

    $postDB=new Post($connection);

  if(!isset($_SESSION['auth'])){
    header("Location: login.php");
  }
  if(isset($_GET['page'])){
    $page=$_GET['page'];
    if($page=="addUser"){
      include "users/addUser.php";
    }elseif ($page=="users") {

        $users=$user->getAll();

      include "users/users.php";
    }elseif($page=="edit"){
      $userId = $_GET['id'];
      $userData = $user->getUserById($userId);
      include "users/userEdit.php";

    }elseif($page=="delete"){
       $userId = $_GET['id'];
       if($user->mustone()){
        $user->delete($userId);
       $_SESSION['expire']=time();
       $_SESSION['status'] = "User Deleted successufully.";
       header("Location:".$_SERVER['HTTP_REFERER']);
     }else{
      $_SESSION['expire']=time();
       $_SESSION['status'] = "One admin require.";
       header("Location:".$_SERVER['HTTP_REFERER']);
     }
       
    }elseif($page=="post_delete"){
      $postId = $_GET['id'];
      $postDB->delete($postId);
      $_SESSION['expire']=time();
      $_SESSION['status'] = "Post deleted successufully.";
      header("Location:".$_SERVER['HTTP_REFERER']);
    }
    elseif($page=="post"){
      include "posts/addPost.php";
    }elseif($page=='posts'){
      $postList=$postDB->getAll();
      include "posts/posts.php";
    }elseif($page=='post_edit'){
      $postId=$_GET['id'];
      $post=$postDB->getPostById($postId);
      include "posts/postEdit.php";
    }elseif($page=='add_hotel'){
      include "nearby/add_hotel.php";
     }
     elseif($page=='add_restaurant'){
      include "nearby/add_restaurant.php";
     }
    }
 ?>



 <?php 
	include "footer.php";
 ?>