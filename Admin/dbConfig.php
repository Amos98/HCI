<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "100636"; 
$dbPassword = "Shazam+1998A/B"; 
$dbName     = "hci"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>