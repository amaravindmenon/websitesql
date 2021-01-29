<?php
$user = 'root';
$password = 'root';
$db = 'sql';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "select * from data where username='$user' and password='$pass'";
$execute = mysqli_query($link,$query);
while($row=mysqli_fetch_array($execute)){
    header("location:welcome.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align="center">
    <h1> login FORM </h1>
    <form action="login.php" method="post">
    <input type="text" name="username" id=""><br /><br />
    <input type="password" name="password" id=""><br /><br />
    <input type="submit" value="submit">
    </form>
</div>
</body>
</html>