<?php 
$uname = "admin";
$pwd = "admin";
session_start();
if(isset($_SESSION['uname'])){
    // echo "<h1> Hello</h1>";
    echo "<script>location.href='admin_main.php'</script>";
}

else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        echo "<script>location.href='welcome.php'</script>";
    }
    else{
        echo "<script>alert('username or password incorrect')</script>";
        echo "<script>location.href='login.php'</script>";
    }

}

?>