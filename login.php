<?php include('sign.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	 <link  rel="icon" href="logoart.png" type="image/x-icon">
</head>
<body>

   <hr>
	<div class="header" style="background-color: lightblue;"> 
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" >
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn" style=" margin-left: 120px; padding: 10px 60px;">Login</button>
		</div><br>
		<p style="margin-left: 90px;">
			Not yet registered? <a style="text-decoration: none;" href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>