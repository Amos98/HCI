<?php 
// Initialize shopping cart class 
include_once 'cart.php'; 

$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ArtLabAfrica</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link  rel="icon" href="logoart.png" type="image/x-icon">

<style>
    .product_image{
            height:200px;
        }
        .product_name{
            height:80px; 
            padding-left:20px; 
            padding-right:20px;
        }
        .product_footer{
            padding-left:20px; 
            padding-right:20px;
        }
</style>

</head>
</head>
<body>
      <nav class="navbar navbar-default navbar-fixed-top">
  
      <div class="container-fluid">
      

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
     <ul class="nav navbar-nav navbar-right">
       <a href="index.php"> <img src="logoart.png" alt="" style="float: left; height: 50px; width: 200px; margin-right: 400px;"></a>
       <li  style="float: left;"><a href="index.php">Home</a></li>
         <li><a href="art.php">Artists</a></li>
          <li><a href="about-us.php">About Us</a></li>
           <li><a href="news.php">News & Events</a></li>
            
            <li><a href="products.php">Buy Art</a></li>
                 <li><a href="register.php">Order Status</a></li>
                 <li><a href="contact.php">Contact Us</a></li>

       <li> <a href="viewcart.php"><span class="badge"> <?php echo ($cart->total_items() > 0)?$cart->total_items().'':0; ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        

       
   </ul>
</div>
    </div>
</nav><br><br><br>
<div class="container">
  <h2>Buy Art</h2><hr>
   
    
    <!-- Product list -->
    <div class="row col-lg-12">
        <?php 

        // Get products from database 
        $result = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 30"); 
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
        <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                <div class="row product_image">
                            <img src="<?php echo $row['image'] ?>" width="100%" height="95%">
                        </div>
                <div class="row product_name"><h5><?php echo $row["name"]; ?></h5>
                </div>
                <div class="row product_footer">
                <p class="pull-left"><b>Price: <?php echo 'Ksh '.$row["price"].''; ?></b></p>
                
                <span class="pull-right"><a href="action.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Cart</a></span>
            </div>
        </div>
    </div>
</div>

        <?php } } ?>
       </div>
     </div>
</body>
</html>