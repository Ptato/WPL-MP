<?php 
include('config.php');



if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $query ="DELETE FROM contact_us where id='$id'";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "<script>alert('Deleted');</script>";
        echo "<script>location.href='admin_cu.php';</script>";
    }
    
    else{
        echo "<script>alert('Failed to delete record');</script>";
    }
    
}



?>