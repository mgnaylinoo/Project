<?php session_start();?>
<!--start Nav!-->
      <nav class="navbar navbar-expand-lg sticky-top" style="height:70px;">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="./index.php"><img src="./assets/images/logo.png" style="width: 200px;height: 100px;clip-path: circle(50% at 50% 50%);">
    <span class="info">Travel Information System</span>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0  w-100 justify-content-end p-5 pt-0 pb-0" >
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <button class="nav-link text-white" onclick="scrollToContents()">Post</button>
        </li>
        <li class="nav-item">
          <button class="nav-link text-white" onclick="scrollToAbout()">About</button>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./views/backends/login.php">
            <?php 
              if(isset($_SESSION['auth'])){
                echo 'Logged';
              }else{
                echo 'Login';
              }
             ?>
          </a>
        </li>
      
      </ul>
     
    </div>
  </div>
</nav>
  <!--End Nav!-->