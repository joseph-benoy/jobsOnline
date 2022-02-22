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
    <div class="loginWrap">
        <h1>Login</h1>
        <select id="loginSelect" onchange="changeLogin()">
            <option value="admin">Admin</option>
            <option value="recruiter" selected>Recruiter</option>
        </select>
        <form method="post" action="recruiterLogin.php" id="loginForm">
            <label for="email">Email</label><br>
            <input type="email" placeholder="Your email" name="email" required><br>
            <label for="password">Password</label><br>
            <input type="password" placeholder="Your password" name="password" required><br>
            <button type="submit">Sign In</button>
        </form>
    </div>
    <script>
        const changeLogin = ()=>{
            const selectValue = document.getElementById("loginSelect").value;
            if(selectValue==="admin"){
                document.getElementById("loginForm").setAttribute("action","adminLogin.php");
            }
            else{
                document.getElementById("loginForm").setAttribute("action","recruiterLogin.php");
            }
        }
    </script>
</body>
</html>