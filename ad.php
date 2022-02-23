<?php
require("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Online</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<header class="topnav">
    <a href="#news" style='font-weight:bold'>JOBS ONLINE</a>
    <span>
        <a href="index.php">Home</a>
        <a   href="jobs.php">Jobs</a>
        <a href="login.php">Login</a>
        <a href="register.php">Sign Up</a>
    </span>
</header>
<main>
    <div class='adWrap'>
    <?php
    $id = $_GET['id'];
    $sql = "select * from job where id=$id";
    if($result=$con->query($sql)){
        $row = mysqli_fetch_assoc($result);
        $title=$row['title'];
        $lastdate=$row['last_date'];
        $openings=$row['openings'];
        $cdate = $row['date'];
        $id = $row['id'];
        $url = $row['url'];
        $description = $row['description'];
        $img = $row['img'];
        $rid =  $row['rid'];
        $dt = new DateTime($lastdate);
        $lastdate =$dt->format('Y-m-d');
        $rdata= mysqli_fetch_assoc($con->query("select * from recruiter where id=$rid"));
        $rname = $rdata['name'];
        $remail = $rdata['email'];
        $rtype = $rdata['type'];
        $raddress = $rdata['address'];

        echo "<div class='adContainer'>
        
        <h2>$title</h2>
        <img src='uploads/$img'>
        <p><span>Posted On : </span>$cdate</p>
        <p>$description</p>
        <p><span>Openings : </span>$openings</p>
        <p><span>Last Date : </span>$lastdate</p>
        <h3>Recruiter details</h3>
        <p><span>name : </span>$rname</p>
        <p><span>Address : </span>$raddress</p>
        <p><span>Type : </span>$rtype</p>
        <p><span>Email : </span>$remail</p>
        <a href='$url' target='_blank'>Visit</a>
        
        
        
        
        
        
        
        
        
        </div>";
    }
    else{
        echo $con->error;
    }
















?>
</div>
</main>
</body>
</html>