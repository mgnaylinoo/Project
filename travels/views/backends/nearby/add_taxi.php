<div class="col-md-9" style="position: relative;">
    <div class="row overflow-div">
      <div style="margin-left:80px ;">
        <h2 class="pt-4 text-white"><i class="fa-solid fa-car" style="margin-right:12px"></i>Add Taxi</h2>
      </div>
    </div>
     <?php 
  //to show successful comment
    if(isset($_SESSION['expire'])){
      $diff=time()-$_SESSION['expire'];
      if($diff>0.1){
        unset($_SESSION['status']);
        unset($_SESSION['expire']);
        unset($_SESSION['tname']);
        unset($_SESSION['tprice']);
        unset($_SESSION['tphone']);
        unset($_SESSION['temail']);
        unset($_SESSION['tlocation']);
        unset($_SESSION['timage']);
      }
    }
    ?>
   
    <form class="row g-3 pt-5 underneath-div" action="../../controllers/TaxiController.php" method="post" 
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
      <label>Taxi Name</label>
      <input type="text" name="name" class="form-control " id="rName" placeholder="Please Enter Taxi name">
    <?php
      if(isset($_SESSION["tname"])){
      ?>
      <p class="text-danger">
      <?php  echo $_SESSION['tname'];
      }
    ?>
    </p>
    </div>
    <div class="col-md-6">
      <label for="rPrice">Minimum Price</label>
      <input type="text" name="price" class="form-control " id="rPrice" placeholder="Please Enter Minimum Price ">
    <?php
      if(isset($_SESSION["tprice"])){
      ?>
      <p class="text-danger">
      <?php  echo $_SESSION['tprice'];
      }
    ?>
      </p>
  </div>
  </div>

   <div class="row mt-3">
    <div class="col-md-6">
    <label for="rPhoneNo">Phone Number</label>
    <input type="text" name="phone" class="form-control " id="rPhoneNo" placeholder="Please enter phone number">
  <?php
    if(isset($_SESSION["tphone"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['tphone'];
    }
  ?>
    </p>
  </div>
   <div class="col-md-6">
    <label for="rEmail" >Contact Email</label>
    <input type="text" name="email" class="form-control " id="rEmail" placeholder="Please enter Contact Email">
  <?php
    if(isset($_SESSION["temail"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['temail'];
    }
  ?>
    </p>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-6">
   <label for="rlocation">Location</label>
        <select class="form-select" name="location">
          <option value=""></option>
          <option value="mandalay">Mandalay</option>
          <option value="naypyihtaw">Nay Pyi Htaw</option>
          <option value="yangon">Yangon</option>
          <option value="mawlamyine">Mawlamyine</option>
        </select>
    <?php
    if(isset($_SESSION["tlocation"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION['tlocation'];
    }
    ?>
  </p>
  </div>
    <div class="col-md-6">
    <label for="rImage">Image</label>
   <input type="file" name="image" class="form-control " id="image" >
    <?php
    if(isset($_SESSION["timage"])){
    ?>
    <p class="text-danger">
    <?php  echo $_SESSION["timage"];
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
