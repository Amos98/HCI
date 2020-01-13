<?php 
	include('sign.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: index.php");
}
require_once 'dbConfig.php';
include_once 'cart.php'; 
$cart = new Cart; 
?>


<!DOCTYPE html>
<html>
<head>
	<title>ArtLabAfrica</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">

    section{
       
      background-color: #ffffffff;
        background-repeat: no-repeat;
         background-size: 800px 550px;
        
    
    }
   
    table{
          border: 1px solid black;
    border-collapse: collapse;
    }
</style>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
  
      <div class="container-fluid">
      

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
     <ul class="nav navbar-nav navbar-right">
       <a href="index.php"> <img src="logoart.png" alt="" style="float: left; height: 50px; width: 200px; margin-right: 340px;"></a>
       <li  style="float: left;"><a href="index.php">Home</a></li>
         <li><a href="art.php">Artists</a></li>
          <li><a href="about-us.php">About Us</a></li>
           <li><a href="news.php">News & Events</a></li>
            
            <li><a href="products.php">Buy Art</a></li>
              
                 <li><a href="contact.php">Contact Us</a></li>

       <li> <a href="viewcart.php"><span class="badge"> <?php echo ($cart->total_items() > 0)?$cart->total_items().'':0; ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>

        <?php  if (isset($_SESSION['user'])) : ?>
         <li style="margin-top: 15px; margin-right: 50px;"> <b><?php echo $_SESSION['user']['username']; ?></b></li>          
    

        <?php endif ?>

        

       
   </ul>
</div>
    </div>
</nav>
	<?php  if (isset($_SESSION['user'])) : ?>
          <?php echo $_SESSION['user']['username']; ?>


        <?php endif ?>
    </header><hr>
    <section style="width: 800px; margin-left: 200px;">
       

        <form action="status.php" method="post" style="">
            
            <br><h3 style="text-align: center;">Enter your email to check order status.</h3><br>
            <input style="width: 400px; border-radius: 5px; height: 40px; margin-left: 190px;" type="email" name="email" placeholder="     Enter your Email"><br><br><br>
            <input style="margin-left: 240px;" align="center" class="btn btn-success" type="submit" name="check" value="Check Order">
        </form><br>

        <?php



if (isset($_POST['check'])) {
    # code...
    $email=$db->real_escape_string($_REQUEST['email']);

$sql="SELECT orders.id, first_name,last_name,email,phone,address,orders.created,grand_total,orders.status FROM `customers` JOIN orders ON orders.customer_id = customers.id WHERE  email = '".$email."'";

$result = $db->query($sql);

if ($result -> num_rows > 0) {
    # code...
    while ($row = $result->fetch_assoc()) {
        # code...
        echo "<table class = 'table table-stripped'>
        <tr> 
            <tr>
                <th>First Name</th>  <td>".$row['first_name']."</td>
                </tr>
                <tr>
                <th>Last name</th>  <td>".$row['last_name']."</td>
                </tr>
                <tr>
                <th>Email Address</th> <td>".$row['email']."</td>
                </tr>
                <tr>
                <th>Phone Number</th>  <td>".$row['phone']."</td>
                </tr>
                <tr>
                <th>Address</th> <td>".$row['address']."</td>
                </tr>
                <tr>
                <th>Date Ordered</th>   <td>".$row['created']."</td>
                </tr>
                <tr>
                <th>Grand Total</th>  <td>".$row['grand_total']."</td>
                </tr>
                <tr>
                <th>Status</th> <td><b>".$row['status']."</b></td>
                <tr>
            </tr>
            </table>";
    }
} else
{
    echo "No Records found";
}

}


?>
  <a style="margin-left: 265px;"  href="index.php?logout='1'" class="btn btn-danger"> <span class="glyphicon glyphicon-arrow-right"></span>logout</a>
</section>
</body>

</html><br><br>
<footer style="text-align: center; padding: 16px 0; background: #28023D; ">
    <b><p class="copyright" style="color: white;"></b>
      &copy; Copyright ArtLabAfrica

      
    </p>


  </footer>


