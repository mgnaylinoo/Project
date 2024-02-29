

 	<div class="col-md-9">

 	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Add Restaurant</li>
		  </ol>
	</nav>

 
<div class="col-md-6 offset-md-3 bg-dark mt-5 p-5">


<form class="row g-3 pt-5" action="../../controllers/RestaurantController.php" method="post" 
enctype="multipart/form-data">


  <?php 
  //to show successful comment
    if(isset($_SESSION['expire'])){
      $diff=time()-$_SESSION['expire'];
      if($diff>0.1){
        unset($_SESSION['status']);
        unset($_SESSION['expire']);
        unset($_SESSION['rname']);
        unset($_SESSION['rprice']);
        unset($_SESSION['rphone']);
        unset($_SESSION['remail']);
        unset($_SESSION['rlocation']);
        unset($_SESSION['rimage']);
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
  <h2 class="text-white"><i class="fa-solid fa-plus"></i>Add Restaurant</h2>
  	<div class="row mt-5">
    <label for="rName" class="col-md-4 text-white">Restaurant Name</label>
    <div class="col-md-8">
    <input type="text" name="rName" class="form-control " id="rName" placeholder="Please Enter Restaurant name">
    </div>
  </div>
  <?php
    if(isset($_SESSION["rname"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['rname'];
    }
  ?>

    <div class="row mt-3">
    <label for="rPrice" class="col-md-4 text-white">Minimum Price</label>
    <div class="col-md-8">
    <input type="text" name="rPrice" class="form-control " id="rPrice" placeholder="Please Enter Minimum Price ">
    </div>
  </div>
  <?php
    if(isset($_SESSION["rprice"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['rprice'];
    }
  ?>

   <div class="row mt-3">
    <label for="rPhoneNo" class="col-md-4 text-white">Phone Number</label>
    <div class="col-md-8">
    <input type="text" name="rPhone" class="form-control " id="rPhoneNo" placeholder="Please enter phone number">
    </div>
  </div>
  <?php
    if(isset($_SESSION["rphone"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['rphone'];
    }
  ?>

   <div class="row mt-3">
    <label for="rEmail" class="col-md-4 text-white">Contact Email</label>
    <div class="col-md-8">
    <input type="text" name="rEmail" class="form-control " id="rEmail" placeholder="Please enter Contact Email">
    </div>
  </div>
  <?php
    if(isset($_SESSION["remail"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['remail'];
    }
  ?>

<div class="row mt-3">
    <label for="rlocation" class="col-md-4 text-white">Location</label>
    <div class="col-md-8">
        <select class="form-select" name="rLocation">
          <option value=""></option>
          <option value="mandalay">Mandalay</option>
          <option value="naypyihtaw">Nay Pyi Htaw</option>
          <option value="yangon">Yangon</option>
          <option value="mawlamyine">Mawlamyine</option>
        </select>
    </div>
    </div>
    <?php
    if(isset($_SESSION["rlocation"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['rlocation'];
    }
    ?>

  	<div class="row mt-3">
    <label for="rImage" class="col-md-4 text-white">Image</label>
    <div class="col-md-8">

    <input type="file" name="rImage" class="form-control " id="image" >
    </div>
    <?php
    if(isset($_SESSION["rimage"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION["rimage"];
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