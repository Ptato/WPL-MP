<?php 

$conn = mysqli_connect('localhost','MP','password','school');

if(!$conn){
	echo 'Connection error' .mysqli_connect_error();
}


?>