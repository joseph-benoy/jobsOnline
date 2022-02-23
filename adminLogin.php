<?php
session_start();
require("includes/connection.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "select * from admin where email='$email' and password='$password'";
if($result = $con->query($sql)){
    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_row($result);
        $_SESSION['uid'] = $data[0];
        $_SESSION['name'] = $data[1];

        header("location:admindash.php");
    }
    else{
        header("location:login.php?error=1");

    }
}
else{
    header("location:login.php?error=1");
}
?>