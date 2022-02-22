
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
    <?php include("includes/header.php");?>
    <div class="reg">
    <?php
    require("includes/connection.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $address = $_POST['address'];
    $type = $_POST['type'];
    $sql = "insert into recruiter(name,email,password,address,type)values('$name','$email','$password','$address','$type')";
    if($con->query($sql)){
        echo "<h1>Account created. Login Now!</h1>";
    }
    else{
        echo "<h1>Failed to create account. Try again!</h1>";
    }
?>
    </div>
</body>
</html>