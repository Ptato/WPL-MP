<?php 
//$conn = mysqli_connect("localhost", "MP", "password", "school");
 $conn = mysqli_connect("sql308.epizy.com", "epiz_31657722", "qrI7e76LHN", "epiz_31657722_School");

if(!$conn){
	echo 'Connection error' .mysqli_connect_error();
}


?>