<div class="col-md-9" style="position: relative;">
    <div class="row overflow-div">
      <div style="margin-left:80px ;">
        <h2 class="pt-4 text-white"><i class="fa-solid fa-plus" style="margin-right:12px"></i>Edit Post</h2>
      </div>
    </div>
    <form class="row g-3 pt-5 underneath-div" action="../../controllers/PostController.php" method="post" 
enctype="multipart/form-data">
    <div class="card" style="width: 50rem;">
      <div class="card-body">
  
    <?php

    if(isset($_SESSION["status"])){
  ?>
      <p class="text-success">
        <?php echo $_SESSION['status'];?>
      </p>
    <?php
  }
   ?>
    <div class="row">
    <div class="col-md-6">
    <label for="title" >Title</label>
    <input type="text" name="title" class="form-control " id="title" value="<?php echo $post['title'];?>">
    <?php
    if(isset($_SESSION["title"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['title'];
      }
    ?>
    </p>
    </div>
    <div class="col-md-6">
    <label for="location">Location</label>
        <select class="form-select" name="location">
          <option value=""></option>
          <option value="mandalay">Mandalay</option>
          <option value="naypyihtaw">Nay Pyi Htaw</option>
          <option value="yangon">Yangon</option>
          <option value="mawlamyine">Mawlamyine</option>
        </select>
        <?php
        if(isset($_SESSION["location"])){
        ?>
        <p class="text-danger">
        <?php  echo $_SESSION['location'];
        }
        ?>
        </p>
    </div>
  </div>
  <div class="row mt-3" >
    <div class="col">
      <label for="description" >Description</label>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <textarea name="description" id="description" cols="71" rows="10" >
      <?php echo $post['description'] ?>
    </textarea>
    <?php
    if(isset($_SESSION["description"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION["description"];
    }
  ?>
    </div>
  </div>


    <div class="row mt-3">
      <label for="image" class="col-md-4 ">Image</label>
    </div>
    <div class="row">
        <input type="file" name="image" class="form-control" id="image" >
        <?php
        if(isset($_SESSION["image"])){
        ?>
        <p class="text-danger">
        <?php  echo $_SESSION["image"];
        }
        ?>
        </p>
    </div>
  <input type="hidden" name="action" value="updatePost">
  <input type="hidden" name="postId" value="<?php echo $_GET['id'] ;?>">
    
  <div class="text-center">
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>Update</button>
    <button type="reset" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Clear</button>
  </div>
</form>
</div>
</div>
</div>
