

 	<div class="col-md-9">

 	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page">New User</li>
		  </ol>
	</nav>

 
<div class="col-md-6 offset-md-3 bg-dark mt-5 p-5">


<form class="row g-3 pt-5" action="../../controllers/UserController.php" method="post">
  <?php 
  if(isset($_SESSION['expire'])){
      $diff=time()-$_SESSION['expire'];
      if($diff>2){
        unset($_SESSION['status']);
        unset($_SESSION['expire']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
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
  <h2 class="text-white"><i class="fa-solid fa-user-plus"></i>Add New User</h2>
  	<div class="row mt-5">
    <label for="username" class="col-md-4 text-white">Username</label>
    <div class="col-md-8">
    <input type="text" name="username" class="form-control " id="username" placeholder="User Name">
    </div>
  </div>
  <?php
    if(isset($_SESSION["username"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['username'];
    }
  ?>

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
    <input type="password" name="password" class="form-control " id="password"placeholder="*********">
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
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>Save</button>
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Reset</button>
  </div>
</form>
</div>
</div>