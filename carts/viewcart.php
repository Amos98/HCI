<?php 
// Initialize shopping cart class 
include_once 'cart.php'; 
$cart = new Cart; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>View Cart - PHP Shopping Cart</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
<link href="css/style.css" rel="stylesheet">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
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
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PAWA.ART</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- left nav here -->
          </ul>
    <!-- Cart basket -->
    <ul class="nav navbar-nav navbar-right">
        <li><a href="home_page.php">Home</a></li>
         <li><a href="art.php">Portfolio</a></li>
          <li><a href="about.php">About Us</a></li>
           <li><a href="services.php">Services</a></li>
            <li><a href="blog.php">Blogs</a></li>
             <li><a href="index.php">Buy Art</a></li>


       <li> <a href="viewcart.php"><span class="badge"> <?php echo ($cart->total_items() > 0)?$cart->total_items().'':0; ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
   </ul>
</div>
    </div>
</nav>
<h1 class="page-header text-center">Cart Details</h1>
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
            
                        <a style="margin-left: 170px;" href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left "></span> Continue Shopping</a>
                   
                        <?php if($cart->total_items() > 0){ ?>
                        <a style="margin-left: 120px;" href="checkout.php" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Checkout</a>
                        <?php } ?>
        
                </div>
            </div>
</div>
</body>
</html>