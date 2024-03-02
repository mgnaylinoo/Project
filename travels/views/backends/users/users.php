<div class="col-md-9" style="position: relative;">
    <div class="row overflow-div">
      <div style="margin-left:80px ;">
        <h2 class="pt-4 text-white"><i class="fa-solid fa-users" style="margin-right:12px"></i>User List</h2>
      </div>
    </div>
    <?php
			if(isset($_SESSION['expire'])){
				$diff=time()-$_SESSION['expire'];
				if($diff>2){
					unset($_SESSION['status']);
					unset($_SESSION['expire']);
				}
			}
		 ?>
     <div class="card row mt-5 underneath-div" style="width: 50rem;">
      <div class="card-body">
	 	<?php 
			if(isset($_SESSION["status"])){
		    	?>

		    	<div class="alert alert-success" role="alert">
				 <?php echo $_SESSION['status'] ?>
				</div>

		    <?php
		}
			?>

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
</div>
</div>

<!-- start -->
<!--  -->
<!-- end -->