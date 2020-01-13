<?php 
// Initialize shopping cart class 
include_once 'cart.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>ArtLabAfrica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">

  <link href="css/bootstrap.min.css" rel="stylesheet">
 <link  rel="icon" href="logoart.png" type="image/x-icon">
    <style>
    .product_image{
            height:200px;
        }
        .product_name{
            height:40px; 
            padding-left:20px; 
            padding-right:20px;
        }
        .product_footer{
            padding-left:20px; 
            padding-right:20px;
        }
</style>

   
   
 <style type="text/css">
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 20.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 60%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
  
      <div class="container-fluid">
      

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
     <ul class="nav navbar-nav navbar-right">
       <a href="index.php"> <img src="logoart.png" alt="" style="float: left; height: 50px; width: 200px; margin-right: 410px;"></a>
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
</nav><hr>
<div class="container">
  <h3 class="page-header text-center">Our Artists and Designers</h3>
  <!-- Product list -->
    <div class="row col-lg-12">
        <?php 

        // Get products from database 
        $result = $db->query("SELECT * FROM artists ORDER BY id ASC LIMIT 30"); 
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
        <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                <div class="row product_image">
                            <img src="<?php echo $row['image'] ?>" width="100%" height="100%">
                        </div>
                <div style="text-align: center;" class="row product_name"><h3><?php echo $row["names"]; ?></h3>
                </div>
               <br> <div style="text-align: center;" class="row product_footer">
                <p class="title"><b><?php echo $row["profession"]; ?></p>
                  <a href="mywork.php" class="btn btn-block btn-info"> MyWork</a>
            
            </div>
        </div>
    </div>
</div>

        <?php } } ?>
       </div>

 
 </div>
 
</body>

</html>
 <br><br><footer style="text-align: center; padding: 20px 0; background: #28023D; ">
    <b><p class="copyright" style="color: white;"></b>
      &copy; Copyright ArtLabAfrica

      
    </p>


  </footer>
