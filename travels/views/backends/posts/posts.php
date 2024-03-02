<div class="col-md-9" style="position: relative;">
    <div class="row overflow-div">
      <div style="margin-left:80px ;">
        <h2 class="pt-4 text-white"><i class="fa-solid fa-list" style="margin-right:12px"></i>Post List</h2>
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
  </div>
</div>
