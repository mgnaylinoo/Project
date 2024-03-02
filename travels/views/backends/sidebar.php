<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="col-md-3" id="sidebar">

 		<a href="../../index.php" style="margin-left:50px"><img src="../../assets/images/logo.png" style="width: 200px;height: 200px;"></a>


 		<ul class="sider-list">
 			<li class="act"><i class="fa-solid fa-user-plus"></i>
 				<a href="admin.php?page=addUser" >Add User</a>
 				</li>
 			<li class="act"><i class="fa-solid fa-users"></i><a href="admin.php?page=users" >Users</a></li>	
 			<li class="act"><i class="fa-solid fa-plus"></i><a href="admin.php?page=post" >Add Post</a></li>	
 			<li class="act"><i class="fa-solid fa-list"></i><a href="admin.php?page=posts" >Posts</a></li>	
 			<li class="act"><i class="fa-solid fa-hotel"></i><a href="admin.php?page=add_hotel" >Add Hotel</a></li>
 			<li class="act"><i class="fa-solid fa-utensils"></i></i><a href="admin.php?page=add_restaurant" >Add Restaurant</a></li>
 			<li class="act"><i class="fa-solid fa-car"></i><a href="admin.php?page=add_taxi" >Add Taxi</a></li>
 			<li class="act"><i class="fa-solid fa-right-from-bracket"></i><a href="../../controllers/LoginController.php?action=logout" >Logout</a></li>	
 		</ul>
 </div>

</body>
</html>
