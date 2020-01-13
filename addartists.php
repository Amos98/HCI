<?php
include("dbConfig.php");

if(isset($_POST['submit'])){

$names = $_POST['names'];
$profession = $_POST['profession'];	
 
  $name = $_FILES['file']['name'];
  $target_dir = "profile/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into artists(names, profession, image) values('".$names."', '".$profession."' ,'".$target_dir.$name."')";
     mysqli_query($db,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 header('location: artist.php');
}
?>