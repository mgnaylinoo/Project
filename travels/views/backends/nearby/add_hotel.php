

 	<div class="col-md-9">

 	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Add Hotel</li>
		  </ol>
	</nav>

 
<div class="col-md-6 offset-md-3 bg-dark mt-5 p-5">


<form class="row g-3 pt-5" action="../../controllers/HotelController.php" method="post" 
enctype="multipart/form-data">

  <?php 
  //to show successful comment
    if(isset($_SESSION['expire'])){
      $diff=time()-$_SESSION['expire'];
      if($diff>0.1){
        unset($_SESSION['status']);
        unset($_SESSION['expire']);
        unset($_SESSION['name']);
        unset($_SESSION['price']);
        unset($_SESSION['phone']);
        unset($_SESSION['hotel_email']);
        unset($_SESSION['hotel_location']);
        unset($_SESSION['hotel_image']);
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
  <h2 class="text-white"><i class="fa-solid fa-plus"></i>Add Hotel</h2>
  	<div class="row mt-5">
    <label for="hName" class="col-md-4 text-white">Hotel Name</label>
    <div class="col-md-8">
    <input type="text" name="hName" class="form-control " id="hName" placeholder="Please Enter Hotel name">
    </div>
  </div>
  <?php
    if(isset($_SESSION["name"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['name'];
    }
  ?>

    <div class="row mt-3">
    <label for="mHPrice" class="col-md-4 text-white">Minimum Price</label>
    <div class="col-md-8">
    <input type="text" name="mHPrice" class="form-control " id="mHPrice" placeholder="Please Enter Minimum Price ">
    </div>
  </div>
  <?php
    if(isset($_SESSION["price"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['price'];
    }
  ?>

   <div class="row mt-3">
    <label for="hPhoneNo" class="col-md-4 text-white">Phone Number</label>
    <div class="col-md-8">
    <input type="text" name="hPhoneNo" class="form-control " id="hPhoneNo" placeholder="Please enter phone number">
    </div>
  </div>
  <?php
    if(isset($_SESSION["phone"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['phone'];
    }
  ?>

   <div class="row mt-3">
    <label for="hEmail" class="col-md-4 text-white">Contact Email</label>
    <div class="col-md-8">
    <input type="text" name="hEmail" class="form-control " id="hEmail" placeholder="Please enter Contact Email">
    </div>
  </div>
  <?php
    if(isset($_SESSION["hotel_email"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION['hotel_email'];
    }
  ?>

<div class="row mt-3">
    <label for="location" class="col-md-4 text-white">Location</label>
    <div class="col-md-8">
        <select class="form-select" name="hLocation">
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

 

   


  	<div class="row mt-3">
    <label for="image" class="col-md-4 text-white">Image</label>
    <div class="col-md-8">

    <input type="file" name="image" class="form-control " id="image" >
    </div>
    <?php
    if(isset($_SESSION["hotel_image"])){
    ?>
    <p class="text-danger offset-4">
    <?php  echo $_SESSION["hotel_image"];
    }
  ?>
  </div>
  <input type="hidden" name="action" value="add">

    
  <div class="text-center">
    <button type="submit" class="btn btn-success" name="hotel"><i class="fa-solid fa-circle-plus"></i>Save</button>
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Reset</button>
  </div>
</form>
</div>
</div>