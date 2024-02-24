<?php 
session_start();
include "header.php";

if(isset($_SESSION["auth"])){
  header("Location: admin.php?page=users");
}
?>

 	<div class="col-md-12">

 	

 
<div class="col-md-6 offset-md-3 bg-dark mt-5 p-5">


<form class="row g-3 pt-5" action="../../controllers/LoginController.php" method="post">
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
  <h2 class="text-white"><i class="fa-solid fa-right-to-bracket"></i>Please Log in</h2>
  	
  <div class="row mt-3" >
    <label for="email" class="col-md-4 text-white">Email</label>
    <div class="col-md-8">
    <input type="email" name="email" class="form-control " id="email" placeholder="Please Enter email">
    </div>
    <?php
    if(isset($_SESSION["email"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION["email"];
    }
  ?>
  </div>


  	<div class="row mt-3">
    <label for="password" class="col-md-4 text-white">Password</label>
    <div class="col-md-8">
    <input type="password" name="password" class="form-control " id="password" placeholder="*****">
    </div>
    <?php
    if(isset($_SESSION["password"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION["password"];
    }
  ?>
  </div>
  <input type="hidden" name="action" value="add">

  
  <div class="text-center">
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-right-to-bracket"></i>Login</button>
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Reset</button>
  </div>
</form>
</div>
</div>
<?php include "footer.php";
?>