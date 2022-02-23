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

        echo "<div class='adContainer'>
        
        <h2>$title</h2>
        <img src='uploads/$img'>
        <p><span>Posted On : </span>$cdate</p>
        <p>$description</p>
        <p><span>Openings : </span>$openings</p>
        <p><span>Last Date : </span>$lastdate</p><br>
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