<?php

$conn = mysqli_connect('localhost', 'root', '', 'artist');
if (!$conn) {
	echo "Error: Connection problem." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	# code...
}
else{
	echo "connected";
}
?>