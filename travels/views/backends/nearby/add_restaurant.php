<div class="col-md-9" style="position: relative;">
    <div class="row overflow-div">
      <div style="margin-left:80px ;">
        <h2 class="pt-4 text-white"><i class="fa-solid fa-utensils" style="margin-right:12px"></i>Add Restaurant</h2>
      </div>
    </div>
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
    ?>
   
    <form class="row g-3 pt-5 underneath-div" action="../../controllers/RestaurantController.php" method="post" 
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
      <label>Restaurant Name</label>
      <input type="text" name="rName" class="form-control " id="rName" placeholder="Please Enter Restaurant name">
    <?php
      if(isset($_SESSION["rname"])){
      ?>
      <p class="text-danger">
      <?php  echo $_SESSION['rname'];
      }
    ?>
    </p>
    </div>
    <div class="col-md-6">
      <label for="rPrice">Minimum Price</label>
      <input type="text" name="rPrice" class="form-control " id="rPrice" placeholder="Please Enter Minimum Price ">
    <?php
      if(isset($_SESSION["rprice"])){
      ?>
      <p class="text-danger">
      <?php  echo $_SESSION['rprice'];
      }
    ?>
      </p>
  </div>
  </div>

   <div class="row mt-3">
    <div class="col-md-6">
    <label for="rPhoneNo">Phone Number</label>
    <input type="text" name="rPhone" class="form-control " id="rPhoneNo" placeholder="Please enter phone number">
  <?php
    if(isset($_SESSION["rphone"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['rphone'];
    }
  ?>
    </p>
  </div>
   <div class="col-md-6">
    <label for="rEmail" >Contact Email</label>
    <input type="text" name="rEmail" class="form-control " id="rEmail" placeholder="Please enter Contact Email">
  <?php
    if(isset($_SESSION["remail"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['remail'];
    }
  ?>
    </p>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-6">
   <label for="rlocation">Location</label>
        <select class="form-select" name="rLocation">
          <option value=""></option>
          <option value="mandalay">Mandalay</option>
          <option value="naypyihtaw">Nay Pyi Htaw</option>
          <option value="yangon">Yangon</option>
          <option value="mawlamyine">Mawlamyine</option>
        </select>
    <?php
    if(isset($_SESSION["rlocation"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['rlocation'];
    }
    ?>
  </p>
  </div>
    <div class="col-md-6">
    <label for="rImage">Image</label>
   <input type="file" name="rImage" class="form-control " id="image" >
    <?php
    if(isset($_SESSION["rimage"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION["rimage"];
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
