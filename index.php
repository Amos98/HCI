<?php 
// Initialize shopping cart class 
include_once 'cart.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.creativethemes.co.in/demo/interior&furniture/html/light-version/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 18:29:11 GMT -->
<head>
  <style>
    .carousel-caption h2 { font-size:80px; font-family: 'Playball', cursive; margin:0 0 2% 0}
.carousel-caption h2 span { color:#93b120}
.carousel-caption p { font-size:17px; line-height:20px; margin:0 0 5% 0; font-weight:300; line-height:40px;}
.carousel-caption hr { max-width:50px; margin:30px auto;  
 border-color: #93b120 -moz-use-text-color -moz-use-text-color;
    border-image: none;
    border-style: solid none none;
    border-width: 4px 0 0;}

    .banner-bt {
  color:#fff;
  border: solid 2px #fff;
  font-family:Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform:uppercase;
  border-radius:0;
  margin-top: 100px;
  font-size:14px;
  padding:6px 27px
}

.banner-bt:hover {
color:#2c2c2c;
background-color:lightgreen;
border-color:#fff;
}


    

  </style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Interior & Furniture Multipurpose Html Template">
<meta name="keywords" content="Interior & Furniture Multipurpose Html Template">
<meta name="author" content="">
<title>ArtLabAfrica</title>


<link rel="stylesheet" type="text/css" href="assets/css/full-slider.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  <link href="css/bootstrap.min.css" rel="stylesheet">
   <link  rel="icon" href="logoart.png" type="image/x-icon">
</head>
<body id="page-top" class="index m0">
  <div class="preloader"></div> 

<header>
  <!--navbar-->
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

       <li> <a style="margin-right: 30px;" href="viewcart.php"><span class="badge"> <?php echo ($cart->total_items() > 0)?$cart->total_items().'':0; ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        

       
   </ul>
</div>
    </div>
</nav>
</header>
<!--SLIDER-->
<header id="myCarousel" class="carousel slide ">
  <!-- Indicators -->
  <ol class="carousel-indicators carousel-indicators2">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for Slides -->
  <div class="carousel-inner carousel-fade">
    <div class="item active">
      <!-- Set the first background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/aaron-paul-213841-unsplash.jpg');"></div>
      <div class="carousel-caption">
        <h2>Appreciating <span>Art</span></h2>
        <hr>
        <p style="font-size: 18px;">We as ArtLabAfrica appreciate and promote the work done by talented artists and designers who have not gotten the breakthrough to showcase their talents.<br><br><a style="text-decoration: none;" href="news.php" class="banner-bt">Find Out More</a>
   </p>
        </div>
    </div><br>
    <div class="item">
      <!-- Set the second background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/jon-tyson-762619-unsplash.jpg');"></div>
      <div class="carousel-caption">
        <h2><span>Our</span> Artists</h2>
        <hr>
        <p style="font-size: 20px;">View Artistic Work done by our artists and their profiles <br><br> <a style="text-decoration: none;" href="art.php" class="banner-bt">Find Out More</a>
 </p>
        </div>
    </div>
    <div class="item">
      <!-- Set the third background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/interior-design-3.jpg');"></div>
      <div class="carousel-caption">
        <h2> Purchase <span>Art</span></h2>
        <hr>
        <p style="font-family: sans-serif; font-size: 20px;"> Buy awesome art drawings and paintings done by our artists .<br><br>
            <a style="text-decoration: none;" href="products.php" class="banner-bt">Find Out More</a> 
  </p>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control col2" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a> </header>
<!--SLIDER-->
<main>
  <section id="section-about">
    <div class="container" >
      <div class="row">
        <h2 class="text-center"> About Us </h2>
        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
        <div class="clearfix"></div>
        <div class="col-md-7 col-sm-8">
          <p style="line-height: 40px;">Established in 2013, ARTLabAfrica is a cultural platform focused on developing experimental art in East Africa and connecting with an international audience. </p>
          <p style="line-height: 40px;"> Operating in a region where the paucity of infrastructure hinders the artistic recognition of the talent and art produced, ARTLabAfrica aims to provide a framework for artists to exhibit their work outside the region, further fostering curatorial practice and creating new dialogues with curators, collectors, museums and cultural producers throughout the world. <br><br></p>
          <div class="read-more read-home"><a style="font-size: 20px;"  href="about-us.php" class="hvr-sweep-to-right-3">Read more <i class="fa fa-long-arrow-right"></i></a></div>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-5  col-sm-4 text-center"> <img src="assets/img/bg-side-1.jpg" class="img-responsive" alt="img" title="img" /> </div>
      </div>
    </div>
  </section>

<!-- Js File -->
<script  src="assets/js/jquery-2.2.4.min.js"></script>
<script  src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script  src="assets/js/scrolltopcontrol.js"></script>
<script src="assets/js/all.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/cbpAnimatedHeader.js"></script>
<!-- Js File -->
</body>

<!-- Mirrored from www.creativethemes.co.in/demo/interior&furniture/html/light-version/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 18:29:36 GMT -->
</html>
