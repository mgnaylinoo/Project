

 	<div class="col-md-9">

 	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
		  </ol>
	</nav>

 
<div class="col-md-6 offset-md-3 bg-dark mt-5 p-5">


<form class="row g-3 pt-5" action="../../controllers/PostController.php" method="post" 
enctype="multipart/form-data">
  <?php 
  //to show successful comment

    if(isset($_SESSION["status"])){
  ?>
      <p class="text-success">
        <?php echo $_SESSION['status'];?>
      </p>
    <?php
  }
   ?>
  <h2 class="text-white"><i class="fa-solid fa-pen-to-square"></i>Edit Post</h2>
  	<div class="row mt-5">
    <label for="title" class="col-md-4 text-white">Title</label>
    <div class="col-md-8">
    <input type="text" name="title" class="form-control " id="title" value="<?php echo $post['title'];?>">
    </div>
  </div>
  <?php
    if(isset($_SESSION["title"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['title'];
    }
  ?>

  <div class="row mt-3" >
    <label for="description" class="col-md-4 text-white">Description</label>
    <div class="col-md-8">
 
    <textarea name="description" id="description" cols="20" rows="10" >
      <?php echo $post['description'] ?>
    </textarea>
    </div>
    <?php
    if(isset($_SESSION["description"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION["description"];
    }
  ?>
  </div>

   


  	<div class="row mt-3">
    <label for="image" class="col-md-4 text-white">Image</label>
    <div class="col-md-8">

    <input type="file" name="image" class="form-control " id="image" >
    </div>
    <?php
    if(isset($_SESSION["image"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION["image"];
    }
  ?>
  </div>
  <input type="hidden" name="action" value="updatePost">
  <input type="hidden" name="postId" value="<?php echo $_GET['id'] ;?>">

    
  <div class="text-center">
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>Update</button>
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Reset</button>
  </div>
</form>
</div>
</div>