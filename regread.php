 <?php 
include('sign.php');

if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: index.php");
}
?>
<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once "dbConfig.php";
    
    $sql = "SELECT * FROM users WHERE id = ?";
    
    if($stmt = mysqli_prepare($db, $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        $param_id = trim($_GET["id"]);
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){

                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                $username = $row["username"];
                $email = $row["email"];
                $access_level = $row["access_level"];
               
            } else{
                
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     

    mysqli_stmt_close($stmt);

    mysqli_close($db);
} else{
   
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  
      <div class="container-fluid">
      

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
     <ul class="nav navbar-nav navbar-right">
       <a href="admin.php"> <img src="logoart.png" alt="" style="float: left; height: 50px; width: 200px; margin-right: 630px;"></a>

       

       <li  style="float: left;"><a href="admin.php">Home</a></li>
         <li><a href="artist.php">Artists</a></li>
          <li><a href="product.php">Products</a></li>
           <li><a href="regusers.php">All Users</a></li>
            
 <?php  if (isset($_SESSION['user'])) : ?>
         <li style="margin-top: 15px;"> <b><?php echo $_SESSION['user']['username']; ?></b></li>          

    <li style="margin-right: 30px;">  <a style="color: red;" href="index.php?logout='1'">logout</a>  </li>    

        <?php endif ?>

      

       
   </ul>
</div>
    </div>
</nav><hr>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View User</h1>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <p class="form-control-static"><?php echo $row["username"]; ?></p><hr>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $row["email"]; ?></p><hr>
                    </div>
                    <div class="form-group">
                        <label>Access Level</label>
                        <p class="form-control-static"><?php echo $row["access_level"]; ?></p><hr>
                    </div>
                   
                    <p><a style="width: 200px;" href="regusers.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>