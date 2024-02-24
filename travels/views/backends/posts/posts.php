<div class="col-md-6 offset-md-2">

	<?php
		if(isset($_SESSION['expire'])){
			$diff=time()-$_SESSION['expire'];
			if($diff>0.2){
				unset($_SESSION['status']);
				unset($_SESSION['expire']);
			}
		}

	if(isset($_SESSION["status"])){
    	?>

    	<div class="alert alert-success mt-5" role="alert">
		 <?php echo $_SESSION['status'] ?>
		</div>

    <?php
}
	?>


	<h2 class="mt-5"><i class="fa-solid fa-list"></i>
		Post List
	</h2>

	<table class="table mt-4">
		<thead class="table-dark">
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			 foreach($postList as $post) { ?>

			 	<tr>
			 		<th>
			 			<?php echo $no ?>
			 		</th>
			 		<th><?php echo $post["title"] ?></th>
			 		<th><?php echo substr($post["description"],0,100) ?></th>

			 		<th><a href="admin.php?page=post_edit&id=<?php echo $post["id"]?>" class="text-success"><i class="fa-solid fa-pen-to-square"></i></a>
			 			<a href="admin.php?page=post_delete&id=<?php echo $post["id"]?>" class="text-danger"><i class="fa-solid fa-circle-minus"></i></a>	
			 		</th>

			 	</tr>
			 <?php
			 $no++;
			 }
			?>
		</tbody>
	</table>
</div>