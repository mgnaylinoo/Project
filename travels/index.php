
	<?php 
		include "./views/frontends/header.php";
		include "./views/frontends/navbar.php";
		include "./app/Post.php";
		include "./app/DB.php";
		include "./app/Hotel.php";
		include "./app/Restaurant.php";
		include "./app/Taxi.php";

		$db = new DB();
		$connection = $db->connect();

		$postObj = new Post($connection);
		$posts = $postObj->getAll();

		$hotelObj = new Hotel($connection);
		$hotels = $hotelObj->getAll();

		$restaurantObj = new Restaurant($connection);
		$restaurants = $restaurantObj->getAll();

		$taxiObj = new Taxi($connection);
		$taxis = $taxiObj->getAll();

		
		if(isset($_GET['page'])){
			$id = $_GET['id'];
			$post = $postObj->getPostById($id);
			
			include "./views/frontends/readmore.php";
		}else{
			include "./views/frontends/slider.php";
			include "./views/frontends/intro.php";
			include "./views/frontends/content.php";
		}

 ?>
 
 <?php 
    include "./views/frontends/about.php";
 		include "./views/frontends/footer.php";
 	 ?>
