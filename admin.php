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
    <title>admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
        
    <style type="text/css">
		h1{
		
		font-style: cursive;
		font-family: times new roman;
		font color:black;
	}
	.topnav {
  overflow: hidden;
  background-color: powderblue;
  height: 34px;
  padding: 3px;

}
a.button{
	color: #0000cd;
	background-color: #d8bfd8;
	border-color: #00fa9a;
	margin-right: 30px;
	padding: 5px 12px;
	margin-bottom: 0;
	font-size: 16px;
    font-weight: 400;
    line-height: 2.5;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border:2px solid transparent;
    border-radius: 4px;
    text-decoration: none;
   

}


    </style>

 </head>
    
<body>
  <header>
  <section>
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
<img style="width: 400px; height: 300px; margin-left: 400px;" src="admin.png">
 <p style="font-size: 20px; margin-left: 300px; font-family: sans-serif;">Manage the system database by clicking the directories below:&nbsp; &nbsp;&nbsp; &nbsp;<br><br>
  <a  style="text-decoration: none; margin-left: 190px;" href="regusers.php"> All Users in the system</a><br><br>
  <a style="text-decoration: none; margin-left: 190px;" href="product.php">Products in the system</a><br><br>
  <a style="text-decoration: none; margin-left: 190px;" href="artist.php">Artist & Designers currently in the system</a><br>

 
</p>
</header>
</body>
   </html>
    