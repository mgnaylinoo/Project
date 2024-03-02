<?php 
session_start();
include "header.php";

if(isset($_SESSION["auth"])){
  header("Location: admin.php?page=users");
}
?>
<div class="col-md-9 hero" style="position: relative;">
   <div class="row login-overflow">
 <div class="card login-underneath border-primary
 bg-dark-subtle text-dark-emphasis
 " style="width: 40rem;">
      <div class="card-body">
        <form action="../../controllers/LoginController.php" method="post">
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
           <h2 class="opacity-100 text-primary"><i class="fa-solid fa-right-to-bracket"></i>Log in</h2>
             <div class="form-floating mb-3">
              <input type="text"  name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Username</label>
               <?php
                  if(isset($_SESSION["email"])){
                  ?>
                  <p class="text-danger">
                  <?php  echo $_SESSION['email'];
                  }
                ?>
                  </p>
            </div>
            <div class="form-floating">
              <input type="password"  name="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
              <?php
                if(isset($_SESSION["password"])){
                ?>
                <p class="text-danger offset-0" style="font-size: 12px;">
                <?php  echo $_SESSION["password"];
                }
              ?></p>
            </div>
            <input type="hidden" name="action" value="add">
            <div class="text-center">
              <button type="submit" class="btn btn-success"><i class="fa-solid fa-right-to-bracket"></i>Login</button>
              <button type="reset" class="btn btn-danger"><i class="fa-solid fa-eraser"></i>Reset</button>
            </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php include "footer.php";
?>