<?php include ('sign.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link  rel="icon" href="logoart.png" type="image/x-icon">
</head>
<hr>
<body>
<div class="header" style="background-color: lightblue;">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="form-group">
		<label>Full Name</label>
		<input type="text" name="username" class="form-control" value="<?php echo $username; ?>"
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password_1" class="form-control">
	</div>
	<div class="form-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" class="form-control">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn" style=" margin-left: 120px; padding: 10px 60px;">Register</button>
	</div>
	<p style="margin-left: 90px;">
		Already have an account? <a style="text-decoration: none;" href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>