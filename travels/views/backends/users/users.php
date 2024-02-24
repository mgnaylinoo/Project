<div class="col-md-6 offset-md-2">

	<?php
		if(isset($_SESSION['expire'])){
			$diff=time()-$_SESSION['expire'];
			if($diff>2){
				unset($_SESSION['status']);
				unset($_SESSION['expire']);
			}
		}
	 ?>

	<?php 
	if(isset($_SESSION["status"])){
    	?>

    	<div class="alert alert-success mt-5" role="alert">
		 <?php echo $_SESSION['status'] ?>
		</div>

    <?php
}
	?>


	<h2 class="mt-5"><i class="fa-solid fa-users"></i>
		User List
	</h2>

	<table class="table mt-4">
		<thead class="table-dark">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			 foreach ($users as $userData) { ?>

			 	<tr>
			 		<th>
			 			<?php echo $no ?>
			 		</th>
			 		<th><?php echo $userData["username"] ?></th>
			 		<th><?php echo $userData["email"] ?></th>
			 		<th><a href="admin.php?page=edit&id=<?php echo $userData["id"]?>" class="text-success"><i class="fa-solid fa-pen-to-square"></i></a>
			 			<a href="admin.php?page=delete&id=<?php echo $userData["id"]?>" class="text-danger"><i class="fa-solid fa-circle-minus"></i></a>	
			 		</th>

			 	</tr>
			 <?php
			 $no++;
			 }
			?>
		</tbody>
	</table>
</div>