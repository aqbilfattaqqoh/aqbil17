<?php
   session_start();
   require_once("connect.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $connection->query($sql);
   $hasil = $query->fetch_assoc();
   
if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='index.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='index.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
      $_SESSION['level'] = $hasil['level'];
      if($hasil['level']=="admin"){
            header("location:admin.php");
        }
    else if($hasil['level']=="manager"){
            header("location:pengguna.php");
        }
     }
   }

?>