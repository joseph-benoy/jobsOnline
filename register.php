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
    <div class="regWrap">
        <h1>Recruiter Sign Up</h1>
        <form method="post" action="reg.php">
            <label>Name</label><br>
            <input type="text" name="name" placeholder="Recruiter name" required><br>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Recruiter email" required><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <label>Address</label><br>
            <textarea name="address" cols="31">
            </textarea><br>
            <label>Type</label><br>
            <input type="text" name="type" placeholder="Recruiter type" required><br>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>