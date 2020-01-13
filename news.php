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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

<link href="css/bootstrap.min.css" rel="stylesheet">
 <link  rel="icon" href="logoart.png" type="image/x-icon">
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">
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
</nav><hr><br>


<div id="myBtnContainer">

  <button style="margin-left: 60px;"  class="btn" onclick="filterSelection('nature')"> 2018</button>
  <button style="margin-left: 80px;" class="btn" onclick="filterSelection('cars')"> 2017</button>
  <button style="margin-left: 80px;" class="btn" onclick="filterSelection('people')"> 2016</button>
  <button style="margin-left: 80px;" class="btn" onclick="filterSelection('2016')"> 2015</button>
   <button style="margin-left: 80px;" class="btn" onclick="filterSelection('2016')"> 2014</button>
    <button style="margin-left: 80px;" class="btn" onclick="filterSelection('2016')"> 2013</button>
</div><hr>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img style="width: 90%; height: 50%;"  src="artlab/5.jpg" alt="Mountains" style="width:100%">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img style="width: 90%; height: 50%;" src="artlab/6.jpg" alt="Lights" style="width:100%">
     
    </div>
  </div>
  <div class="column nature">
    <div class="content">
   <img style="width: 90%; height: 50%;" src="artlab/5.jpg" alt="Nature" style="width:100%">
     
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
     <img style="width: 90%; height: 50%;" src="artlab/4.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column cars">
    <div class="content">
  <img style="width: 90%; height: 50%;" src="artlab/5.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img style="width: 90%; height: 50%;"src="artlab/6.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>

  <div class="column people">
    <div class="content">
     <img style="width: 90%; height: 50%;" src="artlab/7.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img style="width: 90%; height: 50%;" src="artlab/8.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
   <img style="width: 90%; height: 50%;"g src="artlab/9.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>

  <div class="column people">
    <div class="content">
    <img style="width: 90%; height: 50%;" src="artlab/10.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
   <img style="width: 90%; height: 50%;" src="artlab/3.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img style="width: 90%; height: 50%;" src="artlab/4.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
<footer style="text-align: center; padding: 10px 0; background: #28023D; ">
    <b><p class="copyright" style="color: white;"></b>
      &copy; Copyright ArtLabAfrica

      
    </p>


  </footer>
