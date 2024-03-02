<!-- Start Content -->

	<div class="container-fluid mt-5" id="postcontents">
		
			
			<div class="card" >
  			<div class="card-body">
  			<h2 class="text-center mt-2 text" id='cityTitle'>Famous Places</h2>
			<div class="row">
			<?php foreach($posts as $post){ ?>
			<!-- Start Card -->
			<div class="col-md-3 content-card">
				<div class="card">
					<img style="height: 250px;" src="./assets/posts/<?php echo $post['image'];?>">
					<div class="card-body">
						<h5 class="card-title"><?php echo $post['title'];?></h5>
						<p class="card-text">
							<?php echo substr($post['description'],0,140);?>
						</p>
						<div class="bt-group">
							<a href="index.php?page=detail&id=<?php echo $post['id'] ?>" class="card-btn">View More</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Card -->
		<?php }?>
		</div>
		</div>
	</div>
	</div>
	<!-- End Content -->