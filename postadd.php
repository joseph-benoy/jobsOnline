<?php
session_start();
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
    <?php include("includes/lhead.php");?>
    <?php
        require("includes/connection.php");
        $title = $_POST['title'];
        $description = mysqli_real_escape_string($con,trim($_POST['description']));
        $openings = $_POST['openings'];
        $rid = $_POST['rid'];
        $lastdate = $_POST['date'];
        $url = $_POST['url'];
        $img = $_FILES['image']['name'];
        $cdate = date('Y-m-d H:i:s');
        move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$img);
        $sql = "insert into job(title,img,description,rid,date,openings,last_date,url)values('$title','$img','$description',$rid,'$cdate',$openings,'$lastdate','$url')";
        if($con->query($sql)){
            echo "<h1 style='text-align:center'>Posted Ad!</h1><br>";
            echo "<div class='posted'>
                <h3>$title</h3>
                <p>$description</p>
                <p>Openings : $openings</p>
                <a href='$url' target='_blank'>Visit</a>
                <p>LastDate : $lastdate</p>
            </div>";
        }
        else{
            echo "<h1>Failed to post Ad! :".$con->error."</h1>";
        }

        echo "<a href='rdash.php' style='text-align:center' class='goback'>Go back</a>";











?>
</body>
</html>