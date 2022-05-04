<?php 
include('config.php');



if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $query ="DELETE FROM admission_form where id='$id'";
    $data = mysqli_query($conn,$query);
    if($data){
        echo 'deleted';
        echo "<script>location.href='admin_af.php';</script>";
    }
    
    else{
        echo "<script>alert('Failed to delete record');</script>";
    }
    
}



?>