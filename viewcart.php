<?php 
// Initialize shopping cart class 
include_once 'cart.php'; 
$cart = new Cart; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ArtLabAfrica</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">


<!-- Custom style -->
<link href="carts/css/style.css" rel="stylesheet">
  <link  rel="icon" href="logoart.png" type="image/x-icon">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<script>
function updateCartItem(obj,id){
    $.get("action.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
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
<h1 class="page-header text-center">Your Cart Details</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
                <div class="table-responsive">
                   <table class="table table-bordered table-striped">
                        <thead>
                            
                             <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th></th>

                        </thead>
                        <tbody>
                            <?php 
                            if($cart->total_items() > 0){ 
                                // Get cart items from session 
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                            ?>
                            <tr>
                                <td><?php echo $item["name"]; ?></td>
                                <td><?php echo 'Ksh '.$item["price"].' '; ?></td>
                                <td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
                                <td class="text-right"><?php echo 'Ksh '.$item["subtotal"].''; ?></td>
                                <td class="text-right"><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')?window.location.href='action.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"><span class="glyphicon glyphicon-trash"></span> </button> </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="5"><p>Your cart is empty.!!</p></td></tr>
                            <?php } ?>
                            <?php if($cart->total_items() > 0){ ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><strong>Cart Total</strong></td>
                                <td class="text-right"><strong><?php echo 'Ksh '.$cart->total().''; ?></strong></td>
                                <td></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            
                        <a style="margin-left: 170px;" href="products.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left "></span> Continue Shopping</a>
                   
                        <?php if($cart->total_items() > 0){ ?>
                        <a style="margin-left: 120px;" href="checkout.php" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Checkout</a>
                        <?php } ?>
        
                </div>
            </div>
</div>
</body>
</html>