

  <div class="col-md-9" style="position: relative;">
    <div class="row overflow-div">
      <div style="margin-left:80px ;">
        <h2 class="pt-4 text-white"><i class="fa-solid fa-pen-to-square" style="margin-right:12px"></i>Edit User</h2>
      </div>
    </div>
    
   <form class="row g-3 pt-5 underneath-div" action="../../controllers/UserController.php" method="post">
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
        <div class="form-floating mb-3">
          <input type="text"  name="username" class="form-control" id="floatingInput" value="<?php  echo $userData['username'];?>">
          <label for="floatingInput">Username</label>
           <?php
              if(isset($_SESSION["username"])){
              ?>
              <p class="text-danger offset-0" style="font-size: 12px;">
              <?php  echo $_SESSION['username'];
              }
            ?>
              </p>
        </div>

        <div class="form-floating mb-3">
          <input type="email"  name="email" class="form-control" id="floatingInput" value="<?php  echo $userData['email'];?>">
          <label for="floatingInput">Email address</label>
          <?php
            if(isset($_SESSION["email"])){
            ?>
            <p class="text-danger offset-0" style="font-size: 12px;">
            <?php  echo $_SESSION["email"];
            }
          ?>
            </p>
        </div>
        <div class="form-floating">
          <input type="password"  name="password" class="form-control" id="floatingPassword" value="<?php  echo $userData['password'];?>">
          <label for="floatingPassword">Password</label>
          <?php
            if(isset($_SESSION["password"])){
            ?>
            <p class="text-danger offset-0" style="font-size: 12px;">
            <?php  echo $_SESSION["password"];
            }
          ?></p>
        </div>
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="userId" value="<?php echo $_GET['id'];?>">
        
        <div class="text-center">
          <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>Update</button>
          <button type="reset" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Clear</button>
        </div>
      </div>
    </div>
  
  </form>
  </div>