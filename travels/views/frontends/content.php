<!-- Start Content -->
<div class="container-fluid" id="postcontents">
	<div class="row">
		<h2 class="text-center mt-5 text" id='cityTitle'>Our Famous City</h2>
		<?php foreach($posts as $post){ ?>
		<!-- Start Card -->
		<div class="col-md-3 content-card">
			<div class="card">
				<img style="height: 250px;" src="./assets/posts/<?php echo $post['image'];?>">
				<div class="card-body">
					<h5 class="card-title"><?php echo $post['title'];?></h5>
					<p class="card-text">
						<?php echo substr($post['description'],0,300);?>
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
<!-- End Content -->