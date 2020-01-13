
<?php 
// Initialize shopping cart class 
include_once 'cart.php'; 

$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 
?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from www.creativethemes.co.in/demo/interior&furniture/html/light-version/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 18:29:36 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Interior & Furniture Multipurpose Html Template">
<meta name="keywords" content="Interior & Furniture Multipurpose Html Template">
<meta name="author" content="">
<title>Contact us</title>
<!--css-->

<link href="css/bootstrap.min.css" rel="stylesheet">
<!--css-->
</head>
<body id="page-top" class="index">
   <link  rel="icon" href="logoart.png" type="image/x-icon">
<!--header-->

 <nav class="navbar navbar-default navbar-fixed-top">
  
      <div class="container-fluid">
      

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
     <ul class="nav navbar-nav navbar-right">
       <a href="index.php"> <img src="logoart.png" alt="" style="float: left; height: 50px; width: 200px; margin-right: 370px;"></a>
       <li  style="float: left;"><a href="index.php">Home</a></li>
         <li><a href="art.php">Artists</a></li>
          <li><a href="about-us.php">About Us</a></li>
           <li><a href="news.php">News & Events</a></li>
            
            <li><a href="products.php">Buy Art</a></li>
                 <li><a href="register.php">Order Status</a></li>
                 <li><a href="contact.php">Contact Us</a></li>

       <li> <a style="margin-right: 20px;" href="viewcart.php"><span class="badge"> <?php echo ($cart->total_items() > 0)?$cart->total_items().'':0; ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        

       
   </ul>
</div>
    </div>
</nav><hr>
<!--header-->
<!--main-->
<main>
  <!--subheader-->
  <div id="content" class="no-top no-bottom">
    <!--about-us-->
    <section id="section-about" class="side-bg no-padding">
      <div class="container">
        <div class="row">
          
        <br><br>  <div class="col-md-6 col-sm-6  text-center div-right"> <img src="page.webp" class="img-responsive" alt="img" title="img" /> </div>
<div class="col-md-6 col-sm-6 ">
   <h2 style="margin-left: 80px;"> Contact Us </h2>
  <p style="line-height: 40px;"> <b><h5 style="margin-left: 100px;">Enquiries & Press</h5></b><span style="color: blue; margin-left: 100px;">info@artlabafrica.com</span> <br><br> <b><h5 style="margin-left: 100px;"><b>Curatorials</b></h5></b> <span style="color: blue; margin-left: 100px;">
curatorial@artlabafrica.com</span> <br><br><p style="margin-left: 100px;">ARTLabAfrica</p><p style="margin-left: 100px;"> P.O. Box 83</p><p style="margin-left: 100px;">00502 Nairobi, Kenya </p></p><br><p style="margin-left: 100px;">Follow Us on Social Media</p><p><img style="width: 40px; height: 40px; margin-left: 130px;" src="fb.jpg" ><img style="width: 40px; height: 40px;" src="ig.jpg"><img style="width: 60px; height: 50px; margin-top: 5px;" src="ln.png"></p>
            
           
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
    <!--about-us-->
  </div><br><br>
  <!--testimonial-->
 
</main>
<!--main-->

 <br><br><br><br><footer style="text-align: center; padding: 10px 0; background: #28023D; ">
    <b><p class="copyright" style="color: white;"></b>
      &copy; Copyright ArtLabAfrica

      
    </p>


  </footer>

<script  src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/cbpAnimatedHeader.js"></script>
<!-- Js File -->
</body>

<!-- Mirrored from www.creativethemes.co.in/demo/interior&furniture/html/light-version/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 18:29:36 GMT -->
</html>
