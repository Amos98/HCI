<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', '100636', 'Shazam+1998A/B', 'hci');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

if (isset($_POST['register_btn'])) {
	register();
}

function register(){
	
	global $db, $errors, $username, $email;

	
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	$check_email_query="SELECT *FROM users WHERE email='$email'"; 
    $run_sql=mysqli_query($db,$check_email_query); 
  
     if(mysqli_num_rows($run_sql)>0)  
    {  
echo "<script>alert('email $email already exists,!')</script>";  
return false;
}
	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Full Name is required");
		
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1 && $password_1<8)) { 
		array_push($errors, "Password must be atleast 8 characters long"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['access_level'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (email, username, password, access_level) 
					  VALUES('$email', '$username', '$password', '$access_level')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: port.php');
		}else{
			$query = "INSERT INTO users (email, username, password, access_level) 
					  VALUES('$email', '$username', '$password', '0')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			header('location: status.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
}

if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['access_level'] == '1') {

				$_SESSION['user'] = $logged_in_user;
			
				header('location: admin.php');		  
			}
			else if($logged_in_user['access_level'] == '2'){

				$_SESSION['user'] = $logged_in_user;

				header('location: confirm.php');
			}

			else {
				$_SESSION['user'] = $logged_in_user;
				
				header('location: status.php');
			}
		}else {
			array_push($errors, "email and password do not match");
		}
	}
}

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['access_level'] == '1' ) {
		return true;
	}else{
		return false;
	}
}

function isRecep()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['access_level'] == '2' ) {
		return true;
	}else{
		return false;
	}
}		