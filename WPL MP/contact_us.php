<?php 
$email =$_POST['email'];
$name =$_POST['name'];
$message =$_POST['message'];

include('config.php');
if(!$conn){
	echo 'Connection error' .mysqli_connect_error();
}
	
$stmt=$conn->prepare("INSERT INTO contact_us(Name,email,Content) VALUES (?,?,?)");
$stmt->bind_param("sss",$name,$email,$message);
$stmt->execute();
function function_alert($message) {
       
    echo "<script>alert('$message');</script>";
}
function backtohome() {
       
    echo "<script>location.href='index.php';</script>";
}

function_alert("Your submission has been recorded");
backtohome();
																			
?>