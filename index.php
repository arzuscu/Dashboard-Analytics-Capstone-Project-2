<?php include 'Php/php.php';?>
<?php include 'Php/login.php';?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <link rel="stylesheet" href="StyleCSS/Login.css">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1 .0">
    <title>Dashboard Login</title>
</head>

<header>
</header>

<body>
    <form name="myForm" action="#" method="POST" class="form">
    <div class="imgcontainer">
        <img src="Images/LogoDBA1.PNG" alt="logo" class="avatar" >
    </div>
    <div class="container">
        <input type="text"  id="username" name="username" placeholder="Username" required>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <input type="submit" id="submit" name="submit" value="Login"></input>
    </div>
    </form>



</body>
</html>


