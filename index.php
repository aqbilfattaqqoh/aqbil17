<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:admin.php'); }
   require_once("connect.php");
?>

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<html>
<head>
<title>Login Form </title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="proseslogin.php" method="post">
            <p>Username</p>
            <input type="text" class="form-control" name="username" placeholder="Username" required=""> 
            <p>Password</p>
            <input type="password" class="form-control" name="password" placeholder="Password" required=""> 
            <input type="submit" name="" value="Login">
            <a href="daftar.php">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>
