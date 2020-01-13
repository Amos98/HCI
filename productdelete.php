
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
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "dbConfig.php";
    
    $sql = "DELETE FROM products WHERE id = ?";
    
    if($stmt = mysqli_prepare($db, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: product.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($db);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>delete product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body style="background-color: azure;">
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
                        <h1>Delete Product</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this Product?</p><br>
                            <p>
                                <input style="width: 100px; margin-left: 70px;" type="submit" value="Yes" class="btn btn-danger">
                                <a style="width: 100px; margin-left: 70px;" href="product.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
