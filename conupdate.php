 <?php 
include('sign.php');

if (!isRecep()) {
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

require_once "dbConfig.php";
 $status = "";
 $status_err = "";
 
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

  

       $input_status = trim($_POST["status"]);
    if(empty($input_status)){
        $status_err = "Please update the order status.";     
    
    }
    else{
        $status = $input_status;

    }
    
     
  

     if(empty($status_err)){
    
    
      // Prepare an update statement
        $sql = "UPDATE orders SET status=? WHERE id=?";
         
        if($stmt = mysqli_prepare($db, $sql)){

  
          mysqli_stmt_bind_param($stmt, "si", $param_status,$param_id);
            
      
         
            $param_status= $status;
            $param_id = $id;
            
            
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: confirm.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
        }
     }
        // Close statement
        mysqli_stmt_close($stmt);
    }

    mysqli_close($db);
} else{

    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

        $id =  trim($_GET["id"]);
    
        $sql = "SELECT id, grand_total, created, status FROM orders WHERE id = ?";
        if($stmt = mysqli_prepare($db, $sql)){
          
            mysqli_stmt_bind_param($stmt, "i", $param_id);
          
            $param_id = $id;
            
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
              
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                 
                $created = $row["created"];
                $gtotal = $row["grand_total"];
                $status = $row["status"];
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
    }  else{
        
        header("location: error.php");
        exit();
    }
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
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
                        <h2>Update Order</h2>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars(($_SERVER['REQUEST_URI'])); ?>" method="post">
                       

                       

                        
                        <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
                            <label>Order Status</label>
                            <input type="text" name="status" class="form-control" value="<?php echo $status; ?>">
                            <span class="help-block"><?php echo $status_err;?></span>
                        </div>
                        

                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input  style="width: 140px; margin-left: 70px;" type="submit" class="btn btn-primary" value="Submit">
                        <a style="width: 140px; margin-left: 70px; background-color: azure;" href="confirm.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>