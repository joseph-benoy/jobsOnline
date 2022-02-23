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
        <a  class="active"  href="jobs.php">Jobs</a>
        <a href="login.php">Login</a>
        <a href="register.php">Sign Up</a>
    </span>
</header>
<main>
    <form class="search">
        <input type="search" name="search" placeholder="search" required>
        <button type="submit">search</button>
    </form>
    <?php
    if(isset($_GET['search'])){
        $keyword = $_GET['search'];
        $query = "select * from job where title like '$keyword%' ";
        if($result = $con->query($query)){
            echo "<div  class='search-error'><h1>Results for $keyword</h1></div>    <div class='adWrap'>
            ";
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $title = $row['title'];
                    $id= $row['id'];
                    $img = $row['img'];
                    $cdate = $row['date'];
                    echo "
                        <div class='adItem'>
                            <h3>$title</h3>
                            <img src='uploads/$img'><br><br>
                            <a href='ad.php?id=$id'>Know more</a>
                        </div>
                    ";
                }
            }
            else{
                echo "<h1 class='search-error'>Nothing found!</h1>";
            }
        }
    }
    else{
        $sql = "select * from job";
        if($result=$con->query($sql)){
            while($row = mysqli_fetch_assoc($result)){
                $title = $row['title'];
                $id= $row['id'];
                $img = $row['img'];
                $cdate = $row['date'];
                echo "
                    <div class='adItem'>
                        <h3>$title</h3>
                        <img src='uploads/$img'><br><br>
                        <a href='ad.php?id=$id'>Know more</a>
                    </div>
                ";
            }
        }
        else{
            echo $con->error;
        }
    }
















?>
</div>
</main>
</body>
</html>