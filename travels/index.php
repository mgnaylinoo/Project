<?php 
		include "./views/frontends/header.php";
		include "./views/frontends/navbar.php";
		include "./views/frontends/slider.php";
		include "./views/frontends/intro.php";
		include "./app/Post.php";
		include "./app/DB.php";

		$db = new DB();
		$connection = $db->connect();

		$postObj = new Post($connection);
		$posts = $postObj->getAll();


 ?>
 <?php 
    include "./views/frontends/about.php";
 		include "./views/frontends/footer.php";
 	 ?>