
 <?php 
include('sign.php');

if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<nav class="navbar navbar-default navbar-fixed-top">
  
      <div class="container-fluid">
      

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
     <ul class="nav navbar-nav navbar-right">
       <a href="admin.php"> <img src="logoart.png" alt="" style="float: left; height: 50px; width: 200px; margin-right: 630px;"></a>

       

       <li  style="float: left;"><a href="admin.php">Home</a></li>
         <li><a href="artist.php">Artists</a></li>
          <li><a href="product.php">Products</a></li>
           <li><a href="regusers.php">All Users</a></li>
            
 <?php  if (isset($_SESSION['user'])) : ?>
         <li style="margin-top: 15px;"> <b><?php echo $_SESSION['user']['username']; ?></b></li>          

    <li style="margin-right: 30px;">  <a style="color: red;" href="index.php?logout='1'">logout</a>  </li>    

        <?php endif ?>

      

       
   </ul>
</div>
    </div>
</nav><hr>
<div class="container" align="center">
	<h2>Register An Artist</h2><hr>
<form method="post" action="addartists.php" enctype="multipart/form-data">
	
	<div class="form-group" style="width: 350px;">
		<label>Full Name</label>
		<input type="text" name="names" class="form-control" >
	</div>
	
	<div class="form-group" style="width: 350px;">
		<label>Profession</label>
		<input type="text" name="profession" class="form-control">
	</div>
	<div class="form-group" style="width: 350px;">
		<label>Profile Image</label>
		<input type="file" name="file" class="form-control">
	</div>

		<br> <input style="width: 200px;" class="btn btn-primary" type="submit" name="submit" value="Register"/>
</form>

	
</form>
</body>
</html>


