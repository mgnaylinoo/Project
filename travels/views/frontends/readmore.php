
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Read more</title>
  <style type="text/css">
     .container {
    position: relative;
   margin-top: 20px;
   margin-bottom: 100px;r

  }
  .container img {
    display: relative;
    width: 100%;
    height: 6in;
  }
  .text-overlay {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    padding: 10px;
  }
  h1 {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  font-family: cursive;
  font-size: 70px;
  }
    hr {
    border: none;
    border-top: 3px solid black;
    margin: 20px 0;
  }
  .detail-title{
    margin-top: 15px;
  }
    /* Style the tab */
  .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    margin-top: 30px;

  }

  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }

  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #ccc;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    height: 500px;
  }



  </style>
</head>
<body>

        <div class="container" id="postcontents">
        <img  src="./assets/posts/<?php echo $post['image'];?>">
        <div class="text-overlay">
          <h1><?php echo $post['title'];?></h1>
        </div>
            <div>
          <h2 class="detail-title">History and Background</h2>
            </div>

            <hr>

            <div>
              <p><?php echo $post['description'];?></p>
            </div>
        
                  <div class="tab" >
                <button class="tablinks" onclick="openCity(event, 'Hotel')">Hotel</button>
                <button class="tablinks" onclick="openCity(event, 'Restaurant')">Restaurant</button>
                <button class="tablinks" onclick="openCity(event, 'Taxi')">Taxi</button>
              </div>

              <div id="Hotel" class="tabcontent">
                <h3>Hotels</h3>
                <div class="container-fluid" id="postcontents">
                <div class="row">
                <?php foreach($hotels as $hotel){ 
                  if($post['location'] == $hotel['location']){
                  ?>

                    <div class="col-md-3 content-card">
                        <div class="card">
                          <img style="height: 250px;" src="./assets/posts/<?php echo $hotel['image'];?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $hotel['name'];?></h5>
                            Min price:<?php echo $hotel['price'];?>  MMK<br>
                            phone:<?php echo $hotel['phone'];?><br>
                            Location:<?php echo $hotel['location'];?><br>
                          </div>
                        </div>
                    </div>
                <?php 
                  }
                }?>   
                </div>
                </div>
              </div>       

              <div id="Restaurant" class="tabcontent">
                <h3>Restaurants</h3>
                <div class="container-fluid" id="postcontents">
                <div class="row">
                <?php foreach($restaurants as $restaurant){ 
                  if($post['location'] == $restaurant['location']){
                  ?>

                    <div class="col-md-3 content-card">
                        <div class="card">
                          <img style="height: 250px;" src="./assets/posts/<?php echo $restaurant['image'];?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $restaurant['name'];?></h5>
                            Min price:<?php echo $restaurant['price'];?>  MMK<br>
                            phone:<?php echo $restaurant['phone'];?><br>
                            Location:<?php echo $restaurant['location'];?><br>
                          </div>
                        </div>
                    </div>
                <?php 
                  }
                }?>   
                </div>
                </div>
              </div>   

             <div id="Taxi" class="tabcontent">
                <h3>Taxis</h3>
                <div class="container-fluid" id="postcontents">
                <div class="row">
                <?php foreach($taxis as $taxi){ 
                  if($post['location'] == $taxi['location']){
                  ?>

                    <div class="col-md-3 content-card">
                        <div class="card">
                          <img style="height: 250px;" src="./assets/posts/<?php echo $taxi['image'];?>">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $taxi['name'];?></h5>
                            Min price:<?php echo $taxi['price'];?><br>
                            phone:<?php echo $taxi['phone'];?><br>
                            Location:<?php echo $taxi['location'];?><br>
                          </div>
                        </div>
                    </div>
                <?php 
                  }
                }?>   
                </div>
                </div>
              </div> 
      </div>
    

      
<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  window.onload = openCity(event, 'Hotel');
</script>
</body>
</html>
