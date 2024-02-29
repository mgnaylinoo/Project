

 	<div class="col-md-9">

 	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page">New Post</li>
		  </ol>
	</nav>

 
<div class="col-md-6 offset-md-3 bg-dark mt-5 p-5">


<form class="row g-3 pt-5" action="../../controllers/PostController.php" method="post" 
enctype="multipart/form-data">

  <?php 
  //to show successful comment
    if(isset($_SESSION['expire'])){
      $diff=time()-$_SESSION['expire'];
      if($diff>0.1){
        unset($_SESSION['status']);
        unset($_SESSION['expire']);
        unset($_SESSION['title']);
        unset($_SESSION['description']);
        unset($_SESSION['location']);
        unset($_SESSION['image']);
      }
    }

    if(isset($_SESSION["status"])){
  ?>
      <p class="text-success">
        <?php echo $_SESSION['status'];?>
      </p>
    <?php
  }
   ?>
  <h2 class="text-white"><i class="fa-solid fa-plus"></i>Add New Post</h2>
  	<div class="row mt-5">
    <label for="title" class="col-md-4 text-white">Title</label>
    <div class="col-md-8">
    <input type="text" name="title" class="form-control " id="title" placeholder="Post Title">
    </div>
    </div>
    <?php
    if(isset($_SESSION["title"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['title'];
      }
    ?>
    <div class="row mt-3">
    <label for="location" class="col-md-4 text-white">Location</label>
    <div class="col-md-8">
        <select class="form-select" name="location">
          <option value=""></option>
          <option value="mandalay">Mandalay</option>
          <option value="naypyihtaw">Nay Pyi Htaw</option>
          <option value="yangon">Yangon</option>
          <option value="mawlamyine">Mawlamyine</option>
        </select>
    </div>
    </div>
    <?php
    if(isset($_SESSION["location"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['location'];
    }
    ?>
  



  <div class="row mt-3" >
    <label for="description" class="col-md-4 text-white">Description</label>
    <div class="col-md-8">
    <!-- <input type="email" name="email" class="form-control " id="email" placeholder="Please Enter email"> -->
    <textarea name="description" id="description" cols="20" rows="10" ></textarea>
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
  <input type="hidden" name="action" value="add">

    
  <div class="text-center">
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>Save</button>
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Reset</button>
  </div>
</form>
</div>
</div>