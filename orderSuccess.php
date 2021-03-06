
<?php 
if(!isset($_REQUEST['id'])){ 
    header("Location: index.php"); 
} 
 
// Include the database config file 
require_once 'dbConfig.php'; 
 
// Fetch order details from database 
$result = $db->query("SELECT r.*, c.first_name, c.last_name, c.email, c.phone FROM orders as r LEFT JOIN customers as c ON c.id = r.customer_id WHERE r.id = ".$_REQUEST['id']); 
 
if($result->num_rows > 0){ 
    $orderInfo = $result->fetch_assoc(); 
}else{ 
    header("Location: index.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ArtLabAfrica</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
 <link  rel="icon" href="logoart.png" type="image/x-icon">
</head>
<body>
     <nav class="navbar navbar-default navbar-fixed-top">
  
      <div class="container-fluid">
      

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
     <ul class="nav navbar-nav navbar-right">
       <a href="index.php"> <img src="logoart.png" alt="" style="float: left; height: 50px; width: 200px; margin-right: 440px;"></a>
       <li  style="float: left;"><a href="index.php">Home</a></li>
         <li><a href="art.php">Artists</a></li>
          <li><a href="about-us.php">About Us</a></li>
           <li><a href="news.php">News & Events</a></li>
            
            <li><a href="products.php">Buy Art</a></li>
                 <li><a href="register.php">Order Status</a></li>
                 <li><a style="margin-right: 40px;" href="contact.php">Contact Us</a></li>

      

       
   </ul>
</div>
    </div>
</nav>
<div class="container">
     
    <h1>ORDER STATUS</h1>
    <div class="col-12">
        <?php if(!empty($orderInfo)){ ?>
            <div class="col-md-12">
                <div class="alert alert-success">Your order has been placed successfully.</div>
            </div>
			
            <!-- Order status & shipping info -->
            <div class="row col-lg-12 ord-addr-info">
                <b><div class="hdr" style="font-size: 20px;">Order details</div></b><br>
                <p><b>Reference ID:</b> #<?php echo $orderInfo['id']; ?></p>
                <p><b>Total:</b> <?php echo 'ksh '.$orderInfo['grand_total'].' '; ?></p>
                   <p><b>Placed On:</b> <?php echo $orderInfo['created']; ?></p>
                <p><b>Buyer Name:</b> <?php echo $orderInfo['first_name'].' '.$orderInfo['last_name']; ?></p>
                <p><b>Email:</b> <?php echo $orderInfo['email']; ?></p>
                <p><b>Phone:</b> <?php echo $orderInfo['phone']; ?></p>
            </div>
			
            <!-- Order items -->
           <div class="col-sm-8 col-sm-offset-2">
                <div class="table-responsive">
             <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>QTY</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Get order items from the database 
                        $result = $db->query("SELECT i.*, p.name, p.price FROM order_items as i LEFT JOIN products as p ON p.id = i.product_id WHERE i.order_id = ".$orderInfo['id']); 
                        if($result->num_rows > 0){  
                            while($item = $result->fetch_assoc()){ 
                                $price = $item["price"]; 
                                $quantity = $item["quantity"]; 
                                $sub_total = ($price*$quantity); 
                        ?>
                        <tr>
                            <td><?php echo $item["name"]; ?></td>
                            <td><?php echo 'Ksh '.$price.''; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo 'Ksh '.$sub_total.''; ?></td>
                        </tr>
                        
                        <?php } 
                        } ?>
                    </tbody>
                </table>
                <a style="margin-left: 265px;"  href="index.php?logout='1'" class="btn btn-danger"> <span class="glyphicon glyphicon-arrow-right"></span>Exit</a>
            </div>
        </div>
        <?php }else{ ?>
        <div class="col-md-12">
            <div class="alert alert-danger">Your order submission failed.</div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>