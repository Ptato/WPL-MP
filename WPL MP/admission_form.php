<?php 
$email =$_POST['email'];
$name =$_POST['name'];
$fname =$_POST['fname'];
$mname =$_POST['mname'];
$bg =$_POST['bg'];
$dob =$_POST['dob'];
$address =$_POST['address'];

include('config.php');
if(!$conn){
	echo 'Connection error' .mysqli_connect_error();
}
	
$stmt=$conn->prepare("INSERT INTO admission_form(name,fname,mname,address,dob,email,bg) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss",$name,$fname,$mname,$address,$dob,$email,$bg);
$stmt->execute();
echo "SUCCESSFULL";
 
																				
																				
?>