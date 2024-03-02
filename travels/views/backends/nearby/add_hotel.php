<div class="col-md-9" style="position: relative;">
    <div class="row overflow-div">
      <div style="margin-left:80px ;">
        <h2 class="pt-4 text-white"><i class="fa-solid fa-hotel" style="margin-right:12px"></i>Add Hotel</h2>
      </div>
    </div>
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
    ?>
    <form class="row g-3 pt-5 underneath-div" action="../../controllers/HotelController.php" method="post" 
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
      <label for="hName">Hotel Name</label>
      <input type="text" name="hName" class="form-control " id="hName" placeholder="Please Enter Hotel name">
    <?php
      if(isset($_SESSION["name"])){
      ?>
      <p class="text-danger">
      <?php  echo $_SESSION['name'];
      }
    ?>
    </p>
    </div>
    <div class="col-md-6">
      <label for="mHPrice">Minimum Price</label>
      <input type="text" name="mHPrice" class="form-control " id="mHPrice" placeholder="Please Enter Minimum Price ">
    <?php
      if(isset($_SESSION["price"])){
      ?>
      <p class="text-danger">
      <?php  echo $_SESSION['price'];
      }
    ?>
      </p>
  </div>
  </div>

   <div class="row mt-3">
    <div class="col-md-6">
    <label for="hPhoneNo">Phone Number</label>
    <input type="text" name="hPhoneNo" class="form-control " id="hPhoneNo" placeholder="Please enter phone number">
  <?php
    if(isset($_SESSION["phone"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['phone'];
    }
  ?>
    </p>
  </div>
   <div class="col-md-6">
    <label for="hEmail">Contact Email</label>
    <input type="text" name="hEmail" class="form-control " id="hEmail" placeholder="Please enter Contact Email">
  <?php
    if(isset($_SESSION["hotel_email"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['hotel_email'];
    }
  ?>
    </p>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-6">
    <label for="location" >Location</label>
        <select class="form-select" name="hLocation">
          <option value=""></option>
          <option value="mandalay">Mandalay</option>
          <option value="naypyihtaw">Nay Pyi Htaw</option>
          <option value="yangon">Yangon</option>
          <option value="mawlamyine">Mawlamyine</option>
        </select>
    <?php
    if(isset($_SESSION["hotel_location"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['hotel_location'];
    }
    ?>
  </p>
  </div>
    <div class="col-md-6">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control " id="image" >
    <?php
    if(isset($_SESSION["hotel_image"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION["hotel_image"];
    }
  ?>
  </p>
  </div>
</div>
  <input type="hidden" name="action" value="add">

    
  <div class="text-center">
    <button type="submit" class="btn btn-success" name="hotel"><i class="fa-solid fa-circle-plus"></i>Save</button>
    <button type="reset" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Clear</button>
  </div>
</form>

</div>
</div>
</div>
