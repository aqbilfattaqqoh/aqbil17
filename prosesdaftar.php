<?php
session_start();


   require_once("connect.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $usia = $_POST['usia'];
   $nim = $_POST['nim'];
   $jurusan = $_POST['jurusan'];
   $biografi = $_POST['biografi'];
   $gender = $_POST['gender'];
   $website = $_POST['website'];
   $email = $_POST['email'];
   $level=$_POST['level'];

   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $connection->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     }else if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
{ 

echo"<div align='center'>CAPTCHA salah, coba kembali! <a href='daftar.php'>Back</a></div>";
}

      else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$pass','$usia', '$nim', '$jurusan', '$biografi', '$gender', '$website', '$email', '$level')";
       $simpan = $connection->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>

