
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
<title>About us</title>
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
          
          <div class="col-md-6 col-sm-6  text-center div-right"> <img src="assets/img/bg-side-1.jpg" class="img-responsive" alt="img" title="img" /> </div>
<div class="col-md-6 col-sm-6 ">
   <h2> Who We Are.. </h2>
  <p style="line-height: 40px;">As a platform for experimentation ARTLabAfrica functions as an open laboratory for the expression of artistic and cultural practices taking place in East Africa, representing artists whose diverse practices encompass performance, installation, painting, photography and sculpture. </p>
            <h2>The Gallery </h2>
            <p style="line-height: 40px;">

The gallery has supported the production of performative work and has engendered the first commercial presentation of several of the artists it represents outside of the region.
</p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
    <!--about-us-->
  </div><br><br>
  <!--testimonial-->
  <section id="section-testimonial" class="text-light" style="background-blend-mode: soft-light;">
    <div>
      <h2 class="text-center"> Customer Feedback </h2>
      <div class="separator"><span><i class="fa fa-circle"></i></span></div>
    </div>
    <div class="container content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-6  col-sm-6 Left">
                <blockquote class="custom-quote">
                  <div class="row">
                    <div class="col-md-4  col-sm-4 text-center"><img src="assets/img/test1.jpg" alt="img" title="img" class="img-responsive img-circle" style="width: 134px; height: 134px;"></div>
                    <div class="col-md-8  col-sm-8"> <span class="fa fa-quote-left"></span>
                      <p> Awesome drawing </p>
                      <footer>
                        <h6>Samuel Kabechu <span>Artist</span></h6>
                      </footer>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="col-md-6  col-sm-6 Right slider-n">
                <blockquote class="custom-quote">
                  <div class="row">
                    <div class="col-md-4  col-sm-4 text-center"><img src="assets/img/test4.jpg" alt="img" title="img" class="img-responsive img-circle" style="width: 134px; height: 134px;"></div>
                    <div class="col-md-8  col-sm-8"> <span class="fa fa-quote-left"></span>
                      <p> Awesome Graffiti </p>
                      <footer>
                        <h6>BIANCA CHEGE, <span>Artist</span></h6>
                      </footer>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <blockquote class="custom-quote">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 text-center"><img src="assets/img/test3.jpg" title="" alt="" class="img-responsive img-circle" style="width: 134px; height: 134px;"></div>
                    <div class="col-md-8 col-sm-8"> <span class="fa fa-quote-left"></span>
                      <p>Awesome Art Paintigs </p>
                      <footer>
                        <h6>Dennis Murithi, <span>Artist & painter</span></h6>
                      </footer>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="col-md-6 col-sm-6  slider-n">
                <blockquote class="custom-quote">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 text-center" ><img src="assets/img/test2.jpg" alt="img" title="img" class="img-responsive  img-circle" style="width: 134px; height: 134px;"></div>
                    <div class="col-md-8 col-sm-8"> <span class="fa fa-quote-left"></span>
                      <p> Awesome art </p>
                      <footer>
                        <h6>Marilyn Mwaura<span> Theme Designer</span></h6>
                      </footer>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <blockquote class="custom-quote">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 text-center"><img src="assets/img/test5.jpg" alt="img" title="img" class="img-responsive img-circle"  style="width: 134px; height: 134px;"></div>
                    <div class="col-md-8 col-sm-8"> <span class="fa fa-quote-left"></span>
                      <p> Awesome Design </p>
                      <footer>
                        <h6>Edwin Makau, <span>Designer</span></h6>
                      </footer>
                    </div>
                  </div>
                </blockquote>
              </div>
              <div class="col-md-6 col-sm-6 slider-n">
                <blockquote class="custom-quote">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 text-center"><img src="assets/img/test6.jpg" alt="img" title="img" class="img-responsive img-circle"  style="width: 134px; height: 134px;"></div>
                    <div class="col-md-8 col-sm-8"> <span class="fa fa-quote-left"></span>
                      <p>Awesome Art</p>
                      <footer>
                        <h6>Felix Mwiga <span>Designer & Artist</span></h6>
                      </footer>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--testimonial-->
 
</main>
<!--main-->

 <footer style="text-align: center; padding: 10px 0; background: #28023D; ">
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
