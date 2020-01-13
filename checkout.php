



<?php 
// Include the database config file 
require_once 'dbConfig.php'; 
 
// Initialize shopping cart class 
include_once 'cart.php'; 
$cart = new Cart; 
 
// If the cart is empty, redirect to the products page 
if($cart->total_items() <= 0){ 
    header("Location: index.php"); 
} 
 
// Get posted data from session 
$postData = !empty($_SESSION['postData'])?$_SESSION['postData']:array(); 
unset($_SESSION['postData']); 
 
// Get status message from session 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $statusMsgType = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ArtLabArica</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link  rel="icon" href="logoart.png" type="image/x-icon">

<!-- Custom style -->
<link href="carts/css/style.css" rel="stylesheet">
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

       <li> <a style="margin-right: 10px;" href="viewcart.php"><span class="badge"> <?php echo ($cart->total_items() > 0)?$cart->total_items().'':0; ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>

             

       
   </ul>
</div>
    </div>
</nav>
<div class="container">
    
   
    <div class="col-12">
         <h1>CHECKOUT</h1>
        <div class="checkout">
            <div class="row">
                <?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                </div>
            <?php } ?>
                <?php if(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
                </div>
                <?php } ?>
				
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your Cart</span>
                        <span class="badge badge-secondary badge-pill"><?php echo $cart->total_items(); ?></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php 
                        if($cart->total_items() > 0){ 
                            //get cart items from session 
                            $cartItems = $cart->contents(); 
                            foreach($cartItems as $item){ 
                        ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                                <small class="text-muted"><?php echo 'Ksh '.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                            </div>
                            <span class="text-muted"><?php echo 'Ksh '.$item["subtotal"]; ?></span>
                        </li>
                        <?php } } ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total </span>
                            <strong><?php echo 'Ksh '.$cart->total(); ?></strong>
                        </li>
                    </ul>
                    <a href="index.php" class="btn btn-block btn-info">Add Items</a>
                </div>
                <div class="col-md-8 order-md-1">
                    <h3>Shipping Details</h3>
                    <form method="post" action="action.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="<?php echo !empty($postData['first_name']); ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="<?php echo !empty($postData['last_name']); ?>" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo !empty($postData['email']); ?>" required>
                        </div>
                           
                        <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo !empty($postData['phone']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name">Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo !empty($postData['address']); ?>" required>
                        </div><br>
                        <input type="hidden" name="action" value="placeOrder"/><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="sintiyoamos@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Place Order">
<input type="hidden" name="amount" value="1000.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="12.000">
<input type="hidden" name="shipping" value="200.00">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" style="width: 300px; margin-left: 150px;" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>