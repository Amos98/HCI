<?php 
// Initialize shopping cart class 
include_once 'cart.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>ArtLabAfrica</title>
	 <link  rel="icon" href="fav.jpg" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	 <link  rel="icon" href="logoart.png" type="image/x-icon">

   
    <link rel="stylesheet" href="libs/css/custom.css" />
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<link href="common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="styles.css" rel="stylesheet">
	  <link  rel="icon" href="fav.jpg" type="image/x-icon">
	
	<link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">
	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  
      <div class="container-fluid">
      

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
     <ul class="nav navbar-nav navbar-right">
       <a href="index.php"> <img src="logoart.png" alt="" style="float: left; height: 50px; width: 200px; margin-right: 310px;"></a>
        <li style="float: right;"> <a href="viewcart.php"><span class="badge"> <?php echo ($cart->total_items() > 0)?$cart->total_items().'':0; ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                         <li style="float: right;"><a href="contact.php">Contact Us</a></li>
                           <li style="float: right;"><a href="register.php">Order Status</a></li>
                           <li style="float: right;"><a href="products.php">Buy Art</a></li>
                           <li style="float: right;"><a href="news.php">News & Events</a></li>
                           <li style="float: right;"><a href="about-us.php">About Us</a></li>
                           <li style="float: right;"><a href="art.php">Artists</a></li>
       <li  style="float: right;"><a href="index.php">Home</a></li>
         
          
           
            
            
               


      
        

       
   </ul>
</div>
    </div>
</nav>
	
<section class="intro-section">
		
 
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-1 col-lg-7">
					<div class="intro">
						<div class="profile-img"><img src="michael/prof.jpg" alt=""></div><br>
						<h2><b>Michel Musyoka</b></h2>
						<h4 class="font-yellow">Artist</h4>

							<b>BORN : </b>August 25, 1986<br><br>
							<b>EMAIL : </b>musyokamichael@gmail.com<br><br>
							<b>PHONE NUMBER : </b>(+254) 727453691
							
						
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	
	
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>About me</b></h3>
						<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50">
						Michael Musyoka was born in 1986 and raised in Nairobi. 

He grew to appreciate graffiti on commuter buses and walls of business premises in his neighborhood. This has laid the ground work for his approach to figurative compositions before enrolling into Buruburu Institute of Fine Arts in 2009. These skills would later in life secure him jobs as an illustrator in publishing companies and advertising agencies in Nairobi. 

In 2013 he founded brush tu art studio, an artist collective in Nairobi, alongside two other artists who he would team up with on various artistic projects including mural painting and mentoring younger artists. This also marked his entry into professional practice which has seen him exhibiting widely locally and abroad.

He was awarded 2nd prize in the professional artist category of Manjano Art Competition in 2015 in Nairobi, Kenya.

Michael lives and works in Nairobi.
<img src="michael/11.jpg" alt="">
					</p>
					
					
						
					
					</div><!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
	</section><!-- about-section -->
	
	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>MY WORK</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b></b></a>
						
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<div class="portfolioContainer">
			
			<div class="p-item web-design">
				<a href="michael/1.jpg" data-fluidbox>
					<img src="michael/1.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item branding graphic-design">
				<a href="michael/2.jpg" data-fluidbox>
					<img src="michael/2.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item web-design">
				<a href="michael/3.jpg" data-fluidbox>
					<img src="michael/3.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item p-item-2 graphic-design">
				<a href="michael/4.jpg" data-fluidbox>
					<img src="michael/4.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item branding graphic-design">
				<a href="michael/5.jpg" data-fluidbox>
					<img src="michael/5.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item graphic-design web-design">
				<a href="michael/6.jpg" data-fluidbox>
					<img src="michael/6.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item  graphic-design branding">
				<a href="michael/7.jpg" data-fluidbox>
					<img src="michael/7.jpg" alt=""></a>
			</div><!-- p-item -->
				
			<div class="p-item web-design branding">
				<a href="michael/8.jpg" data-fluidbox>
					<img src="michael/8.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item p-item-2 graphic-design">
				<a href="michael/9.jpg" data-fluidbox>
					<img src="michael/9.jpg" alt=""></a>
			</div><!-- p-item -->
		<div class="p-item p-item-2 graphic-design">
				<a href="michael/10.jpg" data-fluidbox>
					<img src="michael/10.jpg" alt=""></a>
			</div><!-- p-item -->
		
		</div><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Exhibitions and workshops</b></h3>
				
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
				
					<div class="experience margin-b-50">
						<b><p style="color: black;">Selected Exhibitions</p></b><br>
<p style="line-height: 33px; font-family: sans-serif;">April 2018: Yearning (Duo) –The Attic Art Space. Nairobi, Kenya.<br>
April 2018: World Art Dubai (group) –Create hub gallery. Dubai, UAE.<br>
Aug 2017: The Untitled (Group)- Polka Dot Gallery. Nairobi, Kenya.<br>
June 2017: The Young Guns (Group)- Circle Art Agency. Nairobi, Kenya.<br>
May 2016: Young Talents exhibition (Group)- Glocal Arts Gallery. Dronninglund, Denmark.<br>
Mar 2016: This For That (Duo)- The Art Space. Nairobi, Kenya .<br>
Nov 2015: The Kenya Art Fair (group)- The Sarit Center. Nairobi Kenya.<br>
Mar 2015: Manjano exhibition (Group)- The Village Market, Nairobi Kenya.<br>
Sept 2014: Finding Voice 3 (trio)- The Little Art Gallery. Nairobi, Kenya.<br>
Aug 2014: Finding Voice 2 (trio)- The Little Art Gallery. Nairobi, Kenya.<br>
May 2014: Finding Voice 1 (duo)- The Little Art Gallery. Nairobi, Kenya.</p><br><br>
<b><p style="color: black;">Selected Workshops</p></b><br>
<p style="line-height: 33px; font-family: sans-serif;"> Dec 2017: Non-Toxic Aquatint and etching workshop -Nairobi, Kenya<br>
May 2017: Wood-cut Printmaking -Nairobi, Kenya<br>
March 2017: Intaglio Print making- Nairobi, Kenya<br>
April 2012: Poster For Tommorrow: Draw Me Democracy- Nairobi, Kenya</p><br>
					
				</div><!-- col-sm-8 -->
			</div><!-- row -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->
	
	
	
	 <footer style="text-align: center; padding: 0px 0; background: #28023D; ">
    <b><p class="copyright" style="color: white;"></b>
      &copy; Copyright ArtLabAfrica

      
    </p>


  </footer>
	
	
	<!-- SCRIPTS -->
	
	<script src="common-js/jquery-3.2.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/isotope.pkgd.min.js"></script>
	
	<script src="common-js/jquery.waypoints.min.js"></script>
	
	<script src="common-js/progressbar.min.js"></script>
	
	<script src="common-js/jquery.fluidbox.min.js"></script>
	
	<script src="common-js/scripts.js"></script>
	
</body>
</html>